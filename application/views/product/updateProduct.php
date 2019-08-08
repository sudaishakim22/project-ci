<div class="container" style="margin-top: 100px;">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Form Update Product
                </div>
                <div class="card-body">
                    <?php foreach ($product as $prd) :?>
                    <form action="<?php echo base_url().'ProductController/updateProduct'?>" method="post">
                         <div class="form-group">
                            <label for="productName">Product Name :</label>
                            <input type="hidden" name="id" value="<?php echo $prd->id?>">
                            <input type="text" class="form-control" id="productName" value="<?php echo $prd->productName?>" name="product-name">
                        </div>
                        <div class="form-group">
                            <label for="productPrice">Product Price :</label>
                            <input type="text" class="form-control" id="productPrice" value="<?php echo $prd->productPrice?>" name="product-price">
                        </div>
                        <div class="form-group">
                            <label for="productStock">Product Stock :</label>
                            <input type="text" class="form-control" id="productStock" value="<?php echo $prd->stock?>" name="product-stock">
                        </div>
                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" class="form-control" id="image-file" name="image-file">
                        </div>
                        <button type="submit" name="update" class="btn btn-primary float-right">update</button>
                    </form>
                    <?php endforeach;?>
                </div>
            </div>
        </div>
    </div>
 </div>