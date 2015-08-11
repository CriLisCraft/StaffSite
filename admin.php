<!DOCTYPE html
    PUBLIC "-//W3C//DTD HTML 4.01//EN"
    "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en-US">
<head profile="http://www.w3.org/2005/10/profile">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js" type="text/javascript"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" type="text/javascript"></script>
    <link rel="icon" type="image/png" href="http://cdn.criliscraft.cf/Logos/Current/favicon.png">
    <meta http-equiv="refresh" content="60">
    <title>CriLis Craft - Admin Control Panel</title>
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
            <a type="button" role="button" class="btn btn-default" href="#notify">Notifications</a>
        </div>
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
            <a type="button" role="button" class="btn btn-default" href="#projects">Projects</a>
        </div>
        <div class="btn-group" role="group">
            <a type="button" role="button" class="btn btn-primary" href="index.php">Staff</a>
        </div>
    </div>

    <hr />

    <!-- NOTIFICATIONS /-->
    <div id="notify">
        <h2>Notifications</h2>
        <p>You can edit and add to the listed notifications here.</p>
        <h3>Current Notifications</h3>
        <?php include_once 'cgi-bin/Alerts.php'; ?>
        <h3>Edit Notifications</h3>
            <form class="form-inline" action="EditAlert.php" method="post" enctype="multipart/form-data">
                <table class="table">
                    <tr>
                        <th>ID</th>
                        <th>Type</th>
                        <th>Text</th>
                        <th>Visible</th>
                    </tr>
                    <tr>
                        <td><input type="text" class="form-control" id="id" value="1"></td>
                        <td><select class="form-control" id="type">
                                <option>success</option>
                                <option>info</option>
                                <option>warning</option>
                                <option>danger</option>
                            </select></td>
                        <td><input type="text" class="form-control" id="text" value="Please contact Chaka or jordany7 for info on the mandatory mod training update. 8-10-15"></td>
                        <td><select class="form-control" id="visible">
                                <option>true</option>
                                <option>false</option>
                            </select></td>
                    </tr>
                </table>
                <button type="submit" class="btn btn-success">Save</button>
            </form>
        <h3>Add Notifications</h3>
        <form class="form-inline" action="AddAlert.php" method="post" enctype="multipart/form-data">
            <table class="table">
                <tr>
                    <th>ID</th>
                    <th>Type</th>
                    <th>Text</th>
                    <th>Visible</th>
                </tr>
                <tr>
                    <td><input type="text" class="form-control" id="id" value="" placeholder="Leave this blank"></td>
                    <td><select class="form-control" id="type">
                            <option>success</option>
                            <option>info</option>
                            <option>warning</option>
                            <option>danger</option>
                        </select></td>
                    <td><input type="text" class="form-control" id="text" value="" placeholder="The text to display on the notification."></td>
                    <td><select class="form-control" id="visible">
                            <option>true</option>
                            <option>false</option>
                        </select></td>
                </tr>
            </table>
            <button type="submit" class="btn btn-primary">Add Notification</button>
        </form>
    </div>
</div>
</body>
</html>