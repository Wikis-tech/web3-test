# Nexora — Web3 Landing Page

Minimal, responsive Web3 landing page built with PHP, CSS, vanilla JavaScript and original SVG artwork.

## Features
- Left-side abstract SVG hero (desktop), stacked hero (mobile)
- Lightweight PHP rendering with escaped text
- Responsive navigation and reduced-motion support
- Short copy, no wallet integration, no backend storage
- No credentials or Supabase connection needed
- PHP community runtime configured for Vercel

## Run locally
Requires PHP 8.2+.

```bash
php -S localhost:8000 -t .
```

Open **http://localhost:8000/api/index.php**. For a site-root preview use `php -S localhost:8000 router.php` after adding a local router, or use the Vercel CLI.

## Deploy to Vercel
1. In Vercel, click **Add New → Project**.
2. Import GitHub repository **Wikis-tech/web3-test**.
3. Choose **Other** for framework, keep root directory **./**.
4. Leave build command blank; deploy with the existing `vercel.json`.
5. Visit the deployment URL. Future pushes to `main` redeploy automatically.

**Note:** Vercel does not provide first-party PHP hosting; this project uses the independently maintained `vercel-php@0.9.0` runtime. Check build logs if deployment fails. For a PHP-only host, route the domain to `api/index.php` and serve the `assets` folder.

## Customize
Edit text and page sections in `api/index.php`, palette/layout in `assets/style.css`, and hero illustration in `assets/hero-art.svg`.

The contact email uses `hello@nexora.example` as a **placeholder**, not an active inbox. Replace it with your actual brand address before publishing publicly.

## Future Supabase integration
This marketing page has no forms, user accounts, or content management. Do not add database keys until there is a real need for persistent data.

## Credits
Original abstract artwork created as SVG for this project. Google Fonts used: Space Grotesk and DM Sans.
