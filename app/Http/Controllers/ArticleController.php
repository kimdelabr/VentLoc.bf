<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\TypeArticle;
use App\Models\Tag;
use Illuminate\Http\Request;

use Alert;
class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     /* $titrepage=""; */
    public function index()
    {   //$articles = Article::all();
        $articles=Article::with('type_articles')->get();
        $type_articles = TypeArticle::All();
        
        return view('/pages/articles', compact('articles','type_articles',));
        
    }

    public function article(Request $request){
        $id=$request->id;
        $article=Article::find($id);
       
        return view('/pages/article-detail', compact('article'));
    }

    public function viewByType(Request $request){
        $matches = ['parent_id'=>null];
        $id=$request->id;
        $type_articles = TypeArticle::where('parent_id',null)->get();
        $type=TypeArticle::find($id);//Pour les sous articles
        /* $articles = Article::where('type_article_id',$id)->get(); */
        $articles=$type->articlesParent;
        return view('/pages/type_article', compact('articles','type_articles','type'));

    }
    public function viewByTag(Request $request){
        $tag=Tag::find($request->id);
        $articles = $tag->articles;
        $type_articles = TypeArticle::where('parent_id',null)->get();
        $type=TypeArticle::find($request->id);//Pour les sous articles
        return view('/pages/type_article', compact('articles','type_articles','tag'));

    }
    public function change(){
        $titrepage = request('titrepage');
        Alert::success('Effectué');
        return redirect()->back();
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $urlImageArticle = "images/";
        $nomArticle = request('nomArticleAdmin');
        $prixrticle = request('prixArticleAdmin');
        $typeArticle = request('typeArticleAdmin');
        $descriptionArticle = request('descriptionArticleAdmin');
        $quantiteArticle = request('quantiteArticleAdmin');
        $numSerieArticle = request('numSerieArticleAdmin');
        $urlImageArticle.=request('urlImageArticleAdmin');

        
        if($typeArticle == "Voiture"){
            $typeArticle =1;
        }
        if($typeArticle == "Pièce détachée"){
            $typeArticle =2;
        }

        Article::create([
            'nom'=>$nomArticle,
            'prix'=>$prixrticle,
            'description' => $descriptionArticle,
            'quantite' => $quantiteArticle,
            'noSerie' =>$numSerieArticle,
            'imageUrlPrincipale' =>$urlImageArticle,
            'imageUrlSeconde' =>$urlImageArticle,
            'imageUrlTroisieme' =>$urlImageArticle,
            'type_article_id' =>$typeArticle
        ]);
        Alert::success('Enregistré');
        return redirect()->back();

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }





public function panier(){
  
}

}
