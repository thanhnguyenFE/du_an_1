<style>
    * {
        padding: 0;
        margin: 0;
        border: 0;
        font-size: 100%;
    }

    @font-face {
        font-family: 'Roboto';
        src: url(/font/UTM\ Duepuntozero.ttf);
    }

    @font-face {
        font-family: 'Roboto';
        src: url(/font/UTM\ Duepuntozero.ttf);
        font-weight: bold;
    }

    body {
        font-family: 'Roboto';
    }

    .container {
        width: 100%;
        height: 105px;
        margin: 0 auto;

    }

    header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        background-color: black;
        position: fixed;
        left: 0;
        right: 0;
    }

    .logo img {
        width: 130px;
        height: 100px;
        margin-left: 80px;
    }

    a {
        text-decoration: none;
        color: white;
        justify-content: center;
        text-align: center;
        padding: 5px;
        padding-left: 30px;
    }

    a:hover {
        color: orangered;
    }

    .text button.dangki {
        width: 150px;
        height: 40px;
        background-color: black;
        color: white;
        border-radius: 60px;
        border: 2px solid white;
        margin-left: 90px;
    }

    .text1 button.dangnhap {
        width: 150px;
        height: 40px;
        background-color: orangered;
        color: white;
        border-radius: 60px;
        border: 2px solid orangered;
        margin-right: 40px;
    }

    .text:hover button.dangki {
        transform: scale(1.1);
        transition: 1s;
    }

    .text1:hover button.dangnhap {
        transform: scale(1.1);
        transition: 1s;
    }

    .home {
        /* background-color: black; */
    }

    .banner {
        position: relative;
    }

    .banner img {
        width: 100%;
        height: 700px;
        bottom: 500px;

    }

    .pre,
    .next {
        cursor: pointer;
        position: absolute;
        top: 47%;
        width: auto;
        padding: 16px;
        color: white;
        font-weight: bold;
        font-size: 18px;
        transition: 0.6s ease-in-out;
        border-radius: 0 3px 3px 0;
        border: none;
        position: absolute;
    }

    .pre:hover,
    .next:hover {
        background-color: rgba(0, 0, 0, 0.8);
    }

    .next {
        right: 0;
        border-radius: 3px 0 0 3px;

    }

    .pre {
        left: 0;
        border-radius: 0 3px 3px 0;
    }

    .content1 {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr;
        gap: 30px;
        justify-content: space-between;
        margin-top: 30px;
        margin-bottom: 30px;


    }

    .text2 {
        display: flex;
    }

    .tat_ca {
        margin-top: 40px;
        margin-bottom: 60px;
        margin-left: 770px;
        font-size: 30px;
        font-weight: bold;
        color: white;
    }

    .text2 h1 {
        margin-left: 130px;
        margin-top: 40px;

    }

    h1 {
        margin-top: 70px;
        margin-bottom: 60px;
        margin-left: 70px;
        font-size: 40px;
        font-weight: bold;
        color: white;
    }

    .content1 img {
        width: 300px;
        height: 400px;
        border-radius: 20px;
        margin-left: 40px;


    }

    .con_nhot:hover img {
        transform: scale(1.1);
        transition: 1s;
    }

    .giao_lo:hover img {
        transform: scale(1.1);
        transition: 1s;
    }

    .hanh_phuc:hover img {
        transform: scale(1.1);
        transition: 1s;
    }

    .ke_an_danh:hover img {
        transform: scale(1.1);
        transition: 1s;
    }

    .ki_an:hover img {
        transform: scale(1.1);
        transition: 1s;
    }

    .nha_ba_nu:hover img {
        transform: scale(1.1);
        transition: 1s;
    }

    .dao_pho:hover img {
        transform: scale(1.1);
        transition: 1s;
    }

    .yeu_lai:hover img {
        transform: scale(1.1);
        transition: 1s;
    }

    .mong_vuot:hover img {
        transform: scale(1.1);
        transition: 1s;
    }

    .wish:hover img {
        transform: scale(1.1);
        transition: 1s;
    }

    .em_va_trinh:hover img {
        transform: scale(1.1);
        transition: 1s;
    }

    .marvel:hover img {
        transform: scale(1.1);
        transition: 1s;
    }

    .nguoi_vo:hover img {
        transform: scale(1.1);
        transition: 1s;
    }

    .quynh_hoa:hover img {
        transform: scale(1.1);
        transition: 1s;
    }

    .chiem_doat:hover img {
        transform: scale(1.1);
        transition: 1s;
    }

    .mi_nhan:hover img {
        transform: scale(1.1);
        transition: 1s;
    }

    .oan-hon:hover img {
        transform: scale(1.1);
        transition: 1s;
    }

    .tro_tan:hover img {
        transform: scale(1.1);
        transition: 1s;
    }

    .quy_lun:hover img {
        transform: scale(1.1);
        transition: 1s;
    }

    .vong_am:hover img {
        transform: scale(1.1);
        transition: 1s;
    }

    .nha_vit:hover img {
        transform: scale(1.1);
        transition: 1s;
    }

    .dau_truong:hover img {
        transform: scale(1.1);
        transition: 1s;
    }

    .nam_dem:hover img {
        transform: scale(1.1);
        transition: 1s;
    }

    .the_loai {
        /* margin-left:70px ; */
        text-align: center;
        margin-top: 15px;
        margin-bottom: 5px;
        color: grey;
    }

    .ten_phim {
        text-align: center;
        font-size: 25px;
        color: white;
    }

    .ten_phim:hover a {

        color: white;
    }

    .footer {
        width: 100%;
        height: 250px;
        background-color: black;
    }

    .cs {
        margin-top: 20px;
    }

    .footer-links {
        color: white;
        justify-content: center;
        display: flex;
        text-align: center;

    }

    .footer-links:hover a {
        color: white;
    }

    .icon {
        justify-content: center;
        text-align: center;
        margin-top: 10px;
    }

    .dia_chi {
        justify-content: center;
        text-align: center;
        margin-top: 10px;
        color: white;
    }
