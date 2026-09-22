# Full Bleed CSS Template (Free)

![Full Bleed CSS template preview](preview.png)

**Live demo:** https://mmrahmanbappi.github.io/100-css-designs/03-layout-patterns/027-full-bleed/demo.html
**Details and code:** https://mmrahmanbappi.github.io/100-css-designs/03-layout-patterns/027-full-bleed/

Free full bleed website template with edge to edge, screen filling sections and big type over CSS landscapes. Built for a tour company. Live demo.

## What is full bleed?

Full bleed means the picture runs right to the edge of the screen with no margins. Each section fills the whole window, so scrolling feels like moving from one scene to the next.

It is the go to layout for travel and outdoor brands, where the place is the product. Big text sits at the bottom of each scene, over a soft dark fade so it stays readable.

## What you get

- Three full screen sections at 100vh
- Landscapes, sunset and night sky drawn in CSS
- Dark fade at the bottom for readable text
- Big Unbounded headlines
- Trip facts row and booking button

## The key CSS

```css
.full {
  min-height: 100vh;
  display: flex; flex-direction: column; justify-content: flex-end;
  padding: 40px 6vw 8vh;
  position: relative; overflow: hidden;
}
.bg { position: absolute; inset: 0; }
.full .bg { box-shadow: inset 0 -40vh 30vh -10vh rgba(0,0,0,.55); }
```

## How to use

1. Download `demo.html` from this folder.
2. Change the text, colors and links.
3. Upload it anywhere. One file, no build step.

## License

MIT. Free for personal and commercial use.
