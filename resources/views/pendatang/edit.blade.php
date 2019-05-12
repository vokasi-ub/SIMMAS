@extends('template.master')
@section('content')
  <!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->
    <!-- Content Header (Page header) -->
    <section class="content-header">
<h1>Data Pendatang</h1>
<br>
      
    

          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Data Pendatang</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            @foreach($data as $p)
            <form class="form-horizontal" action="/datapendatang/update" method="post">
               {{ csrf_field() }}
              <div class="box-body">
                  <input type="hidden" name="no_pendatang" value="{{ $p->no_pendatang }}"> <br/>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Tanggal_pendatang</label>

                  <div class="col-sm-10">
                    <input type="date" class="form-control" name="tgl_pendatang" value="{{ $p->tgl_pendatang }}" placeholder="Email" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">alamat_pendatang</label>

                  <div class="col-sm-10">
                    <input type="text" class=" form-control " ass="form-control" name="alamat_pendatang" value="{{ $p->alamat_pendatang }}" placeholder="Password" required>
                  </div>
                </div>
                  <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">keterangan</label>

                  <div class="col-sm-10">
                    <input type="text" class=" form-control " ass="form-control" name="keterangan" value="{{ $p->keterangan }}" placeholder="Password" required>
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