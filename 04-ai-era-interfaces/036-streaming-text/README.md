# Streaming Text CSS Template (Free)

![Streaming Text CSS template preview](preview.png)

**Live demo:** https://mmrahmanbappi.github.io/100-css-designs/04-ai-era-interfaces/036-streaming-text/demo.html
**Details and code:** https://mmrahmanbappi.github.io/100-css-designs/04-ai-era-interfaces/036-streaming-text/

Free streaming text UI template where AI text types itself out word by word with a blinking cursor. Built for meeting notes. Live demo and HTML download.

## What is streaming text?

Streaming text is the word by word typing effect you see when an AI writes an answer. It tells people something is happening and lets them start reading before the whole answer is ready.

This template streams real formatted HTML, with headings and lists, not just plain text. A blinking block cursor follows the words, and a status dot switches from writing to ready.

## What you get

- Word by word streaming of formatted HTML
- Blinking block cursor made with CSS
- Status dot that pulses while writing
- Replay button
- Shows the full text at once for reduced motion

## The key CSS

```css
.cur {
  display: inline-block;
  width: .55em; height: 1.1em;
  background: #22231f;
  vertical-align: -.15em;
  animation: blink 1s steps(1) infinite;
}
@keyframes blink { 50% { opacity: 0; } }
@media (prefers-reduced-motion: reduce) { .cur { animation: none; } }
```

## How to use

1. Download `demo.html` from this folder.
2. Change the text, colors and links.
3. Upload it anywhere. One file, no build step.

## License

MIT. Free for personal and commercial use.
