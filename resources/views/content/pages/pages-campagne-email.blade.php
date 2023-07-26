@extends('layouts/contentNavbarLayout')

@section('title', ' Campagne Email- Pages')

@section('page-script')
<script src="{{asset('assets/js/pages-account-settings-account.js')}}"></script>
@endsection

@section('content')
<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">Email /</span> campagne
</h4>

<style>
.input-group{
  width: 50vh;
}
.button{
    text-align: center;
    margin-right: auto;
    justify-content: right;
    text-align: right;
  
  }
  .h2{
    text-align: center;
  }
  </style>

<div class="button">

        <div class="mt-3">
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalCenter">
          Creer une campagne email
          </button>

          <!-- Modal -->
          <div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="modalCenterTitle">Creer une campagne email</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <div class="row">
                    <div class="col mb-3">
                      <label for="nameWithTitle" class="form-label">Name</label>
                      <input type="text" id="nameWithTitle" class="form-control" placeholder="Enter Name">
                    </div>
                  </div>
                  <div class="row g-2">
                    <div class="col mb-0">
                      <label for="emailWithTitle" class="form-label">Email</label>
                      <input type="text" id="emailWithTitle" class="form-control" placeholder="xxxx@xxx.xx">
                    </div>
                    <div class="col mb-0">
                      <label for="dobWithTitle" class="form-label">DOB</label>
                      <input type="text" id="dobWithTitle" class="form-control" placeholder="DD / MM / YY">
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
        </div>
      </div><br>

   
   <nav class="navbar navbar-example navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
     
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-ex-2" aria-controls="navbar-ex-2" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbar-ex-2">
        <div class="navbar-nav me-auto">
          <b><a class="nav-item nav-link active" href="javascript:void(0)">Tous(0)</a></b>
          <b><a class="nav-item nav-link" href="javascript:void(0)">Envoyées(0) </a></b>
          <b><a class="nav-item nav-link" href="javascript:void(0)">Brouillon(0) </a></b>
          <b><a class="nav-item nav-link" href="javascript:void(0)">Programmées(0) </a></b>
          <b><a class="nav-item nav-link" href="javascript:void(0)">Suspendues(0) </a></b>
          <b><a class="nav-item nav-link" href="javascript:void(0)">En cour d"envoie(0)</a></b>
          <b><a class="nav-item nav-link" href="javascript:void(0)">Archivées(0)</a></b>
        </div>

       
      </div>
    </div>
  </nav>
 
  <hr><br>
<div class="input-group input-group-merge">
          <span class="input-group-text" id="basic-addon-search31"><i class="bx bx-search"></i></span>
          <input type="text" class="form-control" placeholder="ID campagne, Nom" aria-label="Search..." aria-describedby="basic-addon-search31" />
        </div>
        <div class="h2"><br><br>
        <h2>Aucun resultat trouvé</h2></div>

@endsection
