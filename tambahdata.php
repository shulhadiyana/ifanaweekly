<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Mahasiswa</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <h2>Tambah Data Mahasiswa</h2>
    <form action="mahasiswa.php" method="post">
        <table cellpadding="5px">
            <tr>
                <td><label for="Nama">Nama </label></td>
                <td>:</td>
                <td><input type="text" id="Nama" name="Nama"/></td>
            </tr>
            <tr>
                <td><label for="Foto">Foto </label></td>
                <td>:</td>
                <td><input type="file" id="Foto" name="Foto"/></td>
            </tr>
            <tr>
                <td><label for="UTS">UTS </label></td>
                <td>:</td>
                <td><input type="number" id="UTS" name="UTS"/></td>
            </tr>
            <tr>
                <td><label for="UAS">UAS </label></td>
                <td>:</td>
                <td><input type="number" id="UAS" name="UAS"/></td>
            </tr>
            <tr>
                <td><label for="Tugas">Tugas </label></td>
                <td>:</td>
                <td><input type="number" id="Tugas" name="Tugas"/></td>
            </tr>
            <tr>
                <td><button type="submit" name="submit"> Tambah </button></td>
            </tr>
        </table>
    </form>
    <br>
    <hr>
<form>
    <table cellpadding="5px">
        <tr>
            <td><label for="Nama">Nama</label></td>
            <td>:</td>
            <td><input type="text" id="Nama" name="Nama" required/></td>
        </tr>
         <tr>
            <td><label for="NIM">NIM</label></td>
            <td>:</td>
            <td><input type="number" id="NIM" name="NIM" required/></td>
        </tr>
        <tr>
            <td><label for="Password">Password</label></td>
            <td>:</td>
            <td><input type="password" id="Password" name="Password" required/></td>
        </tr>
        <tr>
            <td><label for="Email">Email</label></td>
            <td>:</td>
            <td><input type="email" id="Email" name="Email" required/></td>
        </tr>
         <tr>
            <td><label for="NoHP">No HP</label></td>
            <td>:</td>
            <td><input type="tel" id="NoHP" name="NoHP"/></td>
        </tr>
        <tr>
            <td><label for="Website">Website pribadi</label></td>
            <td>:</td>
            <td><input type="url" id="Website" name="Website" placeholder="https://example.com"/></td>
        </tr>
        <tr>
            <td><label for="TanggalLahir">Tanggal lahir</label></td>
            <td>:</td>
            <td><input type="date" id="TanggalLahir" name="TanggalLahir"/></td>
        </tr>
        <tr>
            <td><label for="WarnaFavorit">Warna favorit</label></td>
            <td>:</td>
            <td><input type="color" id="WarnaFavorit" name="WarnaFavorit" value="#ff0000"/></td>
        </tr>
        <tr>
            <td><label for="Kepuasan">Tingkat kepuasan</label></td>
            <td>:</td>
            <td>
                <input type="range" id="Kepuasan" name="Kepuasan" min="0" max="100" value="50"/>
                <span id="rangeValue">50</span>
            </td>
        </tr>
        <tr>
            <td><label>Jenis kelamin</label></td>
            <td>:</td>
            <td>
                <input type="radio" id="Laki" name="JenisKelamin" value="Laki-laki"/>
                <label for="Laki">Laki-laki</label>
                <input type="radio" id="Perempuan" name="JenisKelamin" value="Perempuan"/>
                <label for="Perempuan">Perempuan</label>
            </td>
        </tr>
        <tr>
            <td><label>Hobi</label></td>
            <td>:</td>
            <td>
                <input type="checkbox" id="Hobi1" name="Hobi" value="Membaca"/>
                <label for="Hobi1">Membaca</label>
                <input type="checkbox" id="Hobi2" name="Hobi" value="Olahraga"/>
                <label for="Hobi2">Olahraga</label>
                <input type="checkbox" id="Hobi3" name="Hobi" value="Musik"/>
                <label for="Hobi3">Musik</label>
                <input type="checkbox" id="Hobi4" name="Hobi" value="Game"/>
                <label for="Hobi4">Game</label>
            </td>
        </tr>
        <tr>
            <td><label for="Foto">Upload foto</label></td>
            <td>:</td>
            <td><input type="file" id="Foto" name="Foto" accept="image/*"/></td>
        </tr>
        <tr>
            <td><label for="Alamat">Alamat</label></td>
            <td>:</td>
            <td>
                <textarea id="Alamat" name="Alamat" rows="3" cols="30"></textarea>
            </td>
        </tr>
        <tr>
            <td><label for="Jurusan">Jurusan</label></td>
            <td>:</td>
            <td>
                <select id="Jurusan" name="Jurusan">
                    <option value="Teknik Informatika">Teknik Informatika</option>
                    <option value="Sistem Informasi">Sistem Informasi</option>
                    <option value="Teknik Komputer">Teknik Komputer</option>
                    <option value="Manajemen Informatika">Manajemen Informatika</option>
                </select>
            </td>
        </tr>
        <tr>
            <td colspan="3" align="center">
                <button type="submit" name="submit">Submit</button>
            </td>
        </tr>
    </table>
</form>
</body>
</html>