<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TypeArticle;

class TypeArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        TypeArticle::create([
            'nom'=>"voiture",
            'parent_id'=>1
            
        ]);

        TypeArticle::create([
            'nom'=>"piece détachée",
            'parent_id'=>1
            
        ]);

        TypeArticle::create([
            'nom'=>"vente",
            'parent_id'=>1
            
        ]);
      

        
        TypeArticle::create([
            'nom'=>"Location",
            'parent_id'=>1
            
        ]);

        TypeArticle::create([
            'nom'=>"Modèle",
            'parent_id'=>1
            
        ]);


     
        TypeArticle::create([
            'nom'=>"Marque",
            'parent_id'=>1
            
        ]);

 
        TypeArticle::create([
            'nom'=>"Fitration/ Huile /Vidange",
            'parent_id'=>2
            
        ]);

    
        TypeArticle::create([
            'nom'=>"Freinage",
            'parent_id'=>2
            
        ]);

   
        

   
        TypeArticle::create([
            'nom'=>"Bougie - Allumage- Prechauffage",
            'parent_id'=>2
            
        ]);

        TypeArticle::create([
            'nom'=>"Serures - Fermeture",
            'parent_id'=>2
            
        ]);

        TypeArticle::create([
            'nom'=>"Distribution -ouroie - Galet",
            'parent_id'=>2
            
        ]);

  
        TypeArticle::create([
            'nom'=>"Train AV-AR -Direction -Transmission",
            'parent_id'=>2
            
        ]);


        TypeArticle::create([
            'nom'=>"Embrayage - Boite de vitesse",
            'parent_id'=>2
            
        ]);

 
        TypeArticle::create([
            'nom'=>"Compartiment moteur",
            'parent_id'=>2
            
        ]);

  
        TypeArticle::create([
            'nom'=>"Refroidissement moteur",
            'parent_id'=>2
            
        ]);

        TypeArticle::create([
            'nom'=>"Amortiseur - Suspension",
            'parent_id'=>2
            
        ]);


        TypeArticle::create([
            'nom'=>"Fares -Feux - Ampoules",
            'parent_id'=>2
            
        ]);

        

        TypeArticle::create([
            'nom'=>"Accessoires",
            'parent_id'=>2
            
        ]);

        TypeArticle::create([
            'nom'=>"Carrosserie - Retroviseur -Peinture",
            'parent_id'=>2
            
        ]);

    
        TypeArticle::create([
            'nom'=>"lectricité",
            'parent_id'=>2
            
        ]);

        
        TypeArticle::create([
            'nom'=>"Échappement",
            'parent_id'=>2
            
        ]);

    
        TypeArticle::create([
            'nom'=>"Turbo",
            'parent_id'=>2
            
        ]);

 
        TypeArticle::create([
            'nom'=>"Chauffage -Climatisation",
            'parent_id'=>2
            
        ]);

        TypeArticle::create([
            'nom'=>"Portage - Attelage - Remorquage",
            'parent_id'=>2
            
        ]);

      
        TypeArticle::create([
            'nom'=>"Pneus",
            'parent_id'=>2
            
        ]);
    }

}
