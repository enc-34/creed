@extends('layouts/contentNavbarLayout')

@section('title', 'Campagne bord - Pages')

@section('content')
<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light"> Tableau Bord  </span> Campagne
</h4>

<style>
  .button{
    text-align: center;
    margin-right: auto;
    justify-content: right;
    text-align: right;
  
  }
.order-card {
    color: #fff;
}

.bg-c-blue {
    background: linear-gradient(45deg,#4099ff,#73b4ff);
}

.bg-c-green {
    background: linear-gradient(45deg,#2ed8b6,#59e0c5);
}

.bg-c-yellow {
    background: linear-gradient(45deg,#FFB64D,#ffcb80);
}

.bg-c-pink {
    background: linear-gradient(45deg,#FF5370,#ff869a);
}


.card {
    border-radius: 5px;
    -webkit-box-shadow: 0 1px 2.94px 0.06px rgba(4,26,55,0.16);
    box-shadow: 0 1px 2.94px 0.06px rgba(4,26,55,0.16);
    border: none;
    margin-bottom: 30px;
    -webkit-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
}

.card .card-block {
    padding: 25px;
}

.order-card i {
    font-size: 26px;
}

.f-left {
    float: left;
}

.f-right {
    float: right;
}
</style>

<div class="row">
  <div class="col-md-12">
    <ul class="nav nav-pills flex-column flex-md-row mb-3">
      <li class="nav-item"><a class="nav-link" href="{{url('pages/account-settings-account')}}"><i class="bx bx-user me-1"></i> Account</a></li>
      <li class="nav-item"><a class="nav-link" href="{{url('pages/account-settings-notifications')}}"><i class="bx bx-bell me-1"></i> Notifications</a></li>
      <li class="nav-item"><a class="nav-link active" href="javascript:void(0);"><i class="bx bx-link-alt me-1"></i> Connections</a></li>
    </ul>
   <br><br>
<div class="button">

        <div class="mt-3">
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalCenter">
          <i  class='bx  bx-plus'></i>            Creer une campagne
          </button>

          <!-- Modal -->
          <form action="{{route('pages-campagne-bord-log')}}" method="post">
          <div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  
                  @csrf
                  <h5 class="modal-title" id="modalCenterTitle">Creer une campagne</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <div class="row">
                    <div class="col mb-3">
                      <label for="nameWithTitle" class="form-label">campaignName</label>
                      <input type="text" name="campaignName"  id="nameWithTitle" class="form-control" placeholder="Enter Name">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col mb-3">
                      <label for="nameWithTitle" class="form-label">campaignContenue</label>
                      <input type="text" name="contenue"  id="nameWithTitle" class="form-control" placeholder="Enter contenue">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col mb-3">
                      <label for="nameWithTitle" class="form-label">campaignObjectif</label>
                      <input type="text" name="objectif"  id="nameWithTitle" class="form-control" placeholder="Enter objectif">
                    </div>
                  </div>
                  <div class="row g-2">
                  <label class="form-label" for="basic-icon-default-message">userlist</label>
            <div class="input-group input-group-merge">
              <select class="form-select form-select-lg" id="inlineFormCustomSelect" name="userList">
                @foreach($user1s as $itemuser)
                  <option value="{{$itemuser->id}}">{{$itemuser->accountId}}</option>
                @endforeach
              </select>
            </div>
                    <div class="col mb-0">
                      <label for="dobWithTitle" class="form-label">planning</label>
                      <input type="date" name="planning" id="dobWithTitle" class="form-control" placeholder="DD / MM / YY">
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div><hr class="m-0" /><br>
      
      <div class="container">
    <div class="row">
        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-blue order-card">
                <div class="card-block">
                    <h6 class="m-b-20">Contacts au total</h6>
                    <h2 class="text-right"><i class="fa fa-rocket f-left"></i><span>0</span></h2>
                    <p class="m-b-0">Completed Orders<span class="f-right">351</span></p>
                    
                </div>
            </div>
        </div>
        
        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-green order-card">
                <div class="card-block">
                    <h6 class="m-b-20">Ouvertures</h6>
                    <h2 class="text-right"><i class="fa fa-rocket f-left"></i><span>0</span></h2>
                    <p class="m-b-0">Pourcentages<span class="f-right">0%</span></p>
                </div>
            </div>
        </div>
        
        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-yellow order-card">
                <div class="card-block">
                    <h6 class="m-b-20">Clics</h6>
                    <h2 class="text-right"><i class="fa fa-refresh f-left"></i><span>486</span></h2>
                    <p class="m-b-0">Pourcentages<span class="f-right">23%</span></p>
                </div>
            </div>
        </div>
        
        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-pink order-card">
                <div class="card-block">
                    <h6 class="m-b-20">Blocklists</h6>
                    <h2 class="text-right"><i class="fa fa-credit-card f-left"></i><span>48</span></h2>
                    <p class="m-b-0">Pourcentages<span class="f-right">35%</span></p>
                </div>
            </div>
        </div>
	</div>
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
  </label>Campaign</th>
         <th>Name</th>
         <th>Objectifs</th>
         <th>Contenue</th>
         <th>Planning</th>
         <th>Contactlist</th>
 
       </tr>
     </thead>
     <tbody>
     @foreach($campaigns as $campaign)
       <tr>
         <th scope="row"><div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
  </label></th>
        
         <td>{{$campaign->campaignName}}</td>
         <td>{{$campaign->compaignObjective}}</td>
         <td>{{$campaign->campaignContenu}}</td>
         <td>{{$campaign->planning}}</td>
         <td>{{$campaign->userList}}</td>
       
        
       </tr>
      
       @endforeach
       <tr>
         <th scope="row"></th>
        
         
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
@endsection
