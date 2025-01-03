
-- DATABASE BANCO DE DADOS

-- MySQL usando o XAMPP CONTROL PANEL v3.3.0
CREATE TABLE `log` (
  `id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `data_cadastro` varchar(11) NOT NULL;
);

ALTER TABLE `log`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
  
COMMIT;