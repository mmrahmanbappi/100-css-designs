# Scrollytelling CSS Template (Free)

![Scrollytelling CSS template preview](preview.png)

**Live demo:** https://mmrahmanbappi.github.io/100-css-designs/03-layout-patterns/025-scrollytelling/demo.html
**Details and code:** https://mmrahmanbappi.github.io/100-css-designs/03-layout-patterns/025-scrollytelling/

Free scrollytelling website template. A sticky visual changes shape and color as each step of the story scrolls past. Live demo, key code and HTML download.

## What is scrollytelling?

Scrollytelling tells a story as you scroll. One picture stays pinned on the screen while the text moves past, and the picture changes to match each step.

News sites use it for big explainers, and brands use it to show how a product is made. Here a coffee bean changes into a cherry, a roasted bean and finally a cup, one step at a time.

## What you get

- Sticky stage that stays on screen
- Four story steps that light up as you reach them
- Visual changes with smooth CSS transitions
- Tiny IntersectionObserver script, no library
- Transitions turn off for reduced motion

## The key CSS

```css
.stage { position: sticky; top: 0; height: 100vh; }
.bean { transition: background .6s, transform .6s; }
.stage[data-step="2"] .bean { background: #d7263d; transform: scale(.8); }
.stage[data-step="3"] .bean { background: #8c5a3c; transform: scale(.7) rotate(25deg); }

/* JS: when a step reaches the middle of the screen,
   set stage.dataset.step to that step number */
```

## How to use

1. Download `demo.html` from this folder.
2. Change the text, colors and links.
3. Upload it anywhere. One file, no build step.

## License

MIT. Free for personal and commercial use.
