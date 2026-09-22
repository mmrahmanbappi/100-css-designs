# Swiss Grid CSS Template (Free)

![Swiss Grid CSS template preview](preview.png)

**Live demo:** https://mmrahmanbappi.github.io/100-css-designs/02-bold-raw/013-swiss-grid/demo.html
**Details and code:** https://mmrahmanbappi.github.io/100-css-designs/02-bold-raw/013-swiss-grid/

Free Swiss style website template with a strict 12 column CSS grid, clean sans serif type and a red accent. Live demo, key CSS and HTML download.

## What is swiss grid?

Swiss style, also called the International Typographic Style, comes from 1950s poster design in Switzerland. It uses a strict grid, clean sans serif letters, left aligned text and lots of white space. One strong color, often red, does all the work.

On the web it maps perfectly to CSS Grid. Every element starts and ends on a column line, so the page feels calm and ordered even when the type is huge.

## What you get

- 12 column CSS grid used on every row
- Giant red number as the hero element
- Programme list aligned to the same columns
- Full width red ticket block
- Collapses to a single column on phones

## The key CSS

```css
.g {
  display: grid;
  grid-template-columns: repeat(12, 1fr);
  column-gap: 20px;
  max-width: 1200px; margin: 0 auto;
}
.num { grid-column: 1 / 6; font-size: 17rem; color: #e2231a; }
.ht  { grid-column: 7 / 13; align-self: end; }
```

## How to use

1. Download `demo.html` from this folder.
2. Change the text, colors and links.
3. Upload it anywhere. One file, no build step.

## License

MIT. Free for personal and commercial use.
