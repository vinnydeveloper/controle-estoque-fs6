<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller {
    public $nome;

    public function create(Request $request){

      // fica responsavel por cadastrar um produto

    }

    public function viewForm(Request $request){
        return view('products.form');
    }
}