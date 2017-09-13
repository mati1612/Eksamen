<?php require "head.php"; ?>

<!-- Main artikel område -->
    <main class="col-10">

        <div>
        <form action="insert.php" method="post" enctype="multipart/form-data" class="row">

            <label for="header">Artiklens overskrift her:</label>
            <input type="text" id="header" name="header" placeholder="Overskrift her..." class="col-12">

            <label for="imgPath">Billede:</label>
            <input type="file" id="imgPath" name="imgPath" placeholder="Billede navn..." class="col-12">

            <label for="imgAlt">Billedets alt text:</label>
            <input type="text" id="imgAlt" name="imgAlt" placeholder="Alt text her..." class="col-12">

            <label for="content">Brødteksten her:</label>
            <input type="text" id="content" name="content" placeholder="Skriv din artikel her..." class="col-12">

            <input type="submit" value="Indsæt" content="Indsæt">
        </form>
        </div>

        <div class="row" id="opaimg">
            <h4 class="col-12">INSPIRATION</h4>
            <hr class="col-12">
            <div class="col-6" id="herre">
                <h5>Herretøj</h5>
                <button type="button" class="btn btn-outline-dark">Læs mere</button>
            </div>
            <div class="col-6" id="dame">
                <h5>Dametøj</h5>
                <button type="button" class="btn btn-outline-dark">Læs mere</button>
            </div>
        </div>

        <div class="row">
        <?php require "getArticles.php"; ?>
        </div>
    </main>

<?php require "foot.php"; ?>