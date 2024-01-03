<?php 
include('mesFonctions.php');
echo($_SESSION['appel']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <title>Modern Admin Dashboard</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
</head>
<body>
   <input type="checkbox" id="menu-toggle">
    <div class="sidebar">
        <div class="side-header">
            <h3>M<span>odern</span></h3>
        </div>
        
        <div class="side-content">
            <div class="profile">
                <div class="profile-img bg-img" style="background-image: url(img/3.jpeg)"></div>
                <h4>David Green</h4>
                <small>Art Director</small>
            </div>

            <div class="side-menu">
                <ul>
                    <li>
                       <a href="<?php maFonction1(); ?>" class="active">
                            <span class="las la-home"></span>
                            <small>Dashboard<?php echo('  ');echo($_SESSION['appel']); ?></small>
                        </a>
                    </li>
                    <li>
                       <a href="<?php maFonction1(); ?>">
                            <span class="las la-user-alt"></span>
                            <small>Profile <?php echo('  ');echo($_SESSION['appel']); ?> </small>
                        </a>
                    </li>
                    <li>
                       <a href="<?php maFonction1(); ?>">
                            <span class="las la-envelope"></span>
                            <small>Mailbox</small>
                        </a>
                    </li>
                    <li>
                       <a href="<?php maFonction4(); ?>">
                            <span class="las la-clipboard-list"></span>
                            <small>Projects</small>
                        </a>
                    </li>
                    <li>
                       <a href="<?php maFonction5(); ?>">
                            <span class="las la-shopping-cart"></span>
                            <small>Orders</small>
                        </a>
                    </li>
                    
                    <li>
                       <a href="<?php maFonction5(); ?>">
                            <span class="las la-tasks"></span>
                            <small>Tasks</small>
                        </a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </div>
    
    <!-- le maincontent begin -->
       
    <!-- le maincontent end-->

</body>
</html>