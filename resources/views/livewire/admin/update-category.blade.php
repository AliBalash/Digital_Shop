<div>
    <div class="card card-success col-8 mr-auto ml-auto">
        <div class="card-header">
            <h3 class="card-title">Updated Category</h3>
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
                    <input id="slug" class="form-control form-control-lg"  disabled type="text" placeholder="Slug of Category"
                           wire:model="slug">
                    @error('name')
                    <span class="input-error">{{$message}}</span>
                    @enderror
                </div>
            </div>

            <div class="col-6">
                @if(!empty($new_image))
                    <div class="row">
                        <div class="col-6">
                            <label for="image">Image</label>
                            <input id="image" class="form-control form-control-lg" type="file" wire:model="new_image">
                            @error('slug')
                            <span class="input-error">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="col-6">
                                <img src="{{$new_image->temporaryUrl()}}" width="90" height="90" alt="">
                        </div>
                    </div>

                @else
                    <div class="row">
                        <div class="col-6">

                            <label for="image">Image</label>
                            <input id="image" class="form-control form-control-lg" type="file" wire:model="new_image">
                            @error('image')
                            <span class="input-error">{{$message}}</span>
                            @enderror
                        </div>
                        <div CLASS="col-6 mt-3">
                            <img src="{{asset('images/categories')}}/{{$image}}" width="90" height="90" alt="">

                        </div>
                    </div>

                @endif


            </div>

            <div class=" mt-3 col-2">
                <button type="submit" class="btn btn-success form-control form-control-lg"
                        wire:click.prevent="UpdateCategory()">Save
                </button>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
