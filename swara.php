<!DOCTYPE html>
<html lang="en">
<?php
require "layout/head.php";
require "include/conn.php";
require "W.php";
require "R.php";
?>

<body>
    <div id="app">
        <?php require "layout/sidebar.php";?>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>
            <div class="page-heading">
                <h3>Penentuan Bobot Menggunakan Metode SWARA
                </h3>
            </div>
            <div class="page-content">
                <section class="row">
                    <div class="col-12">
                        <div class="card">

                            <div class="card-header">
                                <h4 class="card-title">Langkah Menghitung Bobot Menggunakan Metode SWARA
                                </h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <p class="card-text">
                                        1. Data nilai bobot awal , merupakan pembootan acak atau bobot dasar dari nilai
                                        kriteria yang ada.
                                        <br>
                                        2. Urutkan nilai bobot tertinggi menjadi rangking 1.
                                        <br>
                                        3. kepentingan komparatif (Sj)
                                        mencari nilai Sj dilakukan dengan cara tahapan kriteria ke 1/3, kriteria ke 3
                                        dengan cara 2/3 kreteria ke 4 menjadi
                                        3/3 dimana 3 merupakan nilai rata-rata keseluruhan ranking awal.
                                        <br>
                                        4. Nilai Kj
                                        Nilai ini merupakan setiap nilai Sj ditambah dengan 1 dimana sesuai dengan
                                        ketentuan rumus
                                        <br>
                                        5. Mencari nilai Koefisien (Qi)
                                        dimulai dari nilai 1 sebagai ketetapan pada rumus, pada baris ke 2 atau kriteria
                                        ke 2 menjadi 1 dibagi nilai Kj
                                        kriteria ke 2 yaitu 1/1,3333 dan pada kriteria ke 3 menjadi nilai Q1 alternatif
                                        ke 2 dibagi dengan nilai Kj ke 3

                                        berarti 0,75/1,6666 dan seterusnya (Sj)
                                        <br>
                                        6. Mencari nilai akhir Bobot (Wi)
                                        Pada tahapan ini dimulai dengan nilai Qi dibagi dengan n total nilai keseluruhan
                                        Qi .setelah dapat nilainya nilai Wi
                                        merupakan nilai yang digunakan sebagai Bobot kriteria.
                                    </p>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-striped mb-0">
                                        Tabel Kriteria
                                        <tr>
                                            <th>Nama Kriteria</th>
                                            <th>Kode</th>

                                        </tr>
                                        <tr>
                                            <td>Rating</td>
                                            <td>C1</td>
                                        </tr>
                                        <tr>
                                            <td>Fasilitas</td>
                                            <td>C2</td>
                                        </tr>
                                        <tr>
                                            <td>Kebersihan</td>
                                            <td>C3</td>
                                        </tr>
                                        <tr>
                                            <td>Jarak</td>
                                            <td>C4</td>
                                        </tr>
                                        <tr>
                                            <td>Biaya</td>
                                            <td>C5</td>
                                        </tr>
                                        </tr>
                                    </table>
                                </div>

                                <br>
                                <br>
                                <div class="table-responsive">
                                    <table class="table table-striped mb-0">
                                        Tabel Pembobotan
                                        <tr>
                                            <th>Nama Kriteria</th>
                                            <th>Kode</th>
                                            <th>Nilai Bobot Awal</th>
                                            <th>Rank Awal</th>
                                            <th>Sj</th>
                                            <th>Kj(Sj+1)</th>
                                            <th>Qi</th>
                                            <th>Wi</th>
                                            <th>Kode Bobot</th>
                                            <th>Rank Akhir</th>
                                        </tr>
                                        <tr>
                                            <th>Jarak</th>
                                            <td>C4</td>
                                            <td>30</td>
                                            <td>1</td>
                                            <td>-</td>
                                            <td>1</td>
                                            <td>1</td>
                                            <td>0.3966</td>
                                            <td>W4</td>
                                            <td>1</td>
                                        </tr>
                                        <tr>
                                            <th>Rating</th>
                                            <td>C1</td>
                                            <td>25</td>
                                            <td>2</td>
                                            <td>0.33</td>
                                            <td>1.33</td>
                                            <td>0.76</td>
                                            <td>0.29745</td>
                                            <td>W1</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <th>Kebersihan</th>
                                            <td>C3</td>
                                            <td>20</td>
                                            <td>3</td>
                                            <td>0.67</td>
                                            <td>1.67</td>
                                            <td>0.45</td>
                                            <td>0.17847</td>
                                            <td>W3</td>
                                            <td>3</td>
                                        </tr>
                                        <tr>
                                            <th>Fasilitas</th>
                                            <td>C2</td>
                                            <td>15</td>
                                            <td>4</td>
                                            <td>1</td>
                                            <td>2</td>
                                            <td>0.225</td>
                                            <td>0.089235</td>
                                            <td>W2</td>
                                            <td>4</td>
                                        </tr>
                                        <tr>
                                            <th>Biaya</th>
                                            <td>C5</td>
                                            <td>10</td>
                                            <td>5</td>
                                            <td>1.33</td>
                                            <td>2.33</td>
                                            <td>0.096429</td>
                                            <td>0.038244</td>
                                            <td>W5</td>
                                            <td>5</td>
                                        </tr>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <?php require "layout/footer.php";?>
        </div>
    </div>
    <?php require "layout/js.php";?>
</body>

</html>