</style>
<section class="home">
    <section class="banner" id="hien_anh">
        <img src="../img/amazing-dark-knight-rises-1920x1080-wallpaper-9596.jpg" alt="" width="1440px" height="500px" />
        <button class="pre" onclick="pre()">&#10094;</button>
        <button class="next" onclick="next()">&#10095;</button>
    </section>
    <section class="text2">
        <h1>Phim đang chiếu</h1>
        <p class="tat_ca"><ins><a href="#">Xem tất cả</a></ins></p>
    </section>

    <section class="content1">

        <?php

        foreach ($listphim as $item) :  
            extract($item);  
            $result = load_all_category_one_movie($movie_id);
            ?>
            <section class="con_nhot">
            <a href="index.php?act=chitietphim&movie_id=<?= $movie_id ?>"> <img src="../upload/ <?= $image ?>"></a>
                <p class="text-white text-center">
                <?php 
                foreach($result as $item){
                    extract($item);
                    echo $category_name.', ';
                }
                ?>
                </p>
                <h2 class="ten_phim"><a href="#"> <?= $title ?></a></h2>
            </section>
        <?php
        endforeach;
        ?>
        <!-- <section class="con_nhot">
            <img src="../img/con_nhot.webp" alt="" >
            <p class="the_loai">Hài,Tâm lý,Tình cảm</p>
         <h2 class="ten_phim"><a href="#"> CON NHÓT MÓT CHỒNG</a></h2> 
        </section>
        <section class="giao_lo">
            <img src="../img/giao_lo.webp" alt="">
          <p class="the_loai">Tâm lý,Tình cảm</p>
           <h2 class="ten_phim"><a href="#"> GIAO LỘ 8675</a></h2>
        </section>
        <section class="hanh_phuc">
            <img src="../img/hanh_phuc.webp" alt="">
            <p class="the_loai">Hài,Tâm lý,Tình cảm</p>
            <h2 class="ten_phim"><a href="#">CHẠM VÀO HẠNH PHÚC</a></h2>
        </section>
        <section class="ke_an_danh">
            <img src="/img/ke_an_danh.webp" alt="">
            <p class="the_loai">Hài,Hành động,Tâm lý</p>
            <h2 class="ten_phim"><a href="#">KẺ ẨN DANH </a></h2>
        </section>
        <section class="ki_an">
            <img src="/img/ki_an.webp" alt="" >
            <p class="the_loai">Phiêu lưu,Tâm lý</p>
            <h2 class="ten_phim"><a href="#">KÌ ÁN TRÊN ĐỒI TUYẾT</a></h2>
        </section>
        <section class="nha_ba_nu">
            <img src="/img/nha_ba_nu.webp" alt="">
            <p class="the_loai">Tình cảm,Tâm lý</p>
            <h2 class="ten_phim"><a href="#">NHÀ BÀ NỮ</a></h2>
        </section>
            <section class="dao_pho">
                <img src="/img/dao_pho.webp" alt="">
                <p class="the_loai">Tình cảm,Tâm lý</p>
                <h2 class="ten_phim"><a href="#">ĐÀO,PHỞ VÀ PIANO</a></h2>
            </section>
            <section class="yeu_lai">
                <img src="/img/yeu_lai.webp" alt="">
                <p class="the_loai">Hài</p>
                <h2 class="ten_phim"><a href="#">YÊU LẠI VỢ NGẦU</a></h2>
            </section>
            <section class="mong_vuot">
                <img src="/img/mong_vuot.webp" alt="">
                <p class="the_loai">Kinh dị</p>
                <h2 class="ten_phim"><a href="#">MÓNG VUỐT</a></h2>
            </section>
            <section class="wish">
                <img src="/img/wish.webp" alt="">
                <p class="the_loai">Hoạt hình</p>
                <h2 class="ten_phim"><a href="#">ĐIỀU ƯỚC</a></h2>
            </section>
        </section>
    <section class="text2">
        <h1>Phim sắp chiếu</h1>   
        </section>
    
    <section class="content1">
        <section class="em_va_trinh">
            <img src="/img/em_va_trinh.webp" alt="" >
            <p class="the_loai">Tâm lý,Tình cảm</p>
         <h2 class="ten_phim"><a href="#"> EM VÀ TRỊNH</a></h2> 
        </section>
        <section class="marvel">
            <img src="/img/marvel.webp" alt="">
          <p class="the_loai">Hành động</p>
           <h2 class="ten_phim"><a href="#">THE MARVELS 3D</a></h2>
        </section>
        <section class="nguoi_vo">
            <img src="/img/nguoi_vo.webp" alt="">
            <p class="the_loai">Hài,Tâm lý,Tình cảm</p>
            <h2 class="ten_phim"><a href="#">NGƯỜI VỢ CUỐI CÙNG</a></h2>
        </section>
        <section class="quynh_hoa">
            <img src="/img/quynh_hoa.webp" alt="">
            <p class="the_loai">Cổ trang,dã sử</p>
            <h2 class="ten_phim"><a href="#">QUỲNH HOA NHẤT DẠ</a></h2>
        </section>
        <section class="chiem_doat">
            <img src="/img/chiem_doat.webp" alt="" >
            <p class="the_loai">Tâm lý,Tình cảm</p>
            <h2 class="ten_phim"><a href="#">CHIẾM ĐOẠT</a></h2>
        </section>
        <section class="mi_nhan">
            <img src="/img/mi_nhan.webp" alt="">
            <p class="the_loai">Hài</p>
            <h2 class="ten_phim"><a href="#">MỸ NHÂN ĐẠO CHÍCH</a></h2>
        </section>
            <section class="oan-hon">
                <img src="/img/oan-hon.webp" alt="">
                <p class="the_loai">Kinh dị</p>
                <h2 class="ten_phim"><a href="#">OAN HỒN TỬ ĐỊA</a></h2>
            </section>
            <section class="tro_tan">
                <img src="/img/tro_tan.webp" alt="">
                <p class="the_loai">Tâm lý,Tình cảm</p>
                <h2 class="ten_phim"><a href="">TRO TÀN RỰC RỠ</a></h2>
            </section>
            <section class="quy_lun">
                <img src="/img/quy_lun.webp" alt="">
                <p class="the_loai">Hài,Hoạt hình,Phiêu lưu</p>
                <h2 class="ten_phim"><a href="">QUỶ LÙN TINH NGỊCH</a></h2>
            </section>
            <section class="vong_am">
                <img src="/img/vong_am.webp" alt="">
                <p class="the_loai">Kinh dị</p>
                <h2 class="ten_phim"><a href="">VONG ÁM</a></h2>
            </section>
            <section class="nha_vit">
                <img src="/img/nha_vit.webp" alt="">
                <p class="the_loai">Hài,Hoạt hình,Phiêu lưu</p>
                <h2 class="ten_phim"><a href="">NHÀ VỊT DI CƯ</a></h2>
            </section>
            <section class="dau_truong">
                <img src="/img/dau_truong.webp" alt="">
                <p class="the_loai">Hành động,Phiêu lưu</p>
                <h2 class="ten_phim"><a href="">ĐẤU TRƯỜNG SINH TỬ</a></h2>
            </section>
            <section class="nam_dem">
                <img src="/img/5_dem.webp" alt="">
                <p class="the_loai">Kinh dị</p>
                <h2 class="ten_phim"><a href="">NĂM ĐÊM KINH HOÀNG</a></h2>
            </section>-->

    </section>
</section>