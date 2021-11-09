<!DOCTYPE html>
<html>
<head>
<title>Data Sekolah Dasar</title>
<!--Bagian CSS untuk Styling Tabel-->
<style type="text/css">
          table, th, td
          {
               border: 1px solid black;
          }
</style>
</head>
<body>
 
<h3>Data Sekolah Dasar Kota Medan</h3>
<?php
// untuk meload data xml (sekolah.xml) dengan cara SimpleXML 
$sekolah = new SimpleXMLElement('http://localhost/ws/sekolah.xml', null, true);
 
// menampilkan data ke XML ke dalam tabel HTML
echo "
<table>
<tr>
<th>Nama</th>
<th>Kategori</th>
<th>Alamat</th>
<th>Kecamatan</th>
<th>Kelurahan</th>
<th>Telp</th>
</tr>
 
";
 
// melakukan looping penampilan data sekolah
foreach($sekolah as $id)
{
        echo "
<tr>
<td width='230'>{$id->nama}</td>
<td width='200'>{$id->kategori}</td>
<td width='200'>{$id->alamat}</td>
<td width='130'>{$id->kecamatan}</td>
<td width='130'>{$id->kelurahan}</td>
<td width='100'>{$id->telp}</td>
</tr>
 
";
}
echo '</table>';
?>

</body>
</html>