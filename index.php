<?php
require_once __DIR__ . '/header.php';
require_once __DIR__ . '/data.php';
?>

<body>
    <header>
        <nav>
            <a href="index.html">
                <img src="image_video\logo_hel.svg" alt="spar, english trails" />
            </a>
            <div>
                <div>
                    <a href="#">Sv</a>
                    <span>/</span>
                    <a href="#">En</a>
                </div>
                <div class="navIcons">
                    <a href="#">
                        <img src="image_video\searchIcon.svg" alt="Search icom">
                    </a>
                    <a href="#">
                        <img src="image_video\Menu button.svg" alt="Hamburger menu ikon">
                    </a>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div class="heroContainer">
            <video autoplay loop muted>
                <source src="image_video\cube_Video.mp4" type="video/mp4" />
            </video>
            <div class="heroImageText">
                <div>
                    <div class="heroText">
                        <h1>NEW ARRIVALS</h1>
                        <p>EXPLORE OUR NEW EXCLUSIVE BLOOM DROP</p>
                    </div>
                </div>
                <div class="heroImageButton">
                    <a href="#">Read more about Bloom tech</a>
                </div>
            </div>
            <div class="heroBannerButton">
                <a href=#mailForm>Become a part of our community</a>
            </div>
        </div>

        <div class="productBanner">
            <div>
                <h2>Explore our bloom technology</h2>
            </div>
            <video autoplay loop muted>
                <source src="image_video/cube_Video.mp4" tyoe="video/mp4">
            </video>
            <div>
                <p>READ ABOUT OUR BLOOM TECH FROM SWEDISH RIVER ALGAE EXPLORE</p>
            </div>
            <div>
                <div class="buttonContainer">
                    <a href="#">Explore our process</a>
                </div>
            </div>
        </div>

        <div class="smallProductSection">
            <div>
                <h2>New arrivals</h2>
            </div>
            <div class="productCards">
                <?php foreach ($productCards as $card) : ?>
                    <div class="card">
                        <img src="<?php echo $card['imageUrl'] ?>" alt="A <?php echo $card['name'] ?>" />
                        <h3><?php echo $card['name'] ?></h3>
                        <p>899,00KR</p>
                        <div class="colorButtons">
                            <button></button>
                            <button></button>
                            <button></button>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="productFlexButton">
                <div class="buttonContainer">
                    <a href="#">Explore the whole collection</a>
                </div>
            </div>
        </div>

        <div class="productBanner">
            <div>
                <h2>Explore our bloom technology</h2>
            </div>
            <video autoplay loop muted>
                <source src="image_video/cube_Video.mp4" tyoe="video/mp4">
            </video>
            <div>
                <div class="secondProductBannerDescription">
                    <p>READ ABOUT OUR BLOOM TECH FROM SWEDISH RIVER ALGAE EXPLORE 3D SHOE</p>
                    <div class="colorButtons">
                        <button></button>
                        <button></button>
                        <button></button>
                    </div>
                </div>
            </div>
            <div>
                <div>
                    <form class="mailForm" action="index.php" method="post" enctype="multipart/form-data">
                        <label for="mail">E-postadress</label>
                        <input type="mail" name="mail" id="mail" placeholder="example@email.com" required>
                        <button type="submit">Save your personal style</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="productBanner finalProductBanner">
            <div>
                <h2>Explore our bloom technology</h2>
            </div>
            <video autoplay loop muted>
                <source src="image_video/cube_Video.mp4" tyoe="video/mp4">
            </video>
            <div class="accordions">
                <div>
                    <h3>Steg 1: Rubrik</h3>
                    <button>
                        <img src="image_video\plusIcon.svg" alt="Stage one read more" />
                    </button>
                </div>
                <div>
                    <h3>Steg 2: Rubrik</h3>
                    <button>
                        <img src="image_video\plusIcon.svg" alt="Stage two read more" />
                    </button>
                </div>
                <div>
                    <h3>Steg 3: Rubrik</h3>
                    <button>
                        <img src="image_video\plusIcon.svg" alt="Stage three read more" />
                    </button>
                </div>
                <div>
                    <h3>Steg 4: Rubrik</h3>
                    <button>
                        <img src="image_video\plusIcon.svg" alt="Stage four read more" />
                    </button>
                </div>
            </div>
            <div>
                <div class="buttonContainer">
                    <a href="#">Button</a>
                </div>
            </div>
        </div>

        <div class="socialMediaPictures">
            <h2>Sociala medier</h2>'
            <div class="socialMediaCarousel">
                <img src="image_video/placeHolder.png" />
                <img src="image_video/placeHolder.png" />
                <img src="image_video/placeHolder.png" />
                <img src="image_video/placeHolder.png" />
            </div>'
        </div>
    </main>

    <footer>
        <div class="mailPanel" id="mailFormFooter">
            <h2>Ta del av vårat community</h2>
            <form class="mailForm" action="" method="post">
                <label for="email">E-postadress</label>
                <input
                    type="email"
                    name="email"
                    id="email"
                    placeholder="example@meail.com" required />
                <button type="submit">Klicka för att gå med!</button>
            </form>
        </div>
        <div class="bottomFooterSection">
            <div class="firstFooterColumn">
                <h4>Kontakt</h4>
                <ul>
                    <div>
                        <p>ADRESS</p>
                        <li>SPÅRGATAN 12, 12345 SPÅR</li>
                    </div>
                    <div>
                        <p>E-POSTADRESS</p>
                        <li>SPÅR@SPÅR.CSE</li>
                    </div>
                    <div>
                        <p>TELEFON</p>
                        <li>123456789</li>
                    </div>
                </ul>
            </div>
            <div class="footerColumn">
                <h4>Info</h4>
                <div class="linkList">
                    <a href="#">REFOUND POLICY</a>
                    <a href="#">SHIPPING</a>
                    <a href="#">FAQ</a>
                </div>
            </div>
            <div class="footerColumn">
                <h4>SOCIALA MEDIER</h4>
                <div class="linkList">
                    <a href="#">INSTAGRAM</a>
                    <a href="#">TIKTOK</a>
                    <a href="#">X</a>
                </div>
            </div>
        </div>
    </footer>
</body>

<?php
require_once __DIR__ . '/footer.php';
?>