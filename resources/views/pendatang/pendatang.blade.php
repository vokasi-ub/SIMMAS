@extends('template.master')
@section('content')
  <!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->
    <!-- Content Header (Page header) -->
    <section class="content-header">
<h1>Data Pendatang</h1>
<br>
      <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Form Search</h3>
            </div>
            <form action="/pendatang" method="GET">

            <div class="box-body">
              <div class="row">
                <div class="col-xs-5">
                  <div class="input-group">
                <div class="input-group-btn">
                  <button type="submit" class="btn btn-danger">mau cari apa?</button>
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
              <h3 class="box-title">List Data Pendatang</h3>
       
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
                <h4 class="modal-title">Tambah Data Pendatang</h4>
              </div>
                <form class="form-horizontal" action="/inputdatapendatang/store" method="post">
                {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">tgl_pendatang</label>

                  <div class="col-sm-10">`
                    <input type="date" class="form-control" name="tgl_pendatang" placeholder="tgl_pendatang">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">alamat_pendatang</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="alamat_pendatang" placeholder="...........">
                  </div>
                </div>


             <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">keterangan</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="keterangan" placeholder="............">
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
                <th>no </th>
                <th>tgl_pendatang</th>
                <th>alamat_pendatang</th>
                <th>keterangan</th>
               
                <th>Tanggal Input Date</th>
                 <th>Tanggal_updata</th>
                <th>Opsi</th></tr>

             @foreach($pendatang as $p)
                 <tr>
                  <td>{{$p->no_pendatang}}</td>
                  <td>{{$p->tgl_pendatang}}</td>
                   <td>{{$p->alamat_pendatang}}</td>
                   <td>{{$p->keterangan}}</td>
                   
                   <td>{{$p->created_at}}</td>
                   <td>{{$p->updated_at}}</td>
                     <td>  <a href="/pendatangedit/edit/{{ $p->no_pendatang }}">Edit</a> 
                      | <a href="/hapus/pendatang/{{ $p->no_pendatang }}"  onClick="return confirm('Are you sure you want to delete?')">Hapus</a></td>
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