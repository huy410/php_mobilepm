<!-- load file layout chung -->
<?php $this->layoutPath = "Layout.php"; ?>
<div class="col-md-12">
    <div style="margin-bottom:5px;">
    </div>
    <h1>List News</h1>
    <div class="panel panel-primary">
        <div style="background: white; border: 3px solid gray;" class="panel-body">
            <table class="table table-bordered table-hover">
                <tr>
                    <th style="width: 100px;">Photo</th>
                    <th>Name</th>
                    <th style="width:100px; text-align: center;">Hot</th>
                    <th style="width:200px;"></th>
                </tr>
                <?php foreach($data as $rows): ?>
                <tr>
                    <td style="text-align: center;">
                        <?php if($rows->photo != "" && file_exists("../assets/upload/news/".$rows->photo)): ?>
                            <img src="../assets/upload/news/<?php echo $rows->photo; ?>" style="width:100px;">
                        <?php endif; ?>
                    </td>
                    <td><?php echo $rows->name; ?></td>
                    <td style="text-align: center;">
                        <?php if($rows->hot == 1): ?>
                            <span class="fa fa-check"></span>
                        <?php endif; ?>
                    </td>                
                    <td style="text-align:center;">
                        <a href="index.php?controller=news&action=update&id=<?php echo $rows->id; ?>" class="btn btn-success">Edit</a>&nbsp;
                        <a href="index.php?controller=news&action=delete&id=<?php echo $rows->id; ?>" onclick="return window.confirm('Are you sure?');" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            	<?php endforeach; ?>
            </table>
            <style type="text/css">
                                    .pagination{padding:0px; margin:0px;float: left;}
                                    .pagination a:hover:{background-color: #ddd;}
                                </style>
                                <div>
                                    <ul class="pagination">
                                        <?php for($i = 1; $i <= $numPage; $i++): ?>
                                        <li><a href="index.php?controller=users&p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                                    <?php endfor; ?>
                                    </ul>
                                    <a style="float: right;" href="index.php?controller=news&action=create" class="btn btn-info">Add news</a>
                                </div>
        </div>
    </div>
</div>