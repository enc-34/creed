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
  .first{
    justify-content: left;
            text-align: left
  }
</style>

<br><br>
<div class="col-xxl">
  
<nav class="navbar navbar-expand-lg navbar-light bg-light mb-5">
  
   <form class="form-inline my-2 my-lg-0">
     <div class="btn-group">
      <i class="bx bx-search"></i>
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
     </div>
    </form>
  
  <div class="btn-group">
        <button type="button" class="btn btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Categories</button>
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

    <div class="btn-group">
        <button type="button" class="btn btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Langues</button>
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

    <div class="btn-group">
        <button type="button" class="btn btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Option select</button>
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

    <div class="btn-group">
        <button type="button" class="btn btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">30 derniers jours</button>
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

    
      <!-- Modal Sizes -->
      <div class="col-lg-4 col-md-6">
        
        <!-- Small Modal -->
        <div class="modal fade" id="smallModal" tabindex="-1" aria-hidden="true">
          <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
              <div class="modal-header">
                
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="row">
                  <div class="col mb-3">
                    <label for="nameSmall" class="form-label">Espace pour le nom du modèle </label>
                    <input type="text" id="nameSmall" class="form-control" placeholder="Enter Name">
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary">Copier</button>
              </div>
            </div>
          </div>
        </div>
       
        
        <div class="demo-inline-spacing">
          <button type="button" class="btn btn-outline-success my-2 my-sm-0" data-bs-toggle="modal" data-bs-target="#smallModal">
            Nom
          </button>
        </div>
     
        </div>
      
      </li>
     
      <li class="nav-item">

    
      <!-- Modal Sizes -->
      <div class="col-lg-4 col-md-6">
        
        
      <!-- Fullscreen Modal -->
      <div class="col-lg-4 col-md-6">
        <div class="mt-3">
          <button type="button" class="btn btn-outline-success my-2 my-sm-0" data-bs-toggle="modal" data-bs-target="#fullscreenModal">
            Comparer
          </button>

          <!-- Modal -->
          <div class="modal fade" id="fullscreenModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="modalFullTitle">Comparer les Modèles</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                <nav class="navbar navbar-light bg-light rounded">
                    
                        <span>Comparer par:</span>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
  <div class="btn-group">
        <button type="button" class="btn btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Taux de blocage</button>
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
      <div class="btn-group">
        <button type="button" class="btn btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">7 derniers jours</button>
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
 </nav><br>
 <div class="row">


  <!-- Headings -->
  <div class="col-lg-9">

    <div class="card mb-3">
    
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Modèle</th>
      <th scope="col">Position</th>
      <th scope="col">Langues</th>
      <th scope="col">Statut</th>
      <th scope="col">Messages envoyés<i class="bx bx-error-circle"></i></th>
      <th scope="col">Messages ouvert<i class="bx bx-error-circle"></i></th>
      <th scope="col">Motif principal<i class="bx bx-error-circle"></i></th>
    </tr>
  </thead>
  
</table>


<table class="table">
  <thead>
  <tr>
          <td class="py-3">
                    <div class="btn-group">
                <button type="button" class="btn btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">7 derniers jours</button>
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
          </td>
          </tr> 
  </thead>
  
</table>

      <table class="table table-borderless">
          <tr>
          <td class="py-3">
                    <div class="btn-group">
                <button type="button" class="btn btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">7 derniers jours</button>
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
          </td>
          </tr>                            
      </table>
    </div>
  </div>
  <!-- Customizing headings -->

  
  
  

    

  <div class=" col">
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
            <td class="align-middle"><small class="text-light fw-semibold">Heading 2</small></td>
            <td class="py-3">
              <h2 class="mb-0">Bootstrap <small class="text-muted">heading</small></h2>
            </td>
          </tr>
          <tr>
            <td><small class="text-light fw-semibold">Heading 3</small></td>
            <td class="py-3">
              <h3 class="mb-0">Bootstrap <small class="text-muted">heading</small></h3>
            </td>
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
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Annuler</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    
     
     </div>
      
      </li>
      

    <li>
           <button type="submit" class="btn btn-outline-success "><a class="dropdown-item" href="{{ route('pages-campagne-template-one') }}">create model</a></button>
       </a>
    </li>
 
    </ul>
   
  </div>
</nav>

<table class="table table-dark table-striped">
   <thead>
   <tr>
        <th>Nom du modele</th>
        <th>Langue</th>
        <th>Status</th>
        <th>Messqge envoye</th>
        <th>Message recu</th>
        <th>Motif principal du blocage</th>
        <th> Derniere mise a jour</th>

      </tr>
   </thead>
   <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
  </tbody>
</table>
</div>




@endsection