<style>
        :root{
            --bg:#0B1F33;
            --bg2:#071524;
            --card: rgba(255,255,255,.06);
            --card2: rgba(255,255,255,.09);
            --stroke: rgba(255,255,255,.12);
            --text:#FFFFFF;
            --muted: rgba(255,255,255,.72);
            --blue:#36b6ff;
            --orange:#F57C00;
            --shadow: 0 18px 60px rgba(0,0,0,.55);
            --radius: 18px;
            --max: 1120px;
        }
        *{box-sizing:border-box}
        html{scroll-behavior:smooth}
        body{margin:0; font-family:Inter, system-ui, -apple-system, Segoe UI, Roboto, Arial; color:var(--text); background: radial-gradient(900px 650px at 12% 12%, rgba(54,182,255,.32), transparent 62%), radial-gradient(900px 650px at 88% 18%, rgba(245,124,0,.26), transparent 60%), linear-gradient(160deg, var(--bg), var(--bg2));}
        a{color:inherit; text-decoration:none}
        .container{max-width:var(--max); margin:0 auto; padding:0 20px}
        .nav{position:sticky; top:0; z-index:50; backdrop-filter:saturate(160%) blur(12px); background: rgba(11,31,51,.70); border-bottom:1px solid rgba(255,255,255,.08)}
        .nav-inner{display:flex; align-items:center; justify-content:space-between; height:76px}
        .brand{display:flex; align-items:center; gap:12px; min-width:200px}
        .logo{width:44px; height:44px; border-radius:14px; background: linear-gradient(135deg, rgba(54,182,255,.18), rgba(255,138,61,.16)); border:1px solid rgba(255,255,255,.1); overflow:hidden; display:grid; place-items:center}
        .logo img{width:100%; height:100%; object-fit:cover}
        .brand-name{font-family:Orbitron, Inter, system-ui; letter-spacing:.5px; font-weight:700}
        .menu{display:flex; align-items:center; gap:22px}
        .menu a{color:var(--muted); font-weight:600; font-size:14px}
        .menu a:hover{color:var(--text)}
        .cta{display:flex; align-items:center; gap:10px}
        .btn{display:inline-flex; align-items:center; justify-content:center; gap:10px; border-radius:999px; padding:12px 16px; font-weight:800; letter-spacing:.2px; border:1px solid rgba(255,255,255,.12); background: rgba(255,255,255,.06)}
        .btn:hover{background: rgba(255,255,255,.10)}
        .btn:active{transform: translateY(0)}

        .btn-secondary{background: var(--orange); border-color: rgba(245,124,0,.92); box-shadow: 0 14px 36px rgba(0,0,0,.40)}
        .btn-secondary:hover{background: rgba(245,124,0,.92); transform: translateY(-1px); box-shadow: 0 18px 46px rgba(0,0,0,.48)}
        .btn-secondary:active{background: rgba(245,124,0,.86)}
        .icon{width:18px; height:18px}
        .mobile-toggle{display:none; width:44px; height:44px; border-radius:14px; border:1px solid rgba(255,255,255,.12); background: rgba(255,255,255,.06); color:var(--text)}
        .mobile-panel{display:none; position:absolute; left:0; right:0; top:76px; background: rgba(11,31,51,.94); border-bottom:1px solid rgba(255,255,255,.10)}
        .mobile-panel .container{padding:14px 20px 18px}
        .mobile-links{display:flex; flex-direction:column; gap:12px}
        .mobile-links a{padding:10px 12px; border-radius:12px; border:1px solid rgba(255,255,255,.08); background: rgba(255,255,255,.04); font-weight:700; color:var(--muted)}
        .mobile-links a:hover{color:var(--text); background: rgba(255,255,255,.08)}

        .section{padding:84px 0}
        .hero{padding:72px 0 92px}
        .grid{display:grid; gap:26px}
        .hero-grid{grid-template-columns: 1.05fr .95fr; align-items:center}
        .kicker{display:inline-flex; align-items:center; gap:10px; padding:10px 12px; border-radius:999px; background: rgba(255,255,255,.06); border:1px solid rgba(255,255,255,.10); color:var(--muted); font-weight:700; font-size:13px}
        h1{margin:14px 0 10px; font-family:Orbitron, Inter, system-ui; font-size:44px; line-height:1.06}
        .subhead{font-size:18px; color:var(--muted); line-height:1.6; margin:0 0 18px}
        .bullets{display:grid; grid-template-columns: 1fr 1fr; gap:10px; margin:18px 0 22px; padding:0; list-style:none}
        .bullets li{display:flex; gap:10px; align-items:flex-start; padding:12px 12px; border-radius:16px; border:1px solid rgba(255,255,255,.10); background: rgba(255,255,255,.04)}
        .dot{width:10px; height:10px; border-radius:999px; margin-top:5px; background: linear-gradient(135deg, var(--blue), var(--orange))}
        .actions{display:flex; gap:12px; flex-wrap:wrap}
        .note{margin-top:12px; color:rgba(234,240,255,.58); font-size:13px}

        .hero-simple{max-width:820px; margin:0 auto; text-align:center; padding:40px 20px; border-radius: calc(var(--radius) + 8px); border:1px solid rgba(255,255,255,.10); background: rgba(0,0,0,.24); backdrop-filter: blur(10px)}
        .hero-simple-left{max-width:none; margin:0; text-align:left; padding:0; border:0; background:transparent; backdrop-filter:none}
        .hero-headline{margin:0; text-transform:uppercase; font-family:Orbitron, Inter, system-ui; font-size: clamp(34px, 5.2vw, 56px); line-height:1.05; letter-spacing:.6px}
        .hero-accent{display:inline-block; color: var(--orange)}
        .hero-sub{margin:14px 0 22px; font-size:18px; color: rgba(255,255,255,.78)}
        .hero-sub strong{color: var(--blue); font-weight:900}
        .hero-cta{display:flex; justify-content:center}
        .hero-simple-left .hero-cta{justify-content:flex-start}
        .hero-cta-btn{min-width:280px; padding:16px 26px; font-size:16px; letter-spacing:.4px}

        .hero-card{position:relative; border-radius: var(--radius); border:0; background: transparent; box-shadow:none; overflow:hidden}
        .hero-card img{width:100%; height:480px; object-fit:cover; display:block; filter:saturate(1.08) contrast(1.06)}
        .hero-carousel{position:relative; width:100%; height:480px; overflow:hidden}
        .hero-track{height:100%; overflow:hidden; padding:18px 18px; scrollbar-width:none}
        .hero-track::-webkit-scrollbar{display:none}
        .hero-track-inner{height:100%; display:flex; width:max-content; will-change: transform}
        .hero-group{height:100%; display:flex; gap:16px; align-items:center; padding-right:16px}
        .hero-item{flex:0 0 auto; height:100%; border-radius:18px; overflow:hidden; box-shadow:none}
        .hero-slide{width:clamp(260px, 78vw, 420px); height:100%; object-fit:cover; display:block}

        [data-hero-marquee]{overflow:hidden}
        [data-hero-marquee] .hero-track{overflow:hidden}
        [data-hero-marquee] .hero-track-inner{animation: hero-marquee 26s linear infinite}
        [data-hero-marquee]:hover .hero-track-inner{animation-play-state: paused}
        @keyframes hero-marquee{0%{transform: translateX(0)}100%{transform: translateX(-50%)}}

        [data-hero-marquee] .hero-track{
            -webkit-mask-image: linear-gradient(90deg, transparent, #000 12%, #000 88%, transparent);
            mask-image: linear-gradient(90deg, transparent, #000 12%, #000 88%, transparent);
        }

        .hero-nav{position:absolute; top:50%; transform:translateY(-50%); width:44px; height:44px; display:inline-flex; align-items:center; justify-content:center; border-radius:999px; border:1px solid rgba(255,255,255,.14); background: rgba(11,31,51,.55); color: var(--text); cursor:pointer; z-index:3; backdrop-filter: blur(10px)}
        .hero-nav:hover{background: rgba(11,31,51,.72)}
        .hero-prev{left:12px}
        .hero-next{right:12px}

        .overlay{position:absolute; inset:0; pointer-events:none; background: transparent}
        .badge{position:absolute; left:18px; bottom:18px; right:18px; display:flex; align-items:center; justify-content:space-between; gap:10px; padding:14px 14px; border-radius: 16px; border:1px solid rgba(255,255,255,.12); background: rgba(11,31,51,.60); backdrop-filter: blur(10px)}
        .badge strong{font-family:Orbitron, Inter, system-ui; letter-spacing:.4px}
        .badge span{color:var(--muted); font-weight:700; font-size:13px}
        .badge .mini{display:flex; flex-direction:column; gap:2px}

        .section-title{display:flex; flex-direction:column; gap:10px; margin-bottom:28px}
        .section-title.center{align-items:center; text-align:center}
        .section-title h2{margin:0; font-family:Orbitron, Inter, system-ui; font-size:30px; line-height:1.15}
        .section-title p{margin:0; color:var(--muted); line-height:1.7}
        .title-accent{color: var(--blue)}

        .cards{display:grid; grid-template-columns: repeat(3, 1fr); gap:16px}
        .card{border-radius: var(--radius); border:1px solid rgba(255,255,255,.12); background: rgba(255,255,255,.04); box-shadow: 0 18px 50px rgba(0,0,0,.22); padding:18px 18px}
        .card h3{margin:0 0 8px; font-size:16px; letter-spacing:.2px}
        .card p{margin:0 0 12px; color:var(--muted); line-height:1.6}
        .card ul{margin:0; padding-left:18px; color:rgba(234,240,255,.72)}
        .card li{margin:6px 0}

        .services-split{grid-template-columns: 1.1fr .9fr; align-items:center}
        .services-media{padding:0; overflow:hidden}
        .services-img{width:100%; height:360px; object-fit:cover; display:block; filter:saturate(1.05) contrast(1.05)}
        .services-points{display:grid; gap:18px}
        .service-point h3{margin:0 0 6px; font-size:16px; letter-spacing:.2px}
        .service-point p{margin:0; color:var(--muted); line-height:1.7; font-weight:600}

        .services-copy{padding:6px 0}
        .services-head{margin:0 0 12px; font-family:Orbitron, Inter, system-ui; font-size:34px; line-height:1.12}
        .services-accent{color: var(--blue)}
        .services-desc{margin:0 0 18px; color: rgba(255,255,255,.78); line-height:1.75; font-weight:650}
        .services-cta{display:flex; justify-content:flex-start}
        .services-cta-btn{min-width:280px; padding:16px 26px; font-size:16px}

        .accent{border-top:1px solid rgba(255,255,255,.10); border-bottom:1px solid rgba(255,255,255,.10); background: radial-gradient(900px 500px at 25% 25%, rgba(54,182,255,.16), transparent 60%), radial-gradient(900px 500px at 80% 30%, rgba(255,138,61,.14), transparent 60%), rgba(255,255,255,.02)}
        .accent-inner{display:grid; grid-template-columns: 1.1fr .9fr; gap:20px; align-items:center}
        .mini-cards{display:grid; grid-template-columns: repeat(3, 1fr); gap:12px}
        .mini-card{border-radius:16px; border:1px solid rgba(255,255,255,.12); background: rgba(255,255,255,.04); padding:14px}
        .mini-card strong{display:block; margin-bottom:6px}
        .mini-card span{color:var(--muted); font-weight:600; font-size:13px; line-height:1.5}

        .reasons{display:grid; gap:18px}
        .reasons-grid{display:grid; grid-template-columns: repeat(4, 1fr); gap:14px}
        .reason-card{border-radius:16px; border:1px solid rgba(255,255,255,.12); background: rgba(255,255,255,.04); padding:16px; display:flex; flex-direction:column; gap:10px; min-height:132px}
        .reason-ico{width:22px; height:22px; color: var(--blue)}
        .reason-text{margin:0; color: rgba(255,255,255,.78); line-height:1.55; font-weight:650; font-size:13px}
        .reason-text strong{color: var(--text); font-weight:900}
        .reasons-cta{display:flex; justify-content:center; margin-top:4px}

        .about-grid{grid-template-columns: 1.05fr .95fr; align-items:start}
        .pillars{display:grid; grid-template-columns: 1fr; gap:12px; margin-top:16px}
        .pillar{border-radius:16px; border:1px solid rgba(255,255,255,.12); background: rgba(255,255,255,.04); padding:16px}
        .pillar strong{display:block; margin-bottom:6px}
        .pillar span{color:var(--muted); font-weight:600; line-height:1.6}
        .profile{position:sticky; top:110px}
        .profile .card{padding:20px}
        .metrics{display:grid; grid-template-columns: repeat(3, 1fr); gap:14px; margin-top:14px}
        .metric{border-radius:16px; border:1px solid rgba(255,255,255,.12); background: rgba(255,255,255,.04); padding:14px}
        .metric strong{display:block; font-family:Orbitron, Inter, system-ui; font-size:18px; letter-spacing:.3px}
        .metric span{display:block; color:var(--muted); font-weight:700; font-size:13px; margin-top:4px}

        .testimonials{display:grid; grid-template-columns: repeat(3, 1fr); gap:16px}
        .stars{display:flex; gap:6px; margin-bottom:12px; color:#ffd36b}
        .quote{margin:0 0 14px; color:rgba(234,240,255,.80); line-height:1.7}
        .who{color:var(--muted); font-weight:800}
        .numbers{margin-top:18px; display:grid; grid-template-columns: repeat(3, 1fr); gap:12px}
        .number{border-radius:16px; border:1px solid rgba(255,255,255,.12); background: rgba(255,255,255,.04); padding:14px; display:flex; align-items:center; justify-content:space-between}
        .number strong{font-family:Orbitron, Inter, system-ui}
        .number span{color:var(--muted); font-weight:800}

        .faq{display:grid; grid-template-columns: 1.1fr .9fr; gap:16px; align-items:start}
        .faq-list{display:flex; flex-direction:column; gap:12px}
        .faq-item{border-radius:16px; border:1px solid rgba(255,255,255,.12); background: rgba(255,255,255,.04); overflow:hidden}
        .faq-q{width:100%; text-align:left; padding:16px; display:flex; justify-content:space-between; align-items:center; background:transparent; border:0; color:var(--text); font-weight:900; cursor:pointer}
        .faq-a{max-height:0; opacity:0; overflow:hidden; padding:0 16px; color:var(--muted); line-height:1.7; font-weight:600; transition:max-height .36s ease, opacity .22s ease, padding .22s ease}
        .faq-item[data-open="1"] .faq-a{opacity:1; padding:0 16px 16px}
        .faq-item[data-open="1"] .chev{transform: rotate(180deg)}
        .chev{transition: transform .18s ease}
        .faq-cta .card{position:sticky; top:110px}
        .faq-cta h3{margin:0 0 10px}

        .contact-grid{grid-template-columns: 1.05fr .95fr; align-items:start}
        .contact-list{display:grid; gap:10px; margin-top:12px}
        .contact-item{display:flex; gap:10px; align-items:flex-start; padding:12px; border-radius:16px; border:1px solid rgba(255,255,255,.10); background: rgba(255,255,255,.04)}
        .contact-item strong{display:block; margin-bottom:2px}
        .contact-item span, .contact-item a{color:var(--muted); font-weight:700; line-height:1.6}
        .social{display:flex; gap:12px; flex-wrap:wrap; margin-top:12px}
        .social a{display:inline-flex; align-items:center; gap:10px; padding:12px 14px; border-radius:999px; border:1px solid rgba(255,255,255,.12); background: rgba(255,255,255,.04); color:var(--muted); font-weight:800}
        .social a:hover{background: rgba(255,255,255,.08); color:var(--text)}

        footer{padding:48px 0 62px; border-top:1px solid rgba(255,255,255,.10); background: rgba(255,255,255,.02)}
        .footer-grid{display:grid; grid-template-columns: 1.2fr 1fr 1fr; gap:16px}
        .small{color:rgba(234,240,255,.58); font-weight:600; line-height:1.7; font-size:13px}
        .footer-list{margin:10px 0 0; padding-left:18px; color:rgba(234,240,255,.70)}
        .status{display:flex; align-items:center; gap:10px; margin-top:12px}
        .pulse{width:10px; height:10px; border-radius:999px; background:#37d67a; box-shadow: 0 0 0 rgba(55,214,122,.6); animation: pulse 1.6s infinite}
        @keyframes pulse{0%{box-shadow:0 0 0 0 rgba(55,214,122,.5)}70%{box-shadow:0 0 0 12px rgba(55,214,122,0)}100%{box-shadow:0 0 0 0 rgba(55,214,122,0)}}

        @media (max-width: 980px){
            .hero-grid, .accent-inner, .about-grid, .faq, .contact-grid{grid-template-columns: 1fr}
            .services-split{grid-template-columns: 1fr}
            .services-img{height:300px}
            .reasons-grid{grid-template-columns: repeat(2, 1fr)}
        }
        @media (max-width: 560px){
            h1{font-size:36px}
            .bullets{grid-template-columns: 1fr}
            .cards, .testimonials, .numbers, .mini-cards{grid-template-columns: 1fr}
            .reasons-grid{grid-template-columns: 1fr}
            .menu{display:none}
            .mobile-toggle{display:inline-flex; align-items:center; justify-content:center}
        }
        @media (max-width: 760px){
            h1{font-size:38px}
            .menu{display:none}
            .mobile-toggle{display:inline-flex; align-items:center; justify-content:center}
            .bullets{grid-template-columns: 1fr}
            .numbers, .metrics{grid-template-columns: 1fr}
        }
        @media (prefers-reduced-motion: reduce){
            html{scroll-behavior:auto}
            .btn-secondary:hover{transform:none}
            .pulse{animation:none}
            [data-hero-marquee] .hero-track{animation:none}
        }
    </style>
