//本工具由jiaozhongyi进行汉化
//不可用于商用
//作者个人主页http://jiaozhongyi.jiaomc.top

//这里边我改了一下
//host1:后面加的是显示的IP(Srv后的)
//host2:Srv整后是没有端口的，这个只是个假的(没有任何作用)
//host:这个是你填的，你没有经过srv的原服务器IP
//port:原服务器端口

//*****上述设定仅适用于服务器使用srv记录*****

//不是srv记录看下面

//******************没有域名********************

//host1和host填同一个ip
//host3和port填同一个ip

//*********有域名，但是不会使用srv记录********

//host1和host填同一个域名
//host3和port填同一个IP

//*****************原作者注释*******************
/*
 * 張文相 Zhang Wenxiang - 個人 Blog
 * https://blog.reh.tw/
 *
 * 範例教學
 * https://blog.reh.tw/webpage-display-minecraft-server-status/
 */

<?php
$host1 = "play.jiaomc.top";
$host2 = "25565";
$host = "play.simpfun.cn"; //設定伺服器網域或 IP
$port = "22357"; //設定伺服器端口
require_once __DIR__.'/data.php';
?>
<html>
    <body background="https://pic1.zhimg.com/c0e6a1fb76775b05fc5acf8200ab3b8c_r.jpg">

    <head>
        <title>JIAOMC服务器状态</title>
    </head>
    <body>
        <h1>JIAOMC服务器状态</h1>
        <p>状态：<font color="#FFD700"><?php echo $status; ?></font></p>
        <p>IP或域名：<font color="#FFD700"><?php echo $host1; ?></font>
            <br>端口：<font color="#FFD700"><?php echo $host2; ?></font></p>
            <p>MOTD：<font color="#2a6c0f"><?php echo $motd; ?></font>
            <br>没有颜色参数MOTD：<font color="#2a6c0f"><?php echo $clean_motd; ?></font>
            <br>有颜色参数MOTD：<font color="#2a6c0f"><?php echo $html_motd; ?></font></p>
        <p>平台：<font color="#2a6c0f"><?php echo $platform; ?></font>
        <br>游戏类型：<font color="#FFD700"><?php echo $gametype; ?></font></p>
        <p>兼容游戏版本：<font color="#FFD700"><?php echo $version; ?></font>
            <br>服务器使用的核心：<font color="#FFD700"><?php echo $software; ?></font></p>
        <p>最大可容纳人数：<font color="#FFD700"><?php echo $players_max; ?></font>
            <br>线上玩家数：<font color="#FFD700"><?php echo $players_online; ?></font></p>
            <br>查询耗时：<font color="#FFD700"><?php echo $processed; ?></font></p>
        <hr>
        <h3>目前在线玩家(id) <font color="#FFD700"><?php echo $players_online; ?></font>/<font color="#FFD700"><?php echo $players_max; ?></font></h3>
        <?php if (is_array($Players)) : ?>
        <?php foreach($Players as $Player) : ?>
        <font color="#FFD700"><?php echo htmlspecialchars($Player); ?></font><br>
        <?php endforeach; ?>
        <?php else: ?>
        无玩家在线。
        <?php endif; ?>
    </body>
</html>
