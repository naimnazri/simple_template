<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Simple PHP CRUD</title>
</head>
<body>
    <div class="container">

        <div class="row mt-3">
            <div class="col text-center">
                <h1>Welcome to Simple PHP CRUD</h1>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col">
            <button type="button" class="btn btn-success float-right my-2" data-toggle="modal" data-target="#modalAdd">Add</button>
            <a href="../index.php" class="btn btn-primary" >HOME</a>
            <table class="table table-striped">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $i = 1;
                    $getContact = "SELECT * FROM contact";
                    $queryContact = mysqli_query($conn, $getContact);
                    while($rowContact = mysqli_fetch_array($queryContact)){
                        $fname = $rowContact['name'];
                        $phone = $rowContact['phone_no'];
                    
                ?>
                    <tr>
                        <th scope="row"><?= $i ?></th>
                        <td><?= $fname ?></td>
                        <td><?= $phone ?></td>
                        <td>
                            <button class="btn btn-warning" >Update</button>
                            <button class="btn btn-danger" >Delete</button>
                        </td>
                    </tr>
                <?php $i++; }  ?>
                </tbody>
                </table>
            </div>
        </div>

    </div>


    <!-- Modal Add -->
    <div class="modal fade" id="modalAdd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form action="add.php" method="post">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Contact</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="fullname">Name</label>
                            <input type="text" class="form-control" name="fullname" id="fullname" aria-describedby="emailHelp" placeholder="Enter Fullname">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Phone Number</label>
                            <input type="text" class="form-control" name="phoneNo" id="phone" placeholder="Enter Phone Number">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-success" name="submit">Add</button>
                    </div>
                </div>
            </form>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>