<link rel="stylesheet" href="<?php echo base_url()?>assets/css/style-admin.css" type="text/css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/flexigrid/flexigrid.css">
<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/flexigrid.js"></script>
<div id="navwrapper">
    <ul id="nav" class="floatleft">
        <form action="<?php echo base_url()?>moderator/login/doLogin" method="post">
            <li><a class="current" id="momod">Login Page</a></li>
            <li><a>Username</a></li>
            <li><a><input type="text" name="username"></input></a></li>
            <li><a>Password</a></li>
            <li><a><input type="password" name="password"></input></a></li>
            <li><a href="#"><button type="submit"><img src="<?php echo base_url()?>assets/images/27376.png" width="16" height="16"></button></a></li>
            <li><a><?php isset($pesan) and print $pesan?></a></li>
        </form>
        
    </ul>
    <ul id="nav" class="floatright">
        
        
    </ul>
    <br class="clear">
    
</div>

