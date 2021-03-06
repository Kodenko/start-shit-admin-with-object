<?php


namespace App\Core\Parents\Controllers;


use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

abstract class WebController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
