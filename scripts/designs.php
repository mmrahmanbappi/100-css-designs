<?php
// Content for every design. Add new categories and designs here, then run: php scripts/build.php
// Copy rules: plain human language, no em dashes, no icons or emoji, readers aged 25 to 50.

$SITE = [
    'name' => '100 CSS Designs',
    'base' => 'https://mmrahmanbappi.github.io/100-css-designs/',
    'repo' => 'https://github.com/mmrahmanbappi/100-css-designs',
    'author' => 'mmrahmanbappi',
    'author_url' => 'https://github.com/mmrahmanbappi',
    'published' => '2026-09-23',
];

$CATEGORIES = [
    [
        'num' => 1,
        'slug' => '01-soft-tactile-ui',
        'name' => 'Soft and Tactile UI',
        'ready' => true,
        'keywords' => 'soft ui css, glassmorphism, neumorphism, claymorphism, css templates free',
        'title' => 'Soft and Tactile UI CSS Templates: Glassmorphism, Neumorphism and More (Free)',
        'desc' => '10 free soft UI CSS templates with live demos. Glassmorphism, liquid glass, neumorphism, claymorphism and more. Each one is a single HTML file you can download.',
        'intro' => 'Soft UI is the family of styles that makes a screen feel like you could touch it. Frosted glass, puffy clay, pressable keys, paper you could pick up. These designs are popular right now because they make apps feel friendly and calm, and modern CSS can do all of it without images or plugins. Every template below is one HTML file. Open the demo, and if you like it, download it and make it yours.',
    ],
    [
        'num' => 2,
        'slug' => '02-bold-raw',
        'name' => 'Bold and Raw',
        'ready' => true,
        'title' => 'Bold and Raw CSS Templates: Neo Brutalism, Y2K, Swiss and More (Free)',
        'desc' => '10 free bold CSS templates with live demos. Neo brutalism, raw brutalist, Swiss grid, Y2K, Memphis, pixel, newspaper and risograph. Single HTML file each.',
        'keywords' => 'neo brutalism template, brutalist website, swiss style css, y2k website, memphis design, risograph css',
        'intro' => 'These are the styles that refuse to be polite. Thick borders, huge type, clashing fonts, chrome letters, pixel art and ink that looks freshly printed. Bold designs are popular because they get remembered, and in a sea of look alike websites that matters. Each template below is one HTML file with a live demo. Pick the one that fits your brand and make it yours.',
    ],
    [
        'num' => 3,
        'slug' => '03-layout-patterns',
        'name' => 'Layout Patterns',
        'ready' => true,
        'keywords' => 'bento grid template, masonry css, split screen layout, scrollytelling, horizontal scroll css, css layout templates',
        'title' => 'CSS Layout Templates: Bento Grid, Masonry, Split Screen and More (Free)',
        'desc' => '10 free CSS layout templates with live demos. Bento grid, masonry, split screen, broken grid, scrollytelling, carousel and more. Single HTML file each.',
        'intro' => 'A good layout decides what people see first and what they do next. These ten patterns cover the layouts people ask for most: bento grids for product pages, masonry for photos, split screens for restaurants, scrollytelling for stories and more. Every one is built with modern CSS Grid, Flexbox and scroll snap, with little or no JavaScript. Open the demo, then download the single HTML file.',
    ],
    [
        'num' => 4,
        'slug' => '04-ai-era-interfaces',
        'name' => 'AI Era Interfaces',
        'ready' => true,
        'keywords' => 'ai chat ui template, ai dashboard template, prompt box ui, ai landing page, command palette css, streaming text effect',
        'title' => 'AI Interface Templates: Chat UI, AI Dashboard, Prompt Box and More (Free)',
        'desc' => '10 free AI interface templates with live demos. Chat UI, AI dashboard with command palette, prompt box hero, node workflow, streaming text and more.',
        'intro' => 'AI products have their own design language now. A chat window with suggestion chips, a prompt box instead of a hero image, text that streams in word by word, a canvas of connected steps, and a dark interface that glows. These ten templates cover the patterns people use most, and many already work: you can type, drag, press Ctrl K and watch text stream. Plug in your own AI and ship.',
    ],
    [
        'num' => 5,
        'slug' => '05-color-light',
        'name' => 'Color and Light',
        'ready' => true,
        'keywords' => 'css gradient templates, dark mode toggle, neon css, duotone css, grainy gradient, glow border css',
        'title' => 'CSS Color Templates: Gradients, Dark Mode, Neon, Duotone and More (Free)',
        'desc' => '10 free CSS color and light templates with live demos. Aurora gradient, duotone, monochrome, dark mode toggle, neon, pastel, grain and glow borders.',
        'intro' => 'Color is usually the first thing people remember about a site. This category covers the palettes and light effects people search for most: soft aurora gradients, two color duotone photos, a whole site from one color, dark mode with a real toggle, neon glow, pastel shops, accessible high contrast, film grain and borders that glow. Each one shows the exact CSS that makes it work.',
    ],
    [
        'num' => 6,
        'slug' => '06-typography',
        'name' => 'Typography',
        'ready' => true,
        'keywords' => 'css typography templates, kinetic typography, variable fonts css, outline text css, gradient text css, vertical text css',
        'title' => 'CSS Typography Templates: Kinetic, Variable Fonts, Outline, Gradient Text (Free)',
        'desc' => '10 free CSS typography templates with live demos. Kinetic type, variable font sliders, oversized serif, outline, font pairing, image in text and more.',
        'intro' => 'Type can carry a whole page on its own. These ten templates show the text effects people search for most: letters that move, one variable font with live sliders, huge elegant serifs, hollow outline words, mixed fonts in one line, a photo inside the letters, flowing gradients, hand drawn marks, a full monospace layout and vertical Japanese text. All of it is real, selectable text.',
    ],
    [
        'num' => 7,
        'slug' => '07-motion',
        'name' => 'Motion',
        'ready' => false,
    ],
    [
        'num' => 8,
        'slug' => '08-3d-depth',
        'name' => '3D and Depth',
        'ready' => false,
    ],
    [
        'num' => 9,
        'slug' => '09-cultural-aesthetic',
        'name' => 'Cultural and Aesthetic',
        'ready' => false,
    ],
    [
        'num' => 10,
        'slug' => '10-business-ready',
        'name' => 'Business Ready Pages',
        'ready' => false,
    ],
];

$DESIGNS = [
    [
        'num' => 1,
        'cat' => '01-soft-tactile-ui',
        'slug' => '001-glassmorphism',
        'name' => 'Glassmorphism',
        'example' => 'Harbor, a savings app landing page',
        'title' => 'Free Glassmorphism CSS Template with Live Demo (HTML Download)',
        'desc' => 'Free glassmorphism HTML and CSS template with frosted glass cards and blurred panels. See the live demo, copy the CSS, or download the single HTML file.',
        'keywords' => 'glassmorphism css, glassmorphism template, frosted glass css, backdrop-filter blur, glass card css',
        'what' => [
            'Glassmorphism is a design style where panels look like frosted glass. You can see the colors behind them, but blurred, as if you were looking through a bathroom window. A thin white border and a soft shadow make each panel feel like it floats above the page.',
            'The whole effect comes from one CSS property called backdrop-filter. It blurs whatever sits behind an element. Put a few bright color shapes in the background, place a semi transparent card on top, and you have glassmorphism.',
        ],
        'when' => [
            'Finance and banking app landing pages',
            'Dashboards with a few key numbers',
            'Login and sign up screens',
            'Music, weather and lifestyle apps',
        ],
        'features' => [
            'Frosted navigation bar and cards made with backdrop-filter',
            'Three blurred color shapes in the background, no images needed',
            'Savings goal progress bars with a warm gradient',
            'Responsive layout that stacks on phones',
            'Clear focus outlines for keyboard users',
        ],
        'css' => '.glass {
  background: rgba(255, 255, 255, 0.18);
  border: 1px solid rgba(255, 255, 255, 0.45);
  border-radius: 24px;
  backdrop-filter: blur(18px) saturate(140%);
  -webkit-backdrop-filter: blur(18px) saturate(140%);
  box-shadow: 0 20px 50px rgba(3, 20, 35, 0.25);
}',
        'faq' => [
            [
                'How do you make glassmorphism in CSS?',
                'Give an element a semi transparent background, such as rgba(255, 255, 255, 0.18), then add backdrop-filter: blur(18px). Add a thin light border and a soft shadow. The effect only shows when there is something colorful behind the element.',
            ],
            [
                'Does backdrop-filter work in all browsers?',
                'Yes. Chrome, Edge, Firefox and Safari all support it today. Safari still likes the -webkit- prefix, so this template includes both versions.',
            ],
            [
                'Is glassmorphism bad for readability?',
                'It can be if the text sits on a busy background. Keep the blur strong, use white or very dark text, and check contrast. This template uses a dark, calm background so text stays easy to read.',
            ],
        ],
    ],
    [
        'num' => 2,
        'cat' => '01-soft-tactile-ui',
        'slug' => '002-liquid-glass',
        'name' => 'Liquid Glass',
        'example' => 'Tidewell, a weather app screen',
        'title' => 'Free Liquid Glass CSS Template (Apple Style UI) with Live Demo',
        'desc' => 'Free liquid glass UI template in pure CSS, inspired by the Apple 2025 design style. Glossy panels, light edges and pill buttons. Live demo and HTML download.',
        'keywords' => 'liquid glass css, apple liquid glass ui, liquid glass template, ios 26 design css, glossy glass css',
        'what' => [
            'Liquid glass is the look Apple introduced across its devices in 2025. Panels feel thicker and wetter than normal frosted glass. Their edges catch the light, they bend the colors behind them a little, and buttons sit in soft pill shapes.',
            'You can get very close to it with CSS. The trick is layering: a blur and saturation boost behind the panel, bright inset shadows along the top and left edges, and a faint highlight on top that makes the surface look curved.',
        ],
        'when' => [
            'Weather, music and camera apps',
            'Floating toolbars and tab bars',
            'Product pages for phone and watch apps',
            'Any design that should feel current and polished',
        ],
        'features' => [
            'Glossy panels with light catching edges',
            'Floating pill tab bar with a working selected state',
            'Large thin temperature number as the hero',
            'Warm evening sky made only with gradients',
            'Hourly forecast that scrolls sideways on small screens',
        ],
        'css' => '.liquid-glass {
  border-radius: 32px;
  background: linear-gradient(135deg, rgba(255,255,255,.28), rgba(255,255,255,.06));
  backdrop-filter: blur(14px) saturate(180%) brightness(1.1);
  box-shadow:
    inset 1px 1px 0 rgba(255,255,255,.75),
    inset -1px -1px 0 rgba(255,255,255,.2),
    inset 0 0 20px rgba(255,255,255,.15),
    0 18px 40px rgba(20,40,90,.25);
}',
        'faq' => [
            [
                'What is the difference between liquid glass and glassmorphism?',
                'Glassmorphism is flat frosted glass with a border. Liquid glass adds depth: shiny edges, a stronger color boost behind the panel and highlights that make it look curved, like a drop of water.',
            ],
            [
                'Can I make Apple liquid glass with only CSS?',
                'You can get a very close look with backdrop-filter, layered inset shadows and a highlight pseudo element. The true lens bending Apple uses needs SVG filters, which only work well in Chrome, so this template keeps to pure CSS that works everywhere.',
            ],
            [
                'Will this slow down my website?',
                'Blur effects cost some performance on older phones. Use them on a few panels, not dozens, and you will be fine.',
            ],
        ],
    ],
    [
        'num' => 3,
        'cat' => '01-soft-tactile-ui',
        'slug' => '003-neumorphism',
        'name' => 'Neumorphism',
        'example' => 'Hearth, a smart home control panel',
        'title' => 'Free Neumorphism CSS Template with Better Contrast (Live Demo)',
        'desc' => 'Free neumorphism UI template for a smart home panel. Soft extruded dials, switches and cards in pure CSS, with improved contrast. Live demo and download.',
        'keywords' => 'neumorphism css, neumorphic ui, soft ui design css, neumorphism template, neumorphic button',
        'what' => [
            'Neumorphism makes buttons and cards look like they are pushed out of, or pressed into, the same material as the background. There are no borders. Everything is shaped by two shadows: a dark one on the bottom right and a light one on the top left.',
            'The original 2020 version had a real problem. Buttons were so low contrast that people could not see them. This template fixes that with darker text, a colored accent for active states, and inset wells that make switches easy to spot.',
        ],
        'when' => [
            'Smart home and device control apps',
            'Music players and audio tools',
            'Calculators and simple utilities',
            'Settings screens with toggles and sliders',
        ],
        'features' => [
            'Thermostat dial with a colored progress ring',
            'Working plus and minus buttons that press in',
            'Four accessible toggle switches using role switch',
            'Raised and inset surfaces from one color',
            'Orange accent so active states are easy to see',
        ],
        'css' => ':root { --bg: #e3e8ef; --dark: #b9c2cf; --light: #ffffff; }

.raised {
  background: var(--bg);
  border-radius: 28px;
  box-shadow: 9px 9px 18px var(--dark), -9px -9px 18px var(--light);
}

.pressed {
  box-shadow: inset 6px 6px 12px var(--dark), inset -6px -6px 12px var(--light);
}',
        'faq' => [
            [
                'How do you make a neumorphic button in CSS?',
                'Use the same background color as the page, then add two box shadows: one darker shadow toward the bottom right and one lighter shadow toward the top left. For the pressed state, switch both shadows to inset.',
            ],
            [
                'Is neumorphism still popular?',
                'It came back in a more careful form. Designers now mix it with a strong accent color and higher contrast text, which fixes the readability issues of the first wave.',
            ],
            [
                'Is neumorphism accessible?',
                'It can be, if you do not rely on shadows alone. Use clear text labels, a visible focus outline and a color change for on and off states, like this template does.',
            ],
        ],
    ],
    [
        'num' => 4,
        'cat' => '01-soft-tactile-ui',
        'slug' => '004-claymorphism',
        'name' => 'Claymorphism',
        'example' => 'Pebble Math, a kids learning app',
        'title' => 'Free Claymorphism CSS Template with Live Demo (Puffy 3D UI)',
        'desc' => 'Free claymorphism HTML and CSS template with puffy, clay-like 3D cards and buttons. Built for a kids learning app. Live demo, CSS code and download.',
        'keywords' => 'claymorphism css, claymorphism template, clay ui design, 3d clay button css, puffy ui css',
        'what' => [
            'Claymorphism makes cards and buttons look like soft modeling clay. They are very rounded, brightly colored and puffy, as if you could squeeze them. It feels friendly and a little playful.',
            'The look comes from mixing two inset shadows, a dark one at the bottom right and a light one at the top left, with a normal drop shadow underneath. The inset shadows give the surface its round, inflated shape.',
        ],
        'when' => [
            'Apps and websites for children',
            'Games and quiz tools',
            'Friendly SaaS onboarding screens',
            'Brands that want to feel warm and approachable',
        ],
        'features' => [
            'Puffy clay cards in five candy colors',
            'A working math question with instant feedback',
            'Big chunky buttons that lift and squish',
            'Four learning world cards in a grid',
            'Rounded Baloo 2 font that suits young readers',
        ],
        'css' => '.clay {
  border-radius: 34px;
  box-shadow:
    inset -8px -8px 16px rgba(0, 0, 0, 0.12),
    inset 8px 8px 16px rgba(255, 255, 255, 0.6),
    10px 14px 24px rgba(90, 60, 120, 0.18);
}',
        'faq' => [
            [
                'What is claymorphism in web design?',
                'It is a style where elements look like soft 3D clay: very round corners, bright colors, and inner shadows that make them look inflated. It became popular in apps for kids, games and friendly startups.',
            ],
            [
                'How is claymorphism different from neumorphism?',
                'Neumorphism uses the same color as the background, so elements look carved from it. Claymorphism uses bright colors that stand out and looks like separate soft objects sitting on the page.',
            ],
            [
                'Can I use claymorphism for a business website?',
                'Yes, if your brand is friendly and casual. For banking or legal sites it may feel too playful, so use it only on small parts like icons or buttons.',
            ],
        ],
    ],
    [
        'num' => 5,
        'cat' => '01-soft-tactile-ui',
        'slug' => '005-frosted-aurora',
        'name' => 'Frosted Aurora',
        'example' => 'Stillwater, a sleep and calm app',
        'title' => 'Free Aurora Background CSS Template with Frosted Glass (Live Demo)',
        'desc' => 'Free aurora gradient background template with frosted glass cards. Slow moving northern lights colors made in pure CSS. Live demo and HTML download.',
        'keywords' => 'aurora background css, aurora gradient css, northern lights css animation, frosted glass css, animated gradient background',
        'what' => [
            'Frosted aurora puts slow moving colors, like the northern lights, behind panels of frosted glass. The colors drift very gently, so the page feels alive without being busy.',
            'It is made from a few big colored circles that are blurred heavily and moved with a long CSS animation. On top sit dark, semi transparent panels with backdrop-filter. If a visitor has asked their device to reduce motion, the colors stay still.',
        ],
        'when' => [
            'Sleep, meditation and wellness apps',
            'Music and podcast landing pages',
            'Event and night life websites',
            'AI and tech product launch pages',
        ],
        'features' => [
            'Animated aurora made from three blurred shapes',
            'Motion turns off for people who prefer reduced motion',
            'Dark frosted cards for audio tracks',
            'Elegant Fraunces serif headline',
            'Frosted testimonial block',
        ],
        'css' => '.sky { position: fixed; inset: -20%; filter: blur(60px); z-index: -1; }
.sky span { position: absolute; border-radius: 50%;
  animation: drift 22s ease-in-out infinite alternate; }

@keyframes drift { to { transform: translate(8vw, -6vw) scale(1.15); } }

@media (prefers-reduced-motion: reduce) {
  .sky span { animation: none; }
}',
        'faq' => [
            [
                'How do you make an aurora background in CSS?',
                'Place a few large colored circles in a fixed layer, blur that layer heavily with filter: blur(60px), and move the circles slowly with a CSS animation. No images or JavaScript are needed.',
            ],
            [
                'Will the animated background drain phone battery?',
                'The animation is slow and uses transform, which the browser handles well. It also stops for anyone who has reduced motion turned on in their device settings.',
            ],
            [
                'Can I change the aurora colors?',
                'Yes. Change the three background colors on the .sky span elements. Greens, blues and pinks look most like real northern lights.',
            ],
        ],
    ],
    [
        'num' => 6,
        'cat' => '01-soft-tactile-ui',
        'slug' => '006-soft-ui',
        'name' => 'Soft UI',
        'example' => 'Loom, a weekly planner dashboard',
        'title' => 'Free Soft UI Dashboard Template in HTML and CSS (Live Demo)',
        'desc' => 'Free soft UI dashboard template for a planner app. Calm pastel colors, gentle inner shadows and rounded panels in one HTML file. Live demo and download.',
        'keywords' => 'soft ui dashboard, soft ui css, pastel dashboard template, free html dashboard, calm ui design',
        'what' => [
            'Soft UI is a quiet, calm style for apps people use every day. Colors are muted pastels, corners are rounded, and shadows are so light you barely notice them. Nothing shouts for attention.',
            'It borrows a little from neumorphism, like the inset search box and progress tracks, but keeps normal white cards so it stays easy to read. That balance is why many productivity tools use it.',
        ],
        'when' => [
            'Task managers and planners',
            'Admin dashboards people use all day',
            'Health and habit tracking apps',
            'Internal tools where calm matters more than flash',
        ],
        'features' => [
            'Sidebar navigation that becomes a top bar on phones',
            'Three stat cards with soft inset progress tracks',
            'Real checkboxes for the task list',
            'Pastel tags for task types',
            'Small week strip with today highlighted',
        ],
        'css' => '.panel {
  background: #faf8fd;
  border-radius: 24px;
  box-shadow: 0 10px 30px rgba(80, 60, 130, 0.07);
}

