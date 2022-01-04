<div >
    <div class="row">
        @include('sweetalert::alert')

        <div class="col-8 ml-auto mr-auto">
            @if(\Illuminate\Support\Facades\Session::has('message'))
                <div class="alert alert-success col-8 mr-auto ml-auto">
                    {{\Illuminate\Support\Facades\Session::get('message')}}
                </div>
            @endif
            <div class="card card-primary card-outline" wire:ignore.self>
                <div class="card-body box-profile form-group">
                    <div class="text-center">

                        @if($new_image)
                            <img class="profile-user-img img-fluid img-circle"
                                 src="{{$new_image->temporaryUrl()}}" alt="User profile picture">

                        @elseif($user->image)

                            <img class="profile-user-img img-fluid img-circle"
                                 src="{{asset('images/users')}}/{{$user->image}}" alt="User profile picture">
                        @else
                            <img class="profile-user-img img-fluid img-circle"
                                 src="{{asset('images/users/unknown.jpg')}}" alt="User profile picture">
                        @endif

                        @if($status == true)
                            <br>
                            <div>
                                <input class="form-control ml-auto mr-auto col-4" type="file" wire:model="new_image">
                                @error('image') <span style="text-align: center"
                                                      class="ml-auto mr-auto input-error">{{$message}}</span> @enderror
                            </div>
                            <hr>
                        @endif
                    </div>

                    <h3 class="profile-username text-center">{{$user->name}}</h3>
                    @if($status == true)
                        <div>
                            <input class="form-control ml-auto mr-auto col-4" type="text" style="text-align: center"
                                   wire:model="name" placeholder="Enter New Name">
                            @error('name') <span style="text-align: center"
                                                 class="ml-auto mr-auto input-error">{{$message}}</span> @enderror
                        </div>
                        <hr>
                    @endif

                    @if($user->bio)
                        <p class="text-muted text-center">{{$user->bio}}</p>
                        @if($status == true)
                            <div>
                                <input class="form-control ml-auto mr-auto col-4" type="text" style="text-align: center"
                                       placeholder="Enter New Name" wire:model="bio">
                                @error('bio') <span style="text-align: center"
                                                    class="ml-auto mr-auto input-error">{{$message}}</span> @enderror
                            </div>
                            <hr>
                        @endif
                    @else
                        <p class="text-muted text-center">Empty Bio !!!</p>
                        @if($status == true)
                            <div>
                                <input class="form-control ml-auto mr-auto col-4" type="text" style="text-align: center"
                                       placeholder="Enter New Nio" wire:model="bio">
                                @error('bio') <span style="text-align: center"
                                                    class="ml-auto mr-auto input-error">{{$message}}</span> @enderror
                            </div>
                            <br>
                        @endif

                    @endif
                    <ul class="list-group list-group-unbordered mb-3">
                        <li class="list-group-item">
                            <b>Email</b> <strong class="float-right">{{$user->email}}
                                @if($status == true)
                                    <div>
                                        <input class="form-control ml-auto mr-auto col-12" type="email"
                                               style="text-align: center" placeholder="Enter New Email"
                                               wire:model="email">
                                        @error('email') <span style="text-align: center"
                                                              class="ml-auto mr-auto input-error">{{$message}}</span> @enderror
                                    </div>
                                @endif</strong>
                        </li>
                    </ul>
                    @if($status == true)
                        <div>
                            <a href="#" wire:click.prevent="updateProfile({{$user->id}})"
                               class="btn btn-info btn-block"><b>Update</b></a>

                        </div>
                    @else
                        <a href="#" wire:click.prevent="statusOn" class="btn btn-primary btn-block"><b>Edit</b></a>

                    @endif
                </div>
                <!-- /.card-body -->
            </div>

        </div>
    </div>
</div>
