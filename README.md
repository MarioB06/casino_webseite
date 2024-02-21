# Casino Webseite Setup-Anleitung

Um die Casino-Webseite lokal auf deinem Rechner einzurichten, folge bitte diesen Schritten:

## Projekt klonen

Zuerst musst du das Projekt von Git klonen </br>
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
Starte XAMPP und starte Apache und MySQL.

## Datenbank konfigurieren
Öffne die `.env-Datei` im Laravel-Projekt und ändere die Zeile:


<code>DB_DATABASE=casino_webseite</code>

zu:

<code>DB_DATABASE=test</code>

## Datenbank migrieren
Führe den folgenden Befehl im Terminal (PHP) aus, um die Datenbankmigration durchzuführen:

```bash
php artisan migrate
```

## PHP-Server starten
Starte den PHP-Server mit dem folgenden Befehl:

```bash
php artisan serve
```

Öffne die Webseite mit dem Link, den `php artisan serve` bereitstellt.

## Vue-Entwicklungsserver starten
Öffne ein weiteres Terminal und führe den Befehl aus:
```bash
npm run dev
```


### Nun läuft alles und die Seite ist live und wird live aktualisiert, sobald du etwas im Code änderst.