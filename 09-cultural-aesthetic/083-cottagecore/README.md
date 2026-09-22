# Cottagecore CSS Template (Free)

![Cottagecore CSS template preview](preview.png)

**Live demo:** https://mmrahmanbappi.github.io/100-css-designs/09-cultural-aesthetic/083-cottagecore/demo.html
**Details and code:** https://mmrahmanbappi.github.io/100-css-designs/09-cultural-aesthetic/083-cottagecore/

Free cottagecore website template for a jam and flower farm shop. Gingham, CSS flowers, scalloped edges, an arched frame and handwritten labels. Live demo.

## What is cottagecore?

Cottagecore is the cozy, romantic look of country life: gingham cloth, wildflowers, jam jars, lace and handwriting. It feels slow and homemade, which suits small farm shops and makers.

Everything is drawn in CSS. The gingham is two crossing stripes, the scalloped edge is a repeating radial gradient, the flowers are four circles and a center, and each jar has a gingham lid and a handwritten label.

## What you get

- Gingham pattern made with two gradients
- Scalloped edges with a radial gradient
- Arched frame with a dashed stitch line
- Jam jars with gingham lids and handwritten labels
- CSS flowers made from five circles

## The key CSS

```css
.ging {
  background-color: #fff;
  background-image:
    linear-gradient(90deg, rgba(232,165,165,.45) 50%, transparent 50%),
    linear-gradient(rgba(232,165,165,.45) 50%, transparent 50%);
  background-size: 24px 24px;
}
.scal { height: 20px;
  background: radial-gradient(circle at 12px 0, transparent 12px, #fbf5ea 12.5px) 0 0 / 24px 20px repeat-x; }
```

## How to use

1. Download `demo.html` from this folder.
2. Change the text, colors and links.
3. Upload it anywhere. One file, no build step.

## License

MIT. Free for personal and commercial use.
