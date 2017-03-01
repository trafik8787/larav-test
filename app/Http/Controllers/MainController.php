<?php

namespace App\Http\Controllers;

use App\Meny;
use Illuminate\Http\Request;

class MainController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index () {

        return view('pages.home', ['string' => 'sdfsdf']);

    }
}
