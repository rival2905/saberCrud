@extends('adminlte.master')

@section('content')

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Tambah Pertanyaan</h3>
    </div>
      <!-- /.card-header -->
    <div class="card-body">      
        <form action="/pertanyaan" method="POST">
        @csrf
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" placeholder="Enter name" id="name" name="name">
            </div>
            <div class="form-group">
                <label for="title">Judul:</label>
                <input type="text" class="form-control" placeholder="Enter Judul" id="title" name="title">
            </div>
            <div class="form-group">
                <label for="question">Pertanyaan:</label>
                <textarea id="question" class="form-control" placeholder="Enter Question" name="question"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
      <!-- /.card-body -->
</div>    
@endsection