<html>
<head>
    <title>Tampil Data Matakuliah</title>
</head>

<body bgcolor="pink">
     <center>
        <table>
        <tr>
            <th colspan="3">
            <h1>Tampil Data Mata Kuliah </h1>
            </th>
        </tr>
        <tr>
    <td colspan="3">
    <hr>
    </td>
    </tr>
    <tr>
        <td>Kode MTK</td>
        <td>:</td>
    <td>
        <?= $kode; ?>
    </td>
    </tr>
    <tr>
        <td>Nama MTK</td>
        <td>:</td>
    <td>
        <?= $nama; ?>
    </td>
    </tr>
    <tr>
        <td>SKS</td>
    <td>:</td>
    <td>
        <?= $sks; ?>
    </td>
    </tr>
    <tr>
    <br>
        <td colspan="3" align="center">
        <a href="<?= base_url('matakuliah'); 
        ?>">Kembali</a>
    </td>
    </tr>
    </table>
    </center>
</body>
</html>