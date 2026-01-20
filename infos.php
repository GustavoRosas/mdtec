
<?php
header('Content-Type: text/html; charset=utf-8');
?>

<h1>MDTEC PG - Infos da Landing Page (extraído de <code>body.php</code>)</h1>

<h2>1) Identidade / Negócio</h2>
<div>
    <p><strong>Marca:</strong> MDTEC PG</p>
    <p><strong>Atuação:</strong> Manutenção de computadores e notebooks, reparos, otimização, upgrades, montagem sob medida, venda de iPhones e equipamentos novos/usados.</p>
    <p><strong>Localidade foco:</strong> Ponta Grossa - PR</p>
    <p><strong>Responsável / especialista:</strong> Marcos Diego Severino (aparece também como “Marcos Diego”)</p>
</div>

<h2>2) Proposta de valor (mensagem central)</h2>
<div>
    <p><strong>Headline (hero):</strong> “Seu computador travou, quebrou ou ficou lento?”</p>
    <p><strong>Subheadline:</strong> “A gente resolve de verdade.”</p>
    <p><strong>Parágrafo:</strong> “Conserto, otimização, upgrade ou montagem sob medida com atendimento direto, técnico e confiável em Ponta Grossa-PR.”</p>
    <p><strong>Diferenciais (lista no hero):</strong></p>
    <ul>
        <li>Equipamento mais rápido</li>
        <li>Consertos reais de placa</li>
        <li>Atendimento transparente</li>
        <li>Garantia real no pós-venda</li>
    </ul>
</div>

<h2>3) Estrutura da página (ordem das seções)</h2>
<ol>
    <li><strong>Header fixo</strong> (logo + navegação + CTA)</li>
    <li><strong>Hero</strong> (headline, benefícios e CTA principal + imagem)</li>
    <li><strong>Serviços</strong> (<code>id="services"</code>)</li>
    <li><strong>Seção de oferta/CTA</strong> (fundo “accent” com bônus e CTA WhatsApp)</li>
    <li><strong>Sobre</strong> (<code>id="about"</code>)</li>
    <li><strong>Depoimentos</strong> (<code>id="testimonials"</code>)</li>
    <li><strong>Métricas / números</strong> (100% satisfação, 500+ consertos, 24h resposta)</li>
    <li><strong>Perguntas frequentes (FAQ)</strong></li>
    <li><strong>Contato</strong> (<code>id="contact"</code>)</li>
    <li><strong>Footer</strong> (resumo + contato + lista de serviços + copyright/status)</li>
</ol>

<h2>4) Header / Navegação</h2>
<div>
    <p><strong>Logo:</strong> imagem MDTEC (arquivo em assets, ver seção “Assets”)</p>
    <p><strong>Itens de menu (desktop):</strong></p>
    <ul>
        <li>Serviços</li>
        <li>Sobre</li>
        <li>Depoimentos</li>
        <li>Contato</li>
    </ul>
    <p><strong>CTA no header (desktop):</strong> “Orçamento Grátis” (com ícone de smartphone)</p>
    <p><strong>Mobile:</strong> botão “Toggle menu” (ícone hamburguer). O HTML do menu mobile não aparece aqui; provavelmente é controlado via JS/React do build.</p>
</div>

<h2>5) Hero</h2>
<div>
    <p><strong>Copy principal:</strong></p>
    <ul>
        <li>“Seu computador travou, quebrou ou ficou lento?”</li>
        <li>“A gente resolve de verdade.”</li>
        <li>“Conserto, otimização, upgrade ou montagem sob medida...” + localização Ponta Grossa-PR</li>
    </ul>

    <p><strong>CTA principal (hero):</strong> “Quero um orçamento gratuito agora!”</p>

    <p><strong>Imagem hero:</strong> técnico consertando computador</p>
    <p><strong>Selo/overlay na imagem:</strong></p>
    <ul>
        <li>Nome: Marcos Diego</li>
        <li>Cargo: Especialista em Manutenção</li>
    </ul>
</div>

