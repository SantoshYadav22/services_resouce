<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service\OopServiceInterface; 

class OopController extends Controller
{
    function doOops(OopServiceInterface $doOop_service){
        $doOop_service->doOop();
    }
}
