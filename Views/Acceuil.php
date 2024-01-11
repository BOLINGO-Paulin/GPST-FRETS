<?php
    include('header.php');
?>

<main>
        <div class="page-header">
            <h1>Acceuil</h1>
            <small>Home</small>
        </div>
            
    <div class="page-content">
    
        <div class="analytics">

            <div class="card">
                <div class="card-head">
                    <h2>10</h2>
                    <a href="#" class="animated-link" onclick="loadPage('Views/ViewsAcceuil/Voyage.php', this)"> <span class="las la-eye"></span></a>
                </div>
                <div class="card-progress">
                    <small>Total voyage departs</small>
                    <div>
                    <span class="las la-arrow-circle-left"></span>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-head">
                    <h2>0</h2>
                    <a href="#" class="animated-link" onclick="loadPage('Views/ViewsAcceuil/Voyage.php', this)"><span class="las la-eye"></span></a>
                </div>
                <div class="card-progress">
                    <small>Total voyage arrivés</small>
                    <div>
                    <span class="las la-arrow-circle-right"></span>
                    </div>
                </div>
            </div>


            <div class="card">
                <div class="card-head">
                    <h2>0</h2>
                    <a href="#" class="animated-link" onclick="loadPage('Views/ViewsAcceuil/Colis.php', this)">
                        <span class="las la-eye" id="voyage-icon" ></span>
                    </a>
                </div>
                <div class="card-progress">
                    <small>Total colis</small>
                <div>
                    <span class="las la-truck"></span>
                </div>
                </div>
            </div>

            <div class="card">
                <div class="card-head">
                    <h2>0</h2>
                    <a href="#" class="animated-link" onclick="loadPage('Views/ViewsAcceuil/Colis.php', this)"><span class="las la-eye"></span></a>
                </div>
                <div class="card-progress">
                    <small>Total baggages</small>
                    <div>
                    <span class="las la-times-circle"></span>
                </div>
                </div>
            </div>

        </div>

        <!-- contenu -->

        <div class="record-header" id="main-content">

        </div>

        <!-- contenu -->

        <script>
            var pageName;
            function loadPage(page, element) {
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("main-content").innerHTML = this.responseText;
                        resetIconColors();
                        element.querySelector('.las').classList.add('clicked-icon');

                        pageName = page.split('/').pop();
                    }
                };
                xhttp.open("GET", page, true);
                xhttp.send();
            }

            function resetIconColors() {
                var icons = document.querySelectorAll('.las');
                icons.forEach(function (icon) {
                    icon.classList.remove('clicked-icon');
                });
            }

            document.addEventListener('DOMContentLoaded', function () {
                var links = document.querySelectorAll('.card-head a');
                var activePage = "<?php echo isset($_SESSION['active_page']) ? $_SESSION['active_page'] : ''; ?>";

                links.forEach(function (link) {
                    if (activePage === link.getAttribute('href')) {
                        link.querySelector('.las').classList.add('clicked-icon');
                    }

                    link.addEventListener('click', function (event) {
                        event.preventDefault();
                        var containerId = 'main-content'; // Change this to the appropriate container ID
                        var page = this.getAttribute('href');
                        loadPage(page, this);
                    });
                });
            });
        </script>

        <style>
            .card-head a:active .las {
                color: green; /* Changer la couleur en vert */
            }
        </style>

    </div>

</main>