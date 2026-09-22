# Split Screen CSS Template (Free)

![Split Screen CSS template preview](preview.png)

**Live demo:** https://mmrahmanbappi.github.io/100-css-designs/03-layout-patterns/023-split-screen/demo.html
**Details and code:** https://mmrahmanbappi.github.io/100-css-designs/03-layout-patterns/023-split-screen/

Free split screen website template for a restaurant. A sticky visual half on the left and a scrolling menu and booking form on the right. Live demo.

## What is split screen?

A split screen layout divides the page into two halves. One side holds a strong visual or brand message and stays still, while the other side scrolls with the details.

It gives a small site a premium feel. The fixed half is just position: sticky with the full viewport height, so it needs no JavaScript at all.

## What you get

- Sticky left panel with a glowing fire made in CSS
- Scrolling menu with dish notes and prices
- Working booking form with a confirm message
- Elegant Cormorant Garamond headings
- Stacks top to bottom on phones

## The key CSS

```css
.split {
  display: grid;
  grid-template-columns: 1fr 1fr;
  min-height: 100vh;
}
.left {
  position: sticky; top: 0;
  height: 100vh;
}
@media (max-width: 860px) {
  .split { grid-template-columns: 1fr; }
  .left { position: relative; height: 70vh; }
}
```

## How to use

1. Download `demo.html` from this folder.
2. Change the text, colors and links.
3. Upload it anywhere. One file, no build step.

## License

MIT. Free for personal and commercial use.
