<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Libraries\DataTable;

class DashboardController extends Controller
{
    public function Dashboard()
    {
        return View('/frontend/dashboard');
    }

    public function data(Request $request)
    {
        try{
          $data= new DataTable();
          $value= $data->all();
          return view('/frontend/datatable', compact('value'));
        }
        catch(\Exception $e)
        {
            return redirect('/frontend/dashboard')->withError('data empty');
        }
    }
}
