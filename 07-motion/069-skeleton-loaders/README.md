# Skeleton Loaders CSS Template (Free)

![Skeleton Loaders CSS template preview](preview.png)

**Live demo:** https://mmrahmanbappi.github.io/100-css-designs/07-motion/069-skeleton-loaders/demo.html
**Details and code:** https://mmrahmanbappi.github.io/100-css-designs/07-motion/069-skeleton-loaders/

Free skeleton loader template for a news app. Grey shimmer placeholders show while content loads, then real stories fade in. Pure CSS shimmer. Live demo.

## What is skeleton loaders?

A skeleton loader shows grey boxes in the shape of the content while it is loading. People see the layout right away, so waiting feels shorter than staring at a spinner.

The shimmer is a light band inside a wide gradient that slides across each box. When the data arrives, the skeletons are swapped for the real stories with a quick fade.

## What you get

- Skeleton cards that match the real layout
- Shimmer made with one moving gradient
- Real content fades in after loading
- aria-busy tells screen readers it is loading
- Reload button to see it again

## The key CSS

```css
.sk {
  background: linear-gradient(90deg, #e7e7e4 0 30%, #f3f3f1 50%, #e7e7e4 70%) 0 0 / 300% 100%;
  animation: shim 1.3s linear infinite;
  border-radius: 6px;
}
@keyframes shim {
  from { background-position: 100% 0; }
  to   { background-position: 0 0; }
}
```

## How to use

1. Download `demo.html` from this folder.
2. Change the text, colors and links.
3. Upload it anywhere. One file, no build step.

## License

MIT. Free for personal and commercial use.
