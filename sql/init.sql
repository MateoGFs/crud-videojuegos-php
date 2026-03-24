
USE biblioteca_videojuegos_db;

-- Tabla de categorías
CREATE TABLE IF NOT EXISTS categories (
    id          INT AUTO_INCREMENT PRIMARY KEY,
    name        VARCHAR(100) NOT NULL,
    description TEXT
);

-- Tabla de videojuegos (referencia a categories)
CREATE TABLE IF NOT EXISTS games (
    code        INT AUTO_INCREMENT PRIMARY KEY,
    title       VARCHAR(150) NOT NULL,
    year        YEAR,
    size        VARCHAR(20),
    category_id INT,
    FOREIGN KEY (category_id) REFERENCES categories(id)
        ON DELETE SET NULL
        ON UPDATE CASCADE
);


INSERT INTO categories (name, description) VALUES
    ('Acción',    'Juegos de ritmo rápido y combate'),
    ('RPG',       'Juegos de rol con historia profunda'),
    ('Deportes',  'Simulaciones deportivas');

INSERT INTO games (title, year, size, category_id) VALUES
    ('God of War',          2018, '49 GB', 1),
    ('Elden Ring',          2022, '60 GB', 2),
    ('EA Sports FC 24',     2023, '50 GB', 3);