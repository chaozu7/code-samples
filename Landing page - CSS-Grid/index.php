<?php include header.php ?>
    <main>
        <section class="about-us" id="section__about-us">
            <div class="section__heading">
                <h2 class="heading-secondary">
                    O nas
                </h2>
            </div>
            <div class="about-us__description">
                <div class="about-us__description-text-box">
                    <p class="about-us__description-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque auctor ut nisi vitae tincidunt. Pellentesque tempor rhoncus magna ornare consectetur. Fusce tempus ullamcorper elementum. In hac habitasse platea dictumst. Vestibulum
                        sed ex pulvinar mi ultrices consectetur. Suspendisse laoreet ultricies justo, eu lacinia justo aliquet fermentum. Suspendisse malesuada ut sapien vitae scelerisque. Maecenas quis tempor libero. Proin tincidunt, massa at varius
                        blandit, sem neque pharetra dui, ut pharetra arcu felis a nisl. Nulla posuere faucibus interdum. Nunc mi lorem, ullamcorper quis risus sed, molestie scelerisque dolor. Ut massa orci, volutpat in erat ut, luctus sagittis nisl. Etiam
                        feugiat ultrices efficitur. Mauris justo urna, finibus vel sodales sit amet, finibus vitae lacus. Nunc quis mollis dui. Fusce varius sollicitudin sapien, eget fringilla purus rutrum nec.
                    </p>
                </div>
                <div class="about-us__description-photo-box">
                    <img class="about-us__description-photo" src="" title="" alt="">
                </div>
            </div>
        </section>

        <section class="offer" id="section__offer">
            <div class="section__heading">
                <h2 class="heading-secondary">
                    Oferta
                </h2>
            </div>
            <div class="offer__boxes" id="offer__boxes">
                <div class="offer__box offer__box--1">
                    <div class="offer__box-side offer__box-side--front offer__box-side--front-1">
                        <div class="offer__box-picture offer__box-picture--1">
                            &nbsp;
                        </div>
                        <h4 class="offer__box-heading offer__box-heading--1">
                            Basic
                        </h4>
                        <div class="offer__box-list">
                            <ul>
                                <li>Lorem ipsum</li>
                                <li>Lorem ipsum</li>
                                <li>Lorem ipsum</li>
                                <li>Lorem ipsum</li>
                                <li>Lorem ipsum</li>
                            </ul>
                        </div>
                    </div>
                    <div class="offer__box-side offer__box-side--back offer__box-side--back-1">
                        <div class="offer__box-call-to-action">
                            <div class="offer__box-price">
                                <p class="offer__box-price-from">
                                    Cena od
                                </p>
                                <p class="offer__box-price-value">
                                    123 zł
                                </p>
                            </div>
                            <a href="#popup" class="btn btn--booking">Zamów teraz!</a>

                        </div>
                    </div>
                </div>
                <div class="offer__box offer__box--2 ">
                    <div class="offer__box-side offer__box-side--front offer__box-side--front-2">
                        <div class="offer__box-picture offer__box-picture--2">
                            &nbsp;
                        </div>
                        <h4 class="offer__box-heading offer__box-heading--2">
                            Wordpress
                        </h4>
                        <div class="offer__box-list">
                            <ul>
                                <li>Lorem ipsum</li>
                                <li>Lorem ipsum</li>
                                <li>Lorem ipsum</li>
                                <li>Lorem ipsum</li>
                                <li>Lorem ipsum</li>
                            </ul>
                        </div>
                    </div>
                    <div class="offer__box-side offer__box-side--back offer__box-side--back-2">
                        <div class="offer__box-call-to-action">
                            <div class="offer__box-price">
                                <p class="offer__box-price-from">
                                    Cena od
                                </p>
                                <p class="offer__box-price-value">
                                    456 zł
                                </p>
                            </div>
                            <a href="#popup" class="btn btn--booking">Zamów teraz!</a>

                        </div>
                    </div>
                </div>
                <div class="offer__box offer__box--3 ">
                    <div class="offer__box-side offer__box-side--front offer__box-side--front-3">
                        <div class="offer__box-picture offer__box-picture--3">
                            &nbsp;
                        </div>
                        <h4 class="offer__box-heading offer__box-heading--3">
                            E-commerce
                        </h4>
                        <div class="offer__box-list">
                            <ul>
                                <li>Lorem ipsum</li>
                                <li>Lorem ipsum</li>
                                <li>Lorem ipsum</li>
                                <li>Lorem ipsum</li>
                                <li>Lorem ipsum</li>
                            </ul>
                        </div>
                    </div>
                    <div class="offer__box-side offer__box-side--back offer__box-side--back-3">
                        <div class="offer__box-call-to-action">
                            <div class="offer__box-price">
                                <p class="offer__box-price-from">
                                    Cena od
                                </p>
                                <p class="offer__box-price-value">
                                    789 zł
                                </p>
                            </div>
                            <a href="#popup" class="btn btn--booking">Zamów teraz!</a>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="contact_us" id="section__contact_us">
            <div class="section__heading">
                <h2 class="heading-secondary">
                    Skontaktuj się
                </h2>
            </div>
            <div class="contact_us-box">
                <div class="contact_us-box__form">
                    <form method="post" action="mailer.php" class="form" id="form">
                        <div class="form__inputs">
                            <input type="text" name="name" class="form__input" placeholder="Imię" required>
                            <label for="name" class="form__label" >Imię</label>
                        </div>
                        <div class="form__inputs">
                            <input type="text" class="form__input" placeholder="Nazwisko"  name="surname" required>
                            <label for="surname" class="form__label">Nazwisko</label>
                        </div>
                        <div class="form__inputs">
                            <input type="email" class="form__input" placeholder="E-mail"  name="email" required>
                            <label for="email" class="form__label" >Adres e-mail</label>
                        </div>
                        <div class="form__inputs">
                            <textarea class="form__input" placeholder="Twoja wiadomość..." id="wiadomosc" name="message" required></textarea>
                            <label for="wiadomosc" class="form__label" >Twoja wiadomość</label>
                        </div>
                        <div class="form__messages">
                     <?php   
                           if($_GET['success'] == 1){
                            echo "<p class=\"form__messages--success\">Twoja wiadomość została wysłana. </p>";
                           }  
                           if($_GET['success'] == -1){
                            echo "<p class=\"form__messages--error\">Coś poszło nie tak. </p>";
                           }
                           
                        ?>
                        </div> 
                        <div class="form__inputs">
                            <button class="btn btn--main" type="submit">Wyślij</button>
                        </div>
                    </form>
                </div>

            </div>
        </section>
        <!-- OUR TEAM-->
        <section class="our-team" id="section__out-team">
            <div class="section__heading">
                <h2 class="heading-secondary">
                    Nasza drużyna
                </h2>
            </div>
            <div class="our-team__workers">
                <div class="our-team__worker">
                    <div class="our-team__worker-image">
                        <div class="our-team__worker-image-layer">
                            <p class="our-team__worker-image-layer-text">
                                Polly
                            </p>
                        </div>
                        <img src="https://images.unsplash.com/photo-1463543354440-d5a5e8e62eac?dpr=1&auto=compress,format&fit=crop&w=767&h=508&q=80&cs=tinysrgb&crop=&bg=" alt="parrot">
                    </div>
                    <p class="our-team__worker-name">
                        Polly Parrot
                    </p>
                </div>
                <div class="our-team__worker">
                    <div class="our-team__worker-image">
                        <div class="our-team__worker-image-layer">
                            <p class="our-team__worker-image-layer-text">
                                Lindy
                            </p>
                        </div>
                        <img src="https://images.unsplash.com/photo-1485348220940-b7b3aa45fd94?dpr=1&auto=compress,format&fit=crop&w=376&h=251&q=80&cs=tinysrgb&crop=&bg=" alt="lion">
                    </div>
                    <p class="our-team__worker-name">
                        Lindy Lion
                    </p>
                </div>
                <div class="our-team__worker">
                    <div class="our-team__worker-image">
                        <div class="our-team__worker-image-layer">
                            <p class="our-team__worker-image-layer-text">
                                Mickey
                            </p>
                        </div>
                        <img src="https://images.unsplash.com/photo-1471421455671-b9e8a4114185?dpr=1&auto=compress,format&fit=crop&w=767&h=508&q=80&cs=tinysrgb&crop=&bg=" alt="monkey">
                    </div>
                    <p class="our-team__worker-name">
                        Mickey Monkey
                    </p>
                </div>
                <div class="our-team__worker">
                    <div class="our-team__worker-image">
                        <div class="our-team__worker-image-layer">
                            <p class="our-team__worker-image-layer-text">
                                Harry
                            </p>
                        </div>
                        <img src="https://images.unsplash.com/photo-1472771106340-70093ce35e45?dpr=1&auto=compress,format&fit=crop&w=767&h=511&q=80&cs=tinysrgb&crop=&bg=" alt="hippo">
                    </div>
                    <p class="our-team__worker-name">
                        Harry Hippo
                    </p>
                </div>
            </div>

        </section>

    </main>

  <?php include footer.php ?>
    <div class="popup" id="popup">
        <div class="popup__content">
            <div class="popup__left">
                <img src="img/woocommers.jpg" alt="offer_photo" class="popup__picture">
                <img src="img/wordpress_offer.jpg" alt="offer_photo" class="popup__picture">
            </div>
            <div class="popup__right">
                <a href="#section__offer" class="popup__close">&times;</a>
                <h2 class="heading-secondary">Zamów usługę teraz</h2>
                <h3 class="heading-tertiary"> Lorem &ndash; lorem lorem</h3>
                <p class="popup__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque auctor ut nisi vitae tincidunt. Pellentesque tempor rhoncus magna ornare consectetur. Fusce tempus ullamcorper elementum. In hac habitasse platea dictumst. Vestibulum
                    sed ex pulvinar mi ultrices consectetur. Suspendisse laoreet ultricies justo, eu lacinia justo aliquet fermentum. Suspendisse malesuada ut sapien vitae scelerisque. Maecenas quis tempor libero. Proin tincidunt, massa at varius blandit,
                    sem neque pharetra dui, ut pharetra arcu felis a nisl. Nulla posuere faucibus interdum. Nunc mi lorem, ullamcorper quis risus sed, molestie scelerisque dolor. Ut massa orci, volutpat in erat ut, luctus sagittis nisl. Etiam feugiat
                    ultrices efficitur. Mauris justo urna, finibus vel sodales sit amet, finibus vitae lacus. Nunc quis mollis dui. Fusce varius sollicitudin sapien, eget fringilla purus rutrum nec.
                </p>
                <a href="#section__contact_us" class="btn btn--booking">Zamów teraz</a>
            </div>
        </div>
    </div>
    <script src="js/controls.js"></script>
    
</body>

</html>