# Content for every design. Add new categories and designs here, then run build.py.
# Copy rules: plain human language, no em dashes, readers aged 25 to 50.

SITE = {
    "name": "100 CSS Designs",
    "base": "https://mmrahmanbappi.github.io/100-css-designs/",
    "repo": "https://github.com/mmrahmanbappi/100-css-designs",
    "author": "mmrahmanbappi",
    "author_url": "https://github.com/mmrahmanbappi",
    "published": "2026-09-23",
}

CATEGORIES = [
    {"num": 1, "slug": "01-soft-tactile-ui", "name": "Soft and Tactile UI", "ready": True,
     "title": "Soft and Tactile UI CSS Templates: Glassmorphism, Neumorphism and More (Free)",
     "desc": "10 free soft UI CSS templates with live demos. Glassmorphism, liquid glass, neumorphism, claymorphism and more. Each one is a single HTML file you can download.",
     "intro": "Soft UI is the family of styles that makes a screen feel like you could touch it. Frosted glass, puffy clay, pressable keys, paper you could pick up. These designs are popular right now because they make apps feel friendly and calm, and modern CSS can do all of it without images or plugins. Every template below is one HTML file. Open the demo, and if you like it, download it and make it yours."},
    {"num": 2, "slug": "02-bold-raw", "name": "Bold and Raw", "ready": False},
    {"num": 3, "slug": "03-layout-patterns", "name": "Layout Patterns", "ready": False},
    {"num": 4, "slug": "04-ai-era-interfaces", "name": "AI Era Interfaces", "ready": False},
    {"num": 5, "slug": "05-color-light", "name": "Color and Light", "ready": False},
    {"num": 6, "slug": "06-typography", "name": "Typography", "ready": False},
    {"num": 7, "slug": "07-motion", "name": "Motion", "ready": False},
    {"num": 8, "slug": "08-3d-depth", "name": "3D and Depth", "ready": False},
    {"num": 9, "slug": "09-cultural-aesthetic", "name": "Cultural and Aesthetic", "ready": False},
    {"num": 10, "slug": "10-business-ready", "name": "Business Ready Pages", "ready": False},
]

