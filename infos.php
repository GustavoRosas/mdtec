
<?php
header('Content-Type: text/html; charset=utf-8');
?>

<h1>MDTEC PG - Infos da Landing Page (extraído de <code>body.php</code>)</h1>

<h2>1) Identidade / Negócio</h2>
<div>
    <p><strong>Marca:</strong> MDTEC PG</p>
    <p><strong>Atuação:</strong> Soluções para computadores e notebooks, serviços avançados, otimização, upgrades, montagem sob medida, venda de iPhones e equipamentos novos/usados.</p>
    <p><strong>Localidade foco:</strong> Ponta Grossa - PR</p>
    <p><strong>Responsável / atendimento:</strong> MDTEC</p>
</div>

<h2>2) Proposta de valor (mensagem central)</h2>
<div>
    <p><strong>Headline (hero):</strong> “Seu computador travou, quebrou ou ficou lento?”</p>
    <p><strong>Subheadline:</strong> “Atendimento claro e soluções sob medida.”</p>
    <p><strong>Parágrafo:</strong> “Otimização, upgrade ou montagem sob medida com atendimento direto, transparente e confiável em Ponta Grossa-PR.”</p>
    <p><strong>Diferenciais (lista no hero):</strong></p>
    <ul>
        <li>Equipamento mais rápido</li>
        <li>Soluções avançadas em placa</li>
        <li>Atendimento transparente</li>
        <li>Suporte real no pós-atendimento</li>
    </ul>
</div>

<h2>3) Estrutura da página (ordem das seções)</h2>
<ol>
    <li><strong>Header fixo</strong> (logo + navegação + CTA)</li>
    <li><strong>Hero</strong> (headline, benefícios e CTA principal + imagem)</li>
    <li><strong>Serviços</strong> (<code>id="services"</code>)</li>
    <li><strong>Seção de oferta/CTA</strong> (fundo “accent” com bônus e CTA WhatsApp)</li>
    <li><strong>Depoimentos</strong> (<code>id="testimonials"</code>)</li>
    <li><strong>Métricas / números</strong> (alta satisfação, 500+ atendimentos, resposta rápida)</li>
    <li><strong>Contato</strong> (<code>id="contact"</code>)</li>
    <li><strong>Footer</strong> (resumo + contato + copyright/status)</li>
</ol>

<h2>4) Header / Navegação</h2>
<div>
    <p><strong>Logo:</strong> imagem MDTEC (arquivo em assets, ver seção “Assets”)</p>
    <p><strong>Itens de menu (desktop):</strong></p>
    <ul>
        <li>Serviços</li>
        <li>Depoimentos</li>
        <li>Contato</li>
    </ul>
    <p><strong>CTA no header (desktop):</strong> “Orçamento sem compromisso” (com ícone de smartphone)</p>
    <p><strong>Mobile:</strong> botão “Toggle menu” (ícone hamburguer). O HTML do menu mobile não aparece aqui; provavelmente é controlado via JS/React do build.</p>
</div>

<h2>5) Hero</h2>
<div>
    <p><strong>Estrutura sugerida:</strong></p>
    <ol>
        <li><strong>Header</strong> (menu âncora + CTA WhatsApp)</li>
        <li>“Atendimento claro e soluções sob medida.”</li>
        <li>“Otimização, upgrade ou montagem sob medida...” + localização Ponta Grossa-PR</li>
    </ol>

    <p><strong>CTA principal (hero):</strong> “Quero um orçamento sem compromisso”</p>

    <p><strong>Imagem hero:</strong> profissional em atendimento de tecnologia</p>
    <p><strong>Selo/overlay na imagem:</strong></p>
    <ul>
        <li>Nome: Marcos Diego</li>
        <li>Cargo: Atendimento em Tecnologia</li>
    </ul>
</div>

