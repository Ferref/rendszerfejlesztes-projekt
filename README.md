## Film

- Adatbázis ER Diagram: https://dbdiagram.io/d/filmajanlo_er_diagram-66fdc20bfb079c7ebd2510ae
- Ütemterv: https://docs.google.com/spreadsheets/d/1zEMwOb68bN50mUc4o-EsSzoY9g05RT9-/edit?gid=386670658#gid=386670658

## Mappastruktúra

- /rendszerfejlesztes-projekt
  - /backend - PHP backend
    - /api - API végpontok és vezérlők
    - /models - Adatbázis modellek
    - /config - Konfigurációs fájlok (pl. adatbázis)
    - /public - Nyilvános fájlok (index.php, képek, CSS)
    - /tests - Tesztelési fájlok
  - /frontend - Vue.js frontend
    - /components - Vue.js komponensek
    - /router - Útvonalkezelés a különböző oldalakhoz
    - /store - Állapotkezelés (Vuex)
    - App.vue - A fő Vue.js fájl, amely az egész alkalmazást összefogja
    - /public - (pl. képek, JS, CSS)
  - .env - Környezeti változók fájlja (pl. titkos kulcsok, adatbázis kapcsolat)
  - composer.json - PHP függőségek (Composer által kezelt könyvtárak)
  - README.md

