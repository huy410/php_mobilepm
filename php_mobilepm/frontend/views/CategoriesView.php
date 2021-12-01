<ul>
            <?php $categories = $this->modelListCategories(); ?>
      <?php foreach($categories as $rows): ?>
            <li style="text-align: left;"><a href="index.php?controller=products&action=category&id=<?php echo $rows->id; ?>"><?php echo $rows->name; ?></a></li>
            
      <?php endforeach; ?>
          </ul>