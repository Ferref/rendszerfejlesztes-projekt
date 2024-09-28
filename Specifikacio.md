# Film Fejlesztési Specifikáció

## 1. Projekt Célja
A projekt célja egy oldal létrehozása filmkedvelőknek. A felhasználók filmek, sorozatok és színészek és íról között böngészhetnek. Olvashatnak és véleményt írhatnak a filmekről és sorozatokról. Találhatnak külső linkeket a filmek megtekintéséhez, ha elérhetők (Netflix, HBO Max). Értékelhetik a filmeket és a sorozatokat is egyaránt. Összetett szűrésre is van lehetőség kategória, cím, stúdió, színész, író és rendező és író szerint is.

Az oldal célja, hogy segítse a nézőket a megfelelő film vagy sorozat kiválasztásában, lehetőséget biztosítson a filmek és sorozatok értékelésére és véleményezésére, valamint támogassa a filmek körüli közösségi interakciókat. Az oldal felhasználóbarát felülete, keresési és szűrési lehetőségei révén megkönnyíti az érdeklődők számára a filmek és sorozatok felfedezését, és lehetőséget nyújt arra, hogy a felhasználók megosszák véleményüket és tapasztalataikat másokkal.

A projekt további célja, hogy a felhasználók számára teljes körű adminisztrációs és tartalomkezelési funkciókat is biztosítson, mint például új filmek és sorozatok felvétele, vélemények moderálása, valamint a felhasználói interakciók és a közösség menedzselése.

### Felhasználói Típusok és Funkcióik

1. **Vendég Felhasználó**:
   - **Jogosultságok**:
     - Böngészhet a filmek, sorozatok, rendezők, írók és stúdiók között.
     - Olvashatja a filmekről írt véleményeket.
   - **Korlátok**:
     - Nem írhat véleményeket és nem értékelheti azokat.
     - Nem használhatja a mentési és kedvencelési funkciókat.

2. **Regisztrált Felhasználó**:
   - **Jogosultságok**:
     - Írhat véleményeket és értékelheti mások véleményét.
     - Értékelheti a filmeket 1-10 skálán.
     - Hozzáadhat filmeket és sorozatokat a kedvenceihez.
     - Szerkesztheti és törölheti saját véleményeit.
     - Személyes profilt hozhat létre és kezelheti fiókadatait (név, e-mail, jelszó, profilkép).

3. **Tartalomkezelő Felhasználó**:
   - **Jogosultságok**:
     - Új filmeket és sorozatokat, stúdiókat, rendezőket, írókat és kategóriákat adhat hozzá az adatbázishoz.
     - Moderálhatja a felhasználói véleményeket és szükség esetén törölheti azokat.
     - Kezelheti a felhasználók által beküldött hibajelentéseket és javaslatokat.

4. **Adminisztrátor**:
   - **Jogosultságok**:
     - Teljes hozzáféréssel rendelkezik az oldal összes funkciójához és adatához.
     - Felhasználói jogosultságokat állíthat be, új tartalomkezelőket és adminokat hozhat létre.

## 2. Szerepkörök Felosztása

- **Frontend tervező/fejlesztő**: Tervezés hangsúly, HTML, Tailwind CSS, Vue.js alapú frontend komponensek készítése.
- **Frontend fejlesztő**: HTML, Tailwind CSS, Vue.js alapú frontend komponensek készítése.
- **Backend fejlesztő**: PHP alapú backend fejlesztés, adatbázis kezelés.
- **Fullstack fejlesztő**: Frontend és backend fejlesztés kombinációja, valamint dokumentáció és prezentáció készítése.

## 3. Funkciók és Követelmények

### Oldalak
- **Belépés nélkül elérhető**:
  - Főoldal
  - Belépés
  - Regisztráció
  - Film, sorozat, színész, író részletes megtekintő
  - Keresés
- **Alap felhasználó**:
  - Felhasználói profil
  - Mentett filmek, sorozatok
  - Kedvencek
- **Tartalomkezelő felhasználó**:
  - Tartalomkezelés
- **Admin**:
  - Felhasználókezelés

### Frontend

