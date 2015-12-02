<?php include('header.php'); ?>
   
    <main class="main">
        <div class="container">
            <div class="banner">
                <div class="prev" id="prev" title="Anterior">
                    <div class="sprite-prev"></div>
                </div>
                <div class="slideshow" 
                     data-cycle-fx=fade
                     data-cycle-timeout=5000
                     data-cycle-prev="#prev"
                     data-cycle-next="#next"
                     >
                    <img src="img/banner1.jpg" alt="Banner 01">
                    <img src="http://placehold.it/980x500" alt="Banner 02">
                </div>
                <div class="next" id="next" title="Próximo">
                    <div class="sprite-next"></div>
                </div>
            </div>
            
            <section class="destaque">
                <h1 class="title">Produtos em destaque <div class="border"></div></h1>
                
                <ul class="list-produtos">
                    <li class="list-produtos--item">
                        <div class="product-image">
                            <a href="#"><img src="img/produto1.jpg" alt=""></a>
                        </div>
                        <div class="desc_grid">
                            <h3 class="product-name"><a href="#">Cheese Sushi</a></h3>
                            <span class="product-cat">produto orgânico</span>
                        </div>
                        <div class="price-box">R$ <span class="price">37,00</span></div>
                    </li>
                    <li class="list-produtos--item">
                        <div class="product-image">
                            <a href="#"><img src="img/produto2.jpg" alt=""></a>
                        </div>
                        <div class="desc_grid">
                            <h3 class="product-name"><a href="#">Bacon Sushi</a></h3>
                            <span class="product-cat">produto orgânico</span>
                        </div>
                        <div class="price-box">R$ <span class="price">37,00</span></div>
                    </li>
                    <li class="list-produtos--item">
                        <div class="product-image">
                            <a href="#"><img src="img/produto3.jpg" alt=""></a>
                        </div>
                        <div class="desc_grid">
                            <h3 class="product-name"><a href="#">Bacon Sushi</a></h3>
                            <span class="product-cat">produto orgânico</span>
                        </div>
                        <div class="price-box">R$ <span class="price">37,00</span></div>
                    </li>
                    <li class="list-produtos--item">
                        <div class="product-image">
                            <a href="#"><img src="img/produto1.jpg" alt=""></a>
                        </div>
                        <div class="desc_grid">
                            <h3 class="product-name"><a href="#">Cheese Sushi</a></h3>
                            <span class="product-cat">produto orgânico</span>
                        </div>
                        <div class="price-box">R$ <span class="price">37,00</span></div>
                    </li>
                    <li class="list-produtos--item">
                        <div class="product-image">
                            <a href="#"><img src="img/produto2.jpg" alt=""></a>
                        </div>
                        <div class="desc_grid">
                            <h3 class="product-name"><a href="#">Bacon Sushi</a></h3>
                            <span class="product-cat">produto orgânico</span>
                        </div>
                        <div class="price-box">R$ <span class="price">37,00</span></div>
                    </li>
                    <li class="list-produtos--item">
                        <div class="product-image">
                            <a href="#"><img src="img/produto3.jpg" alt=""></a>
                        </div>
                        <div class="desc_grid">
                            <h3 class="product-name"><a href="#">Bacon Sushi</a></h3>
                            <span class="product-cat">produto orgânico</span>
                        </div>
                        <div class="price-box">R$ <span class="price">37,00</span></div>
                    </li>
                </ul>
                
            </section>
        </div>
    </main>

<?php include('footer.php'); ?>

</body>
</html>
