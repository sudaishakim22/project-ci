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
                        <p style="float: right; margin: 3px;"><?php  echo anchor('ProductController/editProduct/'.$prd['id'],'update');?></p><br>
                        <form action="<?php base_url()?>ProductController" method="post">
                            <input type="number" name="quantity" class="form-control quantity" id="" value="1">
                            <button type="submit" class="btn btn-warning">input qty</button>
                        </form>
                        <div class="btn btn-success">
                            <?php echo anchor('ProductController/addCart/'.$prd['id'], 'Add to Cart');?>
                        </div>
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
    <!-- <div class="col-lg-6c ol-md-6">
        <div id="cart_details">
            <h3>Cart is Empty</h3>
        </div>
    </div> -->

    <!-- <script>
        $(document).ready(function(){

            $('add_cart').click(function(){
                var id = $(this).data("productid");
                var productName = $(this).data("productname");
                var productPrice = $(this).data("productprice");
                var quantity = $('#' + id).val();

                    if(quantity != '' && quantity > 0){
                        $.ajax({
                            url:"ProductController/addCart",
                            method:"POST",
                            data:{
                                id:id,
                                productName:productName,
                                productPrice:productPrice,
                                quantity:quantity
                            },
                            success:function(data){
                                alert("Product Added Into Cart");
                                $('#cart_details').html(data);
                                $('#' + id).val('');
                            }
                        });
                    }else {
                        alert("Please enter quantity");
                    }
            });
        });
    </script> -->
</div>
