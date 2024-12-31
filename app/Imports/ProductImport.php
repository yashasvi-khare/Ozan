<?php

namespace App\Imports;

use App\Models\MarketProduct;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ProductImport implements ToModel,WithHeadingRow
{
    public $category;
    public function __construct($category)
    {
        $this->category = $category;
    }
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new MarketProduct([
        'title'=>$row['title'],
        'picture'=>$row['picture'],
        'description'=>$row['description'],
        'price'=>$row['price'],
        'quantity'=>$row['quantity'],
        'category'=> $this->category,
        'discount'=>$row['discount']
        ]);
    }
}
