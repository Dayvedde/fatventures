<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use DB;

class PlayerController extends Controller {
    public function testDB(){
        var_dump("In test DB");
        return view('testFile');
    }
}