CREATE DATABASE IF NOT EXISTS filmajanlo;
USE filmajanlo;

-- kategoriak tábla
CREATE TABLE kategoriak (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nev VARCHAR(255) NOT NULL
);

-- studio tábla
CREATE TABLE studio (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nev VARCHAR(255) NOT NULL
);

-- szinesz tábla
CREATE TABLE szinesz (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nev VARCHAR(255) NOT NULL,
    ismerteto TEXT,
    szuldatum DATE
);

-- iro tábla
CREATE TABLE iro (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nev VARCHAR(255) NOT NULL,
    ismerteto TEXT,
    szuldatum DATE
);

-- rendezo tábla
CREATE TABLE rendezo (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nev VARCHAR(255) NOT NULL,
    ismerteto TEXT,
    szuldatum DATE
);

-- filmek tábla
CREATE TABLE filmek (
    id INT AUTO_INCREMENT PRIMARY KEY,
    cim VARCHAR(255) NOT NULL,
    rendezo_id INT,
    iro_id INT,
    kategoria_id INT,
    studio_id INT,
    leiras TEXT,
    kiadasi_ev YEAR,
    boritokep_url VARCHAR(255),
    link_netflix VARCHAR(255),
    link_hbo VARCHAR(255),
    FOREIGN KEY (rendezo_id) REFERENCES rendezo(id) ON DELETE SET NULL,
    FOREIGN KEY (iro_id) REFERENCES iro(id) ON DELETE SET NULL,
    FOREIGN KEY (kategoria_id) REFERENCES kategoriak(id) ON DELETE SET NULL,
    FOREIGN KEY (studio_id) REFERENCES studio(id) ON DELETE SET NULL
);

-- sorozatok tábla
CREATE TABLE sorozatok (
    id INT AUTO_INCREMENT PRIMARY KEY,
    cim VARCHAR(255) NOT NULL,
    rendezo_id INT,
    iro_id INT,
    kategoria_id INT,
    studio_id INT,
    leiras TEXT,
    kiadasi_ev YEAR,
    boritokep_url VARCHAR(255),
    link_netflix VARCHAR(255),
    link_hbo VARCHAR(255),
    FOREIGN KEY (rendezo_id) REFERENCES rendezo(id) ON DELETE SET NULL,
    FOREIGN KEY (iro_id) REFERENCES iro(id) ON DELETE SET NULL,
    FOREIGN KEY (kategoria_id) REFERENCES kategoriak(id) ON DELETE SET NULL,
    FOREIGN KEY (studio_id) REFERENCES studio(id) ON DELETE SET NULL
);

-- felhasznalok tábla
CREATE TABLE felhasznalok (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nev VARCHAR(255) NOT NULL,
    email VARCHAR(255) UNIQUE NOT NULL,
    jelszo VARCHAR(255) NOT NULL,
    profil_kep VARCHAR(255),
    regisztracios_datum DATETIME DEFAULT CURRENT_TIMESTAMP
);

-- velemenyek tábla
CREATE TABLE velemenyek (
    id INT AUTO_INCREMENT PRIMARY KEY,
    felhasznalo_id INT,
    mu_id INT, -- film vagy sorozat ID
    velemeny TEXT,
    datum DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (felhasznalo_id) REFERENCES felhasznalok(id) ON DELETE CASCADE
);

-- kapcsoló tábla: film-szinesz
CREATE TABLE film_szinesz (
    film_id INT,
    szinesz_id INT,
    PRIMARY KEY (film_id, szinesz_id),
    FOREIGN KEY (film_id) REFERENCES filmek(id) ON DELETE CASCADE,
    FOREIGN KEY (szinesz_id) REFERENCES szinesz(id) ON DELETE CASCADE
);

-- kapcsoló tábla: sorozat-szinesz
CREATE TABLE sorozat_szinesz (
    sorozat_id INT,
    szinesz_id INT,
    PRIMARY KEY (sorozat_id, szinesz_id),
    FOREIGN KEY (sorozat_id) REFERENCES sorozatok(id) ON DELETE CASCADE,
    FOREIGN KEY (szinesz_id) REFERENCES szinesz(id) ON DELETE CASCADE
);