.search {
  background: #f1eef6;
  border-radius: 16px;
  box-shadow: inset 3px 3px 7px rgba(120,100,160,.15), inset -3px -3px 7px #fff;
}',
        'faq' => [
            [
                'What is a soft UI design?',
                'Soft UI uses gentle colors, rounded shapes and very light shadows to make an interface feel calm. It is popular for dashboards and productivity apps that people keep open for hours.',
            ],
            [
                'Is this dashboard template free for commercial use?',
                'Yes. It is released under the MIT license, so you can use it in client work and paid products.',
            ],
            [
                'Does it need a framework like Bootstrap or Tailwind?',
                'No. It is plain HTML and CSS in one file. You can add any framework later if you want to.',
            ],
        ],
    ],
    [
        'num' => 7,
        'cat' => '01-soft-tactile-ui',
        'slug' => '007-skeuomorphism',
        'name' => 'Skeuomorphism',
        'example' => 'Field Journal, a notes app',
        'title' => 'Free Skeuomorphic CSS Template: Leather, Paper and Brass (Live Demo)',
        'desc' => 'Free skeuomorphism design template for a notes app. Leather cover, stitching, lined paper and a brass switch, all in pure CSS. Live demo and download.',
        'keywords' => 'skeuomorphism css, skeuomorphic design, skeuomorphic ui template, realistic css textures, notebook css',
        'what' => [
            'Skeuomorphism makes screens look like real objects. Early iPhone apps used it everywhere: notes on yellow paper, calendars in leather, bookshelves made of wood. After years of flat design, it is coming back, because people miss interfaces with a bit of character.',
            'This template draws every texture with CSS gradients. The wood grain, the leather, the dashed stitching, the lined paper and the red margin line are all code. There is not a single image file.',
        ],
        'when' => [
            'Notes, journal and diary apps',
            'Recipe and hobby websites',
            'Music apps with knobs and dials',
            'Portfolio pages that want a crafted feel',
        ],
        'features' => [
            'Wood desk background made with repeating gradients',
            'Leather cover with stitched border',
            'Lined notebook paper with a margin line',
            'Brass toggle switch that slides',
            'Handwritten Caveat font and a sticky note',
        ],
        'css' => '.page {
  background:
    linear-gradient(90deg, transparent 60px, #e39a9a 60px 62px, transparent 62px),
    repeating-linear-gradient(transparent 0 31px, #b8cfe0 31px 32px),
    #fbf4e2;
}

.cover::before {
  content: ""; position: absolute; inset: 12px;
  border: 2px dashed rgba(243, 220, 180, 0.55); border-radius: 8px;
}',
        'faq' => [
            [
                'What is skeuomorphic design?',
                'It is a design style that copies the look of real world objects, like paper, leather, wood or metal, so people instantly understand how to use an interface.',
            ],
            [
                'Is skeuomorphism coming back?',
                'Yes. After a decade of flat design, many designers are adding texture and depth again, often in a lighter way than the old iPhone apps.',
            ],
            [
                'Can I make lined paper with CSS?',
                'Yes. A repeating-linear-gradient draws the blue lines and a normal linear-gradient adds the red margin. You can copy the exact code from this page.',
            ],
        ],
    ],
    [
        'num' => 8,
        'cat' => '01-soft-tactile-ui',
        'slug' => '008-tactile-buttons',
        'name' => 'Tactile Buttons',
        'example' => 'Clack, a keyboard shop with a working calculator',
        'title' => 'Free 3D Pressable Button CSS Template with Working Calculator',
        'desc' => 'Free tactile 3D button template in pure CSS. Keys visibly press down when clicked. Includes a working calculator and shop page. Live demo and download.',
        'keywords' => '3d button css, pressable button css, tactile button css, keycap css, css button press effect',
        'what' => [
            'Tactile buttons look like real keys that move when you press them. They have a thick colored edge underneath, and when you click, the top slides down to meet it. It makes every click feel satisfying.',
            'The effect uses a solid box shadow as the side of the key, then moves the button down with transform on the active state while shrinking the shadow. It is fast, works everywhere and needs no JavaScript.',
        ],
        'when' => [
            'Call to action buttons that must be clicked',
            'Games, quizzes and playful apps',
            'Calculators, keypads and music pads',
            'Online shops for physical products',
        ],
        'features' => [
            'Keycap style buttons in cream, orange and olive',
            'A working calculator you can click',
            'Buttons press down about 5 pixels on click',
            'Clear focus outline for keyboard users',
            'Switch product cards for a shop layout',
        ],
        'css' => '.key {
  background: #f4f0e8;
  border-radius: 12px;
  box-shadow: 0 6px 0 #bdb4a5, 0 8px 12px rgba(0,0,0,.25);
  transition: transform .06s, box-shadow .06s;
}

.key:active {
  transform: translateY(5px);
  box-shadow: 0 1px 0 #bdb4a5, 0 2px 4px rgba(0,0,0,.25);
}',
        'faq' => [
            [
                'How do you make a 3D button that presses down in CSS?',
                'Add a solid box shadow with no blur below the button, like 0 6px 0 a darker color. On :active, move the button down with transform: translateY(5px) and reduce the shadow to 1px. It looks like the key is being pushed in.',
            ],
            [
                'Does the press effect work on phones?',
                'Yes. The :active state fires when you tap, so the key presses down under your finger.',
            ],
            [
                'Is the calculator code safe to use?',
                'It only takes input from its own buttons, so no one can type code into it. For a real product you may still want a proper math parser.',
            ],
        ],
    ],
    [
        'num' => 9,
        'cat' => '01-soft-tactile-ui',
        'slug' => '009-jelly-ui',
        'name' => 'Jelly UI',
        'example' => 'Wobble, a gelato shop',
        'title' => 'Free Jelly Button CSS Template: Glossy, Bouncy UI (Live Demo)',
        'desc' => 'Free jelly UI template with glossy buttons that wobble on hover and squish on click. Pure CSS gelato shop page with live demo and HTML download.',
        'keywords' => 'jelly button css, bouncy button css, glossy button css, wobble animation css, gummy ui design',
        'what' => [
            'Jelly UI makes buttons look like shiny gummy sweets. They have a glossy highlight on top, a darker bottom and a little wobble when you move your mouse over them. Press one and it squishes flat for a moment.',
            'The shine is a pseudo element with a white gradient. The wobble is a short keyframe animation that stretches the button wide and then tall. The squish is a simple scale on the active state.',
        ],
        'when' => ['Food, sweets and drink brands', 'Kids products and toys', 'Mobile games', 'Fun sign up and pricing buttons'],
        'features' => [
            'Glossy jelly buttons in five colors from one CSS class',
            'Wobble on hover and squish on press',
            'Shiny 3D scoops made with radial gradients',
            'Color set per button with one CSS variable',
            'Wobble stops for people who prefer reduced motion',
        ],
        'css' => '.jelly::before {
  content: ""; position: absolute; top: 5px; left: 14%; right: 14%; height: 38%;
  border-radius: 20px;
  background: linear-gradient(rgba(255,255,255,.75), rgba(255,255,255,0));
}
.jelly:hover { animation: wob .6s; }

@keyframes wob {
  30% { transform: scale(1.12, .88); }
  50% { transform: scale(.92, 1.08); }
  70% { transform: scale(1.04, .96); }
}',
        'faq' => [
            [
                'How do you make a jelly wobble effect in CSS?',
                'Use a keyframe animation that changes scale on the x and y axis in opposite directions, for example scale(1.12, 0.88) then scale(0.92, 1.08), and settle back to scale(1). Run it on hover for about 0.6 seconds.',
            ],
            [
                'How do I change the button color?',
                'Every button reads its color from a CSS variable called --c. Set style="--c: #ff4f8b" on a button, or change it in the stylesheet.',
            ],
            ['Does it work without JavaScript?', 'Yes. The shine, wobble and squish are all pure CSS.'],
        ],
    ],
    [
        'num' => 10,
        'cat' => '01-soft-tactile-ui',
        'slug' => '010-paper-stack',
        'name' => 'Paper Stack',
        'example' => 'Crumb, a family recipe box',
        'title' => 'Free Paper Stack Cards CSS Template for Recipes (Live Demo)',
        'desc' => 'Free paper stack card template in CSS. Layered index cards on a table with a shuffle button, built for a recipe website. Live demo and HTML download.',
        'keywords' => 'paper stack css, stacked cards css, index card css, recipe card template html, paper card design',
        'what' => [
            'Paper stack design shows content as real sheets of paper piled on a table. Cards sit at slight angles, each with its own shadow, and the pile looks like someone just put it down.',
            'Each card is rotated a few degrees with transform and placed on top of the others. A shuffle button moves the top card to the bottom, and a CSS transition makes the pile settle smoothly.',
        ],
        'when' => [
            'Recipe and cooking websites',
            'Portfolios and case studies',
            'Testimonials and review sections',
            'Flashcards and study tools',
        ],
        'features' => [
            'Three index cards stacked at different angles',
            'Shuffle button that brings the next card to the top',
            'Lined card paper with a red header line',
            'Smaller cards with a layered paper edge',
            'Green table background with a subtle texture',
        ],
        'css' => '.card { position: absolute; inset: 0; margin: auto;
  box-shadow: 0 10px 24px rgba(0,0,0,.28);
  transition: transform .45s cubic-bezier(.2,.8,.2,1); }

.card:nth-child(1) { transform: rotate(-7deg) translate(-26px, 14px); }
.card:nth-child(2) { transform: rotate(5deg) translate(22px, 6px); }
.card:nth-child(3) { transform: rotate(-1.5deg); }

