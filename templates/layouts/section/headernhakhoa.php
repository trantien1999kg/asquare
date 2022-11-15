<header class="element-header d-none-m <?= ($source == 'index')?"shadow-sticky pt15 pb5 ":"box-shadow headersticky"?>">
    <div class="container">
        <div class="row">
            <div class="item col-12 ">
                <div class=" d-flex flex-wrap justify-content-between align-items-center p-relative">
                    <div class="col-4">
                        <a href="" title="Trang chủ" class="logo" element-area="header">
                            <img src="<?= _thumbs?>/328x89x2/<?=_upload_hinhanh_l.$logo['photo_'.$lang]?>" />

                        </a>
                    </div>
                    <div class="col-8 menu">
                        <?php  //include _layouts.'menuhomedecor.php'?>
                        <ul class="nav-menu d-flex justify-content-between align-items-center p-relative">
                            <li class="<?php if($source=='index') echo ' active';?>">
                                <?php if(in_array($template,explode(',',$row_setting['seo']))){?>
                                <!-- -->
                                <h2>
                                    <?php }?>
                                    <a href="" class="menuheader">Trang chủ</a>
                                    <?php if(in_array($template,explode(',',$row_setting['seo']))){?>


                                </h2>
                                <?php }?>
                            </li>
                            <li class="<?php if($com=='gioi-thieu') echo ' active';?>">
                                <?php if(in_array($template,explode(',',$row_setting['seo']))){?>
                                <!-- -->
                                <h2>
                                    <?php }?>
                                    <a href="gioi-thieu" class="menuheader">Giới thiệu</a>
                                    <?php if(in_array($template,explode(',',$row_setting['seo']))){?>


                                </h2>
                                <?php }?>
                            </li>

                            <!-------------------------SẢN PHẨM 2 CẤP-------------------------->
                            <li class="<?php if($com=='san-pham') echo ' active';?>">
                                <?php if(in_array($template,explode(',',$row_setting['seo']))){?>
                                <h2>
                                    <?php }?>
                                    <a href="san-pham" title="Về chúng tôi " class="menuheader">Sản phẩm</a>
                                    <?php if($sanpham1){?>
                                    <div class="sub-menu">
                                        <ul>
                                            <?php foreach($sanpham1 as $key => $value){ 
                                            $sanpham2 = $db->rawQuery("select id ,tenkhongdau_$lang as tenkhongdau , ten_$lang as ten from #_baiviet_cat where hienthi=1 and id_list=?  order by stt asc,id desc",array($value['id']));
                                               //LẤY ID_LIST TỪ THG DM CẤP 2 NÀY , CHO NÓ LÀ ? ĐỂ NÓ ĐỐI CHIẾU QUA THG array($value['id'])); MÀ THẰNG ID CỦA DANHMUC1 NẰM PHÍA TRÊN VÒNG LẶP
                                            ?>

                                            <li><a
                                                    href="<?= $value['type']?>/<?= $value['tenkhongdau']?>" class="dm1header"><?= $value['ten']?><i class="fa-solid fa-circle-arrow-right"></i></a>
                                                <ul class="menucon">
                                                    <?php foreach($sanpham2 as $k => $v){ ?>
                                                    <li><a
                                                            href="<?= $value['type']?>/<?= $value['tenkhongdau']?>/<?= $v['tenkhongdau']?>" class="dm2header"><?= $v['ten']?></a>
                                                    </li>
                                                    <?php } ?>
                                                </ul>
                                            </li>
                                            <?php } ?>
                                        </ul>

                                    </div>
                                    <?php }?>
                                    <?php if(in_array($template,explode(',',$row_setting['seo']))){?>
                                </h2>
                                <?php }?>
                            </li>

                            <li class="<?php if($com=='tin-tuc') echo ' active';?>">
                                <?php if(in_array($template,explode(',',$row_setting['seo']))){?>
                                <!-- -->
                                <h2>
                                    <?php }?>
                                    <a href="tin-tuc" class="menuheader">Tin cà phê</a>
                                    <?php if(in_array($template,explode(',',$row_setting['seo']))){?>
                                </h2>
                                <?php }?>

                            </li>
                            <li class="<?php if($com=='lienhe') echo ' active';?>">
                                <?php if(in_array($template,explode(',',$row_setting['seo']))){?>
                                <!-- -->
                                <h2>
                                    <?php }?>
                                    <a href="lien-he" title="Hoạt động" class="menuheader">Liên hệ</a>
                                    <?php if(in_array($template,explode(',',$row_setting['seo']))){?>
                                </h2>
                                <?php }?>
                            </li>

                            <li class="<?php if($com=='lienhe') echo ' active';?>">
                                <i class="fas fa-language fa-2x"></i>
                                <div class="langmenu">
                                <?php include _sections."ggtranslate.php"; ?>

                                </div>
                            </li>

                            <li class="search">
                                <a href="javascript:void(0)" onclick="_FRAMEWORK.toggle('#modal-search')">
                                    <img src="assets/images/pdp/search.png" alt="">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<?php

    $slider=$db->rawQuery("select ten_$lang as ten,photo_$lang photo,link from #_photo where hienthi=1 and type=? order by stt asc,id desc",array('slider'));

?>
<script>
const header = document.querySelector("header")
window.addEventListener("scroll", function() {
    x = window.pageYOffset
    if (x > 0) {
        header.classList.add("sticky")
        const aTag = document.querySelectorAll("header ul li h2 a")
        //   aTag.forEach(e => e.classList.add("color-black"))
        //   aTag.classList.add("color-black")


    } else {
        header.classList.remove("sticky")
        const aTag = document.querySelectorAll("header ul li h2 a")
        aTag.forEach(e => e.classList.remove("color-black"))
    }
})
</script>