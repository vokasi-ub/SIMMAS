@extends('template.master')
@section('content')
  <!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->
    <!-- Content Header (Page header) -->
    <section class="content-header">
<h1>Data Penduduk</h1>
<br>
      
    

          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Data Penduduk</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            @foreach($data as $p)
            <form class="form-horizontal" action="/datapenduduk/update" method="post">
               {{ csrf_field() }}
              <div class="box-body">
                  <input type="hidden" name="id_penduduk" value="{{ $p->id_penduduk }}"> <br/>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">nama penduduk</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama_penduduk" value="{{ $p->nama_penduduk }}" placeholder="......." required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">agama</label>

                  <div class="col-sm-10">
                    <input type="text" class=" form-control " ass="form-control" name="agama" value="{{ $p->agama }}" placeholder="........" required>
                  </div>
                </div>
                  <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">pendidikan</label>

                  <div class="col-sm-10">
                    <input type="text" class=" form-control " ass="form-control" name="pendidikan_terakhir" value="{{ $p->pendidikan_terakhir }}" placeholder=".........." required>
                  </div>
                </div>
                  <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">status</label>

                  <div class="col-sm-10">
                    <input type="text" class=" form-control " ass="form-control" name="status" value="{{ $p->status }}" placeholder=".........." required>
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