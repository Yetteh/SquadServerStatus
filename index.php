<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href="//bootswatch.com/yeti/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="style.css" rel="stylesheet" type="text/css" />
<script src="//code.jquery.com/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

<?php 
require 'api.php'; // Converts JSON to PHP 
require 'config.php' // Grabbing this for the luls ]

?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1><?php echo $thetitle;?></h1>
        </div>
    </div>
    <div class="row clearfix">
        <div class="col-md-12 column">
<?php 

$online = $server1online + $server2online + $server3online + $server4online + $server5online;
switch ($servers) {
    case 1:
        switch ($online) {
            case 1:
                echo '<div class="panel panel-warning"><div class="panel-heading"><h3 class="panel-title">Some servers are down. Only 1 of 1 servers are online.';
                break;
            default:
                echo '<div class="panel panel-danger"><div class="panel-heading"><h3 class="panel-title">All servers are down, contact an administrator.';
                break;
        }
        break;
    case 2:
        switch ($online) {
            case 1:
                echo '<div class="panel panel-warning"><div class="panel-heading"><h3 class="panel-title">Some servers are down. Only 1 of 2 servers are online.';
                break;
            case 2:
                echo '<div class="panel panel-success"><div class="panel-heading"><h3 class="panel-title">Everything is online. Only 2 of 2 servers are online.';
                break;
            default:
                echo '<div class="panel panel-danger"><div class="panel-heading"><h3 class="panel-title">All servers are down, contact an administrator.';
                break;
        }
        break;
    case 3:
        switch ($online) {
            case 1:
                echo '<div class="panel panel-warning"><div class="panel-heading"><h3 class="panel-title">Some servers are down. Only 1 of 3 servers are online.';
                break;
            case 2:
                echo '<div class="panel panel-warning"><div class="panel-heading"><h3 class="panel-title">Some servers are down. Only 2 of 3 servers are online.';
                break;
            case 3:
                echo '<div class="panel panel-success"><div class="panel-heading"><h3 class="panel-title">Everything is online. Only 3 of 3 servers are online.';
                break;
            default:
                echo '<div class="panel panel-danger"><div class="panel-heading"><h3 class="panel-title">All servers are down, contact an administrator.';
                break;
        }
        break;
    case 4:
        switch ($online) {
            case 1:
                echo '<div class="panel panel-warning"><div class="panel-heading"><h3 class="panel-title">Some servers are down. Only 1 of 4 servers are online.';
                break;
            case 2:
                echo '<div class="panel panel-warning"><div class="panel-heading"><h3 class="panel-title">Some servers are down. Only 2 of 4 servers are online.';
                break;
            case 3:
                echo '<div class="panel panel-success"><div class="panel-heading"><h3 class="panel-title">Everything is online. Only 3 of 4 servers are online.';
                break;
            case 4:
                echo '<div class="panel panel-success"><div class="panel-heading"><h3 class="panel-title">Everything is online. Only 4 of 4 servers are online.';
                break;
            default:
                echo '<div class="panel panel-danger"><div class="panel-heading"><h3 class="panel-title">All servers are down, contact an administrator.';
                break;
        }
        break;
    case 5:
        switch ($online) {
            case 1:
                echo '<div class="panel panel-warning"><div class="panel-heading"><h3 class="panel-title">Some servers are down. Only 1 of 5 servers are online.';
                break;
            case 2:
                echo '<div class="panel panel-warning"><div class="panel-heading"><h3 class="panel-title">Some servers are down. Only 2 of 5 servers are online.';
                break;
            case 3:
                echo '<div class="panel panel-warning"><div class="panel-heading"><h3 class="panel-title">Everything is online. Only 3 of 5 servers are online.';
                break;
            case 4:
                echo '<div class="panel panel-warning"><div class="panel-heading"><h3 class="panel-title">Everything is online. Only 4 of 5 servers are online.';
                break;
            case 5:
                echo '<div class="panel panel-success"><div class="panel-heading"><h3 class="panel-title">Everything is online. Only 5 of 5 servers are online.';
                break;
            default:
                echo '<div class="panel panel-danger"><div class="panel-heading"><h3 class="panel-title">All servers are down, contact an administrator.';
                break;
        }
        break;
}
?>
           <small class="pull-right">Refreshed on <?php echo $data['last_check']?></small>
            </h3>
        </div>
    </div>

