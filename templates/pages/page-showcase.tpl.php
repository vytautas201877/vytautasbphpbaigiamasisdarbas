<!-- 
    Tai yra template, kurią sukūrėme su mintim naudoti mūsų homepage`ui.
    Tačiau, mes ją galėsime naudoti NEBŪTINAI TIK homepage. Su bet kuriuo
    kitu controlleriu galėsime ją "renderinti" taip pat. 
!-->
<div class="home-page">
    <h1><?php print $page['content']['title']; ?></h1>

    <form action="index.php?page=showcase" method="POST">
        Skaicius:<br>
        <input name="vardas" type="text" ><br>
        <input type="submit">
    </form>

    <?php if (isset($page['content']['skaicius'])): ?>
        <h1><?php print $page['content']['skaicius']; ?></h1>
    <?php endif; ?>

</div>