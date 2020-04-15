<?php


include '../../data/config.php';

$id=$_GET['id'];

$a = mysqli_query($knk, "select * from event inner join event_tiket ON event.id_event = event_tiket.id_event where event.id_event=$id");
$x = mysqli_num_rows($a);
if($x>0)
mysqli_query($knk, "delete from event_tiket where id_event=$id");
else
mysqli_query($knk, "delete from event where id_event = $id");

header("location:../manageevent.php");