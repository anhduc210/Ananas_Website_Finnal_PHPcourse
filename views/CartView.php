<?php 
//load file LayoutTrangChu.php
$this->fileLayout = "LayoutTrangTrong.php";
?>
<!-- CONTENT -->
<div class="main-cart container-fluid" data-cart-list>
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 main-cart-left">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 title">
          BẠN CÓ CẦN THÊM?
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <div id="productRefCart" class="item-1">

            <div class="media">
              <div class="media-left">
                <a href="https://ananas.vn/product-detail/acs001/"><img
                  class="media-object"
                  src="https://ananas.vn/wp-content/uploads/ACS001_1-500x500.jpg"
                  data-holder-rendered="true"></a>
                </div>
                <div class="media-body">
                  <h4 class="media-heading"><a
                    href="https://ananas.vn/product-detail/acs001/">Crew Socks - Ananas Typo</a>
                  </h4>
                  <h4 class="media-heading">Black</h4>
                  <h5 class="price">95.000 VND</h5>
                  <h5 class="button">
                    <button data-id="35639"
                    class="btn btn-cart btn-add-product-related">THÊM
                  </button>
                </h5>
              </div>
              
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 title-1">GIỎ HÀNG</div>
        <div class="allCart" data-cart="9138689560678381746">
          <div class="product-6821-free">
            <input type="hidden" id="productId" value="6821">
            <!-- BOX -->
            <?php foreach($_SESSION["cart"] as $product): ?>
            <div class="product-info">
              <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9 item-2">
                <div class="media">
                  <div class="media-left">
                    <a href="#"><img
                      class="media-object" src="assets/upload/products/<?php echo $product["photo"]; ?>" height="283"
                      width="283" data-holder-rendered="true"></a>
                    </div>
                    <div class="media-body">
                      <a href="index.php?controller=products&action=detail&id=<?php echo $product["id"]; ?>"><h4
                        class="media-heading"><?php echo $product["name"]; ?></h4>
                      </a>
                      <h5 class="price">
                        <span class="saleoff"><strong>Giá:</strong> <?php echo number_format($product["price"]); ?> VNĐ</span>
                      </h5>
                      <div class="row bottom">
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">

                          <h5>Size</h5>
                          <select id="size_1" class="selectpicker selectSize pickSize"
                          data-style="btn" data-page="cart"
                          data-max-options="1"
                          data-no="2"
                          data-id="430230">
                          <option>&nbsp;</option>
                          <option   >35</option>
                          <option   >36</option>
                          <option   >37</option>
                          <option   >38</option>
                          <option   >39</option>
                          <option   selected>40</option>
                          <option   >41</option>
                          <option   >42</option>
                          <option   >43</option>
                          <option   >44</option>
                          <option   >45</option>
                          <option   >46</option>
                        </select>
                      </div>
                      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <h5>Số lượng</h5>
                        <select id="quantity_1"
                        class="selectpicker selectQuantity quantity" 
                        data-style="btn" data-page="cart"
                        data-max-options="1">
                        <option>&nbsp;</option>
                        <option selected>1</option>
                        <option  >2</option>
                        <option >3</option>
                        <option >4</option>
                        <option >5</option>
                        <option >6</option>
                        <option >7</option>
                        <option >8</option>
                        <option >9</option>
                        <option >10</option>
                        <option >11</option>
                        <option >12</option>
                      </select>
                      <!-- onclick="location.href='index.php?controller=cart&action=update&id=<?php echo $product["id"]; ?>&id=';" -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 item-2-1">
              <div class="price"><?php echo number_format(($product["price"]-($product["price"]*$product["discount"])/100)*$product["number"]); ?> VNĐ                      </div>
              <div class="status">Còn hàng</div>
              <div class="button" data-id="430230"
              data-size="40"
              data-no="2 "
              data-quantity="10"
              data-current-size="40">
              <button href="javascript:void(0)" class="btn btn-like addToWishList"
              data-idProduct="430230"
              data-isProductListPage="0"
              data-liked="false"
              data-action="transferCartToWishList"
              data-img-like="./document/wp-content/themes/ananas/fe-assets/images/svg/Heart_2.svg ?"
              data-img-unlike="./document/wp-content/themes/ananas/fe-assets/images/svg/Heart.svg">
              <img src="./document/wp-content/themes/ananas/fe-assets/images/svg/Heart.svg"></button>
              <button onclick="location.href='index.php?controller=cart&action=delete&id=<?php echo $product["id"]; ?>';"
              class="btn btn-delete remove-product-in-cart"
              id="remove-product-in-cart"><img
              src="https://ananas.vn/wp-content/themes/ananas/fe-assets/images/svg/Trash_bin.svg">
            </button>
          </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"
        style="display: none">
        <div class="item-notice">Hiện tại trong hệ thống chỉ
          còn 13 sản phẩm. Vui
          lòng cập nhật lại số lượng
        </div>
      </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 item-divider "></div>
    <?php endforeach; ?>
    <!-- END BOX -->
    <div class="undo-product" style="display: none;">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 title-2">
        Hình như hơi có biến.<a href="javascript:void(0)" class="btn-undo">HOÀN TÁC</a>
      </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 item-divider-1 "></div>
  </div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 title-2 undo-all" style="display: none;">
  Hình như hơi có biến.<a href="javascript:void(0)" class="btn-undo">HOÀN TÁC TẤT CẢ</a>
</div>
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 title-3">
  <button onclick="location.href='index.php?controller=cart&action=destroy'" class="btn btn-delall btn-clearAll">XÓA HẾT</button>
</div>
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 title-3">
  <button onclick="location.href='index.php'" class="btn btn-cont">QUAY LẠI
    MUA HÀNG
  </button>
</div>

</div>

</div>
<!-- Information Payment Order            -->
<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 main-cart-right">
  <ul class="list-group">
    <li class="list-group-item title">ĐƠN HÀNG</li>
    <li class="list-group-item divider"></li>
    <li class="list-group-item title-1">NHẬP MÃ KHUYẾN MÃI</li>
    <li class="list-group-item">
      <div class="input-group">
        <input id="code" type="text" class="form-control text-uppercase" value="">
        <span class="input-group-btn">
          <button class="btn btn-apply" onclick="discount_code()" type="button">ÁP DỤNG</button>
        </span>
      </div>
    </li>
    <li class="list-group-item divider-1"></li>
    <li class="list-group-item text-1">
      <span class="title-3">Đơn hàng</span>
      <span class="title-3-1 totalPriceOfCart"><?php echo number_format($this->cartSum()); ?> VND</span>
    </li>
    <li class="list-group-item text-2">
      <span class="title-3">Giảm</span>
      <span class="title-4-1 totalDiscountOfCart"><?php echo number_format($this->cartDiscount()); ?> VND</span>
    </li>
    <li class="list-group-item divider-1"></li>
    <li class="list-group-item">
      <span class="title-5">TẠM TÍNH</span>
      <span class="title-5-1 tempPrice"><?php echo number_format($this->cartTotal()); ?> VNĐ</span>
    </li>
    <li class="list-group-item">
      <button onclick="location.href='index.php?controller=cart&action=customer';" 
      class="btn btn-cart to-checkout">
      TIẾP TỤC THANH TOÁN
    </button>
  </li>
</ul>
</div>
<!-- End Information Order            -->
</div>
<input type="hidden" value="1" class="isYourCart">
</div>