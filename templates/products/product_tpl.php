<section class="section__product pt40">
    <div class="container">
        <div class="row">
            <!-- <div class="col-3 listdanhmuc col-12mobile">
            <?php if(in_array($template,explode(',',$row_setting['seo']))){?>
                <h2 class="mg0">
                    <?php }?>

                        <a href="san-pham" class="listDM">DANH MỤC SẢN PHẨM</a>
                        
                    <?php if($tintuc1){?>

                        <ul class="polime">
                        <?php foreach($tintuc1 as $key => $value){ ?>
                            <li class="pt10 pb10 pl10 pd0mobile list"><a href="<?= $value['type']?>/<?= $value['tenkhongdau']?>" class="danhmuc1">
                                <i class="fas fa-angle-double-right"></i>&nbsp;<?= $value['ten']?></a>
                            </li>
                        <?php }?>
                        </ul>

                    <?php } ?>
                    <?php if(in_array($template,explode(',',$row_setting['seo']))){?>
                </h2>
                <?php }?>

            </div> -->
            <div class="item col-12 w-100-m pt10">
                <div class="title__default title__in title__default-black">
                    <h1 class="mg0">
                        <span class="center mb10">
                            <?php if($seo->getSeo('h1') != ""){?>
                            <?=$seo->getSeo('h1')?>
                            <?php }else{ echo $title_seo;}?>
                        </span>
                        
                    </h1>
                    <img src="./assets/images/pdp/iconCAFE.png" class="centerimg">
                </div>
                <div class="box__seo">
                    <div class="box-description mt20">
                        <span><?=htmlspecialchars_decode($seo->getSeo('subject'))?></span>
                    </div>
                    <?php if(!empty($seo->getSeo('content'))){?>
                    <div class="wrapper-toc mt20">
                        <div class="content ul-list-detail">
                            <?=htmlspecialchars_decode($seo->getSeo('content'))?>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <div class="row">
                    <div class="mt30 col-12 item">
                        <div class="grid-danhmuc gap20 gap10mobile gap10-sm">
                            <?php if(count($tintuc)>0){?>
                            <?php foreach($tintuc as $k=>$v){
                        $seoDB = $seo->getSeoDB($v['id'],'baiviet','man',$v["type"]);
                        ?>
                            <div class="tintuc-tin-sp span3 span12-sm d-flex flex-column mb45 wow fadeInUp" data-wow-delay="<?= $k*0.1?>s">
                        <a href="<?= $v['type']?>/<?= $v['tenkhongdau']?>">

                            <div class="hoversofa hover-left">
                                <img src="<?= _thumbs?>/285x273x1/<?= _upload_baiviet_l.$v['photo']?>" alt="">
                            </div>
                            <div class="mayphacafe">
                                <h4 class="tenMachine line-1"><?= $v['ten_'.$lang]?>&nbsp;<span class="gachkhuc"></span></h4>
                            </div>

                            <div class="star-rank mb20">
                                <?php for($i=1 ; $i<=$v['rank'] ; $i++) { ?>
                                <i class="fa fa-star"></i>
                                <?php }?>
                                <?php if ($v['rank'] < 5) { ?>
                                <div class="star-rank-lost">
                                    <?php for($a=1 ; $a<=(5-$v['rank']) ; $a++) { ?>
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
                            <?php }else{?>
                            <div class="span12 t-center">
                                Nội dung đang cập nhật....
                            </div>
                            <?php }?>


                        </div>
                    </div>
                    <div class="paging col-12 mt40">
                        <?=$paging?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>