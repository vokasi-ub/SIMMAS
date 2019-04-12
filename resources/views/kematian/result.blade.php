
@extends('template.master')
@section('content')
  <!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->
    <!-- Content Header (Page header) -->
    <section class="content-header">
<h1>Data keatian</h1>
<br>
     
    
@if (count($hasil))
          <div class="box box-danger">
            <div class="box-header">
              <h3 class="box-title">Data Result</h3>

       
            </div>

            <div class="box-body">
              <a href="kematian"> Lihat Semua Data</a>
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                <th>id_kematian</th>
                <th>id_penduduk</th>
                <th>hari_meninggal</th>
                <th>tanggal_meninggal</th>
                <th>tempat_meninggal</th>
                <th>sebab_meninggal</th>
                <th>Tanggal_Input_Date</th>
                <th>Opsi</th></tr>
             @foreach($kematian as $kematian)
                 <tr>
                   <td>{{$penduduk->id_kematian}}</td>
                  <td>{{$penduduk->id_penduduk}}</td>
                  <td>{{$penduduk->hari_meninggal}}</td>
                   <td>{{$penduduk->tanggal_meninggal}}</td>
                   <td>{{$penduduk->tempat_meninggal}}</td>
                   <td>{{$penduduk->sebab_meninggal}}</td>
                   <td>{{$penduduk->tanggal_input_date}}</td>
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