<h2>6) Seção de oferta/CTA (fundo “accent”)</h2>
<div>
    <p><strong>Headline:</strong> “Atendimento com retirada em domicílio e agendamento flexível”</p>
    <p><strong>Oferta/bônus:</strong> “Agende hoje e receba atendimento com bônus de limpeza térmica incluído”</p>
    <p><strong>Mini-cards (3):</strong></p>
    <ul>
        <li>Agendamento Flexível — “Atendimento noturno e finais de semana”</li>
        <li>Avaliação inicial — “Avaliação completa sem compromisso”</li>
        <li>Retirada em Casa — “Buscamos e entregamos na sua casa”</li>
    </ul>
    <p><strong>CTA:</strong> “Chamar no WhatsApp agora mesmo”</p>
</div>

<h2>7) Sobre (id: about)</h2>
<div>
    <p><strong>Título:</strong> “MDTEC PG – Tecnologia com compromisso. Atendimento com consciência.”</p>
    <p><strong>Texto 1:</strong> “MDTEC atua com soluções para computadores, notebooks e periféricos em Ponta Grossa-PR. Atendimento direto, honesto e humanizado.”</p>
    <p><strong>Texto 2:</strong> “Na MDTEC, você fala com quem realmente faz o serviço... qualidade, explicação e preço justo.”</p>

    <p><strong>Pilares (cards):</strong></p>
    <ul>
        <li><strong>Atendimento Humanizado:</strong> “Você fala diretamente com quem faz o serviço, sem intermediários”</li>
        <li><strong>Técnica e Qualidade:</strong> “Experiência em serviços avançados, inclusive soldas e placas”</li>
        <li><strong>Transparência Total:</strong> “Explicamos tudo que será feito e cobramos preço justo”</li>
    </ul>

    <p><strong>Cartão profissional (lado direito):</strong></p>
    <ul>
        <li>Nome: MDTEC</li>
        <li>Título: Atendimento em Tecnologia</li>
        <li>Métricas: 5+ anos de experiência; clientes satisfeitos</li>
        <li>Frase: “Transparência e qualidade técnica são meus pilares”</li>
    </ul>
</div>

<h2>8) Depoimentos (id: testimonials)</h2>
<div>
    <p><strong>Título:</strong> “O que nossos clientes dizem”</p>
    <p><strong>Subtexto:</strong> “Depoimentos reais de pessoas que confiaram na MDTEC para resolver seus problemas tecnológicos”</p>
    <p><strong>Cards (3) - todos com 5 estrelas:</strong></p>
    <ul>
        <li>“Fui em outra loja e disseram que meu notebook estava perdido. O Marcos arrumou em 2 dias.” — <strong>Renata S.</strong> (Cliente MDTEC)</li>
        <li>“Super honesto, explicou tudo o que ia fazer e cobrou justo.” — <strong>João V.</strong> (Cliente MDTEC)</li>
        <li>“Atendimento até à noite! Salvou meu PC no meio da semana.” — <strong>Alan T.</strong> (Cliente MDTEC)</li>
    </ul>
    <p><strong>Métricas abaixo dos depoimentos:</strong></p>
    <ul>
        <li>Alta — Satisfação</li>
        <li>500+ — Atendimentos</li>
        <li>Rápida — Resposta no WhatsApp</li>
    </ul>
</div>

