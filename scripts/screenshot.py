"""Saves preview.png for every demo.html. Run: pip install playwright && playwright install chromium && python scripts/screenshot.py"""
import asyncio, glob, os
from playwright.async_api import async_playwright
ROOT = os.path.dirname(os.path.dirname(os.path.abspath(__file__)))
async def main():
    async with async_playwright() as p:
        b = await p.chromium.launch()
        pg = await b.new_page(viewport={"width": 1280, "height": 800})
        for f in sorted(glob.glob(os.path.join(ROOT, "*", "*", "demo.html"))):
            await pg.goto("file://" + f); await pg.wait_for_timeout(1200)
            await pg.screenshot(path=os.path.join(os.path.dirname(f), "preview.png")); print("saved", f)
        await b.close()
asyncio.run(main())
