# Spatial UI CSS Template (Free)

![Spatial UI CSS template preview](preview.png)

**Live demo:** https://mmrahmanbappi.github.io/100-css-designs/08-3d-depth/078-spatial-ui/demo.html
**Details and code:** https://mmrahmanbappi.github.io/100-css-designs/08-3d-depth/078-spatial-ui/

Free spatial UI template inspired by Apple visionOS. Floating glass windows at different depths over a room, with a floating tab bar. Live demo.

## What is spatial ui?

Spatial UI is the design language of headsets like Apple Vision Pro. Windows are frosted glass floating in your room, side panels angle toward you, and tools sit in a small pill bar below the main window.

On the web you can get the same feel with CSS 3D. The side windows are pushed back and turned slightly with translateZ and rotateY, all glass is backdrop-filter blur, and the room behind is just gradients.

## What you get

- Three glass windows at different depths
- Side panels angled toward the viewer
- Floating ornament tool bar
- Room background drawn with gradients
- Flattens into a simple stack on phones

## The key CSS

```css
.room { perspective: 1400px; }
.space { transform-style: preserve-3d; }
.win {
  border-radius: 30px;
  background: rgba(128, 128, 128, .28);
  backdrop-filter: blur(40px) saturate(160%);
  box-shadow: inset 0 1px 0 rgba(255,255,255,.4), 0 30px 60px rgba(0,0,0,.25);
}
.side  { transform: translateZ(-120px) rotateY(18deg); }
.right { transform: translateZ(-120px) rotateY(-18deg); }
```

## How to use

1. Download `demo.html` from this folder.
2. Change the text, colors and links.
3. Upload it anywhere. One file, no build step.

## License

MIT. Free for personal and commercial use.
