<?php
namespace App\Http\Controllers;

use App\Product;
use Auth;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request)
    {

        //Patikrinama ar viskas ko reikia yra suvesta
        $request->validate([
            'comment' => 'required',
            'product_id' => 'required',
            'user_id' => 'required',
        ]);
        //Sukuriamas komentaras
        Comment::create($request->all());
        
        //Grazinama atgal i produkta
        return back();
    }
    public function delete(Request $request)
    {
        $komentaras->delete();

        return redirect()->route('products.index')
                        ->with('success','Comment deleted successfully');
    }
}