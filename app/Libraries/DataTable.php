<?php

namespace App\Libraries;
use Illuminate\Http\Request;
use App\Models\Variant;

class DataTable
{
    // public function all()
    // {
    //     $value= Variant::all();
    //     if(!empty($value))
    //     {
    //         return $value;
    //     }
    //     else{
    //         throw new \Exception("Data Table is empty");
    //     }
    // }


    public function db()
    {
        $data= Variant::select('sku')->groupBy('variant_id')->count();
        return $data;
    }
}
