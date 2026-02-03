<?php
?>
<section class="section" id="contact">
    <div class="container">
        <div class="section-title">
            <h2>Atendimento de confiança, claro e direto</h2>
            <p>Peça já um diagnóstico e agende seu atendimento!</p>
        </div>

        <div class="grid contact-grid">
            <div>
                <div class="contact-list" aria-label="Informações de contato">
                    <div class="contact-item">
                        <i data-lucide="phone" class="icon"></i>
                        <div>
                            <strong>WhatsApp / Telefone</strong>
                            <a href="tel:+<?= htmlspecialchars($whatsPhoneDigitsBR, ENT_QUOTES, 'UTF-8'); ?>"><?= htmlspecialchars($whatsPhoneDisplay, ENT_QUOTES, 'UTF-8'); ?></a>
                        </div>
                    </div>
                    <div class="contact-item">
                        <i data-lucide="mail" class="icon"></i>
                        <div>
                            <strong>E-mail</strong>
                            <a href="mailto:<?= htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); ?>"><?= htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); ?></a>
                        </div>
                    </div>
                    <div class="contact-item">
                        <i data-lucide="map-pin" class="icon"></i>
                        <div>
                            <strong>Endereços</strong>
                            <span><?= htmlspecialchars($addresses, ENT_QUOTES, 'UTF-8'); ?></span>
                        </div>
                    </div>
                    <div class="contact-item">
                        <i data-lucide="clock" class="icon"></i>
                        <div>
                            <strong>Horário de Atendimento</strong>
                            <span><?= htmlspecialchars($hours, ENT_QUOTES, 'UTF-8'); ?></span>
                        </div>
                    </div>
                </div>

                <div class="social" aria-label="Redes sociais">
                    <a href="<?= htmlspecialchars($instagramUrl, ENT_QUOTES, 'UTF-8'); ?>" target="_blank" rel="noopener">
                        <i data-lucide="instagram" class="icon"></i>
                        <?= htmlspecialchars($instagramHandle, ENT_QUOTES, 'UTF-8'); ?>
                    </a>
                    <a href="<?= htmlspecialchars($facebookUrl, ENT_QUOTES, 'UTF-8'); ?>" target="_blank" rel="noopener">
                        <i data-lucide="facebook" class="icon"></i>
                        Facebook
                    </a>
                </div>
            </div>

            <aside>
                <div class="card">
                    <h3 style="margin-top:0">Pronto para resolver seu problema?</h3>
                    <p class="small">Entre em contato agora mesmo pelo WhatsApp e agende seu atendimento. Avaliação inicial e orientação clara do começo ao fim.</p>
                    <a class="btn btn-secondary" style="width:100%" href="<?= htmlspecialchars($whatsLink, ENT_QUOTES, 'UTF-8'); ?>" target="_blank" rel="noopener">
                        <i data-lucide="message-circle" class="icon"></i>
                        Solicitar agora pelo WhatsApp
                    </a>
                    <div class="note">✅ Resposta rápida • ✅ Agendamento flexível • ✅ Avaliação inicial</div>
                </div>
            </aside>
        </div>
    </div>
</section>