<h2>9) Contato (id: contact)</h2>
<div>
    <p><strong>Título:</strong> “Atendimento técnico de confiança e sem enrolação”</p>
    <p><strong>Subtexto:</strong> “Peça já um diagnóstico e agende seu atendimento!”</p>

    <p><strong>Informações de contato:</strong></p>
    <ul>
        <li><strong>WhatsApp / Telefone:</strong> (42) 98861-7084</li>
        <li><strong>E-mail:</strong> mdtecpg@outlook.com</li>
        <li><strong>Endereços:</strong> Rua Quinze de Novembro, 308 e Rua Spix, 32 – Ponta Grossa - PR</li>
        <li><strong>Horário de Atendimento:</strong> Seg-Sex 9h às 17h (com agendamento flexível)</li>
    </ul>

    <p><strong>Redes sociais (botões):</strong></p>
    <ul>
        <li>Instagram: @mdtecpg</li>
        <li>Facebook: “Facebook” (não aparece o @/URL no HTML)</li>
    </ul>

    <p><strong>Box CTA (lado direito):</strong></p>
    <ul>
        <li>Título: “Pronto para resolver seu problema?”</li>
        <li>Texto: “Entre em contato agora mesmo pelo WhatsApp e agende seu atendimento. Avaliação inicial e orientação clara do começo ao fim.”</li>
        <li>Botão: “Solicitar agora pelo WhatsApp”</li>
        <li>Microcopy: “✅ Resposta rápida • ✅ Agendamento flexível • ✅ Avaliação inicial”</li>
    </ul>
</div>

<h2>10) Footer</h2>
<div>
    <p><strong>Resumo:</strong> “Soluções para computadores, notebooks e periféricos em Ponta Grossa-PR. Atendimento direto, humanizado e transparente.”</p>
    <p><strong>Contato no footer:</strong> (42) 98861-7084 • mdtecpg@outlook.com • endereços listados</p>
    <p><strong>Copyright:</strong> “© 2024 MDTEC PG - MDTEC. Todos os direitos reservados.”</p>
    <p><strong>Status/horário:</strong> “Seg-Sex 9h às 17h” + indicador “Online” (ponto verde pulsando)</p>
</div>

<h2>11) CTAs / Botões (inventário)</h2>
<div>
    <ul>
        <li><strong>Header:</strong> “Orçamento sem compromisso”</li>
        <li><strong>Header (mobile):</strong> “Toggle menu” (ícone menu)</li>
        <li><strong>Hero:</strong> “Quero um orçamento sem compromisso”</li>
        <li><strong>Seção oferta/CTA:</strong> “Chamar no WhatsApp agora mesmo”</li>
        <li><strong>Contato / redes:</strong> botão “@mdtecpg” (Instagram), botão “Facebook”</li>
        <li><strong>Contato CTA final:</strong> “Solicitar agora pelo WhatsApp”</li>
    </ul>
    <p><strong>Observação importante:</strong> No HTML de <code>body.php</code> não aparecem <code>href</code>, <code>tel:</code>, <code>mailto:</code> ou links de WhatsApp (ex: <code>wa.me</code>). Os botões parecem depender de JS do frontend (provavelmente build de React) para fazer scroll/abrir WhatsApp.</p>
</div>

<h2>12) Assets referenciados (imagens)</h2>
<div>
    <ul>
        <li><strong>Logo:</strong> <code>&lt;?= SITE_URL; ?&gt;/assets/a33ac607-49af-4d00-8614-b96986c5b994.png</code></li>
        <li><strong>Hero image:</strong> <code>&lt;?= SITE_URL; ?&gt;/assets/hero-tech-repair-BhsAOT-d.jpg</code></li>
    </ul>
</div>

<h2>13) “Jeito” visual / estilo (pistas úteis para recriar)</h2>
<div>
    <ul>
        <li><strong>Layout:</strong> header fixo + seções em blocos com bastante espaçamento, cards com blur/“glassmorphism”.</li>
        <li><strong>Paleta:</strong> destaque em “tech-blue” e “tech-orange”; fundo “tech-dark”; gradientes (hero/CTA).</li>
        <li><strong>Tipografia:</strong> classes sugerem <code>font-orbitron</code> (títulos) e <code>font-inter</code> (texto).</li>
        <li><strong>UI:</strong> muitos botões com gradiente, sombras e animação de glow/scale no hover.</li>
        <li><strong>Ícones:</strong> Lucide (ex: smartphone, wrench, star, instagram, facebook etc.).</li>
    </ul>
</div>