.mini { box-shadow: 4px 4px 0 #e9e2d2, 8px 8px 0 #d8cfbb; }',
        'faq' => [
            [
                'How do you make stacked cards in CSS?',
                'Place the cards in the same spot with position: absolute, then rotate each one a few degrees with transform. The last card in the HTML sits on top.',
            ],
            [
                'How does the shuffle button work?',
                'A single line of JavaScript moves the top card to the bottom of the pile. Because the angles are set with nth-child, every card takes a new position and the CSS transition animates it.',
            ],
            [
                'Can I make a paper stack without JavaScript?',
                'The pile itself is pure CSS. You only need the small script if you want the shuffle button.',
            ],
        ],
    ],
    [
        'num' => 11, 'cat' => '02-bold-raw', 'slug' => '011-neo-brutalism', 'name' => 'Neo Brutalism',
        'example' => 'Stackd, an invoicing tool for freelancers',
        'title' => 'Free Neo Brutalism CSS Template with Live Demo (HTML Download)',
        'desc' => 'Free neo brutalism website template with thick black borders, hard offset shadows and flat bright colors. Live demo, key CSS and single HTML download.',
        'keywords' => 'neo brutalism css, neobrutalism template, brutalist web design, neo brutalist ui, hard shadow css',
        'what' => [
            'Neo brutalism is the loud, confident style you see on Gumroad and many new startup sites. Everything has a thick black border, shadows are solid blocks with no blur, and colors are flat and bright like sticky notes.',
            'It looks simple on purpose. There are no gradients and no soft edges, so the page feels honest and easy to scan. Buttons slide into their shadow when you click, which makes the style fun to use as well as to look at.',
        ],
        'when' => ['SaaS and startup landing pages', 'Tools for freelancers and creators', 'Portfolios that want to stand out', 'Product launch and waitlist pages'],
        'features' => ['Thick 3px borders and solid offset shadows', 'Buttons that press into their shadow on click', 'Sample invoice card with dashed dividers', 'Three feature cards in sticky note colors', 'Lexend Mega headline font for a heavy look'],
        'css' => ".box {\n  border: 3px solid #000;\n  box-shadow: 6px 6px 0 #000;\n}\n\n.btn { background: #ffd23f; border: 3px solid #000; box-shadow: 5px 5px 0 #000; }\n.btn:hover { transform: translate(-2px, -2px); box-shadow: 7px 7px 0 #000; }\n.btn:active { transform: translate(5px, 5px); box-shadow: 0 0 0 #000; }",
        'faq' => [
            ['What is neo brutalism in web design?', 'It is a style built on thick black outlines, hard shadows with no blur, flat bright colors and bold type. It feels raw and friendly at the same time, and it became popular with startups and creator tools.'],
            ['How do you make a neo brutalist shadow in CSS?', 'Use a box shadow with an offset and zero blur, such as box-shadow: 6px 6px 0 #000. Pair it with a solid 3px border in the same color.'],
            ['Is neo brutalism good for conversions?', 'It can be. The strong contrast makes buttons very easy to spot. Keep the copy short and give each section one clear action.'],
        ],
    ],
    [
        'num' => 12, 'cat' => '02-bold-raw', 'slug' => '012-raw-brutalist', 'name' => 'Raw Brutalist',
        'example' => 'KXLR, a community radio station',
        'title' => 'Free Brutalist Website Template: Raw HTML Look (Live Demo)',
        'desc' => 'Free raw brutalist website template with system fonts, blue links and a plain HTML look. Fast, honest and easy to edit. Live demo and HTML download.',
        'keywords' => 'brutalist website, brutalist web design template, raw html design, minimal html website, plain html template',
        'what' => [
            'Raw brutalism strips a website back to what the browser gives you for free. Times New Roman, blue underlined links, simple tables and horizontal lines. It looks like the web in 1996, and that is the point.',
            'People choose it because it is fast, honest and impossible to mistake for a template. It is also the easiest style to keep up to date, because there is almost no CSS to break.',
        ],
        'when' => ['Community groups, clubs and local radio', 'Personal sites and online notebooks', 'Artists and writers who want a no fuss look', 'Pages that must load fast on slow connections'],
        'features' => ['Default browser fonts and link colors', 'Real schedule table with the live show highlighted', 'Red on air label as the only color accent', 'Plain notices list and address block', 'Under 2KB of CSS'],
        'css' => "body {\n  font-family: \"Times New Roman\", Times, serif;\n  max-width: 760px; margin: 0 auto; padding: 20px 16px;\n}\na { color: #0000ee; }\na:visited { color: #551a8b; }\ntable { border-collapse: collapse; width: 100%; }\nth, td { border: 1px solid #000; padding: 6px 8px; }\ntr.now td { background: #ff0; }",
        'faq' => [
            ['What is a brutalist website?', 'It is a site that uses raw, default web styling on purpose: plain fonts, simple layout and visible structure. It rejects polished templates in favor of something direct and a bit rough.'],
            ['Are brutalist websites good for SEO?', 'Often yes. They are very light, load quickly and use clean HTML, which search engines like. Just make sure the text is useful and the headings are clear.'],
            ['Is raw brutalism the same as neo brutalism?', 'No. Raw brutalism looks unstyled and old school. Neo brutalism adds bright colors, thick borders and hard shadows, so it feels designed.'],
        ],
    ],
    [
        'num' => 13, 'cat' => '02-bold-raw', 'slug' => '013-swiss-grid', 'name' => 'Swiss Grid',
        'example' => 'Grid Days, a design conference in Zurich',
        'title' => 'Free Swiss Style Grid CSS Template with Live Demo',
        'desc' => 'Free Swiss style website template with a strict 12 column CSS grid, clean sans serif type and a red accent. Live demo, key CSS and HTML download.',
        'keywords' => 'swiss style web design, international typographic style css, swiss grid template, 12 column css grid, swiss design website',
        'what' => [
            'Swiss style, also called the International Typographic Style, comes from 1950s poster design in Switzerland. It uses a strict grid, clean sans serif letters, left aligned text and lots of white space. One strong color, often red, does all the work.',
            'On the web it maps perfectly to CSS Grid. Every element starts and ends on a column line, so the page feels calm and ordered even when the type is huge.',
        ],
        'when' => ['Conferences and events', 'Architecture and design studios', 'Museums and galleries', 'Annual reports and serious brands'],
        'features' => ['12 column CSS grid used on every row', 'Giant red number as the hero element', 'Programme list aligned to the same columns', 'Full width red ticket block', 'Collapses to a single column on phones'],
        'css' => ".g {\n  display: grid;\n  grid-template-columns: repeat(12, 1fr);\n  column-gap: 20px;\n  max-width: 1200px; margin: 0 auto;\n}\n.num { grid-column: 1 / 6; font-size: 17rem; color: #e2231a; }\n.ht  { grid-column: 7 / 13; align-self: end; }",
        'faq' => [
            ['What is Swiss style in web design?', 'It is a design approach based on a strict grid, sans serif type, asymmetric layouts and plenty of white space. It started in Swiss poster design and still shapes modern websites.'],
            ['How do I build a Swiss grid with CSS?', 'Use display: grid with grid-template-columns: repeat(12, 1fr), then place each element with grid-column, for example grid-column: 7 / 13. Keep every item on the same column lines.'],
            ['Which fonts suit Swiss style?', 'Helvetica is the classic choice. Free alternatives include Archivo, Inter Tight and Public Sans.'],
        ],
    ],
    [
        'num' => 14, 'cat' => '02-bold-raw', 'slug' => '014-bold-type-hero', 'name' => 'Bold Type Hero',
        'example' => 'Pace, a running club',
        'title' => 'Free Big Bold Typography Hero CSS Template (Live Demo)',
        'desc' => 'Free bold typography hero template where a giant headline fills the screen. Outline text, a highlighted word and tight spacing. Live demo and download.',
        'keywords' => 'bold typography website, big text hero css, large headline css, outline text css, typography hero section',
        'what' => [
            'A bold type hero lets the words be the picture. Instead of a photo, a huge headline fills the first screen, so the message lands before anything else.',
            'The size comes from clamp() with a viewport unit, so the text scales with the screen. Mixing solid, outlined and highlighted lines keeps a three word headline interesting.',
        ],
        'when' => ['Sports clubs and fitness brands', 'Event and festival pages', 'Agencies and personal portfolios', 'Any page with a short, strong message'],
        'features' => ['Headline that scales with the screen using clamp()', 'Outline text made with text-stroke', 'Highlighted last line in lime', 'Three column info section below', 'Weekly run schedule list'],
        'css' => ".big {\n  font-family: Anton, Impact, sans-serif;\n  text-transform: uppercase;\n  font-size: clamp(4.5rem, 19vw, 17rem);\n  line-height: .84;\n}\n.big .o { -webkit-text-stroke: 3px #101820; color: transparent; }\n.big .l { background: #d7ff3a; }",
        'faq' => [
            ['How do you make text fill the screen in CSS?', 'Use font-size with clamp() and a vw unit, for example clamp(4.5rem, 19vw, 17rem). The text grows with the screen width but never gets too small or too large.'],
            ['How do I make outline text?', 'Set color: transparent and add -webkit-text-stroke: 3px with your color. It works in all modern browsers.'],
            ['Is a giant headline bad for SEO?', 'No. Search engines read the words, not the size. Keep the real h1 short and put more detail in the text below it.'],
        ],
    ],
    [
        'num' => 15, 'cat' => '02-bold-raw', 'slug' => '015-anti-design', 'name' => 'Anti Design',
        'example' => 'Static Bloom, an indie record label',
        'title' => 'Free Anti Design Website Template with Live Demo',
        'desc' => 'Free anti design website template for creative brands. Clashing fonts, rotated blocks, a moving ticker and rule breaking layout. Live demo and download.',
        'keywords' => 'anti design website, anti design web template, chaotic web design, experimental website css, rotated elements css',
        'what' => [
            'Anti design breaks the rules on purpose. Fonts clash, blocks sit at odd angles, and nothing lines up the way a normal template would. It feels like a flyer taped to a wall.',
            'It still needs care underneath. On phones the blocks fall back into a simple column, links stay easy to find, and the ticker stops for people who prefer less motion.',
        ],
        'when' => ['Record labels and bands', 'Fashion and streetwear', 'Art collectives and galleries', 'Festivals and nightlife'],
        'features' => ['Three clashing fonts used together', 'Blocks placed and rotated freely', 'Scrolling ticker that stops with reduced motion', 'Round rotated sticker badge', 'Stacks into one clean column on phones'],
        'css' => ".blk { position: absolute; border: 2px solid #0a0a0a; padding: 18px 20px; }\n.a { top: 10px; left: 4%; transform: rotate(-3deg); background: #c6ff00; }\n.d { transform: rotate(-6deg); background: #ff2e88; }\n\n@media (max-width: 820px) {\n  .blk { position: static; width: auto; }\n}",
        'faq' => [
            ['What is anti design?', 'It is a style that rejects clean, balanced layouts. Designers use clashing fonts, overlaps, odd angles and raw colors to make something that feels personal and hard to ignore.'],
            ['Is anti design bad for usability?', 'It can be, so keep the basics working: readable text, obvious links and a simple layout on phones. This template does all three.'],
            ['Who should use anti design?', 'Brands with a strong creative identity, like music, fashion and art. For banks or clinics it would send the wrong message.'],
        ],
    ],
    [
        'num' => 16, 'cat' => '02-bold-raw', 'slug' => '016-y2k-revival', 'name' => 'Y2K Revival',
        'example' => 'Starlite, a mixtape playlist site',
        'title' => 'Free Y2K Aesthetic Website Template in CSS (Live Demo)',
        'desc' => 'Free Y2K aesthetic website template with chrome text, bubble buttons, sparkles and early 2000s gradients in pure CSS. Live demo and HTML download.',
        'keywords' => 'y2k website template, y2k aesthetic css, chrome text css, bubble button css, 2000s web design',
        'what' => [
            'Y2K style brings back the look of the early 2000s: shiny chrome letters, glossy bubble buttons, sparkles and soft sky gradients. It is fun, a little silly and very popular with younger audiences again.',
            'Chrome text is made with a striped gradient clipped to the letters. The bubble buttons use a white radial gradient for the shine. The sparkles are CSS stars made with clip-path.',
        ],
        'when' => ['Music and playlist sites', 'Fashion and beauty brands', 'Nostalgia and retro projects', 'Personal pages and fan sites'],
        'features' => ['Chrome headline made with background-clip text', 'Glossy bubble buttons in cyan and pink', 'Twinkling star sparkles in pure CSS', 'Music player card with track list', 'Sparkles stop for reduced motion'],
        'css' => ".chrome {\n  background: linear-gradient(180deg, #fff 0%, #c9d3e0 40%, #5c6b80 50%, #dfe7f1 60%, #fff 100%);\n  -webkit-background-clip: text; background-clip: text;\n  color: transparent;\n  -webkit-text-stroke: 1.5px #3a4a6b;\n}\n.bubble {\n  border-radius: 999px;\n  background: radial-gradient(circle at 30% 25%, #fff 0, transparent 35%), linear-gradient(#8ff4ff, #4fc2ff);\n}",
        'faq' => [
            ['How do you make chrome text in CSS?', 'Put a striped light and dark gradient in the background, then clip it to the text with background-clip: text and set the text color to transparent. A thin text stroke gives it an edge.'],
            ['Why is Y2K design popular again?', 'People who grew up in the 2000s are now designing, and younger users like its playful, optimistic feel. It stands out against flat minimal sites.'],
            ['Can Y2K style still look professional?', 'Yes, if you keep it to headlines and buttons and use plain, readable body text like this template does.'],
        ],
    ],
    [
        'num' => 17, 'cat' => '02-bold-raw', 'slug' => '017-memphis', 'name' => 'Memphis',
        'example' => 'Confetti Co., a party planner',
        'title' => 'Free Memphis Design Website Template in CSS (Live Demo)',
        'desc' => 'Free Memphis design website template with squiggles, dots, zigzags and bold 80s shapes drawn in CSS. Built for a party planner. Live demo and download.',
        'keywords' => 'memphis design website, memphis style css, 80s web design, geometric shapes css, zigzag pattern css',
        'what' => [
            'Memphis design comes from a group of Italian designers in the 1980s. It is full of bright circles, triangles, squiggly lines, dot patterns and zigzags, all mixed together with a sense of humor.',
            'Every shape here is CSS. The dots are a repeating radial gradient, the zigzag is two small linear gradients, the triangle is a border trick, and the squiggle is a tiny inline SVG.',
        ],
        'when' => ['Party and event planners', 'Kids brands and toy shops', 'Creative agencies', 'Food trucks and cafes'],
        'features' => ['Circle, triangle, pill and dot shapes', 'Zigzag border made with two gradients', 'Squiggle line as inline SVG', 'Package cards with colored offset shadows', 'Shapes hide on phones so text stays clear'],
        'css' => ".dots {\n  background-image: radial-gradient(#1d1d1b 2px, transparent 2.5px);\n  background-size: 18px 18px;\n}\n.zig {\n  height: 22px;\n  background:\n    linear-gradient(135deg, #ff5a5f 25%, transparent 25%) -11px 0 / 22px 22px,\n    linear-gradient(225deg, #ff5a5f 25%, transparent 25%) -11px 0 / 22px 22px;\n}",
        'faq' => [
            ['What is Memphis design?', 'It is a playful 1980s design style known for bright colors, simple geometric shapes, squiggles and patterns placed in a loose, fun way.'],
            ['How do you make a dot pattern in CSS?', 'Use background-image: radial-gradient(color 2px, transparent 2.5px) with a background-size like 18px 18px. The dots repeat on their own.'],
            ['How do I make a zigzag line?', 'Layer two linear gradients at 135 and 225 degrees with the same size, as in the code above. No image is needed.'],
        ],
    ],
    [
        'num' => 18, 'cat' => '02-bold-raw', 'slug' => '018-retro-pixel', 'name' => 'Retro Pixel',
        'example' => 'Frog Knight, an indie game launch page',
        'title' => 'Free Retro Pixel 8-bit Website Template in CSS (Live Demo)',
        'desc' => 'Free retro 8-bit website template for an indie game. Pixel fonts, pixel borders, a CSS pixel art hero and a blinking start button. Live demo and download.',
        'keywords' => '8 bit website template, pixel art css, retro game website, pixel font css, press start 2p template',
        'what' => [
            'Retro pixel style copies the look of 8-bit and 16-bit games. Chunky pixel fonts, square borders, flat blocky scenery and a little character that bounces in place.',
            'The hero character is drawn with one tiny element and a long list of box shadows, one per pixel. The bounce uses steps() so it moves in hard jumps like an old console.',
        ],
        'when' => ['Indie game landing pages', 'Game jams and gaming communities', 'Retro themed events', 'Developer portfolios with a playful side'],
        'features' => ['Press Start 2P and VT323 pixel fonts', 'Pixel art frog made with box-shadow', 'Blocky sky, grass and dirt scene', 'Blinking start button', 'Pixel health bar on a feature card'],
        'css' => ".hero {\n  width: 8px; height: 8px;\n  box-shadow: 16px 0 #b13e53, 24px 0 #b13e53, 8px 8px #b13e53 /* one shadow per pixel */;\n  animation: hop 1.2s steps(2) infinite;\n}\n@keyframes hop { 50% { transform: translateY(-16px); } }\n\n.start { font-family: \"Press Start 2P\", monospace; animation: blink 1s steps(1) infinite; }",
        'faq' => [
            ['How do you make pixel art with CSS?', 'Make one small square element, then add a box-shadow for every pixel you want, each with its own x and y offset and color. The shadows draw the picture.'],
            ['Which fonts give an 8-bit look?', 'Press Start 2P is great for headings and VT323 works well for body text. Both are free on Google Fonts.'],
            ['Why use steps() in the animation?', 'steps() makes the movement jump between frames instead of sliding smoothly, just like sprites in old games.'],
        ],
    ],
    [
        'num' => 19, 'cat' => '02-bold-raw', 'slug' => '019-newspaper-editorial', 'name' => 'Newspaper Editorial',
        'example' => 'The Harbor Gazette, a local news site',
        'title' => 'Free Newspaper Website Template in HTML and CSS (Live Demo)',
        'desc' => 'Free newspaper style website template with a masthead, serif headlines, drop cap and multi column text in pure CSS. Live demo and HTML download.',
        'keywords' => 'newspaper website template, newspaper css layout, css columns, editorial web design, drop cap css',
        'what' => [
            'Newspaper editorial style brings the front page of a printed paper to the web. A blackletter masthead, a double rule under the date, big serif headlines and text flowing in narrow columns.',
            'CSS columns do the heavy lifting. One property splits the story into two columns with a thin rule between them, and ::first-letter makes the classic drop cap.',
        ],
        'when' => ['Local news and community papers', 'Blogs and magazines', 'Newsletters and long reads', 'Law firms and traditional brands'],
        'features' => ['Blackletter masthead font', 'Double rule date bar', 'Two column story with column rule', 'Drop cap on the first paragraph', 'Sidebar with short stories and weather box'],
        'css' => ".cols {\n  columns: 2;\n  column-gap: 26px;\n  column-rule: 1px solid #b9b2a2;\n  text-align: justify; hyphens: auto;\n}\n.cols p:first-child::first-letter {\n  float: left; font-size: 4rem; line-height: .8;\n  font-family: \"Playfair Display\", serif; font-weight: 900;\n}\n.date { border-block: 3px double #1b1a17; }",
        'faq' => [
            ['How do you make newspaper columns in CSS?', 'Use the columns property, for example columns: 2 with column-gap and column-rule. The text flows from one column into the next on its own.'],
            ['How do I add a drop cap?', 'Style p:first-child::first-letter with float: left, a large font size and a tight line height.'],
            ['Is justified text a good idea on the web?', 'It looks like print but can leave gaps. Adding hyphens: auto helps. On phones this template switches to one column so the text reads well.'],
        ],
    ],
    [
        'num' => 20, 'cat' => '02-bold-raw', 'slug' => '020-risograph-poster', 'name' => 'Risograph Poster',
        'example' => 'Ink Fest, a zine fair',
        'title' => 'Free Risograph Style Website Template in CSS (Live Demo)',
        'desc' => 'Free risograph style website template with grainy texture, overlapping ink colors and misaligned print layers in pure CSS. Live demo and HTML download.',
        'keywords' => 'risograph website design, riso print css, grain texture css, mix blend mode multiply, poster website template',
        'what' => [
            'Risograph is a cheap printing method loved by zine makers and poster artists. Each color is printed as a separate layer, so inks overlap into new colors, layers sit slightly off and the paper shows a soft grain.',
            'The web version uses mix-blend-mode: multiply so overlapping shapes mix like real ink. A second copy of the headline sits a few pixels off, and a noise texture from an inline SVG adds the grain.',
        ],
        'when' => ['Zine fairs, markets and festivals', 'Print shops and illustrators', 'Music gig posters', 'Bookshops and indie publishers'],
        'features' => ['Overlapping circles that mix with multiply', 'Headline printed twice slightly off register', 'Paper grain from an inline SVG noise filter', 'Riso pink, blue and yellow palette', 'Table section cards with ink borders'],
        'css' => ".circ { border-radius: 50%; mix-blend-mode: multiply; }\n\nh1 { color: #0078bf; mix-blend-mode: multiply; }\nh1 span { position: absolute; left: 6px; top: 5px; color: #ff48b0; z-index: -1; }\n\nbody::after {\n  content: \"\"; position: fixed; inset: 0; pointer-events: none;\n  opacity: .35; mix-blend-mode: multiply;\n  background-image: url(\"data:image/svg+xml,...feTurbulence...\");\n}",
        'faq' => [
            ['How do you make a risograph effect in CSS?', 'Use mix-blend-mode: multiply on colored shapes and text so they mix where they overlap, offset a second copy of the text by a few pixels, and add a grain texture on top.'],
            ['How do I add a grain texture without an image file?', 'Use an inline SVG with an feTurbulence filter as a background image. It stays tiny and works in every modern browser.'],
            ['What colors are typical for risograph?', 'Fluorescent pink, medium blue and yellow are the classic riso inks. When they overlap they make purple, green and red.'],
        ],
    ],

    [
        'num' => 21, 'cat' => '03-layout-patterns', 'slug' => '021-bento-grid', 'name' => 'Bento Grid',
        'example' => 'Orbit, a smartwatch product page',
        'title' => 'Free Bento Grid CSS Template with Live Demo (Apple Style)',
        'desc' => 'Free bento grid website template in pure CSS Grid. Apple style boxes of different sizes for a product page. Live demo, key CSS and single HTML download.',
        'keywords' => 'bento grid css, bento grid template, bento box layout, apple bento grid, css grid layout template',
        'what' => [
            'A bento grid splits a page into boxes of different sizes, like a Japanese lunch box. Apple made it famous on its product pages, and now almost every tech launch uses it.',
            'Each box holds one idea: a big number, a picture, a short line of text. Because the sizes vary, the eye moves around the page naturally and people take in many features in a few seconds.',
        ],
        'when' => ['Product and feature pages', 'SaaS homepages', 'Personal portfolios and link pages', 'Dashboards with a few key numbers'],
        'features' => ['4 column CSS grid with fixed row height', 'Big, wide and tall tiles using span', 'CSS drawn watch with a live style screen', 'Progress ring made with conic-gradient', 'Falls back to 2 columns, then 1, on smaller screens'],
        'css' => ".bento {\n  display: grid;\n  grid-template-columns: repeat(4, 1fr);\n  grid-auto-rows: 190px;\n  gap: 16px;\n}\n.big  { grid-column: span 2; grid-row: span 2; }\n.wide { grid-column: span 2; }\n.tall { grid-row: span 2; }",
        'faq' => [
            ['How do you make a bento grid in CSS?', 'Use display: grid with a set number of columns and grid-auto-rows for the row height. Then make some tiles bigger with grid-column: span 2 or grid-row: span 2.'],
            ['Why is the bento grid so popular?', 'It shows many features at once without a long scroll, and the mix of sizes makes the page easy to scan. Apple, Linear and many startups use it.'],
            ['Does a bento grid work on phones?', 'Yes. This template switches to two columns on tablets and one column on phones, so every tile stays readable.'],
        ],
    ],
    [
        'num' => 22, 'cat' => '03-layout-patterns', 'slug' => '022-masonry', 'name' => 'Masonry',
        'example' => 'Frame Club, a photo community',
        'title' => 'Free CSS Masonry Grid Template, No JavaScript (Live Demo)',
        'desc' => 'Free masonry grid template in pure CSS for a photo gallery. Pinterest style staggered columns with no JavaScript library. Live demo and HTML download.',
        'keywords' => 'css masonry layout, masonry grid css, pinterest layout css, photo gallery template, css columns masonry',
        'what' => [
            'A masonry layout stacks items of different heights in columns, so there are no big gaps. It is the layout Pinterest made famous, and it suits photos better than a strict grid.',
            'You do not need a JavaScript library. CSS columns do it: set a column width, and add break-inside: avoid so no card gets split between two columns.',
        ],
        'when' => ['Photo galleries and portfolios', 'Mood boards and inspiration sites', 'Recipe and product collections', 'User generated content feeds'],
        'features' => ['Pure CSS masonry with the columns property', 'Cards never split across columns', 'Photo placeholders drawn with gradients', 'Filter buttons with pressed state', 'Dark gallery background that makes images pop'],
        'css' => ".wall {\n  columns: 4 260px;\n  column-gap: 16px;\n}\nfigure {\n  break-inside: avoid;\n  margin: 0 0 16px;\n  border-radius: 14px;\n  overflow: hidden;\n}",
        'faq' => [
            ['How do you make a masonry layout without JavaScript?', 'Use CSS columns, for example columns: 4 260px, and add break-inside: avoid to each item. The browser fills each column top to bottom.'],
            ['What is the downside of CSS columns masonry?', 'Items are ordered down each column, not across rows. For a gallery that rarely matters. If order is important, you can use a small script instead.'],
            ['Is there a native CSS masonry?', 'A grid masonry feature is being built into browsers, but support is not complete yet. CSS columns work everywhere today.'],
        ],
    ],
    [
        'num' => 23, 'cat' => '03-layout-patterns', 'slug' => '023-split-screen', 'name' => 'Split Screen',
        'example' => 'Salt and Ember, a wood fire restaurant',
        'title' => 'Free Split Screen Website Template in CSS (Live Demo)',
        'desc' => 'Free split screen website template for a restaurant. A sticky visual half on the left and a scrolling menu and booking form on the right. Live demo and download.',
        'keywords' => 'split screen website, split screen layout css, two column landing page, sticky half screen css, restaurant website template',
        'what' => [
            'A split screen layout divides the page into two halves. One side holds a strong visual or brand message and stays still, while the other side scrolls with the details.',
            'It gives a small site a premium feel. The fixed half is just position: sticky with the full viewport height, so it needs no JavaScript at all.',
        ],
        'when' => ['Restaurants and bars', 'Hotels and venues', 'Sign up and login pages', 'Product pages with one hero image'],
        'features' => ['Sticky left panel with a glowing fire made in CSS', 'Scrolling menu with dish notes and prices', 'Working booking form with a confirm message', 'Elegant Cormorant Garamond headings', 'Stacks top to bottom on phones'],
        'css' => ".split {\n  display: grid;\n  grid-template-columns: 1fr 1fr;\n  min-height: 100vh;\n}\n.left {\n  position: sticky; top: 0;\n  height: 100vh;\n}\n@media (max-width: 860px) {\n  .split { grid-template-columns: 1fr; }\n  .left { position: relative; height: 70vh; }\n}",
        'faq' => [
            ['How do I keep one side fixed in a split screen layout?', 'Put both halves in a two column grid, then give the left side position: sticky, top: 0 and height: 100vh. The right side scrolls normally.'],
            ['Is split screen good on mobile?', 'Not side by side. This template stacks the halves on small screens, with the visual first and the content below.'],
            ['What content suits a split screen?', 'Anything with one strong image or message plus a list of details, like a menu, a room list or a sign up form.'],
        ],
    ],
    [
        'num' => 24, 'cat' => '03-layout-patterns', 'slug' => '024-broken-grid', 'name' => 'Broken Grid',
        'example' => 'Nomad Linen, a fashion lookbook',
        'title' => 'Free Broken Grid Layout Template in CSS (Live Demo)',
        'desc' => 'Free broken grid website template for a fashion lookbook. Overlapping images and text placed on an asymmetric 12 column CSS Grid. Live demo and download.',
        'keywords' => 'broken grid layout, broken grid css, asymmetric layout css, overlapping grid css, fashion lookbook template',
        'what' => [
            'A broken grid still uses a grid, but lets things overlap and cross the lines. Images sit on top of each other, text boxes cut into photos, and the headline breaks out of its column.',
            'It looks like an editorial fashion spread. CSS Grid makes it easy because items can share the same rows and columns, and z-index decides which one sits on top.',
        ],
        'when' => ['Fashion and lifestyle brands', 'Photography portfolios', 'Architecture and interior studios', 'Editorial features and campaigns'],
        'features' => ['12 column grid with overlapping items', 'Layered image blocks with z-index', 'Headline that crosses into the photos', 'Floating text card with shadow', 'Turns into a clean vertical list on phones'],
        'css' => ".look {\n  display: grid;\n  grid-template-columns: repeat(12, 1fr);\n  grid-template-rows: repeat(10, 70px);\n}\n.i1  { grid-column: 1 / 6;  grid-row: 1 / 9; }\n.i2  { grid-column: 5 / 9;  grid-row: 4 / 11; z-index: 1; }\n.txt { grid-column: 8 / 13; grid-row: 6 / 10; z-index: 2; }",
        'faq' => [
            ['What is a broken grid layout?', 'It is a layout where elements overlap or break out of the usual grid columns on purpose, creating depth and an editorial feel.'],
            ['How do you overlap elements with CSS Grid?', 'Give two items grid-column and grid-row values that share some of the same cells. Use z-index to choose which one appears on top.'],
            ['Is a broken grid accessible?', 'Yes, as long as the reading order in the HTML makes sense. Screen readers follow the HTML, not the visual overlap.'],
        ],
    ],
    [
        'num' => 25, 'cat' => '03-layout-patterns', 'slug' => '025-scrollytelling', 'name' => 'Scrollytelling',
        'example' => 'Hilltop Roasters, a bean to cup story',
        'title' => 'Free Scrollytelling Template in HTML, CSS and JS (Live Demo)',
        'desc' => 'Free scrollytelling website template. A sticky visual changes shape and color as each step of the story scrolls past. Live demo, key code and HTML download.',
        'keywords' => 'scrollytelling template, scroll storytelling html, sticky scroll animation, scroll triggered animation, story website template',
        'what' => [
            'Scrollytelling tells a story as you scroll. One picture stays pinned on the screen while the text moves past, and the picture changes to match each step.',
            'News sites use it for big explainers, and brands use it to show how a product is made. Here a coffee bean changes into a cherry, a roasted bean and finally a cup, one step at a time.',
        ],
        'when' => ['Product origin stories', 'Explainers and reports', 'Charity impact stories', 'Onboarding and how it works pages'],
        'features' => ['Sticky stage that stays on screen', 'Four story steps that light up as you reach them', 'Visual changes with smooth CSS transitions', 'Tiny IntersectionObserver script, no library', 'Transitions turn off for reduced motion'],
        'css' => ".stage { position: sticky; top: 0; height: 100vh; }\n.bean { transition: background .6s, transform .6s; }\n.stage[data-step=\"2\"] .bean { background: #d7263d; transform: scale(.8); }\n.stage[data-step=\"3\"] .bean { background: #8c5a3c; transform: scale(.7) rotate(25deg); }\n\n/* JS: when a step reaches the middle of the screen,\n   set stage.dataset.step to that step number */",
        'faq' => [
            ['What is scrollytelling?', 'It is a way of telling a story on the web where content and visuals change as the reader scrolls, usually with one element pinned on screen.'],
            ['Do I need a library like GSAP for scrollytelling?', 'No. A sticky element in CSS plus a few lines of IntersectionObserver is enough for most stories, as this template shows.'],
            ['Is scrollytelling good for SEO?', 'Yes, if the story text is real HTML on the page. Search engines read all the steps even though visitors see them one at a time.'],
        ],
    ],
    [
        'num' => 26, 'cat' => '03-layout-patterns', 'slug' => '026-horizontal-scroll', 'name' => 'Horizontal Scroll',
        'example' => 'A museum timeline of 100 years of trams',
        'title' => 'Free Horizontal Scroll Timeline Template in CSS (Live Demo)',
        'desc' => 'Free horizontal scroll timeline template with CSS scroll snap and arrow buttons. Built for a museum exhibition. Live demo, key CSS and HTML download.',
        'keywords' => 'horizontal scroll css, horizontal timeline template, scroll snap css, side scrolling website, timeline html css',
        'what' => [
            'A horizontal scroll section lets people move sideways through a set of panels, like flipping through an exhibition. It works well for timelines, where left to right feels like moving through time.',
            'CSS scroll snap does the hard part. Each card snaps into place when you stop, on touch screens and with a trackpad, and two arrow buttons help mouse users.',
        ],
        'when' => ['History timelines and museums', 'Company milestones and about pages', 'Product galleries', 'Case study sequences'],
        'features' => ['Scroll snap so every card lands neatly', 'Previous and next arrow buttons', 'Keyboard scrolling when the track is focused', 'Trams drawn in CSS for every era', 'Smooth scroll turns off for reduced motion'],
        'css' => ".track {\n  display: flex;\n  gap: 24px;\n  overflow-x: auto;\n  scroll-snap-type: x mandatory;\n  scroll-behavior: smooth;\n}\n.card {\n  flex: 0 0 min(420px, 85vw);\n  scroll-snap-align: start;\n}",
        'faq' => [
            ['How do you make a horizontal scroll section in CSS?', 'Use a flex container with overflow-x: auto, give each child a fixed flex basis, and add scroll-snap-type: x mandatory on the container with scroll-snap-align: start on the children.'],
            ['Can people with a mouse use horizontal scroll?', 'Many mice cannot scroll sideways, so add arrow buttons that call scrollBy(), like this template does.'],
            ['Is horizontal scroll bad for SEO?', 'No. All the cards are normal HTML on the page, so search engines see every one of them.'],
        ],
    ],
    [
        'num' => 27, 'cat' => '03-layout-patterns', 'slug' => '027-full-bleed', 'name' => 'Full Bleed',
        'example' => 'North Atlantic Walks, a hiking tour company',
        'title' => 'Free Full Bleed Website Template with Full Screen Sections',
        'desc' => 'Free full bleed website template with edge to edge, screen filling sections and big type over CSS landscapes. Built for a tour company. Live demo and download.',
        'keywords' => 'full bleed website, full screen sections css, full width website template, 100vh sections, travel website template',
        'what' => [
            'Full bleed means the picture runs right to the edge of the screen with no margins. Each section fills the whole window, so scrolling feels like moving from one scene to the next.',
            'It is the go to layout for travel and outdoor brands, where the place is the product. Big text sits at the bottom of each scene, over a soft dark fade so it stays readable.',
        ],
        'when' => ['Travel and tour companies', 'Hotels and resorts', 'Outdoor and adventure brands', 'Film, event and campaign pages'],
        'features' => ['Three full screen sections at 100vh', 'Landscapes, sunset and night sky drawn in CSS', 'Dark fade at the bottom for readable text', 'Big Unbounded headlines', 'Trip facts row and booking button'],
        'css' => ".full {\n  min-height: 100vh;\n  display: flex; flex-direction: column; justify-content: flex-end;\n  padding: 40px 6vw 8vh;\n  position: relative; overflow: hidden;\n}\n.bg { position: absolute; inset: 0; }\n.full .bg { box-shadow: inset 0 -40vh 30vh -10vh rgba(0,0,0,.55); }",
        'faq' => [
            ['What does full bleed mean in web design?', 'It means images or backgrounds run all the way to the edges of the screen with no margin or border around them.'],
            ['How do I keep text readable over a photo?', 'Add a dark gradient or inset shadow behind the text area, like the fade at the bottom of each section here, and use white bold text.'],
            ['Can I use real photos instead of CSS art?', 'Yes. Replace the .bg background with background-image: url(your-photo.jpg) and background-size: cover.'],
        ],
    ],
    [
        'num' => 28, 'cat' => '03-layout-patterns', 'slug' => '028-card-carousel', 'name' => 'Card Carousel',
        'example' => 'Kiln, a pottery class studio',
        'title' => 'Free CSS Card Carousel Template with Scroll Snap (Live Demo)',
        'desc' => 'Free card carousel template with CSS scroll snap, arrow buttons and dots. Swipeable course cards for a pottery studio. Live demo and HTML download.',
        'keywords' => 'css carousel, card slider html css, scroll snap carousel, swipe cards css, carousel without library',
        'what' => [
            'A card carousel shows a row of cards that people swipe or click through. It saves space when you have more items than fit on one screen, like classes, products or reviews.',
            'This one is built on native scrolling with scroll snap, so swiping feels natural on phones. A small script adds the arrow buttons and the dots that show where you are.',
        ],
        'when' => ['Courses and event listings', 'Product rows in online shops', 'Testimonials and reviews', 'Related articles'],
        'features' => ['Three cards on desktop, two on tablet, one and a bit on phone', 'Native swipe with scroll snap', 'Arrow buttons that disable at each end', 'Dots that follow the scroll position', 'Pots drawn in CSS with one custom property set'],
        'css' => ".rail {\n  display: grid;\n  grid-auto-flow: column;\n  grid-auto-columns: calc((100% - 48px) / 3);\n  gap: 24px;\n  overflow-x: auto;\n  scroll-snap-type: x mandatory;\n}\n.c { scroll-snap-align: start; }\n@media (max-width: 560px) { .rail { grid-auto-columns: 85%; } }",
        'faq' => [
            ['How do you make a carousel without a JavaScript library?', 'Use a scrolling container with scroll snap for the movement, then add a few lines of JavaScript for arrow buttons that call scrollBy().'],
            ['Why show part of the next card on phones?', 'A partly visible card tells people there is more to swipe. That is why the phone layout uses 85 percent width.'],
            ['Are carousels bad for conversions?', 'Auto playing sliders often are. A carousel people control themselves, with clear cards and prices, works well.'],
        ],
    ],
    [
        'num' => 29, 'cat' => '03-layout-patterns', 'slug' => '029-magazine-layout', 'name' => 'Magazine Layout',
        'example' => 'Tide and Table, a food and travel magazine',
        'title' => 'Free Magazine Layout Website Template in CSS (Live Demo)',
        'desc' => 'Free magazine website template with a cover story, CSS grid template areas, pull quote and article grid. Built for a food and travel magazine. Live demo and download.',
        'keywords' => 'magazine website template, magazine layout css, grid template areas, blog magazine template, editorial layout html',
        'what' => [
            'A magazine layout looks like the opening spread of a printed magazine. A big cover photo, a headline beside it, a pull quote and a caption, then a row of smaller stories.',
            'CSS grid-template-areas makes it easy to read and change. You name each area, draw the layout in the CSS like a small map, and redraw it for phones.',
        ],
        'when' => ['Online magazines and blogs', 'Food and travel publications', 'Newsletters with a web archive', 'Brand content hubs'],
        'features' => ['Cover story built with grid-template-areas', 'Italic pull quote with accent bar', 'Photo caption and credit line', 'Also in this issue grid with one wide story', 'Simple one column layout on phones'],
        'css' => ".cover {\n  display: grid;\n  grid-template-columns: repeat(6, 1fr);\n  grid-template-areas:\n    \"img img img img txt txt\"\n    \"img img img img txt txt\"\n    \"q   q   cap cap cap cap\";\n  gap: 24px;\n}\n.img { grid-area: img; }  .txt { grid-area: txt; }\n.q   { grid-area: q; }    .cap { grid-area: cap; }",
        'faq' => [
            ['What is grid-template-areas?', 'It is a CSS Grid property that lets you name areas of your layout and place them with a text map. It makes complex layouts easy to read and change.'],
            ['How is this different from the newspaper template?', 'The newspaper template flows text in columns like a daily paper. This one is image led, with a big cover story like a glossy magazine.'],
            ['Can I use this as a blog theme?', 'Yes. Use the cover section for your latest post and the grid for recent posts.'],
        ],
    ],
    [
        'num' => 30, 'cat' => '03-layout-patterns', 'slug' => '030-long-form-page', 'name' => 'Long Form Page',
        'example' => 'Plant a Street, a charity annual report',
        'title' => 'Free Long Form Single Page Template with Sticky Contents',
        'desc' => 'Free long form single page template with a sticky table of contents, reading progress bar and big number blocks. Built for a charity report. Live demo and download.',
        'keywords' => 'long form page template, single page website, sticky table of contents css, reading progress bar, annual report html template',
        'what' => [
            'A long form page puts a whole story on one page instead of many. Readers scroll from start to end, with a table of contents on the side so they always know where they are.',
            'It is great for reports, guides and case studies, and it is good for SEO too, because one strong page with all the detail often ranks better than five thin ones.',
        ],
        'when' => ['Annual and impact reports', 'Guides and how to articles', 'Case studies', 'Personal essays and long reads'],
        'features' => ['Sticky table of contents that highlights the current section', 'Reading progress bar across the top', 'Big number cards for key facts', 'Comfortable serif body text at 19px', 'Anchor links with smooth scroll'],
        'css' => ".layout { display: grid; grid-template-columns: 220px 1fr; gap: 60px; }\n.toc { position: sticky; top: 30px; align-self: start; }\narticle section { max-width: 66ch; scroll-margin-top: 30px; }\n.progress { position: fixed; top: 0; left: 0; height: 4px; background: #2f7d4f; }",
        'faq' => [
            ['How do I make a sticky table of contents?', 'Put the contents in a grid column next to the article and give it position: sticky, top: 30px and align-self: start.'],
            ['How does the reading progress bar work?', 'A few lines of JavaScript read how far down the page you are and set the width of a fixed bar at the top.'],
            ['Are long pages good for SEO?', 'Yes, when the content is useful and well structured. Clear headings and a table of contents also help Google show links to sections in the results.'],
        ],
    ],

    [
        'num' => 31, 'cat' => '04-ai-era-interfaces', 'slug' => '031-chat-ui', 'name' => 'Chat UI',
        'example' => 'Wayfarer, an AI travel assistant',
        'title' => 'Free AI Chat UI Template in HTML and CSS (Live Demo)',
        'desc' => 'Free chat interface template for an AI assistant. Sidebar of past chats, message bubbles, suggestion chips and a working input box. Live demo and HTML download.',
        'keywords' => 'chat ui template, ai chat interface html, chatbot ui css, chatgpt style ui, chat app template',
        'what' => [
            'A chat first interface puts a conversation at the center of the product. It is the layout people now expect from AI tools: past chats on the left, messages in the middle and a big input at the bottom.',
            'This template already works as a front end. You can type, press Enter, tap a suggestion chip, and a reply appears. Connect your own AI API where the demo reply is and it becomes a real assistant.',
        ],
        'when' => ['AI assistants and chatbots', 'Customer support widgets', 'Travel, shopping and booking helpers', 'Internal company knowledge tools'],
        'features' => ['Sidebar with recent chats grouped by date', 'User and assistant message styles', 'Structured answer card inside a reply', 'Suggestion chips that send a message', 'Enter to send, Shift and Enter for a new line'],
        'css' => ".app { display: grid; grid-template-columns: 260px 1fr; height: 100vh; }\n.chat { display: flex; flex-direction: column; height: 100vh; }\n.log { flex: 1; overflow-y: auto; padding: 30px max(24px, calc((100% - 760px) / 2)); }\n.msg.me {\n  margin-left: auto; width: fit-content;\n  background: #1f5c4a; color: #fff;\n  border-radius: 18px 18px 4px 18px; padding: 12px 16px;\n}",
        'faq' => [
            ['How do I connect this chat UI to a real AI?', 'Find the send function in the script. Instead of the demo reply, send the message to your AI API with fetch() and add the answer as a new assistant message.'],
            ['How do you keep the input at the bottom of the screen?', 'Make the chat area a flex column with height: 100vh, give the message log flex: 1 with overflow-y: auto, and the input box stays pinned at the bottom.'],
            ['Is this template mobile friendly?', 'Yes. On small screens the sidebar hides and the chat uses the full width.'],
        ],
    ],
    [
        'num' => 32, 'cat' => '04-ai-era-interfaces', 'slug' => '032-ai-dashboard', 'name' => 'AI Dashboard',
        'example' => 'Signalboard, an AI customer support dashboard',
        'title' => 'Free AI Dashboard Template with Command Palette (Live Demo)',
        'desc' => 'Free AI dashboard template for a support tool. KPI cards, CSS bar chart, ticket list and a working command palette opened with Ctrl K. Live demo and download.',
        'keywords' => 'ai dashboard template, admin dashboard html css, command palette css, saas dashboard template, kpi dashboard html',
        'what' => [
            'An AI dashboard shows what an AI system did and what still needs a human. Clear numbers at the top, a simple chart of the trend, and a short list of items waiting for a person.',
            'Most modern apps also have a command palette. Press Ctrl K (or Cmd K on a Mac) and a search box opens where you can jump anywhere or run an action. It is built in here with a few lines of JavaScript.',
        ],
        'when' => ['AI support and operations tools', 'SaaS admin panels', 'Analytics and reporting dashboards', 'Internal tools for teams'],
        'features' => ['Four KPI cards with change versus last week', 'Stacked bar chart made only with CSS', 'Needs a person list with status pills', 'Command palette on Ctrl K or Cmd K, closes with Escape', 'Filter as you type inside the palette'],
        'css' => ".pal {\n  position: fixed; inset: 0;\n  background: rgba(16, 24, 40, .35);\n  display: none; align-items: start; justify-content: center;\n  padding-top: 14vh;\n}\n.pal.open { display: flex; }\n.bars { display: flex; align-items: end; gap: 10px; height: 180px; }\n.bars i.ai { background: #3056d3; border-radius: 4px 4px 0 0; }",
        'faq' => [
            ['How do you make a Ctrl K command palette?', 'Listen for keydown, check for ctrlKey or metaKey plus the K key, then show a fixed overlay with a search input. Filter the list as the user types and close it on Escape.'],
            ['Can I make charts without a library?', 'Simple bar charts, yes. Each bar is an element with its height set as a percentage. For line charts or many data points, a library like Chart.js is easier.'],
            ['Is this dashboard free for commercial use?', 'Yes. It is MIT licensed, so you can use it in paid products and client projects.'],
        ],
    ],
    [
        'num' => 33, 'cat' => '04-ai-era-interfaces', 'slug' => '033-ai-glow-gradient', 'name' => 'AI Glow Gradient',
        'example' => 'Quill, an AI writing assistant',
        'title' => 'Free AI Glow Gradient Landing Page Template (Live Demo)',
        'desc' => 'Free AI style landing page template with a soft glowing mesh gradient, gradient text and a glowing border card on a dark theme. Live demo and HTML download.',
        'keywords' => 'ai landing page template, glow gradient css, gradient border css, ai startup website, mesh gradient background',
        'what' => [
            'The AI glow look is everywhere on new AI products: a dark page with a soft cloud of blue, violet and orange light behind the headline, and cards with a glowing gradient edge.',
            'The glow is three radial gradients blurred together. The glowing border is a gradient behind the card with 1px of padding, plus a blurred copy of it underneath. No images are used.',
        ],
        'when' => ['AI tools and startups', 'Developer products', 'App launch and waitlist pages', 'Tech event pages'],
        'features' => ['Blurred mesh glow made from three radial gradients', 'Gradient text on the key phrase', 'Card with a glowing gradient border', 'Before and after writing example', 'Dark theme with soft gray body text'],
        'css' => ".glow {\n  position: absolute; left: 50%; top: -180px;\n  width: 1100px; height: 700px; transform: translateX(-50%);\n  background:\n    radial-gradient(closest-side at 35% 55%, rgba(91,140,255,.55), transparent),\n    radial-gradient(closest-side at 60% 45%, rgba(184,107,255,.5), transparent),\n    radial-gradient(closest-side at 75% 65%, rgba(255,154,98,.35), transparent);\n  filter: blur(40px);\n}\n.gb { padding: 1px; border-radius: 20px; background: linear-gradient(135deg, #5b8cff, #b86bff, #ff9a62); }",
        'faq' => [
            ['How do you make a glowing gradient background in CSS?', 'Stack a few radial gradients in different colors on one element, then blur it with filter: blur(40px). Place it behind your content with position: absolute.'],
            ['How do I make a gradient border with rounded corners?', 'Wrap the card in an element with a gradient background and 1px padding, and give the inner card a solid background. The gradient shows through as the border.'],
            ['Why do AI products use this style?', 'The soft glow feels futuristic and calm at the same time. It is now so common that people link it with AI right away.'],
        ],
    ],
    [
        'num' => 34, 'cat' => '04-ai-era-interfaces', 'slug' => '034-prompt-box-hero', 'name' => 'Prompt Box Hero',
        'example' => 'Buildwell, an AI website builder',
        'title' => 'Free Prompt Box Hero Template for AI Products (Live Demo)',
        'desc' => 'Free prompt box hero template where a big input is the main hero. Rotating example prompts, suggestion chips and a word count. Live demo and HTML download.',
        'keywords' => 'prompt box ui, ai input hero, prompt input css, ai tool landing page, textarea hero section',
        'what' => [
            'A prompt box hero replaces the usual big picture with the product itself: a large text box that invites you to type. Lovable, v0 and many AI builders open this way, because trying it is the best pitch.',
            'The placeholder changes every few seconds to show ideas, the chips fill the box in one tap, and the main button only turns on once there is something to send.',
        ],
        'when' => ['AI builders and generators', 'Search products', 'Writing and design tools', 'Any product people should try right away'],
        'features' => ['Large prompt box with a focus glow', 'Placeholder that rotates through example ideas', 'Suggestion chips that fill the box', 'Button disabled until there is text', 'Built this week gallery below'],
        'css' => ".pb {\n  background: #fff;\n  border: 1px solid #e3ddd2;\n  border-radius: 22px;\n  padding: 14px;\n}\n.pb:focus-within {\n  border-color: #2a6df4;\n  box-shadow: 0 0 0 4px rgba(42, 109, 244, .15);\n}\ntextarea { width: 100%; border: 0; resize: none; min-height: 90px; font-size: 1.15rem; }",
        'faq' => [
            ['What is a prompt box hero?', 'It is a hero section where the main element is a text input for an AI prompt, so visitors can use the product right away instead of reading about it.'],
            ['How do I highlight the whole box when the textarea is focused?', 'Use :focus-within on the wrapper. It applies when any element inside it has focus.'],
            ['Does the rotating placeholder hurt accessibility?', 'The box has a proper label, and the rotation stops for people who prefer reduced motion.'],
        ],
    ],
    [
        'num' => 35, 'cat' => '04-ai-era-interfaces', 'slug' => '035-node-workflow', 'name' => 'Node Workflow Canvas',
        'example' => 'Relay, an automation builder',
        'title' => 'Free Node Workflow Editor Template in HTML and CSS (Live Demo)',
        'desc' => 'Free node workflow canvas template for an automation builder. Draggable nodes joined by curved SVG lines on a dotted grid, with a test run. Live demo and download.',
        'keywords' => 'node editor html, workflow builder ui, draggable nodes javascript, flow chart canvas css, automation builder template',
        'what' => [
            'A node canvas shows a process as boxes joined by lines. You see the trigger on the left, the steps in the middle and the result on the right. Tools like Zapier, n8n and AI agent builders all use it.',
            'Here the nodes are normal HTML cards you can drag around. The lines are SVG curves that redraw as you move a card, and Test run lights up each step in order.',
        ],
        'when' => ['Automation and integration tools', 'AI agent builders', 'Process and approval flows', 'Data pipeline editors'],
        'features' => ['Dotted grid canvas background', 'Draggable nodes with pointer events, works with touch', 'Curved SVG connectors that follow the nodes', 'Color coded step types', 'Test run animates each step and the lines'],
        'css' => ".canvas {\n  background-image: radial-gradient(#c9cdd4 1px, transparent 1px);\n  background-size: 22px 22px;\n}\n.node { position: absolute; width: 230px; border-radius: 14px; touch-action: none; }\npath { fill: none; stroke: #9aa1ad; stroke-width: 2; }\npath.live { stroke: #16a34a; stroke-dasharray: 6 6; animation: flow .8s linear infinite; }\n@keyframes flow { to { stroke-dashoffset: -12; } }",
        'faq' => [
            ['How do you draw lines between HTML elements?', 'Put an SVG behind the elements and draw a path for each link. Read the positions of the two elements and use a cubic curve (the C command) between them. Redraw when an element moves.'],
            ['How do you make elements draggable?', 'Listen for pointerdown, remember where you grabbed the element, and update its left and top on pointermove. Pointer events work for mouse and touch.'],
            ['Can I save the layout?', 'Yes. Read each node left and top values and save them as JSON in your backend or local storage.'],
        ],
    ],
    [
        'num' => 36, 'cat' => '04-ai-era-interfaces', 'slug' => '036-streaming-text', 'name' => 'Streaming Text',
        'example' => 'Recap, an AI meeting notes tool',
        'title' => 'Free Streaming Text Effect Template (AI Typing, Live Demo)',
        'desc' => 'Free streaming text UI template where AI text types itself out word by word with a blinking cursor. Built for meeting notes. Live demo and HTML download.',
        'keywords' => 'streaming text effect, ai typing effect css, typewriter effect javascript, blinking cursor css, chatgpt typing animation',
        'what' => [
            'Streaming text is the word by word typing effect you see when an AI writes an answer. It tells people something is happening and lets them start reading before the whole answer is ready.',
            'This template streams real formatted HTML, with headings and lists, not just plain text. A blinking block cursor follows the words, and a status dot switches from writing to ready.',
        ],
        'when' => ['AI writing and summary tools', 'Chat assistants', 'Onboarding messages', 'Product demos on landing pages'],
        'features' => ['Word by word streaming of formatted HTML', 'Blinking block cursor made with CSS', 'Status dot that pulses while writing', 'Replay button', 'Shows the full text at once for reduced motion'],
        'css' => ".cur {\n  display: inline-block;\n  width: .55em; height: 1.1em;\n  background: #22231f;\n  vertical-align: -.15em;\n  animation: blink 1s steps(1) infinite;\n}\n@keyframes blink { 50% { opacity: 0; } }\n@media (prefers-reduced-motion: reduce) { .cur { animation: none; } }",
        'faq' => [
            ['How do you make a typing effect in JavaScript?', 'Split the text into words and add one word at a time with setInterval. To keep formatting, walk through the text nodes of your HTML and fill each one in turn, as this template does.'],
            ['How do I stream a real AI response?', 'Most AI APIs can stream. Read the response body as a stream and append each chunk to the page as it arrives, instead of using a timer.'],
            ['How do you make a blinking cursor in CSS?', 'Use a small inline block with a background color and an animation that sets opacity to 0 halfway, with steps(1) so it blinks instead of fading.'],
        ],
    ],
    [
        'num' => 37, 'cat' => '04-ai-era-interfaces', 'slug' => '037-terminal-dev', 'name' => 'Terminal Developer',
        'example' => 'shipit, a command line deploy tool',
        'title' => 'Free Terminal Style Website Template for Developer Tools',
        'desc' => 'Free terminal style landing page template for a CLI tool. Dark monospace look, a terminal window that types commands, and a copy install button. Live demo and download.',
        'keywords' => 'terminal website template, developer landing page, cli tool website, terminal css, monospace website design',
        'what' => [
            'The terminal look speaks directly to developers. Monospace type, a dark background, green prompts and a terminal window that shows the tool working in a few lines.',
            'The typing animation shows a real command and its output, so people understand the product in five seconds. The install command sits right under the headline with a copy button.',
        ],
        'when' => ['CLI tools and SDKs', 'Open source projects', 'Developer APIs', 'Personal sites for engineers'],
        'features' => ['JetBrains Mono across the whole page', 'Terminal window with colored dots', 'Command that types itself, then output lines appear', 'Install snippet with a working copy button', 'Syntax style colors for paths, success and URLs'],
        'css' => ".term { background: #161a21; border: 1px solid #262c36; border-radius: 12px; }\n.bar i { width: 11px; height: 11px; border-radius: 50%; }\n.bar i:nth-child(1) { background: #ff7b72; }\n.bar i:nth-child(2) { background: #e3b341; }\n.bar i:nth-child(3) { background: #7ee787; }\n.install code::before { content: \"$ \"; color: #7d8699; }",
        'faq' => [
            ['How do I make a fake terminal window in HTML?', 'Use a dark box with a top bar of three colored dots, then a pre element in a monospace font for the commands. Color parts of each line with spans.'],
            ['How does the copy button work?', 'It calls navigator.clipboard.writeText() with the install command. It works on any site served over https, including GitHub Pages.'],
            ['Which font is best for a terminal look?', 'JetBrains Mono, Fira Code and IBM Plex Mono are all free and very readable.'],
        ],
    ],
    [
        'num' => 38, 'cat' => '04-ai-era-interfaces', 'slug' => '038-linear-style', 'name' => 'Linear Style Minimal',
        'example' => 'Tracklet, an issue tracker',
        'title' => 'Free Linear Style App Template: Dark Minimal UI (Live Demo)',
        'desc' => 'Free Linear style app template for an issue tracker. Dark, sharp and data dense list with status icons, priority bars and labels. Live demo and HTML download.',
        'keywords' => 'linear style ui, linear app design, dark minimal ui template, issue tracker template, saas app ui css',
        'what' => [
            'The Linear style comes from the Linear issue tracker, and many SaaS products now copy it. Dark background, small sharp text, thin lines and a lot of information in very little space.',
            'It works because nothing is wasted. Status, priority, labels and people are shown with tiny icons drawn in CSS, so each row stays one line tall and easy to scan.',
        ],
        'when' => ['Project and issue trackers', 'Developer tools', 'CRM and inbox style apps', 'Any product for power users'],
        'features' => ['Dark sidebar with workspace, teams and cycles', 'Grouped list: in progress, todo and done', 'Priority bars and urgent badge in CSS', 'Status circles, including a half filled in progress icon', 'Colored labels and avatar initials'],
        'css' => ".row {\n  display: grid;\n  grid-template-columns: 22px 70px 22px 1fr auto 24px 56px;\n  gap: 10px; align-items: center;\n  height: 40px; padding: 0 18px;\n  border-bottom: 1px solid #18191e;\n}\n.st.prog { border: 1.5px solid #e2b93b;\n  background: conic-gradient(#e2b93b 0 50%, transparent 50%); border-radius: 50%; }",
        'faq' => [
            ['What is Linear style design?', 'It is a dark, minimal and dense interface style made popular by the Linear app. It uses small text, thin borders, subtle hover states and tiny status icons.'],
            ['How do you make a half filled circle icon in CSS?', 'Give a round element a border and a background of conic-gradient(color 0 50%, transparent 50%).'],
            ['Which font suits this style?', 'Geist and Inter are the usual choices. This template uses Geist, which is free on Google Fonts.'],
        ],
    ],
    [
        'num' => 39, 'cat' => '04-ai-era-interfaces', 'slug' => '039-spotlight-cards', 'name' => 'Spotlight Cards',
        'example' => 'Lumen, an API platform',
        'title' => 'Free Spotlight Hover Card Effect in CSS (Live Demo)',
        'desc' => 'Free spotlight card template where cards and their borders glow wherever your cursor is. Dark feature grid made with CSS radial gradients. Live demo and download.',
        'keywords' => 'spotlight card css, mouse follow glow css, hover glow effect, cursor spotlight effect, glowing border hover css',
        'what' => [
            'Spotlight cards light up where your cursor is, like shining a torch over a dark surface. The glow spreads across the card and along its border, and moves with the mouse.',
            'A tiny script sends the cursor position to each card as two CSS variables. CSS does the rest with radial gradients, and a mask trick turns one of them into a glowing border.',
        ],
        'when' => ['Feature grids on dark SaaS sites', 'Pricing sections', 'Developer and API platforms', 'Portfolio project grids'],
        'features' => ['Soft glow that follows the cursor', 'Glowing border using mask composite', 'All cards react together as one surface', 'Bento style grid with one wide card', 'Glow always on for touch screens'],
        'css' => ".sp::before {\n  content: \"\"; position: absolute; inset: 0; border-radius: inherit;\n  background: radial-gradient(400px circle at var(--x) var(--y), rgba(94,234,212,.12), transparent 40%);\n}\n.sp::after {\n  content: \"\"; position: absolute; inset: 0; border-radius: inherit; padding: 1px;\n  background: radial-gradient(300px circle at var(--x) var(--y), rgba(94,234,212,.7), transparent 40%);\n  -webkit-mask: linear-gradient(#000 0 0) content-box, linear-gradient(#000 0 0);\n  -webkit-mask-composite: xor; mask-composite: exclude;\n}",
        'faq' => [
            ['How do you make a glow follow the mouse in CSS?', 'Set two CSS variables, like --x and --y, on pointermove with a line of JavaScript, then use them as the center of a radial gradient: radial-gradient(400px circle at var(--x) var(--y), color, transparent).'],
            ['How does the glowing border work?', 'A second gradient layer has 1px padding and a mask that removes everything except that padding, so only the edge shows.'],
            ['What happens on phones with no cursor?', 'The template shows the glow all the time on touch devices, using the hover: none media query.'],
        ],
    ],
    [
        'num' => 40, 'cat' => '04-ai-era-interfaces', 'slug' => '040-holographic', 'name' => 'Holographic',
        'example' => 'Nova Pass, a festival membership card',
        'title' => 'Free Holographic Card Effect in CSS with 3D Tilt (Live Demo)',
        'desc' => 'Free holographic card template with an iridescent rainbow shine that shifts as the card tilts under your cursor. Built for a festival pass. Live demo and download.',
        'keywords' => 'holographic css, iridescent effect css, holographic card effect, 3d tilt card css, rainbow foil css',
        'what' => [
            'Holographic style copies the rainbow foil on trading cards and ID cards. As you tilt the card, the colors slide across it and a bright shine moves with your view.',
            'The card tilts in 3D with CSS transforms. The rainbow is a wide gradient blended on top, and moving the mouse shifts its position, so the colors really seem to change with the angle.',
        ],
        'when' => ['Membership and loyalty cards', 'Event tickets and passes', 'Collectible and gaming sites', 'Premium product launches'],
        'features' => ['3D tilt that follows the cursor', 'Rainbow foil layer that slides as you move', 'Moving light spot on the surface', 'CSS drawn gold chip', 'Card resets smoothly when the cursor leaves'],
        'css' => ".card {\n  transform: rotateX(var(--rx)) rotateY(var(--ry));\n  transition: transform .15s ease-out;\n}\n.card::before {\n  content: \"\"; position: absolute; inset: 0;\n  mix-blend-mode: screen; opacity: .6;\n  background: linear-gradient(115deg, transparent 20%, #ff4fb4 30%, #3fe0ff 40%,\n    #7dff6a 50%, #ffd23f 60%, #9b6bff 70%, transparent 80%);\n  background-size: 250% 250%;\n  background-position: var(--mx) var(--my);\n}",
        'faq' => [
            ['How do you make a holographic effect in CSS?', 'Layer a wide rainbow gradient over the card with a blend mode like screen, then change its background-position as the mouse moves. Add a 3D tilt for the full effect.'],
            ['How does the 3D tilt work?', 'The parent has perspective set, and the card uses rotateX and rotateY with values based on where the cursor is over the card.'],
            ['Will it work on phones?', 'The card shows the rainbow at rest on phones. The tilt reacts to touch and drag as well.'],
        ],
    ],

    [
        'num' => 41, 'cat' => '05-color-light', 'slug' => '041-aurora-gradient', 'name' => 'Aurora Gradient',
        'example' => 'Solace, a skincare brand',
        'title' => 'Free Aurora Gradient Background CSS Template (Light, Live Demo)',
        'desc' => 'Free aurora gradient website template for a skincare brand. Soft flowing pastel colors on a light background, animated with one CSS conic gradient. Live demo and download.',
        'keywords' => 'aurora gradient css, animated gradient background, conic gradient css, pastel gradient website, soft gradient hero',
        'what' => [
            'An aurora gradient is a soft, slowly moving wash of color, like the northern lights seen through fog. On a light background it feels fresh and calm, which suits beauty, wellness and lifestyle brands.',
            'The whole effect is one conic gradient, blurred heavily and rotated very slowly. A fade at the bottom blends it into the page, so the products below sit on clean white.',
        ],
        'when' => ['Skincare and beauty brands', 'Wellness and health apps', 'Fashion and lifestyle shops', 'Soft product launch pages'],
        'features' => ['One blurred conic gradient that turns every 30 seconds', 'Fade into white so content stays clear', 'Rounded product cards with matching gradients', 'Gowun Batang serif for a gentle feel', 'Animation stops for reduced motion'],
        'css' => ".aur::before {\n  content: \"\"; position: absolute; inset: -30%;\n  background: conic-gradient(from 180deg, #b8f3e3, #c7d2ff, #ffd6e8, #fff1c2, #b8f3e3);\n  filter: blur(70px);\n  animation: spin 30s linear infinite;\n}\n@keyframes spin { to { transform: rotate(360deg); } }\n.aur::after { content: \"\"; position: absolute; inset: 0;\n  background: linear-gradient(180deg, transparent 60%, #fbfaff); }",
        'faq' => [
            ['How is this different from the frosted aurora template?', 'Frosted aurora (number 005) is dark, with glass panels on top. This one is light and pastel, made from a single rotating conic gradient, and fades into a white page.'],
            ['How do you animate a gradient smoothly in CSS?', 'Gradients themselves animate poorly, so rotate the element that holds the gradient instead. A blurred conic gradient turning slowly looks like flowing color.'],
            ['Does the animation slow the page down?', 'No. It only uses transform, which the browser handles on the GPU.'],
        ],
    ],
    [
        'num' => 42, 'cat' => '05-color-light', 'slug' => '042-duotone', 'name' => 'Duotone',
        'example' => 'Harbor Film Festival',
        'title' => 'Free Duotone Image Effect CSS Template (Live Demo)',
        'desc' => 'Free duotone website template for a film festival. Any image becomes two colors with CSS blend modes, in a bold poster layout. Live demo, key CSS and download.',
        'keywords' => 'duotone css, duotone image effect, css blend mode duotone, two color image css, spotify duotone',
        'what' => [
            'Duotone turns an image into just two colors, one for the shadows and one for the highlights. Spotify made it famous, and it is still one of the fastest ways to make mixed photos look like one brand.',
            'The trick uses two blend modes. The image is made grayscale and multiplied over the light color, then a layer of the dark color is placed on top with lighten. Change two CSS variables and you get a new palette.',
        ],
        'when' => ['Film and music festivals', 'Event and conference sites', 'Brands with photos from many sources', 'Poster style campaign pages'],
        'features' => ['Duotone effect on any image or SVG with pure CSS', 'Palette set by two CSS variables per image', 'Big Bebas Neue poster headline', 'Split hero with a lighthouse scene', 'Three featured films, each in its own palette'],
        'css' => ".duo { position: relative; background: var(--light); }\n.duo .src { filter: grayscale(1) contrast(1.2); mix-blend-mode: multiply; }\n.duo::after {\n  content: \"\"; position: absolute; inset: 0;\n  background: var(--dark);\n  mix-blend-mode: lighten;\n}",
        'faq' => [
            ['How do you make a duotone image in CSS?', 'Put the image in a box with the light color as background, make the image grayscale and set mix-blend-mode: multiply. Then add a layer in the dark color with mix-blend-mode: lighten on top.'],
            ['Does it work with real photos?', 'Yes. Replace the SVG with an img tag using the same .src class. Photos with good contrast work best.'],
            ['Can I change the colors per image?', 'Yes. Set --dark and --light on each .duo element, as the film cards in this template do.'],
        ],
    ],
    [
        'num' => 43, 'cat' => '05-color-light', 'slug' => '043-monochrome', 'name' => 'Monochrome',
        'example' => 'Atelier Verde, an architecture studio',
        'title' => 'Free Monochrome Color Scheme Website Template (Live Demo)',
        'desc' => 'Free monochrome website template for an architecture studio. Every color is a shade of one green, made with CSS color-mix from a single variable. Live demo and download.',
        'keywords' => 'monochrome website design, monochromatic color scheme css, color-mix css, one color website, architecture website template',
        'what' => [
            'A monochrome design uses one color in many shades, from nearly white to nearly black. It feels calm and confident, and it is very hard to get wrong because every color already matches.',
            'Here the whole palette comes from a single variable. CSS color-mix blends it with white for the light shades and with black for the dark ones, so changing one hex code recolors the whole site.',
        ],
        'when' => ['Architecture and interior studios', 'Law and consulting firms', 'Personal portfolios', 'Brands with one strong signature color'],
        'features' => ['Five shades made from one color with color-mix', 'Abstract building shapes in three tones', 'Project list with year, type and status', 'Swatch row showing the full palette', 'Tenor Sans headings for a quiet, elegant look'],
        'css' => ":root {\n  --h: #2f5d50;\n  --s50:  color-mix(in srgb, var(--h) 6%,  #fff);\n  --s100: color-mix(in srgb, var(--h) 14%, #fff);\n  --s300: color-mix(in srgb, var(--h) 40%, #fff);\n  --s500: var(--h);\n  --s700: color-mix(in srgb, var(--h) 70%, #000);\n  --s900: color-mix(in srgb, var(--h) 35%, #000);\n}",
        'faq' => [
            ['What is a monochrome color scheme?', 'It is a palette made from one hue in different lightness levels. It can be any color, not just gray.'],
            ['How do I make shades of one color in CSS?', 'Use color-mix(in srgb, yourColor 40%, #fff) for tints and color-mix with #000 for darker shades. All modern browsers support it.'],
            ['How do I switch the site to another color?', 'Change the --h variable at the top of the style tag. Every shade updates automatically.'],
        ],
    ],
    [
        'num' => 44, 'cat' => '05-color-light', 'slug' => '044-dark-mode', 'name' => 'Dark Mode First',
        'example' => 'Ledgerly, a budget app',
        'title' => 'Free Dark Mode Website Template with Light Mode Toggle',
        'desc' => 'Free dark mode first website template for a budget app. Designed dark, with a working light mode toggle that remembers the choice. Live demo, key CSS and download.',
        'keywords' => 'dark mode toggle css, dark mode website template, light dark theme switch, css variables theme, prefers color scheme',
        'what' => [
            'Dark mode first means the site is designed in dark colors from the start, and light mode is the extra option. Many apps now work this way, because people use them at night and dark screens are easier on the eyes.',
            'All colors live in CSS variables. The light theme simply redefines them under a data-theme attribute, and a small script flips it and saves the choice so it stays the same on the next visit.',
        ],
        'when' => ['Finance and budgeting apps', 'Developer and productivity tools', 'Media and streaming sites', 'Any app used late at night'],
        'features' => ['Dark theme by default, light theme on toggle', 'Theme saved in localStorage for the next visit', 'No flash of the wrong theme on load', 'Budget card with over limit warning color', 'Toggle icon changes from moon to sun'],
        'css' => ":root {\n  --bg: #0e1116; --surface: #161b22; --ink: #e8ecf1; --acc: #58d6a6;\n}\n[data-theme=\"light\"] {\n  --bg: #f6f7f9; --surface: #ffffff; --ink: #141a21; --acc: #11855e;\n}\nbody { background: var(--bg); color: var(--ink); }",
        'faq' => [
            ['How do you add a dark mode toggle with CSS?', 'Put all colors in CSS variables, redefine them under [data-theme="light"], and use a button that switches the data-theme attribute on the html element.'],
            ['How do I stop the page flashing the wrong theme?', 'Read the saved theme in a tiny script inside the head, before the page draws, as this template does.'],
            ['Should I follow the system setting instead?', 'You can. Check window.matchMedia("(prefers-color-scheme: dark)") when there is no saved choice, and use that as the starting theme.'],
        ],
    ],
    [
        'num' => 45, 'cat' => '05-color-light', 'slug' => '045-neon-cyberpunk', 'name' => 'Neon Cyberpunk',
        'example' => 'Voltage Arena, an esports tournament',
        'title' => 'Free Neon Cyberpunk Website Template in CSS (Live Demo)',
        'desc' => 'Free neon cyberpunk website template for an esports event. Glowing pink and cyan text, a synthwave sun, grid floor, scan lines and a glitch headline. Live demo and download.',
        'keywords' => 'neon css, cyberpunk website template, neon text effect css, synthwave css, glitch text css',
        'what' => [
            'Neon cyberpunk is the look of glowing signs on a dark night street. Hot pink and electric cyan light up a black background, with scan lines, a retro sun and a grid floor that runs to the horizon.',
            'The glow is layered text-shadow. The grid floor is two line gradients tilted back in 3D. The glitch copies the headline twice in pink and cyan, clips each copy and nudges it now and then.',
        ],
        'when' => ['Esports and gaming events', 'Night clubs and music nights', 'Tech and hackathon sites', 'Game launch pages'],
        'features' => ['Neon glow text made with layered shadows', 'Synthwave sun with sliced stripes', 'Perspective grid floor in pure CSS', 'Glitch headline that stops for reduced motion', 'Scan line overlay across the page'],
        'css' => "h1 { color: #fff; text-shadow: 0 0 6px #fff, 0 0 20px #ff2bd6, 0 0 50px #ff2bd6; }\n.floor {\n  background-image:\n    linear-gradient(#ff2bd6 1px, transparent 1px),\n    linear-gradient(90deg, #ff2bd6 1px, transparent 1px);\n  background-size: 60px 60px;\n  transform: perspective(400px) rotateX(62deg);\n}\nh1::before { content: attr(data-t); color: #1ef6ff; clip-path: inset(0 0 60% 0); }",
        'faq' => [
            ['How do you make neon text in CSS?', 'Use white or light text with several text shadows in your neon color at growing blur sizes, for example 0 0 6px #fff, 0 0 20px pink, 0 0 50px pink.'],
            ['How is the grid floor made?', 'Two repeating line gradients form a grid, and transform: perspective(400px) rotateX(62deg) tilts it back so it looks like a floor.'],
            ['Is the glitch effect accessible?', 'The copies are decoration made with CSS pseudo elements, so screen readers read the headline once. The glitch stops when reduced motion is on.'],
        ],
    ],
    [
        'num' => 46, 'cat' => '05-color-light', 'slug' => '046-earthy-natural', 'name' => 'Earthy Natural',
        'example' => 'Rootstock Farm, an organic veg box',
        'title' => 'Free Earthy Color Palette Website Template (Live Demo)',
        'desc' => 'Free earthy website template for an organic farm. Sand, olive, moss and terracotta colors, organic blob shapes and a warm serif. Live demo, key CSS and HTML download.',
        'keywords' => 'earthy color palette website, natural website template, organic farm website, earth tone css, blob shape css',
        'what' => [
            'Earthy design uses the colors of soil, plants and clay: sand, olive, moss green and terracotta. It feels warm, honest and close to nature, which is why food, farming and eco brands love it.',
            'Soft organic shapes help. The vegetable blob uses an eight value border radius, the wave between sections is a clip-path, and even the buttons have one corner that is less rounded, like a leaf.',
        ],
        'when' => ['Farms, food boxes and grocers', 'Eco and sustainable brands', 'Cafes and bakeries', 'Garden centers and outdoor shops'],
        'features' => ['Six color earth tone palette', 'Organic blob shape with radial gradient vegetables', 'Wavy section divider with clip-path', 'Leaf shaped buttons and cards', 'Box plans with one featured choice'],
        'css' => ":root { --sand: #efe6d6; --oat: #f7f1e6; --olive: #5f6b3c; --moss: #3c4526; --terra: #b8613e; }\n\n.blob { aspect-ratio: 1;\n  border-radius: 58% 42% 55% 45% / 48% 58% 42% 52%; }\n.btn { border-radius: 40px 40px 40px 8px; }\n.wave { clip-path: path('M0 30 Q 180 0 360 30 T 720 30 V60 H0 Z'); }",
        'faq' => [
            ['What colors are in an earthy palette?', 'Warm neutrals like sand and oat, greens like olive and moss, and a clay color like terracotta. Keep text a dark brown instead of pure black.'],
            ['How do you make a blob shape in CSS?', 'Use border-radius with eight values, four for the horizontal radii and four for the vertical, like 58% 42% 55% 45% / 48% 58% 42% 52%.'],
            ['How do I make a wavy section divider?', 'Use clip-path: path() with a curved line, or an inline SVG at the bottom of the section.'],
        ],
    ],
    [
        'num' => 47, 'cat' => '05-color-light', 'slug' => '047-pastel-dream', 'name' => 'Pastel Dream',
        'example' => 'Cloud Nine, a baby clothing shop',
        'title' => 'Free Pastel Website Template for Online Shops (Live Demo)',
        'desc' => 'Free pastel website template for a baby clothing shop. Soft candy colors, CSS clouds, rounded product cards and add buttons. Live demo, key CSS and HTML download.',
        'keywords' => 'pastel website template, pastel color palette css, baby shop website, css cloud shape, soft ecommerce template',
        'what' => [
            'Pastel design uses soft, light colors like baby pink, sky blue, mint, lemon and lilac. It feels gentle and happy, and works well for products for children, weddings and anything sweet.',
            'The trick is to keep text a deep muted purple instead of black, so contrast stays good without breaking the soft mood. The floating clouds are one element each, with two round pseudo elements on top.',
        ],
        'when' => ['Baby and kids shops', 'Wedding and party brands', 'Bakeries and sweet shops', 'Apps for relaxation or journaling'],
        'features' => ['Five color pastel palette', 'Floating CSS clouds with soft shadows', 'Product cards that pick up their own pastel color', 'T-shirt shapes made with clip-path', 'Deep purple text for good contrast'],
        'css' => ":root { --pink: #ffd9e4; --blue: #d6ecff; --mint: #d8f5e8; --lemon: #fff3c4; --lilac: #e8dcff; --ink: #4a4166; }\n\n.cloud { background: #fff; border-radius: 60px; height: 50px; }\n.cloud::before, .cloud::after { content: \"\"; position: absolute; background: #fff; border-radius: 50%; }\n.cloud::before { width: 60px; height: 60px; top: -30px; left: 24px; }",
        'faq' => [
            ['What is a pastel color palette?', 'It is a set of very light, soft colors with lots of white mixed in, like baby pink, sky blue, mint and lavender.'],
            ['How do I keep pastel sites readable?', 'Use a dark, slightly colored text such as deep purple or navy. Pastel text on pastel backgrounds is too light to read.'],
            ['How do you draw a cloud in CSS?', 'Use a rounded pill shape, then add two circles on top with ::before and ::after.'],
        ],
    ],
    [
        'num' => 48, 'cat' => '05-color-light', 'slug' => '048-high-contrast', 'name' => 'High Contrast Accessible',
        'example' => 'Brookfield Council, a local government site',
        'title' => 'Free Accessible High Contrast Website Template (WCAG)',
        'desc' => 'Free high contrast accessible website template for a local council. WCAG AAA colors, big focus rings, skip link and text size buttons. Live demo, key CSS and download.',
        'keywords' => 'accessible website template, high contrast css, wcag compliant template, government website template, focus ring css',
        'what' => [
            'A high contrast accessible design puts everyone first: people with low vision, older users, people on bright screens outside, and keyboard users. Black on white, blue underlined links, large text and focus rings you cannot miss.',
            'It follows the same ideas as the UK government design system. There is a skip link, every button is at least 44 pixels tall, and the text size buttons change one variable that scales the whole page.',
        ],
        'when' => ['Government and council websites', 'Health services and clinics', 'Schools and universities', 'Charities and public services'],
        'features' => ['Black and white text with contrast above 15 to 1', 'Yellow and black focus ring on every control', 'Skip to main content link', 'Three text size buttons that scale the page', 'Atkinson Hyperlegible, a font made for low vision readers'],
        'css' => ":root { font-size: var(--fs, 18px); }\n:focus-visible {\n  outline: 4px solid #000;\n  box-shadow: 0 0 0 8px #ffbf47;\n}\n.skip { position: absolute; left: -9999px; }\n.skip:focus { left: 12px; top: 12px; }\na { color: #0b3d91; text-decoration-thickness: 2px; text-underline-offset: 3px; }",
        'faq' => [
            ['What contrast ratio does WCAG need?', 'WCAG AA needs 4.5 to 1 for normal text and AAA needs 7 to 1. The main text in this template is black on white, which is 21 to 1.'],
            ['What is a skip link?', 'It is a hidden link at the top that appears when you press Tab. It lets keyboard users jump past the menu straight to the content.'],
            ['Which font is best for accessibility?', 'Atkinson Hyperlegible was designed by the Braille Institute for readers with low vision. It is free on Google Fonts.'],
        ],
    ],
    [
        'num' => 49, 'cat' => '05-color-light', 'slug' => '049-grainy-gradient', 'name' => 'Grainy Gradient',
        'example' => 'Late Signal, a podcast',
        'title' => 'Free Grainy Gradient CSS Template with Noise Texture',
        'desc' => 'Free grainy gradient website template for a podcast. Warm mesh gradients with film grain noise from an inline SVG filter, no image files. Live demo and download.',
        'keywords' => 'grainy gradient css, noise texture css, grain effect css, mesh gradient css, svg feturbulence noise',
        'what' => [
            'A grainy gradient adds film grain on top of smooth color, so it looks printed or photographed instead of flat and digital. It is one of the biggest looks of the last few years, from Stripe to album covers.',
            'The mesh is four radial gradients at the corners. The grain is an SVG noise filter written straight into the CSS as a data URL, blended with overlay. There is no image file to download.',
        ],
        'when' => ['Podcasts and music', 'Creative agencies', 'Tech startups that want warmth', 'Posters and event pages'],
        'features' => ['Mesh gradient from four radial gradients', 'Film grain from an inline SVG feTurbulence filter', 'One reusable .grain class for any element', 'Episode cards with their own color mesh', 'Play button drawn in CSS'],
        'css' => ".grain { position: relative; isolation: isolate; }\n.grain::after {\n  content: \"\"; position: absolute; inset: 0; z-index: -1;\n  opacity: .45; mix-blend-mode: overlay; pointer-events: none;\n  background-image: url(\"data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='200' height='200'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='.85' numOctaves='3'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)'/%3E%3C/svg%3E\");\n}",
        'faq' => [
            ['How do you add a grain texture in CSS?', 'Use an SVG with an feTurbulence filter as a background image in a pseudo element, and blend it over your gradient with mix-blend-mode: overlay.'],
            ['Why does isolation: isolate matter here?', 'It keeps the grain layer blending only with its own element, so it does not mix with things behind it.'],
            ['Will the grain make the page slow?', 'No. The SVG is tiny and repeats as a normal background image.'],
        ],
    ],
    [
        'num' => 50, 'cat' => '05-color-light', 'slug' => '050-glow-borders', 'name' => 'Glow Borders',
        'example' => 'Northstar, a hosting pricing page',
        'title' => 'Free Animated Glow Border CSS Template for Pricing Cards',
        'desc' => 'Free animated glow border template for a pricing page. Light runs around the featured plan with a conic gradient and CSS @property. Live demo, key CSS and download.',
        'keywords' => 'animated border css, glowing border css, conic gradient border, css property animation, pricing table template',
        'what' => [
            'A glow border draws a line of light that keeps running around the edge of a card. On a pricing page it points straight at the plan you want people to pick.',
            'The border is a conic gradient in the border box, behind a solid card background in the padding box. CSS @property makes the gradient angle animatable, so the light spins with no JavaScript.',
        ],
        'when' => ['Pricing tables', 'Featured products or plans', 'Call to action cards', 'Dark SaaS and developer sites'],
        'features' => ['Light that runs around the featured card', 'Soft blurred glow under the border', 'Animated with @property, no JavaScript', 'Three plan pricing layout', 'Stops at a nice angle for reduced motion'],
        'css' => "@property --a { syntax: \"<angle>\"; initial-value: 0deg; inherits: false; }\n\n.glow {\n  border: 2px solid transparent;\n  background:\n    linear-gradient(#0e1422, #0e1422) padding-box,\n    conic-gradient(from var(--a), transparent 0 60%, #38bdf8, #a78bfa, #f472b6, transparent 95%) border-box;\n  animation: rot 4s linear infinite;\n}\n@keyframes rot { to { --a: 360deg; } }",
        'faq' => [
            ['How do you make an animated gradient border in CSS?', 'Register an angle with @property, use it in a conic gradient on the border box, and animate the angle from 0deg to 360deg with keyframes.'],
            ['Does @property work in all browsers?', 'Yes. Chrome, Edge, Safari and Firefox all support it now.'],
            ['How do I keep rounded corners with a gradient border?', 'Use two backgrounds: a solid color on padding-box and the gradient on border-box, with a transparent border. Rounded corners then work normally.'],
        ],
    ],

    [
        'num' => 51, 'cat' => '06-typography', 'slug' => '051-kinetic-type', 'name' => 'Kinetic Type',
        'example' => 'Shift, a dance studio',
        'title' => 'Free Kinetic Typography CSS Template (Animated Text, Live Demo)',
        'desc' => 'Free kinetic typography website template for a dance studio. Letters that stretch and bounce one after another, plus sliding text rows. Pure CSS, live demo and download.',
        'keywords' => 'kinetic typography css, animated text css, text animation template, moving letters css, marquee text css',
        'what' => [
            'Kinetic typography means text that moves. Letters stretch, squash and bounce, and whole lines slide across the screen. It turns the words themselves into the main visual, which suits brands about movement, music and energy.',
            'Each letter is its own span with a small delay set by a CSS variable, so the bounce travels along the word like a wave. The sliding rows are a doubled line of text moved with translateX, so they loop without a gap.',
        ],
        'when' => ['Dance, fitness and sports brands', 'Music and event sites', 'Agency and portfolio intros', 'Launch pages that need energy'],
        'features' => ['Letters that stretch and bounce in a wave', 'Delay per letter set with one CSS variable', 'Two text rows sliding in opposite directions', 'Screen readers read each word once', 'All motion stops for reduced motion'],
        'css' => ".word span {\n  display: inline-block;\n  transform-origin: bottom;\n  animation: hop 2.4s cubic-bezier(.6, 0, .3, 1) infinite;\n  animation-delay: calc(var(--i) * .08s);\n}\n@keyframes hop {\n  0%, 60%, 100% { transform: scaleY(1); }\n  20% { transform: scaleY(1.35) translateY(-4%); }\n  35% { transform: scaleY(.8); }\n}",
        'faq' => [
            ['What is kinetic typography?', 'It is text that moves or changes shape as part of the design, like letters bouncing, stretching or sliding across the page.'],
            ['How do you animate each letter separately?', 'Wrap every letter in a span with a number, like style="--i:2", and use animation-delay: calc(var(--i) * .08s) so each one starts a little later.'],
            ['Is animated text bad for accessibility?', 'It can be. This template gives each word an aria-label so it is read once, hides the letter spans from screen readers, and stops all motion for reduced motion users.'],
        ],
    ],
    [
        'num' => 52, 'cat' => '06-typography', 'slug' => '052-variable-fonts', 'name' => 'Variable Fonts',
        'example' => 'Flexa, a type foundry specimen page',
        'title' => 'Free Variable Font CSS Template with Live Sliders (Demo)',
        'desc' => 'Free variable font template with live sliders for weight, width and slant, plus words that change weight on hover. Built as a type specimen. Live demo and download.',
        'keywords' => 'variable fonts css, font-variation-settings, variable font slider, roboto flex, type specimen template',
        'what' => [
            'A variable font is one font file that holds every weight and width in between. Instead of loading Light, Regular and Bold separately, you pick any value you like, such as weight 640, and even animate between them.',
            'This template uses Roboto Flex from Google Fonts. The sliders write their values into CSS variables, and font-variation-settings reads them. Hover a word in the sentence to watch it grow from thin to heavy.',
        ],
        'when' => ['Type foundries and font shops', 'Design studio sites', 'Interactive headlines', 'Brand pages that need one flexible font'],
        'features' => ['Weight, width and slant sliders that update live', 'Editable specimen text, click and type', 'Words that change weight and width on hover', 'Four axis examples at the bottom', 'One font file for every style on the page'],
        'css' => ":root { --w: 600; --wd: 100; --sl: 0; }\n\n.big {\n  font-family: \"Roboto Flex\", sans-serif;\n  font-variation-settings: \"wght\" var(--w), \"wdth\" var(--wd), \"slnt\" var(--sl);\n  transition: font-variation-settings .15s;\n}\n.hov span { font-variation-settings: \"wght\" 200, \"wdth\" 60; transition: font-variation-settings .35s; }\n.hov span:hover { font-variation-settings: \"wght\" 1000, \"wdth\" 151; }",
        'faq' => [
            ['What is a variable font?', 'It is a single font file that contains a full range of styles along one or more axes, such as weight, width or slant, so you can use any value in between.'],
            ['How do I use a variable font in CSS?', 'Load it like any web font, then set font-variation-settings: "wght" 640, "wdth" 90. For weight you can also just use font-weight with any number.'],
            ['Are variable fonts good for page speed?', 'Usually yes. One variable file often replaces four or more static files, which means fewer downloads.'],
        ],
    ],
    [
        'num' => 53, 'cat' => '06-typography', 'slug' => '053-oversized-serif', 'name' => 'Oversized Serif',
        'example' => 'Maison Clair, a boutique hotel',
        'title' => 'Free Oversized Serif Typography Website Template (Live Demo)',
        'desc' => 'Free oversized serif website template for a boutique hotel. Huge high contrast Bodoni headlines, fine rules and generous white space. Live demo and HTML download.',
        'keywords' => 'serif typography website, large serif headline, luxury website template, bodoni font css, elegant hotel website',
        'what' => [
            'Oversized serif design uses one giant, elegant serif headline as the hero. The thin and thick strokes of a font like Bodoni look beautiful when they are huge, and the size alone says premium.',
            'Everything around it stays quiet: a light sans serif for the text, thin black rules, and plenty of empty space. The indented italic line adds movement without any images.',
        ],
        'when' => ['Boutique hotels and restaurants', 'Fashion and jewelry brands', 'Wine, perfume and luxury goods', 'Galleries and cultural events'],
        'features' => ['Bodoni Moda headline up to 15rem', 'Indented italic second line in gold', 'Jost light for calm body text', 'Thin rules to divide sections', 'Room list with name, details and price'],
        'css' => "h1 {\n  font-family: \"Bodoni Moda\", serif;\n  font-weight: 400;\n  font-size: clamp(4.4rem, 16vw, 15rem);\n  line-height: .86;\n  letter-spacing: -.03em;\n}\nh1 em { display: block; padding-left: 12vw; color: #9c7a45; }",
        'faq' => [
            ['Which serif fonts look good very large?', 'High contrast fonts like Bodoni Moda, Playfair Display and DM Serif Display look best big, because their thin strokes need size to shine.'],
            ['How do I make a headline scale with the screen?', 'Use clamp() with a vw unit, for example font-size: clamp(4.4rem, 16vw, 15rem).'],
            ['Why use tight line height on big headlines?', 'Large type looks loose with normal spacing. A line height under 1, like .86, keeps big lines together as one shape.'],
        ],
    ],
    [
        'num' => 54, 'cat' => '06-typography', 'slug' => '054-outline-text', 'name' => 'Outline Text',
        'example' => 'Museum of Sound, an exhibition site',
        'title' => 'Free Outline Text CSS Template with Hover Fill (Live Demo)',
        'desc' => 'Free outline text website template for a museum. Hollow stroked letters that fill with color on hover, in a bold stacked list. Pure CSS, live demo and download.',
        'keywords' => 'outline text css, text stroke css, hollow text effect, webkit text stroke, hover text fill css',
        'what' => [
            'Outline text shows only the edges of the letters, with the inside left empty. It looks light and modern even at huge sizes, and it pairs well with one solid word to create contrast.',
            'The effect is -webkit-text-stroke with a transparent text color. On hover the color fills in, which makes a simple list of links feel interactive and fun.',
        ],
        'when' => ['Museums and exhibitions', 'Menus and navigation lists', 'Portfolio project lists', 'Sports and fashion headlines'],
        'features' => ['Hollow letters with a 2px stroke', 'One filled word in the headline for contrast', 'Room list that fills with yellow on hover and focus', 'Wide Archivo letters using font-stretch', 'Works in every modern browser'],
        'css' => ".o {\n  color: transparent;\n  -webkit-text-stroke: 2px #f2efe6;\n  transition: color .25s;\n}\n.rooms a:hover .o,\n.rooms a:focus-visible .o {\n  color: #f2c14e;\n  -webkit-text-stroke-color: #f2c14e;\n}",
        'faq' => [
            ['How do you make outline text in CSS?', 'Set color: transparent and add -webkit-text-stroke: 2px with the outline color. Despite the prefix, it works in Chrome, Safari, Edge and Firefox.'],
            ['Is outline text readable?', 'Only at large sizes. Use it for headlines and big links, and keep body text solid.'],
            ['Which fonts work best for outline text?', 'Heavy, wide fonts, such as Archivo Black, Anton or Unbounded. Thin fonts leave too little shape to outline.'],
        ],
    ],
    [
        'num' => 55, 'cat' => '06-typography', 'slug' => '055-font-pairing', 'name' => 'Mixed Font Pairing',
        'example' => 'Paper Lantern, an independent bookshop',
        'title' => 'Free Font Pairing Website Template: Serif and Sans Mix',
        'desc' => 'Free font pairing website template for a bookshop. Italic serif and bold grotesk mixed inside the same headline for an editorial feel. Live demo and HTML download.',
        'keywords' => 'font pairing css, serif and sans serif pairing, mixed fonts headline, instrument serif, editorial typography',
        'what' => [
            'Mixed font pairing puts two very different fonts in the same line: a bold, tight sans serif and a soft italic serif. The switch between them adds rhythm and emphasis, like a voice changing tone mid sentence.',
            'It is simple to build. Two classes, one for each font, used on spans inside the headline. The trick is to make the serif a touch larger so both fonts look the same size.',
        ],
        'when' => ['Bookshops and publishers', 'Editorial blogs and magazines', 'Creative agencies', 'Coffee shops and lifestyle brands'],
        'features' => ['Inter Tight and Instrument Serif mixed in headlines', 'Italic serif words in red for emphasis', 'Book cover cards made with CSS', 'Staff pick notes in italic serif', 'Same pairing used in the logo'],
        'css' => ".s { font-family: \"Instrument Serif\", serif; font-style: italic; font-weight: 400; }\n.g { font-weight: 800; letter-spacing: -.04em; }\n\nh1 {\n  font-family: \"Inter Tight\", sans-serif;\n  font-weight: 800; letter-spacing: -.045em;\n}\nh1 .s { font-size: 1.12em; color: #c1382b; }",
        'faq' => [
            ['What is a good font pairing for websites?', 'A reliable rule is one serif and one sans serif with clear differences. Instrument Serif with Inter Tight, or Playfair Display with Source Sans, both work well.'],
            ['Why make the serif slightly bigger?', 'Serif italics usually look smaller than a bold sans at the same size. Scaling them to about 1.1em evens them out.'],
            ['How many fonts should a site use?', 'Two is plenty for most sites. More than three starts to look messy.'],
        ],
    ],
    [
        'num' => 56, 'cat' => '06-typography', 'slug' => '056-image-in-text', 'name' => 'Image in Text',
        'example' => 'Alpenglow, a ski resort',
        'title' => 'Free Image Inside Text CSS Template (Text Mask, Live Demo)',
        'desc' => 'Free text mask website template for a ski resort. A mountain scene shows through giant letters using background-clip text. Live demo, key CSS and HTML download.',
        'keywords' => 'image inside text css, background clip text, text mask css, photo in text, knockout text css',
        'what' => [
            'Image in text fills giant letters with a picture, so you see the scene through the word. It joins the headline and the hero image into one strong shape.',
            'The effect is background-clip: text with transparent text color. Here the picture is a small SVG mountain scene written into the CSS, and the same background is reused for the big numbers further down.',
        ],
        'when' => ['Travel and resort sites', 'Film and event titles', 'Outdoor and adventure brands', 'Portfolio headers'],
        'features' => ['Giant headline filled with a mountain scene', 'Scene is an inline SVG, no image file', 'Same image inside the fact numbers', 'Wide banner using the full scene', 'Works in all modern browsers'],
        'css' => "h1.scene {\n  font-family: Anton, sans-serif;\n  font-size: clamp(6rem, 27vw, 26rem);\n  background: url(mountains.svg) center / cover no-repeat;\n  -webkit-background-clip: text;\n  background-clip: text;\n  color: transparent;\n}",
        'faq' => [
            ['How do you put an image inside text with CSS?', 'Give the text a background image, then set background-clip: text (plus the -webkit- version) and color: transparent. The image only shows inside the letters.'],
            ['Why did my background-clip text stop working?', 'The background shorthand resets background-clip. Put background-clip after the shorthand, or on a more specific selector, as this template does.'],
            ['Can I use a real photo?', 'Yes. Swap the SVG for any photo URL. Heavy, wide fonts show the most of the picture.'],
        ],
    ],
    [
        'num' => 57, 'cat' => '06-typography', 'slug' => '057-gradient-text', 'name' => 'Gradient Text',
        'example' => 'Sunset Sound, a festival lineup',
        'title' => 'Free Animated Gradient Text CSS Template (Live Demo)',
        'desc' => 'Free gradient text website template for a festival lineup. Artist names in warm sunset gradients that slowly shift, made with background-clip text. Live demo and download.',
        'keywords' => 'gradient text css, animated gradient text, css text gradient, festival lineup template, colorful text css',
        'what' => [
            'Gradient text fills words with a blend of colors instead of one flat color. Animate the gradient and the colors slowly flow through the letters, like a sunset moving across the sky.',
            'The gradient is three times wider than the text, and an animation moves its position. That keeps it smooth and cheap for the browser, with no JavaScript.',
        ],
        'when' => ['Festival and event lineups', 'Hero headlines on dark sites', 'Music and nightlife brands', 'Big numbers and stats'],
        'features' => ['Warm sunset gradient on every headliner', 'Slow flowing color animation', 'Lineup layout by day with support acts', 'Dela Gothic One for bold festival type', 'Animation stops for reduced motion'],
        'css' => ".gt {\n  background: linear-gradient(90deg, #ffd166, #ff8c42, #ff3c7a, #b14aed, #ff8c42, #ffd166);\n  background-size: 300% 100%;\n  -webkit-background-clip: text;\n  background-clip: text;\n  color: transparent;\n  animation: shift 10s linear infinite;\n}\n@keyframes shift { to { background-position: 300% 0; } }",
        'faq' => [
            ['How do you make gradient text in CSS?', 'Set a linear gradient as the background, add background-clip: text and -webkit-background-clip: text, and make the text color transparent.'],
            ['How do I animate a text gradient smoothly?', 'Make the background wider than the text with background-size: 300%, repeat the first color at the end, and animate background-position.'],
            ['Does gradient text work for SEO?', 'Yes. It is still normal text in the HTML, so search engines read it as usual.'],
        ],
    ],
    [
        'num' => 58, 'cat' => '06-typography', 'slug' => '058-handwritten-accents', 'name' => 'Handwritten Accents',
        'example' => 'Nonna\'s Kitchen, a cooking school',
        'title' => 'Free Handwritten Underline and Circle CSS Template (Live Demo)',
        'desc' => 'Free handwritten accents template for a cooking school. Scribbled underlines, circles, arrows and notes drawn with SVG over a clean layout. Live demo and download.',
        'keywords' => 'hand drawn underline css, svg scribble, handwritten font website, circle text css, caveat font template',
        'what' => [
            'Handwritten accents add little human marks to a clean page: a scribbled underline, a circle around a word, an arrow pointing at a note. It feels like someone went over the page with a pen for you.',
            'Each mark is a small inline SVG path placed behind a word. They draw themselves in on load using stroke-dasharray, and the notes use Caveat, a free handwriting font.',
        ],
        'when' => ['Cooking schools and food blogs', 'Teachers and tutors', 'Small shops and makers', 'Friendly SaaS and onboarding pages'],
        'features' => ['Scribbled underline and circle drawn with SVG', 'Marks draw themselves in on page load', 'Handwritten note with a curved arrow', 'Card labels in handwriting that sit on the border', 'Drawing stops for reduced motion'],
        'css' => ".mark { position: relative; white-space: nowrap; }\n.mark svg { position: absolute; left: -2%; width: 104%; pointer-events: none; }\n.under svg { bottom: -.18em; height: .35em; }\n\n.draw path {\n  stroke-dasharray: 600; stroke-dashoffset: 600;\n  animation: draw 1.2s .4s ease forwards;\n}\n@keyframes draw { to { stroke-dashoffset: 0; } }",
        'faq' => [
            ['How do you make a hand drawn underline in CSS?', 'Place a small SVG with a slightly wavy path under the word, stretched to its width with preserveAspectRatio="none".'],
            ['How does the draw in animation work?', 'Set stroke-dasharray and stroke-dashoffset to the path length so the line is hidden, then animate the offset to 0 so it appears as if drawn.'],
            ['Which handwriting fonts are free?', 'Caveat, Kalam, Patrick Hand and Gochi Hand are all free on Google Fonts and easy to read.'],
        ],
    ],
    [
        'num' => 59, 'cat' => '06-typography', 'slug' => '059-monospace', 'name' => 'Monospace',
        'example' => 'Byte Sized Weekly, a developer newsletter',
        'title' => 'Free Monospace Website Template for Newsletters (Live Demo)',
        'desc' => 'Free monospace website template for a developer newsletter. One mono font on a character grid, a light paper look, aligned columns and a sign up form. Live demo and download.',
        'keywords' => 'monospace website design, mono font website, newsletter landing page, ibm plex mono, minimal text website',
        'what' => [
            'A monospace site uses one font where every letter is the same width, like an old typewriter or a code editor. It looks honest and technical, and it makes text line up in neat columns.',
            'The layout is measured in ch units, the width of one character. The page is 74 characters wide, gaps are two characters, and the issue list columns line up because every letter takes the same space.',
        ],
        'when' => ['Newsletters and blogs for developers', 'Personal sites and online notes', 'Docs and changelogs', 'Minimal studio sites'],
        'features' => ['IBM Plex Mono for every word on the page', 'Spacing and widths set in ch units', 'Blinking underscore after the headline', 'Working sign up form with a confirmation', 'Aligned issue list with numbers and reading time'],
        'css' => "body { font-family: \"IBM Plex Mono\", monospace; }\n.wrap { max-width: 74ch; margin: 0 auto; padding: 40px 2ch; }\n.issue {\n  display: grid;\n  grid-template-columns: 8ch 1fr 6ch;\n  gap: 2ch;\n}\nh1::after { content: \"_\"; animation: b 1s steps(1) infinite; }",
        'faq' => [
            ['What is the ch unit in CSS?', 'One ch is the width of the zero character in the current font. In a monospace font every character has that width, so ch is perfect for text based layouts.'],
            ['Is a monospace font good for reading?', 'For short text, yes. Modern mono fonts like IBM Plex Mono and JetBrains Mono are designed to be comfortable. Keep lines under about 75 characters.'],
            ['Can I connect the form to a newsletter service?', 'Yes. Point the form action to your provider, such as Buttondown, Mailchimp or ConvertKit.'],
        ],
    ],
    [
        'num' => 60, 'cat' => '06-typography', 'slug' => '060-vertical-text', 'name' => 'Vertical Text',
        'example' => 'Kumo, a Japanese tea house',
        'title' => 'Free Vertical Text CSS Template with writing-mode (Live Demo)',
        'desc' => 'Free vertical text website template for a Japanese tea house. Top to bottom writing with CSS writing-mode, vertical labels and a red stamp. Live demo and HTML download.',
        'keywords' => 'vertical text css, writing-mode vertical-rl, japanese website template, vertical labels css, rotated text css',
        'what' => [
            'Vertical text runs from top to bottom instead of left to right. In Japanese and Chinese it is a traditional way to write, and on the web it adds a calm, poster like feel to a layout.',
            'CSS writing-mode: vertical-rl turns any element vertical. Japanese characters stand upright on their own, and English stays readable too. It is real text, so it can be selected, translated and searched.',
        ],
        'when' => ['Japanese, Chinese and Korean brands', 'Tea houses, restaurants and ryokans', 'Fashion and editorial layouts', 'Side labels and section markers'],
        'features' => ['Large vertical Japanese headline with writing-mode', 'Red vertical stamp like a seal', 'Menu with vertical labels beside each item', 'Correct lang="ja" on Japanese text', 'Noto Serif JP and Zen Kaku Gothic New fonts'],
        'css' => ".v {\n  writing-mode: vertical-rl;\n  text-orientation: mixed;\n}\n.jp {\n  font-family: \"Noto Serif JP\", serif;\n  font-size: clamp(3.4rem, 8vw, 6.4rem);\n  letter-spacing: .1em;\n}",
        'faq' => [
            ['How do you make vertical text in CSS?', 'Use writing-mode: vertical-rl on the element. Lines then run top to bottom and stack from right to left.'],
            ['What is the difference between writing-mode and rotate?', 'Rotating turns the whole box sideways. writing-mode changes how text flows, so CJK characters stay upright and layout works properly.'],
            ['Is vertical text accessible?', 'Yes. It is real text, and screen readers read it normally. Add the right lang attribute so it is pronounced correctly.'],
        ],
    ],

];

