<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Tank;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Collective\Html\HtmlFacade as HTML;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;


class ResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list = Tank::all();
        
        return View::make('Resources.index')
            ->with('list', $list);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return View::make('Resources.create');
    }


    public function store(Request $request)
    {
        
        $rules = array(
            'name'       => 'required',
            'email'      => 'required|email',
            'shark_level' => 'required|numeric'
        );
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return Redirect::to('tanks/create')
                ->withErrors($validator)
                ->withInput($request->except('password'));
        } else {
            // store
            $tank = new Tank;
            $tank->name       = $request->get('name');
            $tank->email      = $request->get('email');
            $tank->shark_level = $request->get('shark_level');
            $tank->save();

            // redirect
            Session::flash('message', 'Successfully created tanks!');
            return Redirect::to('tanks');
        }
    }


    public function show(string $id)
    {
        $tank = Tank::find($id);

        return View::make('Resources.show')
            ->with('tanks', $tank);
    }


    public function edit(string $id)
    {
        $tank = Tank::find($id);

        return View::make('Resources.edit')
            ->with('tanks', $tank);
    }


    public function update(Request $request, string $id)
    {
        $rules = array(
            'name'       => 'required',
            'email'      => 'required|email',
            'shark_level' => 'required|numeric'
        );
        $validator = Validator::make($request->all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('tanks/' . $id . '/edit')
                ->withErrors($validator)
                ->withInput($request->except('password'));
        } else {
            // store
            $tank = Tank::find($id);
            $tank->name       = $request->get('name');
            $tank->email      = $request->get('email');
            $tank->shark_level = $request->get('shark_level');
            $tank->save();

            // redirect
            Session::flash('message', 'Successfully updated tank!');
            return Redirect::to('tanks');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tank = Tank::find($id);
        $tank->delete();

        // redirect
        Session::flash('message', 'Successfully deleted the tank!');
        return Redirect::to('tanks');

    }
}
