<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>ee</title>
    <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat+Alternates">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="../../assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="../../assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="../../assets/css/Animated-Scrolled-Down-Heading.css">
    <link rel="stylesheet" href="../../assets/css/Dynamic-Table.css">
    <link rel="stylesheet" href="../../assets/css/Features-Boxed.css">
    <link rel="stylesheet" href="../../assets/css/Footer-Dark.css">
    <link rel="stylesheet" href="../../assets/css/Highlight-Phone.css">
    <link rel="stylesheet" href="../../assets/css/Navigation-with-Search.css">
    <link rel="stylesheet" href="../../assets/css/Pretty-Registration-Form.css">
    <link rel="stylesheet" href="../../assets/css/Profile-Edit-Form-1.css">
    <link rel="stylesheet" href="../../assets/css/Profile-Edit-Form.css">
    <link rel="stylesheet" href="../../assets/css/Responsive-Form-1.css">
    <link rel="stylesheet" href="../../assets/css/Responsive-Form.css">
    <link rel="stylesheet" href="../../assets/css/styles.css">
    <script>
    var formatas = document.getElementById("formatas");
    var i=1;
    function tambahtiketbos()
{
    formatas = document.getElementById("formatas");
    formatas.innerHTML += "<div id='tambahan"+i+"' class='form-row' style='margin-right:0px;margin-left:0px;padding-top:24px;'><div class='col-lg-4 col-xl-3 offset-lg-3 offset-xl-4' style='margin-left: 70px;padding-left: 0px;padding-right: 0px;margin-bottom:10px'><input class='form-control' type='text' placeholder='Jenis Tiket' style='padding-right: 19px;' name='jenistiket"+i+"'></div><div ></div><div class='col-lg-2 col-xl-3' ><input class='form-control' type='number' placeholder='Jumlah' name='jumlahtiket"+i+"'></div><div  class='col-lg-4 col-xl-3' style='padding-left: 0px;padding-right: 0px;margin-right: -36px;'><input class='form-control' type='number' placeholder='Harga' name='hargatiket"+i+"'><input type='hidden' value='"+(i+1)+"' name='jumlahevent'></input></div></div>";
    formatas = document.getElementById("formatas");
    i++;
} 
    function kurangtiketbos()
{
    if(i==1)
        return;
    
    var tambahan = "tambahan"+(i-1);
     var asu = document.getElementById(tambahan);
     asu.remove();
    i--;
}
    function udahadatiketnya()
    {
        formatas = document.getElementById("formatas");
        var jumlahtiket = document.getElementById("jumlahtiketnyabos").value;
        
         for(q=1;q<jumlahtiket;q++)
         {
              var namatiket = document.getElementById("namatiketnyabos"+q).value;
              var stoktiket = +document.getElementById("stoktiketnyabos"+q).value;
              var hargatiket = +document.getElementById("hargatiketnyabos"+q).value;
              formatas.innerHTML += "<div id='tambahan"+i+"' class='form-row' style='margin-right:0px;margin-left:0px;padding-top:24px;'><div class='col-lg-4 col-xl-3 offset-lg-3 offset-xl-4' style='margin-left: 70px;padding-left: 0px;padding-right: 0px;margin-bottom:10px'><input class='form-control' type='text'  style='padding-right: 19px;' name='jenistiket"+i+"' value='"+namatiket+"'></div><div ></div><div class='col-lg-2 col-xl-3' ><input class='form-control' type='number' placeholder='Jumlah' name='jumlahtiket"+i+"' value='"+stoktiket+"'></div><div  class='col-lg-4 col-xl-3' style='padding-left: 0px;padding-right: 0px;margin-right: -36px;'><input class='form-control' type='number' placeholder='Harga' name='hargatiket"+i+"' value='"+hargatiket+"'><input type='hidden' value='"+(i+1)+"' name='jumlahevent'></input></div></div>";
            //ERROR karena STOKTIKETNYABOSSAMAHARGATIKETNYABOSGABISANERIMAVALUEANGAKA KEMUNGKINAN
        //formatas.innerHTML += "<div id='tambahan"+i+"' class='form-row' style='margin-right:0px;margin-left:0px;padding-top:24px;'><div class='col-lg-4 col-xl-3 offset-lg-3 offset-xl-4' style='margin-left: 70px;padding-left: 0px;padding-right: 0px;margin-bottom:10px'><input class='form-control' type='text' placeholder='Jenis Tiket' style='padding-right: 19px;' name='jenistiket"+i+"'></div><div ></div><div class='col-lg-2 col-xl-3' ><input class='form-control' type='number' placeholder='Jumlah' name='jumlahtiket"+i+"'></div><div  class='col-lg-4 col-xl-3' style='padding-left: 0px;padding-right: 0px;margin-right: -36px;'><input class='form-control' type='number' placeholder='Harga' name='hargatiket"+i+"'></div></div><input type='hidden' value='"+(i+1)+"' name='jumlahevent'></input>";
        i++; }
        /* values dalam formnya belum keisi gara2 value dari phpnya belu masuk */
    }
    window.onload = udahadatiketnya;


