<?php
namespace App\Http\Controllers;


use App\Helpers\UploadPaths;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{

    public function __construct()
    {
       // $this->middleware('auth');
    }

    public function index()
    {
       //  $userName = User::find(Auth::id()); //return user object
       // $userName = \Auth::user()->id; //return id only
        $products = Product::with(['user'])->get();
      //  $path = UploadPaths::getUploadPath('product_photos');
        return view('products.index',compact('products'));
    }


    public function create(){
        return view('products.create');
    }
public function save(Request $request){
    $productName = $request->get('product_name');
    $productPrice = $request->get('product_price');
    $fileUrl = $request->file('product_photo');
    //$createdBy = User::find(Auth::id()); //current user id
    $createdBy = \Auth::user()->id;


    if (isset($fileUrl)){
        $productPhotoName = uniqid("product_").'.'.$fileUrl->getClientOriginalExtension(); //product_12569
        $fileUrl->move(UploadPaths::getUploadPath('product_photos'),$productPhotoName);


    }else{
        $productPhotoName = '';
    }
    Product::create([
        'name'=>$productName,
        'price'=>$productPrice,
        'photo'=>$productPhotoName,
        'created_by'=>$createdBy

        ]);

    return back();
}
public function file(){
        UploadPaths::uploadDataFromFile();
}
}
