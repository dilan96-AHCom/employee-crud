
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee View</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body class="bg-success p-2 text-dark bg-opacity-25">
    <div class="container">
        <h3 class="text-body-secondary">Register an employee here</h3><br>
        <section>
            <form action="<?php echo base_url('store');?>" method="POST">

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" id="exampleFormControlInput1" placeholder="enter your name here">
                    <small><?php echo form_error('name'); ?></small>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput2" class="form-label">Email address</label>
                    <input type="email" class="form-control" name="email" id="exampleFormControlInput2" placeholder="name@example.com">
                    <small><?php echo form_error('email'); ?></small>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput3" class="form-label">Mobile NO:</label>
                    <input type="text" class="form-control" name="mobile" id="exampleFormControlInput3" placeholder="enter your contact number">
                    <small><?php echo form_error('mobile'); ?></small>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea4" class="form-label">Address</label>
                    <textarea class="form-control" name="address" id="exampleFormControlTextarea4" rows="3" placeholder="enter your address"></textarea>
                    <small><?php echo form_error('address'); ?></small>
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary" type="submit">Submit form</button>
                </div>

            </form>
        </section>
    </div>
</body>
</html>