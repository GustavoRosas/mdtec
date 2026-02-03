<?php
?>
<section class="hero">
    <div class="container">
        <div class="grid hero-grid">
            <div>
                <span class="kicker">
                    <i data-lucide="wrench" class="icon"></i>
                    Soluções, upgrades e venda de equipamentos em <?= htmlspecialchars($city, ENT_QUOTES, 'UTF-8'); ?>
                </span>
                <h1>Seu computador travou, quebrou ou ficou lento?<br />Atendimento claro e soluções sob medida.</h1>
                <p class="subhead">Otimização, upgrade ou montagem sob medida com atendimento direto, transparente e confiável em <?= htmlspecialchars($city, ENT_QUOTES, 'UTF-8'); ?>.</p>

                <ul class="bullets" aria-label="Diferenciais">
                    <li><span class="dot" aria-hidden="true"></span><span>Equipamento mais rápido</span></li>
                    <li><span class="dot" aria-hidden="true"></span><span>Soluções avançadas em placa</span></li>
                    <li><span class="dot" aria-hidden="true"></span><span>Atendimento transparente</span></li>
                    <li><span class="dot" aria-hidden="true"></span><span>Suporte real no pós-atendimento</span></li>
                </ul>

                <div class="actions">
                    <a class="btn btn-whatsapp" href="<?= htmlspecialchars($whatsLink, ENT_QUOTES, 'UTF-8'); ?>" target="_blank" rel="noopener">
                        <i data-lucide="message-circle" class="icon"></i>
                        Quero um orçamento sem compromisso
                    </a>
                    <a class="btn" href="#services">
                        <i data-lucide="arrow-right" class="icon"></i>
                        Nossos serviços
                    </a>
                </div>
                <div class="note">✅ Resposta rápida  •  ✅ Agendamento flexível  •  ✅ Avaliação inicial</div>
            </div>

            <div class="hero-card" aria-label="Imagem do técnico">
                <img src="<?= htmlspecialchars($heroUrl, ENT_QUOTES, 'UTF-8'); ?>" alt="Profissional em atendimento de tecnologia" onerror="this.style.display='none';" />
                <div class="overlay" aria-hidden="true"></div>
                <div class="badge">
                    <div class="mini">
                        <strong><?= htmlspecialchars($specialistShort, ENT_QUOTES, 'UTF-8'); ?></strong>
                        <span>Atendimento em Tecnologia</span>
                    </div>
                    <span><?= htmlspecialchars($brand, ENT_QUOTES, 'UTF-8'); ?></span>
                </div>
            </div>
        </div>
    </div>
</section>
