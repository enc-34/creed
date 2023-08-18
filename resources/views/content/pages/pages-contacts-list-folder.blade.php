
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

<div class="container mt-5">

<div class="first">
<div class="mt-3">
          <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBoth" aria-controls="offcanvasBoth">creer une nouvelle liste</button>
          <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasBoth" aria-labelledby="offcanvasBothLabel">
           
            
            <div class="col-xl">
    <div class="card mb-4">
      <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Nouvelle Liste</h5>
      </div>
      <div class="card-body">
        
          <div class="mb-3">
            <form action="" method="post" action="{{route('pages-contacts-list-folder-log') }}">

              @csrf
            <label class="form-label" for="basic-icon-default-fullname">Contact List Name</label>
            <div class="input-group input-group-merge">
              <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-user"></i></span>
              <input type="text" name="listName" class="form-control" id="basic-icon-default-fullname" placeholder="DSIT list" aria-label="Name" aria-describedby="basic-icon-default-fullname2" />
            </div>
          </div>

          <div class="mb-3">
            <label class="form-label" for="basic-icon-default-company">Folder List</label>
            <div class="input-group input-group-merge">
              <span id="basic-icon-default-company2" class="input-group-text"><i class="bx bx-buildings"></i></span>
              <input type="text" name="folderList" id="basic-icon-default-company" class="form-control" placeholder="dossier1" aria-label="folder" aria-describedby="basic-icon-default-company2" />
            </div>
          </div>
          
          <div class="mb-3">
            <label class="form-label" for="basic-icon-default-message">Description</label>
            <div class="input-group input-group-merge">
              <span id="basic-icon-default-message2" class="input-group-text"><i class="bx bx-comment"></i></span>
              <textarea name="description" id="basic-icon-default-message" class="form-control" placeholder="Hi, Do you have a moment to talk DSIT" aria-label="Hi, Do you have a moment to talk Joe?" aria-describedby="basic-icon-default-message2"></textarea>
            </div>
          </div>
          <button type="submit" value="submit" class="btn btn-primary mb-2 d-grid w-100">Create</button>
              <button type="button" class="btn btn-outline-secondary d-grid w-100" data-bs-dismiss="offcanvas">Cancel</button>
        
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
  <tr><th>Id</th><th>Name List</th><th>Folder List</th><th>Description</th></tr> 
  @foreach ($list_contact_blogs as $list_contact_blogs) 
    <tr>
      <td>{{ $list_contact_blogs->id }}</td>
      <td>{{ $list_contact_blogs->listName }}</td>
      <td>{{ $list_contact_blogs->folderList }}</td>
      <td>{{ $list_contact_blogs->description }}</td>
    </tr>
  @endforeach 
  
</table>  
  
</div>   

@endsection

