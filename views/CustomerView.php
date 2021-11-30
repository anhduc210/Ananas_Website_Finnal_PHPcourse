<?php 
  //load file LayoutTrangChu.php
  $this->fileLayout = "LayoutTrangTrong.php";
 ?>

<div class="main-cart container-fluid">
    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 main-cart-left">

            <div class="row">
                
                <form id="orderForm" method="post" action="index.php?controller=cart&action=checkout" >
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 title-1-1">THÔNG TIN GIAO HÀNG</div>
                     <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 form-group">
                        <div class="has-feedback">
                            <input type="text" class="form-control" id="inputname" placeholder="HỌ TÊN"
                                   name="customerName">
                            <span class="" aria-hidden="true"></span>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 form-group">
                        <div class="has-feedback">
                            <input type="text" class="form-control" id="inputphone" placeholder="Số điện thoại"
                                   name="customerPhone">
                            <span class="" aria-hidden="true"></span>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 form-group">
                        <div class="has-feedback">
                            <input type="text" class="form-control" id="inputemail" placeholder="Email"
                                   name="customerEmail">
                            <span class="" aria-hidden="true"></span>

                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 form-group">
                        <div class="has-feedback">
                            <input type="text" class="form-control" id="inputaddress" placeholder="Địa chỉ"
                                   name="customerAddress">
                            <span class="" aria-hidden="true"></span>

                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 form-group">
                        <div class="ck1">
                            <input type="checkbox" id="cb2" name="isNotification"/>
                            <label for="cb2"></label>
                            Cập nhật các thông tin mới nhất về chương trình từ Ananas
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 title-1">PHƯƠNG THỨC GIAO HÀNG</div>

                    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 form-group">
                        <div class="ck1">
                            <input id="cb3" type="checkbox" name="shippingType" value="normal" checked="" />
                            <label for="cb3"></label>
                            Tốc độ tiêu chuẩn (từ 3 - 5 ngày làm việc) &nbsp; &nbsp; 
                            <img class="tooltip_attach" src="https://ananas.vn/wp-content/themes/ananas/fe-assets/images/svg/icon_cham_hoi.svg">
                        </div>
                        <div class="tooltip-container" hidden>Tuỳ vào địa chỉ giao hàng mà tốc độ giao hàng tiêu chuẩn
                            sẽ khác nhau. Chúng tôi luôn cố gắng để đơn hàng đến tay bạn sớm nhất.
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 form-group title-right normal-fee">0 VNĐ</div>


                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 title-1">PHƯƠNG THỨC THANH TOÁN</div>
                                        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 form-group">
                        <div class="ck1">
                            <input onclick="$('#payment_fees').html('0');" type="radio" id="cb5" name="paymentType" class="paymentType" value="direct"
                                   checked=""/>
                            <label for="cb5"></label> Thanh toán trực tiếp khi giao hàng &nbsp; &nbsp; 
                            <img class="tooltip_attach" src="https://ananas.vn/wp-content/themes/ananas/fe-assets/images/svg/icon_cham_hoi.svg">
                            &nbsp; &nbsp; 
                            <img src="https://ananas.vn/wp-content/themes/ananas/fe-assets/images/svg/icon_COD.svg">
                        </div>
                        <div class="tooltip-container" hidden>Là phương thức thanh toán bằng tiền mặt trực tiếp khi nhận
                            hàng
                        </div>
                    </div>
    
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 form-group">
                        <div class="ck1">
                            <input onclick="$('#payment_fees').html('5,000');" type="radio" id="cb7"  name="paymentType" class="paymentType" value="onepay"/>
                            <label for="cb7"></label>
                            Thanh toán bằng thẻ quốc tế và nội địa (ATM) &nbsp; &nbsp; 
                            <img class="tooltip_attach" src="https://ananas.vn/wp-content/themes/ananas/fe-assets/images/svg/icon_cham_hoi.svg">
                            &nbsp; &nbsp; 
                            <img src="https://ananas.vn/wp-content/themes/ananas/fe-assets/images/svg/icon_Cash_visa.svg">
                        </div>
                        <div class="tooltip-container" hidden>Phương thức thanh toán sử dụng các loại thẻ quốc tế như Visa, Master, JCB,… hoặc các loại thẻ thanh toán nội địa (ATM).
                            Vui lòng đọc kĩ các cam kết thanh toán khi chọn phương thức này. Phí thanh toán đối với phương thức này hiện là 1% trên tổng giá trị giao dịch.
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 form-group">
                        <div class="ck1">
                            <input onclick="$('#payment_fees').html('10,000');" type="radio" id="cb8" name="paymentType" class="paymentType" value="momo"/>
                            <label for="cb8"></label>
                            Thanh toán bằng ví MoMo &nbsp; &nbsp; 
                            <img class="tooltip_attach" src="https://ananas.vn/wp-content/themes/ananas/fe-assets/images/svg/icon_cham_hoi.svg">
                            &nbsp; &nbsp; <img src="https://ananas.vn/wp-content/themes/ananas/fe-assets/images/svg/icon momo-01.svg">
                        </div>
                        <div class="tooltip-container" hidden>
                            Phương thức dành cho khách hàng có tài khoản và lựa chọn thanh toán qua ví điện tử MoMo.
                            Vui lòng đọc kĩ các cam kết về phương thức này trước khi quyết định. Phí thanh toán đang được áp dụng là 1% trên tổng thanh toán.
                        </div>
                    </div>
                </form>

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 main-cart-right">
            <ul class="list-group">
                <li class="list-group-item title">ĐƠN HÀNG</li>
                <li class="list-group-item divider"></li>
