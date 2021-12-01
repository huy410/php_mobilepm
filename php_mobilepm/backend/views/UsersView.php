<!-- load file layout chung -->
<?php $this->layoutPath = "Layout.php"; ?>
                    <div class="col-md-12">
                        <div style="margin-bottom:5px;">
                        </div>
                        <h1>List User</h1>
                        <div class="panel panel-primary">
                            <div style="background: white; border: 3px solid gray;" class="panel-body">
                                <table class="table table-bordered table-hover">
                                    <tr>
                                        <th>Fullname</th>
                                        <th>Email</th>
                                        <th style="width:200px;"></th>
                                    </tr>
                                    <?php foreach ($data as $rows): ?>
                                    <tr>
                                        <td><?php echo $rows->name; ?></td>
                                        <td><?php echo $rows->email; ?></td>
                                        <td style="text-align:center;">
                                            <a href="index.php?controller=users&action=update&id=<?php echo $rows->id ?>" class="btn btn-success">Edit</a>&nbsp;
                                            <a href="index.php?controller=users&action=delete&id=<?php echo $rows->id ?>" class="btn btn-danger" onclick="return window.confirm('Are you sure?');">Delete</a>
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
                                    <a style="float: right;" href="index.php?controller=users&action=create" class="btn btn-info">Add user</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <style type="text/css">
                        .
                    </style>