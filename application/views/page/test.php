<p>halaman test!</p>
<?php
$mysqli = new mysqli('localhost', 'root', 'mysql', 'codeigniter');

 if(!$mysqli)

  die('Tidak bisa konek ke MySQL: ' .mysql_error());

 print 'koneksi berhasil';

 if ($result = $mysqli -> query("SELECT * FROM codeigniter")) {
    echo "Returned rows are: " . $result -> num_rows;
    // Free result set
    $result -> free_result();
  }
  $mysqli -> close();
