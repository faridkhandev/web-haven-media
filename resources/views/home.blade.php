<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#f4faf5">
    <meta name="description" content="Build practical digital skills with Web Haven Academy. Learn, create, and turn your skills into opportunity.">
    <title>{{ config('app.name', 'Web Haven Media') }} | Learn, Create, Earn</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700;800&family=Noto+Sans+Bengali:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            color-scheme: light;
            --ink: #17332d;
            --muted: #59716a;
            --paper: #f4faf5;
            --white: #fff;
            --green: #167c63;
            --green-dark: #105743;
            --lime: #d9ef79;
            --coral: #e77c62;
            --line: #dce8df;
            --display: "DM Sans", sans-serif;
            --body: "DM Sans", "Noto Sans Bengali", sans-serif;
        }

        * { box-sizing: border-box; }
        html { scroll-behavior: smooth; }
        body {
            margin: 0;
            color: var(--ink);
            background: var(--paper);
            font-family: var(--body);
            -webkit-font-smoothing: antialiased;
        }
        a { color: inherit; text-decoration: none; }
        a:focus-visible { outline: 3px solid var(--coral); outline-offset: 4px; }
        img { display: block; max-width: 100%; }
        .wrap { width: min(1160px, calc(100% - 48px)); margin-inline: auto; }
        .site-header { position: relative; z-index: 5; border-bottom: 1px solid rgba(23, 51, 45, .1); }
        .nav-bar { min-height: 82px; display: flex; align-items: center; justify-content: space-between; gap: 24px; }
        .brand { display: inline-flex; align-items: center; gap: 11px; font-weight: 800; line-height: 1.05; }
        .brand-mark {
            width: 42px; height: 42px; display: grid; place-items: center;
            color: var(--ink); background: var(--lime); border-radius: 13px;
            font-family: var(--display); font-size: 15px; letter-spacing: 0;
        }
        .brand-name { display: block; font-size: 15px; }
        .brand-note { display: block; margin-top: 4px; color: var(--muted); font-size: 10px; font-weight: 600; }
        .nav-links { display: flex; align-items: center; gap: 30px; color: #435f56; font-size: 13px; font-weight: 600; }
        .nav-links a:hover, .footer-links a:hover { color: var(--green); }
        .nav-cta, .button {
            min-height: 46px; display: inline-flex; align-items: center; justify-content: center; gap: 10px;
            padding: 0 19px; border: 1px solid transparent; border-radius: 6px;
            font-size: 13px; font-weight: 700; transition: transform .2s ease, background-color .2s ease;
        }
        .nav-cta, .button-primary { color: white; background: var(--green); }
        .nav-cta:hover, .button-primary:hover { background: var(--green-dark); transform: translateY(-2px); }
        .button-light { color: var(--ink); background: white; border-color: var(--line); }
        .button-light:hover { border-color: var(--green); transform: translateY(-2px); }

        .hero {
            position: relative; overflow: hidden; padding: 76px 0 58px;
            background-color: #edf6ed;
            background-image: linear-gradient(rgba(22, 124, 99, .035) 1px, transparent 1px), linear-gradient(90deg, rgba(22, 124, 99, .035) 1px, transparent 1px);
            background-size: 34px 34px;
        }
        .hero-grid { display: grid; grid-template-columns: 1.02fr .98fr; align-items: center; gap: 60px; }
        .hero-copy { animation: enter .65s both; }
        .eyebrow { display: inline-flex; align-items: center; gap: 9px; color: var(--green); font-size: 11px; font-weight: 800; letter-spacing: 1.3px; text-transform: uppercase; }
        .eyebrow::before { width: 23px; height: 2px; background: var(--coral); content: ""; }
        h1, h2, h3, p { margin-top: 0; }
        .hero h1 { max-width: 600px; margin: 20px 0 18px; font-family: var(--display); font-size: 66px; font-weight: 800; line-height: .99; letter-spacing: 0; }
        .hero h1 span { color: var(--green); }
        .hero-desc { max-width: 540px; margin-bottom: 25px; color: #4b655c; font-family: "Noto Sans Bengali", var(--body); font-size: 15px; line-height: 1.9; }
        .hero-actions { display: flex; flex-wrap: wrap; gap: 11px; }
        .hero-proof { display: flex; align-items: center; gap: 13px; margin-top: 34px; padding-top: 20px; border-top: 1px solid #cddfd1; }
        .proof-dots { display: flex; padding-left: 2px; }
        .proof-dots span { width: 27px; height: 27px; margin-left: -3px; border: 2px solid #edf6ed; border-radius: 50%; background: var(--green); }
        .proof-dots span:nth-child(2) { background: var(--coral); }
        .proof-dots span:nth-child(3) { background: #5473a0; }
        .proof-dots span:nth-child(4) { background: #dbb54e; }
        .proof-copy { color: var(--muted); font-size: 11px; line-height: 1.5; }
        .proof-copy strong { color: var(--ink); }
        .hero-visual { position: relative; min-height: 460px; animation: enter .75s .1s both; }
        .hero-image { width: 100%; height: 460px; object-fit: cover; border-radius: 8px; }
        .image-note {
            position: absolute; right: -20px; bottom: 25px; max-width: 225px; padding: 17px 19px;
            color: var(--ink); background: var(--lime); border-radius: 5px;
            font-size: 12px; font-weight: 700; line-height: 1.5; box-shadow: 0 12px 30px rgba(23, 51, 45, .12);
        }
        .image-note span { display: block; margin-bottom: 5px; color: var(--green-dark); font-size: 10px; letter-spacing: .8px; text-transform: uppercase; }
        .feature-band { background: var(--white); border-bottom: 1px solid var(--line); }
        .feature-row { display: grid; grid-template-columns: repeat(3, 1fr); }
        .feature { display: flex; align-items: center; gap: 15px; min-height: 102px; padding: 20px 26px; }
        .feature + .feature { border-left: 1px solid var(--line); }
        .feature-symbol { width: 39px; height: 39px; flex: 0 0 39px; display: grid; place-items: center; color: var(--green-dark); background: #e9f3e6; border-radius: 6px; font-size: 18px; }
        .feature strong { display: block; margin-bottom: 3px; font-size: 13px; }
        .feature small { color: var(--muted); font-size: 11px; }

        .section { padding: 88px 0; }
        .section-heading { max-width: 660px; margin-bottom: 42px; }
        .section-heading h2 { margin: 13px 0 12px; font-family: var(--display); font-size: 39px; line-height: 1.12; letter-spacing: 0; }
        .section-heading p { margin-bottom: 0; color: var(--muted); font-family: "Noto Sans Bengali", var(--body); font-size: 14px; line-height: 1.9; }
        .about-grid { display: grid; grid-template-columns: .92fr 1.08fr; align-items: center; gap: 64px; }
        .about-image { width: 100%; height: 450px; object-fit: cover; border-radius: 8px; }
        .about-copy h2 { margin: 13px 0 17px; font-family: var(--display); font-size: 39px; line-height: 1.1; letter-spacing: 0; }
        .about-copy p { color: var(--muted); font-family: "Noto Sans Bengali", var(--body); font-size: 13px; line-height: 1.95; }
        .about-copy p:last-of-type { margin-bottom: 23px; }
        .impact { padding: 70px 0; color: white; background: #173b33; }
        .impact-grid { display: grid; grid-template-columns: 1fr 1fr; align-items: center; gap: 60px; }
        .impact .eyebrow { color: var(--lime); }
        .impact h2 { max-width: 540px; margin: 13px 0 16px; font-family: var(--display); font-size: 39px; line-height: 1.12; letter-spacing: 0; }
        .impact p { color: #d0e0d6; font-family: "Noto Sans Bengali", var(--body); font-size: 13px; line-height: 1.9; }
        .impact-links { display: flex; flex-wrap: wrap; gap: 10px; margin-top: 23px; }
        .impact .button-primary { color: var(--ink); background: var(--lime); }
        .impact .button-primary:hover { background: #e7f99a; }
        .impact .button-light { color: white; background: transparent; border-color: #668078; }
        .impact .button-light:hover { border-color: white; }
        .impact-image { width: 100%; height: 370px; object-fit: cover; border-radius: 8px; }

        .courses { background: #eaf3ec; }
        .courses-head { display: flex; align-items: end; justify-content: space-between; gap: 24px; }
        .courses-head .section-heading { margin-bottom: 38px; }
        .course-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 19px; }
        .course-card { overflow: hidden; background: white; border: 1px solid #dce8df; border-radius: 6px; transition: transform .2s ease, box-shadow .2s ease; }
        .course-card:hover { transform: translateY(-4px); box-shadow: 0 14px 30px rgba(23, 51, 45, .1); }
        .course-image { width: 100%; height: 190px; object-fit: cover; }
        .course-content { padding: 19px 19px 20px; }
        .course-category { display: block; margin-bottom: 9px; color: var(--green); font-size: 10px; font-weight: 800; letter-spacing: 1px; text-transform: uppercase; }
        .course-content h3 { margin-bottom: 8px; font-family: var(--display); font-size: 19px; letter-spacing: 0; }
        .course-content p { min-height: 42px; margin-bottom: 16px; color: var(--muted); font-family: "Noto Sans Bengali", var(--body); font-size: 11px; line-height: 1.7; }
        .course-link { display: inline-flex; align-items: center; gap: 8px; color: var(--green-dark); font-size: 11px; font-weight: 800; }
        .course-link:hover { color: var(--coral); }

        .community { padding: 70px 0; background: var(--paper); }
        .community-inner { display: flex; align-items: center; justify-content: space-between; gap: 32px; padding: 35px 40px; border: 1px solid var(--line); border-radius: 8px; background: white; }
        .community-inner h2 { margin: 10px 0 8px; font-family: var(--display); font-size: 29px; letter-spacing: 0; }
        .community-inner p { max-width: 600px; margin-bottom: 0; color: var(--muted); font-family: "Noto Sans Bengali", var(--body); font-size: 12px; line-height: 1.8; }
        .community-actions { display: flex; flex: 0 0 auto; flex-wrap: wrap; gap: 9px; }
        .credentials { color: #d5e1db; background: #101f1b; }
        .credential-row { min-height: 70px; display: flex; align-items: center; justify-content: space-between; gap: 20px; font-size: 11px; }
        .credential-row strong { color: white; }
        .credential-row span { color: var(--lime); }
        .site-footer { padding: 38px 0; color: white; background: #0b1815; }
        .footer-row { display: flex; align-items: center; justify-content: space-between; gap: 24px; }
        .site-footer .brand-note { color: #9ab0a6; }
        .site-footer .brand-mark { color: var(--ink); }
        .footer-links { display: flex; flex-wrap: wrap; gap: 22px; color: #c4d1ca; font-size: 11px; }
        .copyright { margin: 20px 0 0; padding-top: 17px; border-top: 1px solid #293a34; color: #9ab0a6; font-size: 10px; }

        @keyframes enter { from { opacity: 0; transform: translateY(14px); } to { opacity: 1; transform: translateY(0); } }
        @media (max-width: 900px) {
            .wrap { width: min(100% - 40px, 720px); }
            .nav-bar { min-height: 72px; flex-wrap: wrap; padding: 12px 0; }
            .nav-links { order: 3; width: 100%; justify-content: space-between; padding: 8px 0 2px; }
            .hero { padding: 52px 0 42px; }
            .hero-grid { grid-template-columns: 1fr 1fr; gap: 28px; }
            .hero h1 { font-size: 52px; }
            .hero-visual, .hero-image { min-height: 390px; height: 390px; }
            .image-note { right: -8px; }
            .about-grid, .impact-grid { gap: 34px; }
            .about-image { height: 390px; }
            .course-grid { grid-template-columns: repeat(2, 1fr); }
        }
        @media (max-width: 620px) {
            .wrap { width: calc(100% - 36px); }
            .nav-bar { gap: 12px; }
            .brand-mark { width: 38px; height: 38px; }
            .nav-cta { min-height: 40px; padding: 0 12px; font-size: 11px; }
            .nav-links { gap: 8px; font-size: 11px; }
            .hero { padding: 42px 0 32px; }
            .hero-grid { grid-template-columns: 1fr; gap: 30px; }
            .hero h1 { margin-top: 15px; font-size: 47px; }
            .hero-desc { font-size: 13px; }
            .hero-visual, .hero-image { min-height: 330px; height: 330px; }
            .hero-proof { margin-top: 25px; }
            .image-note { right: 10px; bottom: 12px; max-width: 190px; }
            .feature-row { grid-template-columns: 1fr; }
            .feature { min-height: 76px; padding: 14px 0; }
            .feature + .feature { border-top: 1px solid var(--line); border-left: 0; }
            .section { padding: 62px 0; }
            .section-heading { margin-bottom: 30px; }
            .section-heading h2, .about-copy h2, .impact h2 { font-size: 31px; }
            .about-grid, .impact-grid { grid-template-columns: 1fr; gap: 28px; }
            .about-image { height: 300px; }
            .impact { padding: 58px 0; }
            .impact-image { height: 280px; }
            .courses-head { display: block; }
            .courses-head .section-heading { margin-bottom: 27px; }
            .course-grid { grid-template-columns: 1fr; gap: 14px; }
            .course-image { height: 210px; }
            .course-content p { min-height: 0; }
            .community { padding: 48px 0; }
            .community-inner { align-items: flex-start; flex-direction: column; padding: 25px 21px; }
            .community-inner h2 { font-size: 25px; }
            .credential-row { align-items: flex-start; flex-direction: column; justify-content: center; gap: 9px; padding: 17px 0; }
            .footer-row { align-items: flex-start; flex-direction: column; }
            .footer-links { gap: 16px; }
        }
        @media (prefers-reduced-motion: reduce) {
            *, *::before, *::after { scroll-behavior: auto !important; animation-duration: .01ms !important; animation-iteration-count: 1 !important; transition-duration: .01ms !important; }
        }
    </style>
</head>
<body>
    <header class="site-header">
        <div class="wrap nav-bar">
            <a class="brand" href="#top" aria-label="Web Haven Media home">
                <span class="brand-mark" aria-hidden="true">WH</span>
                <span><span class="brand-name">Web Haven Media</span><span class="brand-note">Learn · Create · Earn</span></span>
            </a>
            <nav class="nav-links" aria-label="Main navigation">
                <a href="#about">Our purpose</a>
                <a href="#courses">Courses</a>
                <a href="#community">Community</a>
            </nav>
            <a class="nav-cta" href="#courses">Explore courses <span aria-hidden="true">↗</span></a>
        </div>
    </header>

    <main id="top">
        <section class="hero" aria-labelledby="hero-title">
            <div class="wrap hero-grid">
                <div class="hero-copy">
                    <span class="eyebrow">Web Haven Academy</span>
                    <h1 id="hero-title">Learn. Create.<br><span>Earn.</span></h1>
                    <p class="hero-desc" lang="bn">WebHaven Academy একটি আধুনিক ডিজিটাল স্কিল শেখার প্ল্যাটফর্ম। বাস্তব প্রজেক্ট, মেন্টরশিপ এবং লাইভ সাপোর্টের মাধ্যমে ডিজিটাল মার্কেটিং, কনটেন্ট ক্রিয়েশন ও AI টুল ব্যবহারের দক্ষতা গড়ে তুলুন।</p>
                    <div class="hero-actions">
                        <a class="button button-primary" href="#courses">View courses <span aria-hidden="true">↗</span></a>
                        <a class="button button-light" href="#about">Our purpose</a>
                    </div>
                    <div class="hero-proof" aria-label="Practical learning with mentor support">
                        <div class="proof-dots" aria-hidden="true"><span></span><span></span><span></span><span></span></div>
                        <div class="proof-copy"><strong>Learn by doing</strong><br>Practical skills with real support</div>
                    </div>
                </div>
                <div class="hero-visual">
                    <img class="hero-image" src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&amp;fit=crop&amp;w=1300&amp;q=85" alt="Students collaborating around a table" fetchpriority="high">
                    <div class="image-note"><span>Your next chapter starts here</span>Skills that open doors to real work.</div>
                </div>
            </div>
        </section>

        <section class="feature-band" aria-label="Learning benefits">
            <div class="wrap feature-row">
                <div class="feature"><span class="feature-symbol" aria-hidden="true">✳</span><div><strong>Expert instructors</strong><small>Learn from working professionals</small></div></div>
                <div class="feature"><span class="feature-symbol" aria-hidden="true">↗</span><div><strong>Practical projects</strong><small>Build experience as you learn</small></div></div>
                <div class="feature"><span class="feature-symbol" aria-hidden="true">∞</span><div><strong>Learn at your pace</strong><small>Guidance and ongoing support</small></div></div>
            </div>
        </section>

        <section class="section" id="about">
            <div class="wrap about-grid">
                <img class="about-image" src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?auto=format&amp;fit=crop&amp;w=1000&amp;q=85" alt="A learner working on a laptop" loading="lazy">
                <div class="about-copy">
                    <span class="eyebrow">Skills with purpose</span>
                    <h2>Opportunity should be within reach.</h2>
                    <p lang="bn">Web Haven Academy-এর লক্ষ্য নারী ও শিক্ষার্থীদের দক্ষতাকে বাস্তব কাজে লাগানোর সুযোগ তৈরি করা। সঠিক দিকনির্দেশনা ও উপযুক্ত প্ল্যাটফর্মের মাধ্যমে শিক্ষার্থীরা অনলাইনভিত্তিক দক্ষতা শেখে এবং পার্ট-টাইম কাজের অভিজ্ঞতা অর্জন করে।</p>
                    <p lang="bn">ক্ষুদ্র ব্যবসাগুলোর জন্য আমরা ডিজিটাল প্রচার, কনটেন্ট তৈরি ও মার্কেটিং সহায়তা দিতে চাই। শিক্ষার্থীরা বাস্তব কাজের মাধ্যমে অভিজ্ঞতা পায়, আর ব্যবসাগুলো অনলাইনে পরিচিতি ও বিক্রির সুযোগ বাড়ায়।</p>
                    <p lang="bn">নারীদের হস্তশিল্প, সেলাই, নকশিকাঁথা ও হাতে তৈরি পণ্য অনলাইনে তুলে ধরে নতুন বাজারের সঙ্গে যুক্ত করাও আমাদের উদ্যোগের অংশ।</p>
                    <a class="button button-primary" href="#community">Meet the community <span aria-hidden="true">↗</span></a>
                </div>
            </div>
        </section>

        <section class="impact" aria-labelledby="impact-title">
            <div class="wrap impact-grid">
                <div>
                    <span class="eyebrow">Learn together, grow together</span>
                    <h2 id="impact-title">A skill becomes powerful when you put it to work.</h2>
                    <p lang="bn">শেখা, তৈরি করা ও কাজের সুযোগ—এই তিনটিকে যুক্ত করে Web Haven Academy। নিজের কাজের নমুনা তৈরি করুন, মেন্টরের কাছ থেকে দিকনির্দেশনা নিন, আর শেখা দক্ষতাকে এগিয়ে যাওয়ার পথে ব্যবহার করুন।</p>
                    <div class="impact-links">
                        <a class="button button-primary" href="https://youtube.com/@webhavenacademy-p1y" target="_blank" rel="noopener noreferrer">Watch on YouTube <span aria-hidden="true">↗</span></a>
                        <a class="button button-light" href="https://www.facebook.com/share/1CCgfmjC7C/" target="_blank" rel="noopener noreferrer">Join Facebook group <span aria-hidden="true">↗</span></a>
                    </div>
                </div>
                <img class="impact-image" src="https://images.unsplash.com/photo-1521737711867-e3b97375f902?auto=format&amp;fit=crop&amp;w=1100&amp;q=85" alt="A small team sharing ideas around a laptop" loading="lazy">
            </div>
        </section>

        <section class="section courses" id="courses">
            <div class="wrap">
                <div class="courses-head">
                    <div class="section-heading">
                        <span class="eyebrow">Build your next skill</span>
                        <h2>Learn something you can use.</h2>
                        <p lang="bn">নিজের আগ্রহ ও লক্ষ্য অনুযায়ী হাতে-কলমে শেখার বিষয় বেছে নিন।</p>
                    </div>
                    <a class="button button-light" href="#community">Ask about a course <span aria-hidden="true">↗</span></a>
                </div>
                @php
                    $courses = [
                        ['name' => 'Digital Marketing', 'category' => 'Grow online', 'description' => 'Learn the foundations of marketing for social and digital platforms.', 'image' => 'photo-1460925895917-afdab827c52f'],
                        ['name' => 'Spoken English', 'category' => 'Communicate', 'description' => 'Build confidence for everyday conversations and work.', 'image' => 'photo-1516321318423-f06f85e504b3'],
                        ['name' => 'Reselling', 'category' => 'Start selling', 'description' => 'Explore online selling, product presentation and customer care.', 'image' => 'photo-1556742049-0cfed4f6a45d'],
                        ['name' => 'Photo Making', 'category' => 'Create', 'description' => 'Practice visual storytelling and product photography.', 'image' => 'photo-1452587925148-ce544e77e70d'],
                        ['name' => 'Video Making', 'category' => 'Create', 'description' => 'Plan and produce clear, engaging short-form videos.', 'image' => 'photo-1492619375914-88005aa9e8fb'],
                        ['name' => 'Data Entry', 'category' => 'Work online', 'description' => 'Develop accuracy and confidence with everyday digital tools.', 'image' => 'photo-1498050108023-c5249f4df085'],
                    ];
                @endphp
                <div class="course-grid">
                    @foreach ($courses as $course)
                        <article class="course-card">
                            <img class="course-image" src="https://images.unsplash.com/{{ $course['image'] }}?auto=format&amp;fit=crop&amp;w=800&amp;q=80" alt="{{ $course['name'] }} course" loading="lazy">
                            <div class="course-content">
                                <span class="course-category">{{ $course['category'] }}</span>
                                <h3>{{ $course['name'] }}</h3>
                                <p>{{ $course['description'] }}</p>
                                <a class="course-link" href="#community">Ask about this course <span aria-hidden="true">→</span></a>
                            </div>
                        </article>
                    @endforeach
                </div>
            </div>
        </section>

        <section class="community" id="community">
            <div class="wrap community-inner">
                <div>
                    <span class="eyebrow">Web Haven community</span>
                    <h2>Make your next move with us.</h2>
                    <p lang="bn">কোর্স, মেন্টরশিপ বা শেখার সুযোগ সম্পর্কে জানতে আমাদের কমিউনিটিতে যুক্ত হোন।</p>
                </div>
                <div class="community-actions">
                    <a class="button button-primary" href="https://www.facebook.com/share/1CCgfmjC7C/" target="_blank" rel="noopener noreferrer">Join Facebook <span aria-hidden="true">↗</span></a>
                    <a class="button button-light" href="https://youtube.com/@webhavenacademy-p1y" target="_blank" rel="noopener noreferrer">YouTube channel <span aria-hidden="true">↗</span></a>
                </div>
            </div>
        </section>

        <aside class="credentials" aria-label="Business credentials">
            <div class="wrap credential-row">
                <div>Trade licence no: <strong>SSNOCIAEI67918439N</strong></div>
                <div>ISO certificate no: <strong>WHA/QMS/IND/2026/0214-7789</strong></div>
            </div>
        </aside>
    </main>

    <footer class="site-footer">
        <div class="wrap">
            <div class="footer-row">
                <a class="brand" href="#top" aria-label="Web Haven Media, back to top">
                    <span class="brand-mark" aria-hidden="true">WH</span>
                    <span><span class="brand-name">Web Haven Media</span><span class="brand-note">Learn · Create · Earn</span></span>
                </a>
                <nav class="footer-links" aria-label="Footer navigation">
                    <a href="#about">Our purpose</a><a href="#courses">Courses</a><a href="#community">Community</a>
                    <a href="https://www.facebook.com/share/1CCgfmjC7C/" target="_blank" rel="noopener noreferrer">Facebook ↗</a>
                </nav>
            </div>
            <p class="copyright">© {{ date('Y') }} Web Haven Media. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>