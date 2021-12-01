<!-- load file layout chung -->
<?php $this->layoutPath = "LayoutTrangTrong.php"; ?>
<?php 
     $category_id = isset($_GET["id"]) ? $_GET["id"] : 0;
?>
<!-- content -->
  <div class="p-content" style="margin-top: 20px;padding: 10px;">
    <div class="nav1">
      <div class="hang" >
        <div class="title">Danh Mục</div>
        <div class="cont">
          <ul>
            <?php foreach($record as $rows): ?>
              <li><a href="index.php?controller=products&action=category&id=<?php echo $rows->id; ?>"><?php echo $rows->name; ?></a></li>
            <?php endforeach; ?>
          </ul>
        </div>
      </div>
      <div class="hang">
        <div class="title">Sắp xếp</div>
        <div class="cont" >
          <select style="width: 90%;margin: auto;" class="form-control" onchange="location.href = 'index.php?controller=products&action=category&id=<?php echo $category_id; ?>&order='+this.value;">
                  <option value="0">Sắp xếp</option>
                  <option value="priceAsc">Giá tăng dần</option>
                  <option value="priceDesc">Giá giảm dần</option>
                  <option value="nameAsc">Sắp xếp A-Z</option>
                  <option value="nameDesc">Sắp xếp Z-A</option>
                </select>
        </div>
      </div>
      <div class="gia" style="background: #d9d9d9">
        <div class="title" style="margin-bottom: 40px;">Giá</div>
        <div class="range-wrap">
        <div class="range-value" id="rangeV"></div>
        <input id="range" type="range" min="0" max="20000000" step="1000000">
        <button type="submit" class="btn btn-info" onclick="location.href = 'index.php?controller=search&action=productPrice&&range=' + document.getElementById('range').value;" />Search</button>
        </div>
      </div>
      <div class="hang">
        <div class="title">Tìm Nhiều</div>
        <div class="cont">
          <ul>
            <li><a href="#">Xiaomi</a></li>
            <li><a href="#">Oneplus</a></li>
            <li><a href="#">OPPO</a></li> 
          </ul>
        </div>
      </div>
    </div>
    <div class="prod">
                
      <div class="p-title"><?php echo $this->modelGetCategory($category_id); ?></div>
      <div class="p-img" style="margin-top: 8%;"><img src="img/phone.jpg"></div>
      <div class="p-item" style="margin-top: 1%;">
        <div class="grid-container">
            <?php foreach($data as $rows): ?>
            <div class="grid-item" style="border: groove 1px black; margin-left: 5px; margin-bottom: 5px;">
              <div class="p-img"><a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>"><img src="../assets/upload/products/<?php echo $rows->photo; ?>" title="<?php echo $rows->name; ?>" alt="<?php echo $rows->name; ?>" class="img-responsive"></a> </div>
              <div class="p-title"><a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>"><?php echo $rows->name; ?></a></div>
              <div class="p-gia" style="text-decoration:line-through;">$ <?php echo number_format($rows->price); ?></div>
              <div class="p-gia" style="color: black; font-weight: bolder;">$ <?php echo number_format($rows->price - ($rows->price*$rows->discount)/100); ?></div>
              <div class="rating text-warning font-size-12">
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="far fa-star"></i></span>
                        </div>
              <button type="submit" class="btn btn-danger font-size-12">Buy Now</button>
              <a href="index.php?controller=cart&action=create&id=<?php echo $rows->id; ?>">
              <button type="submit" class="btn btn-success font-size-12">Add to Cart</button></a>
            </div>
            <?php endforeach; ?>
        </div>
      </div> 
      <div class="pagination" style="position: absolute;bottom: -90px;">
      <a href="#">&laquo;</a>
        <?php for($i = 1; $i <= $numPage; $i++): ?>
        <a  href="index.php?controller=products&action=category&id=<?php echo $category_id; ?>&p=<?php echo $i; ?>"><?php echo $i; ?></a>
        <?php endfor; ?>
        <a href="#">&raquo;</a>
        
    </div> 
    </div>
  </div>

  