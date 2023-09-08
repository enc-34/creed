@extends('layouts/contentNavbarLayout')

@section('title', 'Campagne statistic - Pages')
@section('page-script')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
@endsection
@section('content')
<b><h4 class="fw-bold py-3 mb-4">
        Modèles de message 
    </h4>
 </b>

<style>
  .collapse{
    justify-content: right;
            text-align: right;
  }
  .nav{
    
    border: 10px;
  }
</style>

<!-- Basic with Icons -->
<div class="col-xxl">


<nav class="layout-navbar navbar navbar-expand-xl align-items-center bg-navbar-theme" id="layout-navbar">
  <h4>Nouveau modele de message</h4>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
      
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
     
      <li class="nav-item">
        <a class="dropdown-item" href="#"><i class="bx bx-question-mark"></i>Page d'aide</a>
      </li>
    
      <li>
         <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><a class="dropdown-item" href="{{ route('pages-campagne-template') }}">Annuler</a></button>
      </li>
      <li>
          <button  class="btn btn-outline-success my-2 my-sm-0" type="submit" id="submit" disabled="disabled" ><a class="dropdown-item" href="{{ route('pages-campagne-template-three') }}">Continuer</a></button>
      </li>
    </ul>
  </div>
</nav><br>

    <div class="card mb-4">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="mb-0">Categories</h5>
      </div>
      <div class="form-text"><h5>Choisissez la categorie qui decrit au mieux votre modele de message.<a href="#">En savoir plus sur les categories</a></h5></div>

      <div class="p-3 mb-2 bg-light text-dark ">
        <form>
        

       <div class="nav-align-top mb-4">
        <ul class="nav nav-tabs nav-fill" role="tablist">
         <li class="nav-item">
          <button type="button" id="choix1" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-justified-home" aria-controls="navs-justified-home" aria-selected="false" onclick="changement()"><i class="bx bxs-briefcase-alt-2"></i>Marketing</button>
         </li>
         <li class="nav-item">
          <button type="button" id="choix2" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-justified-profile" aria-controls="navs-justified-profile" aria-selected="false" onclick="changement()"><i class="bx bxs-bell"></i> Services</button>
         </li>
         <li class="nav-item">
          <button type="button" id="choix3" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-justified-messages" aria-controls="navs-justified-messages" aria-selected="false" onclick="changement()"><i class="bx bxs-key"></i>Authentification</button>
         </li>
        </ul>
       <div class="tab-content">
        <div class="tab-pane fade show active" id="navs-justified-home" role="tabpanel">
         
            <p>
              Les promotions ou informations à propos de votre entreprise , vos produits
              ou vos services, ou tout message qui n'est pas à caractère utilitaire ou lié à
              l'authentification
            </p><br>
        
            <p class="mb-0">   
              <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" onclick="changement()"> 
                Personalisé
                <p>
                  Envoyés des offres promotionnelles, des annonces et plus encores pour augmenter la notoriété et les interactions.
                </p>
            </p>
            <p class="mb-0">
              <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" onclick="changement()">
                 Messages produit
                  <p>
                    Envoyés des messages concernant tout votre catalogue ou certains produits.
                  </p>
            </p>
        </div>
        <div class="tab-pane fade" id="navs-justified-profile" role="tabpanel">
          <p>
            Les messages à propos d'une transaction , d'un compte, d'une commande ou d'une demande client spécifique.
          </p>
         
        </div>
        <div class="tab-pane fade" id="navs-justified-messages" role="tabpanel">
          
          <p class="mb-0">
            Les mots de passe à usage unique que votre clientèle utilise pour authentifier une transaction ou
            connexion.
          </p>
        </div>
      </div>
    </div>
  </div>

 </form>
 
      <div class="card-body">
        <div class="p-3 mb-2 bg-light text-dark rounded">
          
            <label for="exampleFormControlInput1" class="form-label">Name</label>
            <div class="form-text">Donnez un nom à votre modèle de message</div>
            <input type="name" class="form-control" id="exampleFormControlInput1" placeholder="Entrez un nom à votre modele"  onclick="changement()"/>
        </div>
      </div>


        <div class="card-body">
            <div class="p-3 mb-2 bg-light text-dark rounded">              
                <label for="exampleFormControlInput1" class="form-label">Langue</label>
                <div class="form-text">Choisissez les langues pour votre modele de message.vous pourrez les supprimer ou les ajouter plus tard</div>
                          <select class="form-select form-select-lg mb-3" id="exampleFormControlInput1" aria-label=".form-select-lg example">
                            <option selected>Selectionner un langage</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                          </select>
             </div>
        </div>
  </div>
    


  <script>
    /*$(document).ready(function () {
        $('#exampleFormControlInput1').on('input change', function () {
          //$('#submit').prop('disabled', false);
            if ($(this).val() != '') {
                $('#submit').prop('disabled', false);
            }
            else {
                $('#submit').prop('disabled', true);
            }
        });
    });*/
    
   /* document.getElementById('exampleFormControlInput1').addEventListener('input', function(event) {
    document.getElementById('submit').disabled = !this.value;
   }, false);*/

        let inputElt = document.getElementById('exampleFormControlInput1');
        let btn = document.getElementById('submit');
      // on commence par desactiver le bouton quand le javascript se charge
      btn.disabled = true;

      // ajout d'une fonction appelee des qu'une touche est enfoncee
      
      function changement()
          {
          if (document.getElementById('choix1') && (document.getElementById('flexRadioDefault1').checked || document.getElementById('flexRadioDefault2').checked)  && (inputElt.value != "")){
             btn.disabled = false;
          }
           else if ( document.getElementById('choix2') && (inputElt.value != "")){
             btn.disabled = false;
          }
           else if ( document.getElementById('choix3') &&  (inputElt.value != "")){
            btn.disabled = false;
          }
           else {
          btn.disabled = true;
        } 
       
      }

      /*function isCharSet() {
        // on verifie si le champ n'est pas vide alors on desactive le bouton sinon on l'active
        if (inputElt.value != "") {
          btn.disabled = false;
        } 
        else {
          btn.disabled = true;
        }  
      }*/
    
  </script>

@endsection