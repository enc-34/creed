@extends('layouts/contentNavbarLayout')

@section('title', 'Campagne statistic - Pages')



    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous">
</script>
<script src="jquery.emojiarea.js"></script>



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

  .emoji {
  color: transparent;
  display: inline-block;
  font-size: 18px;
  font-style: normal;
  height: 25px;
  width: 25px;
}

.emoji::selection {
  background-color: highlight;
  color: transparent;
}

.emoji-image {
  font-size: 14px;
  line-height: 28px;
}

.emoji-button {
  cursor: pointer;
  margin: 5px;
}

.emoji-editor {
  -moz-appearance: textfield-multiline;
  -webkit-appearance: textarea;
  border: 1px solid #ccc;
  border-radius: 3px;
  box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
  box-sizing: border-box;
  cursor: text;
  font: medium -moz-fixed;
  font: -webkit-small-control;
  -webkit-font-smoothing: antialiased;
  height: 100px;
  overflow: auto;
  padding: 5px;
  resize: both;
  width: 100%;
}

.emoji-picker {
  background-color: #fff;
  border: 1px solid #ccc;
  position: absolute;
  width: 210px;
}

.emoji-picker a {
  cursor: pointer;
  display: inline-block;
  font-size: 20px;
  padding: 3px;
}

.emoji-selector {
  border-bottom: 1px solid #ccc;
  display: flex;
}

.emoji-selector li { margin: 5px; }

.emoji-group {
  grid-template-columns: repeat(6, 16.66667%);
  height: 200px;
  overflow-y: scroll;
  padding: 3px;
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

          <li>
               <button  class="btn btn-outline-success my-2 my-sm-0" type="submit" id="submit" ><a class="dropdown-item" href="{{ route('pages-campagne-template-one') }}">Retour</a></button>
          </li>
        </ul>
       
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

  
  
  <div class="col-lg-5 ">
          <!-- Input Sizing -->
  
     <div class="card mb-4  ">
      <h5 class="card-header">Modifier le modele <button class="btn btn-outline-success my-2 my-sm-0" type="submit" >Envoyer</button>
      </h5>
      <div class="card-body">

      <hr class="dropdown-divider">
      <h5 class="fw-bold py-3 mb-4">
          Titre<span class="text-muted fw-light"><small> Facultatif</small></span>
     </h5>
      Ajouter un titre ou choisissez quel type de media vous utiliserez pour ce titre.
      
      
          
      <div class="p-3 mb-2 bg-light text-dark $gray-500">
        <div class="mb-3">
        <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                    <option selected>Ajouter une langue</option>
                    <option value="1">English</option>
                    <option value="2">French</option>
                    <option value="3">Mandara</option>
                </select>
        </div>

            <h5 class="fw-bold py-3 mb-4">
                Corps
            </h5>
            <div id="message" data-emojiarea data-type="image" data-global-picker="true">
              <textarea name="username"  type="text"  rows="25" cols="30" class="form-control">&#x1f604;"il n'existe que deux choses infinies ,l'univers et la bêtise humaine ...mais pour l'univers je n'ai pas de certitude absolue."</textarea>
              <i class="emoji emoji-smile emoji-button">&#x1f604;</i>
              <button type="submit"  onclick="show('message')"  >get</button>
            </div>
        <br>

      </div>
            <h5 class="fw-bold py-3 mb-4">
               Pied de page <span class="text-muted fw-light"><small> Facultatif</small></span>
            </h5>
            Ajouter une petite ligne de texte en bas de votre modèle de message.Si vous ajouter le 
            bouton de desabonnement aux communications marketing, le pied de page sera affiché ici par defaut. 
            
            <div class="p-3 mb-2 bg-light text-dark $gray-500">
                <div class="mb-3">
                  <input id="defaultInput" class="form-control" type="text" placeholder="Saisie le texte dans French" />
                </div>
                <br>
            </div>
            <h5 class="fw-bold py-3 mb-4">
               Boutons <span class="text-muted fw-light"><small> Facultatif</small></span>
            </h5>
            Creez des boutons qui permettent aux clients de repondre à votre message ou d'effectuer une action. <br>
            <div class="mb-3">
                 <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                    <option selected>Ajouter une langue</option>
                    <option value="1">English</option>
                    <option value="2">French</option>
                    <option value="3">Mandara</option>
                 </select>
            </div>
            <i class="bx bx-bulb"></i>Si vous ajoutez plus de 3 boutons, ils appar  itrons dans une liste.
      </div>
      
    </div>
  
  </div>

    

  <div class=" h-100 col ">
    <div class="card mb-4 bg-secondary bg-lighten-sm">
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
           
           
            
          </tr>
          <tr>
            
           
            <div class="form-group has-warning" id="form-username">
              <label class="control-label" for="username">Your username</label>
              <textarea name="username" id="form-message" type="text" maxlength="36" class="form-control" ></textarea>
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


<script src="/assets/jquery.js" ></script>

<script>

/*$(document).ready(function(){
  $("textarea").change(function show(message){
var content = document.getElementById('message').innerHTML;
document.getElementById('form-message').innerHTML = content;
});
});
$(document).ready(function(){
  $("button").click(function(){
    $("textarea").text("Hello world!");
  });
});*/

      /*ClassicEditor
            .create( document.querySelector( '#message' ) )
            .catch( error => {
                console.error( error );
            } );*/
            var toolbarOptions = [
  ['bold', 'italic', 'underline', 'strike'],        // toggled buttons
  ['blockquote', 'code-block'],

  [{ 'header': 1 }, { 'header': 2 }],               // custom button values
  [{ 'list': 'ordered'}, { 'list': 'bullet' }],
  [{ 'script': 'sub'}, { 'script': 'super' }],      // superscript/subscript

   ];

var quill = new Quill('#message', {
  modules: {
    toolbar: toolbarOptions
  },
  theme: 'snow'
})


 EmojiArea.DEFAULTS.assetPath ='./assets/images';

    
</script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

@endsection