@extends('layouts/contentNavbarLayout')

@section('title', 'Campagne messages - Pages')

@section('content')
<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">messages/</span> Campaign
</h4>

<hr class="m-0"/> <br><br>
    <div class="nav-align-top mb-4">
      <ul class="nav nav-pills mb-3 nav-fill" role="tablist">
        <li class="nav-item">
          <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-justified-home" aria-controls="navs-pills-justified-home" aria-selected="true"><i class="tf-icons bx bx-home"></i> Notification <span class="badge rounded-pill badge-center h-px-20 w-px-20 bg-danger">3</span></button>
        </li>
        <li class="nav-item">
          <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-justified-profile" aria-controls="navs-pills-justified-profile" aria-selected="false"><i class="tf-icons bx bx-message-square"></i> Message received</button>
        </li>
        <li class="nav-item">
          <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-justified-messages" aria-controls="navs-pills-justified-messages" aria-selected="false"><i class="tf-icons bx bx-message-square"></i>Send Messages</button>
        </li>
      </ul>
      <div class="tab-content">
        <div class="tab-pane fade show active" id="navs-pills-justified-home" role="tabpanel">
        <div class="bs-toast toast fade show bg-info" role="alert" aria-live="assertive" aria-atomic="true">
          <div class="toast-header">
            <i class='bx bx-bell me-2'></i>
            <div class="me-auto fw-semibold">Bootstrap</div>
            <small>11 mins ago</small>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
          </div>
          <div class="toast-body">
            Fruitcake chocolate bar tootsie roll gummies gummies jelly beans cake.
          </div>
          
        </div>
        </div>
        <div class="tab-pane fade" id="navs-pills-justified-profile" role="tabpanel">
        <div class="container">
    <div class="row">
        <div class="col-md-offset-1 col-md-10">
            <div class="panel">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12">
                            <form class="form-horizontal pull-right">
                                <div class="form-group">
                                    <label>Show : </label>
                                    <select class="form-control">
                                        <option>5</option>
                                        <option>10</option>
                                        <option>15</option>
                                        <option>20</option>
                                    </select>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="panel-body table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Action</th>
                                <th>#</th>
                                <th>Aperçus</th>
                                <th>View</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <ul class="action-list">
                                        
                                        <li><a href="#" class="btn btn-danger"><i class="tf-icons bx bx-task"></i></a></li>
                                    </ul>
                                </td>
                                <td>1</td>
                                <td>Good morning my dear</td>
                                <td><a href="#" class="btn btn-sm btn-success"><i class="bx bx-purchase-tag-alt me-2"></i></a></td>
                            </tr>
                            <tr>
                                <td><ul class="action-list">
                                        <li><a href="#" class="btn btn-danger"><i class="tf-icons bx bx-task"></i></a></li>
                                    </ul>
                                </td>
                                <td>2</td>
                                <td>Hi, tomorow i don't</td>
                                <td><a href="#" class="btn btn-sm btn-success"><i class="bx bx-purchase-tag-alt me-2"></i></a></td>
                            </tr>
                            <tr>
                                <td>
                                    <ul class="action-list">
                                        <li><a href="#" class="btn btn-danger"><i class="tf-icons bx bx-task"></i></a></li>
                                    </ul>
                                </td>
                                <td>3</td>
                                <td>I'am realy tired</td>
                                <td><a href="#" class="btn btn-sm btn-success"><i class="bx bx-purchase-tag-alt me-2"></i></a></td>
                            </tr>
                            <tr>
                                <td>
                                    <ul class="action-list">
                                        <li><a href="#" class="btn btn-danger"><i class="tf-icons bx bx-task"></i></a></li>
                                    </ul>
                                </td>
                                <td>4</td>
                                <td>Thank's sear</td>
                                
                                <td><a href="#" class="btn btn-sm btn-success"><i class="bx bx-purchase-tag-alt me-2"></i></a></td>
                            </tr>
                            <tr>
                                <td>
                                    <ul class="action-list">
                                        <li><a href="#" class="btn btn-danger"><i class="tf-icons bx bx-task"></i></a></li>
                                       </ul>
                                </td>
                                <td>5</td>
                                <td>No, </td>
                                
                                <td><a href="#" class="btn btn-sm btn-success"><i class="bx bx-purchase-tag-alt me-2"></i></a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="panel-footer">
                    <div class="row">
                        <div class="col-sm-6 col-xs-6">showing <b>5</b> out of <b>25</b> entries</div>
                        <div class="col-sm-6 col-xs-6">
                        <nav aria-label="Page navigation">
            <ul class="pagination pagination-sm">
              <li class="page-item prev">
                <a class="page-link" href="javascript:void(0);"><i class="tf-icon bx bx-chevrons-left"></i></a>
              </li>
              <li class="page-item">
                <a class="page-link" href="javascript:void(0);">1</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="javascript:void(0);">2</a>
              </li>
              <li class="page-item active">
                <a class="page-link" href="javascript:void(0);">3</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="javascript:void(0);">4</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="javascript:void(0);">5</a>
              </li>
              <li class="page-item next">
                <a class="page-link" href="javascript:void(0);"><i class="tf-icon bx bx-chevrons-right"></i></a>
              </li>
            </ul>
          </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div></div></div>
        <div class="tab-pane fade" id="navs-pills-justified-messages" role="tabpanel">
        <div class="row">
  <div class="col-xl">
    <div class="card mb-4">
      <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0">SMS</h5> <small class="text-muted float-end">Whatsapp automation</small>
      </div>
      <div class="card-body">
      <form  action="{{route('pages-campagne-message-multiple')}}" method="post">
          <div class="mb-3">
            <label class="form-label" for="basic-default-fullname">Campaign name</label>
            <input type="text" class="form-control" id="basic-default-fullname" placeholder="John Doe" />
          </div>
          <div class="mb-3">
            <label class="form-label" for="basic-default-company">sender</label>
            <input type="text" class="form-control" id="basic-default-company" placeholder="ACME Inc." />
          </div>
          <div class="mb-3">
            <label class="form-label" for="basic-default-email">Email</label>
            <div class="input-group input-group-merge">
              <input type="text" id="basic-default-email" class="form-control" placeholder="john.doe" aria-label="john.doe" aria-describedby="basic-default-email2" />
              <span class="input-group-text" id="basic-default-email2">@example.com</span>
            </div>
            <div class="form-text"> You can use letters, numbers & periods </div>
          </div>
          <div class="mb-3">
            <label class="form-label" for="basic-default-phone">Phone No</label>
            <input type="text" id="basic-default-phone" class="form-control phone-mask" placeholder="658 799 8941" />
          </div>
          <div class="mb-3">
            <label class="form-label" for="basic-default-message">Message</label>
            <textarea id="basic-default-message" class="form-control" placeholder="Hi, Do you have a moment to talk Joe?"></textarea>
          </div>
          <div class="mb-3">
          <label class="form-label" for="basic-default-message">Choice list</label>
              <select class="form-select form-select-lg" id="inlineFormCustomSelect" name="select">
              
                  <option value="">list</option>
               
              </select>
            </div>
          <button type="submit" class="btn btn-primary">Send</button>
                
        </form>
      </div>
    </div>
  </div>
        </div>
      </div>
    </div>
  </div>
  
   
@endsection
