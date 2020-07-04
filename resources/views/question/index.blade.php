@extends('adminlte.master')

@section('content')
<div class="card">
      <div class="card-header">
        <h3 class="card-title">Data Pertanyaan</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
      <a href="/pertanyaan/create">
        <button type="submit" class="btn btn-primary">Tambah Pertanyaan</button>
      </a><br>&nbsp;
        <table id="example1" class="table table-bordered table-striped">
          <thead>
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Judul</th>
            <th>Pertanyaa</th>
            <th>Jawaban</th>
            <th>Aksi</th>
          </tr>
          </thead>
          <tbody>
          @foreach($data as $key => $data)
          <tr>
            <td>{{$key+1}}</td>
            <td>{{$data->name}}</td>
            <td>{{$data->title}}</td>
            <td>{{$data->question}}</td>
            <td><a href="/jawaban/{{$data->id}}	">Klik Here <i class="fas fa-search"></i> </a></td>
            <td>
              <a href="/pertanyaan/edit/{{$data->id}}	"><button class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></button></a>
              <a href="/pertanyaan/delete/{{$data->id}}	"><button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button></a>
            </td>

          </tr>
          @endforeach
          </tbody>
          <tfoot>
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Judul</th>
            <th>Pertanyaa</th>
            <th>Jawaban</th>
            <th>Aksi</th>
          </tr>
          </tfoot>
        </table>
      </div>
      <!-- /.card-body -->
    </div>


@endsection

@push('scripts')
<script src="{{ asset('adminlte/plugins/datatables/jquery.dataTables.js')}}"></script>
<script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>
<script>
  $(function () {
    $("#example1").DataTable();
  });
</script>
@endpush