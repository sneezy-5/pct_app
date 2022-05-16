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
                        <label for="inputName" class="col-sm-2 col-form-label">type</label>
                        <div class="col-sm-10">
                          <p>{{$ded->type}}</p>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">nom du décedé</label>
                        <div class="col-sm-10">
                          <p>{{$ded->ded_name}}</p>
                        </div>
                      </div>

                       <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">date du décès</label>
                        <div class="col-sm-10">
                          <p>{{$ded->ded_date}}</p>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">image</label>
                        <div class="col-sm-10">
                          <img src="{{asset('storage/image/'.$ded->image)}}" alt="ded thumbnail"   width="100" height="100" />
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