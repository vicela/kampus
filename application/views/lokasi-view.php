            <?php $this->load->view('include/header')?>
            <?php $this->load->view('include/nav');?>
            <div id="content-section">
                <div id="content-isi">
                    <div id="slider-holder">
                        <img src="<?php echo base_url()?>assets/images/img_besar.png">
                    </div>
                    <div id="left-contents">
                        <div id="biaya-kuliah">
                            <div class="header">
                                <p class="title">Lokasi Kampus STIE Widya Jayakarta</p>
                            </div>
                            <div id="content-holder">
                                <iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps/ms?msa=0&amp;msid=202540172638911652803.0004b54b6ef895f395a41&amp;ie=UTF8&amp;ll=-6.240306,106.847856&amp;spn=0,0&amp;t=m&amp;vpsrc=6&amp;output=embed"></iframe><br /><small>Lihat <a href="http://maps.google.com/maps/ms?msa=0&amp;msid=202540172638911652803.0004b54b6ef895f395a41&amp;ie=UTF8&amp;ll=-6.240306,106.847856&amp;spn=0,0&amp;t=m&amp;vpsrc=6&amp;source=embed" style="color:#0000FF;text-align:left">STIE Widya Jayakarta</a> di peta yang lebih besar</small>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                   <?php $this->load->view('include/right-content');?>
                    <div class="clear"></div>
                </div>
            </div>
            <?php $this->load->view('include/footer');?>
        </div>
    </body>
</html>