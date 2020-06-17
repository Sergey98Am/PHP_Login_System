<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login System</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>
    <?php
         include_once 'header.php';
    ?>

    <section class="sign_up_section">
        <div class="container">
            <div class="row">
                <div class="col-12 login_section">
                    <h1>Sign Up</h1>
                    <form action="includes/sign_up_inc.php" method="POST">

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="first">Firstname</label>
                                <input type="text" class="form-control" id="first" name="first">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="last">Lastname</label>
                                <input type="text" class="form-control" id="last" name="last">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" id="email" name="email">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="uid">Username</label>
                                <input type="text" class="form-control" id="uid" name="uid">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="pwd">
                            </div>
                        </div>
                        <button class="btn btn-primary" name="submit">Sign Up</button>
                </form>
                </div>
                
            </div>
        </div>
        </div>
    </section>


    <?php
         include_once 'footer.php';
    ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
</body>

</html>