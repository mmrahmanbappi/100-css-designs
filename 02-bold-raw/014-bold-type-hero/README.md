# Bold Type Hero CSS Template (Free)

![Bold Type Hero CSS template preview](preview.png)

**Live demo:** https://mmrahmanbappi.github.io/100-css-designs/02-bold-raw/014-bold-type-hero/demo.html
**Details and code:** https://mmrahmanbappi.github.io/100-css-designs/02-bold-raw/014-bold-type-hero/

Free bold typography hero template where a giant headline fills the screen. Outline text, a highlighted word and tight spacing. Live demo and download.

## What is bold type hero?

A bold type hero lets the words be the picture. Instead of a photo, a huge headline fills the first screen, so the message lands before anything else.

The size comes from clamp() with a viewport unit, so the text scales with the screen. Mixing solid, outlined and highlighted lines keeps a three word headline interesting.

## What you get

- Headline that scales with the screen using clamp()
- Outline text made with text-stroke
- Highlighted last line in lime
- Three column info section below
- Weekly run schedule list

## The key CSS

```css
.big {
  font-family: Anton, Impact, sans-serif;
  text-transform: uppercase;
  font-size: clamp(4.5rem, 19vw, 17rem);
  line-height: .84;
}
.big .o { -webkit-text-stroke: 3px #101820; color: transparent; }
.big .l { background: #d7ff3a; }
```

## How to use

1. Download `demo.html` from this folder.
2. Change the text, colors and links.
3. Upload it anywhere. One file, no build step.

## License

MIT. Free for personal and commercial use.
