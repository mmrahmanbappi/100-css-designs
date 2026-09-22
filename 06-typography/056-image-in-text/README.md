# Image in Text CSS Template (Free)

![Image in Text CSS template preview](preview.png)

**Live demo:** https://mmrahmanbappi.github.io/100-css-designs/06-typography/056-image-in-text/demo.html
**Details and code:** https://mmrahmanbappi.github.io/100-css-designs/06-typography/056-image-in-text/

Free text mask website template for a ski resort. A mountain scene shows through giant letters using background-clip text. Live demo, key CSS and HTML download.

## What is image in text?

Image in text fills giant letters with a picture, so you see the scene through the word. It joins the headline and the hero image into one strong shape.

The effect is background-clip: text with transparent text color. Here the picture is a small SVG mountain scene written into the CSS, and the same background is reused for the big numbers further down.

## What you get

- Giant headline filled with a mountain scene
- Scene is an inline SVG, no image file
- Same image inside the fact numbers
- Wide banner using the full scene
- Works in all modern browsers

## The key CSS

```css
h1.scene {
  font-family: Anton, sans-serif;
  font-size: clamp(6rem, 27vw, 26rem);
  background: url(mountains.svg) center / cover no-repeat;
  -webkit-background-clip: text;
  background-clip: text;
  color: transparent;
}
```

## How to use

1. Download `demo.html` from this folder.
2. Change the text, colors and links.
3. Upload it anywhere. One file, no build step.

## License

MIT. Free for personal and commercial use.
