<div>
    <section class="content ">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 align-self-end">
                    @if(\Illuminate\Support\Facades\Session::has('message'))
                        <div class="alert alert-success col-8 mr-auto ml-auto">
                            {{\Illuminate\Support\Facades\Session::get('message')}}
                        </div>
                    @endif

                    <div class="card col-8 mr-auto ml-auto">
                        <div class="card-body ">
                            <a href="{{route('admin.servNew')}}" class="btn btn-primary">New Service</a>

                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Slug(URL)</th>
                                    <th>Category</th>
                                    <th>Status</th>
                                    <th>Created At</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($services as $service)
                                    <tr>
                                        <td><img src="{{asset('images/services')}}/{{$service->image}}" width="200"height="130"
                                                 alt="{{$service->name}}"></td>
                                        <td>{{$service->name}}</td>
                                        <td> {{$service->slug}}</td>
                                        <td> {{$service->category->name}}</td>
                                        <td>


                                            <div class="switch-field">
                                                @if($service->status == 0)
                                                    <input type="radio" id="radio-{{$service->id}}" disabled value="1"/>
                                                    <label for="radio-{{$service->id}}">On</label>
                                                    <input type="radio" id="radio-{{$service->id}}" disabled  value="0" checked/>
                                                    <label for="radio-{{$service->id}}">Off</label>

                                                @else
                                                    <input type="radio" id="radio-{{$service->id}}" disabled  value="1" checked />
                                                    <label for="radio-{{$service->id}}">On</label>
                                                    <input type="radio" id="radio-{{$service->id}}" disabled  value="0"/>
                                                    <label for="radio-{{$service->id}}">Off</label>
                                                @endif
                                                @error('status') <span class="input-error">{{$message}}</span> @enderror

                                            </div>
                                        </td>
                                        <td>{{$service->created_at}}</td>
                                        <td>
                                            <a href="{{route('admin.servUpdate',$service->slug)}}"
                                               class="btn btn-success">Edit</a>
                                            <a href="javascript:void(0);" wire:click.prevent="delete()" class="btn btn-danger" onclick="confirm('Are you sure you want to deleted the Category from this group?') || event.stopImmediatePropagation()">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>

                                <tfoot>
                                <tr>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Slug(URL)</th>
                                    <th>Created At</th>
                                    <th>Action</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
        </div>
    </section>
</div>

@push('scripts')

    <!-- DataTables  & Plugins -->
    <script src="{{asset('dist/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('dist/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('dist/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('dist/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
    <script src="{{asset('dist/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('dist/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{asset('dist/plugins/jszip/jszip.min.js')}}"></script>
    <script src="{{asset('dist/plugins/pdfmake/pdfmake.min.js')}}"></script>
    <script src="{{asset('dist/plugins/pdfmake/vfs_fonts.js')}}"></script>
    <script src="{{asset('dist/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{asset('dist/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{asset('dist/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
    <script>

        $(function () {
            $("#example1").DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": true,
                "responsive": true,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": true,
                "responsive": true,
            });
        });
    </script>

@endpush
