<?php
	$danhmuc_detail = $db->rawQueryOne("select id,ten_$lang as ten,type,tenkhongdau_$lang as tenkhongdau from #_baiviet_list where hienthi=1 and type=? and id=? limit 0,1",array('san-pham',$row_detail["id_list"]));
    $deschotro = $db->rawQueryOne("select mota_$lang as mota from #_company where type=?",array('desc-hotro'));
?>
<div id="fb-root"></div>
<script async defer src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.6"></script>

<section class="product-detail mt-m-20 pt50" id="detail-product">

    <div class="container">
        <div class="row">

            <div class="item col-12 l-12 m-12 c-12">
                <div class="row">
                    <div class="item col-4 l-4 m-4 c-12">
                        <div class="thumb__detail">
                            <a href="<?=_upload_baiviet_l.$row_detail['photo']?>" class="MagicZoom" id="Zoom-1"
                                data-options="zoomWidth: 200; zoomHeight: 200;variableZoom: true;expand: on; hint: always;">

                                <img class="col-12" loading="lazy"
                                    src="<?= _thumbs?>/380x285x1/<?=_upload_baiviet_l.$row_detail['photo']?>"
                                    alt="<?=$row_detail['ten_'.$lang]?>"
                                    style="width:100%;height: auto;aspect-ratio: 666 / 666;object-fit: cover;" />

                            </a>
                        </div>
                        <div class="thumb__other">
                            <?php if(count($photos)>0){ ?>

                            <div class="img-bottom">

                                <div class="product-detail-slider owl-carousel owl-theme" id="slider__detail">

                                    <?php 
                                        foreach($photos as $k=>$v){  
                                    ?>
                                    <div class="items">
                                        <div class="img">
                                            <a data-zoom-id="Zoom-1" href="<?=_upload_baiviet_l.$v['photo']?>"
                                                data-image="<?=_upload_baiviet_l.$v['photo']?>">
                                                <img src="<?=_upload_baiviet_l.$v['photo']?>"
                                                    alt="<?=$row_detail['ten_'.$lang]?>">

                                            </a>
                                        </div>
                                    </div>
                                    <?php } ?>

                                </div>

                            </div>

                            <?php } ?>
                        </div>
                    </div>
                    <div class="item col-5 l-5 m-5 c-12">
                        <div class="box__detail__info">
                            <div class="name__detail">
                                <h1 class=" j-left">
                                    <span><?=$row_detail['ten_'.$lang]?></span>
                                    <img src="./assets/images/pdp/iconCAFE.png" class="centerimg">
                                </h1>
                            </div>

                            <div class="box__options mt10">
                                <div class="row" style="    padding-bottom: 10px;
    border-bottom: 1px solid white;">
                                    <div class="item col-6">
                                        <div class="text__detail">
                                            <i class="fas fa-calendar-alt me-2"></i>
                                            <?=date('d/m/Y  g:i:s',$row_detail["ngaytao"])?>
                                        </div>
                                    </div>
                                    <div class="item col-6">
                                        <div class="text__detail">
                                            <i class="fas fa-list-alt" aria-hidden="true"></i>&nbsp;<a
                                                style="color:var(--html-bg-website)"
                                                href="san-pham/<?=$danhmuc_detail["tenkhongdau"]?>"
                                                title="<?=$danhmuc_detail["ten"]?>"><?=$danhmuc_detail["ten"]?></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box__options mt10">
                                <div class="row" style="    padding-bottom: 10px;
    border-bottom: 1px solid white;">
                                    <div class="item col-6">
                                        <div class="text__detail">
                                            <i
                                                class="fa fa-check"></i>&nbsp;<?=($row_detail["id_loai"]==1) ? 'C??n h??ng' : 'H???t h??ng'?>
                                        </div>
                                    </div>
                                    <div class="item col-6">
                                        <div class="text__detail">
                                            <i class="fas fa-eye ms-2 me-2"></i>&nbsp;<?=$row_detail["luotxem"]?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box__options mt10">
                                <div class="row">
                                    <div class="item col-12">
                                        <div class="text__detail">
                                            <?=$func->clear_decode($row_detail["mota_$lang"])?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="price_detail mt10">
                                <!-- <span><?=($row_detail['giaban']!=0) ? $func->changeMOney($row_detail['giaban'],$lang) : 'Li??n H???'?></span> -->
                                <a href="lien-he"><button class="nutlienhe">Li??n H???</button></a>
                            </div>
                            <div class="box__options mt10">
                                <div class="i-shareLinks">
                                    <b>Chia s???: </b>
                                    <?php include_once _source.'shareLinks.php'?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item col-3 l-3 m-3 c-12 d-none-m">
                        <div class="sidebar-detail">
                            
                            <div class="body-sidebar pd10 p-relative">
                                
                                <div class="box-under">
                                    <div style="font-weight:600;" class="text-center text-uppercase mb-2">Y??u c???u g???i
                                        l???i</div>
                                        <img src="./assets/images/pdp/iconCAFE.png" class="centerimg mt10">
                                    <form action="" id="call-form" name="call-form" method="post" accept-charset="utf-8"
                                        enctype="multipart/form-data">
                                        <div class="mailform mt10">
                                            <input type="text" name="data[dienthoai]" id="dienthoai" value=""
                                                autocomplete="off" placeholder="S??? ??i???n tho???i" data-validate
                                                data-message="S??? ??i???n tho???i kh??ng ???????c ????? tr???ng" data-validate-phone />

                                        </div>
                                        <div class="mailform mt10">
                                            <a href="javascript:void(0)" class="submit_form"
                                                onclick="_FRAMEWORK.submitForm('#call-form');"><i
                                                    class="fa-solid fa-arrow-right-long"></i></a>
                                        </div>
                                        <input type="hidden" name="data[type]" value="ho-tro">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>


    </div>


