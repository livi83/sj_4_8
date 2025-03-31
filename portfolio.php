<?php include('partials/header.php'); ?>

<main>
    <section class="banner">
        <div class="container text-white">
            <h1>Portfólio</h1>
        </div>
    </section>

    <section class="container">
        <!-- Filter na kategórie -->
        <div class="portfolio-filter">
            <button class="filter-btn" data-category="all">Všetko</button>
            <button class="filter-btn" data-category="ecommerce">E-commerce</button>
            <button class="filter-btn" data-category="blog">Blogy</button>
            <button class="filter-btn" data-category="presentation">Prezentačné stránky</button>
            <button class="filter-btn" data-category="webapp">Webové aplikácie</button>
        </div>

        <!-- Portfólio projekty -->
        <div class="portfolio-grid">
            <div class="portfolio-item" data-category="ecommerce">
                <div class="portfolio-img-container">
                    <img src="assets/img/portfolio/portfolio1.jpg" alt="Web stránka 1">
                </div>
                <p>Web stránka 1</p>
            </div>
            <div class="portfolio-item" data-category="blog">
                <div class="portfolio-img-container">
                    <img src="assets/img/portfolio/portfolio2.jpg" alt="Web stránka 2">
                </div>
                <p>Web stránka 2</p>
            </div>
            <div class="portfolio-item" data-category="presentation">
                <div class="portfolio-img-container">
                    <img src="assets/img/portfolio/portfolio3.jpg" alt="Web stránka 3">
                </div>
                <p>Web stránka 3</p>
            </div>
            <div class="portfolio-item" data-category="webapp">
                <div class="portfolio-img-container">
                    <img src="assets/img/portfolio/portfolio4.jpg" alt="Web stránka 4">
                </div>
                <p>Web stránka 4</p>
            </div>
            <div class="portfolio-item" data-category="ecommerce">
                <div class="portfolio-img-container">
                    <img src="assets/img/portfolio/portfolio5.jpg" alt="Web stránka 5">
                </div>
                <p>Web stránka 5</p>
            </div>
            <div class="portfolio-item" data-category="blog">
                <div class="portfolio-img-container">
                    <img src="assets/img/portfolio/portfolio6.jpg" alt="Web stránka 6">
                </div>
                <p>Web stránka 6</p>
            </div>
            <div class="portfolio-item" data-category="presentation">
                <div class="portfolio-img-container">
                    <img src="assets/img/portfolio/portfolio7.jpg" alt="Web stránka 7">
                </div>
                <p>Web stránka 7</p>
            </div>
            <div class="portfolio-item" data-category="webapp">
                <div class="portfolio-img-container">
                    <img src="assets/img/portfolio/portfolio8.jpg" alt="Web stránka 8">
                </div>
                <p>Web stránka 8</p>
            </div>
        </div>
    </section>
</main>
<?php include('partials/footer.php'); ?>
