# Dark Academia CSS Template (Free)

![Dark Academia CSS template preview](preview.png)

**Live demo:** https://mmrahmanbappi.github.io/100-css-designs/09-cultural-aesthetic/084-dark-academia/demo.html
**Details and code:** https://mmrahmanbappi.github.io/100-css-designs/09-cultural-aesthetic/084-dark-academia/

Free dark academia website template for a book club. Old library browns, candlelight glow, Garamond type and a CSS bookshelf. Live demo.

## What is dark academia?

Dark academia is the look of old universities and candlelit libraries: deep browns, oxblood red, antique gold, classic serif type and a slightly mysterious mood.

The shelf of books is CSS blocks with gold bands. A single flickering candle made with a gradient and a glow gives the page its warmth, and the flicker stops for reduced motion.

## What you get

- Deep brown palette with oxblood and gold
- CSS bookshelf with gold bands on each spine
- Flickering candle with a soft glow
- EB Garamond and Cinzel type pairing
- Monthly reading list layout

## The key CSS

```css
:root { --bg: #1c1612; --gold: #b8955a; --oxblood: #6b1f24; --paper: #e9dfcc; }
body { font-family: "EB Garamond", serif;
  background: radial-gradient(ellipse at 70% 10%, rgba(255,190,110,.12), transparent 50%), var(--bg); }
.candle::before {
  background: radial-gradient(#fff6c2, #f4a340 70%);
  box-shadow: 0 0 30px 10px rgba(244, 163, 64, .35);
  animation: fl 2s ease-in-out infinite;
}
```

## How to use

1. Download `demo.html` from this folder.
2. Change the text, colors and links.
3. Upload it anywhere. One file, no build step.

## License

MIT. Free for personal and commercial use.