Elsődlegesen a Tailwind CSS keretrendszer által nyújtott layout és komponensek használata. Saját CSS csak abban az esetben, ha a kívánt dizájn elérését Tailwind CSS kijelölőkkel nem lehet megvalósítani. Színek, betűtípusok és elrendezés előre meghatározott sablon alapján, konzisztensen, egy egységes dizájn érdekében.

1. **Főoldal**
   - Keresés
     - Kategóriák és szerzők szerinti böngészés (legördülő listák és gombok).
     - Keresési lehetőség cím, szerző, kiadási év vagy kategória alapján.
     - Több szűrő egyidejű alkalmazása (pl. színészek és filmek egyszerre).
   - Legjobb filmek, sorozatok megjelenítése kártyaformátumban.

2. **Film/Sorozat Részletei Oldal**
   - Film adatainak kiírása, mint címe, rendező, író, színészek, borítókép, leírás, kiadási év, kategóriák.
   - A filmek/sorozatok értékelhetőek 1-10 csillag alapján, amely az összesített értékelést adja meg.
   - Filmek és sorozatok kedvencelése.
   - Filmek és sorozatok mentése (látott, várólistás).
   - Felhasználói vélemények megjelenítése, új vélemény lehetősége.
   - Vélemények értékelése:
     - **Vélemények**: Fel és le gombokkal értékelhetőek.
   - Külső linkek a művek megtekintéséhez (Netflix, HBO Max).
   - Kategória alapján hasonló művek.

3. **Színész/Rendező/Író Részletei Oldal**
- Színész adatainak kiírása, mint neve, kora, ismertetője
- Művek amelyben szerepelt.

1. **Felhasználói Profil**
   - Fiókadatok megjelenítése és módosítása (pl. jelszó, e-mail, profilkép).
   - Profilkép feltöltési lehetőség.
   - Regisztrációs dátum megjelenítése.
   - Kedvenc művek megjelenítése.
   - Mentett művek megjelenítése (látott, várólistás).
   - Vélemények listázása, szerkesztése és törlése.

### Backend

1. **Adatbázis Tervezés (SQL)**
   - **Filmek tábla**: `id`, `cim`, `rendezo_id`, `iro_id`, `kategoria_id`, `studio_id`, `leiras`, `kiadasi_ev`, `boritokep_url`, `link_netflix`, `link_hbo`
   - **Sorozatok tábla**: `id`, `cim`, `rendezo_id`, `iro_id`, `kategoria_id`, `studio_id`, `leiras`, `kiadasi_ev`, `boritokep_url`, `link_netflix`, `link_hbo`
   - **Kategoriak tábla**: `id`, `nev`.
   - **Szinesz tábla**: `id`, `nev`, `ismerteto`, `szuldatum`
   - **Iro tábla**: `id`, `nev`, `ismerteto`, `szuldatum`
   - **Rendezo tábla**: `id`, `nev`, `ismerteto`, `szuldatum`
   - **Studio tábla**: `id`, `nev`.
   - **Felhasznalok tábla**: `id`, `nev`, `email`, `jelszo`, `profil_kep`, `regisztracios_datum`.
   - **Velemenyek tábla**: `id`, `felhasznalo_id`, `mu_id`, `velemeny`, `datum`.

2. **Backend Logika (PHP)**
   - **Regisztráció és bejelentkezés**: PHP session kezelés, jelszavak biztonságos tárolása hash-eléssel.
   - **Filmek listázása és keresés**: Filmek/sorozatok adatainak lekérdezése és keresés cím, szerző, kiadási év vagy kategória alapján. Több szűrő egyidejű alkalmazása.
   - **Vélemények kezelése**: Vélemények hozzáadása, módosítása, törlése.
   - **Tiltószavak kezelése**: Vélemények ellenőrzése tiltószavak alapján.

3. **Biztonsági Szempontok**
   - Input validálás minden formnál.
   - SQL injection elleni védelem.
   - Jelszavak hash-elése a regisztrációnál.
   - Egyedi e-mail cím biztosítása a felhasználók számára.

### Integrációk

1. **Külső Linkek Kezelése**
   - Külső streaming szolgáltatók linkjeinek megjelenítése.
   - Linkek validálása és érvényességük ellenőrzése.

2. **SEO (Kereső) Optimalizálás**
   - Kulcsszavak és kategóriák használata a jobb keresőoptimalizálás érdekében.


