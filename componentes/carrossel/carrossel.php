<?php  function carrosselTitulo($tituloText) {
?>
<section id="carrossel">
    <section class="section-i"><i data-lucide="chevron-left" class="iconSeta"></i></section>
    <section id="mainCarrossel">
        <h2><?= htmlspecialchars($tituloText)?></h2>
        <section >
            
        </section>
        <div id="footCarrossel">
            <input type="radio" name="" id="">
            <input type="radio" name="" id="">
            <input type="radio" name="" id="">
            <input type="radio" name="" id="">
            <input type="radio" name="" id="">
        </div>

    </section>
    <sectiom class="section-i"><i data-lucide="chevron-right" class="iconSeta"></i> </section>
</section>

<?php 
}
?>