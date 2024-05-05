use mysql;
-- create database projecte_m07_uf3_apartaments;
use projecte_m07_uf3_apartaments;
-- grant all privileges on projecte_m07_uf3_apartaments.* to 'administrador'@'localhost';
INSERT INTO users (name, surname, email, password, type, created_at, updated_at) 
VALUES ('Manel', 'Jarrega', '15585667.clot@fje.edu', '$2y$12$82H9WL0uElqXI5n4Ymb1gu5PJfp3KZNM/5wYrdLT/1pJ5/LuHf3Z6', 'cap de departament', '1970-01-01 00:00:01', CURRENT_TIMESTAMP());

INSERT INTO users (name, surname, email, password, type, created_at, updated_at) 
VALUES ('Carlos', 'Rodriguez', '15585668.clot@fje.edu', '$2y$12$82H9WL0uElqXI5n4Ymb1gu5PJfp3KZNM/5wYrdLT/1pJ5/LuHf3Z6', 'treballador', '1970-01-01 00:00:01', CURRENT_TIMESTAMP());

