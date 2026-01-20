<?php
?>
<footer>
    <div class="container">
        <div class="footer-grid">
            <div>
                <div class="brand-name" style="font-size:18px"><?= htmlspecialchars($brand, ENT_QUOTES, 'UTF-8'); ?></div>
                <p class="small">Especialista em manutenção de computadores, notebooks e periféricos em <?= htmlspecialchars($city, ENT_QUOTES, 'UTF-8'); ?>. Atendimento técnico, humanizado e transparente.</p>
                <div class="status" aria-label="Status">
                    <span class="pulse" aria-hidden="true"></span>
                    <div class="small"><strong style="color:var(--text)">Online</strong> • <?= htmlspecialchars($hours, ENT_QUOTES, 'UTF-8'); ?></div>
                </div>
            </div>
            <div>
                <div class="brand-name" style="font-size:16px">Contato</div>
                <p class="small" style="margin-top:10px">
                    <?= htmlspecialchars($whatsPhoneDisplay, ENT_QUOTES, 'UTF-8'); ?> • <?= htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); ?><br />
                    <?= htmlspecialchars($addresses, ENT_QUOTES, 'UTF-8'); ?>
                </p>
                <a class="btn btn-whatsapp" href="<?= htmlspecialchars($whatsLink, ENT_QUOTES, 'UTF-8'); ?>" target="_blank" rel="noopener" style="margin-top:8px">
                    <i data-lucide="smartphone" class="icon"></i>
                    Orçamento no WhatsApp
                </a>
            </div>
            <div>
                <div class="brand-name" style="font-size:16px">Serviços</div>
                <ul class="footer-list">
                    <li>Manutenção de Computadores</li>
                    <li>Conserto de Notebooks</li>
                    <li>Venda de iPhones</li>
                    <li>Equipamentos Usados</li>
                    <li>Upgrade e Otimização</li>
                    <li>Retirada em Domicílio</li>
                </ul>
            </div>
        </div>
        <div class="small" style="margin-top:26px">© 2024 <?= htmlspecialchars($brand, ENT_QUOTES, 'UTF-8'); ?> - <?= htmlspecialchars($specialistFull, ENT_QUOTES, 'UTF-8'); ?>. Todos os direitos reservados.</div>
    </div>
</footer>
