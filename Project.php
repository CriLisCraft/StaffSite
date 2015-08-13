<!DOCTYPE html
    PUBLIC "-//W3C//DTD HTML 4.01//EN"
    "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en-US">
<head profile="http://www.w3.org/2005/10/profile">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <link rel="icon" type="image/png" href="http://cdn.criliscraft.cf/Logos/Current/favicon.png">
    <title>CriLis Craft - Projects</title>
</head>
<body>

<div id="content" class="container">
    <!-- LOGO /-->
    <div id="top" align="center">
        <img src="http://cdn.criliscraft.cf/Logos/Current/CLCStaffSiteLogo.png" />
    </div>

    <?php
        include_once 'library/config.php';
        $pid = $_GET['id'];
    ?>

    <hr />

    <!-- INFO /-->
    <div id="info">
        <h2>Project Info - <a href="projects.php">Back to the Project Tracker</a></h2>
        <h4><b>ID:</b> <?php echo $pid; ?></h4>
        <h4><b>Name:</b> <?php include_once 'library/ProjectName.php'; ?></h4>
        <h4><b>Status:</b> <?php include_once 'library/ProjectStatus.php'; ?></h4>
        <h4><b>Tag:</b> <?php include_once 'library/ProjectTag.php'; ?></h4>
        <h4><b>Opened on:</b> <?php include_once 'library/ProjectOpenedOn.php'; ?></h4>
        <h4><b>Manager:</b> <?php include_once 'library/ProjectManager.php'; ?></h4>
    </div>

    <hr />

    <!-- TASKS /-->
    <div id="tasks">
        <h2>Project Tasks</h2>
        <table class="table">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Status</th>
                <th>Manager</th>
            </tr>
            <?php include_once 'library/Tasks.php'; ?>
        </table>
    </div>

    <hr />

    <!-- MANAGE TASKS /-->
    <div id="manage-tasks">

        <h3>Add Task</h3>
        <form class="form-inline" action="library/AddProjectTask.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $pid; ?>">
            <div class="form-group">
                <label for="add-name">Name</label>
                <input type="text" class="form-control" id="add-name" name="name">
            </div>
            <div class="form-group">
                <label for="add-manager">Manager</label>
                <input type="text" class="form-control" id="add-manager" name="manager">
            </div>
            <button type="submit" class="btn btn-primary">Add Task</button>
        </form>

        <h3>Change Task Status</h3>
        <form action="library/UpdateStatusProjectTask.php" class="form-inline" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $pid; ?>">
            <div class="form-group">
                <label for="ch-id">ID</label>
                <input type="text" class="form-control" id="ch-id" name="tid" placeholder="Task ID">
            </div>
            <div class="form-group">
                <label for="ch-sel">Status</label>
                <select class="form-control" id="ch-sel" name="status">
                    <option>Not Done</option>
                    <option>In Progress</option>
                    <option>Done</option>
                </select>
            </div>
            <button type="submit" class="btn btn-warning">Update Task</button>
        </form>

        <h3>Delete Task</h3>
        <form action="library/DeleteProjectTask.php" class="form-inline" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $pid; ?>">
            <div class="form-group">
                <label for="del-id">ID</label>
                <input type="text" class="form-control" id="del-id" name="tid">
            </div>
            <button type="submit" class="btn btn-danger">Delete Task</button>
        </form>
    </div>

    <hr />
    <!--<div id="project-discussion">
        <h2>Project Discussion</h2>
        <div class="panel panel-primary">
            <div class="panel-heading"><b>Chaka</b></div>
            <div class="panel-body">
                Started this project today
            </div>
        </div>
        <div class="panel panel-primary">
            <div class="panel-heading"><b>Legeis</b></div>
            <div class="panel-body">
                Ok, ill check it out
            </div>
        </div>
    </div>

    <hr />/-->

    <!-- FOOTER /-->
    <?php include_once 'library/inc/Footer.php'; ?>
</div>
</body>
</html>