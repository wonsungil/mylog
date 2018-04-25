<?php
/**
 * Created by PhpStorm.
 * User: w
 * Date: 2018. 4. 25.
 * Time: PM 12:21
 */

namespace App\Http\Controllers\NameCard;

use App\Http\Controllers\Controller;

class NameCardController extends Controller
{
    public function index()
    {
        return view('namecard.index');
    }
}