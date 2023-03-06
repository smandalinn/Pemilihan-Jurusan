<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "dbsiswa";

$conn = mysqli_connect($host, $user, $password, $database);

if ($conn->connect_errno) {
    die("Failed to connect to MySQL: " . $mysqli->connect_error);
}
// echo 'Connected successfully';

if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] === 'POST') {
    $nis = $_POST['nis'];
    $query = "SELECT * FROM tbsiswa WHERE nis='$nis'";

    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        echo "<script>alert('Data sudah ada di database.'); window.location.href='index.php';</script>";
        
      } else {

    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $jeniskelamin = $_POST['jeniskelamin'];
    $mapel1 = $_POST['mapel1'];
    $nilai1 = $_POST['nilai1'];
    $mapel2 = $_POST['mapel2'];
    $nilai2 = $_POST['nilai2'];
    $mapel3 = $_POST['mapel3'];
    $nilai3 = $_POST['nilai3'];
    $mapel4 = $_POST['mapel4'];
    $nilai4 = $_POST['nilai4'];
    $sql = "INSERT INTO tbsiswa(nis,nama,jeniskelamin,mapel1,nilai1,mapel2,nilai2,mapel3,nilai3,mapel4,nilai4)
        VALUES ('$nis','$nama','$jeniskelamin','$mapel1','$nilai1','$mapel2','$nilai2','$mapel3','$nilai3','$mapel4','$nilai4')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Data berhasil disimpan.');window.location.href='index.php';</script>";
    } else {
        echo "<script>alert('Data gagal disimpan.');window.location.href='index.php';</script>" . mysqli_error($conn);
    }
}

}
mysqli_close($conn);
?>
