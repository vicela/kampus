<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Moderator Web Kampus</title>
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/style-admin.css" type="text/css"/>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.js"></script>
</head>
<?php $this->load->view('moderator/include/menu');?>
<body>
<div id="context">
		<div id="titleEdit">Edit record</div>
    <form action="<?php echo base_url()?>moderator/administrator/doEdit/<?php echo $data->id?>" method="post">
        <table id="bodyEdit">
            <tr>
            <td>Username</td>
            <td>:</td>
            <td><input type="text" name="username" value="<?php echo $data->username?>"/></td>
          </tr>
          <tr>
            <td>Password</td>
            <td>:</td>
            <td><input type="text" name="password" value="<?php echo $data->password?>"/></td>
          </tr>
          <tr>
            <td><input type="submit" name="edit" value="edit"/></td>
          </tr>
        </table>
    </form>
  </div>
</body>
</html>