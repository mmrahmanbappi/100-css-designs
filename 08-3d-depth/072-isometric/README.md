# Isometric CSS Template (Free)

![Isometric CSS template preview](preview.png)

**Live demo:** https://mmrahmanbappi.github.io/100-css-designs/08-3d-depth/072-isometric/demo.html
**Details and code:** https://mmrahmanbappi.github.io/100-css-designs/08-3d-depth/072-isometric/

Free isometric website template for a fulfillment warehouse. 3D boxes, a grid floor and a moving conveyor, all built with CSS transforms. Live demo.

## What is isometric?

Isometric design shows objects at an angle from above, with no vanishing point, so everything looks tidy and technical. It is popular for logistics, SaaS and illustration heavy sites.

The floor is a flat grid rotated with rotateX(60deg) and rotateZ(-45deg). Each box is three faces, top, left and right, built with CSS transforms, and the size and height are set with custom properties.

## What you get

- Isometric grid floor made with gradients
- Stackable 3D boxes built from three faces
- Box size and height set per box with variables
- Two box colors for variety
- Moving conveyor belt that stops for reduced motion

## The key CSS

```css
.floor { transform: rotateX(60deg) rotateZ(-45deg); transform-style: preserve-3d; }
.box { position: absolute; width: var(--s, 60px); height: var(--s, 60px); transform-style: preserve-3d; }
.box .t { inset: 0; transform: translateZ(var(--h, 60px)); }
.box .l { bottom: 0; width: 100%; height: var(--h, 60px); transform-origin: bottom; transform: rotateX(-90deg); }
.box .r { right: 0; width: var(--h, 60px); height: 100%; transform-origin: right; transform: rotateY(90deg); }
```

## How to use

1. Download `demo.html` from this folder.
2. Change the text, colors and links.
3. Upload it anywhere. One file, no build step.

## License

MIT. Free for personal and commercial use.
