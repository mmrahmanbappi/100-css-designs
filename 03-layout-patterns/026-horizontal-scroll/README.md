# Horizontal Scroll CSS Template (Free)

![Horizontal Scroll CSS template preview](preview.png)

**Live demo:** https://mmrahmanbappi.github.io/100-css-designs/03-layout-patterns/026-horizontal-scroll/demo.html
**Details and code:** https://mmrahmanbappi.github.io/100-css-designs/03-layout-patterns/026-horizontal-scroll/

Free horizontal scroll timeline template with CSS scroll snap and arrow buttons. Built for a museum exhibition. Live demo, key CSS and HTML download.

## What is horizontal scroll?

A horizontal scroll section lets people move sideways through a set of panels, like flipping through an exhibition. It works well for timelines, where left to right feels like moving through time.

CSS scroll snap does the hard part. Each card snaps into place when you stop, on touch screens and with a trackpad, and two arrow buttons help mouse users.

## What you get

- Scroll snap so every card lands neatly
- Previous and next arrow buttons
- Keyboard scrolling when the track is focused
- Trams drawn in CSS for every era
- Smooth scroll turns off for reduced motion

## The key CSS

```css
.track {
  display: flex;
  gap: 24px;
  overflow-x: auto;
  scroll-snap-type: x mandatory;
  scroll-behavior: smooth;
}
.card {
  flex: 0 0 min(420px, 85vw);
  scroll-snap-align: start;
}
```

## How to use

1. Download `demo.html` from this folder.
2. Change the text, colors and links.
3. Upload it anywhere. One file, no build step.

## License

MIT. Free for personal and commercial use.