<?php if (!empty($server1)) {
?>
    <div class="panel panel-default">
        <div class="panel-heading">
            <?php echo "$data[hostname]";?>
            <div id="address">IP:
                <?php echo "$data[address]";?>:
                <?php echo "$data[query_port]";?>
            </div>
            <div id="onlinestatus">
                <?php if ($server1online==1) {echo '<span class="label label-success">Online</span>';}else {echo '<span class="label label-danger">Offline</span>';}?></div>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-3"><strong>Current Map:</strong>
                    <?php echo "$data[map]";?>
                </div>
                <div class="col-md-3"><strong>Version: </strong>
                    <?php echo "$data[version]";?>
                </div>
                <div class="col-md-3"><strong>Online Players: </strong>
                    <?php echo "$data[players]";?> /
                    <?php echo "$data[maxplayers]";?>
                </div>
                <div class="col-md-2"><strong>Uptime: </strong>
                    <?php echo "$data[uptime]";?>%</button>
                </div>
                <div class="col-md-1">
                     <a href='steam://connect/<?php echo "$data[address]"?>:<?php echo "$data[query_port]"?>'>
                        <button type="button" class="btn btn-default btn-xs">Join Server</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
<?php
} else { 
 // display nothing server not in use
} ?>
<?php if (!empty($server2)) {
?>
    <div class="panel panel-default">
        <div class="panel-heading">
            <?php echo "$data2[hostname]";?>
            <div id="address">IP:
                <?php echo "$data2[address]";?>:
                <?php echo "$data2[query_port]";?>
            </div>
            <div id="onlinestatus">
                <?php if ($server2online==1) {echo '<span class="label label-success">Online</span>';}else {echo '<span class="label label-danger">Offline</span>';}?></div>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-3"><strong>Current Map:</strong>
                    <?php echo "$data2[map]";?>
                </div>
                <div class="col-md-3"><strong>Version: </strong>
                    <?php echo "$data2[version]";?>
                </div>
                <div class="col-md-3"><strong>Online Players: </strong>
                    <?php echo "$data2[players]";?> /
                    <?php echo "$data2[maxplayers]";?>
                </div>
                <div class="col-md-2"><strong>Uptime: </strong>
                    <?php echo "$data2[uptime]";?>% </div>
                <div class="col-md-1">
                    <a href='steam://connect/<?php echo "$data2[address]"?>:<?php echo "$data2[query_port]"?>'>
                        <button type="button" class="btn btn-default btn-xs">Join Server</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <?php
} else { 
 // display nothing server not in use
} ?>
<?php if (!empty($server3)) {
?>
    <div class="panel panel-default">
        <div class="panel-heading">
            <?php echo "$data3[hostname]";?>
            <div id="address">IP:
                <?php echo "$data3[address]";?>:
                <?php echo "$data3[query_port]";?>
            </div>
            <div id="onlinestatus">
                 <?php if ($server3online==1) {echo '<span class="label label-success">Online</span>';}else {echo '<span class="label label-danger">Offline</span>';}?></div>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-3"><strong>Current Map:</strong>
                    <?php echo "$data3[map]";?>
                </div>
                <div class="col-md-3"><strong>Version: </strong>
                    <?php echo "$data3[version]";?>
                </div>
                <div class="col-md-3"><strong>Online Players: </strong>
                    <?php echo "$data3[players]";?> /
                    <?php echo "$data3[maxplayers]";?>
                </div>
                <div class="col-md-2"><strong>Uptime: </strong>
                    <?php echo "$data3[uptime]";?>%</button>
                </div>
                <div class="col-md-1">
                    <a href='steam://connect/<?php echo "$data3[address]"?>:<?php echo "$data3[query_port]"?>'>
                        <button type="button" class="btn btn-default btn-xs">Join Server</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <?php
} else { 
 // display nothing server not in use
} ?>
<?php if (!empty($server4)) {
?>
    <div class="panel panel-default">
        <div class="panel-heading">
            <?php echo "$data4[hostname]";?>
            <div id="address">IP:
                <?php echo "$data4[address]";?>:
                <?php echo "$data4[query_port]";?>
            </div>
            <div id="onlinestatus">
                 <?php if ($server4online==1) {echo '<span class="label label-success">Online</span>';}else {echo '<span class="label label-danger">Offline</span>';}?></div>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-3"><strong>Current Map:</strong>
                    <?php echo "$data4[map]";?>
                </div>
                <div class="col-md-3"><strong>Version: </strong>
                    <?php echo "$data4[version]";?>
                </div>
                <div class="col-md-3"><strong>Online Players: </strong>
                    <?php echo "$data4[players]";?> /
                    <?php echo "$data4[maxplayers]";?>
                </div>
                <div class="col-md-2"><strong>Uptime: </strong>
                    <?php echo "$data4[uptime]";?>%</button>
                </div>
                <div class="col-md-1">
                     <a href='steam://connect/<?php echo "$data4[address]"?>:<?php echo "$data4[query_port]"?>'>
                        <button type="button" class="btn btn-default btn-xs">Join Server</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <?php
} else { 
 // display nothing server not in use
} ?>
<?php if (!empty($server5)) {
?>
    <div class="panel panel-default">
        <div class="panel-heading">
            <?php echo "$data5[hostname]";?>
            <div id="address">IP:
                <?php echo "$data5[address]";?>:
                <?php echo "$data5[query_port]";?>
            </div>
            <div id="onlinestatus">
                <?php if ($server5online==1) {echo '<span class="label label-success">Online</span>';}else {echo '<span class="label label-danger">Offline</span>';}?></div>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-3"><strong>Current Map:</strong>
                    <?php echo "$data5[map]";?>
                </div>
                <div class="col-md-3"><strong>Version: </strong>
                    <?php echo "$data5[version]";?>
                </div>
                <div class="col-md-3"><strong>Online Players: </strong>
                    <?php echo "$data5[players]";?> /
                    <?php echo "$data5[maxplayers]";?>
                </div>
                <div class="col-md-2"><strong>Uptime: </strong>
                    <?php echo "$data5[uptime]";?>%</button>
                </div>
                <div class="col-md-1">
                     <a href='steam://connect/<?php echo "$data5[address]"?>:<?php echo "$data5[query_port]"?>'>
                        <button type="button" class="btn btn-default btn-xs">Join Server</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <?php
} else { 
 // display nothing server not in use
} ?>
