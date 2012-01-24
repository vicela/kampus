        <div id="navwrapper">
            <ul id="nav" class="floatleft">
                <li><a class="current" href="<?php echo base_url()?>moderator/administrator" id="administrator">Administrator +</a></li>
                <li><a href="<?php echo base_url()?>moderator/berita" id="berita">Berita Kampus</a></li>
                <li><a href="<?php echo base_url()?>moderator/info" id="info">Info Terbaru</a></li>
                <li><a href="<?php echo base_url()?>moderator/info" id="info">Laporan Kegiatan</a></li>
                <li><a href="<?php echo base_url()?>moderator/info" id="info">Pengumuman</a></li>
                <li><a href="<?php echo base_url()?>moderator/info" id="info">Agenda</a></li>
                
                <li><a class="dmenu" href="#" id="more">More <span class="arrowdown">▼</span></a>
                    <ul>
                        <li><a href="<?php echo base_url()?>moderator/editmenu" id="info">Edit Menu</a></li>
                    </ul>
                </li>
        </ul>
        <ul id="nav" class="floatright">
            <li><a href="#">Hi, <?php echo $this->session->userdata('username')?></a></li>
            <li><a href="<?php echo base_url()?>moderator/login/doLogout">Logout</a></li>
        </ul>
            <br class="clear">
        </div>


<script>
(function($){
    $(function(){     
     $(window).load(function(){
         var e = '<?php echo $this->uri->segment(2)?>';
         var url = $('#navwrapper a#'+e);
         $('#navwrapper a').removeClass();
         url.addClass('current');
         console.log(url)
     })
	 
});
})(jQuery)
</script>