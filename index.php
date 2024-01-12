<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Modern Admin Dashboard</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
	    <!----css3---->
        <link rel="stylesheet" href="css/custom.css">
		
		
		<!--google fonts -->
	    <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
	
	
	   <!--google material icon-->
      <link href="https://fonts.googleapis.com/css2?family=Material+Icons"rel="stylesheet">
</head>

<body onload="loadPage('Views/Acceuil.php', document.querySelector('.animated-link:first-child'))">

    <input type="checkbox" id="menu-toggle">

    <div class="sidebar">
        <div class="side-header">
            <h3>Utilisateur<span> Connecté</span></h3>
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
                        <a href="#" class="animated-link" onclick="loadPage('Views/Acceuil.php', this)">
                            <span class="las la-home"></span>
                            <small>Acceuil</small>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="animated-link" onclick="loadPage('Views/Depart.php', this)">
                            <span class="las la-arrow-circle-left"></span>
                            <small>Depart</small>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="animated-link" onclick="loadPage('Views/Arriver.php', this)">
                            <span class="las la-arrow-circle-right"></span>
                            <small>Arriver</small>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="animated-link" onclick="loadPage('Views/Expedier.php', this)">
                            <span class="las la-truck"></span>
                            <small>Expedier</small>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="animated-link" onclick="loadPage('Views/Retirer.php', this)">
                            <span class="las la-times-circle"></span>
                            <small>Retirer</small>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="animated-link" onclick="loadPage('Views/Infos.php', this)">
                            <span class="las la-info"></span>
                            <small>Infos</small>
                        </a>
                    </li>
                    <!-- Ajoutez d'autres liens ici avec les appels de fonction loadPage appropriés -->
                </ul>
            </div>
        </div>
    </div>

    <!-- le maincontent begin -->
    <div class="main-content" id="main-content">
    </div>
    <!-- le maincontent end-->

    <script>
        function loadPage(page, element) {
            var links = document.querySelectorAll('.animated-link');
            links.forEach(link => link.classList.remove('active'));
            
            element.classList.add('active');

            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("main-content").innerHTML = this.responseText;
                }
            };
            xhttp.open("GET", page, true);
            xhttp.send();
        }
    </script>
</body>
</html>
