@extends('adminlte.master')

@section('content')

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Edit Jawaban</h3>
    </div>
      <!-- /.card-header -->
    <div class="card-body">  
    @foreach($data as $data)    
        <form action="/jawaban/{{$data->question_id}}/{{$data->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" value="{{$data->name}}" placeholder="Enter name" id="name" name="name">
        </div>
        <div class="form-group"> 
            <label for="name">Jawaban:</label>
            <textarea name="answer" id="answer" class="form-control mb-2 mr-sm-2" placeholder="Enter Jawaban" >{{$data->answer}}</textarea>
        </div>
                <button type="submit" class="btn btn-primary mb-2">Submit</button>
        </form>
    @endforeach
    </div>
      <!-- /.card-body -->
</div>    
@endsection