<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $table='articles';
    protected $fillable = [
        'nom',
        'prix',
        'description',
        'quantite',
        'noSerie',
        'imageUrl',
        'type_article_id'
    ];
    public static $facteur_tva = 1.2;
   
    public function type_articles(){
        return $this->belongsTo(TypeArticle::class,'type_article_id');
    }

    public function tags(){
        return $this->belongsToMany(Tag::class);
    }

    public function recommandations(){

        return $this->belongsToMany(Article::class,'article_recommande','article_id','article_recommande_id');
    }

    public function prixTTC(){
        $prix_ttc = $this->prix*self::$facteur_tva;
        
        return number_format($prix_ttc,2);

    }
}
