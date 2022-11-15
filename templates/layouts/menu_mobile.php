<div class="box-modal-menu" id="menuSide" style="background-image: url(<?= _upload_hinhanh_l.$bg_menumobile['photo']?>) !important; background-size:cover;">

    <div class="p-relative pd30">

        <ul >
            <li>
            <a href="" title="Trang chủ" class="logo" element-area="header">
                    <img src="<?=_upload_hinhanh_l.$logomobile['photo']?>"/>
                </a>
                <img src="./assets/images/pdp/iconCAFE.png" class="centerimg">
            </li>
            <li class="<?php if($com=='gioi-thieu') echo ' active';?>">
                    
                            <a href="gioi-thieu">GIỚI THIỆU</a>
                        
                    </li>
                    <li>
                <div class="d-flex align-items-center">

                            <a href="san-pham" title="Về chúng tôi ">SẢN PHẨM</a>
                            
                    <?php if($sanpham1){ ?>
                        <span class="drop event-menu p-relative"></span>
                    <?php } ?>
                </div>
                <?php if($sanpham1){ ?>
                <ul>
                    <?php foreach($sanpham1 as $key => $value){ ?>
                    <li class="dropdown">
                        <div class="d-flex align-items-center">
                            <a class="pl30" title="<?=$value["ten"]?>" href="<?=$value["type"]?>/<?=$value['tenkhongdau']?>">
                                <span><?=$value["ten"]?></span>
                            </a>
                            <?php if($sanpham2){ ?>
                                <span class="drop event-menu p-relative"></span>
                            <?php }?>
                        </div>
                        <?php if($sanpham2){ ?>
                        <ul class="ml40">
                            <?php foreach($sanpham2 as $k=>$vc2){?>
                                <li class="dropdown">
                                    <div class="d-flex align-items-center">
                                        <a class="pl40" title="<?=$vc2["ten"]?>" href="<?=$value["type"]?>/<?=$value['tenkhongdau']?>/<?=$vc2['tenkhongdau']?>">
                                            <span><?=$vc2["ten"]?></span>
                                        </a>
                                    </div>
                                </li>
                            <?php }?>
                        </ul>
                        <?php } ?>
                    </li>
                    <?php } ?>
                </ul>
                <?php } ?>
            </li>
            <li>
                <div class="d-flex align-items-center">
                <a href="tin-tuc" title="Tin Cà Phê">TIN CÀ PHÊ</a>

                </div>
            </li>
            <li>
                <div class="d-flex align-items-center">
                <a href="lien-he" title="Hoạt động">LIÊN HỆ</a>
                </div>
            </li>
            <li>
                <div class="d-flex align-items-center">
                <?php include _sections."ggtranslate.php"; ?>
                </div>
                
            </li>
        </ul>
    </div>

</div>