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

function tambahdata($data)
{
    global $koneksi;
    $nama = htmlspecialchars($data["nama"]);
    $nim = htmlspecialchars($data["nim"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $email = htmlspecialchars($data["Email"]);
    $nohp = htmlspecialchars($data["no_hp"]);
    $foto = $data["foto"];

    $query = "INSERT INTO mahasiswa (nama, nim, jurusan, Email, no_hp, foto) VALUES ('$nama', '$nim', '$jurusan', '$email', '$nohp', '$foto')";
            
    mysqli_query($koneksi, $query);

    return mysqli_affected_rows($koneksi);

}

function hapusdata($id)
{
    global $koneksi;

    $query = "DELETE FROM mahasiswa WHERE id=$id";

    mysqli_query($koneksi, $query);

    return mysqli_affected_rows($koneksi);
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
