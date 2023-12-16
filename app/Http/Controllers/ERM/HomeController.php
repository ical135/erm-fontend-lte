<?php

namespace App\Http\Controllers\ERM;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $classLink = 'home';

    public function index(Request $request){

        $data['classLink'] = $this->classLink;
        return view('page/erm/'.$this->classLink.'/index', $data);
    }
}
