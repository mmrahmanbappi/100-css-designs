# Frosted Aurora CSS Template (Free)

![Frosted Aurora CSS template preview](preview.png)

**Live demo:** https://mmrahmanbappi.github.io/100-css-designs/01-soft-tactile-ui/005-frosted-aurora/demo.html
**Details and code:** https://mmrahmanbappi.github.io/100-css-designs/01-soft-tactile-ui/005-frosted-aurora/

Free aurora gradient background template with frosted glass cards. Slow moving northern lights colors made in pure CSS. Live demo and HTML download.

## What is frosted aurora?

Frosted aurora puts slow moving colors, like the northern lights, behind panels of frosted glass. The colors drift very gently, so the page feels alive without being busy.

It is made from a few big colored circles that are blurred heavily and moved with a long CSS animation. On top sit dark, semi transparent panels with backdrop-filter. If a visitor has asked their device to reduce motion, the colors stay still.

## What you get

- Animated aurora made from three blurred shapes
- Motion turns off for people who prefer reduced motion
- Dark frosted cards for audio tracks
- Elegant Fraunces serif headline
- Frosted testimonial block

## The key CSS

```css
.sky { position: fixed; inset: -20%; filter: blur(60px); z-index: -1; }
.sky span { position: absolute; border-radius: 50%;
  animation: drift 22s ease-in-out infinite alternate; }

@keyframes drift { to { transform: translate(8vw, -6vw) scale(1.15); } }

@media (prefers-reduced-motion: reduce) {
  .sky span { animation: none; }
}
```

## How to use

1. Download `demo.html` from this folder.
2. Change the text, colors and links.
3. Upload it anywhere. One file, no build step.

## License

MIT. Free for personal and commercial use.
