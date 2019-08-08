<!-- halaman product / index -->
<?php 
    //var_dump($product);
    //$this->load->view("header") cara bang kunglaw

?>
<style>
    .btn {
        margin: 5px;
    }

</style>
<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <br><br>
            <h3>Daftar Product</h3>
            <ul class="list-group">
                <?php foreach($product as $prd) :?>
                    <li class="list-group-item">
                        <img src="http://localhost/apps-ci/assets/<?php echo $prd["image"];?>" alt="" width="150px" height="150px">
                        <br>
                        <?php echo $prd["productName"];?>
                        <br>
                        <?php echo $prd["productPrice"]; ?>
                        <p style="float: right; margin: 3px;"><?php echo anchor('ProductController/deleteProduct/'.$prd['id'],'delete');?></p>
                        <p style="float: right; margin: 3px;"><?php  echo anchor('ProductController/editProduct/'.$prd['id'],'update');?></p>
                    </li>
                <?php endforeach;?>
            </ul>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-6">
            <a href="<?php base_url(); ?>ProductController/addProduct" class="btn btn-primary">Tambah Data Produk</a>
        </div>
    </div>
</div>