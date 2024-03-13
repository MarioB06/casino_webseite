# Casino Webseite Setup-Anleitung

Um die Casino-Webseite lokal auf dem Rechner einzurichten, diese Schritten ausführen:

## Projekt klonen

Das Projekt von Git klonen </br>
<https://github.com/MarioB06/casino_webseite>

## PHP-Terminal

```bash
cd casino_webseite
```

```bash
composer install
cp .env.example .env
php artisan key:generate
```

## VITE-Terminal

```bash
cd casino_webseite
```

```bash
npm install
npm run build
```

## XAMPP starten
XAMPP starten und Apache und MySQL.

## Datenbank konfigurieren
Die `.env-Datei` Datei öffnen und fogende Zeile ämderm:

<code>DB_DATABASE=casino_webseite</code>

zu:

<code>DB_DATABASE=test</code>

## Datenbank migrieren
Folgeneden Befehl im PHP Terminal ausführen:

```bash
php artisan migrate
```

## PHP-Server starten
PHP-Server starten:

```bash
php artisan serve
```

Webseite mit dem Link öffnen, den `php artisan serve` bereitstellt.

## Vue-Entwicklungsserver starten
Ein weiteres Terminal öffnen:
```bash
npm run dev
```


### Nun läuft alles und die Seite ist live und wird live aktualisiert, sobald du etwas im Code änderst.