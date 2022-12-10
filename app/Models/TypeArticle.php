<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeArticle extends Model
{
    use HasFactory;
    protected $table='type_articles';
    protected $fillable = [
        'nom',
        'parent_id'
    ];
    //Self referencement
    //Recuperer le type article parent d'un type article
    public function parent(){
        return $this->belongsTo(TypeArticle::class,'parent_id');
        
    }
     
    public function childrens(){
        return $this->hasMany(TypeArticle::class,'parent_id');
    }


    //recuperer les articles du type d'article oneToMany
    public function articlesParent(){
        return $this->hasMany(Article::class,'type_article_id');
    }

    //recuperer  des articles situés dans un type d'article enfant au travers d'un tpe d'article parent
    public function articlesChild(){
        return $this->hasManyThrough(Article::class,TypeArticle::class,'parent_id','type_article_id');
    }

   public function articles(){
        $articles = $this->articlesParent()->with('type_articles')->get()->merge($this->articlesChild()->with('type_articles')->get());
        
   }

    
}
