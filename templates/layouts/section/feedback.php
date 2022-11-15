<section class="feedback pt90 pb75 pt50mobile pb50mobile"
    style="background-image: url(<?=_upload_hinhanh_l.$bg_danhgia['photo']?>); background-size: cover;">
    <div class="col-12 pb40 pb20mobile center wow fadeInDown" data-wow-delay="0.3s">
        <img src="./assets/images/pdp/ngoackep.png" alt="">
    </div>
    <div class="container">
        <div class="row">
            <div class="owl-carousel owl-theme item" id="owl-feedback">
                <?php foreach($feedback as $key => $value){ ?>
                <div class="khungfeedback col-12">
                    <div class="typewriter col-12  wow fadeInUp" data-wow-delay="0.2s">
                        <?= htmlspecialchars_decode($value['mota']) ?>
                    </div>
                    <div class="tennguoidanhgia col-12 pt30 pb40  wow fadeInUp" data-wow-delay="0.4s">
                        <div class="nameFB"><?= htmlspecialchars_decode($value['ten']) ?>&nbsp;</div>
                        <pre class="caret-underscore">

                            <span>&nbsp;</span>
                        </pre>
                    </div>
                </div>
                <?php }?>
            </div>
        </div>
    </div>
</section>