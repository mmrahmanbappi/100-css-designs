# Art Deco CSS Template (Free)

![Art Deco CSS template preview](preview.png)

**Live demo:** https://mmrahmanbappi.github.io/100-css-designs/09-cultural-aesthetic/088-art-deco/demo.html
**Details and code:** https://mmrahmanbappi.github.io/100-css-designs/09-cultural-aesthetic/088-art-deco/

Free Art Deco website template for a cocktail bar. Gold line patterns, a sunburst fan, double frames with diamonds and symmetry on deep green. Live demo.

## What is art deco?

Art Deco is the glamorous style of the 1920s and 30s: gold on dark colors, fan and sunburst shapes, stepped frames and strict symmetry. Think grand hotels, old cinemas and cocktail bars.

The sunburst is a repeating conic gradient with its center cut out by a mask. The frame uses a border and an outline together, with two rotated squares as diamonds at the top and bottom.

## What you get

- Gold sunburst fan made with conic-gradient
- Double gold frame with diamond points
- Vertical pinstripe background
- Poiret One display type
- Menu with dotted leaders to the prices

## The key CSS

```css
.fan {
  border-radius: 260px 260px 0 0;
  background: repeating-conic-gradient(from -90deg at 50% 100%, #d4af61 0 2deg, transparent 2deg 12deg);
  mask: radial-gradient(circle at 50% 100%, transparent 40px, #000 41px);
}
.frame { border: 2px solid #d4af61; outline: 1px solid #d4af61; outline-offset: 8px; }
.frame::before { width: 36px; height: 36px; border: 2px solid #d4af61; transform: rotate(45deg); }
```

## How to use

1. Download `demo.html` from this folder.
2. Change the text, colors and links.
3. Upload it anywhere. One file, no build step.

## License

MIT. Free for personal and commercial use.
