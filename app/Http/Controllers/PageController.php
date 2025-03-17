<?php

namespace App\Http\Controllers;

use App\Models\BillDetail;
use App\Models\Comment;
use App\Models\Product;
use App\Models\Slide;
use App\Models\TypeProduct;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //User
    public function getIndex()
    {
        $slide = Slide::all();
        $new_product = Product::where("new","1")->paginate(4);
        $promotion_product = Product::where("promotion_price",">",0)->paginate(8);
        return view("page.trangchu", compact("slide","new_product","promotion_product"));
    }

    public function getLoaiSP($type)
    {
        $sp_theoloai = Product::where("id_type",$type)->get();
        $type_product = TypeProduct::all();
        $sp_khac = Product::where("id_type",'<>',$type)->paginate(3);
        return view('page.loai_sanpham', compact('sp_theoloai','type_product','sp_khac'));

    }
    public function getDetail(Request $request) 
    {
        $sanpham = Product::where('id',$request->id)->first();
        $splienquan = Product::where('id_type', $sanpham->id_type)
                ->where('id', '!=', $sanpham->id)
                 ->paginate(3);
        $new_product = Product::where("new","1")->paginate(4);

        $best_seller = Product::where('best_seller', '1')
            ->inRandomOrder()
            ->limit(4)->get();

        $comments = Comment::where('id_product',$request->id)->get();
        return view('page.chitiet_sanpham', compact('sanpham','splienquan','new_product','best_seller','comments'));

    }
    public function getLienhe(){		
        return view('page.lienhe');		
    }		
    
    public function getAbout(){		
        return view('page.about');		
    }		
        

    //Admin
    public function getIndexAdmin()
    {
        $products = Product::all();
        return view('pageadmin.admin')->with(['products'=> $products, 'sumSold' =>count(BillDetail::all())]);
    }

    public function getAdminAdd()
    {
        return view('pageadmin.formAdd');
    }

    public function postAdminAdd(Request $request) 
    {
        $product = new Product();
        if($request->hasFile('inputImage')){
            $file = $request->file('inputImage');
            $fileName = $file->getClientOriginalName('inputImage');
            $file->move('source/images/product', $fileName);
        }
        $file_name = null;
        if($request->file('inputImage')){
            $file_name = $request->file('inputImage')->getClientOriginalName();
        }
        $product->name = $request->inputName;
        $product->image = $file_name;
        $product->description = $request->inputDescription;
        $product->unit_price = $request->inputPrice;
        $product->promotion_price = $request->inputPromotionPrice;
        $product->unit = $request->inputUnit;
        $product->new = $request->inputNew;
        $product->id_type = $request->inputType;
        $product->save();
        return $this->getIndexAdmin();
    }

    public function getAdminEdit($id) 
    {
        $product = Product::find($id);
        return view('pageadmin.formEdit')->with(['product'=> $product]);
    }

    public function postAdminEdit(Request $request) 
    {
        $id = $request->editId;

        $product = Product::find($id);
        if($request->hasFile('editImage')){
            $file = $request->file('editImage');
            $fileName = $file->getClientOriginalName('editImage');
            $file->move('source/images/product', $fileName);
        }

        if($request->file('editImage') != null){
            $product ->image = $fileName;
        }

        $product->name = $request->editName;
        $product->description = $request->editDescription;
        $product->unit_price = $request->editPrice;
        $product->promotion_price = $request->editPromotionPrice;
        $product->unit = $request->editUnit;
        $product->new = $request->editNew;
        $product->id_type = $request->editType;
        $product->save();
        return $this->getIndexAdmin();
    }

    public function postAdminDelete($id) 
    {
        $product = Product::find($id);
        $product->delete();
        return $this->getIndexAdmin();
    }
}
