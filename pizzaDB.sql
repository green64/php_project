-- Drops the animals_db if it exists currently --
DROP DATABASE IF EXISTS pizza_db;
-- Creates the "animals_db" database --
CREATE DATABASE pizza_db;

-- Makes it so all of the following code will affect animals_db --
USE pizza_db;

-- Creates the table "people" within animals_db --
CREATE TABLE pizzas (
  -- Makes a string column called "email" which cannot contain null --
  email VARCHAR(35) NOT NULL,
    -- Makes a sting column called "title" --
  title VARCHAR(30) NOT NULL,
  -- Makes an numeric column called "ingredients" --
  ingredients GROUP_CONCAT(50) NOT NULL,
);

-- Creates new rows containing data in all named columns --
INSERT INTO pizzas (email, title, ingredients)
VALUES ("Samantha@gmail.com", "Lexie Delight", "tuna,eggs,cheese");

INSERT INTO pizzas (email, title, ingredients)
VALUES ("Steve@gmail.com", "Snicker Pie", "brains,liver,heart");

INSERT INTO pizzas (email, title, ingredients)
VALUES ("Kiko@gmail.com", "Kikos Revenge", "spite,malice");

INSERT INTO pizzas (email, title, ingredients)
VALUES ("Doodle@gmail.com", "Doodle Party Piet", "shrimp,mice,catnip");


-- Updates the row where the column name is  --
UPDATE pizzas



