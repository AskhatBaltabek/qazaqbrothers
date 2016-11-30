<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends BaseController
{

    public function __construct (Request $request)
    {
        \View::share('admin_menu', $this->accessable_models);
        \View::share('page_title', ucfirst(strtolower($request->model_name)));
        \View::share('model_name', strtolower($request->model_name));
    }

    public function dashboard (Request $request)
    {
        return view('admin.index');
    }

    public function getModelAction (Request $request, $model_name, $model_action = null, $id = null)
    {
        // By defualt show action
        if (! $model_action || $model_action == 'show' ) {
            return $this->getModel($request, $model_name, $id);
        }

        \View::share('page_action', strtolower($model_action));

        if (strtolower($model_action) == 'edit' && $id) {
            return $this->getEditModel($request, $model_name, $model_action, $id);
        }

        if (strtolower($model_action) == 'create') {
            return $this->getCreateModel($request, $model_name, $model_action);
        }

        return redirect()->route('admin:dashboard');
    }

    private function getModel (Request $request, $model_name, $id = null)
    {
        $model_class = $this->getModelClass($model_name);

        if ($id) {
            $data = $model_class::findOrFail($id);
            return view('admin.model.show', ['data' => $data]);
        }
        
        $data = $model_class::all();

        return view('admin.model.index', ['data' => $data]);
    }

    private function getEditModel (Request $request, $model_name, $model_action, $id)
    {
        $model_class = $this->getModelClass($model_name);
        $data = $model_class::findOrFail($id);

        return view('admin.model.edit', ['data' => $data]);
    }

    private function getCreateModel (Request $request, $model_name, $model_action)
    {
        $model_class = $this->getModelClass($model_name);
        $data = new $model_class();

        return view('admin.model.edit', ['data' => $data]);
    }
}
