@extends('adminlte.master')

@section('content')

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Edit Pertanyaan</h3>
    </div>
      <!-- /.card-header -->
    <div class="card-body">  
    @foreach($data as $data)    
        <form action="/pertanyaan/{{$data->id}}" method="POST">
        @csrf
        @method('PUT')
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" value="{{$data->name}}" placeholder="Enter name" id="name" name="name">
            </div>
            <div class="form-group">
                <label for="title">Judul:</label>
                <input type="text" class="form-control" value="{{$data->title}}" placeholder="Enter Judul" id="title" name="title">
            </div>
            <div class="form-group">
                <label for="question">Pertanyaan:</label>
                <textarea id="question" class="form-control"  placeholder="Enter Question" name="question">{{$data->question}}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    @endforeach
    </div>
      <!-- /.card-body -->
</div>    
@endsection