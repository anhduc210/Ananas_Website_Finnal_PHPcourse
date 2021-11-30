<?php 
    //load file Layout.php vao day
    $this->fileLayout = "LayoutTrangChu.php";
 ?>
<div class="home-best-seller container-fluid">
            <div class="row">
                <div class="prd-detail-title">BEST SELLER</div>
                <div id="productRef" class="prd-detail-slide">
                  <?php 
                    $hotProduct = $this->modelHotProduct();
                  ?>
                  <?php foreach($hotProduct as $rows): ?>
                          <div class="thumbnail">
                            <div class="cont-item"><a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>"><img
                                            src="assets/upload/products/<?php echo $rows->photo; ?>"></a>
                            </div>
                            <div class="caption">
                                <h3 class="name"><a
                                            href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>"><?php echo $rows->name; ?></a>
                                </h3>
                                <h3 class="color"><?php echo number_format($rows->price); ?> đ</h3>
                                <h3 class="price"><?php echo number_format($rows->price - ($rows->price * $rows->discount)/100); ?>  </h3>
                                                        </div>
                        </div>
                  <?php endforeach; ?>
                        </div>
            </div>
        </div>