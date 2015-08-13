<!DOCTYPE html
    PUBLIC "-//W3C//DTD HTML 4.01//EN"
    "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en-US">
<head profile="http://www.w3.org/2005/10/profile">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js" type="text/javascript"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" type="text/javascript"></script>
    <link rel="icon" type="image/png" href="http://cdn.criliscraft.cf/Logos/Current/favicon.png">
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
        <!--<div class="btn-group" role="group">
            <a type="button" role="button" class="btn btn-default" href="#status">Server Status</a>
        </div>/-->
        <div class="btn-group" role="group">
            <a type="button" role="button" class="btn btn-default" href="#modtrain">Mod Training</a>
        </div>
        <div class="btn-group" role="group">
            <a type="button" role="button" class="btn btn-default" href="projects.php">Projects</a>
        </div>
        <div class="btn-group" role="group">
            <a type="button" role="button" class="btn btn-primary" href="index.php">Staff</a>
        </div>
    </div>

    <hr />
        <h1 class="text-danger">If you are not an Admin or CriLis Mod and you touch anything on this page intentionally, your staff position will be terminated immediately.</h1>
    <hr />

    <!-- NOTIFICATIONS /-->
    <div id="notify">
        <h2>Notifications</h2>
        <p>You can edit and add to the listed notifications here.</p>

        <h3>Current Notifications</h3>
        <div id="cur_not"><?php include_once 'library/AdminAlerts.php'; ?></div>

        <h3>Edit Notifications</h3>
        <h4 class="text-danger">MAKE SURE TO FILL IN ALL FIELDS WHEN EDITING A NOTIFICATION!</h4>
            <form class="form-inline" action="library/EditAlert.php" method="post" enctype="multipart/form-data">
                <table class="table">
                    <tr>
                        <th>ID</th>
                        <th>Type</th>
                        <th>Text</th>
                        <th>Visible</th>
                    </tr>
                    <tr>
                        <td><input type="text" class="form-control" name="edit_id" placeholder="ID of alert."></td>
                        <td><select class="form-control" name="edit_type">
                                <option class="text-success">success</option>
                                <option class="text-info">info</option>
                                <option class="text-warning">warning</option>
                                <option class="text-danger">danger</option>
                            </select></td>
                        <td><input type="text" class="form-control" name="edit_text" placeholder="The alert text."></td>
                        <td><select class="form-control" name="edit_visible">
                                <option>true</option>
                                <option>false</option>
                            </select></td>
                    </tr>
                </table>
                <button type="submit" class="btn btn-success">Save Notification</button>
            </form>

        <h3>Add Notifications</h3>
        <form class="form-inline" action="library/AddAlert.php" method="post" enctype="multipart/form-data">
            <table class="table">
                <tr>
                    <th>ID</th>
                    <th>Type</th>
                    <th>Text</th>
                    <th>Visible</th>
                </tr>
                <tr>
                    <td><input type="text" class="form-control" name="add_id" placeholder="Dont edit this"></td>
                    <td><select class="form-control" name="add_type">
                            <option class="text-success">success</option>
                            <option class="text-info">info</option>
                            <option class="text-warning">warning</option>
                            <option class="text-danger">danger</option>
                        </select></td>
                    <td><input type="text" class="form-control" name="add_text" value="" placeholder="The text to display on the notification."></td>
                    <td><select class="form-control" name="add_visible">
                            <option>true</option>
                            <option>false</option>
                        </select></td>
                </tr>
            </table>
            <button type="submit" class="btn btn-primary">Add Notification</button>
        </form>

        <h3>Delete Notification</h3>
        <form class="form-inline" action="library/DeleteAlert.php" method="post" enctype="multipart/form-data">
            <input type="text" class="form-control" name="del_id" placeholder="The id of the alert to delete.">
            <button type="submit" class="btn btn-danger">Delete Notification</button>
        </form>
    </div>

    <hr />

    <div id="ban">
        <h2>Ban Proof - WIP</h2>
    </div>

    <hr />

    <!--<div id="status">
        <h2>Server Status</h2>
    </div>

    <hr />/-->

    <div id="modtrain">
        <h2>Mod Training</h2>
        <p>You can add/edit/delete mod training changelogs here.</p>

        <h3>Current Changelog</h3>
        <table class="table">
            <tr>
                <th>ID</th>
                <th>Type</th>
                <th>Date</th>
                <th>Note</th>
            </tr>
            <tr>
                <?php include_once 'library/AdminTrainChangelog.php'; ?>
            </tr>
        </table>

        <h3>Add Change</h3>
        <form action="library/AddTrainChangelog.php" class="form-inline" method="post" enctype="multipart/form-data">
            <table class="table">
                <tr>
                    <th>ID</th>
                    <th>Type</th>
                    <th>Date</th>
                    <th>Note</th>
                </tr>
                <tr>
                    <td><input type="text" class="form-control" name="id" placeholder="Leave this blank."></td>
                    <td><select class="form-control" name="type">
                            <option>New</option>
                            <option>Update</option>
                            <option>Deleted</option>
                        </select></td>
                    <td><input type="text" class="form-control" name="date" placeholder="MM/DD/YYYY"></td>
                    <td><input type="text" class="form-control" name="note" placeholder="Description of the change."></td>
                </tr>
            </table>
            <button type="submit" class="btn btn-primary">Add Change</button>
        </form>

        <h3>Edit Change</h3>
        <h4 class="text-danger">MAKE SURE TO FILL IN ALL FIELDS WHEN EDITING A NOTIFICATION!</h4>
        <form action="library/EditTrainChangelog.php" class="form-inline" method="post" enctype="multipart/form-data">
            <table class="table">
                <tr>
                    <th>ID</th>
                    <th>Type</th>
                    <th>Date</th>
                    <th>Note</th>
                </tr>
                <tr>
                    <td><input type="text" class="form-control" name="id" placeholder="ID of change to edit."></td>
                    <td><select class="form-control" name="type">
                            <option>New</option>
                            <option>Update</option>
                            <option>Deleted</option>
                        </select></td>
                    <td><input type="text" class="form-control" name="date" placeholder="MM/DD/YYYY"></td>
                    <td><input type="text" class="form-control" name="note" placeholder="Description of the change."></td>
                </tr>
            </table>
            <button type="submit" class="btn btn-success">Save Change</button>
        </form>

        <h3>Delete Change</h3>
        <form class="form-inline" action="library/DeleteTrainChangelog.php" method="post" enctype="multipart/form-data">
            <input type="text" class="form-control" name="id" placeholder="The id of the change to delete.">
            <button type="submit" class="btn btn-danger">Delete Change</button>
        </form>
    </div>

    <hr />

    <!-- FOOTER /-->
    <?php include_once 'library/inc/Footer.php'; ?>
</div>
</body>
</html>