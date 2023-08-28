@extends('layouts/contentNavbarLayout')

@section('title', 'Campaign whatsapp - Pages')

@section('content')
    <h4 class="fw-bold py-3 mb-4">
        <span class="text-muted fw-light">whatsapp /</span> Campaign
    </h4>

    <style>
        .button {
            text-align: center;
            margin-right: auto;
            justify-content: right;
            text-align: right;

        }

        .col-md-3 {
            width: 50vh;
        }
    </style>

    <div class="row">
        <div class="col-md-12">
            <ul class="nav nav-pills flex-column flex-md-row mb-3">
                <li class="nav-item"><a class="nav-link" href="{{ url('pages/campagne-email') }}"><i
                            class="bx bx-user me-1"></i> Account</a></li>
                <li class="nav-item"><a class="nav-link active" href="javascript:void(0);" id="notfi-whatsapp"><i
                            class="tf-icons bx bx-home"></i> Notifications<span
                            class="badge rounded-pill badge-center h-px-20 w-px-20 bg-danger">3</span></a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('pages/campagne-whatsapp') }}"><i
                            class="bx bx-link-alt me-1"></i> Connections</a></li>
            </ul>
        </div>

        <div class="button">
            <div class="mt-3">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#basicModal">
                    <i class='bx  bx-plus'></i>creer une campagne
                </button>

                <!-- Modal -->
                <div class="modal fade" id="basicModal" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel1">Creer une campagne whatsapp</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col mb-3">
                                        <label for="nameBasic" class="form-label">comment allez vous appeler votre campagne
                                            (vous seul pourrez le voir)</label>
                                        <input type="text" id="nameBasic" class="form-control" placeholder="Enter Name">
                                    </div>
                                </div>
                                <div class="row g-2">
                                    <div class="col mb-0">
                                        <label for="emailBasic" class="form-label">quel type de campagne
                                            aimeriez-vous</label>
                                        <input type="text" id="emailBasic" class="form-control"
                                            placeholder="xxxx@xxx.xx">
                                    </div>
                                </div>
                                <div class="col mb-0">
                                    <label for="dobBasic" class="form-label">DOB</label>
                                    <input type="text" id="dobBasic" class="form-control" placeholder="DD / MM / YY">
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline-secondary"
                                    data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <hr class="m-0" /> <br><br>



    <div class="nav-align-top mb-4">
        <ul class="nav nav-pills mb-3 nav-fill" role="tablist">
            <li class="nav-item">
                <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                    data-bs-target="#navs-pills-justified-profile" aria-controls="navs-pills-justified-profile"
                    aria-selected="false"><i class="tf-icons bx bx-message-square"></i> Message received</button>
            </li>
            <li class="nav-item">
                <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                    data-bs-target="#navs-pills-justified-messages" aria-controls="navs-pills-justified-messages"
                    aria-selected="false"><i class="tf-icons bx bx-message-square"></i>Send Messages</button>
            </li>
        </ul>
        <div class="tab-content">

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

                                                        <li><a href="#" class="btn btn-danger"><i
                                                                    class="tf-icons bx bx-task"></i></a></li>
                                                    </ul>
                                                </td>
                                                <td>1</td>
                                                <td>Good morning my dear</td>
                                                <td><a href="#" class="btn btn-sm btn-success"><i
                                                            class="bx bx-purchase-tag-alt me-2"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <ul class="action-list">
                                                        <li><a href="#" class="btn btn-danger"><i
                                                                    class="tf-icons bx bx-task"></i></a></li>
                                                    </ul>
                                                </td>
                                                <td>2</td>
                                                <td>Hi, tomorow i don't</td>
                                                <td><a href="#" class="btn btn-sm btn-success"><i
                                                            class="bx bx-purchase-tag-alt me-2"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <ul class="action-list">
                                                        <li><a href="#" class="btn btn-danger"><i
                                                                    class="tf-icons bx bx-task"></i></a></li>
                                                    </ul>
                                                </td>
                                                <td>3</td>
                                                <td>I'am realy tired</td>
                                                <td><a href="#" class="btn btn-sm btn-success"><i
                                                            class="bx bx-purchase-tag-alt me-2"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <ul class="action-list">
                                                        <li><a href="#" class="btn btn-danger"><i
                                                                    class="tf-icons bx bx-task"></i></a></li>
                                                    </ul>
                                                </td>
                                                <td>4</td>
                                                <td>Thank's sear</td>

                                                <td><a href="#" class="btn btn-sm btn-success"><i
                                                            class="bx bx-purchase-tag-alt me-2"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <ul class="action-list">
                                                        <li><a href="#" class="btn btn-danger"><i
                                                                    class="tf-icons bx bx-task"></i></a></li>
                                                    </ul>
                                                </td>
                                                <td>5</td>
                                                <td>No, </td>

                                                <td><a href="#" class="btn btn-sm btn-success"><i
                                                            class="bx bx-purchase-tag-alt me-2"></i></a></td>
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
                                                        <a class="page-link" href="javascript:void(0);"><i
                                                                class="tf-icon bx bx-chevrons-left"></i></a>
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
                                                        <a class="page-link" href="javascript:void(0);"><i
                                                                class="tf-icon bx bx-chevrons-right"></i></a>
                                                    </li>
                                                </ul>
                                            </nav>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="navs-pills-justified-messages" role="tabpanel">
                <div class="row">
                    <div class="col-xl">
                        <div class="card mb-4">
                            <div class="card-header d-flex justify-content-between align-items-center">

                                <div class="mt-3">
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#modalTop">
                                        Simple message
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal modal-top fade" id="modalTop" tabindex="-1">
                                        <div class="modal-dialog">
                                            <form class="modal-content"
                                                action="{{ route('pages-campagne-whatsapp-send-message') }}"
                                                method="post">
                                                <div class="modal-header">

                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col mb-3">
                                                            <label for="nameSlideTop" class="form-label">Campaign
                                                                Name</label>
                                                            <input type="text" id="nameSlideTop" class="form-control"
                                                                placeholder="Enter Name">
                                                        </div>
                                                    </div>

                                                    <div class="col mb-0">
                                                        <label for="emailSlideTop" class="form-label">Phone Number</label>
                                                        <input type="text" id="emailSlideTop" class="form-control"
                                                            placeholder="237695458781">
                                                    </div>
                                                    <div class="col mb-0">
                                                        <label for="dobSlideTop" class="form-label">Template</label>

                                                        <select class="form-select form-select-lg"
                                                            id="inlineFormCustomSelect" name="select">
                                                            @foreach ($whatsappBusinessTemplate as $data)
                                                                <option value="{{ $data['name'] }}">{{ $data['name'] }}
                                                                </option>
                                                            @endforeach
                                                        </select>

                                                    </div>

                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-outline-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Send</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>


                                <small class="text-muted float-end">Whatsapp automation</small>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('pages-campagne-whatsapp-send-message') }}" method="post">
                                    @csrf
                                    <div class="mb-3">
                                        <label class="form-label" for="basic-default-fullname">Campaign name</label>
                                        <input type="text" class="form-control" name="campaignName"
                                            id="basic-default-fullname" placeholder="John Doe" />
                                    </div>
                                    <div class="row">
                    <div class="col mb-3">
                      <label for="nameWithTitle" class="form-label">campaignContenue</label>
                      <input type="text" name="contenue"  id="nameWithTitle" class="@error('contenue') is-invalid @enderror form-control" placeholder="Enter contenue">
                      @error('contenue')
                            <div class="invalid-feedback">{{ $message }}</div>
                       @enderror
                    </div>
                  </div>
                  <div class="row">
                    <div class="col mb-3">
                      <label for="nameWithTitle" class="form-label">campaignObjectif</label>
                      <input type="text" name="objectif"  id="nameWithTitle" class="@error('objectif') is-invalid @enderror form-control" placeholder="Enter objectif">
                      @error('objectif')
                            <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                    </div>
                  </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="basic-default-company">List contact</label>
                                        <select class="form-select form-select-lg" id="inlineFormCustomSelect"
                                            name="selectListContact[]" multiple="">
                                            @foreach ($listContactBlogs as $itemList)
                                                <option value="{{ $itemList->id }}">{{ $itemList->listName }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="basic-default-company">Template</label>
                                        <select class="form-select form-select-lg" id="inlineFormCustomSelect"
                                            name="selectTemplate">
                                            @foreach ($whatsappBusinessTemplate as $data)
                                                <option value="{{ $data['name'] }}">{{ $data['name'] }}</option>
                                            @endforeach
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


    <hr class="m-0" />
    <div class="card-body">
        <div class="row gx-3 gy-2 align-items-center">
            <div class="col-md-3">
                <input type="text" class="form-control" i class="bx bx-search" placeholder="Search contact..."
                    aria-label="Search..." aria-describedby="basic-addon-search31" />

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
                        <b>
                            <option>
                                <h2>Information sur le compte</h2>
                            </option>
                        </b>
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
        </div>
    @endsection
