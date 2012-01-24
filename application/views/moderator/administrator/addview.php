<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Moderator Web Kampus</title>
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/style-admin.css" type="text/css"/>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.js"></script>
</head>
<body>
<?php $this->load->view('moderator/include/menu');?>
<div id="context">
  	<div id="titleEdit">Add Record</div>
        <form action="<?php echo base_url()?>moderator/administrator/doAdd" method="post" enctype="multipart/form-data">
            <table id="bodyEdit">
                  <tr>
                    <td>Username</td>
                    <td>:</td>
                    <td><input type="text" name="username" value=""/><?php echo form_error('username')?></td>
                  </tr>
                  <tr>
                    <td>Password</td>
                    <td>:</td>
                    <td><input type="password" name="password" value=""/><?php echo form_error('password')?></td>
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