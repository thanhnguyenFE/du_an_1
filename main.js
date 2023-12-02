
    var ds_anh= [
        `<img src="../img/anh1.jpg" alt="" width="100%"> `,
        `<img src="../img/anh2.jpg" alt="" width="400"> `,
        `<img src="../img/anh3.jpg" alt="" width="400"> `,
        `<img src="../img/anh4.jpg" alt="" width="400"> `,
        `<img src="../img/anh5.jpg" alt="" width="400"> `,
];
        var vi_tri = 1;
        function pre() {
            // Nếu chưa phải ảnh đầu tiên thì cho lùi tiếp
            if (vi_tri > 0) {
                vi_tri = vi_tri - 1;
            } else {
                vi_tri = ds_anh.length - 1;
            }
            document.querySelector('#hien_anh').innerHTML =
                ds_anh[vi_tri];
        }
        function next() {
            // Nếu chưa phải ảnh cuối cùng thì cho tiến tiếp
            if (vi_tri < ds_anh.length - 1) {
                vi_tri = vi_tri + 1;
            } else {
                vi_tri = 0;
            }
            document.querySelector('#hien_anh').innerHTML =
                ds_anh[vi_tri];
        }

        setInterval(function () { next(); }, 2000);   
    
    