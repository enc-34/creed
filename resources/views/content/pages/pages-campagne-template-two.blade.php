@extends('layouts/contentNavbarLayout')

@section('title', 'Campagne statistic - Pages')

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
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Retour</button>
        </form>
      </div>
 </nav><br><br><br>

  <!-- Headings -->
  <div class="col">

    <div class="card mb-3">
      <h5 class="card-header">Langues</h5>
      <table class="table table-borderless"><hr class="dropdown-divider"><br>
        <tbody>
        <tr>
            <p class="mb-0">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
               English
            </p>
          </tr>
          <tr>
          <td class="py-3">
               <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                    <option selected>Ajouter une langue</option>
                    <option value="1">English</option>
                    <option value="2">French</option>
                    <option value="3">Mandara</option>
                </select>
          </td>
          </tr>                            
        </tbody>
      </table>
    </div>
  </div>
  <!-- Customizing headings -->

  
  
  <div class="col-lg-5">
          <!-- Input Sizing -->
  
     <div class="card mb-4">
      <h5 class="card-header">Modifier le modele <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Envoyer</button>
      </h5>
      <div class="card-body">

      <hr class="dropdown-divider">
      <h5 class="card-header">Mode d'envoie des messages</h5>
      Choisissez comment vos clients enverrons le code à vos applications depuis whatsapp.Apprenez à envoyer des
      <a href="#"> Authentification de modèle de message</a>
      <br><br>
           <p> 
           <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
               saisir automatique<i class="bx bxs-message-square-error"></i><br>
               Recommandé comme option la plus simple pour vos clients.Le code est envoyé à votre application
               quand un client appuie sur le bouton.Un message copier le code est envoyé quand la saisie automatique
               n'est pas disponible.
            </p>
      <div class="p-3 mb-2 bg-light text-dark $gray-500">
        <div class="mb-3">
          <label for="defaultInput" class="form-label">Nom du package</label>
          <input id="defaultInput" class="form-control" type="text" placeholder="Entrer le texte(com.example.myapplication)" />
        </div>
        <div>
          <label for="smallInput" class="form-label">Hash de la signature de l'application</label>
          <input id="smallInput" class="form-control form-control-sm" type="text" placeholder="Entrer le texte" />
        </div><br>
      </div>
           <p> 
             <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
               Copier le code<i class="bx bxs-message-square-error"></i>
            </p>
            une authentification basique et rapide à configurer
            <p><br> 
            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
               Ajouter une recommandation de securité<i class="bx bxs-message-square-error"></i>
            </p>
            <h5>Contenu du message</h5>
            Vous pouvez utiliser des modifications suplementaire pour .....
            <p> 
             <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
               Copier le code<i class="bx bxs-message-square-error"></i>
            </p>
            une authentification basique et rapide à configurer

            <p> 
            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
               Ajouter une recommandation de securité<i class="bx bxs-message-square-error"></i>
            </p>
      </div>
      
    </div>
  
  </div>

    

  <div class=" h-100 col">
    <div class="card mb-4">
      <h5 class="card-header">Aperçu du message <small class="text-muted ms-1">Default</small></h5>
      <table class="table table-borderless"><hr class="dropdown-divider">
        <tbody>
          <tr>
            <td class="align-middle"><small class="text-light fw-semibold">Heading 1</small></td>
            <td class="py-3">
              <h1 class="mb-0">Bootstrap <small class="text-muted">heading</small></h1>
            </td>
          </tr>
          <tr>
           
            <div class="form-group has-warning" id="form-username">
              <label class="control-label" for="username">Your username</label>
              <textarea name="username" id="username" type="text" maxlength="36" class="form-control" ></textarea>
            </div>
            
          </tr>
          <tr>
            
           
            <div class="form-group has-warning" id="form-username">
              <label class="control-label" for="username">Your username</label>
              <textarea name="username" id="username" type="text" maxlength="36" class="form-control" ></textarea>
            </div>
            
          </tr>
          <tr>
            <td><small class="text-light fw-semibold">Heading 4</small></td>
            <td class="py-3">
              <h4 class="mb-0">Bootstrap <small class="text-muted">heading</small></h4>
            </td>
          </tr>
         
        </tbody>
      </table>
    </div>
  </div>
</div>

@endsection