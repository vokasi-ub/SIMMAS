
@extends('template.master')
@section('content')
  <!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->
    <!-- Content Header (Page header) -->
    <section class="content-header">
<h1>Data pendatang</h1>
<br>
     
    
@if (count($hasil))
          <div class="box box-danger">
            <div class="box-header">
              <h3 class="box-title">Data Result</h3>

       
            </div>

            <div class="box-body">
              <a href="penduduk"> Lihat Semua Data</a>
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                <th>no_pendatang</th>
                <th>tgl_pendatang</th>
                <th>alamat_pendatang</th>
                 <th>keterangan</th>
             
                <th>Tanggal_Input_Date</th>
                <th>Opsi</th></tr>
             @foreach($pendatang as $pendatang)
                 <tr>
                  <td>{{$pendatang->no_pendatang}}</td>
                  <td>{{$pendatang->tgl_pendatang}}</td>
                   <td>{{$pendatang->alamat_pendatang}}</td>
                   <td>{{$pendatang->keterangan}}</td>
             
                   <td>{{$pendatang->tanggal_input_date}}</td>
                     <td><a href="">Lihat</a> | <a href="">Edit</a> | <a href="">Hapus</a></td>
    </tr>
                   @endforeach
            </tbody>
            </table> 
            </div>
            <!-- /.box-body -->
          </div>
        </section>

    <!-- /.content -->
  @else
   <div class="card-panel red darken-3 white-text">Oops.. Data Tidak Ditemukan</div>
@endif
    <!-- /.content -->
@endsection