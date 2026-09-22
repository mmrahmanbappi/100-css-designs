# Neumorphism CSS Template (Free)

![Neumorphism CSS template preview](preview.png)

**Live demo:** https://mmrahmanbappi.github.io/100-css-designs/01-soft-tactile-ui/003-neumorphism/demo.html
**Details and code:** https://mmrahmanbappi.github.io/100-css-designs/01-soft-tactile-ui/003-neumorphism/

Free neumorphism UI template for a smart home panel. Soft extruded dials, switches and cards in pure CSS, with improved contrast. Live demo and download.

## What is neumorphism?

Neumorphism makes buttons and cards look like they are pushed out of, or pressed into, the same material as the background. There are no borders. Everything is shaped by two shadows: a dark one on the bottom right and a light one on the top left.

The original 2020 version had a real problem. Buttons were so low contrast that people could not see them. This template fixes that with darker text, a colored accent for active states, and inset wells that make switches easy to spot.

## What you get

- Thermostat dial with a colored progress ring
- Working plus and minus buttons that press in
- Four accessible toggle switches using role switch
- Raised and inset surfaces from one color
- Orange accent so active states are easy to see

## The key CSS

```css
:root { --bg: #e3e8ef; --dark: #b9c2cf; --light: #ffffff; }

.raised {
  background: var(--bg);
  border-radius: 28px;
  box-shadow: 9px 9px 18px var(--dark), -9px -9px 18px var(--light);
}

.pressed {
  box-shadow: inset 6px 6px 12px var(--dark), inset -6px -6px 12px var(--light);
}
```

## How to use

1. Download `demo.html` from this folder.
2. Change the text, colors and links.
3. Upload it anywhere. One file, no build step.

## License

MIT. Free for personal and commercial use.
