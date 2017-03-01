<?php
namespace App\Http\Composers;
use App\Meny;
use Illuminate\Contracts\View\View;

/**
 * Created by PhpStorm.
 * User: Vitalik
 * Date: 27.02.2017
 * Time: 21:12
 */
class NavigateHeader {


    /**
     * @param View $view
     */
    public function compose (View $view)
    {
        $view->with(['nav_category' => Meny::all()]);

    }

}