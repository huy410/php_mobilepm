<!-- load file layout chung -->
<?php $this->layoutPath = "LayoutTrangTrong.php"; ?>
<h1 style="margin-left: 10%;text-align: left;"><i class="fas fa-shopping-cart"></i>Your Cart</h1>
<?php if($this->cartNumber() > 0): ?>
<div class="template-cart">
  <form action="index.php?controller=cart&action=update" method="post">
    <div class="table-responsive">
      <table class="table table-cart" style="width: 80%;margin: auto;">
        <thead>
          <tr>
            <th class="image">Ảnh sản phẩm</th>
            <th class="name">Tên sản phẩm</th>
            <th class="price">Giá bán lẻ</th>
            <th class="quantity">Số lượng</th>
            <th class="price">Thành tiền</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
        <?php foreach($_SESSION["cart"] as $rows): ?>
          <tr>
            <td><img style="width: 200px;height: 200px;" src="../assets/upload/products/<?php echo $rows["photo"] ?>" class="img-responsive" /></td>
            <td><a href="index.php?controller=products&action=detail&id=<?php echo $rows["id"]; ?>"><?php echo $rows["name"] ?></a></td>
            <td> <?php echo number_format($rows["price"]-($rows["discount"]*$rows["price"]/100)); ?>₫ </td>
            <td><input type="number" id="qty" min="1" class="input-control" value="<?php echo $rows["number"] ?>" name="product_<?php echo $rows["id"] ?>" required="Không thể để trống"></td>
            <td><p><b><?php echo number_format($rows["number"]*($rows["price"]-($rows["discount"]*$rows["price"]/100))); ?>₫</b></p></td>
            <td><a href="index.php?controller=cart&action=delete&id=<?php echo $rows["id"]; ?>" data-id="2479395"><i class="fa fa-trash"></i></a></td>
          </tr>
         <?php endforeach; ?> 
        </tbody>
        <tfoot>
          <tr>
            <td colspan="6"><a href="index.php?controller=cart&action=destroy" class="button pull-left"><button class="btn btn-danger">Xóa toàn bộ</button></a> <a href="index.php" class="button pull-right black"><button class="btn btn-warning">Tiếp tục mua hàng</button></a>
              <button style="margin-right: 5px;" type="submit" class="btn btn-info button pull-right ">Cập Nhật</button></td>
          </tr>
        </tfoot>
      </table>
    </div>
  </form>
  <div style="font-size: 28px; text-align: right;margin-right: 10%;" class="total-cart"> Tổng tiền thanh toán:
    <?php echo number_format($this->cartTotal()); ?>₫ <br>
    <a href="index.php?controller=cart&action=checkOut" class="button black"><button class="btn btn-success" style="margin-top: 30px; width: 150px; height: 70px; font-size: 24px;">Thanh toán</button></a> </div>
</div>
<?php else: ?>
  <h3>You don't have anything in your cart yet.<a href="index.php">Browse product</a></h3>
<?php endif; ?>