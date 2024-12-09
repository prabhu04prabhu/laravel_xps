<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use App\Exports\UsersExport;
use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;
use DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function importExportView()
    {
       return view('import');
    }
   
    public function export() 
    {
        $get_configs = DB::SELECT('SELECT productmaster.ProductID, (SELECT CategoryName from categorymaster WHERE CategoryID = productmaster.CategoryID) as CategoryName, (SELECT BrandName from brandmaster WHERE BrandID = productmaster.BrandID) as BrandName, (SELECT SubBrandName from subbrand WHERE SubBrandID = productmaster.BrandID) as SubBrandName, productmaster.ProductCode, productmaster.ProductModelNo, productmaster.Warranty, productmaster.OnlinePricing, productmaster.MRP, productmaster.PurchasePrice, productmaster.availability, productmaster.discount_percent, productmaster.scrab_amount FROM `productmaster`ORDER BY `productmaster`.`ProductID` ASC');

        return Excel::download(new UsersExport($get_configs), 'products-price.xlsx');
    }
   
    public function import(Request $request) 
    {
        Excel::import(new UsersImport,$request->data);
        // return back();
        return redirect('product_details')->with('success','Product Imported Successfully !!!');
    }
}
