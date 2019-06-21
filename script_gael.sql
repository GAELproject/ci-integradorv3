CREATE DATABASE`gael` DEFAULT CHARACTER SET utf8 ;

CREATE TABLE `gael`.`meta` (
  `id_meta` INT NOT NULL AUTO_INCREMENT,
  `titulo` VARCHAR(40) NOT NULL,
  `descricao` TEXT(200) NOT NULL,
  `data_criacao` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  `data_prazo_finalizacao` DATE NOT NULL,
  `data_de_finalizacao` DATE,
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
  `n_OS` VARCHAR(40) NOT NULL,
  `data_hora_entrada` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  `usuario_id_usuario` INT,
  PRIMARY KEY (`id_OS`),
  INDEX `fk_OS_usuario_idx` (`usuario_id_usuario` ASC)
);

CREATE TABLE `gael`.`atividade` (
  `id_atividade` INT NOT NULL AUTO_INCREMENT,
  `data_hora_atividade` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  `nome_item_substituido` VARCHAR(60) NOT NULL,
  `quantidade_item_substituido` INT NOT NULL,
  `equipamento_id_equipamento` INT,
  PRIMARY KEY (`id_atividade`),
  INDEX `fk_atividade_equipamento_idx` (`equipamento_id_equipamento` ASC));


CREATE TABLE `gael`.`equipamento` (
  `id_equipamento` INT  AUTO_INCREMENT NOT NULL,
  `nome_equipamento` VARCHAR(60) NOT NULL,
  `n_serie` INT(40) NOT NULL,
  `marca` VARCHAR(60) NOT NULL,
  `modelo` VARCHAR(60) NOT NULL,
  `situacao` CHAR(1),
  `OS_id_OS` INT,
  PRIMARY KEY (`id_equipamento`),
INDEX `fk_equipamento_OS_idx` (`OS_id_OS` ASC)
  );


CREATE TABLE `gael`.`doacao` (
  `id_doacao` INT NOT NULL AUTO_INCREMENT,
  `instituicao_destino` VARCHAR(60),
  `nome_doador` VARCHAR(60),
  `representante_destino` VARCHAR(45) NOT NULL,
  `equipamento_id_equipamento` INT,
  PRIMARY KEY (`id_doacao`),
  INDEX `fk_doacao_equipamento_idx` (`equipamento_id_equipamento` ASC));



CREATE TABLE `gael`.`conserto` (
  `id_conserto` INT NOT NULL AUTO_INCREMENT,
  `cliente` VARCHAR(60) NOT NULL,
  `prazo_entrega` DATE NOT NULL,
  `situacao_final` CHAR(1),
  `equipamento_id_equipamento` INT,
  PRIMARY KEY (`id_conserto`),
  INDEX `fk_conserto_equipamento_idx` (`equipamento_id_equipamento` ASC));



CREATE TABLE `gael`.`laudo` (
  `id_laudo` INT NOT NULL AUTO_INCREMENT,
  `possiveis_defeitos` TEXT(200),
  `possiveis_causas` TEXT(200),
  `possiveis_solucoes` TEXT(200),
  `data_entrega` DATE,
  `cliente` VARCHAR(60) NOT NULL,
  `destino` VARCHAR(60),
  `equipamento_id_equipamento` INT,
  PRIMARY KEY (`id_laudo`),
  INDEX `fk_laudo_equipamento_idx` (`equipamento_id_equipamento` ASC));


ALTER  TABLE `gael`.`OS`
ADD CONSTRAINT  uc_n_OS
UNIQUE (n_OS);

ALTER TABLE `gael`.`meta`
ALTER `data_de_finalizacao` SET DEFAULT'2000-10-10';

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
ALTER `situacao` SET DEFAULT '1';

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

ALTER TABLE `gael`.`atividade`
ALTER `equipamento_id_equipamento` SET DEFAULT null;

ALTER TABLE `gael`.`conserto`
ALTER `equipamento_id_equipamento` SET DEFAULT null;

ALTER TABLE `gael`.`laudo`
ALTER `equipamento_id_equipamento` SET DEFAULT null;

ALTER TABLE `gael`.`doacao`
ALTER `equipamento_id_equipamento` SET DEFAULT null;




INSERT INTO `gael`.`usuario`
(nome, tipo, login, senha, imagem, email, cpf, turno, usuario_bolsista)
VALUES ('diogo','2', '209393', 'senha', 'imagem','email','352352', 'M', 'S');

INSERT INTO `gael`.`usuario`
(nome, tipo, login, senha, turno, usuario_bolsista)
VALUES ('nicole','1','23525', 'nada', 'M', 'S');

