# Node Workflow Canvas CSS Template (Free)

![Node Workflow Canvas CSS template preview](preview.png)

**Live demo:** https://mmrahmanbappi.github.io/100-css-designs/04-ai-era-interfaces/035-node-workflow/demo.html
**Details and code:** https://mmrahmanbappi.github.io/100-css-designs/04-ai-era-interfaces/035-node-workflow/

Free node workflow canvas template for an automation builder. Draggable nodes joined by curved SVG lines on a dotted grid, with a test run. Live demo.

## What is node workflow canvas?

A node canvas shows a process as boxes joined by lines. You see the trigger on the left, the steps in the middle and the result on the right. Tools like Zapier, n8n and AI agent builders all use it.

Here the nodes are normal HTML cards you can drag around. The lines are SVG curves that redraw as you move a card, and Test run lights up each step in order.

## What you get

- Dotted grid canvas background
- Draggable nodes with pointer events, works with touch
- Curved SVG connectors that follow the nodes
- Color coded step types
- Test run animates each step and the lines

## The key CSS

```css
.canvas {
  background-image: radial-gradient(#c9cdd4 1px, transparent 1px);
  background-size: 22px 22px;
}
.node { position: absolute; width: 230px; border-radius: 14px; touch-action: none; }
path { fill: none; stroke: #9aa1ad; stroke-width: 2; }
path.live { stroke: #16a34a; stroke-dasharray: 6 6; animation: flow .8s linear infinite; }
@keyframes flow { to { stroke-dashoffset: -12; } }
```

## How to use

1. Download `demo.html` from this folder.
2. Change the text, colors and links.
3. Upload it anywhere. One file, no build step.

## License

MIT. Free for personal and commercial use.
