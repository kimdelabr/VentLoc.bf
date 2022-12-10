<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Article;

class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Article::create([
            'nom'=>"chaine",
            'prix'=>25,
            'description'=>"Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magnam alias rem itaque autem, non ipsam impedit accusantium explicabo earum delectus. Alias illum repellat earum repellendus laudantium aperiam optio eius in!",
            'quantite'=>3,
            'noSerie'=>"nf25",
            'imageUrlPrincipale'=>"product-01.jpg",
            'imageUrlSeconde'=>"product-01.jpg",
            'imageUrlTroisieme'=>"product-01.jpg",
            'type_article_id'=>2
            
        ]);

        Article::create([
            'nom'=>"lambo",
            'prix'=>500000,
            'description'=>"Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magnam alias rem itaque autem, non ipsam impedit accusantium explicabo earum delectus. Alias illum repellat earum repellendus laudantium aperiam optio eius in!",
            'quantite'=>3,
            'noSerie'=>"nf156",
            'imageUrlPrincipale'=>"product-02.jpg",
            'imageUrlSeconde'=>"product-02.jpg",
            'imageUrlTroisieme'=>"product-02.jpg",
            'type_article_id'=>1
            
        ]);

        Article::create([
            'nom'=>"piece ronde",
            'prix'=>15,
            'description'=>"Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magnam alias rem itaque autem, non ipsam impedit accusantium explicabo earum delectus. Alias illum repellat earum repellendus laudantium aperiam optio eius in!",
            'quantite'=>8,
            'noSerie'=>"ng455",
            'imageUrlPrincipale'=>"product-03.jpg",
            'imageUrlSeconde'=>"product-03.jpg",
            'imageUrlTroisieme'=>"product-0.jpg",
            'type_article_id'=>2
            
        ]);

        Article::create([
            'nom'=>"cle voiture",
            'prix'=>55000,
            'description'=>"Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magnam alias rem itaque autem, non ipsam impedit accusantium explicabo earum delectus. Alias illum repellat earum repellendus laudantium aperiam optio eius in!",
            'quantite'=>3,
            'noSerie'=>"n425",
            'imageUrlPrincipale'=>"product-04.jpg",
            'imageUrlSeconde'=>"product-04jpg",
            'imageUrlTroisieme'=>"product-04.jpg",
            'type_article_id'=>1
            
        ]);

        Article::create([
            'nom'=>"rang rover",
            'prix'=>50000,
            'description'=>"Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magnam alias rem itaque autem, non ipsam impedit accusantium explicabo earum delectus. Alias illum repellat earum repellendus laudantium aperiam optio eius in!",
            'quantite'=>3,
            'noSerie'=>"nf565",
            'imageUrlPrincipale'=>"product-05.jpg",
            'imageUrlSeconde'=>"product-05.jpg",
            'imageUrlTroisieme'=>"product-05.jpg",
            'type_article_id'=>1
            
        ]);

        Article::create([
            'nom'=>"voiture classe",
            'prix'=>200000,
            'description'=>"Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magnam alias rem itaque autem, non ipsam impedit accusantium explicabo earum delectus. Alias illum repellat earum repellendus laudantium aperiam optio eius in!",
            'quantite'=>3,
            'noSerie'=>"nnvb25",
            'imageUrlPrincipale'=>"product-06.jpg",
            'imageUrlSeconde'=>"product-06.jpg",
            'imageUrlTroisieme'=>"product-06.jpg",
            'type_article_id'=>1
            
        ]);

        Article::create([
            'nom'=>"range rover",
            'prix'=>550000,
            'description'=>"Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magnam alias rem itaque autem, non ipsam impedit accusantium explicabo earum delectus. Alias illum repellat earum repellendus laudantium aperiam optio eius in!",
            'quantite'=>2,
            'noSerie'=>"nf25nvb",
            'imageUrlPrincipale'=>"product-07.jpg",
            'imageUrlSeconde'=>"product-07.jpg",
            'imageUrlTroisieme'=>"product-07.jpg",
            'type_article_id'=>1
            
        ]);

        Article::create([
            'nom'=>"voiture noire class",
            'prix'=>300000,
            'description'=>"Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magnam alias rem itaque autem, non ipsam impedit accusantium explicabo earum delectus. Alias illum repellat earum repellendus laudantium aperiam optio eius in!",
            'quantite'=>3,
            'noSerie'=>"nftru25",
            'imageUrlPrincipale'=>"product-08.jpg",
            'imageUrlSeconde'=>"product-08.jpg",
            'imageUrlTroisieme'=>"product-08.jpg",
            'type_article_id'=>1
            
        ]);

        Article::create([
            'nom'=>"decapotable",
            'prix'=>350000,
            'description'=>"Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magnam alias rem itaque autem, non ipsam impedit accusantium explicabo earum delectus. Alias illum repellat earum repellendus laudantium aperiam optio eius in!",
            'quantite'=>3,
            'noSerie'=>"nf2nbv5",
            'imageUrlPrincipale'=>"product-09.jpg",
            'imageUrlSeconde'=>"product-09.jpg",
            'imageUrlTroisieme'=>"product-09.jpg",
            'type_article_id'=>1
            
        ]);

        Article::create([
            'nom'=>"pneu chaine batterie",
            'prix'=>150,
            'description'=>"Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magnam alias rem itaque autem, non ipsam impedit accusantium explicabo earum delectus. Alias illum repellat earum repellendus laudantium aperiam optio eius in!",
            'quantite'=>3,
            'noSerie'=>"nfbvn25",
            'imageUrlPrincipale'=>"product-10.jpg",
            'imageUrlSeconde'=>"product-10.jpg",
            'imageUrlTroisieme'=>"product-10.jpg",
            'type_article_id'=>2
            
        ]);

        Article::create([
            'nom'=>"chaine couroie",
            'prix'=>78,
            'description'=>"Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magnam alias rem itaque autem, non ipsam impedit accusantium explicabo earum delectus. Alias illum repellat earum repellendus laudantium aperiam optio eius in!",
            'quantite'=>3,
            'noSerie'=>"nfnvb25",
            'imageUrlPrincipale'=>"product-11.jpg",
            'imageUrlSeconde'=>"product-11.jpg",
            'imageUrlTroisieme'=>"product-11.jpg",
            'type_article_id'=>2
            
        ]);

        Article::create([
            'nom'=>"piece circulaire",
            'prix'=>75,
            'description'=>"Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magnam alias rem itaque autem, non ipsam impedit accusantium explicabo earum delectus. Alias illum repellat earum repellendus laudantium aperiam optio eius in!",
            'quantite'=>3,
            'noSerie'=>"nf22565",
            'imageUrlPrincipale'=>"product-12.jpg",
            'imageUrlSeconde'=>"product-12.jpg",
            'imageUrlTroisieme'=>"product-12.jpg",
            'type_article_id'=>2
            
        ]);

        Article::create([
            'nom'=>"voiture noire",
            'prix'=>250000,
            'description'=>"Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magnam alias rem itaque autem, non ipsam impedit accusantium explicabo earum delectus. Alias illum repellat earum repellendus laudantium aperiam optio eius in!",
            'quantite'=>3,
            'noSerie'=>"nfvbncbcj25",
            'imageUrlPrincipale'=>"product-13.jpg",
            'imageUrlSeconde'=>"product-13.jpg",
            'imageUrlTroisieme'=>"product-13.jpg",
            'type_article_id'=>1
            
        ]);

        Article::create([
            'nom'=>"voiture blance",
            'prix'=>45000,
            'description'=>"Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magnam alias rem itaque autem, non ipsam impedit accusantium explicabo earum delectus. Alias illum repellat earum repellendus laudantium aperiam optio eius in!",
            'quantite'=>3,
            'noSerie'=>"nfui25",
            'imageUrlPrincipale'=>"product-14.jpg",
            'imageUrlSeconde'=>"product-14.jpg",
            'imageUrlTroisieme'=>"product-14.jpg",
            'type_article_id'=>1
            
        ]);

        Article::create([
            'nom'=>"voiture blanche 1",
            'prix'=>45560,
            'description'=>"Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magnam alias rem itaque autem, non ipsam impedit accusantium explicabo earum delectus. Alias illum repellat earum repellendus laudantium aperiam optio eius in!",
            'quantite'=>3,
            'noSerie'=>"nfgfdh25",
            'imageUrlPrincipale'=>"product-15.jpg",
            'imageUrlSeconde'=>"product-15.jpg",
            'imageUrlTroisieme'=>"product-15.jpg",
            'type_article_id'=>1
            
        ]);

        Article::create([
            'nom'=>"piece ronde 1",
            'prix'=>25,
            'description'=>"Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magnam alias rem itaque autem, non ipsam impedit accusantium explicabo earum delectus. Alias illum repellat earum repellendus laudantium aperiam optio eius in!",
            'quantite'=>3,
            'noSerie'=>"nffdsh1425",
            'imageUrlPrincipale'=>"product-16.jpg",
            'imageUrlSeconde'=>"product-16.jpg",
            'imageUrlTroisieme'=>"product-16.jpg",
            'type_article_id'=>2
            
        ]);
    }
}
