<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AutocompleteController extends Controller
{
    //for create controller - php artisan make:controller AutocompleteController

    function index()
    {
        return view('user');
    }

    function fetch(Request $request)
    {
        if($request->get('query'))
        {
            $query = $request->get('query');
            $data = DB::table('users')
                ->where('name', 'LIKE', "%{$query}%")
                ->get();
            $output = '<div class="row justify-content-center"><table class="table table-bordered column-m-12" style="display:block; position:relative">';
            foreach($data as $row)
            {
                $output .= '
        <tr>
             <th style="width: 80px">id</th>
             <th>name</th>
             <th>mail</th>
             <th>password</th>
             <th>Admin</th>
             <th style="width: 140px">
             </th>
        </tr>
        <tr>
            <td><a href="#">'.$row->id.'</a></td>
            <td><a href="#">'.$row->name.'</a></td>
            <td><a href="#">'.$row->email.'</a></td>
            <td><a href="#">'.$row->password.'</a></td>
            <td><a href="#">'.$row->admin.'</a></td>
            <td>
                                <a href="'{{route('user.show', $value->id)}}'" class="btn btn-info btn-sm">
                                    <i href="" class="fas fa-search"> </i>
                                </a>
           
                               
                             
        </tr>      
       ';
            }
            $output .= '</table></div>';
            echo $output;
        }
    }

}

