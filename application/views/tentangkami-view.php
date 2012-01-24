            <?php $this->load->view('include/header')?>
            <?php $this->load->view('include/nav');?>
            <div id="content-section">
                <div id="content-isi">
                    <div id="slider-holder">
                        <img src="<?php echo base_url()?>assets/images/img_besar.png">
                    </div>
                    <div id="left-contents">
                        <div id="rektor-greet">
                            <div class="header">
                                <p class="title">Sambutan dari Rektor</p>
                            </div>
                            <div id="content-holder">
                                <div id="foto-rektor">
                                    <img src="<?php echo base_url()?>assets/images/foto_rektor.png">
                                    <div class="nama-rektor">Dr. Ilyas Saad, MA, MADE</div>
                                </div>
                                <div id="greet-content">
                                    <dl>
                                        <dt>Tentang STIE Widya Jayakarta</dt>
                                        <dd class="tanggal">11 Januari 2012</dd>
                                        <dd class="isi">
                                            <?php echo $data->isi?>
                                        </dd>
                                    </dl>
                                    <div class="clear"></div>
                                </div>
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