<?php
?>
<section class="section" id="services">
    <div class="container">
        <div class="section-title center">
            <h2>Nossos serviços</h2>
            <p>Atendimento local em <?= htmlspecialchars($city, ENT_QUOTES, 'UTF-8'); ?> com soluções para o seu computador.</p>
        </div>

        <div class="grid services-split">
            <div class="card services-media" aria-label="Imagem ilustrativa">
                <img class="services-img" src="<?= htmlspecialchars($heroUrl, ENT_QUOTES, 'UTF-8'); ?>" alt="Profissional em atendimento de tecnologia" onerror="this.style.display='none';" />
            </div>

            <div class="services-points" aria-label="Serviços">
                <div class="service-point">
                    <h3>Atualização de hardware</h3>
                    <p>Sugerimos e realizamos melhorias para aumentar o desempenho.</p>
                </div>
                <div class="service-point">
                    <h3>Diagnóstico preciso</h3>
                    <p>Analisamos seu equipamento para identificar o que pode ser melhorado.</p>
                </div>
                <div class="service-point">
                    <h3>Orientação técnica</h3>
                    <p>Explicamos de forma clara as opções para otimizar seu computador.</p>
                </div>
            </div>
        </div>
    </div>
</section>
