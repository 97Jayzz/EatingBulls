<main class="container my-5">
    <h1>Iniciar Sesión</h1>

    <?php if ($error !== null) ?>
        <p class="text-danger"><?= htmlspecialchars($error, ENT_QUOTES, 'UTF-8') ?> </p>
    <?php endif; ?>
</main>