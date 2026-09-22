# Grainy Gradient CSS Template (Free)

![Grainy Gradient CSS template preview](preview.png)

**Live demo:** https://mmrahmanbappi.github.io/100-css-designs/05-color-light/049-grainy-gradient/demo.html
**Details and code:** https://mmrahmanbappi.github.io/100-css-designs/05-color-light/049-grainy-gradient/

Free grainy gradient website template for a podcast. Warm mesh gradients with film grain noise from an inline SVG filter, no image files. Live demo and download.

## What is grainy gradient?

A grainy gradient adds film grain on top of smooth color, so it looks printed or photographed instead of flat and digital. It is one of the biggest looks of the last few years, from Stripe to album covers.

The mesh is four radial gradients at the corners. The grain is an SVG noise filter written straight into the CSS as a data URL, blended with overlay. There is no image file to download.

## What you get

- Mesh gradient from four radial gradients
- Film grain from an inline SVG feTurbulence filter
- One reusable .grain class for any element
- Episode cards with their own color mesh
- Play button drawn in CSS

## The key CSS

```css
.grain { position: relative; isolation: isolate; }
.grain::after {
  content: ""; position: absolute; inset: 0; z-index: -1;
  opacity: .45; mix-blend-mode: overlay; pointer-events: none;
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='200' height='200'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='.85' numOctaves='3'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)'/%3E%3C/svg%3E");
}
```

## How to use

1. Download `demo.html` from this folder.
2. Change the text, colors and links.
3. Upload it anywhere. One file, no build step.

## License

MIT. Free for personal and commercial use.
