<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-10 col-md-offset-1">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Quantity</th>
                        <th class="text-center">Price</th>
                        <th class="text-center">Total</th>
                        <th> </th>
                    </tr>
                </thead>
                <tbody>
                    <?php $count = 0; $grandTotal = 0;?>
                    <?php 
                    foreach($dataCart  as  $row) : 
                            $subTotal = $row['qty']*$row['price'];
                            $grandTotal = $grandTotal + $subTotal;
                            $count++;
                        ?>
                    
                    <tr>
                        <td class="col-sm-8 col-md-6">
                        <div class="media">
                            <a class="thumbnail pull-left" href="#"> <img class="media-object" src="http://icons.iconarchive.com/icons/custom-icon-design/flatastic-2/72/product-icon.png" style="width: 72px; height: 72px;"> </a>
                            <div class="media-body">
                                <h4 class="media-heading"><a href="#"><?php echo $row['name']; ?></a></h4>
                            </div>
                        </div></td>
                        <td class="col-sm-1 col-md-1" style="text-align: center">
                        <input type="email" class="form-control" id="exampleInputEmail1" value="<?php echo $row['qty'];?>">
                        </td>
                        <td class="col-sm-1 col-md-1 text-center"><strong>IDR<?php echo number_format($row['price'], 0,",","."); ?></strong></td>
                        <td class="col-sm-1 col-md-1 text-center"><strong><?php echo $subTotal; ?></strong></td>
                        <td class="col-sm-1 col-md-1">
                        <a href="<?php echo base_url()?>ProductController/removeCart/<?php echo $row['rowid']; ?>"><button type="button" class="btn btn-danger">
                            <span class="glyphicon glyphicon-remove"></span> Remove
                        </button></a>
                    </td>
                    </tr>
                    <?php endforeach; ?>
                    <?php if($count == 0) :?>
                        <p><?php echo "cart empty"; ?></p>
                    <?php endif;?>
                    <!-- <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td><h5>Subtotal</h5></td>
                        <td class="text-right"><h5><strong>$24.59</strong></h5></td>
                    </tr> -->
                    <!-- <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td><h5>Estimated shipping</h5></td>
                        <td class="text-right"><h5><strong>$6.94</strong></h5></td>
                    </tr> -->
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td><h3>Total</h3></td>
                        <td class="text-right"><h3><strong><?php echo number_format($grandTotal, 0,",",".");?></strong></h3></td>
                    </tr>
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td>
                        <a href="<?php  base_url() ?>index"><button type="button" class="btn btn-default">
                            <span class="glyphicon glyphicon-shopping-cart"></span> Continue Shopping
                        </button></a>
                        </td>
                        <td>
                        <button type="button" class="btn btn-success">
                            Checkout <span class="glyphicon glyphicon-play"></span>
                        </button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>