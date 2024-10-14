<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controllermain extends Controller
{
    public function index(){
        return view ('index');   
      }
    public function menumain(){
      return view ('menu-main');   
    }
    public function indexcomponents(){
        return view ('index-components');   
      }
      public function indexmedia(){
        return view ('index-media');   
      }
      public function indexpages(){
        return view ('index-pages');   
      }
      public function indexsettings(){
        return view ('index-settings');   
      }
    
    public function tes(){
      return view ('tes');   
    }
}
