# Mixed Font Pairing CSS Template (Free)

![Mixed Font Pairing CSS template preview](preview.png)

**Live demo:** https://mmrahmanbappi.github.io/100-css-designs/06-typography/055-font-pairing/demo.html
**Details and code:** https://mmrahmanbappi.github.io/100-css-designs/06-typography/055-font-pairing/

Free font pairing website template for a bookshop. Italic serif and bold grotesk mixed inside the same headline for an editorial feel. Live demo and HTML download.

## What is mixed font pairing?

Mixed font pairing puts two very different fonts in the same line: a bold, tight sans serif and a soft italic serif. The switch between them adds rhythm and emphasis, like a voice changing tone mid sentence.

It is simple to build. Two classes, one for each font, used on spans inside the headline. The trick is to make the serif a touch larger so both fonts look the same size.

## What you get

- Inter Tight and Instrument Serif mixed in headlines
- Italic serif words in red for emphasis
- Book cover cards made with CSS
- Staff pick notes in italic serif
- Same pairing used in the logo

## The key CSS

```css
.s { font-family: "Instrument Serif", serif; font-style: italic; font-weight: 400; }
.g { font-weight: 800; letter-spacing: -.04em; }

h1 {
  font-family: "Inter Tight", sans-serif;
  font-weight: 800; letter-spacing: -.045em;
}
h1 .s { font-size: 1.12em; color: #c1382b; }
```

## How to use

1. Download `demo.html` from this folder.
2. Change the text, colors and links.
3. Upload it anywhere. One file, no build step.

## License

MIT. Free for personal and commercial use.
