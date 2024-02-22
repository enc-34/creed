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
  
  .p-3{
    background-color: gray;
  }
</style>
<br>
<div class="row">
  @csrf
<nav class="layout-navbar navbar navbar-expand-xl align-items-center bg-navbar-theme" id="layout-navbar">
  <a class="navbar-brand" href="#"><i class="bx bxs-pencil"></i>English.USA</a>
  <span>categories:</span>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="btn-group">
        <button type="button" class="btn btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Secondary</button>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
          <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
          <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
        </ul>
    </div>


      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
      
          <li class="nav-item">
            <a class="dropdown-item" href="#"><i class="bx bx-question-mark"></i>Page d'aide</a>
          </li>

          <li>
               <button  class="btn btn-outline-success my-2 my-sm-0" type="submit" id="submit" ><a class="dropdown-item" href="{{ route('pages-campagne-template-one') }}">Retour</a></button>
          </li>
        </ul>
       
      </div>
 </nav><br><br><br>

 
  
  <div class="h-100 col">
          <!-- Input Sizing -->
  
     <div class="card mb-4">
      <h5 class="card-header">Modifier le modele <button class="btn btn-outline-success my-2 my-sm-0" type="submit" disabled="disabled">Envoyer</button>
      </h5>
      <div class="card-body">

      <hr class="dropdown-divider">
      <h5 class="card-header">Configuration Campagne</h5>
      Choissisez les contacts qui recevront les messages de cette campagne
      <br><br>
         
      <div class="row">
        <div class="col-md-12">
          <div class="card mb-4">
            <h5 class="card-header">De</h5>
            <div class="card-body">
              <div class="mb-3">
                <label for="exampleFormControlSelect1" class="form-label">Sélectionnez le compte WhatsApp Business qui s'affichera.</label>
                <select class="form-select" id="exampleFormControlSelect1" aria-label="Default select example">
                  <option selected>Numéro de téléphone WhatsApp</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
              </div>
            </div>
          </div>
        </div>
    </div>
  <div class="row">
  <div class="col-md-12">
    <div class="card mb-4">
      <h5 class="card-header">À</h5>
      <div class="card-body">
        <div class="mb-3">
          <label for="exampleFormControlSelect2" class="form-label">Sélectionnez une liste de destinataires</label>
          <select multiple class="form-select" id="exampleFormControlSelect2" aria-label="Multiple select example">
            <option selected>Sélectionnez des listes de contacts</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>
        </div>
      </div>
    </div>
  </div>
  </div>
      
    </div>
  
  </div>



<script>
      let inputElt = document.getElementById('exampleFormControlInput1');
        let btn = document.getElementById('submit');
      // on commence par desactiver le bouton quand le javascript se charge
      btn.disabled = true;

      // ajout d'une fonction appelee des qu'une touche est enfoncee
      
      function changement()
          {
          if ((document.getElementById('flexRadioDefault1').checked || document.getElementById('flexRadioDefault2').checked) && (inputElt.value != "") && (document.getElementById('choix1')||document.getElementById('choix2')||document.getElementById('choix3'))){
            btn.disabled = false;
          }
           else {
          btn.disabled = true;
        } 
      } 
</script>

@endsection