</script>
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-lg sticky-top navigation-clean-search" style="height: 49px;">
        <div class="container-fluid"><a class="navbar-brand text-left" href="#">Retix</a><button data-toggle="collapse" class="navbar-toggler text-left" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse"
                id="navcol-1">
                <ul class="nav navbar-nav">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#" target="_top">Event</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#">Member</a></li>
                    <li class="nav-item" role="presentation"></li>
                </ul>
            </div><a href="#" style="margin-right: 14px;color: rgb(238,50,38);">Pengguna</a><button class="btn btn-primary text-center border rounded-circle" type="button" style="height: 35px;width: 35px;background-color: rgb(255,255,255);"></button><a href=""
                style="color: rgb(0,0,0);font-size: 16px;letter-spacing: 0px;filter: blur(0px) brightness(125%);" data-toggle="modal" data-target="#login"></a></div>
    </nav>
    <h1 class="text-center" style="font-family: Montserrat, sans-serif;font-size: 32px;margin-top: 29px;">Manage Event</h1><div><hr></div>
    <div class="container" style="padding-top: 25px;">
        <div>
            <form method="post" action="ubah.php" enctype="multipart/form-data" >
                <div class="form-group">
                    <div id="formdiv">


                    <?php
                            include '../../data/config.php';
                            $id = $_GET['id'];
                            
                            $ambilbos = mysqli_query($knk,"select * from event where event.id_event ='$id'");
                            $ambiltiket = mysqli_query($knk,"select * from event inner join event_tiket on event.id_event = event_tiket.id_event where event.id_event ='$id' ");
                            $ambiltikettambah = mysqli_query($knk,"select event_tiket.nama,event_tiket.stock,event_tiket.harga from event inner join event_tiket on event.id_event = event_tiket.id_event where event.id_event ='$id' LIMIT 1, 90 ");
     
                            $ambil = mysqli_fetch_array($ambilbos);
                            
                            $ambiltiketbos = mysqli_fetch_array($ambiltiket);

                 
                            $itungtiket = mysqli_num_rows($ambiltiket);
                            $i=1;
                            echo "<input type='hidden' id='jumlahtiketnyabos' value='$itungtiket' name='tket'>";   
                           while($ambiltikettambahbos = mysqli_fetch_array($ambiltikettambah)) 
                           {             //var_dump($ambiltikettambahbos); 
                               echo "<input type='hidden' id='namatiketnyabos$i' value='{$ambiltikettambahbos['nama']}' >";
                               echo "<input type='hidden' id='stoktiketnyabos$i' value='{$ambiltikettambahbos['stock']}' >";
                               echo "<input type='hidden' id='hargatiketnyabos$i' value='{$ambiltikettambahbos['harga']}' >";
                           $i++;}
                   ?>
                        <input type="hidden" method="post" name='id' value="<?php echo $id?>">
                        <input type="hidden" method="post" name='itungtiketdb' value="<?php echo $itungtiket?>">
                       <!-----Awal form!--->
                        <div class="form-row">
                            <div class="col" style="padding-top: 10px;">
                                <h3 class="text-center" style="font-family: Oswald, sans-serif;padding-top: 28px;">Tambah Event</h3>
                            </div>
                        </div>

                        <!---Buat Upload Photo!--->
                         <div class="form-row" style="margin-top: 13px;">
                            <div class="col-md-4 offset-lg-4 text-center relative" style="width: 145px;margin-left: 33%;">
                                <div class="avatar">
                                    <div class="border rounded-0 border-white avatar-bg center" style="width: 200px;"></div>
                                </div><input type="file" class="form-control" name="fotoevent" style="margin-top: 32px;padding-top: 6px;padding-bottom: 6px;" /></div>
                        </div>
                            


                        <div class="form-row" style="margin-right: 0px;margin-left: 0px;padding-top: 27px;">
                            <div class="col-md-8 offset-md-1">
                                <p style="margin-left:2%;font-family:Roboto, sans-serif;font-size:24px;"><strong>Nama Event</strong></p>
                            </div>
                            <div class="col-md-10 offset-md-1"><input class="form-control" type="text" name="nama" style="margin-left:0px;font-family:Roboto, sans-serif;" value="<?php echo $ambil['nama'] ?>"></div>
                        </div>
                        <div class="form-row" style="margin-right:0px;margin-left:0px;padding-top:24px;">
                            <div class="col-md-8 offset-md-1">
                                <p style="margin-left:2%;font-family:Roboto, sans-serif;font-size:24px;"><strong>Deskripsi Event</strong></p>
                            </div>
                            <div class="col-md-10 offset-md-1"><textarea class="form-control" style="font-family:Roboto, sans-serif;" name="deskripsi"><?php echo $ambil['deskripsi'] ?></textarea></div>
                        </div>
                        <div class="form-row" style="margin-right:0px;margin-left:0px;padding-top:24px;">
                            <div class="col-md-8 offset-md-1">
                                <p style="margin-left:2%;font-family:Roboto, sans-serif;font-size:24px;"><strong>Tanggal Event</strong></p>
                            </div>
                            <div class="col-md-10 offset-md-1"><input class="form-control" style="font-family:Roboto, sans-serif;" type="date" name="tanggal" value="<?php echo $ambil['tanggal'] ?>" ></div>
                        </div>
                        <div id ="formatas" class="form-row" style="margin-right:0px;margin-left:0px;padding-top:24px;">
                            <div id ="tambahan0" class="form-row" style="margin-right:0px;margin-left:0px;padding-top:24px;">
                           <div class="col-md-8 offset-md-1 offset-xl-1">
                                <p style="margin-left:2%;font-family:Roboto, sans-serif;font-size:24px;"><strong>Tiket</strong></p>
                            </div>
                            <div class="col-lg-4 col-xl-3 offset-lg-1 offset-xl-4" style="margin-left: 70px;padding-left: 0px;padding-right: 0px;"><input class="form-control" type="text" value ="<?php echo $ambiltiketbos['nama']?>" placeholder="Jenis Tiket" style="padding-right: 19px;" name='jenistiket0'></div>
                           
                            <input type='hidden' value='0' name='jumlahevent'></input>

                            <div class="col-lg-2 col-xl-3"><input class="form-control" type="number" name="jumlahtiket0" value="<?php echo $ambiltiketbos['stock']?>" ></div>
                            <div class="col-lg-4 col-xl-3" style="padding-left: 0px;padding-right: 0px;margin-right: -36px;margin-bottom: 10px;"><input class="form-control" type="number"  name="hargatiket0" value="<?php echo    $ambiltiketbos['harga'] ?>"></div>
                            <!---TEMPAT NAMBAH FORM KOLOMNYA DISINI 
                            <div class="col-lg-4 col-xl-3 offset-lg-1 offset-xl-4" style="margin-left: 70px;padding-left: 0px;padding-right: 0px;"><input class="form-control" type="text" placeholder="Jenis Tiket" style="padding-right: 19px;"></div>
                           <div class="col-lg-2 col-xl-3"><input class="form-control" type="number" placeholder="Jumlah"></div>
                           <div class="col-lg-4 col-xl-3" style="padding-left: 0px;padding-right: 0px;margin-right: -36px;margin-bottom: 10px;"><input class="form-control" type="number" placeholder="Harga"></div>
                           !---->
                           </div>
                        </div>   
                         
                     
                         <div class="form-row" style="margin-right:0px;margin-left:0px;padding-top:24px;">
                            <div class="col-7 col-lg-11 col-xl-10 offset-lg-11" style="margin-left: 1px;padding-right: -5px;padding-left: 6px;">
                                <div role="group" class="btn-group" style="margin-left: 519px;padding-left: 52px;margin-top: 15px;"><button class="btn btn-primary border rounded-circle"  onclick="tambahtiketbos(); return false;" values="ganteng" style="width: 38px;background-color: rgb(125,188,255);margin-right: 4px;">+</button><button class="btn btn-primary border rounded-circle" style="background-color: rgb(255,128,128);width: 38px;" onclick="kurangtiketbos();return false;">-</button>
                                </div>
                                        
                            </div>
                        </div>
                        <div class="form-row" style="margin-right:0px;margin-left:0px;padding-top:24px;">
                            <div class="col-12 col-md-4 offset-md-4"><button class="btn btn-light btn-lg" style="font-family:Roboto, sans-serif;" type="reset">Clear </button><button class="btn btn-light btn-lg" style="margin-left:16px;" type="submit">Submit </button></div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/Animated-Scrolled-Down-Heading.js"></script>
    <script src="assets/js/Dynamic-Table.js"></script>
    <script src="assets/js/Profile-Edit-Form.js"></script>
</body>

</html>

