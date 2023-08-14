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
        <div class="mt-3">
          <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBoth" aria-controls="offcanvasBoth"><i  class='bx  bx-plus'></i>Ajouter un contact</button>
          <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasBoth" aria-labelledby="offcanvasBothLabel">
          <div class="col-xl">
    <div class="card mb-4">
      <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Creer un contact</h5>
        <small class="text-muted float-end"></small>
      </div>
      <div class="card-body">
        <form  id="formcontact"  action="{{route('pages-contacts-contact-GET')}}" method="POST">
           @csrf
          <div class="mb-3">
            <label class="form-label" for="basic-icon-default-fullname">contactName</label>
            <div class="input-group input-group-merge">
              <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-user"></i></span>
              <input type="text" name="contactName" class="form-control" id="basic-icon-default-fullname" placeholder="M Jiofack CEO" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" required />
            </div>
          </div>
          <div class="mb-3">
            <label class="form-label" for="basic-icon-default-company">Company</label>
            <div class="input-group input-group-merge">
              <span id="basic-icon-default-company2" class="input-group-text"><i class="bx bx-buildings"></i></span>
              <input type="text" name="company" id="basic-icon-default-company" class="form-control" placeholder="Dream Smart IT Services SAR." aria-label="ACME Inc." aria-describedby="basic-icon-default-company2" required />
            </div>
          </div>
          <div class="mb-3">
            <label class="form-label" for="basic-icon-default-email">Email</label>
            <div class="input-group input-group-merge">
              <span class="input-group-text"><i class="bx bx-envelope"></i></span>
              <input type="text" name="email" id="basic-icon-default-email" class="form-control" placeholder="john.doe" aria-label="rh@creed.com" aria-describedby="basic-icon-default-email2" required />
              <span id="basic-icon-default-email2" class="input-group-text">info@creed.com</span>
            </div>
            <div class="form-text"> You can use letters, numbers & periods </div>
          </div>
          <div class="mb-3">
            <label class="form-label" for="basic-icon-default-phone">Phone number</label>
            <div class="input-group input-group-merge">
              <span id="basic-icon-default-phone2" class="input-group-text"><i class="bx bx-phone"></i></span>
              <input type="text" name="sms" id="basic-icon-default-phone" class="form-control phone-mask" placeholder="+237690861311" aria-label="658 799 8941" aria-describedby="basic-icon-default-phone2" />
            </div>
            <label class="form-label" for="basic-icon-default-phone">WhatsApp</label>
            <div class="input-group input-group-merge">
              <span id="basic-icon-default-whatsapp" class="input-group-text"><i class="bx bx-phone"></i></span>
              <input type="text" name="whatsapp" id="basic-icon-default-whatsapp" class="form-control phone-mask" placeholder="+237681978368" aria-label="658 799 8941" aria-describedby="basic-icon-default-phone2" required />
            </div>
            
          </div>
          <div class="mb-3">
            <label class="form-label" for="basic-icon-default-message">Description</label>
            <div class="input-group input-group-merge">
              <span id="basic-icon-default-message2" class="input-group-text"><i class="bx bx-comment"></i></span>
              <textarea id="basic-icon-default-message"  name="content1" class="form-control" placeholder="Hi, Do you have a moment to talk Joe?" aria-label="Hi, Do you have a moment to talk Joe?" aria-describedby="basic-icon-default-message2"></textarea>
            </div>
            <label class="form-label" for="basic-icon-default-message">Choice list</label>
            <div class="input-group input-group-merge">
              <select class="form-select form-select-lg" id="inlineFormCustomSelect" name="select">
                @foreach($listContactBlogs as $itemList)
                  <option value="{{$itemList->id}}">{{$itemList->listName}}</option>
                @endforeach
              </select>
            </div>
          </div>
          <button type="submit" class="btn btn-primary">Send</button>
        </form>
      </div>
    </div>
  </div>
          <select class="form-select" disabled>
  <option>1</option>
  <option>2</option>
  <option>3</option>
  <option>4</option>
</select>
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
  </label>contact</th>
         <th>Abonné</th>
         <th>Blocklisté</th>
         <th>Email</th>
         <th>phoneNumber</th>
         <th>Whatsapp</th>
         <th>contactName</th>
         <th>Dernière modification</th>
         <th>Date d'ajout</th>  
       </tr>
     </thead>
     <tbody>
     @foreach($contacts as $contact)
       <tr>
         <th scope="row"><div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
  </label></th>
        
         <td>Yes</td>
         <td>No</td>
         <td>{{$contact->email}}</td>
         <td>{{$contact->phoneNumber}}</td>
         <td>{{$contact->whatsapp}}</td>
         <td>{{$contact->contactName}}</td>
         <td>{{$contact->updated_at}}</td>
         <td>{{$contact->created_at}}</td>
        
       </tr>
      
       @endforeach
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


        
