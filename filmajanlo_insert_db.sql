USE filmajanlo;

-- kategoriak tábla adatai
INSERT INTO kategoriak (nev) VALUES
('akció'),
('dráma'),
('vígjáték'),
('sci-fi'),
('horror');

-- studio tábla adatai
INSERT INTO studio (nev) VALUES
('warner bros'),
('universal pictures'),
('paramount pictures'),
('netflix'),
('hbo');

-- szinesz tábla adatai
INSERT INTO szinesz (nev, ismerteto, szuldatum) VALUES
('robert downey jr.', 'amerikai színész, legismertebb szerepe vasember.', '1965-04-04'),
('scarlett johansson', 'amerikai színésznő, legismertebb szerepe fekete özvegy.', '1984-11-22'),
('chris evans', 'amerikai színész, legismertebb szerepe amerika kapitány.', '1981-06-13');

-- iro tábla adatai
INSERT INTO iro (nev, ismerteto, szuldatum) VALUES
('j.k. rowling', 'az egyik legismertebb brit író, a harry potter sorozat szerzője.', '1965-07-31'),
('george r.r. martin', 'amerikai író, legismertebb műve a trónok harca.', '1948-09-20');

-- rendezo tábla adatai
INSERT INTO rendezo (nev, ismerteto, szuldatum) VALUES
('steven spielberg', 'amerikai filmrendező, producer, forgatókönyvíró.', '1946-12-18'),
('christopher nolan', 'brit filmrendező, legismertebb művei a batman trilógia és az eredet.', '1970-07-30');

-- felhasznalok tábla adatai
INSERT INTO felhasznalok (nev, email, jelszo, profil_kep) VALUES
('john doe', 'johndoe@example.com', 'hashed_password_123', 'profile1.jpg'),
('jane smith', 'janesmith@example.com', 'hashed_password_456', 'profile2.jpg');

-- filmek tábla adatai
INSERT INTO filmek (cim, rendezo_id, iro_id, kategoria_id, studio_id, leiras, kiadasi_ev, boritokep_url, link_netflix, link_hbo) VALUES
('jurassic park', 1, NULL, 1, 1, 'egy kalandfilm ősi dinoszauruszokkal egy szigeten.', 1993, 'jurassicpark.jpg', NULL, 'jurassicpark.hbo.com'),
('eredet', 2, NULL, 4, 5, 'egy csapat tolvaj álmokon keresztül hatol be a tudatalattiba.', 2010, 'inception.jpg', 'inception.netflix.com', NULL);

-- sorozatok tábla adatai
INSERT INTO sorozatok (cim, rendezo_id, iro_id, kategoria_id, studio_id, leiras, kiadasi_ev, boritokep_url, link_netflix, link_hbo) VALUES
('stranger things', NULL, NULL, 4, 4, 'egy csapat fiatal szembesül furcsa, természetfeletti eseményekkel.', 2016, 'strangerthings.jpg', 'strangerthings.netflix.com', NULL);

-- velemenyek tábla adatai
INSERT INTO velemenyek (felhasznalo_id, mu_id, velemeny, datum) VALUES
(1, 1, 'nagyon izgalmas film, imádtam a dinoszauruszokat!', '2024-10-01'),
(2, 2, 'bonyolult, de nagyon elgondolkodtató történet.', '2024-10-02');

-- film_szinesz kapcsoló tábla adatai
INSERT INTO film_szinesz (film_id, szinesz_id) VALUES
(1, 2), -- scarlett johansson játszik a jurassic parkban (példaként)
(2, 3); -- chris evans játszik az eredetben (példaként)

-- sorozat_szinesz kapcsoló tábla adatai
INSERT INTO sorozat_szinesz (sorozat_id, szinesz_id) VALUES
(1, 1); -- robert downey jr. játszik a stranger things-ben (példaként)
