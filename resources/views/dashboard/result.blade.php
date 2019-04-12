
@extends('template.master')
@section('content')
  <!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->
    <!-- Content Header (Page header) -->
    <section class="content-header">
<h1>Data Kategori</h1>
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
                <th>id</th>
                <th>Nama penduduk</th>
                <th>agama</th>
                 <th>pendidikan_terakhir</th>
                  <th>status</th>
                <th>Tanggal_Input_Date</th>
                <th>Opsi</th></tr>
             @foreach($penduduk as $penduduk)
                 <tr>
                  <td>{{$penduduk->id_penduduk}}</td>
                  <td>{{$penduduk->nama_penduduk}}</td>
                   <td>{{$penduduk->agama}}</td>
                   <td>{{$penduduk->pendidikan_terakhir}}</td>
                   <td>{{$penduduk->status}}</td>
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