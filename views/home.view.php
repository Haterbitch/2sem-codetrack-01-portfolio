<?php
/** @var \App\Template $this */
/** @var string|null $success */
/** @var array<string, array<string>> $errors */

$this->extend('layout');
?>

<?php $this->start('title', 'Welcome') ?>

<section class="hero section-padding">
    <div class="container">
        <h1>Hej mit navn er Nanna<span class="accent">Multimedia Designer Studerende</span></h1>
        <p class="tagline">Jeg brænder for design – fra idé til digital oplevelse.</p>
        <a href="/contact" class="button">Kontakt Mig</a>
    </div>
</section>

<div class="under">
<p>Under Construction</p>

</div>



<section class="intro section-padding">
    <div class="container">
        <div class="intro-content">
            <div class="intro-text">
                <h2 class="section-heading">Om Mig</h2>
                <p>Jeg er en kreativ og passioneret multimediedesigner, der elsker at udforske alt fra UX/UI og content creation til grafisk design og digital formidling. Min drivkraft ligger i at lære nyt og skabe engagerende visuelle oplevelser, der taler til både følelser og funktion.</p>

            </div>
            <div class="intro-image">
                <img src="images/projects/7.jpg" alt="Smilende Nanna" class="profile-image">
            </div>
        </div>
    </div>
</section>

<section class="quick-links section-padding">
    <div class="container">
        <h2 class="section-heading">Meget Mere!</h2>
        <div class="links-grid">
            <a href="/projects" class="link-card">
                <h3>Projekter</h3>
                <p>Se eksempler på tidligere projekter</p>
            </a>
            <a href="/about" class="link-card">
                <h3>Min Baggrund</h3>
                <p>Læs mere om min baggrund og tidligere jobs.</p>
            </a>
            <a href="/contact" class="link-card">
                <h3>Kontakt</h3>
                <p>Lad os snakke om dit projekt!</p>
            </a>
        </div>
    </div>
</section>