DESIGNS = [
{
 "num": 1, "cat": "01-soft-tactile-ui", "slug": "001-glassmorphism", "name": "Glassmorphism",
 "example": "Harbor, a savings app landing page",
 "title": "Free Glassmorphism CSS Template with Live Demo (HTML Download)",
 "desc": "Free glassmorphism HTML and CSS template with frosted glass cards and blurred panels. See the live demo, copy the CSS, or download the single HTML file.",
 "keywords": "glassmorphism css, glassmorphism template, frosted glass css, backdrop-filter blur, glass card css",
 "what": [
  "Glassmorphism is a design style where panels look like frosted glass. You can see the colors behind them, but blurred, as if you were looking through a bathroom window. A thin white border and a soft shadow make each panel feel like it floats above the page.",
  "The whole effect comes from one CSS property called backdrop-filter. It blurs whatever sits behind an element. Put a few bright color shapes in the background, place a semi transparent card on top, and you have glassmorphism."
 ],
 "when": ["Finance and banking app landing pages", "Dashboards with a few key numbers", "Login and sign up screens", "Music, weather and lifestyle apps"],
 "features": ["Frosted navigation bar and cards made with backdrop-filter", "Three blurred color shapes in the background, no images needed", "Savings goal progress bars with a warm gradient", "Responsive layout that stacks on phones", "Clear focus outlines for keyboard users"],
 "css": ".glass {\n  background: rgba(255, 255, 255, 0.18);\n  border: 1px solid rgba(255, 255, 255, 0.45);\n  border-radius: 24px;\n  backdrop-filter: blur(18px) saturate(140%);\n  -webkit-backdrop-filter: blur(18px) saturate(140%);\n  box-shadow: 0 20px 50px rgba(3, 20, 35, 0.25);\n}",
 "faq": [
  ["How do you make glassmorphism in CSS?", "Give an element a semi transparent background, such as rgba(255, 255, 255, 0.18), then add backdrop-filter: blur(18px). Add a thin light border and a soft shadow. The effect only shows when there is something colorful behind the element."],
  ["Does backdrop-filter work in all browsers?", "Yes. Chrome, Edge, Firefox and Safari all support it today. Safari still likes the -webkit- prefix, so this template includes both versions."],
  ["Is glassmorphism bad for readability?", "It can be if the text sits on a busy background. Keep the blur strong, use white or very dark text, and check contrast. This template uses a dark, calm background so text stays easy to read."]
 ]
},
{
 "num": 2, "cat": "01-soft-tactile-ui", "slug": "002-liquid-glass", "name": "Liquid Glass",
 "example": "Tidewell, a weather app screen",
 "title": "Free Liquid Glass CSS Template (Apple Style UI) with Live Demo",
 "desc": "Free liquid glass UI template in pure CSS, inspired by the Apple 2025 design style. Glossy panels, light edges and pill buttons. Live demo and HTML download.",
 "keywords": "liquid glass css, apple liquid glass ui, liquid glass template, ios 26 design css, glossy glass css",
 "what": [
  "Liquid glass is the look Apple introduced across its devices in 2025. Panels feel thicker and wetter than normal frosted glass. Their edges catch the light, they bend the colors behind them a little, and buttons sit in soft pill shapes.",
  "You can get very close to it with CSS. The trick is layering: a blur and saturation boost behind the panel, bright inset shadows along the top and left edges, and a faint highlight on top that makes the surface look curved."
 ],
 "when": ["Weather, music and camera apps", "Floating toolbars and tab bars", "Product pages for phone and watch apps", "Any design that should feel current and polished"],
 "features": ["Glossy panels with light catching edges", "Floating pill tab bar with a working selected state", "Large thin temperature number as the hero", "Warm evening sky made only with gradients", "Hourly forecast that scrolls sideways on small screens"],
 "css": ".liquid-glass {\n  border-radius: 32px;\n  background: linear-gradient(135deg, rgba(255,255,255,.28), rgba(255,255,255,.06));\n  backdrop-filter: blur(14px) saturate(180%) brightness(1.1);\n  box-shadow:\n    inset 1px 1px 0 rgba(255,255,255,.75),\n    inset -1px -1px 0 rgba(255,255,255,.2),\n    inset 0 0 20px rgba(255,255,255,.15),\n    0 18px 40px rgba(20,40,90,.25);\n}",
 "faq": [
  ["What is the difference between liquid glass and glassmorphism?", "Glassmorphism is flat frosted glass with a border. Liquid glass adds depth: shiny edges, a stronger color boost behind the panel and highlights that make it look curved, like a drop of water."],
  ["Can I make Apple liquid glass with only CSS?", "You can get a very close look with backdrop-filter, layered inset shadows and a highlight pseudo element. The true lens bending Apple uses needs SVG filters, which only work well in Chrome, so this template keeps to pure CSS that works everywhere."],
  ["Will this slow down my website?", "Blur effects cost some performance on older phones. Use them on a few panels, not dozens, and you will be fine."]
 ]
},
{
 "num": 3, "cat": "01-soft-tactile-ui", "slug": "003-neumorphism", "name": "Neumorphism",
 "example": "Hearth, a smart home control panel",
 "title": "Free Neumorphism CSS Template with Better Contrast (Live Demo)",
 "desc": "Free neumorphism UI template for a smart home panel. Soft extruded dials, switches and cards in pure CSS, with improved contrast. Live demo and download.",
 "keywords": "neumorphism css, neumorphic ui, soft ui design css, neumorphism template, neumorphic button",
 "what": [
  "Neumorphism makes buttons and cards look like they are pushed out of, or pressed into, the same material as the background. There are no borders. Everything is shaped by two shadows: a dark one on the bottom right and a light one on the top left.",
  "The original 2020 version had a real problem. Buttons were so low contrast that people could not see them. This template fixes that with darker text, a colored accent for active states, and inset wells that make switches easy to spot."
 ],
 "when": ["Smart home and device control apps", "Music players and audio tools", "Calculators and simple utilities", "Settings screens with toggles and sliders"],
 "features": ["Thermostat dial with a colored progress ring", "Working plus and minus buttons that press in", "Four accessible toggle switches using role switch", "Raised and inset surfaces from one color", "Orange accent so active states are easy to see"],
 "css": ":root { --bg: #e3e8ef; --dark: #b9c2cf; --light: #ffffff; }\n\n.raised {\n  background: var(--bg);\n  border-radius: 28px;\n  box-shadow: 9px 9px 18px var(--dark), -9px -9px 18px var(--light);\n}\n\n.pressed {\n  box-shadow: inset 6px 6px 12px var(--dark), inset -6px -6px 12px var(--light);\n}",
 "faq": [
  ["How do you make a neumorphic button in CSS?", "Use the same background color as the page, then add two box shadows: one darker shadow toward the bottom right and one lighter shadow toward the top left. For the pressed state, switch both shadows to inset."],
  ["Is neumorphism still popular?", "It came back in a more careful form. Designers now mix it with a strong accent color and higher contrast text, which fixes the readability issues of the first wave."],
  ["Is neumorphism accessible?", "It can be, if you do not rely on shadows alone. Use clear text labels, a visible focus outline and a color change for on and off states, like this template does."]
 ]
},
{
 "num": 4, "cat": "01-soft-tactile-ui", "slug": "004-claymorphism", "name": "Claymorphism",
 "example": "Pebble Math, a kids learning app",
 "title": "Free Claymorphism CSS Template with Live Demo (Puffy 3D UI)",
 "desc": "Free claymorphism HTML and CSS template with puffy, clay-like 3D cards and buttons. Built for a kids learning app. Live demo, CSS code and download.",
 "keywords": "claymorphism css, claymorphism template, clay ui design, 3d clay button css, puffy ui css",
 "what": [
  "Claymorphism makes cards and buttons look like soft modeling clay. They are very rounded, brightly colored and puffy, as if you could squeeze them. It feels friendly and a little playful.",
  "The look comes from mixing two inset shadows, a dark one at the bottom right and a light one at the top left, with a normal drop shadow underneath. The inset shadows give the surface its round, inflated shape."
 ],
 "when": ["Apps and websites for children", "Games and quiz tools", "Friendly SaaS onboarding screens", "Brands that want to feel warm and approachable"],
 "features": ["Puffy clay cards in five candy colors", "A working math question with instant feedback", "Big chunky buttons that lift and squish", "Four learning world cards in a grid", "Rounded Baloo 2 font that suits young readers"],
 "css": ".clay {\n  border-radius: 34px;\n  box-shadow:\n    inset -8px -8px 16px rgba(0, 0, 0, 0.12),\n    inset 8px 8px 16px rgba(255, 255, 255, 0.6),\n    10px 14px 24px rgba(90, 60, 120, 0.18);\n}",
 "faq": [
  ["What is claymorphism in web design?", "It is a style where elements look like soft 3D clay: very round corners, bright colors, and inner shadows that make them look inflated. It became popular in apps for kids, games and friendly startups."],
  ["How is claymorphism different from neumorphism?", "Neumorphism uses the same color as the background, so elements look carved from it. Claymorphism uses bright colors that stand out and looks like separate soft objects sitting on the page."],
  ["Can I use claymorphism for a business website?", "Yes, if your brand is friendly and casual. For banking or legal sites it may feel too playful, so use it only on small parts like icons or buttons."]
 ]
},
{
 "num": 5, "cat": "01-soft-tactile-ui", "slug": "005-frosted-aurora", "name": "Frosted Aurora",
 "example": "Stillwater, a sleep and calm app",
 "title": "Free Aurora Background CSS Template with Frosted Glass (Live Demo)",
 "desc": "Free aurora gradient background template with frosted glass cards. Slow moving northern lights colors made in pure CSS. Live demo and HTML download.",
 "keywords": "aurora background css, aurora gradient css, northern lights css animation, frosted glass css, animated gradient background",
 "what": [
  "Frosted aurora puts slow moving colors, like the northern lights, behind panels of frosted glass. The colors drift very gently, so the page feels alive without being busy.",
  "It is made from a few big colored circles that are blurred heavily and moved with a long CSS animation. On top sit dark, semi transparent panels with backdrop-filter. If a visitor has asked their device to reduce motion, the colors stay still."
 ],
 "when": ["Sleep, meditation and wellness apps", "Music and podcast landing pages", "Event and night life websites", "AI and tech product launch pages"],
 "features": ["Animated aurora made from three blurred shapes", "Motion turns off for people who prefer reduced motion", "Dark frosted cards for audio tracks", "Elegant Fraunces serif headline", "Frosted testimonial block"],
 "css": ".sky { position: fixed; inset: -20%; filter: blur(60px); z-index: -1; }\n.sky span { position: absolute; border-radius: 50%;\n  animation: drift 22s ease-in-out infinite alternate; }\n\n@keyframes drift { to { transform: translate(8vw, -6vw) scale(1.15); } }\n\n@media (prefers-reduced-motion: reduce) {\n  .sky span { animation: none; }\n}",
 "faq": [
  ["How do you make an aurora background in CSS?", "Place a few large colored circles in a fixed layer, blur that layer heavily with filter: blur(60px), and move the circles slowly with a CSS animation. No images or JavaScript are needed."],
  ["Will the animated background drain phone battery?", "The animation is slow and uses transform, which the browser handles well. It also stops for anyone who has reduced motion turned on in their device settings."],
  ["Can I change the aurora colors?", "Yes. Change the three background colors on the .sky span elements. Greens, blues and pinks look most like real northern lights."]
 ]
},
{
 "num": 6, "cat": "01-soft-tactile-ui", "slug": "006-soft-ui", "name": "Soft UI",
 "example": "Loom, a weekly planner dashboard",
 "title": "Free Soft UI Dashboard Template in HTML and CSS (Live Demo)",
 "desc": "Free soft UI dashboard template for a planner app. Calm pastel colors, gentle inner shadows and rounded panels in one HTML file. Live demo and download.",
 "keywords": "soft ui dashboard, soft ui css, pastel dashboard template, free html dashboard, calm ui design",
 "what": [
  "Soft UI is a quiet, calm style for apps people use every day. Colors are muted pastels, corners are rounded, and shadows are so light you barely notice them. Nothing shouts for attention.",
  "It borrows a little from neumorphism, like the inset search box and progress tracks, but keeps normal white cards so it stays easy to read. That balance is why many productivity tools use it."
 ],
 "when": ["Task managers and planners", "Admin dashboards people use all day", "Health and habit tracking apps", "Internal tools where calm matters more than flash"],
 "features": ["Sidebar navigation that becomes a top bar on phones", "Three stat cards with soft inset progress tracks", "Real checkboxes for the task list", "Pastel tags for task types", "Small week strip with today highlighted"],
 "css": ".panel {\n  background: #faf8fd;\n  border-radius: 24px;\n  box-shadow: 0 10px 30px rgba(80, 60, 130, 0.07);\n}\n\n.search {\n  background: #f1eef6;\n  border-radius: 16px;\n  box-shadow: inset 3px 3px 7px rgba(120,100,160,.15), inset -3px -3px 7px #fff;\n}",
 "faq": [
  ["What is a soft UI design?", "Soft UI uses gentle colors, rounded shapes and very light shadows to make an interface feel calm. It is popular for dashboards and productivity apps that people keep open for hours."],
  ["Is this dashboard template free for commercial use?", "Yes. It is released under the MIT license, so you can use it in client work and paid products."],
  ["Does it need a framework like Bootstrap or Tailwind?", "No. It is plain HTML and CSS in one file. You can add any framework later if you want to."]
 ]
},
{
 "num": 7, "cat": "01-soft-tactile-ui", "slug": "007-skeuomorphism", "name": "Skeuomorphism",
 "example": "Field Journal, a notes app",
 "title": "Free Skeuomorphic CSS Template: Leather, Paper and Brass (Live Demo)",
 "desc": "Free skeuomorphism design template for a notes app. Leather cover, stitching, lined paper and a brass switch, all in pure CSS. Live demo and download.",
 "keywords": "skeuomorphism css, skeuomorphic design, skeuomorphic ui template, realistic css textures, notebook css",
 "what": [
  "Skeuomorphism makes screens look like real objects. Early iPhone apps used it everywhere: notes on yellow paper, calendars in leather, bookshelves made of wood. After years of flat design, it is coming back, because people miss interfaces with a bit of character.",
  "This template draws every texture with CSS gradients. The wood grain, the leather, the dashed stitching, the lined paper and the red margin line are all code. There is not a single image file."
 ],
 "when": ["Notes, journal and diary apps", "Recipe and hobby websites", "Music apps with knobs and dials", "Portfolio pages that want a crafted feel"],
 "features": ["Wood desk background made with repeating gradients", "Leather cover with stitched border", "Lined notebook paper with a margin line", "Brass toggle switch that slides", "Handwritten Caveat font and a sticky note"],
 "css": ".page {\n  background:\n    linear-gradient(90deg, transparent 60px, #e39a9a 60px 62px, transparent 62px),\n    repeating-linear-gradient(transparent 0 31px, #b8cfe0 31px 32px),\n    #fbf4e2;\n}\n\n.cover::before {\n  content: \"\"; position: absolute; inset: 12px;\n  border: 2px dashed rgba(243, 220, 180, 0.55); border-radius: 8px;\n}",
 "faq": [
  ["What is skeuomorphic design?", "It is a design style that copies the look of real world objects, like paper, leather, wood or metal, so people instantly understand how to use an interface."],
  ["Is skeuomorphism coming back?", "Yes. After a decade of flat design, many designers are adding texture and depth again, often in a lighter way than the old iPhone apps."],
  ["Can I make lined paper with CSS?", "Yes. A repeating-linear-gradient draws the blue lines and a normal linear-gradient adds the red margin. You can copy the exact code from this page."]
 ]
},
{
 "num": 8, "cat": "01-soft-tactile-ui", "slug": "008-tactile-buttons", "name": "Tactile Buttons",
 "example": "Clack, a keyboard shop with a working calculator",
 "title": "Free 3D Pressable Button CSS Template with Working Calculator",
 "desc": "Free tactile 3D button template in pure CSS. Keys visibly press down when clicked. Includes a working calculator and shop page. Live demo and download.",
 "keywords": "3d button css, pressable button css, tactile button css, keycap css, css button press effect",
 "what": [
  "Tactile buttons look like real keys that move when you press them. They have a thick colored edge underneath, and when you click, the top slides down to meet it. It makes every click feel satisfying.",
  "The effect uses a solid box shadow as the side of the key, then moves the button down with transform on the active state while shrinking the shadow. It is fast, works everywhere and needs no JavaScript."
 ],
 "when": ["Call to action buttons that must be clicked", "Games, quizzes and playful apps", "Calculators, keypads and music pads", "Online shops for physical products"],
 "features": ["Keycap style buttons in cream, orange and olive", "A working calculator you can click", "Buttons press down about 5 pixels on click", "Clear focus outline for keyboard users", "Switch product cards for a shop layout"],
 "css": ".key {\n  background: #f4f0e8;\n  border-radius: 12px;\n  box-shadow: 0 6px 0 #bdb4a5, 0 8px 12px rgba(0,0,0,.25);\n  transition: transform .06s, box-shadow .06s;\n}\n\n.key:active {\n  transform: translateY(5px);\n  box-shadow: 0 1px 0 #bdb4a5, 0 2px 4px rgba(0,0,0,.25);\n}",
 "faq": [
  ["How do you make a 3D button that presses down in CSS?", "Add a solid box shadow with no blur below the button, like 0 6px 0 a darker color. On :active, move the button down with transform: translateY(5px) and reduce the shadow to 1px. It looks like the key is being pushed in."],
  ["Does the press effect work on phones?", "Yes. The :active state fires when you tap, so the key presses down under your finger."],
  ["Is the calculator code safe to use?", "It only takes input from its own buttons, so no one can type code into it. For a real product you may still want a proper math parser."]
 ]
},
{
 "num": 9, "cat": "01-soft-tactile-ui", "slug": "009-jelly-ui", "name": "Jelly UI",
 "example": "Wobble, a gelato shop",
 "title": "Free Jelly Button CSS Template: Glossy, Bouncy UI (Live Demo)",
 "desc": "Free jelly UI template with glossy buttons that wobble on hover and squish on click. Pure CSS gelato shop page with live demo and HTML download.",
 "keywords": "jelly button css, bouncy button css, glossy button css, wobble animation css, gummy ui design",
 "what": [
  "Jelly UI makes buttons look like shiny gummy sweets. They have a glossy highlight on top, a darker bottom and a little wobble when you move your mouse over them. Press one and it squishes flat for a moment.",
  "The shine is a pseudo element with a white gradient. The wobble is a short keyframe animation that stretches the button wide and then tall. The squish is a simple scale on the active state."
 ],
 "when": ["Food, sweets and drink brands", "Kids products and toys", "Mobile games", "Fun sign up and pricing buttons"],
 "features": ["Glossy jelly buttons in five colors from one CSS class", "Wobble on hover and squish on press", "Shiny 3D scoops made with radial gradients", "Color set per button with one CSS variable", "Wobble stops for people who prefer reduced motion"],
 "css": ".jelly::before {\n  content: \"\"; position: absolute; top: 5px; left: 14%; right: 14%; height: 38%;\n  border-radius: 20px;\n  background: linear-gradient(rgba(255,255,255,.75), rgba(255,255,255,0));\n}\n.jelly:hover { animation: wob .6s; }\n\n@keyframes wob {\n  30% { transform: scale(1.12, .88); }\n  50% { transform: scale(.92, 1.08); }\n  70% { transform: scale(1.04, .96); }\n}",
 "faq": [
  ["How do you make a jelly wobble effect in CSS?", "Use a keyframe animation that changes scale on the x and y axis in opposite directions, for example scale(1.12, 0.88) then scale(0.92, 1.08), and settle back to scale(1). Run it on hover for about 0.6 seconds."],
  ["How do I change the button color?", "Every button reads its color from a CSS variable called --c. Set style=\"--c: #ff4f8b\" on a button, or change it in the stylesheet."],
  ["Does it work without JavaScript?", "Yes. The shine, wobble and squish are all pure CSS."]
 ]
},
{
 "num": 10, "cat": "01-soft-tactile-ui", "slug": "010-paper-stack", "name": "Paper Stack",
 "example": "Crumb, a family recipe box",
 "title": "Free Paper Stack Cards CSS Template for Recipes (Live Demo)",
 "desc": "Free paper stack card template in CSS. Layered index cards on a table with a shuffle button, built for a recipe website. Live demo and HTML download.",
 "keywords": "paper stack css, stacked cards css, index card css, recipe card template html, paper card design",
 "what": [
  "Paper stack design shows content as real sheets of paper piled on a table. Cards sit at slight angles, each with its own shadow, and the pile looks like someone just put it down.",
  "Each card is rotated a few degrees with transform and placed on top of the others. A shuffle button moves the top card to the bottom, and a CSS transition makes the pile settle smoothly."
 ],
 "when": ["Recipe and cooking websites", "Portfolios and case studies", "Testimonials and review sections", "Flashcards and study tools"],
 "features": ["Three index cards stacked at different angles", "Shuffle button that brings the next card to the top", "Lined card paper with a red header line", "Smaller cards with a layered paper edge", "Green table background with a subtle texture"],
 "css": ".card { position: absolute; inset: 0; margin: auto;\n  box-shadow: 0 10px 24px rgba(0,0,0,.28);\n  transition: transform .45s cubic-bezier(.2,.8,.2,1); }\n\n.card:nth-child(1) { transform: rotate(-7deg) translate(-26px, 14px); }\n.card:nth-child(2) { transform: rotate(5deg) translate(22px, 6px); }\n.card:nth-child(3) { transform: rotate(-1.5deg); }\n\n.mini { box-shadow: 4px 4px 0 #e9e2d2, 8px 8px 0 #d8cfbb; }",
 "faq": [
  ["How do you make stacked cards in CSS?", "Place the cards in the same spot with position: absolute, then rotate each one a few degrees with transform. The last card in the HTML sits on top."],
  ["How does the shuffle button work?", "A single line of JavaScript moves the top card to the bottom of the pile. Because the angles are set with nth-child, every card takes a new position and the CSS transition animates it."],
  ["Can I make a paper stack without JavaScript?", "The pile itself is pure CSS. You only need the small script if you want the shuffle button."]
 ]
},
]
