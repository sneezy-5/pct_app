@extends('layouts.admin')

@section('content')


<div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
    
              <div class="card-body">
                <div class="tab-content">
                 
                

                  <div class="tab-pane active" id="settings">
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">commentaire</label>
                        <div class="col-sm-10">
                          <p>{{$comment}}</p>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">utilisateur</label>
                        <div class="col-sm-10">
                          <p>{{$comment}}</p>
                        </div>
                      </div>
                   
                      
                  </div>
                  
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    
          
@endsection