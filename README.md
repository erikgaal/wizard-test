# Livewire 4.2.3 Wizard Bug Reproduction

Minimal reproduction for a bug introduced in Livewire 4.2.3 (likely a downstream AlpineJS upgrade) that breaks Filament's Wizard component.

## Setup

```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
npm install
npm run build
```

## Reproduction

1. Start the dev server:
   ```bash
   composer dev
   ```
2. Visit `/admin/test-wizard`
3. Observe the wizard is broken

## Working scenario (Livewire <4.2.3)

To verify the wizard works correctly on older versions:

```bash
composer require livewire/livewire:4.2.2
```

Restart the dev server and revisit `/admin/test-wizard` — the wizard functions as expected.

## Broken scenario (Livewire 4.2.3)

```bash
composer require livewire/livewire:4.2.3
```

Restart the dev server and revisit `/admin/test-wizard` — the wizard is broken.
