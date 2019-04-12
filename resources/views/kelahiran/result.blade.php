
@extends('template.master')
@section('content')
  <!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->
    <!-- Content Header (Page header) -->
    <section class="content-header">
<h1>Data kelahiran</h1>
<br>
     
    
@if (count($hasil))
          <div class="box box-danger">
            <div class="box-header">
              <h3 class="box-title">Data Result</h3>

       
            </div>

            <div class="box-body">
              <a href="kelahiran"> Lihat Semua Data</a>
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                <th>id_kelahiran</th>
                <th>no_akta</th>
                <th>nama_anak</th>
                <th>nama_ortu</th>
                <th>jenis_kelamin</th>
                <th>no_kk</th>
                <th>Tanggal_Input_Date</th>
                <th>Opsi</th></tr>
             @foreach($kelahiran as $kelahiran)
                 <tr>
                   <td>{{$kelahiran->id_kelahiran}}</td>
                  <td>{{$kelahiran->no_akta}}</td>
                  <td>{{$kelahiran->nama_anak}}</td>
                   <td>{{$kelahiran->nama_ortu}}</td>
                   <td>{{$kelahiran->jenis_kelamin}}</td>
                   <td>{{$kelahiran->no_kk}}</td>
                   <td>{{$kelahiran->tanggal_input_date}}</td>
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