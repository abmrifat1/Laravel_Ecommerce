<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
   public function index(){
      $products=Product::where('publication_status',1)->orderBy('id','desc')->take(8)->get();

      return view('front.home.home-content',['products'=>$products]);
   }

   public function category($id){
       $categoryProducts=Product::where('category_id',$id)
           ->where('publication_status',1)
           ->orderBy('id','desc')
           ->get();
       return view('front.category.category-content',[
           'categoryProducts'=>$categoryProducts
       ]);
   }

   public function productDetails($id){

       $product=Product::find($id);
       $relatedProducts=Product::where('category_id',$product->category_id)
           ->orderBy('id','desc')
           ->take(8)
           ->get();
       return view('front.product.product-details', [
           'product'=>$product,
           'relatedProducts'=>$relatedProducts
       ]);
   }


}