</section>
<section class="wrap-categoryhot mt30 mb30">

    <div class="grid wide">

        <div class="row2 d-flex flex-wrap">

            <div class="col4 l-12 m-12 c-12 mb20" style="">

                <div class="bg-white">

                    <div class="wrap-categoryhot-title wrap-categoryhot-title--modifiers1">

                        <ul class="nav__product-detail border-gray ">

                            <li class="nav__product-detail-items">

                                <a class="nav__product-details-links tablinks active" data-target="MoTa">Th??ng tin chi
                                    ti???t</a>

                            </li>


                            <li class="nav__product-detail-items">

                                <a class="nav__product-details-links tablinks" data-target="DanhGia">????nh gi??</a>

                            </li>

                     


                        </ul>

                    </div>

                    <div class="wrap-tabpanel__detail tabcontent mt20" id="MoTa">
                        <div class="row">
                            <?php if($row_toc==1 && $deviceType=='computer'){?>
                            <div class="item col__left z-100m">
                                <div class="sidebar__sticky">
                                    <div class="wrapper-toc">
                                        <div class="content ul-list-detail"></div>
                                    </div>
                                </div>
                            </div>
                            <?php }?>
                            <?php 

								$col_right = ($row_toc==1 && $deviceType=='computer') ? 'col__right z-100m' : 'col-12';
					
							?>
                            <div class="item <?=$col_right?>">

                                <div class="row">

                                    <div class="item col-12">

                                        <div class="">
                                            <?php if($deviceType=='computer'){?>
                                            <div class="content ul-list-detail">

                                                <?=htmlspecialchars_decode($row_detail['noidung_'.$lang])?>

                                            </div>
                                            <?php }else{?>
                                            <div class="wrapper-toc mt20">

                                                <div class="content ul-list-detail">
                                                    <?=htmlspecialchars_decode($row_detail['noidung_'.$lang])?>
                                                </div>

                                            </div>
                                            <?php }?>

                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    


                    <div class="wrap-tabpanel__detail tabcontent mt20" id="DanhGia">

                        <div class="box-detail-content">

                            <div class="wrapper-toc">

                                <div class="fb-comments" data-href="<?= $func->getCurrentPageURL() ?>" data-width="100%" 
                                    data-numposts="5"></div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>


    </div>

</section>

<?php if(count($tintuc)>0){ ?>

<section class="wrap-category__index mb30 mt">
    <div class="grid wide grid-mobile">
        <div class="row bg-white" style="border-radius:0.5rem">
            <div class="col l-12 m-12 c-12 bg-white">
                <div class="box-group-collection mt10">
                    <div class="group-collection-title">
                        <span>
                            S???n ph???m c??ng nh??m
                        </span>
                    </div>
                </div>
            </div>
            <div class="owl-carousel owl-theme col carousel-product-news col-m-10" id="slider__other">
                <?php foreach($tintuc as $key => $val){ ?>
                <div class="machine-coffee  wow fadeInUp" data-wow-delay="<?= $key*0.2?>s">
                    <a href="<?= $val['type']?>/<?= $val['tenkhongdau']?>">
                        <div class="hoversofa hover-left">
                            <img src="<?= _thumbs?>/285x273x1/<?= _upload_baiviet_l.$val['photo']?>" alt="">
                        </div>
                        <div class="mayphacafe">
                            <h4 class="tenMachine line-1"><?= $val['ten']?>&nbsp;<span class="gachkhuc"></span></h4>

                        </div>
                        <div class="star-rank mb20">
                            <?php for($i=1 ; $i<=$val['rank'] ; $i++) { ?>
                            <i class="fa fa-star"></i>
                            <?php }?>
                            <?php if ($val['rank'] < 5) { ?>
                            <div class="star-rank-lost">
                                <?php for($a=1 ; $a<=(5-$val['rank']) ; $a++) { ?>
                                <i class="fa fa-star"></i>
                                <?php }?>
                            </div>
                            <?php }?>
                        </div>
                        <div class="lienhebaogia">
                            Li??n h???
                        </div>
                    </a>
                </div>
                <?php } ?>

            </div>

        </div>

    </div>

    <div class="col-12 pb60">
        <img src="<?=_upload_hinhanh_l.$bg_bottomsanpham['photo']?>" alt="">
    </div>

</section>

<?php }?>

<script type="text/javascript">
var buttons = document.getElementsByClassName('tablinks');
var contents = document.getElementsByClassName('tabcontent');

function showContent(id) {
    for (var i = 0; i < contents.length; i++) {
        contents[i].style.display = 'none';
    }
    var content = document.getElementById(id);
    content.style.display = 'block';
}
for (var i = 0; i < buttons.length; i++) {
    buttons[i].addEventListener("click", function() {
        var id = this.getAttribute('data-target');
        for (var i = 0; i < buttons.length; i++) {
            buttons[i].classList.remove("active");
        }
        this.className += " active";
        showContent(id);
    });
}
showContent('MoTa');
</script>