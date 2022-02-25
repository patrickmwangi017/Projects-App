<div>
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Users Grid</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Contacts</a></li>
                                <li class="breadcrumb-item active">Users Grid</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->
            @foreach($userss as $users)
                <div class="row">
                    @foreach($users as $user)
                        <!-- @if($user->u_type != 'Admin') -->
                            <div class="col-xl-4 col-sm-6">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <div class="avatar-sm mx-auto mb-4">
                                            <span class="avatar-title rounded-circle bg-primary bg-soft text-primary font-size-16">
                                                {{ substr($user->fname, 0, 1); }}{{ substr($user->lname, 0, 1); }}
                                            </span>
                                        </div>
                                        <h5 class="font-size-15 mb-1"><a href="javascript: void(0);" class="text-dark">{{$user->fname}} {{$user->lname}} ({{$user->username}})</a></h5>
                                        <h7 class="font-size-15 mb-1"><a href="javascript: void(0);" class="text-dark">{{$user->email}}</a></h8>
                                        <p class="text-muted">{{$user->course_of_study}} - Year {{$user->year_of_study}}</p>

                                        <div>
                                            <a href="javascript: void(0);" class="badge bg-primary font-size-11 m-1">{{$user->phone}}</a>
                                            <a href="javascript: void(0);" class="badge bg-primary font-size-11 m-1">{{$user->gender}}</a>
                                        </div>
                                    </div>
                                    <div class="card-footer bg-transparent border-top">
                                        <div class="contact-links d-flex font-size-20">
                                            <div class="flex-fill">
                                                <a href="javascript: void(0);"><i class="bx bx-message-square-dots"></i></a>
                                            </div>
                                            <div class="flex-fill">
                                                <a href="javascript: void(0);"><i class="bx bx-pie-chart-alt"></i></a>
                                            </div>
                                            <div class="flex-fill">
                                                <a href="javascript: void(0);"><i class="bx bx-user-circle"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <!-- @endif -->
                    @endforeach
                </div>
                <!-- end row -->
            @endforeach

            <div class="row">
                <div class="col-12">
                    <div class="text-center my-3">
                        <a href="javascript:void(0);" class="text-success"><i class="bx bx-hourglass bx-spin me-2"></i> Load more </a>
                    </div>
                </div> <!-- end col-->
            </div>
            <!-- end row -->

        </div> <!-- container-fluid -->
    </div>
</div>
