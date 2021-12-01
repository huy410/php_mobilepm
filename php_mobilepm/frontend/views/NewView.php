<!-- load file layout chung -->
<?php $this->layoutPath = "LayoutTrangTrong.php"; ?>
<h1 style="padding-left: 10%;text-align: left;">Tin tức</h1>
<div class="content">
<?php $news = $this->modelHotNews(); ?>
	
              		<?php foreach ($news as $rows): ?> 
              		<div style="padding: 20px;">           
                      <h5 style="padding-left: 10%;text-align: left;"><a href="index.php?controller=news&action=detail&id=<?php echo $rows->id; ?>" style="font-weight: bold;"><?php echo $rows->name; ?></a></h5>
                      <a  href="index.php?controller=news&action=detail&id=<?php echo $rows->id; ?>" ><img style="height: 300px; width: 300px; float: left;margin-left: 10%;" src="../assets/upload/news/<?php echo $rows->photo; ?>" alt="<?php echo $rows->name; ?>" title="<?php echo $rows->name ?>" ></a>
                      <p style="text-align: left;float: left;"><?php echo $rows->description; ?></p>
                      <p style="clear: both;"></p>
                      <a href="#" style="text-align: right;">Đọc Thêm</a>
                      </div>
                  <?php endforeach; ?>  
    
</div>     