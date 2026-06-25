<?php

    $koneksi = mysqli_connect("localhost", "root", "", "answeekly-ati");

    function tampildata($query)
    {
        global $koneksi;
        $result = mysqli_query($koneksi,$query);  //// didepan lemari sesuai perintah
        $rows = [];

        while($row = mysqli_fetch_assoc($result))
        {
            $rows[] = $row;
        }

        return $rows;
    }


?>