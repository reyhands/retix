<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>ee</title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat+Alternates">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="../assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="../assets/css/Dynamic-Table.css">
    <link rel="stylesheet" href="../assets/css/Features-Boxed.css">
    <link rel="stylesheet" href="../assets/css/Footer-Dark.css">
    <link rel="stylesheet" href="../assets/css/Highlight-Phone.css">
    <link rel="stylesheet" href="../assets/css/Navigation-with-Search.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
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
    <div class="container"><div class="dynamic-table">
    <div class="row clearfix">
		<div class="col-md-12 column">
			<table class="table table-bordered table-hover dynamic-table-tab_logic">
				<thead>
					<tr>
						
						<th class="text-center">
							ID
						</th>
						<th class="text-center">
							Nama
						</th>
						<th class="text-center">
							Jenis
						</th>
						<th class="text-center">
							Harga
						</th>
						<th class="text-center">
							Total Tersedia
						</th>
						<th class="text-center">
							Tiket Terjual
						</th>
						<th >   </th>
					</tr>
				</thead>
				<tbody>
					<tr class='dynamic-table-addr0' >
					<?php
						include '../data/config.php';
						$ambil = mysqli_query($knk, "select * from event inner join event_tiket ON event.id_event = event_tiket.id_event ");
						while($event = mysqli_fetch_array($ambil))
							{ 
								$id=$event['id_event'];
								$ambilrange = mysqli_fetch_array(mysqli_query($knk, "select max(harga) as hargamax,min(harga) as hargamin from event_tiket where id_event=$id"));
								$hargamax= $ambilrange['hargamax'];
								$hargamin = $ambilrange['hargamin'];
								?>
								<tr>

								
								<td>
									<font size="3px"><?php echo $event['id_event'] ?></font>
									
								</td>

								<td>
									<a href="event/edit.php?id=<?php echo $id?>">
									<font size="3px"><?php echo $event['nama'] ?></font>
									</a>
								</td>
								
								<td>
									<font size="3px"><?php echo $event['jenis'] ?></font>
								</td>

								<td>
									<font size="3px"><?php echo "Rp ".$hargamin." ~ "."Rp $hargamax "?></font>
								</td>
									<?php
										
										$angka1 = intval($event['id_event']);
										//var_dump($angka1); BUAT NGECEK TIPE DATANYA
										$ambiltiket = mysqli_query($knk, "select *, sum(stock) as stock1, sum(sold) sold1 from event inner join event_tiket ON event.id_event = event_tiket.id_event WHERE event.id_event=$angka1" );
										while($event_tiket = mysqli_fetch_array($ambiltiket))
											{ 
												?>
													<td>
														<font size ="3px"><?php echo $event_tiket['stock1'] ?></font>
													</td>
													<td>
														<font size="3px"><?php echo $event_tiket['sold1']?></font>
													</td>
												<?php

											}
										?>
									<td><a href="event/hapus.php?id=<?php echo $id?>"> <button class="btn btn-default btn0lg" >
										<span class="glyphicon glyphicon-trash" >hapus</span></a>
									</td>
									</tr>	
								<?php
								
							}
						?>
						
					</tr>
                    <tr class='dynamic-table-addr1'></tr>
				</tbody>
			</table>
		</div>
	</div>
	
	<a href="event/ad.html" class="dynamic-table-add_row btn btn-default pull-left">Tambah Event</a><a class='dynamic-table-delete_row pull-right btn btn-default'>Delete Row</a>
	</div></div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/Dynamic-Table.js"></script>
</body>

</html>