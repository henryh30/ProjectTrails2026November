<?php
require_once __DIR__ . '/header.php';
require_once __DIR__ . '/data.php';
?>

<body>
    <header>
        <nav>
            <a href="index.html">Spår</a>
            <div>
                <div>
                    <a href="#">Sv</a>
                    <span>/</span>
                    <a href="#">En</a>
                </div>
                <a href="#">
                    <img src="image_video\search_icon.png" alt="Sök ikon">
                </a>
                <a href="#">
                    <img src="image_video\hamburger_icon.png" alt="Hamburgare ikon">
                </a>
            </div>
        </nav>
    </header>
    <main>

        <div class="heroContainer">
            <video autoplay loop muted>
                <source src="image_video\cube_Video.mp4" type="video/mp4" />
            </video>
            <div>
                <h1>NEW ARRIVALS</h1>
                <p>EXPLORE OUR NEW EXCLUSIVE BLOOM DROP</p>
                <button>Read more about Bloom tech</button>
            </div>
        </div>
        <div>
            <a href=#mailForm>Become a part of our community</a>
        </div>

        <div class="productBanner">
            <div>
                <h2>Explore our bloom technology</h2>
            </div>
            <div>
                <video autoplay loop muted>
                    <source src="image_video/cube_Video.mp4" tyoe="video/mp4">
                </video>
                <p>READ ABOUT OUR BLOOM TECH FROM SWEDISH RIVER ALGAE EXPLORE</p>
            </div>
            <div>
                <button>Explore our process</button>
            </div>
        </div>

        <div>
            <div>
                <h2>New arrivals</h2>
            </div>
            <div class="productCards">
                <?php foreach ($productCards as $card) : ?>
                    <div class="card">
                        <img src="<?php echo $card['imageUrl'] ?>" alt="A <?php echo $card['name'] ?>" />
                        <h3><?php echo $card['name'] ?></h3>
                        <p>899,00KR</p>
                    </div>
                <?php endforeach; ?>
            </div>
            <div>
                <button>Explore the whole collection</button>
            </div>
        </div>

        <div class="productBanner">
            <div>
                <h2>Explore our bloom technology</h2>
            </div>
            <div>
                <video autoplay loop muted>
                    <source src="image_video/cube_Video.mp4" tyoe="video/mp4">
                </video>
                <div>
                    <p>READ ABOUT OUR BLOOM TECH FROM SWEDISH RIVER ALGAE EXPLORE 3D SHOE</p>
                    <div>
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                </div>
            </div>
            <div>
                <button>Try our AI designtool</button>
            </div>
        </div>

        <div class="productBanner">
            <div>
                <h2>Explore our bloom technology</h2>
            </div>
            <div>
                <video autoplay loop muted>
                    <source src="image_video/cube_Video.mp4" tyoe="video/mp4">
                </video>
                <div>
                    <p>READ ABOUT OUR BLOOM TECH FROM SWEDISH RIVER ALGAE EXPLORE 3D SHOE</p>
                </div>
            </div>
            <div>
                <button>Button</button>
            </div>
        </div>
    </main>

    <footer>
        <div class="mailPanel">
            <h2>Ta del av vårat community</h2>
            <form action="" method="post">
                <label for="email">E-postadress</label>
                <input
                    type="email"
                    name="email"
                    id="email"
                    placeholder="example@meail.com" />
                <button type="submit">Klicka för att gå med!</button>
            </form>
        </div>
        <div>
            <h4>Kontakt</h4>
            <ul>
                <p>ADRESS</p>
                <li>SPÅRGATAN 12, 12345 SPÅR</li>
                <p>E-POSTADRESS</p>
                <li>SPÅR@SPÅR.CSE</li>
                <p>TELEFON</p>
                <li>123456789</li>
            </ul>
        </div>
        <div>
            <h4>Info</h4>
            <div>
                <a href="#">REFOUND POLICY</a>
                <a href="#">SHIPPING</a>
                <a href="#">FAQ</a>
            </div>
        </div>
        <div>
            <h4>SOCIALA MEDIER</h4>
            <div>
                <a href="#">INSTAGRAM</a>
                <a href="#">TIKTOK</a>
                <a href="#">X</a>
            </div>
        </div>
    </footer>
</body>

<?php
require_once __DIR__ . '/footer.php';
?>