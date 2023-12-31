<section class="home">
    <section class="banner" id="hien_anh">
        <img src="../img/amazing-dark-knight-rises-1920x1080-wallpaper-9596.jpg" alt="" width="1440px" height="500px" />
        <button class="pre" onclick="pre()">&#10094;</button>
        <button class="next" onclick="next()">&#10095;</button>
    </section>
    <section class="content1">

        <?php

        foreach ($listphim as $item) :  
            extract($item);  
            $result = load_all_category_one_movie($movie_id);
            ?>
            <section class="con_nhot">
            <a href="index.php?act=movie-detail&id-movie=<?= $movie_id ?>">
                <img src="../upload/<?= $image ?>">
            </a>
                <p class="text-white text-center">
                <?php 
                foreach($result as $item){
                    extract($item);
                    echo $category_name.' ';
                }
                ?>
                </p>
                <a href="index.php?act=movie-detail&id-movie=<?= $movie_id ?>">
                    <h2 class="ten_phim"><?= $title ?></h2>
                </a>
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