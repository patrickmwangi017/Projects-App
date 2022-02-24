<div>
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Project Overview</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Project</a></li>
                                <li class="breadcrumb-item active">Project Overview</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-lg-10">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-shrink-0 me-4">
                                    <img src="assets/images/companies/img-1.png" alt="" class="avatar-sm">
                                </div>

                                <div class="flex-grow-1 overflow-hidden">
                                    <h5 class="text-truncate font-size-15">{{$title}}</h5>
                                    <p class="text-muted">{{$description}}</p>
                                </div>
                            </div>

                            <h5 class="font-size-15 mt-4">Project Details :</h5>

                            <p class="text-muted">{{$instructions}}</p>

                            <div class="text-muted mt-4">
                                <p><i class="mdi mdi-chevron-right text-primary me-1"></i> To achieve this, it would be necessary</p>
                                <p><i class="mdi mdi-chevron-right text-primary me-1"></i> Separate existence is a myth.</p>
                                <p><i class="mdi mdi-chevron-right text-primary me-1"></i> If several languages coalesce</p>
                            </div>
                            
                            <div class="row task-dates">
                                <div class="col-sm-4 col-6">
                                    <div class="mt-4">
                                        <h5 class="font-size-14"><i class="bx bx-calendar me-1 text-primary"></i> Start Date</h5>
                                        <p class="text-muted mb-0">08 Sept, 2019</p>
                                    </div>
                                </div>

                                <div class="col-sm-4 col-6">
                                    <div class="mt-4">
                                        <h5 class="font-size-14"><i class="bx bx-calendar-check me-1 text-primary"></i> Due Date</h5>
                                        <p class="text-muted mb-0">12 Oct, 2019</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end col -->


            </div>
            <!-- end row -->
            <div class="row">
                <form wire:click.prevent="submitAttempt">
                    <div class="col-lg-10 hstack gap-3">
                        <input class="form-control me-auto" type="url" wire:model="url" placeholder="Enter your project URL..."
                            aria-label="Enter your project URL...">
                            @error('url') <span class="text-danger error">{{ $message }}</span>@enderror
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>            
            </div>

        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
</div>