<h2>6) Serviços (id: services)</h2>
<div>
    <p><strong>Headline da seção:</strong> “Se você já cansou de levar o notebook ou PC em lojas que só sabem ‘formatar tudo’”</p>
    <p><strong>Texto:</strong> “Na MDTEC PG, a gente escuta, diagnostica, explica e entrega um resultado técnico de verdade”</p>

    <p><strong>Cards de serviços (6):</strong></p>
    <ol>
        <li>
            <strong>Manutenção de Computadores</strong>
            <ul>
                <li>Descrição: Reparos avançados, limpeza térmica, troca de pasta e otimização completa</li>
                <li>Bullets: Diagnóstico gratuito; Reparos de placa e solda; Higienização completa</li>
            </ul>
        </li>
        <li>
            <strong>Venda de iPhones</strong>
            <ul>
                <li>Descrição: iPhones originais e acessórios com garantia e suporte técnico</li>
                <li>Bullets: Produtos testados; Garantia real; Suporte pós-venda</li>
            </ul>
        </li>
        <li>
            <strong>Equipamentos Novos e Usados</strong>
            <ul>
                <li>Descrição: PCs montados sob medida e equipamentos seminovos com garantia</li>
                <li>Bullets: Montagem personalizada; Peças testadas; Consultoria técnica</li>
            </ul>
        </li>
        <li>
            <strong>Upgrade e Otimização</strong>
            <ul>
                <li>Descrição: Melhore a performance do seu equipamento com upgrades inteligentes</li>
                <li>Bullets: Análise de performance; Upgrades sob medida; Otimização de sistema</li>
            </ul>
        </li>
        <li>
            <strong>Atendimento Flexível</strong>
            <ul>
                <li>Descrição: Agendamento noturno e aos finais de semana para sua comodidade</li>
                <li>Bullets: Horário flexível; Retirada em domicílio; Entrega rápida</li>
            </ul>
        </li>
        <li>
            <strong>Garantia e Suporte</strong>
            <ul>
                <li>Descrição: Garantia real nos serviços e suporte contínuo pelo WhatsApp</li>
                <li>Bullets: Garantia nos serviços; Suporte WhatsApp; Atendimento humanizado</li>
            </ul>
        </li>
    </ol>
</div>

<h2>7) Seção de oferta/CTA (fundo “accent”)</h2>
<div>
    <p><strong>Headline:</strong> “Atendimento com retirada em domicílio, agendamento flexível e orçamento gratuito!”</p>
    <p><strong>Oferta/bônus:</strong> “Agende hoje e receba atendimento com bônus de limpeza térmica grátis”</p>
    <p><strong>Mini-cards (3):</strong></p>
    <ul>
        <li>Agendamento Flexível — “Atendimento noturno e finais de semana”</li>
        <li>Diagnóstico Gratuito — “Avaliação completa sem custo”</li>
        <li>Retirada em Casa — “Buscamos e entregamos na sua casa”</li>
    </ul>
    <p><strong>CTA:</strong> “Chamar no WhatsApp agora mesmo”</p>
</div>

<h2>8) Sobre (id: about)</h2>
<div>
    <p><strong>Título:</strong> “MDTEC PG – Tecnologia com compromisso. Conserto com consciência.”</p>
    <p><strong>Texto 1:</strong> “Marcos Diego Severino é especialista em manutenção de computadores, notebooks e periféricos em Ponta Grossa-PR. Atua com honestidade, técnica e atendimento humanizado.”</p>
    <p><strong>Texto 2:</strong> “Na MDTEC, você fala com quem realmente faz o serviço... qualidade, explicação e preço justo.”</p>

    <p><strong>Pilares (cards):</strong></p>
    <ul>
        <li><strong>Atendimento Humanizado:</strong> “Você fala diretamente com quem faz o serviço, sem intermediários”</li>
        <li><strong>Técnica e Qualidade:</strong> “Especialista em reparos avançados, inclusive soldas e placas”</li>
        <li><strong>Transparência Total:</strong> “Explicamos tudo que será feito e cobramos preço justo”</li>
    </ul>

    <p><strong>Cartão do especialista (lado direito):</strong></p>
    <ul>
        <li>Nome: Marcos Diego Severino</li>
        <li>Título: Especialista em Manutenção</li>
        <li>Métricas: 5+ anos de experiência; 100% clientes satisfeitos</li>
        <li>Frase: “Transparência e qualidade técnica são meus pilares”</li>
    </ul>
</div>

<h2>9) Depoimentos (id: testimonials)</h2>
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
        <li>100% — Satisfação</li>
        <li>500+ — Equipamentos Consertados</li>
        <li>24h — Resposta no WhatsApp</li>
    </ul>
</div>

