<!DOCTYPE html
    PUBLIC "-//W3C//DTD HTML 4.01//EN"
    "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en-US">
<head profile="http://www.w3.org/2005/10/profile">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <link rel="icon" type="image/png" href="http://criliscraft.noip.me/CDN/CLC2/Logos/Current/favicon.png">
    <title>CriLis Craft - Staff Control Panel</title>
</head>
<body>

    <div id="content" class="container">
        <!-- LOGO /-->
        <div id="top" align="center">
            <img src="http://criliscraft.noip.me/CDN/CLC2/Logos/Current/CLCStaffSiteLogo.png" />
        </div>

        <!-- NAV /-->
        <div class="btn-group btn-group-justified" role="group" aria-label="...">
            <div class="btn-group" role="group">
                <a type="button" role="button" class="btn btn-default" href="#notify">Notifications</a>
            </div>
            <div class="btn-group" role="group">
                <a type="button" role="button" class="btn btn-default" href="#ban">Ban Proof</a>
            </div>
            <div class="btn-group" role="group">
                <a type="button" role="button" class="btn btn-default" href="#status">Server Status</a>
            </div>
            <div class="btn-group" role="group">
                <a type="button" role="button" class="btn btn-default" href="#mcbans">MCBans Status</a>
            </div>
            <div class="btn-group" role="group">
                <a type="button" role="button" class="btn btn-default" href="#modtrain">Mod Training Updates</a>
            </div>
            <div class="btn-group" role="group">
                <a type="button" role="button" class="btn btn-default" href="#vps-io">VPS Health I/O</a>
            </div>
            <div class="btn-group" role="group">
                <a type="button" role="button" class="btn btn-default" href="#projects">Projects</a>
            </div>
        </div>

        <hr />

        <!-- NOTIFICATIONS /-->
        <div id="notify">
            <!--<div class="alert alert-success" role="alert">No new alerts.</div>/-->
            <div class="alert alert-warning" role="alert">Please contact Chaka or jordany7 for info on the mandatory mod training update. 8-10-15</div>
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
            <?php include_once 'cgi-bin/Server.php'; ?>
        </div>

        <hr />

        <!-- MCBANS /-->
        <div id="mcbans">
            <h3>MCBans Status</h3>

            <iframe src="http://mcbans.com/server/51786/criliscraft.noip.me/bans/page/1/embed" width="1300" height="825"></iframe>
            <br/>
            <h4>Disputes</h4>
            <iframe src="http://mcbans.com/dispute/list/open_disputes/1" width="1300" height="825"></iframe>
        </div>

        <hr />

        <!-- MOD TRAINING /-->
        <div id="modtrain">
            <h3>Mod Training Updates</h3>

            <div class="well well-sm">
                <b>8-10-15</b> <p>Updated all of Mod Training</p>
            </div>
        </div>

        <hr/>

        <!-- VPS HEALTH I/O /-->
        <div id="vps-io">
            <h3>VPS Health I/O</h3>
            <iframe src="https://premium.boundary.com/embed/e.21d9eaeb2f?d-w=3&d-h=3&d-pad=5&d-header=1&d-legend=0&d-light=1&d-bg=none&d-sg-cpu=0-0-1-1&d-sg-hdr=1-2-1-1-t&d-sg-hdw=1-2-1-1-b&d-sg-mem=0-1-1-1&d-sg-ni=1-0-1-2-t&d-sg-no=1-0-1-2-b&d-sg-hdrb=2-0-1-1&d-sg-hdwb=2-2-1-1&d-g-SYSTEM.MEM.FREE=0-2-1-1&d-g-SYSTEM.FS.USE_PERCENT.TOTAL=2-1-1-1#null"
                    allowtransparency="true" width="1142" height="720"></iframe
        </div>

        <hr />

        <!-- PROJECTS /-->
        <div id="projects">
            <h3>Current Projects</h3>

            <table class="table">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Status</th>
                    <th>Notes</th>
                </tr>
                <tr>
                    <td><a href="https://github.com/CriLisCraft/Issue-Tracker/issues/62">62</a></td>
                    <td>Donation System</td>
                    <td><span class="label label-warning">In Progress</span></td>
                    <td>About 50% Done</td>
                </tr>
            </table>
        </div>

        <hr />

        <!-- FOOTER /-->
        <div class="well well-sm" align="center">
            &copy; 2011-2015 <a href="http://criliscraft.noip.me/gp">CriLis Craft GP</a>
        </div>
    </div>
</body>
</html>