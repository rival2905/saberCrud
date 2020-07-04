@extends('adminlte.master')

@section('content')
<div class="card">
        <div class="card-header">
            @foreach($data2 as $key => $data2)    
            <h3 class="card-title">Pertanyaan {{$data2->question}}</h3>
            {{$id = $data2->id}}
            @endforeach   
            
        </div>
        <div class="card-body bg-secondary">
            <form action="/jawaban/{{$id}}" method="POST">
            @csrf
                <input type="text" class="form-control mb-2 mr-sm-2" placeholder="Enter Nama" id="name" name="name">
                <input type="text" value={{$id}}  name="question_id" hidden>

                <textarea name="answer" id="answer" class="form-control mb-2 mr-sm-2" placeholder="Enter Jawaban" ></textarea>
                <button type="submit" class="btn btn-primary mb-2">Submit</button>
            </form>
        </div>     
      <!-- /.card-header -->
      <div class="card-body">
        
     
        <table id="example1" class="table table-bordered table-striped">
          <thead>
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Jawaban</th>
            <th>Aksi</th>
          </tr>
          </thead>
          <tbody>
          @foreach($data as $key => $data)
          <tr>
            <td>{{$key+1}}</td>
            <td>{{$data->name}}</td>
            <td>{{$data->answer}}</td>
            <td>
              <a href="/jawaban/edit/{{$data->id}}	"><button class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></button></a>
              <a href="/jawaban/delete/{{$data->question_id}}/{{$data->id}}	"><button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button></a></td>
          </tr>
          @endforeach
          </tbody>
          <tfoot>
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Jawaban</th>
            <th>Aksi</th>
          </tr>
          </tfoot>
        </table>
        <br>&nbsp;
        <a href="/pertanyaan">
        <button type="submit" class="btn btn-primary">Kembali ke data pertanyaan</button>
      </a>

      
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