<?php

    require_once("../../../backend/hotel/model/hotel.php");
    require_once("../../../backend/hotel/model/hoteldao.php");

    $id = $_POST["id"];

    $data = HotelDAO::delete($id);

    if($data == true) {
        header("location: ../../../admin/view/hoteis.php");
    } else {
        header("location: ../../../admin/view/hoteis.php");
    }

?>