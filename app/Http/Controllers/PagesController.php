<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller {

     public function about()
     {
         $firstName = "Amiya";
         $lastName = "Saha";
         $address = "Green Road";
         
         return view('pages.about', compact('firstName', 'lastName'))
                 ->with('address', $address);
     }

}
