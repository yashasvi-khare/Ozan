<?php

namespace App\Imports;
use App\Models\CafeProduct;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class CafeProductImport implements ToModel,WithHeadingRow
{
    
    public function model(array $row)
    {
        return new CafeProduct([
            'menu_id' => $row['menu'], 
            'name' => $row['name'],    
            'status' => $row['status'],  
            'price' => $row['price'],   
            'image' => $row['image'],   
        ]);
    }
}
