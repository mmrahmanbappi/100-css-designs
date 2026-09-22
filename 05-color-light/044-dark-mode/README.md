# Dark Mode First CSS Template (Free)

![Dark Mode First CSS template preview](preview.png)

**Live demo:** https://mmrahmanbappi.github.io/100-css-designs/05-color-light/044-dark-mode/demo.html
**Details and code:** https://mmrahmanbappi.github.io/100-css-designs/05-color-light/044-dark-mode/

Free dark mode first website template for a budget app. Designed dark, with a working light mode toggle that remembers the choice. Live demo, key CSS and download.

## What is dark mode first?

Dark mode first means the site is designed in dark colors from the start, and light mode is the extra option. Many apps now work this way, because people use them at night and dark screens are easier on the eyes.

All colors live in CSS variables. The light theme simply redefines them under a data-theme attribute, and a small script flips it and saves the choice so it stays the same on the next visit.

## What you get

- Dark theme by default, light theme on toggle
- Theme saved in localStorage for the next visit
- No flash of the wrong theme on load
- Budget card with over limit warning color
- Toggle icon changes from moon to sun

## The key CSS

```css
:root {
  --bg: #0e1116; --surface: #161b22; --ink: #e8ecf1; --acc: #58d6a6;
}
[data-theme="light"] {
  --bg: #f6f7f9; --surface: #ffffff; --ink: #141a21; --acc: #11855e;
}
body { background: var(--bg); color: var(--ink); }
```

## How to use

1. Download `demo.html` from this folder.
2. Change the text, colors and links.
3. Upload it anywhere. One file, no build step.

## License

MIT. Free for personal and commercial use.
