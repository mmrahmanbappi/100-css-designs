# Tactile Buttons CSS Template (Free)

![Tactile Buttons CSS template preview](preview.png)

**Live demo:** https://mmrahmanbappi.github.io/100-css-designs/01-soft-tactile-ui/008-tactile-buttons/demo.html
**Details and code:** https://mmrahmanbappi.github.io/100-css-designs/01-soft-tactile-ui/008-tactile-buttons/

Free tactile 3D button template in pure CSS. Keys visibly press down when clicked. Includes a working calculator and shop page. Live demo and download.

## What is tactile buttons?

Tactile buttons look like real keys that move when you press them. They have a thick colored edge underneath, and when you click, the top slides down to meet it. It makes every click feel satisfying.

The effect uses a solid box shadow as the side of the key, then moves the button down with transform on the active state while shrinking the shadow. It is fast, works everywhere and needs no JavaScript.

## What you get

- Keycap style buttons in cream, orange and olive
- A working calculator you can click
- Buttons press down about 5 pixels on click
- Clear focus outline for keyboard users
- Switch product cards for a shop layout

## The key CSS

```css
.key {
  background: #f4f0e8;
  border-radius: 12px;
  box-shadow: 0 6px 0 #bdb4a5, 0 8px 12px rgba(0,0,0,.25);
  transition: transform .06s, box-shadow .06s;
}

.key:active {
  transform: translateY(5px);
  box-shadow: 0 1px 0 #bdb4a5, 0 2px 4px rgba(0,0,0,.25);
}
```

## How to use

1. Download `demo.html` from this folder.
2. Change the text, colors and links.
3. Upload it anywhere. One file, no build step.

## License

MIT. Free for personal and commercial use.
