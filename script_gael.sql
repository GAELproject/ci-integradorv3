CREATE DATABASE`gael` DEFAULT CHARACTER SET utf8 ;

CREATE TABLE `gael`.`meta` (
  `id_meta` INT NOT NULL AUTO_INCREMENT,
  `titulo` VARCHAR(40) NOT NULL,
  `descricao` TEXT(200) NOT NULL,
  `data_criacao` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  `data_prazo_finalizacao` DATE NOT NULL,
  `data_de_finalizacao` DATE NOT NULL,
  `situacao_final` CHAR(1),
  PRIMARY KEY (`id_meta`));

CREATE TABLE `gael`.`usuario` (
  `id_usuario` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(60) NOT NULL,
  `tipo` CHAR(1) NOT NULL,
  `login` VARCHAR(45) NOT NULL,
  `senha` VARCHAR(45) NOT NULL,
  `imagem` VARCHAR(45),
  `email` VARCHAR(45),
  `cpf` VARCHAR(13),
  `turno` CHAR(1),
  `usuario_bolsista` CHAR(1),
  `meta_id_meta` INT,
  PRIMARY KEY (`id_usuario`),
  INDEX `fk_usuario_meta1_idx` (`meta_id_meta` ASC));


CREATE TABLE `gael`.`OS` (
  `id_OS` INT NOT NULL AUTO_INCREMENT,
  `data_hora_entrada` TIMESTAMP NOT NULL,
  `usuario_id_usuario` INT,
  PRIMARY KEY (`id_OS`),
  INDEX `fk_OS_usuario_idx` (`usuario_id_usuario` ASC)
);

CREATE TABLE `gael`.`atividade` (
  `id_atividade` INT NOT NULL AUTO_INCREMENT,
  `data_hora_atividade` TIMESTAMP NOT NULL,
  `nome_item_substituido` VARCHAR(60) NOT NULL,
  `quantidade_item_substituido` INT NOT NULL,
  PRIMARY KEY (`id_atividade`));

CREATE TABLE `gael`.`equipamento` (
  `id_equipamento` INT NOT NULL,
  `nome_equipamento` VARCHAR(60) NOT NULL,
  `n_serie` INT(40) NOT NULL,
  `marca` VARCHAR(60) NOT NULL,
  `modelo` VARCHAR(60) NOT NULL,
  `situacao_final` CHAR(1),
  `atividade_id_atividade` INT,
  PRIMARY KEY (`id_equipamento`),
  INDEX `fk_equipamento_atividade1_idx` (`atividade_id_atividade` ASC));

CREATE TABLE `gael`.`doacao` (
  `idtable1` INT NOT NULL AUTO_INCREMENT,
  `instituicao_destino` VARCHAR(60),
  `nome_doador` VARCHAR(60),
  `representante_destino` VARCHAR(45) NOT NULL,
  `OS_id_OS` INT,
  `equipamento_id_equipamento` INT,
  PRIMARY KEY (`idtable1`),
  INDEX `fk_table1_OS1_idx` (`OS_id_OS` ASC),
  INDEX `fk_doacao_equipamento1_idx` (`equipamento_id_equipamento` ASC));


CREATE TABLE `gael`.`conserto` (
  `idtable1` INT NOT NULL AUTO_INCREMENT,
  `cliente` VARCHAR(60) NOT NULL,
  `prazo_entrega` VARCHAR(45) NOT NULL,
  `situacao_final` CHAR(1),
  `OS_id_OS` INT,
  `equipamento_id_equipamento` INT,
  PRIMARY KEY (`idtable1`, `OS_id_OS`),
  INDEX `fk_conserto_OS1_idx` (`OS_id_OS` ASC),
  INDEX `fk_conserto_equipamento1_idx` (`equipamento_id_equipamento` ASC));


