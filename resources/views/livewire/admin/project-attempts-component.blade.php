<div>
    <div class="page-content">
        <div class="container-fluid">
        
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">{{$title}} PARTICIPANTS</h4>

                    </div>
                </div>
            </div>
            <!-- end page title -->
            <div class="row">
                <div class="col-12">
                    <button type="button" class="btn btn-primary float-end" wire:click.prevent="publishResults({{ $project_id }})">
                        Publish Results
                    </button>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table align-middle table-nowrap table-hover">
                                    <thead class="table-light">
                                        <tr>
                                            <th scope="col" style="width: 70px;">#</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Project URL</th>
                                            <th scope="col">Grade</th>
                                            <th scope="col">Position</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if($attemptss)
                                        @foreach($attempts as $attempt)
                                        @if($attempt->test_id == $project_id)
                                            <tr>
                                                <td>
                                                    <div class="avatar-xs">
                                                        <span class="avatar-title rounded-circle">
                                                            {{ substr($attempt->username->name, 0, 1); }}
                                                        </span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <h5 class="font-size-14 mb-1"><a href="javascript: void(0);" class="text-dark">{{$name}}</a></h5>
                                                    <p class="text-muted mb-0">UI/UX Designer {{$attempt->user_id}}</p>
                                                </td>
                                                <td>{{$attempt->username->email}}</td>
                                                <td>
                                                    <div>
                                                        <a href="{{$attempt->url}}" class="badge badge-soft-primary font-size-11 m-1">{{$attempt->url}}</a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="javascript: void(0);">{{$attempt->grade}}</a>
                                                </td>
                                                <td>
                                                    <a href="javascript: void(0);">{{$attempt->position}}</a>
                                                </td>
                                                <td>
                                                    <ul class="list-inline font-size-20 contact-links mb-0">
                                                        <li class="list-inline-item px-2">
                                                            <!-- <button class="btn btn-success">Insert Grade</button> -->
                                                            <button type="button" class="btn btn-success float-start" style="" data-bs-toggle="modal" wire:click="editAttempt({{ $attempt->id, $user_id }})"  data-bs-target="#insertGrade">
                                                                Insert Grade
                                                            </button>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                        @endif
                                        @endforeach
                                        @else
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td> No Records Found</td>
                                        </tr>
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- container-fluid -->
    </div>

    <!-- Modal -->
    <div wire:ignore.self class="modal" id="insertGrade" tabindex="-1" role="dialog" aria-labelledby="insertGrade" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <input type="hidden" wire:model="attempt_id">
                            <label for="exampleFormControlInput2">Marks out of 100</label>
                            <input type="text" class="form-control" id="exampleFormControlInput2" wire:model="grade" placeholder="Insert Grade">
                            @error('grade') <span class="text-danger error">{{ $message }}</span>@enderror
                        </div>                           
                        <div class="form-group">
                            <label for="exampleFormControlInput2">Comments</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" wire:model="comments" placeholder="Add Comments" rows="3"></textarea>
                            @error('comments') <span class="text-danger error">{{ $message }}</span>@enderror
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                    <button type="button" wire:click.prevent="cancel()" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" wire:click.prevent="updateAttempt({{ $project_id }})" class="btn btn-primary" data-dismiss="modal">Save changes</button>
                </div>
                
            </div>
        </div>
    </div>
</div>
