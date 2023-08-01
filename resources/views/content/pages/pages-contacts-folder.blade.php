@extends('layouts/contentNavbarLayout')

@section('title', 'folder - contact')

@section('page-script')
<script src="{{asset('assets/js/pages-account-settings-account.js')}}"></script>
@endsection

@section('content')
<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">folder /</span> contact
</h4>


<style>
*{
    margin: 0;
    padding: 0;
    outline: none;
    border: none;
    text-decoration: none;
    box-sizing: border-box;
    font-family: "poppins", sans-serif;
}
body{
    background:white;
}
.first{
    justify-content: right;
    text-align: right;
}

</style>



<div class="first">
 <button type="button" class="btn btn-icon btn-secondary">
                <span class="tf-icons bx bx-bell"></span>
              </button>
              
        <div class="mt-3">
          <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBoth" aria-controls="offcanvasBoth">Ajouter un contact</button>
          <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasBoth" aria-labelledby="offcanvasBothLabel">
            <div class="offcanvas-header">
              <h5 id="offcanvasBothLabel" class="offcanvas-title">Enable both scrolling & backdrop</h5>
              <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body my-auto mx-0 flex-grow-0">
              <p class="text-center">Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero's De Finibus Bonorum et Malorum for use in a type specimen book.</p>
              <button type="button" class="btn btn-primary mb-2 d-grid w-100">Continue</button>
              <button type="button" class="btn btn-outline-secondary d-grid w-100" data-bs-dismiss="offcanvas">Cancel</button>
            </div>
          </div>
          <button type="button" class="btn btn-outline-dark">importer un contact</button>
        </div>

</div>
<hr class="m-0" />
<br> 
<h5>Il s'agit de votre base de donnée. Ici, vous pouvez affiger, gerer et organiser vos contacts.</h5><br>  
<form>
  <div class="form-row align-items-center">
    <div class="col-auto my-1">
      <label class="mr-sm-2" for="inlineFormCustomSelect">Tous les contacts</label>
      <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
        <option selected>Charger une liste ou un segment</option>
        <option value="1">liste1</option>
        <option value="2">liste2</option>
        <option value="3">liste3</option>
      </select>
    </div>
    <div class="col-auto my-1">
      
    </div>
    
  </div>
</form>

<div class="first">

        
        <div class="mt-3">
          <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBackdrop" aria-controls="offcanvasBackdrop">Modifier les attributs d'une colone</button>
          <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasBackdrop" aria-labelledby="offcanvasBackdropLabel">
            <div class="offcanvas-header">
              <h5 id="offcanvasBackdropLabel" class="offcanvas-title">Modifier les attributs d'une colone</h5>
              <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body my-auto mx-0 flex-grow-0">
              <p class="text-center">Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero's De Finibus Bonorum et Malorum for use in a type specimen book.</p>
              <button type="button" class="btn btn-primary mb-2 d-grid w-100">Continue</button>
              <button type="button" class="btn btn-outline-secondary d-grid w-100" data-bs-dismiss="offcanvas">Cancel</button>
            </div>
          </div>
          <div class="input-group input-group-merge">
          <span class="input-group-text" id="basic-addon-search31"><i class="bx bx-search"></i></span>
          <input type="text" class="form-control" placeholder="Search a contact, email..." aria-label="Search..." aria-describedby="basic-addon-search31" />
        </div>
        </div>
        
      </div>
 
<div class="card">

 
 <div class="table-responsive text-nowrap">
   <table class="table">
     <thead>
       <tr class="text-nowrap">
         <th><div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
  </label>Contact</th>
         <th>Abonné</th>
         <th>Blocklisté</th>
         <th>Email</th>
         <th>SMS</th>
         <th>Whatsapp</th>
         <th>Nom</th>
         <th>Dernière modification</th>
         <th>Date d'ajout</th>  
       </tr>
     </thead>
     <tbody>
       <tr>
         <th scope="row"><div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
  </label></th>
         
         <td>Table cell</td>
         <td>Table cell</td>
         <td>Table cell</td>
         <td>Table cell</td>
         <td>Table cell</td>
         <td>Table cell</td>
         <td>Table cell</td>
         <td>Table cell</td>
        
       </tr>
       <tr>
         <th scope="row"><div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
  </label></th>
        
         <td>Table cell</td>
         <td>Table cell</td>
         <td>Table cell</td>
         <td>Table cell</td>
         <td>Table cell</td>
         <td>Table cell</td>
         <td>Table cell</td>
         <td>Table cell</td>
     
       </tr>
       <tr>
         <th scope="row"></th>
        
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td>Ligne par page</td>
         <td><div class="btn-group dropup">
                <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  10
                </button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="javascript:void(0);">20</a></li>
                  <li><a class="dropdown-item" href="javascript:void(0);">50</a></li>
                  <li><a class="dropdown-item" href="javascript:void(0);">100</a></li>
                 
                </ul>
              </div></td>
         <td></td>
         <td><nav aria-label="Page navigation">
            <ul class="pagination">
              <li class="page-item first">
                <a class="page-link" href="javascript:void(0);"><i class="tf-icon bx bx-chevrons-left"></i></a>
              </li>
              <li class="page-item prev">
                <a class="page-link" href="javascript:void(0);"><i class="tf-icon bx bx-chevron-left"></i></a>
              </li>
              <li class="page-item">
                <a class="page-link" href="javascript:void(0);">1</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="javascript:void(0);">2</a>
              </li>
             
              <li class="page-item next">
                <a class="page-link" href="javascript:void(0);"><i class="tf-icon bx bx-chevron-right"></i></a>
              </li>
              <li class="page-item last">
                <a class="page-link" href="javascript:void(0);"><i class="tf-icon bx bx-chevrons-right"></i></a>
              </li>
            </ul>
          </nav></td>
     
       </tr>
     </tbody>
   </table>
 </div>
</div>
</div>


        @endsection


        
