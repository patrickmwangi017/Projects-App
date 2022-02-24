<div>
    <div wire:ignore.self class="modal" id="exampleModal" role="dialog" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">New Test Project</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form role="form" wire:click.prevent="newTest">
                        <div class="form-group">
                            <label for="exampleFormControlInput2">Project Title</label>
                            <input type="text" class="form-control" id="exampleFormControlInput2" wire:model="title" placeholder="Test title">
                            @error('title') <span class="text-danger error">{{ $message }}</span>@enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput2">Project Description</label>
                            <input type="text" class="form-control" id="exampleFormControlInput2" wire:model="description" placeholder="Test description">
                            @error('description') <span class="text-danger error">{{ $message }}</span>@enderror
                        </div>                         
                        <div class="form-group">
                            <label for="exampleFormControlInput2">Project Instructions</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" wire:model="instructions" placeholder="Test instructions" rows="7"></textarea>
                            <!-- <input type="text-area" class="form-control" id="exampleFormControlInput2" wire:model="instructions" placeholder="Test instructions"> -->
                            @error('instructions') <span class="text-danger error">{{ $message }}</span>@enderror
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="Submit" class="btn btn-primary">Publish</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</div>
