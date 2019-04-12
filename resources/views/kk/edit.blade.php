@extends('template.master')
@section('content')
  <!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->
    <!-- Content Header (Page header) -->
    <section class="content-header">
<h1>Data Kartu keluarga</h1>
<br>
      
    

          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Data Pendatang</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            @foreach($data as $p)
            <form class="form-horizontal" action="/datakk/update" method="post">
               {{ csrf_field() }}
              <div class="box-body">
                  <input type="hidden" name="no_kk" value="{{ $p->no_kk }}"> <br/>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">nama_kk</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama_kk" value="{{ $p->nama_kk }}" placeholder="...">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">alamat_kk</label>

                  <div class="col-sm-10">
                    <input type="text" class=" form-control " ass="form-control" name="alamat_kk" value="{{ $p->alamat_kk }}" placeholder="Password">
                  </div>
                </div>
                 
      
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-default" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-info pull-right">Simpan</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
        </section>
        @endforeach

    <!-- /.content -->
  
    <!-- /.content -->
@endsection