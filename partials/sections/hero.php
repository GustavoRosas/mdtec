<?php
?>
<section class="hero">
    <div class="container">
        <div class="grid hero-grid">
            <div class="hero-simple hero-simple-left" aria-label="Chamada principal">
                <h1 class="hero-headline">
                    AGORA É SÓ TOCAR<br />
                    <span class="hero-accent">NO BOTÃO ABAIXO!</span>
                </h1>
                <p class="hero-sub">Chame no WhatsApp e solicite um <strong>orçamento sem compromisso</strong>.</p>
                <div class="hero-cta">
                    <a class="btn btn-secondary hero-cta-btn" href="<?= htmlspecialchars($whatsLink, ENT_QUOTES, 'UTF-8'); ?>" target="_blank" rel="noopener">
                        SOLICITAR ORÇAMENTO
                        <i data-lucide="message-circle" class="icon"></i>
                    </a>
                </div>
            </div>

            <div class="hero-card" aria-label="Imagem do técnico">
                <div class="hero-carousel" data-hero-carousel data-hero-marquee aria-label="Galeria de imagens" role="region">
                    <?php
                        $heroImages = [
                            $siteUrl . '/assets/tech-1.jpeg',
                            $siteUrl . '/assets/tech-2.jpeg',
                            $siteUrl . '/assets/tech-3.jpeg',
                            $siteUrl . '/assets/tech-4.jpeg',
                            $siteUrl . '/assets/tech-5.jpeg',
                        ];
                    ?>
                    <div class="hero-track" data-hero-track>
                        <div class="hero-track-inner" data-hero-track-inner>
                            <div class="hero-group" aria-label="Imagens">
                                <?php foreach ($heroImages as $i => $src): ?>
                                    <div class="hero-item" data-hero-item data-slide-index="<?= (int)$i; ?>">
                                        <img class="hero-slide" src="<?= htmlspecialchars($src, ENT_QUOTES, 'UTF-8'); ?>" alt="Profissional em atendimento de tecnologia" loading="<?= $i === 0 ? 'eager' : 'lazy'; ?>" onerror="this.style.display='none';" />
                                    </div>
                                <?php endforeach; ?>
                            </div>
                            <div class="hero-group" aria-hidden="true">
                                <?php foreach ($heroImages as $i => $src): ?>
                                    <div class="hero-item">
                                        <img class="hero-slide" src="<?= htmlspecialchars($src, ENT_QUOTES, 'UTF-8'); ?>" alt="" loading="lazy" onerror="this.style.display='none';" />
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="overlay" aria-hidden="true"></div>
            </div>
        </div>
    </div>
</section>
