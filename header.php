<header>
    <nav>
        <ul class="navbar">
            <li><a href="index.php">Haetut paikat</a></li>
            <li><a href="paikat.php">Harjoittelu paikat</a></li>
            <?php if (isset($_SESSION["tunnus"])): ?>
                <li><a href='lisaa-oppilas.php'>Lisää Oppilas</a></li>
                <li><a href='lisaa-harkkapaikka.php'>Lisää Harjoittelupaikka</a></li>

                <li class="navbar-right"><a href='actions/logout_action.php'>Kirjaudu ulos</a></li>
            <?php else : ?>
                <li class="navbar-right"><a href='kirjaudu.php'>Kirjaudu sisään</a></li>
            <?php endif; ?>
        </ul>   
    </nav>
</header>