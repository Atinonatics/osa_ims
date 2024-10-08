@extends('layouts.Org')
@section('title', 'Organizations')

@section('content')
    <div class="container-fluid p-0">
        
        <nav class="navbar navbar-light" style="background-color: #ffffff; height: 85px; width: 100vw;">
           
        </nav>

        <div class="row flex-nowrap">
            <nav class="sidebar">
                <div class="d-flex flex-column align-items-center align-items-sm-start">
                    <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                        <span class="fs-5 d-none d-sm-inline">OSA-IMS</span>
                    </a>
                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start"
                        id="menu">
                        <li class="nav-item">
                            <a href="#" class="nav-link align-middle px-0">
                                <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Home</span>
                            </a>
                        </li>
                        <hr class="sidebar-divider">
                        <li>
                            <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline">Dashboard</span>
                            </a>
                            <ul class="collapse show nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                                
                            </ul>
                        </li>
                        <hr class="sidebar-divider">
                        <li>
                            <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">Organizations</span>
                            </a>
                        </li>
                        <hr class="sidebar-divider">
                        <li>
                            <a href="#submenu3" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi-bootstrap"></i> <span class="ms-1 d-none d-sm-inline">Documents</span>
                            </a>
                            <ul class="collapse nav flex-column ms-1" id="submenu3" data-bs-parent="#menu">
                                
                            </ul>
                        </li>
                        <hr class="sidebar-divider">
                        <li>
                            <a href="#submenu4" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi-grid"></i> <span class="ms-1 d-none d-sm-inline">Appointments</span>
                            </a>
                            <ul class="collapse nav flex-column ms-1" id="submenu4" data-bs-parent="#menu">
                                
                            </ul>
                        </li>
                        <hr class="sidebar-divider">
                        <li>
                            <a href="#" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Settings</span>
                            </a>
                        </li>
                    </ul>
                    <hr>
                    <div class="dropdown pb-4">
                        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
                            id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="" alt="hugenerd" width="30" height="30" class="rounded-circle">
                            <span class="d-none d-sm-inline mx-1">User</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                            <li><a class="dropdown-item" href="#">Settings</a></li>
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Sign out</a></li>
                        </ul>
                    </div>
                </div>
            </nav>

           
            <main class="col py-3 main-content">
                <h3 class="mb-4"><b>Organizations</b></h3>
                <h5 class="text-secondary">Manage Organizations</h5>

                <div class="card text-center">
                    <div class="d-flex p-3 card-header text-start" style="gap: 10px">
                        <button class="btn btn-primary"> National </button>
                        <button class="btn btn-secondary"> Departmental </button>
                        <input class="form-control" type="text" placeholder="Search">
                    </div>
                    <div class="card-body text-start ">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Organizations</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">To Renew On:</th>
                                    <th scope="col">About</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($organizations as $organization))
                                    <!-- <p>{{$organization}}</p> -->
                                    <tr>
                                    <th scope="row">{{$organization->organization_id}}</th>
                                    <td>{{$organization->name}}</td>
                                    <td><label class="btn btn-success" for="success">Active</label></td>
                                    <td>{{$organization->created_at}}</td>
                                    <td><label class=text-primary>View</label></td>
                                </tr>
                                @endforeach
                                
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer text-body-secondary text-start">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop">
                            Add
                        </button>
                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Add Organization</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="post" action="{{route('organization.store')}}">
                                           @csrf()
                                            <div class="mb-3">
                                                <label for="formGroupExampleInput" class="form-label"><b>Organization
                                                        Name</b></label>
                                                <input type="text" class="form-control" id="formGroupExampleInput" name="name">
                                            </div>
                                            <div class="mb-3">
                                                <label for="formGroupExampleInput2" class="form-label"><b>Date
                                                        Established</b></label>
                                                <input type="Date" class="form-control" id="formGroupExampleInput2" name="date_established">
                                            </div>
                                            <div class="mb-3">
                                                <label for="formGroupExampleInput2" class="form-label"><b>Department</b></label>
                                                <select id="inputState" class="form-select" name="department">
                                                    <option selected>N/A</option>
                                                    <option value="1">CCS</option>
                                                    <option value="2">CCJE</option>
                                                    <option value="3">CHTM</option>
                                                    <option value="4">CN</option>
                                                    <option value="5">CBA</option>
                                                    <option value="6">CTE</option>
                                                </select>
                                                <div class="col-12">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="gridCheck" name="is_national">
                                                        <label class="form-check-label" for="gridCheck">
                                                            <b>National</b>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="file" class="form-label"><b>Organization Seal</b></label>
                                                <input type="file" id="file" name="file" class="form-control">
                                            </div>
                                            <label for="Status"><b>Status</b></label>
                                            <div>
                                                <input type="radio" class="btn-check" id="success-outlined" name="status"
                                                    id="success-outlined" autocomplete="off" checked>
                                                <label class="btn btn-outline-success" for="success-outlined">Active</label>

                                                <input type="radio" class="btn-check" id="danger-outlined" name="status"
                                                    id="danger-outlined" autocomplete="off">
                                                <label class="btn btn-outline-danger" for="danger-outlined">Inactive</label>
                                            </div>
                                            <div>
                                                <div class="form-floating">
                                                    <textarea class="form-control" name="description" placeholder="Description" id="floatingTextarea2" style="height: 100px"></textarea>
                                                    <label for="floatingTextarea2">Description</label>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">SAVE</button>
                                            </div>
                                        </form>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>


