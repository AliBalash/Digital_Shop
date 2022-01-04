<div>
    <div class="card card-primary col-8 mr-auto ml-auto">
        <div class="card-header">
            <h3 class="card-title">Update Service</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" wire:model="name"
                               placeholder="Enter name">
                        @error('name') <span class="input-error">{{$message}}</span> @enderror
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Slug</label>
                        <input type="text" class="form-control" disabled wire:model="slug" id="exampleInputEmail1">
                        @error('slug') <span class="input-error">{{$message}}</span> @enderror

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <!-- select -->
                    <div class="form-group">
                        <label>Category</label>
                        <select class="custom-select" wire:model="category_id">
                            <option value="">Choose Category</option>
                            @foreach($cats as $cat)
                                <option value="{{$cat->id}}">{{$cat->name}}</option>
                            @endforeach
                        </select>
                        @error('category_id') <span class="input-error">{{$message}}</span> @enderror

                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tag Line</label>
                        <input type="text" class="form-control" wire:model="tagline" id="exampleInputEmail1">
                        @error('tagline') <span class="input-error">{{$message}}</span> @enderror

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control" rows="3" placeholder="Enter ..." wire:model="description"
                                  style="margin-top: 0px; margin-bottom: 0px; height: 83px;"></textarea>
                        @error('description') <span class="input-error">{{$message}}</span> @enderror

                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Price</label>
                            <input type="number" class="form-control" wire:model="price" id="exampleInputEmail1">
                            @error('price') <span class="input-error">{{$message}}</span> @enderror

                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Defective</label>
                        <textarea class="form-control" rows="3" placeholder="Enter ..." wire:model="defective"
                                  style="margin-top: 0px; margin-bottom: 0px; height: 83px;"></textarea>
                        @error('defective') <span class="input-error">{{$message}}</span> @enderror

                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Advantage</label>
                        <textarea class="form-control" rows="3" placeholder="Enter ..." wire:model="advantage"
                                  style="margin-top: 0px; margin-bottom: 0px; height: 83px;"></textarea>
                        @error('advantage') <span class="input-error">{{$message}}</span> @enderror

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-6">
                    <label class="">Status</label>
                    <div class="switch-field">
                        <input type="radio" id="radio-one" name="switch-one" wire:model="status" value="1" checked/>
                        <label for="radio-one">On</label>
                        <input type="radio" id="radio-two" name="switch-one" wire:model="status" value="0"/>
                        <label for="radio-two">Off</label>
                        @error('status') <span class="input-error">{{$message}}</span> @enderror

                    </div>
                </div>
                <div class="col-6 custom-file">
                    <div class="row">
                        <div class="col-6">
                            <input type="file" class="custom-file-input" id="customFile" wire:model="image">
                            <label class="custom-file-label" for="customFile">Choose Image</label>
                            @error('new_image') <span class="input-error">{{$message}}</span> @enderror

                        </div>
                        @if($image)
                            <div class="col-6 ">
                                <img src="{{$image->temporaryUrl()}}" width="150" height="100">
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            <div>

                <button type="submit" class="btn btn-info" wire:click.prevent="newService">Update</button>
            </div>


        </div>
        <!-- /.card-body -->
    </div>
</div>
