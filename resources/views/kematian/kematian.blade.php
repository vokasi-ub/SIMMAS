@extends('template.master')
@section('content')
  <!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->
    <!-- Content Header (Page header) -->
    <section class="content-header">
<h1>Data kematian</h1>
<br>
      <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Form Search</h3>
            </div>
            <form action="/kematian" method="GET">

            <div class="box-body">
              <div class="row">
                <div class="col-xs-5">
                  <div class="input-group">
                <div class="input-group-btn">
                  <button type="submit" class="btn btn-danger">Saearch</button>
                </div>
                <!-- /btn-group -->
                
                <input type="text" class="form-control" name="cari" placeholder="Cari Data">
              </div>
                </div>
              </div>
            </div>
          </form>
            <!-- /.box-body -->
          </div>
    

          <div class="box box-danger">
            <div class="box-header">
              <h3 class="box-title">List Data kematian</h3>
       
            </div>

            <div class="box-body">
                      <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-info">
                Tambah Data
              </button><br><br>

          
          <div class="modal modal-info fade" id="modal-info">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modaal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Tambah Data kematian</h4>
              </div>
                <form class="form-horizontal" action="/inputdatakematian/store" method="post">
                {{ csrf_field() }}
              <div class="box-body">
              
                 <div class="form-group">
                  <label class="col-sm-2">Nama Penduduk</label>
                  <div class="col-sm-10">
                  <select class="form-control" name="id_penduduk">
                    @foreach ($datapenduduk as $row)
                    <option value="{{$row->id_penduduk}}">{{$row->nama_penduduk}}</option>
                    @endforeach
                  </select>
                </div>
              </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">hari_meninggal</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="hari_meninggal" placeholder="hari_meninggal">
                  </div>
                </div>


             <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">tanggal_meninggal</label>

                  <div class="col-sm-10">
                    <input type="date" class="form-control" name="tanggal_meninggal" placeholder="tanggal_meninggal">
                  </div>
                </div>


                   <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">tempat_meninggal</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="tempat_meninggal" placeholder="tempat_meninggal">
                  </div>
                </div>



                   <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">sebab_meninggal</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="sebab_meninggal" placeholder="sebab_meninggal">
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
             
              <!-- /.box-footer -->
            
              <div class="modal-footer">
                <button type="submit" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-info pull-right">save</button>
              </div>
              </form>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
            <table class="table table-bordered table-striped">
              <thead>
               <tr>
                <th>ID</th>
                <th>nama_penduduk</th>
                <th>hari_meninggal</th>
                <th>tanggal_meninggal</th>
                <th>tempat_meninggal</th>
                <th>sebab_meninggal</th>
                <th>Tanggal Input Date</th>
                 <th>Tanggal_updata</th>
                <th>Opsi</th></tr>

             @foreach($kematian as $kematian)
                 <tr>
                  <td>{{$kematian->id_kematian}}</td>
                  <td>{{$kematian->Penduduk->nama_penduduk}}</td>
                   <td>{{$kematian->hari_meninggal}}</td>
                   <td>{{$kematian->tanggal_meninggal}}</td>
                   <td>{{$kematian->tempat_meninggal}}</td>
                   <td>{{$kematian->sebab_meninggal}}</td>
                   <td>{{$kematian->created_at}}</td>
                   <td>{{$kematian->updated_at}}</td>
                     <td>  <a href="/kematianedit/edit/{{ $kematian->id_kematian }}">Edit</a> | <a href="/hapus/kematian/{{ $kematian->id_kematian }}"onClick="return confirm('Are you sure you want to delete?')">Hapus</a></td>
    </tr>
  @endforeach
            </table> 
            </div>
            <!-- /.box-body -->
          </div>
        </section>

    <!-- /.content -->
  
    <!-- /.content -->
@endsection