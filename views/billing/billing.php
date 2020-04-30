<?php

$this->registerCssFile('css/style.css');

?>
<h1 class="text-center billing-h1">Billing</h1>


<div class="container">
    <div class="col">
        <table class="table table-stripped table-bordered table-hover text-center">
            <thead>
                <td class="table-header">Billings</td>
                <td class="table-header">Users</td>
            </thead>
            <?php foreach($res as $resp):?>
                <tr>
                    <td class="table-body"><?=$resp['payment']?></td>
                    <td class="table-body"><?=$resp['user']?></td>
                </tr>
            <?php endforeach;?>
        </table>
    </div>
</div>