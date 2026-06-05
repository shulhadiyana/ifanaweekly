<?php

$koneksi = mysqli_connect("localhost", "root", "root", "ifnaweekly");

function tampildata($query)
{
    global $koneksi;
    $result = mysqli_query($koneksi, $query);
    
    $rows = [];
    while($row = mysqli_fetch_assoc($result))
    {
        $rows[] = $row;
    }
    
    return $rows;
}
    //$result = mysqli_query ($koneksi, $query);
    
    /// ambil data (fetch) dari lemari mahasiswa
    /// mysqli_fetch_row array numeric (index angka)
    /// mysqli_fetch_assoc 
    /// mysqli_fetch_object
    /// mysqli_fetch_array

    //while ($mhs = mysqli_fetch_assoc($result)){
      //  var_dump($mhs);
    //}

    //echo $mhs[1];

?>