<h2>10) FAQ (Perguntas Frequentes)</h2>
<div>
    <p><strong>Título:</strong> “Perguntas Frequentes”</p>
    <p><strong>Subtexto:</strong> “Tire suas dúvidas sobre nossos serviços e atendimento”</p>
    <p><strong>Perguntas listadas (o HTML das respostas não está preenchido aqui; provavelmente vem via JS):</strong></p>
    <ul>
        <li>“Posso mandar meu notebook para retirada em casa?”</li>
        <li>“Vocês atendem finais de semana?”</li>
        <li>“Como funciona o orçamento?”</li>
        <li>“Posso parcelar a compra de peças?”</li>
        <li>“Tem garantia no serviço?”</li>
        <li>“Quais tipos de conserto vocês fazem?”</li>
    </ul>

    <p><strong>Bloco final do FAQ:</strong></p>
    <ul>
        <li>Título: “Ainda tem dúvidas?”</li>
        <li>Texto: “Entre em contato conosco pelo WhatsApp e tire todas as suas dúvidas diretamente com nosso especialista.”</li>
    </ul>
</div>

<h2>11) Contato (id: contact)</h2>
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
        <li>Texto: “Entre em contato agora mesmo pelo WhatsApp e agende seu atendimento. Diagnóstico gratuito, explicação clara e solução técnica de verdade.”</li>
        <li>Botão: “Solicitar agora pelo WhatsApp”</li>
        <li>Microcopy: “✅ Resposta rápida • ✅ Agendamento flexível • ✅ Diagnóstico gratuito”</li>
    </ul>
</div>

<h2>12) Footer</h2>
<div>
    <p><strong>Resumo:</strong> “Especialista em manutenção de computadores, notebooks e periféricos em Ponta Grossa-PR. Atendimento técnico, humanizado e transparente.”</p>
    <p><strong>Contato no footer:</strong> (42) 98861-7084 • mdtecpg@outlook.com • endereços listados</p>
    <p><strong>Lista de serviços no footer:</strong></p>
    <ul>
        <li>Manutenção de Computadores</li>
        <li>Conserto de Notebooks</li>
        <li>Venda de iPhones</li>
        <li>Equipamentos Usados</li>
        <li>Upgrade e Otimização</li>
        <li>Retirada em Domicílio</li>
    </ul>
    <p><strong>Copyright:</strong> “© 2024 MDTEC PG - Marcos Diego Severino. Todos os direitos reservados.”</p>
    <p><strong>Status/horário:</strong> “Seg-Sex 9h às 17h” + indicador “Online” (ponto verde pulsando)</p>
</div>

<h2>13) CTAs / Botões (inventário)</h2>
<div>
    <ul>
        <li><strong>Header:</strong> “Orçamento Grátis”</li>
        <li><strong>Header (mobile):</strong> “Toggle menu” (ícone menu)</li>
        <li><strong>Hero:</strong> “Quero um orçamento gratuito agora!”</li>
        <li><strong>Seção oferta/CTA:</strong> “Chamar no WhatsApp agora mesmo”</li>
        <li><strong>Contato / redes:</strong> botão “@mdtecpg” (Instagram), botão “Facebook”</li>
        <li><strong>Contato CTA final:</strong> “Solicitar agora pelo WhatsApp”</li>
    </ul>
    <p><strong>Observação importante:</strong> No HTML de <code>body.php</code> não aparecem <code>href</code>, <code>tel:</code>, <code>mailto:</code> ou links de WhatsApp (ex: <code>wa.me</code>). Os botões parecem depender de JS do frontend (provavelmente build de React) para fazer scroll/abrir WhatsApp.</p>
</div>

<h2>14) Assets referenciados (imagens)</h2>
<div>
    <ul>
        <li><strong>Logo:</strong> <code>&lt;?= SITE_URL; ?&gt;/assets/a33ac607-49af-4d00-8614-b96986c5b994.png</code></li>
        <li><strong>Hero image:</strong> <code>&lt;?= SITE_URL; ?&gt;/assets/hero-tech-repair-BhsAOT-d.jpg</code></li>
    </ul>
</div>

<h2>15) “Jeito” visual / estilo (pistas úteis para recriar)</h2>
<div>
    <ul>
        <li><strong>Layout:</strong> header fixo + seções em blocos com bastante espaçamento, cards com blur/“glassmorphism”.</li>
        <li><strong>Paleta:</strong> destaque em “tech-blue” e “tech-orange”; fundo “tech-dark”; gradientes (hero/CTA).</li>
        <li><strong>Tipografia:</strong> classes sugerem <code>font-orbitron</code> (títulos) e <code>font-inter</code> (texto).</li>
        <li><strong>UI:</strong> muitos botões com gradiente, sombras e animação de glow/scale no hover.</li>
        <li><strong>Ícones:</strong> Lucide (ex: smartphone, wrench, star, instagram, facebook etc.).</li>
    </ul>
</div>

