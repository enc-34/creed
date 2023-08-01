

@extends('layouts/contentNavbarLayout')

@section('title', 'list - Contact')

@section('page-script')
<script src="{{asset('assets/js/pages-account-settings-account.js')}}"></script>
@endsection

@section('content')
<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light"> list /</span> Contact
</h4>
<style>
  .input-group{
  width: 50vh;
}
  .dropdown{
justify-content: right;
text-align: right;
  }
  button{
    text-align: center;
    margin-right: auto;
  }
  .first{
    justify-content: right;
    text-align: right;
  }
  .card-body{
    justify-content: right;
    text-align: right;
  }
</style>


<div class="first">
<div class="mt-3">
          <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBoth" aria-controls="offcanvasBoth">creer une nouvelle liste</button>
          <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasBoth" aria-labelledby="offcanvasBothLabel">
           
            
            <div class="col-xl">
    <div class="card mb-4">
      <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Nouvelle liste</h5>
      </div>
      <div class="card-body">
        <form>
          <div class="mb-3">
            <label class="form-label" for="basic-icon-default-fullname">Full Name</label>
            <div class="input-group input-group-merge">
              <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-user"></i></span>
              <input type="text" class="form-control" id="basic-icon-default-fullname" placeholder="John Doe" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" />
            </div>
          </div>
          <div class="mb-3">
            <label class="form-label" for="basic-icon-default-company">Company</label>
            <div class="input-group input-group-merge">
              <span id="basic-icon-default-company2" class="input-group-text"><i class="bx bx-buildings"></i></span>
              <input type="text" id="basic-icon-default-company" class="form-control" placeholder="ACME Inc." aria-label="ACME Inc." aria-describedby="basic-icon-default-company2" />
            </div>
          </div>
          <div class="mb-3">
            <label class="form-label" for="basic-icon-default-email">Email</label>
            <div class="input-group input-group-merge">
              <span class="input-group-text"><i class="bx bx-envelope"></i></span>
              <input type="text" id="basic-icon-default-email" class="form-control" placeholder="john.doe" aria-label="john.doe" aria-describedby="basic-icon-default-email2" />
              <span id="basic-icon-default-email2" class="input-group-text">@example.com</span>
            </div>
            <div class="form-text"> You can use letters, numbers & periods </div>
          </div>
          <div class="mb-3">
            <label class="form-label" for="basic-icon-default-phone">Phone No</label>
            <div class="input-group input-group-merge">
              <span id="basic-icon-default-phone2" class="input-group-text"><i class="bx bx-phone"></i></span>
              <input type="text" id="basic-icon-default-phone" class="form-control phone-mask" placeholder="658 799 8941" aria-label="658 799 8941" aria-describedby="basic-icon-default-phone2" />
            </div>
          </div>
          <div class="mb-3">
            <label class="form-label" for="basic-icon-default-message">Message</label>
            <div class="input-group input-group-merge">
              <span id="basic-icon-default-message2" class="input-group-text"><i class="bx bx-comment"></i></span>
              <textarea id="basic-icon-default-message" class="form-control" placeholder="Hi, Do you have a moment to talk Joe?" aria-label="Hi, Do you have a moment to talk Joe?" aria-describedby="basic-icon-default-message2"></textarea>
            </div>
          </div>
          <button type="button" class="btn btn-primary mb-2 d-grid w-100">Create</button>
              <button type="button" class="btn btn-outline-secondary d-grid w-100" data-bs-dismiss="offcanvas">Cancel</button
        
        </form></div></div></div></div>
    

</div>
<hr class="m-0" /><br>
</div>

  <select class="form-control form-control-sm">
<i class="bi bi-chevron-compact-down"> <option>votre premier dossier</option>
<i class="bi bi-chevron-compact-down"> <option>creer un nouveau dossier</option></i>
</select>
<em id="total-lists">Vous avez actuellement 1 dossier(s) et 1 liste(s)</em><br><br>

<div class="input-group input-group-merge">
          <span class="input-group-text" id="basic-addon-search31"><i class="bx bx-search"></i></span>
          <input type="text" class="form-control" placeholder="Search contact..." aria-label="Search..." aria-describedby="basic-addon-search31" />
        </div>
<div class="card-body">
    
    <div class="demo-inline-spacing">
      <div class="btn-group">
        <button type="button" class="btn btn-outline-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Action</button>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="javascript:void(0);">Delete</a></li>
          <li><a class="dropdown-item" href="javascript:void(0);">Import a list</a></li>
          <li><a class="dropdown-item" href="javascript:void(0);">Dupliquate</a></li>
          <li><a class="dropdown-item" href="javascript:void(0);">Rename</a></li>
          <li><a class="dropdown-item" href="javascript:void(0);">Copy/paste</a></li>
          <li><a class="dropdown-item" href="javascript:void(0);">Add a contact</a></li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
        </ul>
      </div>


<div class="container">    
  
<table class="table table-striped ">  
  <tr><th>Id</th><th>Nom</th><th>Nombre de contact</th></tr>  
  <tr><td>101</td><td>Raeskov</td><td>23</td></tr>  
  <tr><td>102</td><td>Hadil</td><td>22</td></tr>  
  
</table>  
  
</div>   

@endsection

