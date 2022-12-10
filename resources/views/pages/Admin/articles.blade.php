
@extends('layouts.master')

@section('contenu')
<section class="content">
    <div class="container-fluid">
        <div class="row">        
            <div class="col-md-6">
                <div class="card card-primary">
                    <div class="card-header">
                    <h3 class="card-title">Ajouter un article</h3>
                </div>
                <form action="/admin" method="post">
               @include('sweetalert::alert')
                {{ csrf_field() }}
                    <div class="card-body">
                        <div class="form-group">
                            <label for="nomarticle">Nom</label>
                            <input type="text" class="form-control" id="nomarticle" placeholder="Nom de l'article" name="nomArticleAdmin">
                        </div>
                        <div class="form-group">
                            <label>Type</label>
                            <select class="custom-select" name="typeArticleAdmin"> 
                                <option>Voiture</option>
                                <option>Pièce détachée</option>
                            
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <input type="text" class="form-control" id="description" placeholder="Description" name="descriptionArticleAdmin">
                        </div>
                        <div class="form-group">
                            <label for="PrixArticle">Prix</label>
                            <input type="text" class="form-control" id="PrixArticle" placeholder="Prix" name="prixArticleAdmin">
                        </div>
                        <div class="form-group">
                            <label for="quantitearticle">Quantité</label>
                            <input type="number" class="form-control" id="quantitearticle" placeholder="Quantite de l'article" name="quantiteArticleAdmin">
                        </div>
                        <div class="form-group">
                            <label for="numSeriearticle">Numéro de serie</label>
                            <input type="text" class="form-control" id="numSeriearticle" placeholder="numéero de Serie" name="numSerieArticleAdmin">
                        </div>
                        <div class="form-group">
                            <label for="urlImageArticle">Choix du fichier</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" accept="image/*" class="custom-file-input" id="urlImageArticle" name="urlImageArticleAdmin">
                                    <label class="custom-file-label" for="urlImageArticle">Choisir un fichier</label>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Valider</button>
                    </div>
                </form>
            </div>

            
        </div>

                  <!-- right column -->
                  <div class="col-md-6">
            <!-- Form Element sizes -->
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Modifier l'aspect de la page</h3>
              </div>
              <div class="card-body">
              <form action="/validation" method="post">
               @include('sweetalert::alert')
                {{ csrf_field() }}
                    <div class="card-body">
                        <div class="form-group">
                            <label for="titrepage">Titre</label>
                            <input type="text" class="form-control" id="titrepage" placeholder="Nom de la page" name="titrepage">
                        </div>   
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Valider</button>
                    </div>
                </form>
              </div>
              <!-- /.card-body -->
            </div>

    </div>
</section>
  
@endsection