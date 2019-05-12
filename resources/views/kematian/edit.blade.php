@extends('template.master')
@section('content')
  <!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->
    <!-- Content Header (Page header) -->
    <section class="content-header">
<h1>Data kematian</h1>
<br>
      
    

          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Data kematian</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            @foreach($data as $p)
            <form class="form-horizontal" action="/datakematian/update" method="post">
               {{ csrf_field() }}
              <div class="box-body">
                  <input type="hidden" name="id_kematian" value="{{ $p->id_kematian }}"> <br/>
             
                 <div class="form-group">
                  <label class="col-sm-2 control-label">Nama Penduduk</label>
                  <div class="col-sm-10">
                  <select class="form-control" name="id_penduduk">
                    @foreach ($penduduk as $row)
                    <option value="{{$row->id_penduduk}}">{{$row->nama_penduduk}}</option>
                    @endforeach
                  </select>
                </div>
              </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">hari_meninggal</label>

                  <div class="col-sm-10">
                    <input type="text" class=" form-control " ass="form-control" name="hari_meninggal" value="{{ $p->hari_meninggal }}" placeholder="Password" required>
                  </div>
                </div>
                  <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">tanggal_meninggal</label>

                  <div class="col-sm-10">
                    <input type="date" class=" form-control " ass="form-control" name="tanggal_meninggal" value="{{ $p->tanggal_meninggal }}" placeholder="Password" required>
                  </div>
                </div>
                  <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">tempat_meninggal</label>

                  <div class="col-sm-10">
                    <input type="text" class=" form-control " ass="form-control" name="tempat_meninggal" value="{{ $p->tempat_meninggal }}" placeholder="Password" required>
                  </div>
                </div>

                 <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">sebab_meninggal</label>

                  <div class="col-sm-10">
                    <input type="text" class=" form-control " ass="form-control" name="sebab_meninggal" value="{{ $p->sebab_meninggal }}" placeholder="Password" required>
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