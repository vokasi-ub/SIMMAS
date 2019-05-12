@extends('template.master')
@section('content')
  <!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->
    <!-- Content Header (Page header) -->


<section class="content-header">
  <h1>Data penduduk</h1>
    <br>
      <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Form Search</h3>
            </div>

            <form action="/penduduk" method="GET">
              <div class="box-body">
              <div class="row">
                <div class="col-xs-5">
                  <div class="input-group">
                    <div class="input-group-btn">
                    <button type="submit" class="btn btn-danger">Cari Apa</button>
                    </div>
                <!-- /btn-group -->
                
                      <input type="text" class="form-control" name="cari" placeholder="Cari Data">
                  </div>
                  <button><a href="penduduk">BACK</a></button>

                </div>
              </div>
            </div>
          </form>
            <!-- /.box-body -->
          </div>
    

          <div class="box box-danger">
            <div class="box-header">
              <h3 class="box-title">List Data penduduk</h3>
       
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
                <h4 class="modal-title">Tambah Data penduduk</h4>
              </div>
                <form class="form-horizontal" action="/inputdatapenduduk/store" method="post">
                {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nama penduduk</label>

                  <div class="col-sm-10">`
                    <input type="text" class="form-control" name="nama_penduduk" placeholder="........" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">agama</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="agama" placeholder="......." required>
                  </div>
                </div>


             <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">P.terakhir</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="pendidikan_terakhir" placeholder="......"required>
                  </div>
                </div>


                   <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">status</label>
                  <div class="col-sm-10">
                    <input type="radio" name="status" value="belum menikah">belum menikah
                    <input type="radio" name="status" value="sudah menikah">sudah menikah
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
                <th>Nama penduduk</th>
                <th>agama</th>
                <th>pendidikan_terakhir</th>
                <th>status</th>
                <th>Tanggal Input Date</th>
                 <th>Tanggal_updata</th>
                <th>Opsi</th></tr>

             @foreach($penduduk as $penduduk)
                 <tr>
                  <td>{{$penduduk->id_penduduk}}</td>
                  <td>{{$penduduk->nama_penduduk}}</td>
                   <td>{{$penduduk->agama}}</td>
                   <td>{{$penduduk->pendidikan_terakhir}}</td>
                   <td>{{$penduduk->status}}</td>
                   <td>{{$penduduk->created_at}}</td>
                   <td>{{$penduduk->updated_at}}</td>
                     <td>  <a href="/pendudukedit/edit/{{ $penduduk->id_penduduk }}">Edit</a> 
                      | <a href="/hapus/penduduk/{{ $penduduk->id_penduduk }}"onClick="return confirm('Are you sure you want to delete?')">Hapus</a></td>

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