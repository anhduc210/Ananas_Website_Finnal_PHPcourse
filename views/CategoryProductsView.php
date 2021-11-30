<?php 
//load file Layout.php vao day
$this->fileLayout = "LayoutProducts.php";
?>



<?php 
$allProduct = $this->modelAllProduct();
?>
<?php foreach($allProduct as $rows): ?>
<div class="prd1-right-items">
<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 item">
<div class="thumbnail">
	<div class="cont-item">
		<div class="tag-blue" id="tagz">
			<?php 
		$conn = Connection::getInstance();
    $query = $conn->query("select name from categories where id=$rows->category_status");
    $category = $query->fetch();
		echo isset($category->name) == true ? $category->name : ""; ?>
		</div>
		<img class="inormal" src="assets/upload/products/<?php echo $rows->photo; ?>" title="<?php echo $rows->name; ?>" alt="<?php echo $rows->name; ?>">
	</div>
	<div class="button">
		<a class="btn btn-prd1-buynow hidden-xs hidden-sm"
		href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>">MUA NGAY</a>
		<a class="btn btn-prd1-heart addToWishList" href="javascript:void(0)" data-liked="false" data-action="transferCartToWishList" data-idProduct="430236"></a>
	</div>
	<div class="caption">
		<h3 class="name"><a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>"><?php echo $rows->name; ?></a> </h3>
		<h3 class="color"><?php 
    $query = $conn->query("select name from categories where id=$rows->category_color");
    $category = $query->fetch();
		echo isset($category->name) == true ? $category->name : ""; ?></h3>
		<h3 id="price" class="price"><?php echo number_format($rows->price - ($rows->price * $rows->discount)/100); ?> VND 
			<span id="price_real" class="price-real">
				<?php 
				if ($rows->discount ==0) {
					
				}else{
					echo number_format($rows->price);
					echo("VNĐ");
				}

				 ?>
				
			</span>
		</h3>
	</div>
</div>
</div>
</div>
<!-- end box product -->
<?php endforeach; ?>
<!-- paging -->
                <div style="clear: both;"></div>
                <div style="margin-top: -50px;"  class="&#x70;&#x61;&#x67;&#x69;&#x6E;&#x61;&#x74;&#x69;&#x6F;&#x6E;&#x2D;&#x63;&#x6F;&#x6E;&#x74;&#x61;&#x69;&#x6E;&#x65;&#x72;">
                  <ul class="pagination">
                    <li class="page-item"><span>Trang</span></li>
                    <?php for($i = 1; $i <= $numPage; $i++): ?>
                    <li class="page-item"><a class="page-link" href="index.php?controller=products&action=category&id=<?php echo $id; ?>&p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                	<?php endfor; ?>
                  </ul>
                </div>
                <!-- end paging --> 

<div class="gotop hidden-xs hidden-sm">
<a href="#"><img src="./document/wp-content/themes/ananas/fe-assets/images/gotop.png"></a>
</div>
<div class="text-center load-more-icon">
<img src="./document/wp-content/themes/ananas/fe-assets/images/loading.gif">
</div>




