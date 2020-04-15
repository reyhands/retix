<?php

    include '../../data/config.php';
    
    $nama = $_POST['nama'];
    $deskripsi = $_POST['deskripsi'];
    $tanggal = $_POST['tanggal'];
    $jumlahjenis = $_POST['jumlahevent'];
    
    
    
    //$jumlahjenis = intval($jumlahjenis);
        //var_dump($nama,$harga,$jumlahjenis);
        mysqli_query($knk," insert into event 
                            (nama, jenis) values ('$nama', '$jumlahjenis')")
                             or die ("echo asua");
                    
                            $j=0;    
                            while($j<$jumlahjenis)
                                {
                                    echo $j;
                                    ${'jenistiket'.$j} = $_POST{'jenistiket'.$j};
                                    ${'hargatiket'.$j} = $_POST{'hargatiket'.$j};
                                    ${'jumlahtiket'.$j} = $_POST{'jumlahtiket'.$j};
                                   
                                    $jenis = ${'jenistiket'.$j};
                                    $harga = ${'hargatiket'.$j};
                                    $tiket = ${'jumlahtiket'.$j};
                                    
                                                
                            $ambil = mysqli_query($knk, "SELECT max(id_event) FROM event");
                                //TAMBAHIN KODE NGAMBIL $TERBARU DARI DATA KOLOM YANG PALING BAWAH
                                $terbaru = mysqli_fetch_array($ambil);
                             mysqli_query($knk,"insert into event_tiket 
                                                (nama, harga, id_event, stock)
                                                VALUES
                                                ('$jenis', '$harga', '$terbaru[0]', '$tiket')");

                                    $j++;   
                                }

                                
?>
