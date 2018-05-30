<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>


</head>
<body>
 <table border="1" style="border-collapse: collapse;">
        <tr style="background: grey">
            <td>NIM</td>
            <td>Nama</td>
            <td>Matakuliah</td>
            <td colspan="2"></td>
        </tr>
        <?php foreach ($data as $krs) {?>
        <tr>
            <td><?php echo $krs['no_induk']; ?></td>
            <td><?php echo $krs['nama']; ?></td>
            <td><?php echo $krs['alamat']; ?></td>
            <td><a href="<?php echo base_url()."index.php/helloworld/edit_data/".$krs['id']; ?>">Edit</td>
            <td><a href="<?php echo base_url()."index.php/helloworld/delete_data/".$krs['id']; ?>">Delete</td>
        </tr>
        <?php } ?>
    </table>
    <a href="<?php echo base_url()."index.php/helloworld/add_data";?>">Insert<
/a>

</body>
</html>