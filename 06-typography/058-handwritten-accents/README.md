# Handwritten Accents CSS Template (Free)

![Handwritten Accents CSS template preview](preview.png)

**Live demo:** https://mmrahmanbappi.github.io/100-css-designs/06-typography/058-handwritten-accents/demo.html
**Details and code:** https://mmrahmanbappi.github.io/100-css-designs/06-typography/058-handwritten-accents/

Free handwritten accents template for a cooking school. Scribbled underlines, circles, arrows and notes drawn with SVG over a clean layout. Live demo.

## What is handwritten accents?

Handwritten accents add little human marks to a clean page: a scribbled underline, a circle around a word, an arrow pointing at a note. It feels like someone went over the page with a pen for you.

Each mark is a small inline SVG path placed behind a word. They draw themselves in on load using stroke-dasharray, and the notes use Caveat, a free handwriting font.

## What you get

- Scribbled underline and circle drawn with SVG
- Marks draw themselves in on page load
- Handwritten note with a curved arrow
- Card labels in handwriting that sit on the border
- Drawing stops for reduced motion

## The key CSS

```css
.mark { position: relative; white-space: nowrap; }
.mark svg { position: absolute; left: -2%; width: 104%; pointer-events: none; }
.under svg { bottom: -.18em; height: .35em; }

.draw path {
  stroke-dasharray: 600; stroke-dashoffset: 600;
  animation: draw 1.2s .4s ease forwards;
}
@keyframes draw { to { stroke-dashoffset: 0; } }
```

## How to use

1. Download `demo.html` from this folder.
2. Change the text, colors and links.
3. Upload it anywhere. One file, no build step.

## License

MIT. Free for personal and commercial use.
