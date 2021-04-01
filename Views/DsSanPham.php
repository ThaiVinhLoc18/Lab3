<?php 
    require_once "../header.php"
    ?>
<h1>Trang Danh Sach San Pham</h1>
<a href="../Controllers/SanPhamController.php?action=Them">Thêm mới</a>
<?php
  if ($result->num_rows>0) {
echo '<table class="table">

  <thead class="thead-dark">
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Gia</th>
      <th scope="col">Action</th>
    </tr>
  </thead>';
  while($row=$result->fetch_assoc()){
      echo '<tr class="text-success">
    <td>'.$row["id"].'</td>
    <td>'.$row["ten"].'</td>
    <td>'.$row["gia"].'</td>
    <td><a href="#">Xem</a> |<a href="#">Sửa</a> | <button onclick="XoaSanPham">Xóa</button></td>
  </tr>';
  }
  echo "</table>";
}
?>

<script>
  function XoaSanPham($id){
      var xmlhhtp = new XMLHttpRequest();
      xmlhttp.onreadystatechange= function(){
        if(this.reayState == 4 && this.status==200)
        {
          document.getElenmenById("danhsach").
          innerHTML = this.responseText;
        }
      };
      xmlhttp.open("GET","../Controller/SanPhamController.php?method=xoa&id="+id,true);
      xmlhttp.send();
      
  }
</script>

<style>
table, th, td {
  border: 1px solid black;
}

</style>
<?php 
    require_once "../footer.php"
    ?>