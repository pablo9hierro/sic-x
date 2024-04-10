ALTER TABLE usuarios
ADD CONSTRAINT fk_user_imovel FOREIGN KEY (user_id) REFERENCES imoveis (id);