<?php 
class SanPham{
    public $id;
    public $ten;
    public $gia;
    public function __construct($ten,$gia) {
        $this->ten = $ten;
        $this->gia = $gia;
    }
}
    
?>