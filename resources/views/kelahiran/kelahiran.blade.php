@extends('template.master')
@section('content')
  <!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->
    <!-- Content Header (Page header) -->
    <section class="content-header">
<h1>Data kelahiran</h1>
<br>
      <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Form Search</h3>
            </div>
            <form action="/kelahiran" method="GET">

            <div class="box-body">
              <div class="row">
                <div class="col-xs-5">
                  <div class="input-group">
                <div class="input-group-btn">
                  <button type="submit" class="btn btn-danger">Search</button>
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
              <h3 class="box-title">List Data kelahiran</h3>
       
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
                <h4 class="modal-title">Tambah Data kelahiran</h4>
              </div>
                <form class="form-horizontal" action="/inputdatakelahiran/store" method="post">
                {{ csrf_field() }}
              <div class="box-body">
              
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">no_akta</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="no_akta" placeholder="no_akta">
                  </div>
                </div>


             <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">nama_anak</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama_anak" placeholder="nama_anak">
                  </div>
                </div>


                   <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">nama_ortu</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama_ortu" placeholder="nama_ortu">
                  </div>
                </div>



                   <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">jenis_kelamin</label>
                   <div class="col-sm-10">
                    <input type="radio" name="status" value="belum menikah">belum menikah
                    <input type="radio" name="status" value="sudah menikah">sudah menikah
                  </div>

                 
                </div>

                 <div class="form-group">
                  <label class="col-sm-2">No KK</label>
                  <div class="col-sm-10">
                  <select class="form-control" name="no_kk">
                    @foreach ($datakk as $row)
                    <option value="{{$row->no_kk}}">{{$row->no_kk}}</option>
                    @endforeach
                  </select>
                </div>
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
                
                <th>id_kelahiran</th>
                <th>no_akta</th>
                <th>nama_anak</th>
                <th>nama_ortu</th>
                <th>jenis_kelamin</th>
                 <th>no_kk</th>
                <th>Tanggal Input Date</th>
                 <th>Tanggal_updata</th>
                <th>Opsi</th></tr>

             @foreach($kelahiran as $kelahiran)
                 <tr>
                  <td>{{$kelahiran->id_kelahiran}}</td>
                  <td>{{$kelahiran->no_akta}}</td>
                   <td>{{$kelahiran->nama_anak}}</td>
                   <td>{{$kelahiran->nama_ortu}}</td>
                   <td>{{$kelahiran->jenis_kelamin}}</td>
                   <td>{{$kelahiran->no_kk}}</td>
                   <td>{{$kelahiran->created_at}}</td>
                   <td>{{$kelahiran->updated_at}}</td>
                     <td>  <a href="/kelahiranedit/edit/{{ $kelahiran->id_kelahiran }}">Edit</a> 
                      | <a href="/hapus/kelahiran/{{ $kelahiran->id_kelahiran }}"onClick="return confirm('Are you sure you want to delete?')">Hapus</a></td>
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