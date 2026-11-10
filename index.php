<?php
require_once __DIR__ . '/header.php';
require_once __DIR__ . '/data.php';
?>

<body>
    <header>
        <nav>
            <a href="index.html">Spår</a>
            <div>
                <a href="#">Sv/En</a>
                <button>Join</button>
                <button>-</button>
            </div>
        </nav>
    </header>
    <div class="heroContainer">
        <video autoplay loop muted>
            <source src="image_video\cube_Video.mp4" type="video/mp4" />
        </video>
        <h1>NEW ARRIVALS</h1>
        <button>See more here</button>
    </div>
    <div class="productCards">
        <?php foreach ($productCards as $card) : ?>
            <div class="card">
                <img href="<?php echo $card['imageUrl'] ?>" alt="A <?php echo $card['name'] ?>" />
                <h3><?php echo $card['name'] ?></h3>
            </div>
        <?php endforeach; ?>
    </div>
    <div class="mailPanel">
        <form action="" method="post">
            <label for="email">Email</label>
            <input
                type="email"
                name="email"
                id="email"
                placeholder="example@mail.se" />
            <button type="submit">submit</button>
        </form>
    </div>
    <footer>
        <div>
            <p>Kontakt</p>
            <div>
                <a href="mailto: ad28309@skola.goteborg.se">Mejl</a>
                <a href="tel: +46760384435">Telefon</a>
            </div>
        </div>
        <div>
            <p>Om Spår</p>
            <div>
                <a href="#">Om spår</a>
                <a href="#">Våra butiker</a>
            </div>
        </div>
    </footer>
</body>

<?php
require_once __DIR__ . '/footer.php';
?>