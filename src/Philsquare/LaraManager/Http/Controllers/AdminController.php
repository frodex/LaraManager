<?php

namespace Philsquare\LaraManager\Http\Controllers;

class AdminController extends Controller {

    public function index()
    {
        return redirect('admin/dashboard');
    }

    public function dashboard()
    {
        return view('laramanager::dashboard.index');
    }

    public function findHome()
    {
        return redirect(config('laramanager.home_uri'));
    }

}