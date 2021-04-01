<?php 
    require_once "../header.php"
    ?>
    
    <h1>Thêm Sản Phẩm</h1>
    <form action="../Controllers/SanPhamController.php?action=ThemSP" method="post">
        Tên: <input type="text" name="ten"><br/>
        Giá: <input type="text" name="gia"><br/>
        <input type="submit" value= "Thêm">
        
    </form>
<?php 
    require_once "../footer.php"
    ?>