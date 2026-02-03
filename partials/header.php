<?php
?>
<header class="nav">
    <div class="container nav-inner">
        <a class="brand" href="#top" aria-label="<?= htmlspecialchars($brand, ENT_QUOTES, 'UTF-8'); ?>">
            <span class="logo" aria-hidden="true">
                <img src="<?= htmlspecialchars($logoUrl, ENT_QUOTES, 'UTF-8'); ?>" alt="" onerror="this.remove();this.parentElement.textContent='M';" />
            </span>
            <span class="brand-name"><?= htmlspecialchars($brand, ENT_QUOTES, 'UTF-8'); ?></span>
        </a>

        <nav class="menu" aria-label="Navegação">
            <a href="#services">Serviços</a>
            <a href="#about">Sobre</a>
            <a href="#testimonials">Depoimentos</a>
            <a href="#contact">Contato</a>
        </nav>

        <div class="cta">
            <a class="btn btn-primary" href="<?= htmlspecialchars($whatsLink, ENT_QUOTES, 'UTF-8'); ?>" target="_blank" rel="noopener">
                <i data-lucide="smartphone" class="icon"></i>
                Orçamento sem compromisso
            </a>
            <button class="mobile-toggle" type="button" aria-label="Abrir menu" aria-expanded="false" id="mobileToggle">
                <i data-lucide="menu" class="icon"></i>
            </button>
        </div>
    </div>

    <div class="mobile-panel" id="mobilePanel" aria-hidden="true">
        <div class="container">
            <div class="mobile-links">
                <a href="#services" data-close-mobile>Serviços</a>
                <a href="#about" data-close-mobile>Sobre</a>
                <a href="#testimonials" data-close-mobile>Depoimentos</a>
                <a href="#contact" data-close-mobile>Contato</a>
                <a href="<?= htmlspecialchars($whatsLink, ENT_QUOTES, 'UTF-8'); ?>" target="_blank" rel="noopener" data-close-mobile>Orçamento sem compromisso (WhatsApp)</a>
            </div>
        </div>
    </div>
</header>
