# Data Elevia — Landing Page

Website promosi properti dengan admin panel (Decap CMS) untuk edit konten.

## Setup

```bash
# Clone repository
git clone https://github.com/kojoonigiri/kojoonigiri.git
cd kojoonigiri

# Serve local (dev)
python3 -m http.server 8000
open http://localhost:8000

# Admin panel
open http://localhost:8000/admin/
```

## CMS Setup (GitHub Pages)

1. Commit `admin/config.yml`, `index.html`, `content/`, `images/` ke repo
2. Publish repo: Settings → Pages → Source: Deploy from a branch → `main` branch → `/ (root)`
3. Admin panel: `https://kojoonigiri.github.io/admin/`
4. Login: klik "Sign in with GitHub" (first time), or use the deploy button

## Content Structure

```
content/
  homepage.json    # Halaman utama (title, tagline, projects)
  settings.json    # Settings umum
images/            # Gambar proyek (upload via CMS)
```

## Local Dev with CMS

```bash
# Install Decap CMS
npm install decap-cms

# Start local server
npx decap-cms serve
# → http://localhost:8080/admin/
```
