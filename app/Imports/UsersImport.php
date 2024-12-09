<?php

namespace App\Imports;
use App\User;
use DB;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;


class UsersImport implements ToCollection, ToModel, WithHeadingRow
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {
        //
    }
    public function model(array $row)
    {
    //    print_r($row);
       $product_id = $row['product_id'];
       $warranty = $row['warranty'];
       $online_price = $row['online_price'];
       $mrp = $row['mrp'];
       $purchase_price = $row['purchase_price'];
       $availability = $row['availability'];
       $discount_price = $row['discount_price'];
       $scrab_amount = $row['scrab_amount'];

       DB::table('productmaster')->where('ProductId',$product_id)->update(['Warranty' => $warranty, 'OnlinePricing' => $online_price, 'MRP' => $mrp, 'PurchasePrice' => $purchase_price, 'availability' => $availability,
        'discount_percent' => $discount_price, 'scrab_amount' => $scrab_amount]);
    }
    
}


    

