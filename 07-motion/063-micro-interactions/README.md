# Micro Interactions CSS Template (Free)

![Micro Interactions CSS template preview](preview.png)

**Live demo:** https://mmrahmanbappi.github.io/100-css-designs/07-motion/063-micro-interactions/demo.html
**Details and code:** https://mmrahmanbappi.github.io/100-css-designs/07-motion/063-micro-interactions/

Free micro interactions template for a habit tracker. Animated checkboxes, a like button that pops, a springy switch and copy feedback. Live demo.

## What is micro interactions?

Micro interactions are the tiny moments of feedback when you tap something: a tick that draws itself, a heart that pops, a switch that springs across. They tell people their action worked and make an app feel alive.

Most of them here are pure CSS on real form controls, so they stay accessible. JavaScript only updates the numbers and the copy button text.

## What you get

- Checkbox tick that draws with stroke-dashoffset
- Heart that fills and pops on like
- Toggle switch with a springy bounce
- Copy button that turns green and says Copied
- Counter that bumps when it changes

## The key CSS

```css
.box svg { stroke-dasharray: 20; stroke-dashoffset: 20; transition: stroke-dashoffset .25s; }
.hab input:checked + .box { background: #16a34a; transform: scale(1.08); }
.hab input:checked + .box svg { stroke-dashoffset: 0; }

.sw::after { transition: transform .25s cubic-bezier(.3, 1.5, .6, 1); }
.sw[aria-checked="true"]::after { transform: translateX(22px); }
```

## How to use

1. Download `demo.html` from this folder.
2. Change the text, colors and links.
3. Upload it anywhere. One file, no build step.

## License

MIT. Free for personal and commercial use.
