<!DOCTYPE html>
<html lang="pl" id="html">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Wojciech Mazur Photography</title>
    <?php include "../../infoForSites.php"; ?>
    <title><?php echo $titlePl; ?></title>
</head>
<body>
    <header>
        <h1>
            <span>Wojciech Mazur - Photography</span>
            <section class="two-options">
                <select name="language" onchange="window.location.href=this.value">
                    <option value="../../index.php" id="eng">Angielski</option>
                    <option value="../../pol/home/home.php" id="pol" selected="selected">Polski</option>
                </select>
                <section>
                    <i class="fa-solid fa-a" id="1st"></i>
                    <i class="fa-solid fa-a" id="2nd"></i>
                </section>
            </section>
        </h1>
        <section class="burger">
            <img src="../../assets/BurgerWhite.svg" alt="Menu" id="burger">
        </section>
        <nav id="nav-ul">
            <ul>
                <a href="../home/home.php">
                    <li><?php echo "$stronaGlowna"; ?></li>
                </a>
                <a href="../astro/astro.php">
                    <li><?php echo "$astro"; ?></li>
                </a>
                <a href="../przyroda/przyroda.php">
                    <li><?php echo "$przyroda"; ?></li>
                </a>
                <a href="../sport/sport.php">
                    <li><?php echo "$sport"; ?></li>
                </a>
                <a href="../wypos/wypos.php">
                    <li><?php echo "$wyposazenie"; ?></li>
                </a>
            </ul>
        </nav>
    </header>
    <main>
        <h1 class="subject">Trzy Korony</h1>
        <h2 class="subject-date">01.06.2023</h2>
        <section class="subpages-gallery">
            <img src="../../assets/01.06.2023 Trzy korony/1.jpg" alt="Trzy Korony 1">
            <div class="images-container">
                <a href="3.php"><img src="../../assets/01.06.2023 Trzy korony/2.jpg" alt="Trzy Korony 2"></a>
                <a href="4.php"><img src="../../assets/01.06.2023 Trzy korony/3.jpg" alt="Trzy Korony 3"></a>
                <a href="1.php"><img src="../../assets/01.06.2023 Trzy korony/Dobre (12 of 12).jpg" alt="Panorama Trzech Koron"></a>
            </div>
        </section>
    </main>
    <footer>
        <h1>Moje Media Społecznościowe</h1>
        <section>
            <ul>
                <a href="<?php echo "$igHref"; ?>">
                    <li>Instagram</li>
                </a>
                <a href="<?php echo "$fbHref" ?>">
                    <li>Facebook</li>
                </a>
            </ul>
        </section>
    </footer>
    <script src="../../script2.js"></script>
</body>
</html>