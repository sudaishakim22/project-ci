 <div class="container" style="margin-top: 100px;">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Form Tambah Product
                </div>
                <div class="card-body">
                    <?php if(validation_errors()) : ?>
                        <div class="alert alert-danger" role="alert">
                                <?= validation_errors(); ?>
                        </div>
                    <?php endif; ?>
                    <form action="" method="post" enctype="multipart/form-data">
                         <div class="form-group">
                            <label for="productName">Product Name :</label>
                            <input type="text" class="form-control" id="productName" placeholder="input your product" name="product-name">
                        </div>
                        <div class="form-group">
                            <label for="productPrice">Product Price :</label>
                            <input type="text" class="form-control" id="productPrice" placeholder="" name="product-price">
                        </div>
                        <div class="form-group">
                            <label for="productStock">Product Stock :</label>
                            <input type="text" class="form-control" id="productStock" placeholder="" name="product-stock">
                        </div>
                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" class="form-control" id="image-file" name="image-file">
                        </div>
                        <button type="submit" name="add" class="btn btn-primary float-right">Add Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

 </div>