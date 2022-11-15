<section class="sanphamnoibat pt50 "
    style="background-image: url(<?=_upload_hinhanh_l.$bg_sanpham['photo']?>); background-size: cover;">
    <?php foreach ($danhmucNoibat as $k => $v) { 
        $sanphamnoibat = $db->rawQuery("select ten_$lang as ten, tenkhongdau_$lang as tenkhongdau , rank , photo , type from #_baiviet where hienthi=1 and noibat=1 and id_list=? order by stt asc,id desc limit 0,8",array($v['id']));

        ?>
    <div class="danhsachdanhmuc">
        <div class="titleCF">
            <div class="sloganCF mb10 wow fadeInDown" data-wow-delay="0.5s">
                <?= $row_setting['name_vi']?>
            </div>
            <div class="logoCF mb30 wow fadeInUp" data-wow-delay="0.5s">
                <img src="./assets/images/pdp/iconCAFE.png" class="">
            </div>
            <div class="tendmsp mb60 mb30mobile wow slideInLeft" data-wow-delay="0.2s">
            <?= $v['ten']?>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12 item">
                    <div class="grid-danhmuc gap20 gap10mobile gap10-sm">
                        <?php foreach($sanphamnoibat as $key => $value){
                    $seoDB = $seo->getSeoDB($value['id'],'baiviet','man',$value["type"]); ?>
                        <div class="tintuc-tin-sp span3 span12-sm d-flex flex-column mb45 wow fadeInUp"
                            data-wow-delay="<?= $key*0.1?>s">
                            <a href="<?= $value['type']?>/<?= $value['tenkhongdau']?>">

                                <div class="hoversofa hover-left">
                                    <img src="<?= _thumbs?>/285x273x1/<?= _upload_baiviet_l.$value['photo']?>" alt="">
                                </div>
                                <div class="mayphacafe">
                                    <h4 class="tenMachine line-1"><?= $value['ten']?>&nbsp;<span
                                            class="gachkhuc"></span></h4>
                                </div>

                                <div class="star-rank mb20">
                                    <?php for($i=1 ; $i<=$value['rank'] ; $i++) { ?>
                                    <i class="fa fa-star"></i>
                                    <?php }?>
                                    <?php if ($value['rank'] < 5) { ?>
                                    <div class="star-rank-lost">
                                        <?php for($a=1 ; $a<=(5-$value['rank']) ; $a++) { ?>
                                        <i class="fa fa-star"></i>
                                        <?php }?>
                                    </div>
                                    <?php }?>
                                </div>

                                <div class="lienhebaogia">
                                    <?=($row_detail['giaban']!=0) ? $func->changeMoney($row_detail['giaban'],$lang) : 'Liên hệ'?>
                                </div>

                            </a>

                        </div>
                        <?php }?>
                    </div>
                </div>

            </div>

        </div>

    </div>
    <?php } ?>
    <div class="col-12 pb60">
        <img src="<?=_upload_hinhanh_l.$bg_bottomsanpham['photo']?>" alt="">
    </div>

</section>