<?php 
  //load file LayoutTrangChu.php
  $this->fileLayout = "LayoutTrangTrong.php";
 ?>
<div class="coming-soon container-fluid">
        <div class="row bg-full">
            <div class="login-wrap">
            <div class="login-html">
                <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Đăng Nhập</label>
                <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Đăng Ký</label>
                <div class="login-form" >
                    <form class="sign-in-htm" action="index.php?controller=account&action=loginPost">
                        <div class="group">
                            <label for="user" class="label">Email</label>
                            <input id="email" type="email" class="input" name="email" required="">
                        </div>
                        <div class="group">
                            <label for="pass" class="label">Mật khẩu</label>
                            <input id="password" type="password" class="input" name="password" required="">
                        </div>
                        <div class="group">
                            <input id="check" type="checkbox" class="check" checked>
                            <label for="check"><span class="icon"></span>Nhớ thông tin đăng nhập</label>
                        </div>
                        <div class="group">
                            <input onclick="location.href='./admin';" type="submit" class="button" value="Đăng nhập" onclick="">
                        </div>
                        <div class="hr"></div>
                        <div class="foot-lnk">
                            <a href="#forgot">Quên mật khẩu</a>
                        </div>
                    </form>
                    <form class="sign-up-htm" action="index.php?controller=account&action=registerPost">
                        <div class="group">
                            <label for="user" class="label">Email</label>
                            <input id="user" type="text" class="input">
                        </div>
                        <div class="group">
                            <label for="pass" class="label">Mật khẩu</label>
                            <input id="pass" type="password" class="input" data-type="password">
                        </div>
                        <div class="group">
                            <label for="pass" class="label">Điền lại mật khẩu </label>
                            <input id="pass" type="password" class="input" data-type="password">
                        </div>
                        <div class="group">
                            <label for="pass" class="label">S</label>
                            <input id="pass" type="text" class="input">
                        </div>
                        <div class="group">
                            <input type="submit" class="button" value="Đăng Ký" onclick="btnUpIn()">
                        </div>
                        <div class="hr"></div>
                        <div class="foot-lnk">
                            <label for="tab-1">Đã có tài khoản?</label>
                        </div>
                    </form>
                </div>
            </div>
        </div>

            
        </div>
    </div>