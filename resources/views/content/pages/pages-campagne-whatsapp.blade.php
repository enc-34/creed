@extends('layouts/contentNavbarLayout')

@section('title', 'Campagne whatsapp - Pages')

@section('content')
<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">whatsapp /</span> Notifications
</h4>

<style>
  
  .button{
    text-align: center;
    margin-right: auto;
    justify-content: right;
    text-align: right;
  
  }
  .col-md-3{
    width: 50vh;
  }
</style>

<div class="row">
  <div class="col-md-12">
    <ul class="nav nav-pills flex-column flex-md-row mb-3">
      <li class="nav-item"><a class="nav-link" href="{{url('pages/campagne-email')}}"><i class="bx bx-user me-1"></i> Account</a></li>
      <li class="nav-item"><a class="nav-link active" href="javascript:void(0);"><i class="bx bx-bell me-1"></i> Notifications</a></li>
      <li class="nav-item"><a class="nav-link" href="{{url('pages/campagne-whatsapp')}}"><i class="bx bx-link-alt me-1"></i> Connections</a></li>
    </ul>
  </div> 
  <div class="button">          
  <div class="mt-3">
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#basicModal">
            creer une campagne
          </button>

          <!-- Modal -->
          <div class="modal fade" id="basicModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel1">Creer une campagne whatsapp</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <div class="row">
                    <div class="col mb-3">
                      <label for="nameBasic" class="form-label">comment allez vous appeler votre campagne (vous seul pourrez le voir)</label>
                      <input type="text" id="nameBasic" class="form-control" placeholder="Enter Name">
                    </div>
                  </div>
                  <div class="row g-2">
                    <div class="col mb-0">
                      <label for="emailBasic" class="form-label">quel type de campagne aimeriez-vous</label>
                      <input type="text" id="emailBasic" class="form-control" placeholder="xxxx@xxx.xx">
                    </div></div>
                    <div class="col mb-0">
                      <label for="dobBasic" class="form-label">DOB</label>
                      <input type="text" id="dobBasic" class="form-control" placeholder="DD / MM / YY">
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
      </div>
</div>
  <hr class="m-0" />
  <div class="card-body">
    <div class="row gx-3 gy-2 align-items-center">
      <div class="col-md-3">
       <input type="text" class="form-control" i class="bx bx-search" placeholder="Search contact..." aria-label="Search..." aria-describedby="basic-addon-search31" />
          
      </div>
      <div class="col-md-3">
       
        <select class="form-select placement-dropdown" id="selectPlacement">
          <option value="top-0 start-0">Top left</option>
          <option value="top-0 start-50 translate-middle-x">Top center</option>
          <option value="top-0 end-0">Top right</option>
          <option value="top-50 start-0 translate-middle-y">Middle left</option>
          <option value="top-50 start-50 translate-middle">Middle center</option>
          <option value="top-50 end-0 translate-middle-y">Middle right</option>
          <option value="bottom-0 start-0">Bottom left</option>
          <option value="bottom-0 start-50 translate-middle-x">Bottom center</option>
          <option value="bottom-0 end-0">Bottom right</option>
        </select>
      </div>

  
      <div class="card-body">
        <div class="mt-3 mb-9">
          
          <select id="largeSelect" class="form-select form-select-lg">
            <b><option><h2>Information sur le compte</h2></option></b>
            <option value="1">information1</option>
            <option value="2">information2</option>
            <option value="3">information3</option>
          </select>
        </div><br><br>

  

        <div class="card">
 
  <div class="table-responsive text-nowrap">
    <table class="table">
      <thead>
        <tr class="text-nowrap">
          <th>#</th>
          <th>Nom</th>
          <th>ID</th>
          <th>Statut</th>
          <th>Envoyés</th>
          <th>Lus</th>
          <th>Erreur</th>
          <th>Desinscrit</th>
          
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          
          <td>Table cell</td>
          <td>Table cell</td>
          <td>Table cell</td>
          <td>Table cell</td>
          <td>Table cell</td>
          <td>Table cell</td>
          <td>Table cell</td>
        </tr>
        <tr>
          <th scope="row">2</th>
         
          <td>Table cell</td>
          <td>Table cell</td>
          <td>Table cell</td>
          <td>Table cell</td>
          <td>Table cell</td>
          <td>Table cell</td>
          <td>Table cell</td>
        </tr>
        <tr>
          <th scope="row">3</th>
         
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
</div>
@endsection
