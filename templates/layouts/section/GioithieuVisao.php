<section class="section__why pt35 pb90 pt20i pb20i"
    style="background-image: url(<?=_upload_hinhanh_l.$bg_gioithieu['photo']?>); background-size: cover;">
    <div class="titleCF">
        <div class="sloganCF mb10 wow fadeInDown" data-wow-delay="0.5s">
            <?= $row_setting['name_vi']?>
        </div>
        <div class="logoCF wow fadeInUp" data-wow-delay="0.5s">
            <img src="./assets/images/pdp/iconCAFE.png" class="">
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 item grid-gt">
                <div class=" col-12 col-12mobile pt30 wow fadeInLeft" data-wow-delay="0.5s">
                    <a href="gioi-thieu" class="tieudeGT mb40 mb20i">
                        <div class="gioithieu mb20">
                            <?=$gioithieuDBUS['ten']?>
                        </div>
                        <div class="tenGT">
                            <div class="gt1"><?= $row_setting['scrolltext1_vi']?>&nbsp;</div>
                            <div class="gt2"> &nbsp;<?= $row_setting['scrolltext2_vi']?></div>
                        </div>
                    </a>
                    <div class="gtDBUS">
                        <?= htmlspecialchars_decode($gioithieuDBUS['mota'])?>
                    </div>
                    <div class="pt50 pt20 pt10mobile">
                        <a href="gioi-thieu" class="buttonmobile">
                            <button class="mb30 buttonGT wrapper-button__intro">
                                <span>
                                    Xem thêm
                                </span>
                            </button>
                        </a>
                    </div>
                </div>
                <div class="visao col-12 pb50 col-12mobile wow fadeInRight" data-wow-delay="0.5s">
                    <iframe width="585" height="355" src="<?=$gioithieuDBUS['links']?>?controls=0&autoplay=1&mute=1">
                    </iframe>
                </div>

                </div>
                <div class="col-12 center mb30mobile mb60 wow slideInLeft item" data-wow-delay="0.5s">
                    <div class="gachgiua">

                    </div>
                </div>
            
            <div class="col-12 listGT item">
                <div class=" owl-carousel owl-theme carousel-product-news col-m-10" id="owl-gioithieu">
                    <?php foreach($hinhanhgioithieu as $key => $value){ ?>
                    <div class="hover-left wow fadeInUp" data-wow-delay="<?= $key*0.3?>s">
                        <img src="<?= _thumbs?>/386x313x1/<?= _upload_baiviet_l.$value['photo']?>" alt="">
                    </div>
                    <?php } ?>
                </div>
            </div>

        </div>

    </div>



</section>