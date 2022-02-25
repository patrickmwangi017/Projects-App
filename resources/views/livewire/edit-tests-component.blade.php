<div>
    <!-- Modal -->
    <div wire:ignore.self class="modal" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="exampleFormControlInput2">Test Title</label>
                            <input type="text" class="form-control" id="exampleFormControlInput2" wire:model="title" placeholder="Test title">
                            @error('title') <span class="text-danger error">{{ $message }}</span>@enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput2">Test Description</label>
                            <input type="text" class="form-control" id="exampleFormControlInput2" wire:model="description" placeholder="Test description">
                            @error('description') <span class="text-danger error">{{ $message }}</span>@enderror
                        </div>                            
                        <div class="form-group">
                            <label for="exampleFormControlInput2">Test Instructions</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" wire:model="instructions" placeholder="Test instructions" rows="7"></textarea>
                            <!-- <input type="text-area" class="form-control" id="exampleFormControlInput2" wire:model="instructions" placeholder="Test instructions"> -->
                            @error('instructions') <span class="text-danger error">{{ $message }}</span>@enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlInput1">Status</label>  
                            <select class="form-control" wire:model="status">
                                <option value="">Select Test Status</option>
                                <option value="active">Active</option>
                                <option value="closed">Closed</option>
                            </select>
                            @error('status') <span class="text-danger error">{{ $message }}</span>@enderror
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                    <button type="button" wire:click.prevent="cancel()" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" wire:click.prevent="updateTests()" class="btn btn-primary" data-dismiss="modal">Save changes</button>
                </div>
                
            </div>
        </div>
    </div>
</div>
