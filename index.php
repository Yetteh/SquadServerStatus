<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href="//bootswatch.com/yeti/bootstrap.min.css" rel="stylesheet" type="text/css" />
<script src="//code.jquery.com/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

<?php 
require 'api.php'; // Converts JSON to PHP 
require 'config.php' // Grabbing this for the luls 
?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1><?php echo $thetitle;?></h1>
        </div>
    </div>
    <div class="row clearfix">
        <div class="col-md-12 column">
        <?php $online=$data[ 'is_online'] + $data2[ 'is_online'] + $data3[ 'is_online']; 
            switch($online){ 
              case 1: echo '<div class="panel panel-warning"><div class="panel-heading"><h3 class="panel-title">Some servers are down. Only 1 server is online.'; break; 
              case 2: echo '<div class="panel panel-success"><div class="panel-heading"><h3 class="panel-title">All servers are up and running.'; break; 
              case 3: echo '<div class="panel panel-success"><div class="panel-heading"><h3 class="panel-title">All servers are up and running.'; break; 
              default: echo '<div class="panel panel-danger"><div class="panel-heading"><h3 class="panel-title">All servers are down, contact an administrator.'; break; } ?>
            <small class="pull-right">Refreshed on <?php echo $data['last_check']?></small>
            </h3>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <?php echo "$data[hostname]";?>
            <div id="address">IP:
                <?php echo "$data[address]";?>:
                <?php echo "$data[query_port]";?>
            </div>
            <div id="onlinestatus">
                <?php if ($data[ 'is_online']>='1') {echo '<span class="label label-success">Online</span>';}else {echo '<span class="label label-danger">Offline</span>';}?></div>
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
                    <a href='steam://connect/164.132.202.16:27165'>
                        <button type="button" class="btn btn-default btn-xs">Join Server</button>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <?php echo "$data2[hostname]";?>
            <div id="address">IP:
                <?php echo "$data2[address]";?>:
                <?php echo "$data2[query_port]";?>
            </div>
            <div id="onlinestatus">
                <?php if ($data2[ 'is_online']>='1') {echo '<span class="label label-success">Online</span>';}else {echo '<span class="label label-danger">Offline</span>';}?></div>
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
                    <a href='steam://connect/164.132.202.16:27175'>
                        <button type="button" class="btn btn-default btn-xs">Join Server</button>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <?php echo "$data3[hostname]";?>
            <div id="address">IP:
                <?php echo "$data3[address]";?>:
                <?php echo "$data3[query_port]";?>
            </div>
            <div id="onlinestatus">
                <?php if ($data3[ 'is_online']>='1') {echo '<span class="label label-success">Online</span>';}else {echo '<span class="label label-danger">Offline</span>';}?></div>
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
                    <a href='steam://connect/164.132.202.16:27185'>
                        <button type="button" class="btn btn-default btn-xs">Join Server</button>
                    </a>
                </div>
            </div>
        </div>
    </div>


    <div class="panel panel-default">
        <div class="panel-heading">Zulu X-Ray Delta (COOP WORKSHOP)</div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-11">
                    <a href="http://www.gametracker.com/server_info/164.132.202.16:27015/" target="_blank"><img src="http://cache.www.gametracker.com/server_info/164.132.202.16:27015/b_560_95_1.png" border="0" width="560" height="95" alt="" />
                    </a>
                </div>
                <div class="col-md-1">
                    <a href='steam://connect/164.132.202.16:27015'>
                        <button type="button" class="btn btn-default btn-xs">Join Server</button>
                    </a>
                </div>


            </div>
        </div>
    </div>

    <style>
        #onlinestatus {
            float: left;
            margin-top: 5px;
            margin-right: 10px;
        }
        #address {
            float: right;
        }
        button.btn.btn-default.btn-xs {
            margin-left: -20px;
        }
    </style>