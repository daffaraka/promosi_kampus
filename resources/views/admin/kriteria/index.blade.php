@extends('admin.layouts.adminlayout')
@section('script_head')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endsection
@section('content')
    <!-- Default box -->
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-xl-12 col-sm-12 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-header">
                        <div class="row">

                            <h3 class="card-title col-6">
                                <a href="{{ route('kriteria.create') }}" class="btn btn-success"> + Tambah Kriteria</a>

                            </h3>
                            @if (session('status'))
                                <div class="alert alert-success alert-dismissible ">
                                    <button type="button" class="close btn btn-danger btn-close bg-danger"
                                        data-dismiss="alert" aria-hidden="true">×</button>
                                    <h4><i class="icon fa fa-check"></i> Berhasil!</h4>
                                    {{ session('status') }}
                                </div>
                            @endif
                            <div class="card-tools col-6 text-end">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                {{-- <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                    <i class="fas fa-times"></i>
                                </button> --}}
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-0  table-responsive" style="margin: 20px">
                        <table id="previewAkun" class="table table-striped table-bordered display" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Kriteria</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($kriteria as $data)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $data->nama_kriteria }}</td>
                                        <td>
                                            @if ($data->status === '1')
                                            <a  class="btn btn-success" href="{{route('kriteria.updatestatus',$data->id)}}">
                                              Active
                                            </a>
                                            @else
                                            <a  class="btn btn-secondary"  href="{{route('kriteria.updatestatus',$data->id)}}">
                                               Non Active
                                            </a>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{route('kriteria.edit',$data->id)}}"><i class='fas fa-edit fa-lg'></i></a>
                                            <a style='border: none; background-color:transparent;' href="{{route('kriteria.delete',$data->id)}}">
                                                <i class='fas fa-trash fa-lg text-danger'></i></a>
                                        </td>
                                    <tr>
                                @endforeach


                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
    </div>
    <!-- /.card -->
    @endsection @section('script_footer')
    <script src="{{ asset('vendor/adminlte3/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('vendor/adminlte3/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('vendor/adminlte3/js/adminlte.min.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    {{-- <script src="../../dist/js/demo.js"></script> --}}

    <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
@endsection
