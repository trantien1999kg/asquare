<section class="tincafe pt40 pb75"
    style="background-image: url(<?=_upload_hinhanh_l.$bg_tintuc['photo']?>); background-size: cover;">
    <div class="titleCF wow fadeInDown" data-wow-delay="<?= $key*0.2 + 0.5?>s">
        <div class="sloganCF mb10">
            <?= $row_setting['name_vi']?>
        </div>
        <div class="logoCF mb30">
            <img src="./assets/images/pdp/iconCAFE.png" class="">
        </div>
        <div class="tendmsp mb60 mb30mobile">
            TIN COFFEE
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 item d-flex">
                <div class="grid-tintuc gap20 gap10mobile gap10-sm">
                    <?php foreach($tintuc as $key=>$value){    
                    $seoDB = $seo->getSeoDB($value['id'],'baiviet','man',$value["type"]); ?>
                    <div class="span12-sm d-flex flex-column wow fadeInUp hoverline" data-wow-delay="<?= $key*0.2 + 0.5?>s">
                        <div class="dichvu_thumb">
                            <a href="<?= $value['type']?>/<?= $value['tenkhongdau']?>">
                                <img src="<?= _thumbs?>/387x294x1/<?= _upload_baiviet_l.$value['photo']?>">
                            </a>
                        </div>
                        <a href="<?= $value['type']?>/<?= $value['tenkhongdau']?>">
                            <div class="dichvu_content">
                                <div class="titleTincafe mb5 line-2 VLB mb0mobile">
                                    GÓC CÀ PHÊ - <span class="tenTT"><?= $value['ten']?></span>
                                </div>
                                <span class="ngaydang-tacgia">By <?= $value['tacgia']?>&nbsp;&nbsp;/&nbsp;&nbsp;
                                    <?=date('d.m.Y',$value["ngaytao"])?></span>
                                <p class="tintuc-description line-3 mt10">
                                    <?=$seoDB["description_$lang"]?></p>
                                <a href="<?= $value['type']?>/<?= $value['tenkhongdau']?>" class="xemthemcafe mt10 VLB">XEM THÊM</a>
                            </div>
                        </a>
                    </div>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>
</section>