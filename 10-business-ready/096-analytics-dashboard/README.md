# Analytics Dashboard CSS Template (Free)

![Analytics Dashboard CSS template preview](preview.png)

**Live demo:** https://mmrahmanbappi.github.io/100-css-designs/10-business-ready/096-analytics-dashboard/demo.html
**Details and code:** https://mmrahmanbappi.github.io/100-css-designs/10-business-ready/096-analytics-dashboard/

Free analytics dashboard template. KPI cards, an SVG line chart with a date range switch, a donut chart and a top pages table with bars. Live demo.

## What is analytics dashboard?

An analytics dashboard turns numbers into a quick picture. Four headline numbers, a chart of the trend compared with last period, where visitors came from and which pages they read.

Charts are made without a library. The line chart is an SVG path built from the data, with a soft gradient under it. The donut is a conic gradient with a hole cut by a mask. Switching the date range redraws everything.

## What you get

- Four KPI cards with change versus last period
- SVG line chart with previous period for comparison
- Date range switch for 7, 30 and 90 days
- Donut chart made with conic-gradient
- Top pages table with inline bars

## The key CSS

```css
.ring {
  width: 140px; height: 140px; border-radius: 50%;
  background: conic-gradient(#2f6fed 0 52%, #18a57b 52% 76%, #f2a33a 76% 91%, #d94f7a 91%);
  mask: radial-gradient(circle, transparent 42px, #000 43px);
}
.lineA { fill: none; stroke: #2f6fed; stroke-width: 2.5; }
.bar::before { width: var(--p); background: #eef3fe; }
```

## How to use

1. Download `demo.html` from this folder.
2. Change the text, colors and links.
3. Upload it anywhere. One file, no build step.

## License

MIT. Free for personal and commercial use.
