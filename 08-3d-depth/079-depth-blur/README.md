# Depth Blur CSS Template (Free)

![Depth Blur CSS template preview](preview.png)

**Live demo:** https://mmrahmanbappi.github.io/100-css-designs/08-3d-depth/079-depth-blur/demo.html
**Details and code:** https://mmrahmanbappi.github.io/100-css-designs/08-3d-depth/079-depth-blur/

Free depth blur template for a winery. Near and far layers blur while the middle stays sharp, like a camera lens, and focus shifts on scroll. Live demo.

## What is depth blur?

Depth blur copies what a camera lens does: the thing in focus is sharp, and everything nearer or further away is soft. It pulls the eye straight to the message and makes a flat scene feel deep.

The scene has three layers with different blur amounts. As you scroll, the focus moves from the vines to the hills behind them, like a film pulling focus, using a few lines of JavaScript and CSS filter.

## What you get

- Three scene layers with different blur
- Grapes and vines drawn with gradients
- Focus shifts from near to far on scroll
- Frosted text card that stays readable
- Focus pull off for reduced motion

## The key CSS

```css
.far  { filter: blur(6px); }
.mid  { filter: blur(0); }
.near { filter: blur(10px); }
.card { background: rgba(246, 239, 228, .82); backdrop-filter: blur(10px); }

/* JS: shift focus on scroll */
far.style.filter = `blur(${6 - p * 6}px)`;
mid.style.filter = `blur(${p * 5}px)`;
```

## How to use

1. Download `demo.html` from this folder.
2. Change the text, colors and links.
3. Upload it anywhere. One file, no build step.

## License

MIT. Free for personal and commercial use.
