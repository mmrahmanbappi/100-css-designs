# Bauhaus CSS Template (Free)

![Bauhaus CSS template preview](preview.png)

**Live demo:** https://mmrahmanbappi.github.io/100-css-designs/09-cultural-aesthetic/087-bauhaus/demo.html
**Details and code:** https://mmrahmanbappi.github.io/100-css-designs/09-cultural-aesthetic/087-bauhaus/

Free Bauhaus website template for a design exhibition. Red, yellow and blue, circles, squares and triangles on a strict grid poster layout. Live demo.

## What is bauhaus?

Bauhaus was a German design school from 1919. Its style is simple and bold: primary colors, basic shapes and clean geometric letters, with every element doing a job.

The hero is a poster built on a CSS grid. Each cell is one color or one shape, a circle, a triangle or a bar, and the headline sits in its own cell in lower case, as Bauhaus designers liked.

## What you get

- Poster layout built with CSS Grid
- Circle, triangle and bar shapes in pure CSS
- Primary red, yellow and blue palette
- Lower case headings like classic Bauhaus type
- Grid folds into two columns on phones

## The key CSS

```css
.poster {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  grid-template-rows: repeat(3, 180px);
  border: 3px solid #111;
}
.c1 { grid-column: 1 / 3; grid-row: 1 / 3; background: #f7b801; }
.c1::after { content: ""; position: absolute; width: 300px; height: 300px; border-radius: 50%; background: #d62828; }
.c3::after { background: #111; clip-path: polygon(50% 0, 100% 100%, 0 100%); }
```

## How to use

1. Download `demo.html` from this folder.
2. Change the text, colors and links.
3. Upload it anywhere. One file, no build step.

## License

MIT. Free for personal and commercial use.
