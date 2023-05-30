<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Information</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body class="bg-success p-2 text-dark bg-opacity-25">
    <div class="container">
        <table class="table table-responsive">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Mobile</th>
                <th scope="col">Address</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <?php foreach ($employeeinfo as $info) : ?>
                    <tr>
                        <th><?php echo $info->id ?></th>
                        <td><?php echo $info->name; ?></td>
                        <td><?php echo $info->email; ?></td>
                        <td><?php echo $info->mobile; ?></td>
                        <td><?php echo $info->address; ?></td>
                        <td>
                            <div scope="col">
                                <td><a href="<?php echo base_url('Backend/EmployeeController/edit_employee/'.$info->id); ?>">Edit</a></td>
                                <!-- <td><a class="link-danger" href="<?php echo base_url('delete/'.$info->id); ?>">Delete</a></td> -->
                                <td>
                                    <button type="button" class="btn btn-danger btn-sm confirm-delete" value="<?= $info->id ?>">Delete</button>
                                </td>
                            </div>
                        </td> 
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</body>
</html>