<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Moderator Web Kampus</title>
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/style-admin.css" type="text/css"/>
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>

<!-- jQuery untuk datepicker -->
<link rel="stylesheet" href="<?php echo base_url()?>datepicker2/smoothness.datepick.css" type="text/css" />
<script type="text/javascript" src="<?php echo base_url()?>datepicker2/jquery.datepick.js"></script>

<!-- jQuery untuk FCKEditor -->
<?php include_once(__DIR__."/../../../../fckeditor/fckeditor.php") ;?>

</head>
<script>
    $(function(){
        $('#inputDate').datepick({
        dateFormat: 'yyyy-mm-dd', firstDay: 0
    })
    });
</script>
<body>
<?php $this->load->view('moderator/include/menu');?>
<div id="context">
  	<div id="titleEdit">Add Record</div>
        <form action="<?php echo base_url()?>moderator/berita/doAdd" method="post" enctype="multipart/form-data">
            <table id="bodyEdit">
                  <tr>
                    <td>Judul</td>
                    <td>:</td>
                    <td><input type="text" name="judul" value=""/><?php echo form_error('judul')?></td>
                  </tr>
                  <tr>
                    <td>Isi</td>
                    <td>:</td>
                    <td><?php
                         $fck = new FCKeditor('isi');
                         $fck->BasePath = base_url().'fckeditor/';  ; 
                         $fck->Create();
                        ?>
                        <?php echo form_error('isi')?>
                    </td>
                  </tr>
                  <tr>
                    <td>Status</td>
                    <td>:</td>
                    <td>
                        <select name="status">
                            <option value="1">Published</option>
                            <option value="0">Unpublished</option>
                        </select>
                    </td>
                  </tr>
                  <tr>
                    <td>Postdate</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="postdate" value="<?php echo date('Y-m-d')?>" id="inputDate" class="inputDate"> 
                        <label id="closeOnSelect"><input type="hidden" checked="checked"/></label>
                        <?php echo form_error('postdate'); ?>
                    </td>
                  </tr>
                  <tr>
                    <td><input type="submit" name="add" value="add"/></td>
                  </tr>
            </table>
        </form>
    </div>
  </div>
</body>
</html>