@endsection

{{-- 
@extends('layouts.Org')

@section('title', 'Organizations')

@section('content')
    <div class="container-fluid p-0">
        <!-- Your content here -->
        <h3 class="mb-4"><b>Organizations</b></h3>
        <h5 class="text-secondary">Manage Organizations</h5>
        <div class="card text-center">
            <div class="d-flex p-3 card-header text-start" style="gap: 10px">
                <button class="btn btn-primary"> National </button>
                <button class="btn btn-secondary"> Departmental </button>
                <input class="form-control" type="text" placeholder="Search">
            </div>
            <div class="card-body text-start">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Organizations</th>
                            <th scope="col">Status</th>
                            <th scope="col">To Renew On:</th>
                            <th scope="col">About</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        <tr>
                            <th scope="row">1</th>
                            <td>Sample Organization</td>
                            <td>Active</td>
                            <td>2024-09-06</td>
                            <td>Description of the organization</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="card-footer text-body-secondary text-start">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    Add
                </button>
                
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Add Organization</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <!-- Commented out form action and method since no controller or route -->
                                <!--
                                <form action="{{ route('organizations') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                -->
                                    <div class="mb-3">
                                        <label for="name" class="form-label"><b>Organization Name</b></label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Insert Organization Name">
                                    </div>
                                    <div class="mb-3">
                                        <label for="established_date" class="form-label"><b>Date Established</b></label>
                                        <input type="date" class="form-control" id="established_date" name="established_date">
                                    </div>
                                    <div class="mb-3">
                                        <label for="department" class="form-label"><b>Department</b></label>
                                        <select id="department" class="form-select" name="department">
                                            <option selected>N/A</option>
                                            <option>CCS</option>
                                            <option>CCJE</option>
                                            <option>CHTM</option>
                                            <option>CN</option>
                                            <option>CBA</option>
                                            <option>CTE</option>
                                        </select>
                                        <div class="col-12">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="national" name="national">
                                                <label class="form-check-label" for="national">
                                                    <b>National</b>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="logo" class="form-label"><b>Organization Seal</b></label>
                                        <input type="file" id="logo" name="logo" class="form-control">
                                    </div>
                                    <label for="status"><b>Status</b></label>
                                    <div>
                                        <input type="radio" class="btn-check" name="status" id="active" value="1" autocomplete="off" checked>
                                        <label class="btn btn-outline-success" for="active">Active</label>
                                        <input type="radio" class="btn-check" name="status" id="inactive" value="0" autocomplete="off">
                                        <label class="btn btn-outline-danger" for="inactive">Inactive</label>
                                    </div>
                                    <div class="mb-3">
                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder="Description" id="description" name="description" style="height: 100px"></textarea>
                                            <label for="description">Description</label>
                                        </div>
                                    </div>
                                    <!-- Commented out submit button since form action is commented out -->
                                    <!--
                                    <button type="submit" class="btn btn-primary">Save</button>
                                    -->
                                <!--
                                </form>
                                -->
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection --}}