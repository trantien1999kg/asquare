<footer class="section__footer pt40 pb30"
    style="background-image: url(<?=_upload_hinhanh_l.$bg_footer['photo']?>); background-size: cover;border-top: 1px solid white;">
    <div class="">
        <div class="container">
            <div class="row pb45">
                <!---------------------------------------------HỖ TRỢ KHÁCH HÀNG------------------------------------------------------->
                <div class="item col-4 l-4 m-4 c-12 wow fadeInLeft" data-wow-delay="0.4s">
                    <img src="<?=_upload_hinhanh_l.$logomobile['photo']?>" alt="" class="centerimg mb15">
                    <div class="mb25 line-1 VLB fs43">
                        <?= $row_setting['scrolltext1_vi']?>&nbsp;<span
                            class="tenTT"><?= $row_setting['scrolltext2_vi']?></span>
                    </div>
                    <div class="descriptionSeo pl20 pr40 center">
                        <?= $tableSeo['description_vi']?>

                    </div>
                </div>
                <!---------------------------------------------HỖ TRỢ KHÁCH HÀNG------------------------------------------------------->
                <div class="col-3 l-3 m-3 c-12 pt55 wow fadeInLeft footerCenterColumn  mxhcentermobile" data-wow-delay="0.2s" >

                    <div class="title__footer mt-m-20">
                        <span>QUY ĐỊNH & CHÍNH SÁCH</span>
                    </div>
                    <div class="desc__footer mt35">
                        <ul class="policys">
                            <?php foreach($policys as $v){?>
                            <li>
                                <a href="<?=$v["type"]?>/<?=$v["tenkhongdau"]?>" title="<?=$v["tenkhongdau"]?>">
                                    <?=$v["ten"]?>
                                </a>
                            </li>
                            <?php }?>
                        </ul>

                    </div>
                </div>

                <!---------------------------------------------THÔNG TIN LIÊN HỆ------------------------------------------------------->
                <div class="col-2 l-2 m-2 c-12 pt55 wow fadeInRight  mxhcentermobile" data-wow-delay="0.2s">

                    <div class="title__footer mt-m-20">
                        <span>THÔNG TIN LIÊN HỆ</span>
                    </div>
                    <div class="desc-footer mt35">
                        <?=htmlspecialchars_decode($desc_footer["mota"])?>
                    </div>

                </div>

                <!---------------------------------------------KẾT NỐI CHÚNG TÔI------------------------------------------------------>
                <div class="col-3 l-3 m-3 c-12 pt55 wow fadeInLeft pl60 mxhcentermobile" data-wow-delay="0.4s">

                    <div class="title__footer mt-m-20">
                        <span>ĐĂNG KÝ NHẬN TIN</span>
                    </div>
                    <div class="desc__footer display-flex mt20">
                        <form action="" id="footer-form" name="footer-form" method="post" accept-charset="utf-8"
                            enctype="multipart/form-data">
                            <div class="call-form mt10">
                                <input type="text" name="data[dienthoai]" id="dienthoai" value="" autocomplete="off"
                                    placeholder="Số điện thoại" data-validate
                                    data-message="Số điện thoại không được để trống" data-validate-phone />

                            </div>
                            <div class="call-form mt10">
                                <a href="javascript:void(0)" class="submit_form"
                                    onclick="_FRAMEWORK.submitForm('#footer-form');"><img src="./assets/images/pdp/arrowR.png" alt=""></a>
                            </div>
                            <input type="hidden" name="data[type]" value="nhan-tin">
                        </form>
                    </div>
                    <div class="mt10">
                        <?=$func->getsocial($mangxahoi)?>
                    </div>
                </div>
            </div>
        </div>

    </div>

</footer>