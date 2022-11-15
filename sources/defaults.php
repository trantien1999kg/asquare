<?php



	$page_index=$deviceType=='phone' ? 20 : 20;


	$viewed = [];

	if(isset($_SESSION['view'])){
		$viewed = $_SESSION['view'];
	}else{
		$_SESSION['view'] = array();
	}
	
	$row_setting= $db->rawQueryOne("select * from #_setting limit 0,1");

	$tableSeo= $db->rawQueryOne("select * from #_seo where com=? limit 0,1",array('setting'));

	$logo= $db->rawQueryOne("select photo_$lang from #_bannerqc where hienthi=1 and type=? limit 0,1",array('logo'));

	$logofooter= $db->rawQueryOne("select photo_$lang from #_bannerqc where hienthi=1 and type=? limit 0,1",array('logo-footer'));

	$logomobile= $db->rawQueryOne("select photo_$lang as photo from #_bannerqc where hienthi=1 and type=? limit 0,1",array('logo-mobile'));

	$seoPage =$db->rawQueryOne("select photo_$lang,options from #_bannerqc where hienthi=1 and type=? limit 0,1",array('hinhdaidien'));

	$bg_header =$db->rawQueryOne("select photo_$lang as photo from #_bannerqc where hienthi=1 and type=? limit 0,1",array('bg_header'));

	$bg_trangtrong =$db->rawQueryOne("select photo_$lang as photo from #_bannerqc where hienthi=1 and type=? limit 0,1",array('bg_trangtrong'));

	$bg_breadcumb =$db->rawQueryOne("select photo_$lang as photo from #_bannerqc where hienthi=1 and type=? limit 0,1",array('bg_breadcumb'));

	$bg_lienhe =$db->rawQueryOne("select photo_$lang as photo from #_bannerqc where hienthi=1 and type=? limit 0,1",array('bg_lienhe'));

	$bg_menumobile =$db->rawQueryOne("select photo_$lang as photo from #_bannerqc where hienthi=1 and type=? limit 0,1",array('bg_menumobile'));

	$bg_footer =$db->rawQueryOne("select photo_$lang as photo from #_bannerqc where hienthi=1 and type=? limit 0,1",array('bg_footer'));

	$bg_sanpham =$db->rawQueryOne("select photo_$lang as photo from #_bannerqc where hienthi=1 and type=? limit 0,1",array('bg_sanpham'));

	$bg_sanphamlist =$db->rawQueryOne("select photo_$lang as photo from #_bannerqc where hienthi=1 and type=? limit 0,1",array('bg_sanphamlist'));

	$bg_gioithieu =$db->rawQueryOne("select photo_$lang as photo from #_bannerqc where hienthi=1 and type=? limit 0,1",array('bg_gioithieu'));

	$bg_tintuc =$db->rawQueryOne("select photo_$lang as photo from #_bannerqc where hienthi=1 and type=? limit 0,1",array('bg_tintuc'));

	$bg_bottomsanpham =$db->rawQueryOne("select photo_$lang as photo from #_bannerqc where hienthi=1 and type=? limit 0,1",array('bg_bottomsanpham'));

	$bg_danhgia =$db->rawQueryOne("select photo_$lang as photo from #_bannerqc where hienthi=1 and type=? limit 0,1",array('bg_danhgia'));

	
	$desc_footer=$db->rawQueryOne("select mota_$lang as mota from #_company where type=? limit 1",array('desc-footer'));

	// index
	$thongtinchung = $db->rawQuery("select id, ten_$lang as ten, mota_$lang as mota,noidung_$lang as noidung,tenkhongdau_$lang as tenkhongdau,type,photo from #_baiviet where hienthi=1 and type=? order by stt asc,id desc",array('thong-tin-chung'));

	$muahangonline = $db->rawQuery("select id, ten_$lang as ten, mota_$lang as mota,tenkhongdau_$lang as tenkhongdau,type,photo from #_baiviet where hienthi=1 and type=? order by stt asc,id desc",array('mua-hang-online'));

	$policys = $db->rawQuery("select id, ten_$lang as ten, mota_$lang as mota,tenkhongdau_$lang as tenkhongdau,type,photo from #_baiviet where hienthi=1 and type=? order by stt asc,id desc",array('chinh-sach'));

	$payments = $db->rawQuery("select id, ten_$lang as ten, mota_$lang as mota,photo from #_baiviet where hienthi=1 and type=? order by stt asc,id desc limit 0,3",array('thanh-toan'));

	$footer=$db->rawQueryOne("select mota_$lang from #_company where type=? limit 1",array('footer'));

	$lienhecompany=$db->rawQueryOne("select mota_$lang from #_company where type=? limit 1",array('lien-he'));

	//PDP


	$tintuc = $db->rawQuery("select id,ten_$lang as ten , tenkhongdau_$lang as tenkhongdau ,mota_$lang as mota,tacgia , type , ngaytao,  photo from #_baiviet where hienthi=1 and type=? order by stt asc,id desc limit 0,3",array('tin-tuc'));

	

	$hinhanh = $db->rawQuery("select ten_$lang as ten ,  type ,  photo from #_baiviet where hienthi=1 and noibat=1 and type=? order by stt asc,id desc limit 0,6",array('hinh-anh'));



	$hinhanhgioithieu = $db->rawQuery(" select photo from #_baiviet where hienthi=1 and type=? order by stt asc,id desc ",array('gioi-thieu'));



	//PDP


	// photo
	// $slider=$db->rawQuery("select ten_$lang,photo_$lang photo,link from #_photo where hienthi=1 and type=? order by stt asc,id desc",array('slider'));


	$mangxahoi=$db->rawQuery("select ten_$lang,photo_$lang photo,link from #_photo where hienthi=1 and type=? order by stt asc,id desc",array('mangxahoi'));

	$albums=$db->rawQuery("select id, ten_$lang as ten,photo from #_album where hienthi=1 and type=? order by stt asc,id desc",array('album'));

	$gioithieuDBUS =$db->rawQueryOne("select photo , ten_$lang as ten , mota_$lang as mota , links , noidung_$lang as noidung from #_info where hienthi=1 and type=? ",array('gioithieu'));

	$sanpham = $db->rawQuery("select ten_$lang as ten, tenkhongdau_$lang as tenkhongdau, giaban ,luotxem, photo ,ngaytao, photo1 ,type from #_baiviet where hienthi=1 and type=? order by stt asc,id desc",array('san-pham'));

	$sanpham1 = $db->rawQuery("select id , ten_$lang as ten, tenkhongdau_$lang as tenkhongdau,type from #_baiviet_list where hienthi=1 and type=? order by stt asc,id desc",array('san-pham'));

	$sanpham2 = $db->rawQuery("select id , ten_$lang as ten, tenkhongdau_$lang as tenkhongdau,type from #_baiviet_cat where hienthi=1 and type=? order by stt asc,id desc",array('san-pham'));

	
	// $sanpham1noibat = $db->rawQuery("select id ,ten_$lang as ten, tenkhongdau_$lang as tenkhongdau , giaban , rank ,luotxem, photo ,ngaytao, photo1 ,type from #_baiviet_list where hienthi=1 and noibat=1 and id_list = ? and type=? order by stt asc,id desc ",array('san-pham'));

	// $sanphamlist = $db->rawQuery("select id , ten_$lang as ten, tenkhongdau_$lang as tenkhongdau, giaban , rank ,luotxem, photo ,ngaytao, photo1 ,type from #_baiviet where hienthi=1 and spmoi=1 and type=? order by stt asc,id desc",array('san-pham'));

	$feedback = $db->rawQuery("select ten_$lang as ten, mota_$lang as mota, photo ,type from #_baiviet where hienthi=1 and type=? order by stt asc,id desc",array('feedback'));

	$danhmucSlide = $db->rawQuery("select id , ten_$lang as ten, tenkhongdau_$lang as tenkhongdau,type from #_baiviet_list where hienthi=1 and noibat=1 and spmoi= 1 and type=? order by stt asc,id desc",array('san-pham'));

	$danhmucNoibat = $db->rawQuery("select id , ten_$lang as ten, tenkhongdau_$lang as tenkhongdau,type from #_baiviet_list where hienthi=1 and noibat=1 and spmoi= 0 and type=? order by stt asc,id desc",array('san-pham'));

	
?>