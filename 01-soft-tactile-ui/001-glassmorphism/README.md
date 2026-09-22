# Glassmorphism CSS Template (Free)

![Glassmorphism CSS template preview](preview.png)

**Live demo:** https://mmrahmanbappi.github.io/100-css-designs/01-soft-tactile-ui/001-glassmorphism/demo.html
**Details and code:** https://mmrahmanbappi.github.io/100-css-designs/01-soft-tactile-ui/001-glassmorphism/

Free glassmorphism HTML and CSS template with frosted glass cards and blurred panels. See the live demo, copy the CSS, or download the single HTML file.

## What is glassmorphism?

Glassmorphism is a design style where panels look like frosted glass. You can see the colors behind them, but blurred, as if you were looking through a bathroom window. A thin white border and a soft shadow make each panel feel like it floats above the page.

The whole effect comes from one CSS property called backdrop-filter. It blurs whatever sits behind an element. Put a few bright color shapes in the background, place a semi transparent card on top, and you have glassmorphism.

## What you get

- Frosted navigation bar and cards made with backdrop-filter
- Three blurred color shapes in the background, no images needed
- Savings goal progress bars with a warm gradient
- Responsive layout that stacks on phones
- Clear focus outlines for keyboard users

## The key CSS

```css
.glass {
  background: rgba(255, 255, 255, 0.18);
  border: 1px solid rgba(255, 255, 255, 0.45);
  border-radius: 24px;
  backdrop-filter: blur(18px) saturate(140%);
  -webkit-backdrop-filter: blur(18px) saturate(140%);
  box-shadow: 0 20px 50px rgba(3, 20, 35, 0.25);
}
```

## How to use

1. Download `demo.html` from this folder.
2. Change the text, colors and links.
3. Upload it anywhere. One file, no build step.

## License

MIT. Free for personal and commercial use.
