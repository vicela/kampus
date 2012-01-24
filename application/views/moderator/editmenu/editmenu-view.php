<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Moderator Web Kampus</title>
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/style-admin.css" type="text/css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/flexigrid/flexigrid.css">
<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/flexigrid.js"></script>
</head>

<body>
<?php $this->load->view('moderator/include/menu');?>
<div id="context">
    
   <table id="flex1" style="display:none"></table>
   <script type="text/javascript">
        $("#flex1").flexigrid
        (
        {
        url: '<?php echo base_url()?>moderator/editmenu/getList',
        dataType: 'json',
        colModel : [
            {display: 'ID', name : 'id', width : 40, sortable : true, align: 'center'},
            {display: 'Judul Menu', name : 'menu', width : 100, sortable : true, align: 'left'},
            {display: 'Isi', name : 'isi', width : 500, sortable : true, align: 'left'},
            ],
        buttons : [
            {name: 'Edit', bclass: 'edit', onpress : test},
            {separator: true},
            ],
        searchitems : [
            {display: 'Judul Menu', name : 'menu'},
            ],
        sortname: "id",
        sortorder: "desc",
        usepager: true,
        title: 'Edit Menu',
        useRp: true,
        rp: 20,
        showTableToggleBtn: true,
        width: 900,
        onSubmit: addFormData,
        height: 410
        }
        );

        //This function adds paramaters to the post of flexigrid. You can add a verification as well by return to false if you don't want flexigrid to submit			
        function addFormData(){
        //passing a form object to serializeArray will get the valid data from all the objects, but, if the you pass a non-form object, you have to specify the input elements that the data will come from
            var dt = $('#sform').serializeArray();
            $("#flex1").flexOptions({params: dt});
            return true;
        }

        $('#sform').submit(
            function ()
                {
                    $('#flex1').flexOptions({newp: 1}).flexReload();
                    return false;
                }
        );

        function test(com,grid){
            if (com=='Delete'){
                if($('.trSelected',grid).length>0){
                    if(confirm('Delete ' + $('.trSelected',grid).length + ' items?')){
                        var items = $('.trSelected',grid);
                        var itemlist = '';
                            for(i=0;i<items.length;i++){
                                itemlist += items[i].id.substr(3)+ ',';
                            }
                            console.log(itemlist)
                    $.ajax({
                       type: "POST",
                       dataType: "json",
                       url: "<?php echo base_url()?>moderator/administrator/deleteItem",
                       data: {item : itemlist},
                       success: function(data){
                            alert("Total affected rows: "+data.total);
                            $("#flex1").flexReload();
                       }
                     });
                    }
                } else {
                    return false;
                } 
            }
            else if (com=='Add'){
                window.open('<?php echo base_url()?>moderator/administrator/addItem','_parent');
            }	
            else if (com=='Edit'){
                if(($('.trSelected',grid).length>0)&&($('.trSelected',grid).length<2)){
                    var items = $('.trSelected',grid);
                    var itemlist ='';
                        for(i=0;i<items.length;i++){
                            itemlist+= items[i].id.substr(3);
                        }
                    //window.open('admedit.php?id='+userid+'&ih='+itemlist,'_parent');
                    window.open('<?php echo base_url()?>moderator/editmenu/editItem/'+itemlist, '_parent');
                }
            }
        }
    </script>
</div>
</body>
</html>