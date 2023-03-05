<?php

namespace App\Http\Controllers;

use App\Models\Cafe;
use Illuminate\Http\Request;
use App\Http\Requests\CafeRequest;


class CafeController extends Controller
{
    public function home()
    {
        return view('cafe/cafe_search');
    }
    
    public function register()
    {
        return view('cafe/cafe_register');
    }
   
    public function create(CafeRequest $request, Cafe $cafe)
    {
        $input = $request['cafe'];
        $cafe->fill($input)->save();
        return view('cafe/cafe_search');
    }
   
    public function search(Request $request)
    {
       $keyword = $request->input('keyword');
       $wifi = $request->input('wifi');
       $outlet = $request->input('outlet');
       $working_space = $request->input('working_space');
       $smorking_space = $request->input('smorking_space');
       $paper_cigarette = $request->input('paper_cigarette');
      
       $query = Cafe::query();
       
       if(!empty($keyword))
       {
           $query->where('name', 'LIKE', "%{$keyword}%")
                 ->orWhere('address', 'LIKE', "%{$keyword}%")
                 ->orWhere('access', 'LIKE', "%{$keyword}%")
                 ->orWhere('tell', 'LIKE', "%{$keyword}%");
       }
       
       if(!empty($wifi))
       {
           $query->where('wifi', 'LIKE', $wifi);
       }
       
       if(!empty($outlet))
       {
           $query->where('outlet', 'LIKE', $outlet);
       }
       
       if(!empty($working_space))
       {
           $query->where('working_space', 'LIKE', $working_space);
       }
       
       if(!empty($smorking_space))
       {
           $query->where('smorking_space', 'LIKE', $smorking_space);
       }
       
       if(!empty($paper_cigarette))
       {
           $query->where('paper_cigarette', 'LIKE', $paper_cigarette);
       }
       
       $cafe = $query->get();
       return view('cafe/cafe_search_result')->with(['cafes' => $cafe]);
    }
    
}
