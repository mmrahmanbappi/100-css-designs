# Terminal Developer CSS Template (Free)

![Terminal Developer CSS template preview](preview.png)

**Live demo:** https://mmrahmanbappi.github.io/100-css-designs/04-ai-era-interfaces/037-terminal-dev/demo.html
**Details and code:** https://mmrahmanbappi.github.io/100-css-designs/04-ai-era-interfaces/037-terminal-dev/

Free terminal style landing page template for a CLI tool. Dark monospace look, a terminal window that types commands, and a copy install button. Live demo.

## What is terminal developer?

The terminal look speaks directly to developers. Monospace type, a dark background, green prompts and a terminal window that shows the tool working in a few lines.

The typing animation shows a real command and its output, so people understand the product in five seconds. The install command sits right under the headline with a copy button.

## What you get

- JetBrains Mono across the whole page
- Terminal window with colored dots
- Command that types itself, then output lines appear
- Install snippet with a working copy button
- Syntax style colors for paths, success and URLs

## The key CSS

```css
.term { background: #161a21; border: 1px solid #262c36; border-radius: 12px; }
.bar i { width: 11px; height: 11px; border-radius: 50%; }
.bar i:nth-child(1) { background: #ff7b72; }
.bar i:nth-child(2) { background: #e3b341; }
.bar i:nth-child(3) { background: #7ee787; }
.install code::before { content: "$ "; color: #7d8699; }
```

## How to use

1. Download `demo.html` from this folder.
2. Change the text, colors and links.
3. Upload it anywhere. One file, no build step.

## License

MIT. Free for personal and commercial use.
