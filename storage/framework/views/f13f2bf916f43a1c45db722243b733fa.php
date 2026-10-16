<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="NexGen helps ambitious businesses build better digital experiences with modern web development, cloud solutions, and thoughtful design.">
    <title>NexGen — Build What's Next</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        :root{--ink:#14221f;--muted:#62716d;--paper:#f7f8f4;--green:#b7f36b;--deep:#142d27;--line:#e4e9e1;--white:#fff}
        *{box-sizing:border-box}html{scroll-behavior:smooth}body{margin:0;background:var(--paper);color:var(--ink);font-family:'DM Sans',sans-serif;line-height:1.6}a{color:inherit;text-decoration:none}.wrap{width:min(1160px,calc(100% - 48px));margin:auto}
        header{height:82px;display:flex;align-items:center;border-bottom:1px solid var(--line);background:rgba(247,248,244,.94);position:sticky;top:0;z-index:20;backdrop-filter:blur(12px)}.nav{display:flex;align-items:center;justify-content:space-between;gap:28px}.brand{font:800 25px Manrope,sans-serif;letter-spacing:-1.2px;display:flex;align-items:center;gap:10px}.brand-mark{width:34px;height:34px;background:var(--green);border-radius:11px;display:grid;place-items:center;font-size:18px}.links{display:flex;align-items:center;gap:32px;color:#4c5c56;font-size:14px;font-weight:600}.links a:hover{color:#111}.nav-cta,.btn{display:inline-flex;align-items:center;justify-content:center;gap:10px;border-radius:999px;background:var(--deep);color:white;padding:13px 20px;font-size:14px;font-weight:700;transition:transform .2s,background .2s}.nav-cta:hover,.btn:hover{transform:translateY(-2px);background:#244a3f}.menu-toggle{display:none;border:0;background:transparent;font-size:25px}
        .hero{padding:88px 0 74px;overflow:hidden}.hero-grid{display:grid;grid-template-columns:1.06fr .94fr;align-items:center;gap:66px}.eyebrow{display:inline-flex;align-items:center;gap:9px;font-size:12px;font-weight:800;letter-spacing:1.5px;text-transform:uppercase;color:#486b3c}.dot{width:8px;height:8px;border-radius:50%;background:#78bd4a}.hero h1{font:800 clamp(44px,6.2vw,76px)/1.04 Manrope,sans-serif;letter-spacing:-4px;margin:22px 0 24px;max-width:670px}.hero h1 span{color:#639c40}.lead{max-width:525px;color:var(--muted);font-size:17px;line-height:1.85}.hero-actions{display:flex;align-items:center;gap:20px;margin-top:30px;flex-wrap:wrap}.btn{padding:16px 23px}.text-link{font-size:14px;font-weight:700;display:inline-flex;align-items:center;gap:8px}.proof{display:flex;align-items:center;gap:13px;margin-top:38px;color:var(--muted);font-size:12px}.avatars{display:flex}.avatars span{width:29px;height:29px;border:2px solid var(--paper);border-radius:50%;margin-left:-7px;background:#d7e7cc;display:grid;place-items:center;font-size:10px;font-weight:800;color:#34552b}.avatars span:first-child{margin-left:0;background:#e8d4be}.avatars span:nth-child(2){background:#c4d9e4}.avatars span:nth-child(3){background:#d6c7e8}
        .visual{min-height:430px;position:relative;display:grid;place-items:center}.orb{width:min(100%,430px);aspect-ratio:1;border-radius:48% 52% 54% 46%;background:var(--green);position:absolute;transform:rotate(-9deg)}.dashboard{position:relative;width:87%;background:#fff;border:1px solid #e7ece4;border-radius:20px;padding:23px;box-shadow:0 28px 70px #17392b1a;transform:rotate(3deg)}.dash-top{display:flex;align-items:center;justify-content:space-between;font-size:12px;font-weight:700}.dash-dots{display:flex;gap:5px}.dash-dots i{width:6px;height:6px;border-radius:50%;background:#d9e0d6}.dash-label{font-size:11px;color:#7a8980;margin-top:25px}.dash-value{font:800 36px Manrope,sans-serif;letter-spacing:-1.5px}.positive{color:#579438;font-size:11px;font-weight:700;margin-left:7px}.chart{height:120px;margin:15px 0 10px;display:flex;align-items:end;gap:9px;border-bottom:1px solid var(--line);background:repeating-linear-gradient(to bottom,transparent 0,transparent 39px,#edf1e9 40px)}.bar{flex:1;border-radius:6px 6px 0 0;background:#d8edc9}.bar:nth-child(2n){background:#9cce78}.bar:nth-child(3n){background:#609c45}.dash-bottom{display:grid;grid-template-columns:1fr 1fr;gap:12px}.metric{background:#f6f8f3;padding:13px;border-radius:12px}.metric small{display:block;color:#748178;font-size:10px}.metric strong{font:700 18px Manrope}.float-card{position:absolute;right:-3px;bottom:36px;background:white;padding:15px 18px;border-radius:14px;box-shadow:0 15px 40px #17392b18;font-size:12px;font-weight:700}.float-card b{display:block;font:800 24px Manrope;color:#609b41}
        .strip{border-top:1px solid var(--line);border-bottom:1px solid var(--line);padding:23px 0}.strip-inner{display:flex;justify-content:space-between;align-items:center;gap:20px;flex-wrap:wrap}.strip-label{font-size:11px;letter-spacing:1.2px;font-weight:800;color:#7b8980;text-transform:uppercase}.tech{display:flex;gap:28px;align-items:center;flex-wrap:wrap;color:#66756b;font:700 14px Manrope}.tech span{display:flex;gap:8px;align-items:center}.tech i{width:7px;height:7px;border-radius:2px;background:#9fcf7b}
        section{scroll-margin-top:95px}.section{padding:100px 0}.section-head{display:flex;justify-content:space-between;align-items:end;gap:30px;margin-bottom:42px}.section h2{font:800 clamp(32px,4vw,48px)/1.12 Manrope,sans-serif;letter-spacing:-2px;margin:13px 0 0}.section-head p{max-width:400px;color:var(--muted);margin:0}.cards{display:grid;grid-template-columns:repeat(3,1fr);gap:18px}.card{padding:28px;background:#fff;border:1px solid var(--line);border-radius:18px;min-height:245px;transition:transform .2s,border-color .2s}.card:hover{transform:translateY(-5px);border-color:#b9d5a8}.iconbox{width:46px;height:46px;border-radius:14px;background:#edf6e6;display:grid;place-items:center;font-size:22px}.card h3{font:700 20px Manrope;margin:23px 0 10px;letter-spacing:-.5px}.card p{font-size:14px;color:var(--muted);margin:0;line-height:1.8}
        .about{background:var(--deep);color:white}.about-grid{display:grid;grid-template-columns:1fr 1fr;gap:75px;align-items:center}.about .eyebrow{color:var(--green)}.about h2{font:800 clamp(34px,4.5vw,54px)/1.12 Manrope;letter-spacing:-2.5px;margin:18px 0}.about p{color:#c4d1c8;line-height:1.9}.stats{display:grid;grid-template-columns:1fr 1fr;gap:14px}.stat{border:1px solid #ffffff25;border-radius:17px;padding:25px}.stat strong{font:800 36px Manrope;color:var(--green);display:block;letter-spacing:-1px}.stat span{color:#c4d1c8;font-size:13px}
        .process{display:grid;grid-template-columns:repeat(3,1fr);gap:30px}.step{border-top:1px solid #dce4d8;padding-top:20px}.step-no{font:800 12px Manrope;color:#679c48;letter-spacing:1px}.step h3{font:700 21px Manrope;margin:14px 0 9px}.step p{font-size:14px;color:var(--muted);line-height:1.8;margin:0}
        .contact-box{background:var(--green);border-radius:24px;padding:55px;display:flex;align-items:center;justify-content:space-between;gap:30px}.contact-box h2{font:800 clamp(30px,4vw,46px)/1.12 Manrope;letter-spacing:-2px;margin:0 0 12px}.contact-box p{margin:0;color:#3f5835}.contact-box .btn{background:var(--deep);white-space:nowrap}
        footer{padding:28px 0;border-top:1px solid var(--line)}.footer-inner{display:flex;justify-content:space-between;align-items:center;gap:18px;flex-wrap:wrap}.footer-inner p{color:var(--muted);font-size:12px;margin:0}.footer-links{display:flex;gap:20px;font-size:12px;color:var(--muted)}
        @media(max-width:850px){.hero-grid{grid-template-columns:1fr;gap:15px}.hero{padding-top:62px}.visual{min-height:390px}.hero h1{letter-spacing:-2.7px}.section-head{align-items:start;flex-direction:column}.cards{grid-template-columns:1fr 1fr}.about-grid{gap:35px}.contact-box{padding:38px}}
        @media(max-width:620px){.wrap{width:min(100% - 32px,1160px)}header{height:70px}.menu-toggle{display:block}.links{display:none;position:absolute;top:69px;left:0;right:0;padding:20px 24px 24px;background:var(--paper);border-bottom:1px solid var(--line);flex-direction:column;align-items:stretch;gap:18px}.links.open{display:flex}.nav-cta{padding:10px 13px;font-size:12px}.brand{font-size:22px}.hero{padding:52px 0 45px}.hero h1{font-size:48px}.lead{font-size:15px}.visual{min-height:330px}.dashboard{padding:17px}.dash-value{font-size:29px}.float-card{right:-2px;bottom:17px}.strip-inner{align-items:flex-start;flex-direction:column}.tech{gap:15px}.section{padding:72px 0}.cards{grid-template-columns:1fr}.card{min-height:auto}.about-grid{grid-template-columns:1fr}.stats{gap:10px}.stat{padding:18px}.stat strong{font-size:30px}.process{grid-template-columns:1fr;gap:25px}.contact-box{padding:30px 24px;align-items:flex-start;flex-direction:column}.contact-box .btn{white-space:normal}.footer-inner{align-items:flex-start;flex-direction:column}}
    </style>
</head>
<body>
<header>
    <div class="wrap nav">
        <a class="brand" href="#home" aria-label="NexGen home"><span class="brand-mark">N</span>NexGen</a>
        <button class="menu-toggle" aria-label="Toggle navigation" aria-expanded="false" onclick="const n=document.querySelector('.links');n.classList.toggle('open');this.setAttribute('aria-expanded',n.classList.contains('open'))">☰</button>
        <nav class="links" aria-label="Main navigation">
            <a href="#services">Services</a><a href="#about">About</a><a href="#process">Our process</a><a href="#contact">Contact</a>
        </nav>
        <a class="nav-cta" href="#contact">Let's talk <span>↗</span></a>
    </div>
</header>
<main>
    <section class="hero" id="home">
        <div class="wrap hero-grid">
            <div>
                <div class="eyebrow"><span class="dot"></span> Technology · Strategy · Growth</div>
                <h1>Build what's <span>next.</span></h1>
                <p class="lead">We help ambitious teams turn big ideas into thoughtful digital products, smarter systems, and experiences people love to use.</p>
                <div class="hero-actions"><a class="btn" href="#services">Explore our services <span>↗</span></a><a class="text-link" href="#about">Get to know us <span>→</span></a></div>
                <div class="proof"><div class="avatars"><span>NG</span><span>UX</span><span>IT</span></div><span>Good ideas deserve great execution.</span></div>
            </div>
            <div class="visual" aria-label="Illustration of a business analytics dashboard">
                <div class="orb"></div>
                <div class="dashboard">
                    <div class="dash-top"><span>NEXGEN / OVERVIEW</span><span class="dash-dots"><i></i><i></i><i></i></span></div>
                    <div class="dash-label">Digital growth index</div><div class="dash-value">+38.6% <span class="positive">↗ on track</span></div>
                    <div class="chart" aria-hidden="true"><span class="bar" style="height:35%"></span><span class="bar" style="height:48%"></span><span class="bar" style="height:40%"></span><span class="bar" style="height:62%"></span><span class="bar" style="height:54%"></span><span class="bar" style="height:75%"></span><span class="bar" style="height:68%"></span><span class="bar" style="height:93%"></span></div>
                    <div class="dash-bottom"><div class="metric"><small>Projects delivered</small><strong>24+</strong></div><div class="metric"><small>Client satisfaction</small><strong>98%</strong></div></div>
                </div>
                <div class="float-card"><b>01 — 03</b> Ideas into impact</div>
            </div>
        </div>
    </section>
    <div class="strip"><div class="wrap strip-inner"><span class="strip-label">Built for the modern world</span><div class="tech"><span><i></i> Web development</span><span><i></i> Cloud solutions</span><span><i></i> Digital strategy</span><span><i></i> Product design</span></div></div></div>
    <section class="section" id="services">
        <div class="wrap">
            <div class="section-head"><div><div class="eyebrow"><span class="dot"></span> What we do</div><h2>Digital, made<br>meaningful.</h2></div><p>From the first sketch to the final launch, we bring strategy, design, and technology together to solve real business challenges.</p></div>
            <div class="cards">
                <article class="card"><div class="iconbox">⌘</div><h3>Web Development</h3><p>Fast, reliable, and accessible web experiences built around your users and business goals.</p></article>
                <article class="card"><div class="iconbox">✳</div><h3>Product &amp; UI/UX</h3><p>Clear user journeys and considered interfaces that make complex things feel simple.</p></article>
                <article class="card"><div class="iconbox">↗</div><h3>Cloud &amp; Automation</h3><p>Modern infrastructure and smarter workflows that help your team work with confidence.</p></article>
            </div>
        </div>
    </section>
    <section class="section about" id="about">
        <div class="wrap about-grid">
            <div><div class="eyebrow"><span class="dot"></span> A better way forward</div><h2>Technology should move your business forward.</h2><p>NexGen is a technology-focused team built around one simple idea: the best digital solutions begin with understanding people. We pair practical thinking with modern engineering to create work that lasts.</p><a class="btn" href="#contact" style="background:var(--green);color:var(--deep);margin-top:14px">Work with NexGen <span>↗</span></a></div>
            <div class="stats"><div class="stat"><strong>01</strong><span>Collaborative by design</span></div><div class="stat"><strong>02</strong><span>Built around your goals</span></div><div class="stat"><strong>03</strong><span>Focused on real outcomes</span></div><div class="stat"><strong>∞</strong><span>Always learning, always improving</span></div></div>
        </div>
    </section>
    <section class="section" id="process">
        <div class="wrap">
            <div class="section-head"><div><div class="eyebrow"><span class="dot"></span> How we work</div><h2>Simple steps.<br>Strong outcomes.</h2></div><p>A transparent, collaborative process keeps the work focused and the next step clear.</p></div>
            <div class="process"><article class="step"><span class="step-no">STEP 01</span><h3>Discover</h3><p>We learn about your goals, your users, and the challenge you want to solve.</p></article><article class="step"><span class="step-no">STEP 02</span><h3>Design &amp; build</h3><p>We shape the right solution, test ideas early, and build with care.</p></article><article class="step"><span class="step-no">STEP 03</span><h3>Launch &amp; grow</h3><p>We launch thoughtfully, learn from feedback, and improve over time.</p></article></div>
        </div>
    </section>
    <section class="section" id="contact">
        <div class="wrap"><div class="contact-box"><div><h2>Have a big idea?<br>Let's make it real.</h2><p>Tell us what you're working on. Your next chapter can start here.</p></div><a class="btn" href="mailto:hello@nexgen.example">Start a conversation <span>↗</span></a></div></div>
    </section>
</main>
<footer><div class="wrap footer-inner"><a class="brand" href="#home"><span class="brand-mark">N</span>NexGen</a><p>© <?php echo e(date('Y')); ?> NexGen. Built with purpose.</p><div class="footer-links"><a href="#services">Services</a><a href="#about">About</a><a href="#contact">Contact</a></div></div></footer>
</body>
</html>
<?php /**PATH C:\Users\New User\Downloads\NexGen\resources\views/welcome.blade.php ENDPATH**/ ?>