<?php
    session_start();
?>
<header>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
        <a class="navbar-brand" href="#">Login System</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
            </ul>
            <?php
                       if(isset($_SESSION['u_id'])){
                           echo '<form class="form-inline my-2 my-lg-0" action="includes/logout.php" method="POST">
                                <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="submit">Sign Out</button>
                           </form>';
                       }else{
                            echo '<form class="form-inline my-2 my-lg-0" action="includes/login.php" method="POST">
                                    <input name="uid" class="form-control mr-sm-2 my-2" type="text" placeholder="Username/email">
                                    <input name="pwd" class="form-control mr-sm-2 my-2" type="password" placeholder="Password">
                                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="submit">Sign In</button>
                            </form>';
                       }
                    ?>

            <a class="btn btn-outline-info ml-2 " href="sign_up.php">Sign Up</a>
        </div>
    </nav>
</header>