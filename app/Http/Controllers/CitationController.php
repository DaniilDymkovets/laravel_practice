<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class CitationController extends Controller
{
 private $array = array("a", "b", "c", "d",);
    public function show(){
        $index = rand(0,count($this->array)-1);
        $citation = $this->array[$index];
        return view('inspire', compact('citation'));
    }
}
