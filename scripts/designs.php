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
        'ready' => false,
    ],
    [
        'num' => 4,
        'slug' => '04-ai-era-interfaces',
        'name' => 'AI Era Interfaces',
        'ready' => false,
    ],
    [
        'num' => 5,
        'slug' => '05-color-light',
        'name' => 'Color and Light',
        'ready' => false,
    ],
    [
        'num' => 6,
        'slug' => '06-typography',
        'name' => 'Typography',
        'ready' => false,
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

];

