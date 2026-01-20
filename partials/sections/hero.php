<?php
?>
<section class="hero">
    <div class="container">
        <div class="grid hero-grid">
            <div>
                <span class="kicker">
                    <i data-lucide="wrench" class="icon"></i>
                    Manutenção, upgrades e venda de equipamentos em <?= htmlspecialchars($city, ENT_QUOTES, 'UTF-8'); ?>
                </span>
                <h1>Seu computador travou, quebrou ou ficou lento?<br />A gente resolve de verdade.</h1>
                <p class="subhead">Conserto, otimização, upgrade ou montagem sob medida com atendimento direto, técnico e confiável em <?= htmlspecialchars($city, ENT_QUOTES, 'UTF-8'); ?>.</p>

                <ul class="bullets" aria-label="Diferenciais">
                    <li><span class="dot" aria-hidden="true"></span><span>Equipamento mais rápido</span></li>
                    <li><span class="dot" aria-hidden="true"></span><span>Consertos reais de placa</span></li>
                    <li><span class="dot" aria-hidden="true"></span><span>Atendimento transparente</span></li>
                    <li><span class="dot" aria-hidden="true"></span><span>Garantia real no pós-venda</span></li>
                </ul>

                <div class="actions">
                    <a class="btn btn-whatsapp" href="<?= htmlspecialchars($whatsLink, ENT_QUOTES, 'UTF-8'); ?>" target="_blank" rel="noopener">
                        <i data-lucide="message-circle" class="icon"></i>
                        Quero um orçamento gratuito agora!
                    </a>
                    <a class="btn" href="#services">
                        <i data-lucide="arrow-right" class="icon"></i>
                        Ver serviços
                    </a>
                </div>
                <div class="note">✅ Resposta rápida  •  ✅ Agendamento flexível  •  ✅ Diagnóstico gratuito</div>
            </div>

            <div class="hero-card" aria-label="Imagem do técnico">
                <img src="<?= htmlspecialchars($heroUrl, ENT_QUOTES, 'UTF-8'); ?>" alt="Técnico consertando computador" onerror="this.style.display='none';" />
                <div class="overlay" aria-hidden="true"></div>
                <div class="badge">
                    <div class="mini">
                        <strong><?= htmlspecialchars($specialistShort, ENT_QUOTES, 'UTF-8'); ?></strong>
                        <span>Especialista em Manutenção</span>
                    </div>
                    <span><?= htmlspecialchars($brand, ENT_QUOTES, 'UTF-8'); ?></span>
                </div>
            </div>
        </div>
    </div>
</section>
