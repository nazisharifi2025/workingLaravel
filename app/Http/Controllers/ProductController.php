<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
     public function addDeta(){
       $allPro =  new Product();
       $allPro->name = 'watermelon';
       $allPro->price = 220;
       $allPro->save();
       return "inserted ";
    }
    public function ReadAll(){
        $pro = Product::all();
        
        return $pro ;
    }
    public function filterRead(){
       $fil =  Product::select('name', 'Price')->get();
       return $fil;
    }
    public function if(){
       $ifw =  Product::select('name')->where('id' , '1')->get();
       return $ifw;
    }
    public function finde(){
        $fin = Product::select('name' , 'price')->find(1);
        return $fin;
    }
    public function update(){
        $productUp = Product::find(3);
        $productUp->name = "Banana";
        $productUp->price = 160;
        $productUp->update();
        return ("date Updated");
    }
  

}
