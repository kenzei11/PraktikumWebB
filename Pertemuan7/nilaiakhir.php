<html>
<head>
	<title>Hasil Akhir</title>
</head>
<body>
	<center><h1>Program Hitung Nilai</h1></center>
		<table width="300" border="1" align="center" bordercolor="black" bgcolor="green">
  		<tr>
    		<td><?php
				$a=$_POST['nim'];
				$b=$_POST['nama'];
				$c=$_POST['jurusan'];
				$d=$_POST['tugas'];
				$e=$_POST['uts'];
				$f=$_POST['uas'];
				$g=($d+$e+$f)/3;
				if ($g>=85)
					$i=("A") and $h=("LULUS");
				else
				if ($g>=80)
					$i=("A-") and $h=("LULUS");
				else
				if ($g>=75)
					$i=("B+") and $h=("LULUS");
				else
				if ($g>=70)
					$i=("B") and $h=("LULUS");
				else
				if ($g>=65)
					$i=("B-") and $h=("LULUS");
				else
				if ($h>=60)
					$i=("C") and $h=("LULUS");
				else
				if ($g>=55)
					$i=("D") and $h=("TIDAK LULUS");
				else
				if ($g>100)
					$i=("") and $h=("NILAI SALAH");
				else
					$i=("E") and $h=("TIDAK LULUS");

				echo"NIM : $a<br>";
				echo"Nama Mahasiswa : $b<br>";
				echo"Jurusan : $c<br>";
				echo"Nilai Akhir : $g<br>";
				echo"Grade : $i<br>";
				echo"Keterangan : $h<br>";

			?></td>
  		</tr>
		</table>
</body>
</html>