<?php

namespace App\Libraries;

use App\Models\Variant;

class DataTable
{
    public function all()
    {
        $value= Variant::all();
        if(!empty($value))
        {
            return $value;
        }
        else{
            throw new \Exception("Data Table is empty");
        }
    }
}
