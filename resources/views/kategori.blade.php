        </h3>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>tugas</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
  <link rel="icon" type="image/png" href="assets/images/icons/favicon.ico"/>
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="assets/vendor/animate/animate.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="assets/vendor/select2/select2.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="assets/vendor/countdowntime/flipclock.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="assets/css/util.css">
  <link rel="stylesheet" type="text/css" href="assets/css/main.css">
<!--===============================================================================================-->
</head>
<body>
  
  
  <div class="bg-img1 size1 overlay1 p-t-24" style="background-image: url('assets/images/film.jpg');">
    <div class="flex-w flex-sb-m p-l-80 p-r-74 p-b-175 respon5">
      <div class="wrappic1 m-r-30 m-t-10 m-b-10">
        <h4>
          ~173140914111054~
        </h4>
      </div>

      <div class="flex-w m-t-10 m-b-10">
        <a href="https://www.facebook.com/" class="size3 flex-c-m how-social trans-04 m-r-6">
          <i class="fa fa-facebook"></i>
        </a>

        <a href="#" class="size3 flex-c-m how-social trans-04 m-r-6">
          <i class="fa fa-twitter"></i>
        </a>

        <a href="#" class="size3 flex-c-m how-social trans-04 m-r-6">
          <i class="fa fa-youtube-play"></i>
        </a>
      </div>
    </div>
    



    <div class="flex-w flex-sa p-r-200 respon1">
      <div class="p-t-34 p-b-60 respon3">
     
        <h3 class="l1-txt2 p-b-45 respon2 respon4">
          cinemax XXI
        </h3>

        <div class="cd100"></div>


      </div>




<!--tabel-->
<br/>
<center><br><br><a href="kategori/tambah"> + Tambah Data</a><br><br>
<table border=5>
  <tr><th>ID</th><th>Nama Kategori</th><th>Slug</th><th>Tanggal Input Data</th><th>Opsi</th></tr>
  @foreach($kategori as $kategori)
    <tr>
      <td>{{$kategori->id}}</td>
      <td>{{$kategori->nama_kategory}}</td>
      <td>{{$kategori->slug}}</td>
      <td>{{$kategori->tanggal_input_date}}</td>
      <td><a href="">Lihat</a> | <a href="">Edit</a> | <a href="">Hapus</a></td>
    </tr>
  @endforeach
</table>

</center>
<!--nutup tabel-->






  

<!--===============================================================================================-->  
  <script src="assets/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
  <script src="assets/vendor/bootstrap/js/popper.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
  <script src="assets/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
  <script src="assets/vendor/countdowntime/flipclock.min.js"></script>
  <script src="assets/vendor/countdowntime/moment.min.js"></script>
  <script src="assets/vendor/countdowntime/moment-timezone.min.js"></script>
  <script src="assets/vendor/countdowntime/moment-timezone-with-data.min.js"></script>
  <script src="assets/vendor/countdowntime/countdowntime.js"></script>
  <script>
    $('.cd100').countdown100({
      /*Set Endtime here*/
      /*Endtime must be > current time*/
      endtimeYear: 0,
      endtimeMonth: 0,
      endtimeDate: 35,
      endtimeHours: 18,
      endtimeMinutes: 0,
      endtimeSeconds: 0,
      timeZone: "" 
      // ex:  timeZone: "America/New_York"
      //go to " http://momentjs.com/timezone/ " to get timezone
    });

    
  </script>
<!--===============================================================================================-->
  <script src="assets/vendor/tilt/tilt.jquery.min.js"></script>
  <script >
    $('.js-tilt').tilt({
      scale: 1.1
    })
  </script>
<!--===============================================================================================-->
  <script src="assets/js/main.js"></script>

</body>
</html>