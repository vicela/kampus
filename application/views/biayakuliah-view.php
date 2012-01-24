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
                                <p class="title">Syarat Pendaftaran</p>
                            </div>
                            <div id="content-holder">
                                <?php echo $syarat->isi?>
                                <div class="clear"></div>
                            </div>
                        </div>
                        <div id="biaya-kuliah">
                            <div class="header">
                                <p class="title">Biaya Kuliah</p>
                            </div>
                            <div id="content-holder">
                                <?php echo $biaya->isi?>
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