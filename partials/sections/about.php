<?php
?>
<section class="section" id="about">
    <div class="container">
        <div class="section-title">
            <h2><?= htmlspecialchars($brand, ENT_QUOTES, 'UTF-8'); ?> – Tecnologia com compromisso. Conserto com consciência.</h2>
            <p><?= htmlspecialchars($specialistFull, ENT_QUOTES, 'UTF-8'); ?> é especialista em manutenção de computadores, notebooks e periféricos em <?= htmlspecialchars($city, ENT_QUOTES, 'UTF-8'); ?>. Atua com honestidade, técnica e atendimento humanizado.</p>
        </div>

        <div class="grid about-grid">
            <div>
                <p class="subhead" style="margin-top:0">Na <?= htmlspecialchars($brand, ENT_QUOTES, 'UTF-8'); ?>, você fala com quem realmente faz o serviço. A ideia é simples: qualidade, explicação e preço justo.</p>
                <div class="pillars" aria-label="Pilares">
                    <div class="pillar">
                        <strong>Atendimento Humanizado</strong>
                        <span>Você fala diretamente com quem faz o serviço, sem intermediários.</span>
                    </div>
                    <div class="pillar">
                        <strong>Técnica e Qualidade</strong>
                        <span>Especialista em reparos avançados, inclusive soldas e placas.</span>
                    </div>
                    <div class="pillar">
                        <strong>Transparência Total</strong>
                        <span>Explicamos tudo que será feito e cobramos preço justo.</span>
                    </div>
                </div>
            </div>
            <aside class="profile" aria-label="Cartão do especialista">
                <div class="card">
                    <h3 style="margin-top:0"><?= htmlspecialchars($specialistFull, ENT_QUOTES, 'UTF-8'); ?></h3>
                    <p style="margin:0 0 10px; color:var(--muted); font-weight:800">Especialista em Manutenção</p>
                    <div class="metrics" aria-label="Métricas">
                        <div class="metric"><strong>5+ anos</strong><span>de experiência</span></div>
                        <div class="metric"><strong>100%</strong><span>clientes satisfeitos</span></div>
                        <div class="metric"><strong>Direto</strong><span>com o técnico</span></div>
                    </div>
                    <p class="small" style="margin-top:14px">“Transparência e qualidade técnica são meus pilares”</p>
                    <a class="btn btn-whatsapp" style="width:100%; margin-top:10px" href="<?= htmlspecialchars($whatsLink, ENT_QUOTES, 'UTF-8'); ?>" target="_blank" rel="noopener">
                        <i data-lucide="phone-call" class="icon"></i>
                        Falar no WhatsApp
                    </a>
                </div>
            </aside>
        </div>
    </div>
</section>
