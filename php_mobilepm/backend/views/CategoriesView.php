<!-- load file layout chung -->
<?php $this->layoutPath = "Layout.php"; ?>
<div class="col-md-12">
    <div style="margin-bottom:5px;">
    </div>
    <h1>List Categories</h1>
    <div class="panel panel-primary">
        <div style="background: white; border: 3px solid gray;" class="panel-body">
            <table class="table table-bordered table-hover">
                <tr>
                    <th>Name</th>
                    <th style="width:200px;"></th>
                </tr>
                <?php foreach($data as $rows): ?>
                <tr>
                    <td><?php echo $rows->name; ?></td>
                    <td style="text-align:center;">
                        <a href="index.php?controller=categories&action=update&id=<?php echo $rows->id; ?>" class="btn btn-success">Edit</a>&nbsp;
                        <a href="index.php?controller=categories&action=delete&id=<?php echo $rows->id; ?>" onclick="return window.confirm('Are you sure?');" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                    <?php 
                        //lay cac danh muc con thuoc danh muc nay
                        $dataSub = $this->modelReadSubCategories($rows->id);
                     ?>
                     <?php foreach($dataSub as $rowsSub): ?>
                        <tr>
                            <td style="padding-left: 30px;"><?php echo $rowsSub->name; ?></td>
                            <td style="text-align:center;">
                                <a href="index.php?controller=categories&action=update&id=<?php echo $rowsSub->id; ?>" class="btn btn-success">Edit</a>&nbsp;
                                <a href="index.php?controller=categories&action=delete&id=<?php echo $rowsSub->id; ?>" onclick="return window.confirm('Are you sure?');" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                     <?php endforeach; ?>
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
                                    <a style="float: right;" href="index.php?controller=categories&action=create" class="btn btn-info">Add category</a>
                                </div>
        </div>
    </div>
</div>