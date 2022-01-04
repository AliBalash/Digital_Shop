<div>
    <div class="card card-success col-8 mr-auto ml-auto">
        <div class="card-header">
            <h3 class="card-title">New Category</h3>
        </div>
        <div class="card-body">
            <div class="row col-12">
                @if(empty($new_image))
                    <label for="image">Image</label>
                    <input id="image" class="form-control form-control-lg" type="file" wire:model="new_image">

                    <div class="col-6">
                        <img src="{{asset('images/slide')}}/{{$slide->image}}" width="350" height="180" alt="">
                    </div>

                @else
                    <label for="image">Image</label>
                    <input id="image" class="form-control form-control-lg" type="file" wire:model="new_image">
                    <div class="col-6">
                        <img src="{{$new_image->temporaryUrl()}}" width="350" height="180" alt="">
                    </div>
                @endif
                <label for="">Status</label>
                <div class="col-4 mt-4">
                    <div class="switch-field">
                        <input name="status" wire:model="status" type="radio" id="radio-1" value="1"/>
                        <label for="radio-1">On</label>

                        <input name="status" type="radio" wire:model="status" id="radio-2" value="0"/>
                        <label for="radio-2">Off</label>

                        @error('status') <span class="input-error">{{$message}}</span> @enderror
                    </div>
                </div>
            </div>

            <div class=" mt-3 col-2">
                <button type="submit" class="btn btn-success form-control form-control-lg"
                        wire:click.prevent="updateSlide">Save
                </button>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
</div>

