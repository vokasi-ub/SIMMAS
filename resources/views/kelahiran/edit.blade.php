@extends('template.master')
@section('content')
  <!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->
    <!-- Content Header (Page header) -->
    <section class="content-header">
<h1>Data kelahiran</h1>
<br>
      
    

          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Data kelahiran</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            @foreach($data as $p)
            <form class="form-horizontal" action="/datakelahiran/update" method="post">
               {{ csrf_field() }}
              <div class="box-body">
                  <input type="hidden" name="id_kelahiran" value="{{ $p->id_kelahiran }}"> <br/>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">no_akta</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="no_akta" value="{{ $p->no_akta }}" placeholder="Email">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">nama_anak</label>

                  <div class="col-sm-10">
                    <input type="text" class=" form-control " ass="form-control" name="nama_anak" value="{{ $p->nama_anak }}" placeholder="Password">
                  </div>
                </div>
                  <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">nama_ortu</label>

                  <div class="col-sm-10">
                    <input type="text" class=" form-control " ass="form-control" name="nama_ortu" value="{{ $p->nama_ortu }}" placeholder="Password">
                  </div>
                </div>
                  <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">jenis_kelamin</label>

                  <div class="col-sm-10">
                    <input type="text" class=" form-control " ass="form-control" name="jenis_kelamin" value="{{ $p->jenis_kelamin }}" placeholder="Password">
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