CREATE TABLE `gael`.`laudo` (
  `idt_laudo` INT NOT NULL AUTO_INCREMENT,
  `possiveis_defeitos` TEXT(200) NOT NULL,
  `possiveis_causas` TEXT(200) NOT NULL,
  `possiveis_solucoes` TEXT(200) NOT NULL,
  `data_hora_entrega` VARCHAR(45) NOT NULL,
  `cliente` VARCHAR(60) NOT NULL,
  `destino` VARCHAR(60),
  `OS_id_OS` INT,
  `equipamento_id_equipamento` INT,
  PRIMARY KEY (`idt_laudo`),
  INDEX `fk_table1_OS1_idx` (`OS_id_OS` ASC),
  INDEX `fk_laudo_equipamento1_idx` (`equipamento_id_equipamento` ASC));
  
ALTER TABLE `gael`.`meta`
ALTER `situacao_final` SET DEFAULT '1';

ALTER TABLE `gael`.`usuario`
ALTER `cpf` SET DEFAULT 'semcpf';

ALTER TABLE `gael`.`usuario`
ALTER `email` SET DEFAULT 'insiraumemail@nada';

ALTER TABLE `gael`.`usuario`
ALTER `turno` SET DEFAULT 'M';

ALTER TABLE `gael`.`usuario`
ALTER `imagem` SET DEFAULT '';

ALTER TABLE `gael`.`equipamento`
ALTER `situacao_final` SET DEFAULT '1';

ALTER TABLE `gael`.`doacao`
ALTER `instituicao_destino` SET DEFAULT 'sem instituição';

ALTER TABLE `gael`.`doacao`
ALTER `nome_doador` SET DEFAULT '';

ALTER TABLE `gael`.`conserto`
ALTER `situacao_final` SET DEFAULT '1';

ALTER TABLE `gael`.`laudo`
ALTER `destino` SET DEFAULT '';

ALTER TABLE `gael`.`usuario`
ALTER `meta_id_meta` SET DEFAULT -1;


INSERT INTO `gael`.`usuario`
(nome, tipo, login, senha, imagem, email, cpf, turno, usuario_bolsista)
VALUES ('diogo','2', '209393', 'senha', 'imagem','email','352352', 'M', 'S');

INSERT INTO `gael`.`usuario`
(nome, tipo, login, senha, turno, usuario_bolsista)
VALUES ('nicole','1','23525', 'nada', 'M', 'S');

INSERT INTO `gael`.`usuario`
(nome, tipo,login, senha, turno, usuario_bolsista)
VALUES ('vitoria', '2', '353436', 'alguma', 'M', 'S');

INSERT INTO `gael`.`usuario`
(nome, tipo, login, senha, imagem, email, cpf, turno, usuario_bolsista)
VALUES ('diogo','2', '209393', 'senha', 'imagem','email','352352', 'M', 'S');

INSERT INTO `gael`.`usuario`
(nome, tipo, login, senha, imagem, email, cpf, turno, usuario_bolsista)
VALUES ('sabrina','2', '832759', 'senha', 'imagem','akfk','325', 'M', 'S');

INSERT INTO `gael`.`usuario`
(nome, tipo, login, senha, imagem, email, cpf, turno, usuario_bolsista)
VALUES ('klisnmann','2', '23582', 'senha', 'imagem','email','2552', 'M', 'S');

INSERT INTO `gael`.`usuario`
(nome, tipo, login, senha, imagem, email, cpf, turno, usuario_bolsista)
VALUES ('roberto','2', '82357', 'senha', 'imagem','email','235827', 'M', 'S');

INSERT INTO `gael`.`usuario`
(nome, tipo, login, senha, imagem, email, cpf, turno, usuario_bolsista)
VALUES ('jumenta','2', '238527', 'senha', 'imagem','email','357256', 'M', 'S');

INSERT INTO `gael`.`usuario`
(nome, tipo, login, senha, imagem, email, cpf, turno, usuario_bolsista)
VALUES ('orientador','2', '3252735', 'senha', 'imagem','email','8235728', 'M', 'S');

INSERT INTO `gael`.`usuario`
(nome, tipo, login, senha, imagem, email, cpf, turno, usuario_bolsista)
VALUES ('alguém me diz um nome','1', '3253', 'sem_senha', 'qrimagem','email@dgsd','235', 'N', 'N');
