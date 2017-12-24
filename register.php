<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ilham's Web</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="container">
  <?php include('header.php'); ?>
  <?php include('menu.php'); ?>
  <div class="content">
    <h1>Register Teman Baru</h1>
    <p>Silahkan mengisi form data di bawah ini dengan benar.....</p>
    <form id="form1" name="form1" method="post" action="">
      <table width="95%" border="0" align="center" cellpadding="4" cellspacing="4">
        <tr>
          <td width="12%"><label for="nama">Nama</label></td>
          <td width="3%">:</td>
          <td width="85%"><input type="text" name="nama" id="nama" /></td>
        </tr>
        <tr>
          <td>Jenis Kelamin</td>
          <td>:</td>
          <td>
            <label>
              <input name="jk" type="radio" id="jk_0" value="Laki-Laki" checked="checked" />
              Laki-Laki</label>
            <label>
              <input type="radio" name="jk" value="Perempuan" id="jk_1" />
              Perempuan</label>
            </td>
        </tr>
        <tr>
          <td><label for="kelas">Kelas</label></td>
          <td>:</td>
          <td><select name="kelas" id="kelas">
            <option>--&gt; Pilih Kelas &lt;--</option>
            <option value="3A">3A</option>
            <option value="3B">3B</option>
            <option value="3C">3C</option>
            <option value="3D">3D</option>
          </select></td>
        </tr>
        <tr>
          <td valign="top"><label for="alamat">Alamat</label></td>
          <td valign="top">:</td>
          <td><textarea name="alamat" id="alamat" cols="40" rows="3"></textarea></td>
        </tr>
        <tr>
          <td valign="top">Hobi</td>
          <td>:</td>
          <td>
            <label>
              <input type="checkbox" name="hobi" value="Memasak" id="hobi_0" />
              Memasak</label>
           
            <label>
              <input type="checkbox" name="hobi" value="Nonton" id="hobi_1" />
              Nonton</label>
           
            <label>
              <input type="checkbox" name="hobi" value="Ngegame" id="hobi_2" />
              Ngegame</label>
          
            <label>
              <input type="checkbox" name="hobi" value="Belanja" id="hobi_3" />
              Belanja</label>
           
            <label>
              <input type="checkbox" name="hobi" value="Memancing" id="hobi_4" />
              Memancing</label>
          
          </td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td><input type="submit" name="simpan" id="simpan" value="SIMPAN" />
          <input type="reset" name="reset" id="reset" value="RESET" /></td>
        </tr>
      </table>
    </form>
    <p>&nbsp;</p>
    <!-- end .content --></div>
  
  <?php include('footer.php'); ?>
  <!-- end .container --></div>
</body>
</html>
