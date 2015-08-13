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

    <hr />

        <div id="open-projects">
            <h1 align="center">Open Projects</h1>

            <table class="table">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Tag</th>
                    <th>Date Opened</th>
                    <th>Manager</th>
                </tr>
                <?php include_once 'library/OpenProjects.php' ?>
            </table>
        </div>

    <hr />

    <div id="manage-project" align="center" id="pj-mg">
        <h2>Manage Project</h2>
        <form action="project.php" class="form-inline" method="get" enctype="multipart/form-data">
            <div class="form-group">
                <label for="id">Project ID</label>
                <input type="text" class="form-control" name="id" id="id" placeholder="Project ID">
            </div>
            <button type="submit" class="btn btn-primary">Select Project</button>
        </form>
    </div>

    <hr />

    <div id="add-project" align="center">
        <h2>Create Project</h2>
        <form action="library/CreateProject.php" class="form-inline" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="add-name">Name</label>
                <input type="text" class="form-control" name="name" id="add-name">
            </div>
            <div class="form-group">
                <label for="add-tag">Tag</label>
                <select class="form-control" id="add-tag" name="tag">
                    <option>Feature</option>
                    <option>Bug</option>
                    <option>Other</option>
                    <option>Player Data Merge</option>
                    <option>Plugin</option>
                    <option>VPS</option>
                    <option>Server</option>
                </select>
            </div>
            <div class="form-group">
                <label for="add-manager">Manager</label>
                <input type="text" class="form-control" name="manager" id="add-manager">
            </div>
            <button type="submit" class="btn btn-primary">Create Project</button>
        </form>
    </div>

    <hr />

    <div align="center" id="close-project">
        <h2>Close Project</h2>
        <form action="library/CloseProject.php" class="form-inline" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="close-id">ID</label>
                <input type="text" class="form-control" name="id" id="close-id">
            </div>
            <button type="submit" class="btn btn-danger">Close Project</button>
        </form>
    </div>

    <hr />

    <!-- FOOTER /-->
    <?php include_once 'library/inc/Footer.php'; ?>
</div>
</body>
</html>