INSERT INTO `gael`.`usuario`
(nome, tipo,login, senha, cpf,turno, usuario_bolsista)
VALUES ('vitoria', '2', '232525', 'alguma','2352532', 'M', 'S');

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


INSERT INTO `gael`.`meta`
(titulo, descricao, data_prazo_finalizacao, situacao_final)
VALUES ('tirar todas as peças', 'nada demais','2019-10-01','2'),
 ('Manutenção de tv 35 HC', 'tirar tudo','2019-10-12','2'),
 ('Conserto de rádio Panasonic', 'capciotor tirar','2019-10-12','1'),
 ('Conserto de tv Samsung', 'subsituir os fios','2019-10-01','2'),
 ('Ajuste de pc', 'deixar meio preto a tela','2019-10-01','1'),
 ('Ajuste de rádio', 'nada demais','2019-10-01','1'),
 ('Ajuste de televisor', 'todos envolvidos','2019-10-01','2'),
  ('Ajuste de antena', 'todos participem','2019-10-01','2'),
  ('consertar bicicleta', 'todos participem','2019-10-03','2'),
  ('fazer os capacitores', 'não façam nada','2019-10-03','2');


INSERT INTO `gael`.`atividade`
(nome_item_substituido, quantidade_item_substituido)
VALUES ('tecla', 3),
       ('monitor', 3),
       ('cabo frete',7),
       ('processador',8),
       ('nada', 10),
       ('hugmos',9),
       ('juliana',8),
       ('tudos',89),
       ('teclado',90),
       ('nicole',7);


INSERT INTO `gael`.`laudo`
 (possiveis_defeitos,possiveis_causas,possiveis_solucoes,cliente,destino)
 VALUES ('Placa mãe quebrada','Componente queimado','Substituição da placa mãe','Jose Ailton', 'Não sei'),
  ('Placa de vídeo','CI corrompido','Consertar circuito','Leilani','Natal'),
  ('Tela trincada','Queda','Substituição da tela','Diogo','Non sei'),
  ('Capacitor queimado','Tempo de uso','Substituição do capacitor','Scarlett','Extremoz'),
  ('Tela preta','Fonte','Reparação na placa da fonte','Jennifer','Sei nao'),
  ('Botão afundado','Tempo de uso','Subtituição do botão','Jane','IFRN'),
  ('Tela quebrada','Queda','Nova tela','Demetrio','Deus sabe'),
  ('Circuito bugado','Curto circuito','Nova placa','Sara','IFSP'),
  ('Placa queinada','Tempo de uso','Nova placa','Kelly','Lixo'),
  ('Botão quebrado','Tempo de uso','Substituição do botão','Debora','sei lá');


INSERT INTO `gael`.`equipamento`
(nome_equipamento, n_serie, marca, modelo, situacao)
VALUES ('camera','546546','dell','e5352', '1'),
('geladeria','23234','consul','a5329725', '1'),
('celular','546','dell','afsa', '1'),
('pc','2546','hp','safsaf', '1'),
('gula','54','eu sei lá','2143214', '1'),
('cabo hdmi','213','sansumg','afsa', '1'),
('dp','5131','lg','afs', '1'),
('azulão','5131','lg','afs', '1'),
('tomada','2352','kade','afs', '1'),
('notebook','5131','dell','aasga', '1')
;

INSERT INTO `gael`.`doacao`
(representante_destino)
VALUES ('diogo'),
    ('rute'),
    ('alan'),
    ('klisnamnn'),
    ('vitoria'),
    ('jubetriz'),
    ('alaniingua'),
    ('cesimar'),
    ('cosme'),
    ('marjorie');

INSERT INTO `gael`.`conserto`
(cliente, prazo_entrega, situacao_final)
VALUES ('diogo','2000-12-20','1'),
    ('diogo','2000-12-20','1'),
    ('scheylla','2000-12-20','1'),
    ('cesimar','2000-12-20','1'),
    ('jp','2000-12-20','1'),
    ('nicole','2000-12-20','1'),
    ('juliana','2000-12-20','1'),
    ('klinsmann','2000-12-20','1'),
    ('jaqueline','2000-12-20','1'),
    ('kdorientação','2000-12-20','1');

INSERT INTO `gael`.`OS`
(n_OS)
VALUES ('46566'),
('65456'),
('564564'),
('57465'),
('5456'),
('56446'),
('5464'),
('8712454'),
('55645'),
('1456');



DELIMITER $
CREATE  FUNCTION  finalizado(situacao_final char (1))
RETURNS  VARCHAR (30)

BEGIN
	IF SITUACAO_FINAL ='1'THEN
		RETURN 'sim';
    ELSEIF  SITUACAO_FINAL ='2'THEN
		RETURN 'não';
	ELSE
		RETURN 'NAO  INFORMADO';
END IF;
END
$
