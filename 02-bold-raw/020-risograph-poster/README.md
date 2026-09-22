# Risograph Poster CSS Template (Free)

![Risograph Poster CSS template preview](preview.png)

**Live demo:** https://mmrahmanbappi.github.io/100-css-designs/02-bold-raw/020-risograph-poster/demo.html
**Details and code:** https://mmrahmanbappi.github.io/100-css-designs/02-bold-raw/020-risograph-poster/

Free risograph style website template with grainy texture, overlapping ink colors and misaligned print layers in pure CSS. Live demo and HTML download.

## What is risograph poster?

Risograph is a cheap printing method loved by zine makers and poster artists. Each color is printed as a separate layer, so inks overlap into new colors, layers sit slightly off and the paper shows a soft grain.

The web version uses mix-blend-mode: multiply so overlapping shapes mix like real ink. A second copy of the headline sits a few pixels off, and a noise texture from an inline SVG adds the grain.

## What you get

- Overlapping circles that mix with multiply
- Headline printed twice slightly off register
- Paper grain from an inline SVG noise filter
- Riso pink, blue and yellow palette
- Table section cards with ink borders

## The key CSS

```css
.circ { border-radius: 50%; mix-blend-mode: multiply; }

h1 { color: #0078bf; mix-blend-mode: multiply; }
h1 span { position: absolute; left: 6px; top: 5px; color: #ff48b0; z-index: -1; }

body::after {
  content: ""; position: fixed; inset: 0; pointer-events: none;
  opacity: .35; mix-blend-mode: multiply;
  background-image: url("data:image/svg+xml,...feTurbulence...");
}
```

## How to use

1. Download `demo.html` from this folder.
2. Change the text, colors and links.
3. Upload it anywhere. One file, no build step.

## License

MIT. Free for personal and commercial use.
