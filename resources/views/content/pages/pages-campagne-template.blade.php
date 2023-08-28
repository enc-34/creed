@extends('layouts/contentNavbarLayout')

@section('title', 'Campagne statistic - Pages')

@section('content')
<nav class="navbar navbar-expand-lg navbar-light bg-light mb-5">
  <div class="container-fluid">
  <form class="d-flex" onsubmit="return false">
  <div class="nav-item d-flex align-items-center">
            <i class="bx bx-search fs-4 lh-0"></i>
            <input type="text" class="form-control border-0 shadow-none" placeholder="Search..." aria-label="Search...">
          </div>
      
      </form>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
       
        <li class="nav-item dropdown">
        <div class="btn-group">
        <button type="button" class="btn btn-outline-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Warning</button>
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
        </li>
        <li class="nav-item dropdown">
        <div class="btn-group">
        <button type="button" class="btn btn-outline-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Warning</button>
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
        </li>
        <li class="nav-item dropdown">
        <div class="btn-group">
        <button type="button" class="btn btn-outline-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Warning</button>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
          <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
          <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
        </ul>
      </div></li>

      <li class="nav-item dropdown">
        <div class="btn-group">
        <button type="button" class="btn btn-outline-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Warning</button>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
          <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
          <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
        </ul>
      </div></li>
    
<li>
     <div class="row gy-3">
      <!-- Modal Sizes -->
      <div class="col-lg-4 col-md-6">
      
        <!-- Small Modal -->
        <div class="modal fade" id="smallModal" tabindex="-1" aria-hidden="true">
          <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel2">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="row">
                  <div class="col mb-3">
                    <label for="nameSmall" class="form-label">Name</label>
                    <input type="text" id="nameSmall" class="form-control" placeholder="Enter Name">
                  </div>
                </div>
                <div class="row g-2">
                  <div class="col mb-0">
                    <label class="form-label" for="emailSmall">Email</label>
                    <input type="text" class="form-control" id="emailSmall" placeholder="xxxx@xxx.xx">
                  </div>
                  <div class="col mb-0">
                    <label for="dobSmall" class="form-label">DOB</label>
                    <input id="dobSmall" type="text" class="form-control" placeholder="DD / MM / YY">
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>
     

        <div class="demo-inline-spacing">
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#smallModal">
            Espace de nom
          </button>

         
        </div>
      </div>

      </li>
      
      <li>
     <div class="row gy-3">
      <!-- Modal Sizes -->
      <div class="col-lg-4 col-md-6">
      
        <!-- Small Modal -->
        <div class="modal fade" id="smallModal" tabindex="-1" aria-hidden="true">
          <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel2">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="row">
                  <div class="col mb-3">
                    <label for="nameSmall" class="form-label">Name</label>
                    <input type="text" id="nameSmall" class="form-control" placeholder="Enter Name">
                  </div>
                </div>
                <div class="row g-2">
                  <div class="col mb-0">
                    <label class="form-label" for="emailSmall">Email</label>
                    <input type="text" class="form-control" id="emailSmall" placeholder="xxxx@xxx.xx">
                  </div>
                  <div class="col mb-0">
                    <label for="dobSmall" class="form-label">DOB</label>
                    <input id="dobSmall" type="text" class="form-control" placeholder="DD / MM / YY">
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>
     

        <div class="demo-inline-spacing">
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#smallModal" >
            Comparer
          </button>

         
        </div>
      </div>

      </li>
        
      </ul>
    
    </div>
  </div>
</nav>

<div class="container">
  <table class="table table-hover">
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
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
        <td>John</td>
        <td>Doe</td>
        <td>John</td>
        <td>john@example.com</td>
      </tr>
      <tr>
        <td>Mary</td>
        <td>Moe</td>
        <td>mary@example.com</td>
        <td>John</td>
        <td>Doe</td>
        <td>John</td>
        <td>john@example.com</td>
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td>july@example.com</td>
        <td>John</td>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
      </tr>
    </tbody>
  </table>
</div>

<div class="card-footer text-right">
  
     <a class="dropdown-item" href="{{ route('pages-campagne-template-one') }}">
      <button type="submit" class="btn btn-primary">Create model</button>
</a>
  
</div>

@endsection