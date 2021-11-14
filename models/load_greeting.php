<?php
require_once '../config/connection.php';

$sql = mysqli_query($conn, "SELECT name, greeting,created_at from greeting order by created_at DESC");
foreach ($sql as $result) : ?>
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="panel-title">
                <i class="text-muted pull-right" style="margin:0px;line-height:1;font-size:12px;"><i class="fa fa-clock-o"></i> <?= time_since(strtotime($result['created_at'])); ?></i>
                <h5 style="margin:0px;margin-bottom:0px;" class=""><label for=""><?= $result['name']; ?></label></h5>
            </div>
        </div>
        <div class="panel-body">
            <h4 class=""><?= $result['greeting']; ?></h4>
        </div>
    </div>
<?php endforeach; ?>