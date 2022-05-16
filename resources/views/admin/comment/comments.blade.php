
@extends('layouts.admin')

@section('content')
<div class="content-wrapper">
  <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DataTables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
  </section>
  <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Commentaire</th>
                    <th>utilisateur</th>
                    <th>modifier</th>
                     <th>voir</th>
                    <th>suprimer</th>
                  </tr>
                  </thead>
                  <tbody>
                  
                 
                  @foreach ($comments as $comment) 
                    <tr>
                      <td>{{$comment->comment}}</td>
                      <td>{{$comment->user_name}}</td>
                      
                         <td class="text-end">
                        <a class="btn btn-secondary" href="{{ route('admin.comment.show',['comment'=>$comment->id])}}">voir</a>
                      </td>
                      <td>
                        <form style="display: inline-block;" action="{{ route('admin.comment.destroy', ['comment'=>$comment->id])}}" method="post"> 
                          @csrf 
                          @method('delete')
                          <button class="btn btn-danger" type="submit">suprimer</button>
                        </form>
                      </td>
                    </tr>
                    @endforeach
                    
                  </tbody>
                 
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
      
    </section>
    
</div>

@endsection