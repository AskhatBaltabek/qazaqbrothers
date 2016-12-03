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
        ],
        'post' => [
            'create' => ['func' => 'postCreateModel'],
            'edit' => ['func' => 'postEditModel', 'id_required' => true],
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

        return $this->handleModelAction($request, $model_name, $model_action, $id, 'get');
    }

    public function postModelAction (Request $request, $model_name, $model_action = 'edit', $id = null)
    {
        return $this->handleModelAction($request, $model_name, $model_action, $id, 'post');
    }



    private function handleModelAction (Request $request, $model_name, $model_action, $id, $method) {
        $model_action = strtolower($model_action);
        $model_class = $this->getModelClass($model_name);

        $this->model_class = $model_class;
        $this->model_name = $model_name;
        $this->model_id = $id;
        $this->model_action = $model_action;

        if ( isset($this->methods[$method][$model_action]) ) {
            $action_func = $this->methods[$method][$model_action]['func'];

            if ( isset($this->methods[$method][$model_action]['id_required'])
                && ! $id ) {
                return redirect()->route('admin:dashboard');
            }

            return $this->$action_func($request);
        }

        return redirect()->route('admin:dashboard');
    }

    private function getModel (Request $request)
    {
        $model_class = $this->model_class;
        $data = $model_class::getWithRelations($this->model_id);

        if ($this->model_id) {
            return view('admin.model.show', ['data' => $data]);
        }
        
        return view('admin.model.index', ['data' => $data]);
    }

    private function getCreateModel (Request $request)
    {
        $data = new $this->model_class();

        return view('admin.model.edit', ['data' => $data]);
    }

    private function getEditModel (Request $request)
    {
        $model_class = $this->model_class;
        $data = $model_class::findOrFail($this->model_id);

        return view('admin.model.edit', ['data' => $data]);
    }

    private function deleteModel (Request $request)
    {
        $model_class = $this->model_class;
        $data = $model_class::findOrFail($this->model_id);

        $data->delete();

        return redirect()->back();
    }

    private function getTrashedModel (Request $request)
    {
        $model_class = $this->model_class;
        if ($this->model_id) {
            $data = $model_class::onlyTrashed()->findOrFail($this->model_id);
            return view('admin.model.show', ['data' => $data, 'trashed' => true]);
        }
        
        $data = $model_class::onlyTrashed()->get();

        return view('admin.model.index', ['data' => $data, 'trashed' => true]);
    }

    private function restoreModel (Request $request)
    {
        $model_class = $this->model_class;
        $data = $model_class::onlyTrashed()->findOrFail($this->model_id);

        $data->restore();

        return redirect()->back();
    }

    private function forceDeleteModel (Request $request)
    {
        $model_class = $this->model_class;
        $data = $model_class::onlyTrashed()->findOrFail($this->model_id);

        $data->forceDelete();

        return redirect()->back();
    }

    private function postEditModel (Request $request)
    {
        $model_class = $this->model_class;
        $data = $model_class::findOrFail($this->model_id);
        $inputs = [];

        if ( isset($data->inputs) ) {
            foreach ($data->inputs as $key => $value) {
                $inputs[$key] = $request->get($key);
            }
        } else {
            $inputs = array_except($request->input(), ['_token', 'deleted_at']);
        }

        $data->update($inputs);

        return redirect()->route('admin:getModelAction', [$this->model_name, 'show', $this->model_id]);
    }

    private function postCreateModel(Request $request)
    {
        $model_class = $this->model_class;
        $inputs = [];

        if ( isset($data->inputs) ) {
            foreach ($data->inputs as $key => $value) {
                $inputs[$key] = $request->get($key);
            }
        } else {
            $inputs = array_except($request->input(), ['_token', 'deleted_at']);
        }

        $data = $model_class::create($inputs);

        return redirect()->route('admin:getModelAction', [$this->model_name, 'show', $data->id]);
    }

}
