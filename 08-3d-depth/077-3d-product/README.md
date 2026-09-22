# 3D Product Box CSS Template (Free)

![3D Product Box CSS template preview](preview.png)

**Live demo:** https://mmrahmanbappi.github.io/100-css-designs/08-3d-depth/077-3d-product/demo.html
**Details and code:** https://mmrahmanbappi.github.io/100-css-designs/08-3d-depth/077-3d-product/

Free 3D product template for a tea brand. A real CSS 3D box with a label on every side spins slowly and turns when you drag it or use arrow keys. Live demo.

## What is 3d product box?

A 3D product box lets shoppers turn the packaging around and read every side, right on the product page. It is a real box made of six faces, not a picture, so the label text stays sharp and selectable.

Each face is placed with rotateY or rotateX and translateZ. The box spins slowly on its own, then stops when you grab it so you can turn it with the mouse, a finger or the arrow keys.

## What you get

- Six sided box built in pure CSS
- Box size set with three variables
- Slow automatic spin
- Drag, touch or arrow keys to rotate
- Soft ground shadow under the box

## The key CSS

```css
.box { --w: 180px; --h: 260px; --d: 120px; transform-style: preserve-3d;
  transform: rotateX(-12deg) rotateY(var(--ry, 30deg)); }
.fr { transform: translateZ(calc(var(--d) / 2)); }
.bk { transform: rotateY(180deg) translateZ(calc(var(--d) / 2)); }
.rt { width: var(--d); transform: rotateY(90deg)  translateZ(calc(var(--w) / 2)); }
.lf { width: var(--d); transform: rotateY(-90deg) translateZ(calc(var(--w) / 2)); }
```

## How to use

1. Download `demo.html` from this folder.
2. Change the text, colors and links.
3. Upload it anywhere. One file, no build step.

## License

MIT. Free for personal and commercial use.
