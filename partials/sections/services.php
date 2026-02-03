<?php
?>
<section class="section" id="services">
    <div class="container">
        <div class="grid services-split">
            <div class="card services-media" aria-label="Imagem ilustrativa">
                <img class="services-img" src="<?= htmlspecialchars($heroUrl2, ENT_QUOTES, 'UTF-8'); ?>" alt="Profissional em atendimento de tecnologia" onerror="this.style.display='none';" />
            </div>

            <div class="services-copy" aria-label="Atendimento e soluções">
                <h2 class="services-head">Não vendemos produtos ou serviços.<br /> <span class="hero-accent">Entregamos solução.</span></h2>
                <p class="services-desc">Atendimento local em <?= htmlspecialchars($city, ENT_QUOTES, 'UTF-8'); ?> com orientação clara para o melhor caminho: otimização, upgrades e soluções sob medida para o seu equipamento.</p>
                <div class="services-cta">
                    <a class="btn btn-secondary services-cta-btn" href="<?= htmlspecialchars($whatsLink, ENT_QUOTES, 'UTF-8'); ?>" target="_blank" rel="noopener">
                        Solicitar orçamento
                        <i data-lucide="message-circle" class="icon"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
