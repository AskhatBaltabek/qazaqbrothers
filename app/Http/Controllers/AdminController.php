<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends BaseController
{
    private $methods = [
        'get' => [
            'show' => ['func' => 'getModel'],
            'create' => ['func' => 'getCreateModel'],
            'edit' => ['func' => 'getEditModel', 'id_required' => true],
            'delete' => ['func' => 'deleteModel', 'id_required' => true],
            'trashed' => ['func' => 'getTrashedModel'],
            'restore' => ['func' => 'restoreModel', 'id_required' => true],
            'force_delete' => ['func' => 'forceDeleteModel', 'id_required' => true]
        ]
    ];

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

    public function getModelAction (Request $request, $model_name, $model_action = 'show', $id = null)
    {
        \View::share('page_action', $model_action);

        $model_action = strtolower($model_action);
        $model_class = $this->getModelClass($model_name);

        if ( isset($this->methods['get'][$model_action]) ) {
            $action_func = $this->methods['get'][$model_action]['func'];

            if ( isset($this->methods['get'][$model_action]['id_required'])
                && ! $id ) {
                return redirect()->route('admin:dashboard');
            }

            return $this->$action_func($request, $model_class, $id);
        }

        return redirect()->route('admin:dashboard');
    }

    private function getModel (Request $request, $model_class, $id = null)
    {
        if ($id) {
            $data = $model_class::findOrFail($id);
            return view('admin.model.show', ['data' => $data]);
        }
        
        $data = $model_class::all();

        return view('admin.model.index', ['data' => $data]);
    }

    private function getCreateModel (Request $request, $model_class)
    {
        $data = new $model_class();

        return view('admin.model.edit', ['data' => $data]);
    }

    private function getEditModel (Request $request, $model_class, $id)
    {
        $data = $model_class::findOrFail($id);

        return view('admin.model.edit', ['data' => $data]);
    }

    private function deleteModel (Request $request, $model_class, $id)
    {
        $data = $model_class::findOrFail($id);

        $data->delete();

        return redirect()->back();
    }

    private function getTrashedModel (Request $request, $model_class, $id = null)
    {
        if ($id) {
            $data = $model_class::onlyTrashed()->findOrFail($id);
            return view('admin.model.show', ['data' => $data, 'trashed' => true]);
        }
        
        $data = $model_class::onlyTrashed()->get();

        return view('admin.model.index', ['data' => $data, 'trashed' => true]);
    }

    private function restoreModel (Request $request, $model_class, $id)
    {
        $data = $model_class::onlyTrashed()->findOrFail($id);

        $data->restore();

        return redirect()->back();
    }

    private function forceDeleteModel (Request $request, $model_class, $id)
    {
        $data = $model_class::onlyTrashed()->findOrFail($id);

        $data->forceDelete();

        return redirect()->back();
    }

}
