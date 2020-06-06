<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoritesController extends Controller
{
    public function favorite(Request $request)
    {
        
        
       
        ]);

        return back();
    }//
    
    public function unfaborite($id)
    {
        
         $id->delete();

        return back();
    }
    
    
}
