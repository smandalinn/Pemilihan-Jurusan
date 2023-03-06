<!DOCTYPE html>

<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <title>Form Pemilihan Mata Pelajaran</title>



</head>

<body>
    <div class="container">
        <header>FORM</header>

        <form action="simpan_data.php" method="POST" id="formm">

            <div class=" form" id="myForm">
                <div class="details" id="details">
                    <span class="title">Pemilihan Mata Pelajaran</span>




                    <div class="fieldsz">
                        <div class="input-fieldz">
                            <label>NIS</label>
                            <input type="text" name="nis" id="nis" placeholder="Masukan NIS" autocomplete="off" autofocus required>
                        </div>

                        <div class="input-fieldz">
                            <label>Nama</label>
                            <input type="text" name="nama" id="nama" placeholder="Masukan Nama" autocomplete="off" required>
                        </div>

                        <div class="input-fieldz">
                            <label>Jenis Kelamin</label>
                            <select required name="jeniskelamin" id="jeniskelamin">
                                <option disabled selected>Pilih-</option>
                                <option>Laki - Laki</option>
                                <option>Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="fields">
                        <div class="input-field">
                            <label>Matapelajaran Pilihan</label>
                            <select required id="mapel1" name="mapel1">
                                <option disabled selected>Pilih-</option>
                                <option value="Informatika">INFORMATIKA</option>
                                <option value="Fisika">FISIKA</option>
                                <option value="Kimia">KIMIA</option>
                                <option value="Biologi">BIOLOGI</option>
                                <option value="Geografi">GEOGRAFI</option>
                                <option value="Ekonomi">EKONOMI</option>
                                <option value="Sosiologi">SOSIOLOGI</option>

                            </select>
                        </div>

                        <div class="input-field">
                            <label>Nilai</label>
                            <input type="number" id="nilai1" name="nilai1" placeholder="Masukan Nilai" required>
                        </div>

                        <div class="input-field">
                            <label>Matapelajaran Pilihan</label>
                            <select required id="mapel2" name="mapel2">
                                <option disabled selected>Pilih-</option>
                                <option value="Informatika">INFORMATIKA</option>
                                <option value="Fisika">FISIKA</option>
                                <option value="Kimia">KIMIA</option>
                                <option value="Biologi">BIOLOGI</option>
                                <option value="Geografi">GEOGRAFI</option>
                                <option value="Ekonomi">EKONOMI</option>
                                <option value="Sosiologi">SOSIOLOGI</option>

                            </select>
                        </div>

                        <div class="input-field">
                            <label>Nilai</label>
                            <input type="number" id="nilai2" name="nilai2" placeholder="Masukan Nilai" required>
                        </div>
                        <div class="input-field">
                            <label>Matapelajaran Pilihan</label>
                            <select required id="mapel3" name="mapel3">
                                <option disabled selected>Pilih-</option>
                                <option value="Informatika">INFORMATIKA</option>
                                <option value="Fisika">FISIKA</option>
                                <option value="Kimia">KIMIA</option>
                                <option value="Biologi">BIOLOGI</option>
                                <option value="Geografi">GEOGRAFI</option>
                                <option value="Ekonomi">EKONOMI</option>
                                <option value="Sosiologi">SOSIOLOGI</option>

                            </select>
                        </div>

                        <div class="input-field">
                            <label>Nilai</label>
                            <input type="number" id="nilai3" name="nilai3" placeholder="Masukan Nilai" required>
                        </div>

                        <div class="input-field">
                            <label>Matapelajaran Pilihan</label>
                            <select required id="mapel4" name="mapel4">
                                <option disabled selected>Pilih-</option>
                                <option value="Informatika">INFORMATIKA</option>
                                <option value="Fisika">FISIKA</option>
                                <option value="Kimia">KIMIA</option>
                                <option value="Biologi">BIOLOGI</option>
                                <option value="Geografi">GEOGRAFI</option>
                                <option value="Ekonomi">EKONOMI</option>
                                <option value="Sosiologi">SOSIOLOGI</option>

                            </select>
                        </div>

                        <div class="input-field">
                            <label>Nilai</label>
                            <input type="number" id="nilai4" name="nilai4" placeholder="Masukan Nilai" required>
                        </div>
                    </div>
                </div>

                <button class="reset" type="reset" id="resetBtn">
                    <span class="btnText">Reset</span>



                </button>
                <button class="submit" type="submit" id="submitBtn">
                    <span class="btnText">Submit</span>
                    <i class="uil uil-navigator"></i>

                </button>
            </div>

        </form>
        <p id="error-message"></p>
    </div>









</body>

</html>