<footer>
            <link href="css/header-style.css" rel="stylesheet" type="text/css">

            <div class="site-footer">
                <div class="site-title">
                    <a href="index.php"><img alt="*" src="images/logo.jpg"></a>
                    <h1><a href="index.php">Guarding Dragons</a></h1>
                </div>
                <nav class="site-nav">
                    <ul>
                        <li><a href="index.php?page=contact">Contact</a></li>
                        <li>
                        </li>
                        <li>
                            <?php
                                
                                if(isset($_SESSION['sess_username'])){
                                //<li><a href="index2.php?page=gegevens_wijzigen">Gegevens Wijzigen</a></li>
                                echo '<a href="index.php?page=profiel_pagina">Mijn Profiel</a>';
                                }
                                ?>
                        </li>
                        <li><a href="index.php?page=bedrijven_pagina">Bedrijfs Profielen</a></li>
                    </ul>
                </nav>
            </div>
        </footer>