# Memphis CSS Template (Free)

![Memphis CSS template preview](preview.png)

**Live demo:** https://mmrahmanbappi.github.io/100-css-designs/02-bold-raw/017-memphis/demo.html
**Details and code:** https://mmrahmanbappi.github.io/100-css-designs/02-bold-raw/017-memphis/

Free Memphis design website template with squiggles, dots, zigzags and bold 80s shapes drawn in CSS. Built for a party planner. Live demo and download.

## What is memphis?

Memphis design comes from a group of Italian designers in the 1980s. It is full of bright circles, triangles, squiggly lines, dot patterns and zigzags, all mixed together with a sense of humor.

Every shape here is CSS. The dots are a repeating radial gradient, the zigzag is two small linear gradients, the triangle is a border trick, and the squiggle is a tiny inline SVG.

## What you get

- Circle, triangle, pill and dot shapes
- Zigzag border made with two gradients
- Squiggle line as inline SVG
- Package cards with colored offset shadows
- Shapes hide on phones so text stays clear

## The key CSS

```css
.dots {
  background-image: radial-gradient(#1d1d1b 2px, transparent 2.5px);
  background-size: 18px 18px;
}
.zig {
  height: 22px;
  background:
    linear-gradient(135deg, #ff5a5f 25%, transparent 25%) -11px 0 / 22px 22px,
    linear-gradient(225deg, #ff5a5f 25%, transparent 25%) -11px 0 / 22px 22px;
}
```

## How to use

1. Download `demo.html` from this folder.
2. Change the text, colors and links.
3. Upload it anywhere. One file, no build step.

## License

MIT. Free for personal and commercial use.
