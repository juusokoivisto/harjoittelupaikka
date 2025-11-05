<header>
    <nav>
        <ul class="navbar">
            <li><a href="index.php">Haetut paikat</a></li>
            <li><a href="paikat.php">Harjoittelu paikat</a></li>
            <?php if (is_teacher()): ?>
                <li><a href='lisaa-oppilas.php'>Lisää Oppilas</a></li>
                <li><a href='lisaa-harkkapaikka.php'>Lisää Harjoittelupaikka</a></li>
            <?php endif; ?>

            <li class="navbar-right">
                <?php if (is_logged_in()): ?>
                    <span>Hei, <?php echo $_SESSION["tunnus"]; ?>.</span>
                    <a href='actions/logout_action.php'>Kirjaudu ulos</a>
                <?php else: ?>
                    <a href='kirjaudu.php'>Kirjaudu sisään</a>
                <?php endif; ?>
            </li>
        </ul>   
    </nav>
</header>