<?php  
namespace App\Service;
use Illuminate\Http\Request;


class OopService implements OopServiceInterface{
    public function doOop($request = 'hello'){
        echo 'santosh '. $request;
    }
}