<?php
require_once __DIR__ . '/header.php';
require_once __DIR__ . '/data.php';
?>

<body>
    <header>
        <nav>
            <a href="#">
                <img src="image_video\logo_hel.svg" alt="spar, english trails" />
            </a>
            <div>
                <div>
                    <a href="#">Sv</a>
                    <span>/</span>
                    <a href="#">En</a>
                </div>
                <div class="navIcons">
                    <button>
                        <img src="image_video\searchIcon.svg" alt="Search icom">
                    </button>
                    <button id="hamburgerMenu">
                        <img src="image_video\Menu button.svg" alt="två studenter som ligger och sitter på en sten mitt i vattnet. grön vattenflaska finns också på stenen">
                    </button>
                </div>
            </div>
        </nav>
        <div class="openedMenu inActive">
            <div class="activatedNavMenu">
                <h2>New arrivals</h2>
                <h2>Bloom collection</h2>
                <h2>Bloom technology</h2>
                <h2>Sustainability</h2>
                <h2>Community</h2>
            </div>
        </div>
    </header>
    <main>
        <div class="heroContainer">
            <img src="image_video\Bärbar arbetsplats på klippan i ån 1.png" alt="Hero picture">
            <!--
            <video autoplay loop muted>
                <source src="image_video\cube_Video.mp4" type="video/mp4" />
            </video> -->
            <div class="heroImageText">
                <div>
                    <div class="heroText">
                        <h1>New Drops</h1>
                        <p>THE STUFF YOU CARRY FROM LECTURES TO THE LAKE. STARTING WITH SHOES MADE FROM ALGAE.</p>
                    </div>
                    <div>
                        <div class="heroImageButton">
                            <a href="#collection">See the collection</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="heroBannerButton">
                <a href=#mailFormFooter>Get early access to the next drop</a>
            </div>
        </div>

        <div class="productBanner firstBanner">
            <div>
                <h2>FROM ALGAE TO SHOE</h2>
            </div>
            <video autoplay loop muted>
                <source src="image_video\shoe_turntable_1630x1304.webm" tyoe="video/webm">
            </video>
            <div class="productBannerDescription">
                <div>
                    <p>OUR SHOES ARE MADE FROM ALGAE WE CLEAR OUT OF OVERGROWN SWEDISH LAKES. WITH SOFTER STEPS AND CLEANER WATER.</p>
                </div>
                <div>
                    <div class="buttonContainer">
                        <a href="#process">See how it's made</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="smallProductSection" id="collection">
            <div>
                <h2>The first drop</h2>
            </div>
            <div class="productCards">
                <?php foreach ($productCards as $card) : ?>
                    <div class="card">
                        <div>
                            <img src="<?php echo $card['imageUrl'] ?>" alt="A <?php echo $card['alt'] ?>" />
                        </div>
                        <div>
                            <h3><?php echo $card['name'] ?></h3>
                            <p><?php echo $card['price'] ?></p>
                        </div>
                        <?php if ($card['hasVariant']): ?>
                            <div class="colorButtons">
                                <button class="<?php if ($card['defaultColorActive'] === 'black') {
                                                    echo "colorButtonActive";
                                                } ?>"></button>
                                <button class="<?php if ($card['defaultColorActive'] === 'brown') {
                                                    echo "colorButtonActive";
                                                } ?>"></button>
                                <button class="<?php if ($card['defaultColorActive'] === 'yellow') {
                                                    echo "colorButtonActive";
                                                } ?>"></button>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="productFlexButton">
                <div class="buttonContainer">
                    <a>See the whole collection</a>
                </div>
            </div>
        </div>

        <div class="productBanner secondBanner">
            <div>
                <h2>MAKE IT YOUR OWN</h2>
            </div>
            <!--<video autoplay loop muted>
                <source src="image_video/cube_Video.mp4" tyoe="video/mp4">
            </video> -->
            <img src="image_video\Lifestyle_brown 1.png" alt="Lifestyle of keychain">
            <div>
                <div class="secondProductBannerDescription">
                    <p>PICK A COLOUR FOR YOUR BLOOM KEYRING AND SEE IT IN 3D.</p>
                    <div class="colorButtons">
                        <button class="blackColorButton"></button>
                        <button class="brownColorButton colorButtonActive"></button>
                        <button class="yellowColorButton"></button>
                    </div>
                </div>
                <div>
                    <div>
                        <form class="mailForm" action="index.php" method="post" enctype="multipart/form-data">
                            <label for="mail">Email address</label>
                            <input type="mail" name="mail" id="mail" placeholder="example@email.com" required>
                            <button type="submit">Save my style</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="productBanner finalProductBanner" id="process">
            <div>
                <h2>How it works</h2>
            </div>
            <video autoplay loop muted>
                <source src="image_video\spar_bloom_desktop_820x656.mp4" tyoe="video/mp4">
            </video>
            <div>
                <div class="accordions">
                    <div class="inActive">
                        <div>
                            <h3>Step 1: We clear the lakes</h3>
                            <button>
                                <img src="image_video\plusIcon.svg" alt="Stage one read more" />
                            </button>
                        </div>
                        <div>
                            <div>
                                <p>FERTILISER FROM FARMS RUNS INTO SWEDISH LAKES AND THE ALGAE TAKES OVER, USING UP THE OXYGEN FISH NEED. WE COLLECT IT BEFORE IT CHOKES THE LAKE.</p>
                            </div>
                        </div>
                    </div>
                    <div class="inActive">
                        <div>
                            <h3>Step 2: Algae becomes foam</h3>
                            <button>
                                <img src="image_video\plusIcon.svg" alt="Stage two read more" />
                            </button>
                        </div>
                        <div>
                            <div>
                                <p>WE DRY THE ALGAE INTO A POWDER AND MIX IT INTO A SOFT, BOUNCY FOAM. IT REPLACES THE OIL-BASED PLASTIC USUALLY FOUND IN SHOES.</p>
                            </div>
                        </div>
                    </div>
                    <div class="inActive">
                        <div>
                            <h3>Step 3: We print your shoe</h3>
                            <button>
                                <img src="image_video\plusIcon.svg" alt="Stage three read more" />
                            </button>
                        </div>
                        <div>
                            <div>
                                <p>EVERY SHOE IS 3D PRINTED WHERE YOU ORDER, SO WE ONLY MAKE PAIRS PEOPLE ACTUALLY BUY.</p>
                            </div>
                        </div>
                    </div>
                    <div class="inActive">
                        <div>
                            <h3>Step 4: Send them back</h3>
                            <button>
                                <img src="image_video\plusIcon.svg" alt="Stage four read more" />
                            </button>
                        </div>
                        <div>
                            <div>
                                <p>WORN THEM OUT? SEND THEM BACK TO US. WE BREAK THEM DOWN AND USE THE ALGAE AGAIN IN NEW PAIR.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="buttonContainer">
                        <a>Read the full story</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="socialMediaPictures">
            <h2>Follow along @spår</h2>'
            <div class="socialMediaCarousel">
                <img src="image_video\Post 1 – study spot 1.png" alt="Spar bottle and package with logo on it" />
                <img src="image_video\Post 2 – deadline 1.png" />
                <img src="image_video\Post 3 – the first drop 1.png" />
                <img src="image_video\Post 4 – carve your path 1.png" />
            </div>
            <div>
                <div>
                    <button>Go to insta</button>
                </div>
            </div>
        </div>
    </main>

    <footer>
        <div class="mailPanel" id="mailFormFooter">
            <div>
                <h2>Want the next drop first?</h2>
                <form class="mailForm" action="" method="post">
                    <label for="email">Email address</label>
                    <input
                        type="email"
                        name="email"
                        id="email"
                        placeholder="example@mail.com" required />
                    <button type="submit">Sign me up</button>
                </form>
            </div>
            <div>
                <img src="image_video/logo_hel.svg" alt="Spår logo, english trails logo" />
            </div>
        </div>
        <div class="bottomFooterSection">
            <div class="firstFooterColumn">
                <h4>Contact</h4>
                <ul>
                    <div>
                        <p>ADRESS</p>
                        <li>SPÅRGATAN 12, 411 05 GOTHENBURG</li>
                    </div>
                    <div>
                        <p>E-POSTADRESS</p>
                        <li>info@SPAR.SE</li>
                    </div>
                    <div>
                        <p>TELEFON</p>
                        <li>+46 31 123 45 69</li>
                    </div>
                </ul>
            </div>
            <div class="footerColumn">
                <h4>Customer service</h4>
                <div class="linkList">
                    <a href="#">REFOUND POLICY</a>
                    <a href="#">SHIPPING</a>
                    <a href="#">FAQ</a>
                </div>
            </div>
            <div class="footerColumn">
                <h4>Follow us</h4>
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