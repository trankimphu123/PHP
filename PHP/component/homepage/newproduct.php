<div class="row">
    <div class="col-lg-12">
        <div class="section__title text-center">
            <h2 class="title__be--2">SẢN PHẨM<span class="color--theme"> MỚI</span></h2>
        </div>
    </div>
</div>
<!-- Start Single Tab Content -->
<div class="furniture--4 border--round arrows_style owl-carousel owl-theme row mt--50">
    <?php
    $result = getNewestProduct();
    while ($row = $result->fetch_assoc()) {
        ?>
        <!-- Start Single Product -->
        <div class="product product__style--3">
            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                <div class="product__thumb">
                    <a class="first__img" href="?page=product&id=<?php echo $row['idpr'] ?>"><img src="public/img/product/<?php echo $row['image'] ?>" alt="product image"></a>
                    <a class="second__img animation1" href="?page=product&id=<?php echo $row['idpr'] ?>"><img src="public/img/product/<?php echo $row['image'] ?>" alt="product image"></a>
                    <div class="hot__box">
                        <span class="hot-label">MỚI</span>
                    </div>
                    <div style="float: right;margin-right:30px;">size 35</div>
                    <div style="width: 100px;text-align: center;color: white;background: black;padding-left: 2%;">
                            Chi tiết
                            <!-- <?php
                                // $size = getSizeProduct($row['idpr']);
                                //while ($rows = $size->fetch_array()){?>
                            <option value="<?php //echo $rows['idsize'] ?>"><?php //echo $rows['size'], " " ?> (<?php //echo $rows['amount'] ?>)</option>
                            <?php    
                                //}
                            ?> -->
                    </div>
                </div>
                <div class="product__content content--center">
                    <h4><a href="?page=product&id=<?php echo $row['idpr'] ?>"><?php echo $row['namepr'] ?><br><span><?php echo $row['namebr'] ?></span></a></h4>
                    <ul class="prize d-flex">
                        <li><?php echo number_format($row['price']) ?> VNĐ</li>
                    </ul>
                    <div class="action">
                        
                        <div class="actions_inner">
                            <ul class="add_to_links">
                                <li><a class="wishlist" onclick="add_to_cart(<?php echo $row['idpr'] ?>, 1)"><i class="bi bi-shopping-cart-full"></i></a></li>
                            </ul>
                        </div>
                        
                    </div>
                    <div class="product__hover--content">
                        <ul class="rating d-flex">
                            <li class="on"><i class="fa fa-star-o"></i></li>
                            <li class="on"><i class="fa fa-star-o"></i></li>
                            <li class="on"><i class="fa fa-star-o"></i></li>
                            <li><i class="fa fa-star-o"></i></li>
                            <li><i class="fa fa-star-o"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start Single Product -->
    <?php
} ?>

</div>
<!-- End Single Tab Content -->
<script>
    function quick_view() {
        // alert("123");
        $("#quickview-wrapper").text('<div class="modal fade" id="productmodal" tabindex="-1" role="dialog">123</div>');
    }
</script>