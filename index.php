<!DOCTYPE html>
<html lang="en">
<head>
    <title>Delete records from database using PHP - Selim Reza Swadhin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="../website/js/vendor/jquery-2.2.4.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="icon" href="..\website\img\coding-birds-online\coding-birds-online-favicon.png" type="image/x-icon">
    <!--==================CSS==================-->
    <link rel="stylesheet" href="../website/css/font-awesome.min.css">
    <link rel="stylesheet" href="../website/css/bootstrap.css">
    <link rel="stylesheet" href="../website/css/main.css">
    <!--==================CSS==================-->
    <style>
        #thead>tr>th{ color: white; }
    </style>
</head>
<body>
<div style="margin-top: 20px;padding-bottom: 20px;">
    <center>
        <img width="100" src="..\website\img\coding-birds-online\coding-birds-online-favicon.png"/>
        <h3>Delete records from database using PHP </h3>
    </center>
</div>
<div class="container">
    <table class="table">
        <thead id="thead" style="background-color: #26a2af">
        <tr>
            <th>Sr.No</th>
            <th>Name</th>
            <th>Email</th>
            <th>Contact</th>
            <th>Department</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <?php
        include "config.php";
        include_once "Common.php";
        $common = new Common();
        $records = $common->getAllRecords($connection);
        if ($records->num_rows>0){
            $sr = 1;
            while ($record = $records->fetch_object()) {
                $recordId = $record->id;
                $name = $record->name;
                $email = $record->email;
                $contact = $record->contact;
                $department = $record->department;?>
                <tr>
                    <th><?= $sr;?></th>
                    <th><?= $name;?></th>
                    <th><?= $email;?></th>
                    <th><?= $contact;?></th>
                    <th><?= $department;?></th>
                    <td><a href="delete-script.php?recordId=<?= $recordId?>" class="btn btn-danger btn-sm">Delete</a> </td>
                </tr>
                <?php
                $sr++;
            }
        }
        ?>
        </tbody>
    </table>
</div>
</body>
</html>
