<div class="container">
  <h2>Data Mahasiswa</h2>
  <table class="table">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <thead>
          <tr>
              <th>No</th>
              <th>Nama Lengkap</th>
              <th>Mata Kuliah</th>
              <th>UTS</th>
              <th>UAS</th>
              <th>Tugas</th>
              <th>Rerata</th>
              <th>Grade</th>
              <th>Predikat</th>
              <th>Keterangan</th>
          </tr>
      </thead>
      <tbody>
          <tr>
              <td>1</td>
              <td>Fakhirul</td>
              <td>Statistika dan Probabilitas</td>
              <td>89</td>
              <td>95</td>
              <td>80</td>
              <td>87.95</td>
              <td>A</td>
              <td>Sangat Memuaskan</td>
              <td>Lulus</td>
          </tr>
          <tr>
              <td>2</td>
              <td>Rul</td>
              <td>Statistika dan Probabilitas</td>
              <td>78</td>
              <td>81</td>
              <td>80</td>
              <td>79.75</td>
              <td>B</td>
              <td>Memuaskan</td>
              <td>Lulus</td>
          </tr>

          <?php
					/**
					* Task 3
					* 1. Import libfungsi.php
					* 2. Tampilkan data dalam bentuk table
					* 3. Berikan error handling untuk mengatasi ketika form belum disubmit
					* Note: Sesuaikan dengan isi table yang sudah ada						
					*/
            

            require_once 'libfungsi.php';		
                $no=3;
                $nama = $_POST['nama_lengkap'];
                $matkul = $_POST['matkul'];
                $uts = $_POST['nilai_uts'];
                $uas = $_POST['nilai_uas'];
                $tugas = $_POST['nilai_tugas'];
                $dn = dataNilai($uts, $uas, $tugas);
                $kelulusan = kelulusan($dn);
                $grade = grade($dn);
                $predikat = predikat($dn);
                
                echo '<hr>';
                echo '<td>' . $no;
                echo '<hr>';
                echo '<td>' . $nama;
                echo '<hr>';
                echo '<td>' . $matkul;
                echo '<hr>';
                echo '<td>' . $uts;
                echo '<hr>';
                echo '<td>' . $uas;
                echo '<hr>';
                echo '<td>' . $tugas;
                echo '<hr>';
                echo '<td>' . $dn;
                echo '<hr>';
                echo '<td>' . $grade;
                echo '<hr>';
                echo '<td>' . $predikat;
                echo '<hr>';
                echo '<td>' . $kelulusan;
                echo '<hr>';
                
          
          ?>
      </tbody>
  </table>
</div>