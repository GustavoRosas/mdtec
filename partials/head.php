<?php
?>
<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?= htmlspecialchars($brand, ENT_QUOTES, 'UTF-8'); ?> | Manutenção de Computadores e Notebooks em <?= htmlspecialchars($city, ENT_QUOTES, 'UTF-8'); ?></title>
    <meta name="description" content="Conserto, otimização, upgrade ou montagem sob medida com atendimento técnico, direto e confiável em <?= htmlspecialchars($city, ENT_QUOTES, 'UTF-8'); ?>." />
    <meta property="og:title" content="<?= htmlspecialchars($brand, ENT_QUOTES, 'UTF-8'); ?>" />
    <meta property="og:description" content="Seu computador travou, quebrou ou ficou lento? A gente resolve de verdade." />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?= htmlspecialchars($siteUrl, ENT_QUOTES, 'UTF-8'); ?>" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Orbitron:wght@500;600;700&display=swap" rel="stylesheet" />
    <?php require __DIR__ . '/styles.php'; ?>
</head>
