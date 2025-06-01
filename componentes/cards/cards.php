<?php 
    function cardsTitle($cardTitle) {
?>

<section id="cards">
    <div class="card">
        <div class="textCard">
            <h2><?= htmlspecialchars($cardTitle)?></h2>
        </div>
        <div class="imgCard">
            <div></div>
        </div>
        <div class="btnCard">
            <a href="">Ver mais +</a>
        </div>
    </div>
</section>

<?php 
    }
?>