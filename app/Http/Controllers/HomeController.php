<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Log;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
		/*
		$permissions = Permission::where('guard_name', 'web')->get();
		$role = Role::create(['guard_name' => 'web', 'name' => 'super-admin']);
		$role->givePermissionTo($permissions);
		Log::debug('say hello');
		*/
        return view('home');
    }
}