<?php foreach($_SESSION["cart"] as $product): ?>
                    <li class="list-group-item text-1">
                        <span class="title-6"><?php echo $product["name"]; ?></span>
                        <span class="title-6-1"><?php echo number_format($product["price"]); ?> VND</span>
                    </li>
                    <li class="list-group-item text-1-1">
                        <span class="title-6-2">Size: 40</span>
                        <span class="title-6-3">x 1</span>
                                            </li>
                    <div class="listProductFromCart"
                         data-id="430230"
                         data-size="40"
                         data-quantity="1">
                    </div>
<?php endforeach; ?>

                    <li class="list-group-item divider-1"></li>
                    <li class="list-group-item text-1">
                        <span class="title-3">Đơn hàng</span>
                        <span class="title-3-1"><span
                                    class="current-price"> <?php echo number_format($this->cartSum()); ?></span> VND</span>
                    </li>
                    <li class="list-group-item text-2-2">
                        <span class="title-3">Giảm</span>
                        <span class="title-4-1">- <span
                                    class="discount"><?php echo number_format($this->cartDiscount()); ?></span> VND</span>
                    </li>
                    <li class="list-group-item text-2-3">
                        <span class="title-21">Phí vận chuyển</span>
                        <span class="title-22"><span id="ship_price" class="shipping-fee">0</span> VND</span>
                    </li>
                    <li class="list-group-item text-2-3">
                        <span class="title-21">Phí thanh toán</span>
                        <span class="title-22"><span id="payment_fees" class="card-fee">0</span> VND</span>
                    </li>

                    <li class="list-group-item divider-1"></li>
                    <li class="list-group-item">
                        <span class="title-5">TỔNG CỘNG</span>
                        <span class="title-5-2"><span
                                    class="total-price"><?php echo number_format($this->cartTotal()); ?></span> VND</span>
                    </li>
                    <li class="list-group-item">
                        <button type="button" 
                        onclick=" load_ajax()"  
                                class="btn btn-cart btn-complete-detail "
                        >HOÀN TẤT ĐẶT HÀNG
                        </button>
                    </li>
                            </ul>
        </div>
    </div>
</div>
<!-- END CONTENT -->
<!--  onclick="location.href='index.php?controller=cart&action=checkout';" -->
<!-- type="button"   onclick=" load_ajax()"  -->