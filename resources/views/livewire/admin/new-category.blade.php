<div>
    <div class="card card-success col-8 mr-auto ml-auto">
        <div class="card-header">
            <h3 class="card-title">New Category</h3>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-6">
                    <label for="name">Name</label>
                    <input id="name" class="form-control form-control-lg" type="text" placeholder="Enter name category"
                           wire:model="name">
                    @error('name')
                    <span class="input-error">{{$message}}</span>
                    @enderror
                </div>
                <div class="col-6">
                    <label for="slug">Slug</label>
                    <input id="slug" class="form-control form-control-lg" disabled type="text"
                           placeholder="Slug of Category"
                           wire:model="slug">
                    @error('name')
                    <span class="input-error">{{$message}}</span>
                    @enderror
                </div>
            </div>

            <div class="col-6">
                <div class="row">
                    <div class="col-6">
                        <label for="image">Image</label>
                        <input id="image" class="form-control form-control-lg" type="file" wire:model="image">
                        @error('image')
                        <span class="input-error">{{$message}}</span>
                        @enderror
                    </div>
                    @if($image)
                        <div class="col-6">
                            <img src="{{$image->temporaryUrl()}}" width="90" height="90" alt="">
                        </div>
                    @endif
                </div>

            </div>

            <div class=" mt-3 col-2">
                <button type="submit" class="btn btn-success form-control form-control-lg"
                        wire:click.prevent="newCategory()">Save
                </button>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
