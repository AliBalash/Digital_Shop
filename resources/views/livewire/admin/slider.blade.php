<div>

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
                                <a href="{{route('admin.slideNew')}}" class="btn btn-primary">New Slide</a>

                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>Image</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($sliders as $slider)
                                        <tr>

                                            <td><img src="{{asset('images/slide')}}/{{$slider->image}}" width="200"
                                                     height="130"
                                                ></td>
                                            <td>


                                                <div class="switch-field">
                                                    @if($slider->status == 0)
                                                        <input type="radio" id="radio-{{$slider->id}}" disabled
                                                               value="1"/>
                                                        <label for="radio-{{$slider->id}}">On</label>
                                                        <input type="radio" id="radio-{{$slider->id}}" disabled
                                                               value="0" checked/>
                                                        <label for="radio-{{$slider->id}}">Off</label>

                                                    @else
                                                        <input type="radio" id="radio-{{$slider->id}}" disabled
                                                               value="1" checked/>
                                                        <label for="radio-{{$slider->id}}">On</label>
                                                        <input type="radio" id="radio-{{$slider->id}}" disabled
                                                               value="0"/>
                                                        <label for="radio-{{$slider->id}}">Off</label>
                                                    @endif
                                                    @error('status') <span
                                                        class="input-error">{{$message}}</span> @enderror

                                                </div>
                                            </td>
                                            <td>
                                                <a href="{{route('admin.slideUpdate',$slider->id)}}"  class="btn btn-success">Edit</a>
                                                <a href="javascript:void(0);" wire:click.prevent="delete({{$slider->id}})"
                                                   class="btn btn-danger"
                                                   onclick="confirm('Are you sure you want to deleted the Category from this group?') || event.stopImmediatePropagation()">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>

                                    <tfoot>
                                    <tr>
                                        <th>Image</th>
                                        <th>status</th>
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


</div>
