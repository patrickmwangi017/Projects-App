<div>
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Create New</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Project</a></li>
                                <li class="breadcrumb-item active">Create New</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Create New Project</h4>
                            <form role="form" wire:click.prevent="newTest">
                                <div class="row mb-4">
                                    <label for="projectname" class="col-form-label col-lg-2">Project Name</label>
                                    <div class="col-lg-10">
                                        <input id="projectname" type="text" class="form-control" placeholder="Enter Project Name..." wire:model="title">
                                        @error('title') <span class="text-danger error">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="projectdesc" class="col-form-label col-lg-2">Project Description</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" id="exampleFormControlInput2" wire:model="description" placeholder="Test description">
                                        @error('description') <span class="text-danger error">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="projectdesc" class="col-form-label col-lg-2">Project Instructions</label>
                                    <div class="col-lg-10">
                                        <textarea class="form-control" id="projectdesc" rows="7" placeholder="Enter Project Description..." wire:model="instructions"></textarea>
                                        @error('instructions') <span class="text-danger error">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                                <div class="row justify-content-end">
                                    <div class="col-lg-10">
                                        <button type="submit" class="btn btn-primary">Publish</button>
                                    </div>
                                </div>
                                
                            </form>
                            

                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->

        </div> <!-- container-fluid -->
    </div>
</div>
