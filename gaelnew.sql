CREATE DATABASE gael DEFAULT CHARACTER SET utf8 ;;

CREATE TABLE `atividade` (
  `id_atividade` int(11) NOT NULL,
  `data_hora_atividade` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `nome_item_substituido` varchar(60) NOT NULL,
  `quantidade_item_substituido` int(11) NOT NULL,
  `equipamento_id_equipamento` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE `conserto` (
  `id_conserto` int(11) NOT NULL,
  `cliente` varchar(60) NOT NULL,
  `prazo_entrega` date NOT NULL,
  `situacao_final` char(1) DEFAULT '1',
  `equipamento_id_equipamento` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE `doacao` (
  `id_doacao` int(11) NOT NULL,
  `instituicao_destino` varchar(60) DEFAULT 'sem instituição',
  `nome_doador` varchar(60) DEFAULT '',
  `representante_destino` varchar(45) NOT NULL,
  `equipamento_id_equipamento` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE `equipamento` (
  `id_equipamento` int(11) NOT NULL,
  `nome_equipamento` varchar(60) NOT NULL,
  `n_serie` int(40) NOT NULL,
  `marca` varchar(60) NOT NULL,
  `modelo` varchar(60) NOT NULL,
  `situacao` char(1) DEFAULT '1',
  `OS_id_OS` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE `laudo` (
  `id_laudo` int(11) NOT NULL,
  `possiveis_defeitos` text,
  `possiveis_causas` text,
  `possiveis_solucoes` text,
  `data_entrega` date DEFAULT NULL,
  `cliente` varchar(60) NOT NULL,
  `destino` varchar(60) DEFAULT '',
  `equipamento_id_equipamento` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE `meta` (
  `id_meta` int(11) NOT NULL,
  `titulo` varchar(40) NOT NULL,
  `descricao` text NOT NULL,
  `data_criacao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `data_prazo_finalizacao` date NOT NULL,
  `data_de_finalizacao` date DEFAULT '2000-10-10',
  `situacao_final` char(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE `OS` (
  `id_OS` int(11) NOT NULL,
  `n_OS` varchar(40) NOT NULL,
  `data_hora_entrada` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `usuario_id_usuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `tipo` char(1) NOT NULL,
  `login` varchar(45) NOT NULL,
  `senha` varchar(45) NOT NULL,
  `imagem` varchar(45) DEFAULT '',
  `email` varchar(45) DEFAULT 'insiraumemail@nada',
  `cpf` varchar(13) DEFAULT 'semcpf',
  `turno` char(1) DEFAULT 'M',
  `usuario_bolsista` char(1) DEFAULT NULL,
  `meta_id_meta` int(11) DEFAULT '-1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `atividade`
  ADD PRIMARY KEY (`id_atividade`),
  ADD KEY `fk_atividade_equipamento_idx` (`equipamento_id_equipamento`);

ALTER TABLE `conserto`
  ADD PRIMARY KEY (`id_conserto`),
  ADD KEY `fk_conserto_equipamento_idx` (`equipamento_id_equipamento`);

ALTER TABLE `doacao`
  ADD PRIMARY KEY (`id_doacao`),
  ADD KEY `fk_doacao_equipamento_idx` (`equipamento_id_equipamento`);

ALTER TABLE `equipamento`
  ADD PRIMARY KEY (`id_equipamento`),
  ADD KEY `fk_equipamento_OS_idx` (`OS_id_OS`);


ALTER TABLE `laudo`
  ADD PRIMARY KEY (`id_laudo`),
  ADD KEY `fk_laudo_equipamento_idx` (`equipamento_id_equipamento`);


ALTER TABLE `meta`
  ADD PRIMARY KEY (`id_meta`);


ALTER TABLE `OS`
  ADD PRIMARY KEY (`id_OS`),
  ADD UNIQUE KEY `uc_n_OS` (`n_OS`),
  ADD KEY `fk_OS_usuario_idx` (`usuario_id_usuario`);


ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `fk_usuario_meta1_idx` (`meta_id_meta`);




ALTER TABLE `atividade`
  MODIFY `id_atividade` int(11) NOT NULL AUTO_INCREMENT;



ALTER TABLE `conserto`
  MODIFY `id_conserto` int(11) NOT NULL AUTO_INCREMENT;


ALTER TABLE `doacao`
  MODIFY `id_doacao` int(11) NOT NULL AUTO_INCREMENT;


ALTER TABLE `laudo`
  MODIFY `id_laudo` int(11) NOT NULL AUTO_INCREMENT;


ALTER TABLE `meta`
  MODIFY `id_meta` int(11) NOT NULL AUTO_INCREMENT;


ALTER TABLE `OS`
  MODIFY `id_OS` int(11) NOT NULL AUTO_INCREMENT;


ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT;


ALTER TABLE `equipamento`
  MODIFY `id_equipamento` int(11) NOT NULL AUTO_INCREMENT;



ALTER TABLE `atividade`
  ADD CONSTRAINT `atividade_ibfk_1` FOREIGN KEY (`equipamento_id_equipamento`) REFERENCES `equipamento` (`id_equipamento`);



ALTER TABLE `conserto`
  ADD CONSTRAINT `conserto_ibfk_1` FOREIGN KEY (`equipamento_id_equipamento`) REFERENCES `equipamento` (`id_equipamento`) ON DELETE CASCADE ON UPDATE CASCADE;


ALTER TABLE `doacao`
  ADD CONSTRAINT `doacao_ibfk_1` FOREIGN KEY (`equipamento_id_equipamento`) REFERENCES `equipamento` (`id_equipamento`);


ALTER TABLE `equipamento`
  ADD CONSTRAINT `equipamento_ibfk_1` FOREIGN KEY (`OS_id_OS`) REFERENCES `OS` (`id_OS`);


ALTER TABLE `laudo`
  ADD CONSTRAINT `laudo_ibfk_1` FOREIGN KEY (`equipamento_id_equipamento`) REFERENCES `equipamento` (`id_equipamento`);


ALTER TABLE `OS`
  ADD CONSTRAINT `OS_ibfk_1` FOREIGN KEY (`usuario_id_usuario`) REFERENCES `usuario` (`id_usuario`);



ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`meta_id_meta`) REFERENCES `meta` (`id_meta`);


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

DELIMITER $
CREATE  PROCEDURE  inserir_meta(a VARCHAR (40), b TEXT, c DATE, d CHAR(1))
BEGIN
    INSERT  INTO  meta (titulo,descricao ,data_prazo_finalizacao,situacao_final) VALUES (a,b,c,d);
END
$


CREATE  VIEW  visao_usuario  AS
SELECT  nome , cpf
FROM  usuario;


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



INSERT INTO `gael`.`usuario`
(nome, tipo, login, senha, imagem, email, cpf, turno, usuario_bolsista, meta_id_meta)
VALUES ('diogo','2', '209393', 'senha', 'imagem','email','352352', 'M', 'S',1),  
('nicole','1','23525','asagsa', 'nada','agasg', 'asga','M', 'S',1),
('vitoria', '2', '232525','asgag', 'alguma','asffasfaf','2352532', 'M', 'S',1),
 ('diogo','2', '209393', 'senha', 'imagem','email','352352', 'M', 'S',1),
 ('sabrina','2', '832759', 'senha', 'imagem','akfk','325', 'M', 'S',1),
 ('klisnmann','2', '23582', 'senha', 'imagem','email','2552', 'M', 'S',1),
 ('roberto','2', '82357', 'senha', 'imagem','email','235827', 'M', 'S',1),
 ('jumenta','2', '238527', 'senha', 'imagem','email','357256', 'M', 'S',2),
 ('orientador','2', '3252735', 'senha', 'imagem','email','8235728', 'M', 'S',2),
 ('alguém me diz um nome','1', '3253', 'sem_senha', 'qrimagem','email@dgsd','235', 'N', 'N',2);

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



