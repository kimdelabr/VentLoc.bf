<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use Cart;

class CartController extends Controller
{
    public function add(Request $request){
            $articleId=$request->id;
            $article = Article::find($articleId);
            $rowId=456;
            $userID=2;

            Cart::add(array(
            'id' => $article->id,
            'name' =>$article->nom,
            'price' => $article->prix,
            'quantity' => $request->quantite_article,
            'attributes' => array('size'=>$request->size_article,
            'color'=>$request->color_article,
            'image'=>$article->imageUrlPrincipale,
            'prix_ttc'=>$article->prixTTC())
            ));

        return redirect(route('cart_index'));
    }

    public function index(){
        $contents = Cart::getContent();
       /*  $quantite = Cart::getTotalQuantity() */
       $prix_htc= Cart::getTotal();
        
        $condition = new \Darryldecode\Cart\CartCondition(array(
            'name' => 'VAT 18%',
            'type' => 'tax',
            'target' => 'subtotal', // this condition will be applied to cart's subtotal when getSubTotal() is called.
            'value' => '18%'
                      
        ));
        
        Cart::condition($condition);
        
        $prix_ttc= Cart::getSubTotal();
        
        $tva= $prix_ttc - $prix_ttc;

         /* dd($contents);  */
        return view('pages/shoping-cart', compact('contents', 'prix_ttc','prix_htc','tva'));
    }

    public function applyCoupon(){
        $coupon_name=$request->coupon;//on cherce les infos du coupon
        $coupon_value = '-5%';
        $article = Article::find($request->id);
        $productID = 1;
        $coupon = new CartCondition(array(
            'name' => $request->coupon,
            'type' => 'coupon',
            'value' => '-5%',
        ));

        Cart::addItemCondition($productID, $coupon);

        return redirect(route('cart_index'));
        

    }
    
    public function updateCart(){

        Cart::update(1, array(
            'name' => 'New Item Name', // new item name
            'price' => 98.67, // new item price, price can also be a string format like so: '98.67'
          ));        
        return redirect(route('cart_index'));
    }
}
