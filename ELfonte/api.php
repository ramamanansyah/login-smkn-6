<?php
$token = "rHXeV6CSxNGwkYdcXe6C";
$target = "6282260060509, 6285711210639";



$nama = htmlspecialchars($_POST["nama"]);
$alamat = htmlspecialchars($_POST["alamat"]);
$kelas = htmlspecialchars($_POST["kelas"]);
$ket = htmlspecialchars($_POST["ket"]);

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.fonnte.com/send',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => array(
    'target' => $target,
    'message' => "Data Siswa\n\nNama: $nama\nAlamat: $alamat\nKelas: $kelas\nKeterangan: $ket",
    'delay' => '0',
  ),
  CURLOPT_HTTPHEADER => array(
    "Authorization: $token"
  ),
));

$response = curl_exec($curl);

if (curl_errno($curl)) {
  $error_msg = curl_error($curl);
    
    echo $error_msg;
  } else {
    echo "<script>alert('Berhasil Mengirim Pesan Whatsapp Ke Admin');window.location.href='index.php';</script>";
    exit; 
  
}

curl_close($curl);
?>