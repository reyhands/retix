<?php

include '../../data/config.php';

$id = $_POST['id'];
$namaevent = $_POST['nama'];
$deskripsievent = $_POST['deskripsi'];
$tanggal = $_POST['tanggal'];
$jumlahjeniseventpos =$_POST['jumlahevent'];
echo $jumlahjeniseventpos;
$q = mysqli_query($knk, "update event set nama = '$namaevent', 
                              deskripsi = '$deskripsievent',
                              tanggal   = '$tanggal'
                              where id_event = '$id'"
                                                        ) ;

$c = mysqli_fetch_array($q);
echo $c;
echo $jumlahjeniseventpos;
$jumlahjeniseventdidatabase = $_POST['itungtiketdb'];
        if($jumlahjeniseventpos>0) //Kalo KOLOMNYA LEBIH DARI DEKLRASI BARU,jumlaheventpos mulai dari 0
        {
        for($i=0;$i<$jumlahjeniseventpos;$i++) // MENYIMAPN SEMENTARA DATA TICKET TAMPUNGAN DAIR POST
            {
                //echo $i;
                ${'namatiket'.$i} = $_POST["jenistiket$i"];
                ${'stoktiket'.$i} = $_POST["jumlahtiket$i"];
                ${'hargatiket'.$i} = $_POST["hargatiket$i"];
            };
        }
$n = mysqli_query($knk, "select id_tiket from event inner join event_tiket on event.id_event=event_tiket.id_event where event_tiket.id_event=$id");

$k=0;
while($m=mysqli_fetch_array($n))  //DEKLARASIIN ID KARENA BELUM BISA MAKE LIMIT YANG MANA DALAM FOR DIBAWAH NGUPDATENYA CUMAN 1 ROW AJA DALAM PERULANGAN
    {
        ${'idevent'.$k}= $m['id_tiket'];
        //echo ${'idevent'.$k};
        $k++;
    }

if($jumlahjeniseventpos==$jumlahjeniseventdidatabase) //misal updatneya ga nambah atau ngurangin jenis tiket
    {
        for($i=0;$i<$jumlahjeniseventpos;$i++)
        {echo $i;echo "update event_tiket set nama='${'namatiket'.$i}', 
        stock='${'stoktiket'.$i}',
        harga='${'hargatiket'.$i}' 
         where id_event=${'idevent'.$i}";
            mysqli_query($knk,"update event_tiket set nama='${'namatiket'.$i}', 
                                                  stock='${'stoktiket'.$i}',
                                                  harga='${'hargatiket'.$i}' 
                                                   where id_tiket=${'idevent'.$i}
                                                 "    );
                                                 } 
}

else if($jumlahjeniseventpos>$jumlahjeniseventdidatabase) // misal updatenya nambah tiket
    {
        $i=0;
        while($i<$jumlahjeniseventdidatabase) //NGUBAH KOLOM YANG DIBAWAH DLU
                    {echo $i;
                        /*echo "update event_tiket set nama='${'namatiket'.$i}', 
                    stock='${'stoktiket'.$i}',
                    harga='${'hargatiket'.$i}' 
                    where id_event=${'idevent'.$i}"; BUAT TESTING PENULISAN BENER GA */

                        mysqli_query($knk,"update event_tiket set nama='${'namatiket'.$i}', 
                                                            stock='${'stoktiket'.$i}',
                                                            harga='${'hargatiket'.$i}' 
                                                            where id_tiket=${'idevent'.$i}
                                                            "    );
                                                        $i++;  } 
                    while($i<$jumlahjeniseventpos) // NAMBAH KOLOM BARU
                        {
                            
                            mysqli_query($knk,"insert into event_tiket(nama, stock, harga, id_event)
                                                            VALUES    ('${'namatiket'.$i}',
                                                                    '${'stoktiket'.$i}',
                                                                    '${'hargatiket'.$i}',
                                                                    '$id')
                                        ");
                            $i++;
                        }
    }

else if($jumlahjeniseventpos<$jumlahjeniseventdidatabase)
    {
        $i=0;
        while($i<$jumlahjeniseventpos) //NGUBAH KOLOM YANG DIBAWAH DLU
                    {echo $i;
                        /*echo "update event_tiket set nama='${'namatiket'.$i}', 
                    stock='${'stoktiket'.$i}',
                    harga='${'hargatiket'.$i}' 
                    where id_event=${'idevent'.$i}"; BUAT TESTING PENULISAN BENER GA */

                        mysqli_query($knk,"update event_tiket set nama='${'namatiket'.$i}', 
                                                            stock='${'stoktiket'.$i}',
                                                            harga='${'hargatiket'.$i}' 
                                                            where id_tiket=${'idevent'.$i}
                                                            "    );
                                                        $i++;  } 

        while($i<$jumlahjeniseventdidatabase)
                        {
                            mysqli_query($knk,"delete from event_tiket 
                                                WHERE id_event=$id
                                                order by id_tiket desc
                                                limit 1");
                                    $i++;
                        }
    }


    header("location:../manageevent.php");

                        