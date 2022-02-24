<div>
    @include('livewire.add-tests-component')    
    @include('livewire.edit-tests-component') 
    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            
            
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Saas</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboards</a></li>
                                <li class="breadcrumb-item active">Saas</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col">
                    <button type="button" class="btn btn-success float-end" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <i class="fa fa-plus"></i> New Test Project
                    </button>
                </div>
            </div>
            <br>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 me-3">
                                            <img src="assets/images/users/avatar-1.jpg" alt="" class="avatar-md rounded-circle img-thumbnail">
                                        </div>
                                        <div class="flex-grow-1 align-self-center">
                                            <div class="text-muted">
                                                <p class="mb-2">Welcome to Studentapp Dashboard</p>
                                                <h5 class="mb-1">{{Auth::user()->name}}</h5>
                                                <p class="mb-0">{{Auth::user()->u_type}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
    
                                <div class="col-lg-4 align-self-center">
                                    <div class="text-lg-center mt-4 mt-lg-0">
                                        <div class="row">
                                            <div class="col-4">
                                                <div>
                                                    <p class="text-muted text-truncate mb-2">Total Projects</p>
                                                    <h5 class="mb-0">{{$tcount}}</h5>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div>
                                                    <p class="text-muted text-truncate mb-2">Active Projects</p>
                                                    <h5 class="mb-0">{{$atcount}}</h5>
                                                </div>
                                            </div>
                                            @if(Auth::user()->u_type == 'Admin')
                                            <div class="col-4">
                                                <div>
                                                    <p class="text-muted text-truncate mb-2">Total Projects</p>
                                                    <h5 class="mb-0">{{$stcount}}</h5>
                                                </div>
                                            </div>
                                            @else
                                            <div class="col-4">
                                                <div>
                                                    <p class="text-muted text-truncate mb-2">My count</p>
                                                    <h5 class="mb-0">{{$mycount}}</h5>
                                                </div>
                                            </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
    
                                <div class="col-lg-4 d-none d-lg-block">
                                    <div class="clearfix mt-4 mt-lg-0">
                                        <div class="dropdown float-end">
                                            <button class="btn btn-primary" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="bx bxs-cog align-middle me-1"></i> Setting
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">FEATURED PROJECTS</h4>
                    </div>
                </div>
            </div>
            <!-- start row -->
            @foreach($testss as $tests)
            <div class="row">
                <!-- <div class="card-deck"> -->
                    @foreach($tests as $test)
                    <div class="col-md-4">
                        <div class="card">
                            <h5 class="card-header bg-transparent border-bottom text-uppercase">{{$test->title}}</h5>
                            <div class="card-body">
                                <h4 class="card-title {{ $test->status == 'active' ? 'badge-soft-primary' : 'bg-warning' }}" style="font-size: 9px; border-radius: 14px; text-align:center; padding: 5px; max-width: 50px;">{{$test->status}}</h4>
                                <p class="card-text">{{$test->description}}</p>
                                <!-- <a href="javascript: void(0);" class="btn btn-primary float-start">Edit</a> -->
                                @if(Auth::user()->u_type == "Admin")
                                @if($test->status == 'active')
                                <button type="button" class="float-start" style="background: transparent; border:none; margin-top: 10px;" data-bs-toggle="modal" wire:click="editTests({{ $test->id }})"  data-bs-target="#updateModal">
                                    <i class="bx bx-edit h4 text-primary"></i>
                                </button>
                                @endif
                                <a href="{{route('project-attempts',['project_id'=>$test->id])}}" class="btn btn-primary float-end">View Attempts</a>
                                @else
                                @if($test->status == 'active')
                                <a href="{{route('project-details',['pid'=>$test->id])}}" class="btn btn-primary float-end">Attempt</a>
                                @else
                                @foreach($attempts as $attempt)
                                @if($attempt->test_id == $test->id)
                                @if($attempt->position > 3)
                                <a href="javascript: void(0);" class="btn btn-danger float-start">You Failed</a>
                                @else
                                <a href="javascript: void(0);" class="btn btn-success float-start">You Passed</a>
                                @endif
                                <a href="javascript: void(0);" class="btn btn-warning float-end" style="word-spacing: ;">Position   <strong style="color:black;">{{$attempt->position}}</strong></a>
                                @else
                                <a href="javascript: void(0);" class="btn btn-warning float-end">You didn't Attempt</a>
                                @endif
                                @endforeach
                                @endif
                                @endif
                                
                            </div>
                        </div>
                    </div>
                    @endforeach
            </div>
            <!-- end row -->
            @endforeach

        </div> <!-- container-fluid -->
    </div>
</div>