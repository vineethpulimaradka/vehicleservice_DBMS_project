<?php
    session_start();
    require 'dbcon.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>service CRUD</title>
</head>
<body>
  
    <div class="container mt-4">

        <?php include('message1.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>service lists
                            <a href="servicecreate.php" class="btn btn-primary float-end">Add service</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    
                                    <th>service</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $query = "SELECT * FROM service_list";
                                    $query_run = mysqli_query($con, $query);
                                   if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $service)
                                        {
                                            ?>
                                            <tr>
                                                <td><?= $service['id']; ?></td>
                                                <td><?= $service['service']; ?></td>
                                                
                                                <td>
                                                    
                                                    <a href="serviceedit.php?id=<?= $service['id']; ?>" class="btn btn-success btn-sm">Edit</a>
                                                    <form action="code1.php" method="POST" class="d-inline">
                                                        <button type="submit" name="delete_service" value="<?=$service['id'];?>" class="btn btn-danger btn-sm">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        echo "<h5> No Record Found </h5>";
                                    }
                                ?>
                                
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>