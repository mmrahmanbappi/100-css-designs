# Floating Elements CSS Template (Free)

![Floating Elements CSS template preview](preview.png)

**Live demo:** https://mmrahmanbappi.github.io/100-css-designs/08-3d-depth/074-floating-elements/demo.html
**Details and code:** https://mmrahmanbappi.github.io/100-css-designs/08-3d-depth/074-floating-elements/

Free floating elements template for an app launch. UI cards gently hover around a CSS phone mockup with soft shadows and slow motion. Live demo.

## What is floating elements?

Floating elements show pieces of your app hovering around a phone, as if they had lifted off the screen. Each one bobs slowly on its own timing, which makes the hero feel alive without being busy.

The phone is drawn in HTML and CSS, so the text inside is real. Each floating card shares one float animation with its own duration and delay, so they never move in sync.

## What you get

- Phone mockup built in HTML and CSS
- Four floating cards with real text
- Different speed and delay per card
- Soft layered shadows under each card
- Floating stops for reduced motion

## The key CSS

```css
.fl {
  position: absolute;
  border-radius: 18px;
  box-shadow: 0 20px 40px rgba(18, 48, 43, .14);
  animation: float 6s ease-in-out infinite;
}
.f2 { animation-duration: 7s; }
.f3 { animation-duration: 8s; animation-delay: -3s; }
@keyframes float { 50% { transform: translateY(-16px) rotate(1.5deg); } }
```

## How to use

1. Download `demo.html` from this folder.
2. Change the text, colors and links.
3. Upload it anywhere. One file, no build step.

## License

MIT. Free for personal and commercial use.
