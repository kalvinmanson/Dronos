<?php

namespace App\Http\Controllers;

use Auth;
use View;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;

abstract class Controller extends BaseController
{
    use DispatchesJobs, ValidatesRequests;

    public function __construct() {
        View::share('current_user', Auth::user());
    }

    public function current_user() {
        return Auth::user();
    }
    public function hasrole($role) {
        //validar solo admin
        $current_user = Auth::user();
        if($current_user->rol == $role) {
            return true;
        } else {
            flash('No tiene permiso para acceder a esta área.', 'danger');
            return false;
        }
    }

}
