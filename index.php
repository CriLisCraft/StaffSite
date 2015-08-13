<!DOCTYPE html
    PUBLIC "-//W3C//DTD HTML 4.01//EN"
    "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en-US">
<head profile="http://www.w3.org/2005/10/profile">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <link rel="icon" type="image/png" href="http://cdn.criliscraft.cf/Logos/Current/favicon.png">
    <meta http-equiv="refresh" content="60">
    <title>CriLis Craft - Staff Control Panel</title>
</head>
<body>

    <div id="content" class="container">
        <!-- LOGO /-->
        <div id="top" align="center">
            <img src="http://cdn.criliscraft.cf/Logos/Current/CLCStaffSiteLogo.png" />
        </div>

        <!-- NAV /-->
        <div class="btn-group btn-group-justified" role="group" aria-label="...">
            <div class="btn-group" role="group">
                <a type="button" role="button" class="btn btn-default" href="#ban">Ban Proof</a>
            </div>
            <div class="btn-group" role="group">
                <a type="button" role="button" class="btn btn-default" href="#status">Server Status</a>
            </div>
            <div class="btn-group" role="group">
                <a type="button" role="button" class="btn btn-default" href="#modtrain">Mod Training</a>
            </div>
            <div class="btn-group" role="group">
                <a type="button" role="button" class="btn btn-default" href="projects.php">Projects</a>
            </div>
            <div class="btn-group" role="group">
                <a type="button" role="button" class="btn btn-default" href="#mcbans">MCBans Status</a>
            </div>
            <div class="btn-group" role="group">
                <a type="button" role="button" class="btn btn-default" href="#vps-io">VPS Health I/O</a>
            </div>
            <div class="btn-group" role="group">
                <a type="button" role="button" class="btn btn-danger" href="admin.php">Admin</a>
            </div>
        </div>

        <hr />

        <!-- NOTIFICATIONS /-->
        <div id="notify">
            <?php include_once 'library/Alerts.php'; ?>
        </div>

        <hr />

        <!-- BAN PROOF /-->
        <div id="ban">
            <h3>Ban Proof Uploading</h3>
            <div>When uploading ban proof, Please name the image follow with the following: <br/>
            <b>BannedUser.png</b> if you have more then one image please do this<br/>
            <b>BannedUser-1.png</b>, <b>BannedUser-2.png</b> and so on.</div> <br />
            <form action="Upload.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <input type="file" id="file" name="file">
                    <br/>
                    <input type="submit" class="btn btn-primary" value="Upload Proof" name="submit">
                </div>
            </form>
        </div>

        <hr />

        <!-- SERVER STATUS /-->
        <div id="status">
            <h3>Server Status</h3>
            <p>Updates every 60 seconds.</p>
            <div id="ss"><?php include_once 'library/Server.php'; ?></div>
        </div>

        <hr />

        <!-- MOD TRAINING /-->
        <div id="modtrain">
            <h3>Mod Training</h3>
            <a href="http://github.com/CriLisCraft/ModTraining/wiki">Mod Training</a>
            <h4>Updates</h4>
            <table class="table">
                <tr>
                    <th>Type</th>
                    <th>Date</th>
                    <th>Note</th>
                </tr>
                    <?php include_once 'library/TrainChangelog.php'; ?>
            </table>
        </div>

        <hr/>

        <!-- MCBANS /-->
        <?php include_once 'library/inc/MCBans.php'; ?>

        <!-- VPS HEALTH I/O /-->
        <?php include_once 'library/inc/VPSHealthIO.php'; ?>

        <!-- FOOTER /-->
        <?php include_once 'library/inc/Footer.php'; ?>
    </div>
</body>
</html>