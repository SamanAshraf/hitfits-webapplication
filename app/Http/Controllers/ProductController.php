<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;
use App\Models\File;
use Illuminate\Support\Facades\DB;
class ProductController extends Controller
{
    //
  /*   function cat(){
      $data=DB::table('categories')->get();  
      return view('Addproduct',[$data]);
    } */
    function addData(Request $req)
    {
         $p = new Product;
         $p->productname=$req->pname;
         $p->size=$req->size;
         $p->color=$req->color;
         $p->description=$req->descp;
         $p->salesprice=$req->sname;

         $path = $req->file('photo')->store('images', 'public');
         $p->img =$path;

         $path1 = $req->file('photo1')->store('images', 'public');
         $p->img1 =$path1;

         $path2 = $req->file('photo2')->store('images', 'public');
         $p->img2 =$path2;

         $path3 = $req->file('photo3')->store('images', 'public');
         $p->img3 =$path3;

         $p->category = $req->get('category');
         $p->subcategory = $req->get('subcategory');

            
        $p->save();
          

                 return back()->with('success','Item created successfully!');


                 
        }

    function DeliveryDetails(Request $req)
    {
         $p = new Order;
         $p->products_id=$req->products_id;
         $p->firstname=$req->firstname;
         $p->lastname=$req->lastname;
         $p->address=$req->address;
         $p->city=$req->city;
         $p->postalcode=$req->postalcode;
         $p->contactno=$req->contactno;
         $p->details=$req->details;

             
        $p->save();
          

                 return back()->with('success','Item created successfully!');

          
        }

    

     function AllM(){
        $data=Product::all();
        return view('ALLMEN',['products'=>$data]);
    }
     function singleproduct($id){
        
        $data=Product::find($id);
        return view('singleproduct',['products'=>$data]);
    }

    
     function Mentee(){
        $data=Product::all();
        return view('MENALLPRODUCTS',['products'=>$data]);
    }
     function Mentrou(){
        $data=Product::all();
        return view('MENTrousers',['products'=>$data]);
    }
     function ALLW(){
        $data=Product::all();
        return view('ALLWOMEN',['products'=>$data]);
    }
     function womentee(){
        $data=Product::all();
        return view('allproducts',['products'=>$data]);
    }
     function ALLKIDS(){
        $data=Product::all();
        return view('ALLKIDS',['products'=>$data]);
    }
     function ALLK(){
        $data=Product::all();
        return view('KIDSPRODUCT',['products'=>$data]);
    }

    

    function cart()
    {
        return view('/Checkout');
    }
  
    
    public function addToCart($id)
    {
        $product = Product::findOrFail($id);
          
        $cart = session()->get('cart', []);
  
        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "productname" => $product->productname,
                "productid" => $product->id,
                "quantity" => 1,
                "salesprice" => $product->salesprice,
                "img" => $product->img
            ];
        }
          
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }


    public function updateC(Request $request)
    {
        if($request->id && $request->quantity){
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart updated successfully');
        }
    }

    public function remove(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product removed successfully');
        }
    }
    function list()
        {
                $data = product::all();
                return view('list',['product'=>$data]);
        }

        function delete($id)
        {
                $data= product::find($id); 
                $data->delete();
                return redirect('list');
        }

        function showData($id)
        {
                $data = product::find($id);
                return view('edit',['data'=>$data]);
        }

        function update(request $req)
        {
                $data = product::find($req->id);

                $data->productname=$req->pname;
                $data->salesprice=$req->sname;
                $data->size=$req->size;
                $data->color=$req->color;
                $data->description=$req->descp;
                
                $path = $req->file('photo')->store('images', 'public');
                $data->img =$path;

                $path1 = $req->file('photo1')->store('images', 'public');
                $data->img1 =$path1;

                $path2 = $req->file('photo2')->store('images', 'public');
                $data->img2 =$path2;

                $path3 = $req->file('photo3')->store('images', 'public');
                $data->img3 =$path3;

                $data->category = $req->get('category');
                $data->subcategory = $req->get('subcategory');
                
                
                
                $data->save();

                return redirect('list');

        }

    
}
