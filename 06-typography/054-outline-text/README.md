# Outline Text CSS Template (Free)

![Outline Text CSS template preview](preview.png)

**Live demo:** https://mmrahmanbappi.github.io/100-css-designs/06-typography/054-outline-text/demo.html
**Details and code:** https://mmrahmanbappi.github.io/100-css-designs/06-typography/054-outline-text/

Free outline text website template for a museum. Hollow stroked letters that fill with color on hover, in a bold stacked list. Pure CSS, live demo and download.

## What is outline text?

Outline text shows only the edges of the letters, with the inside left empty. It looks light and modern even at huge sizes, and it pairs well with one solid word to create contrast.

The effect is -webkit-text-stroke with a transparent text color. On hover the color fills in, which makes a simple list of links feel interactive and fun.

## What you get

- Hollow letters with a 2px stroke
- One filled word in the headline for contrast
- Room list that fills with yellow on hover and focus
- Wide Archivo letters using font-stretch
- Works in every modern browser

## The key CSS

```css
.o {
  color: transparent;
  -webkit-text-stroke: 2px #f2efe6;
  transition: color .25s;
}
.rooms a:hover .o,
.rooms a:focus-visible .o {
  color: #f2c14e;
  -webkit-text-stroke-color: #f2c14e;
}
```

## How to use

1. Download `demo.html` from this folder.
2. Change the text, colors and links.
3. Upload it anywhere. One file, no build step.

## License

MIT. Free for personal and commercial use.
