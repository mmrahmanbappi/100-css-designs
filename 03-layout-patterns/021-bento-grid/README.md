# Bento Grid CSS Template (Free)

![Bento Grid CSS template preview](preview.png)

**Live demo:** https://mmrahmanbappi.github.io/100-css-designs/03-layout-patterns/021-bento-grid/demo.html
**Details and code:** https://mmrahmanbappi.github.io/100-css-designs/03-layout-patterns/021-bento-grid/

Free bento grid website template in pure CSS Grid. Apple style boxes of different sizes for a product page. Live demo, key CSS and single HTML download.

## What is bento grid?

A bento grid splits a page into boxes of different sizes, like a Japanese lunch box. Apple made it famous on its product pages, and now almost every tech launch uses it.

Each box holds one idea: a big number, a picture, a short line of text. Because the sizes vary, the eye moves around the page naturally and people take in many features in a few seconds.

## What you get

- 4 column CSS grid with fixed row height
- Big, wide and tall tiles using span
- CSS drawn watch with a live style screen
- Progress ring made with conic-gradient
- Falls back to 2 columns, then 1, on smaller screens

## The key CSS

```css
.bento {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  grid-auto-rows: 190px;
  gap: 16px;
}
.big  { grid-column: span 2; grid-row: span 2; }
.wide { grid-column: span 2; }
.tall { grid-row: span 2; }
```

## How to use

1. Download `demo.html` from this folder.
2. Change the text, colors and links.
3. Upload it anywhere. One file, no build step.

## License

MIT. Free for personal and commercial use.
