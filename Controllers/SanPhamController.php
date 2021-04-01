<?php
    require_once "../db_connect.php";
    require_once "../Models/SanPham.class.php";
    $method=$_GET['action'];
    switch ($method) {
        case 'DanhSach':
            # code...
            GetDanhSach();
            break;
        case 'ChiTiet':
            # code...
            $id=null;
            GetChiTietSP($id);
            break;
        case 'ThemSP':
            # code...
            $ten = $_POST['ten'];
            $gia = $_POST['gia'];
            $sanpham = new SanPham($ten,$gia);
            ThemSP($sanpham);
            break;
        default:
            # code...
            break;
    }
    function GetDanhSach(){
        global $con; 
        $sqlGetdanhsach = "SELECT * FROM sanpham";
        try{
            $result=$con->query($sqlGetdanhsach);    
            require_once "../Views/DsSanpham.php";
        }
        catch(Exception $ex){
            die ("ERROR".$ex->getMessage());
        }
        finally{
            $con->close();
        }
        
    }
    function GetChiTietSP($idSP)
    {
        # code...
    }
    function ThemSP($SP)
    {
        # code...
        global $con;
        $sqladddanhsach = "INSERT INTO sanpham (ten,gia) VALUES (?,?)";
        $stmt = $con->prepare($sqladddanhsach);
        $stmt->bind_param("si",$SP->ten,$SP->gia);
        if ($stmt->execute()){
            GetDanhSach();
          }else{
            echo " FAIL INSERT!";
          }
    }
    
?>