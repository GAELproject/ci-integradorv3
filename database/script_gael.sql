/*falta implementar as chaves estrangeiras da tabela de equipamentos e suas relações, além de que falta as restrições de padrão*/
-- criação do banco de dados
CREATE DATABASE gael;
-- criação das tabelas e atributos
CREATE TABLE gael.usuario(
    id_usuario INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    u_nome VARCHAR(90) NOT NULL, 
    u_email VARCHAR(90) NOT NULL,
    senha VARCHAR(255) NOT NULL,
    cpf VARCHAR(15) NOT NULL,
    usuario_tipo CHAR(1) NOT NULL,
    usuario_bolsista BOOLEAN NOT NULL,
    turno_atividades CHAR(1)
);


CREATE TABLE gael.usuario_tem_meta( 
    id_usuario_tem_meta INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    usuario_id INT NOT NULL,
    meta_id INT NOT NULL,
    data_hora_criacao TIMESTAMP NOT NULL
);

CREATE TABLE gael.meta(
    id_meta INT NOT NULL PRIMARY KEY AUTO_INCREMENT, 
    titulo VARCHAR (60) NOT NULL,
    descricao VARCHAR (256) NOT NULL,
    turno CHAR(1) NOT NULL,
    data_criacao TIMESTAMP,
    data_prazo_finalizacao DATE NOT NULL,
    data_finalizacao DATE,
    situacao BOOLEAN NOT NULL,
    id_criador INT NOT NULL
);

/* a tabela ordem de serviço (OS) toda vez que existe uma relação do usuário 
com todo equipamento que entra. Caracterizando-a como entidade associativa.
*/
CREATE TABLE gael.OS(
    id_os INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    responsavel INT NOT NULL,
    equipamento_id INT NOT NULL,
    numero_OS VARCHAR(256) NOT NULL,
    cpf_cliente VARCHAR(256) NOT NULL,
    cliente_nome VARCHAR(256) NOT NULL,
    cliente_numero_telefone VARCHAR(256) NOT NULL,
    cliente_email VARCHAR(256) NOT NULL,
    data_criacao TIMESTAMP NOT NULL
);

CREATE TABLE gael.equipamento(
     id_equipamento INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    equipamento_nome VARCHAR(90) NOT NULL,
    numero_serie VARCHAR(90) NOT NULL,
    marca VARCHAR(45) NOT NULL, 
    modelo VARCHAR(45) NOT NULL,
    situacao CHAR(1) NOT NULL,
    entregue BOOLEAN NOT NULL   
);
CREATE TABLE gael.laudo(
    id_laudo INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    possiveis_defeitos TEXT NOT NULL,
    possiveis_causas TEXT NOT NULL,
    possiveis_solucoes TEXT NOT NULL,
    data_entrega DATE NOT NULL,
    cliente VARCHAR(60) NOT NULL,
    destino VARCHAR(60) NOT NULL,
    equipamento_laudo_id INT NOT NULL
);
 
CREATE TABLE  gael.conserto(
    id_conserto INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    cliente VARCHAR(60) NOT NULL,
    prazo_entrega DATE NOT NULL,
    situacao_final CHAR(1) NOT NULL,
    equipamento_conserto_id INT NOT NULL
);

CREATE TABLE gael.doacao(
    id_doacao INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    origem VARCHAR(90) NOT NULL,
    defeito VARCHAR(256),
    observacoes VARCHAR(256),
    situacao_final CHAR(1) NOT NULL,
    equipamento_doado_id INT NOT NULL
);

-- Criação das chaves primárias
-- entidade associativa entre equipamento e atividade
CREATE TABLE gael.equipamento_realizou_atividade(
    id_equipamento_realizou_atividade INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    equipamento_id_equipamento INT NOT NULL,
    atividade_id_atividade INT NOT NULL,
    data_hora_atividade TIMESTAMP NOT NULL
);

CREATE TABLE gael.atividade(
    id_atividade INT NOT NULL PRIMARY KEY AUTO_INCREMENT,

    descricao_servico_realizado VARCHAR(256) NOT NULL,
    qtd_item_substituido INT NOT NULL,
    nome_item_substituido VARCHAR(60) NOT NULL,
    situacao_final CHAR(1) NOT NULL,
    atividade_defeito VARCHAR(60) NOT NULL,
    observacoes VARCHAR(256)

);
 

-- restrições de valores padrão (apenas os itens sem not null, têm restrição de vazio)
ALTER TABLE gael.usuario ALTER turno_atividades SET DEFAULT '1 ';
ALTER TABLE gael.usuario ALTER turno_atividades SET DEFAULT '1 ';
ALTER TABLE gael.doacao ALTER defeito SET DEFAULT 'não apresenta defeitos ';
ALTER TABLE gael.atividade ALTER atividade_defeito SET DEFAULT 'não apresenta defeitos ';
ALTER TABLE gael.atividade ALTER observacoes SET DEFAULT 'não apresenta defeitos ';

-- alterações das tabelas e restrições de integridade, valores únicos
ALTER TABLE gael.usuario
ADD CONSTRAINT uc_u_email
UNIQUE (u_email);

ALTER TABLE gael.OS
ADD CONSTRAINT uc_numero_OS 
UNIQUE (numero_OS );

ALTER TABLE gael.equipamento
ADD CONSTRAINT uc_numero_serie 
UNIQUE (numero_serie);

-- alterações das tabelas e restrições de integridade, restrições das chaves  estrangeiras
ALTER TABLE gael.meta
ADD CONSTRAINT fk_id_criador
FOREIGN KEY (id_criador)
REFERENCES gael.usuario(id_usuario);


ALTER TABLE gael.usuario_tem_meta
ADD CONSTRAINT fk_usuario_id
FOREIGN KEY (usuario_id)
REFERENCES gael.usuario(id_usuario);


ALTER TABLE gael.usuario_tem_meta
ADD CONSTRAINT fk_meta_id
FOREIGN KEY (meta_id)
REFERENCES gael.meta(id_meta);


ALTER TABLE gael.OS
ADD CONSTRAINT fk_responsavel
FOREIGN KEY (responsavel)
REFERENCES gael.usuario(id_usuario);

ALTER TABLE gael.OS
ADD CONSTRAINT fk_equipamento_id
FOREIGN KEY (equipamento_id)
REFERENCES gael.equipamento(id_equipamento);


ALTER TABLE gael.doacao
ADD CONSTRAINT fk_equipamento_doado_id
FOREIGN KEY (equipamento_doado_id)
REFERENCES gael.equipamento(id_equipamento);

ALTER TABLE gael.laudo
ADD CONSTRAINT fk_equipamento_laudo_id
FOREIGN KEY (equipamento_laudo_id)
REFERENCES gael.equipamento(id_equipamento);

ALTER TABLE gael.conserto
ADD CONSTRAINT fk_equipamento_conserto_id
FOREIGN KEY (equipamento_conserto_id)
REFERENCES gael.equipamento(id_equipamento);

ALTER TABLE gael.equipamento_realizou_atividade
ADD CONSTRAINT fk_equipamento_id_equipamento
FOREIGN KEY (equipamento_id_equipamento)
REFERENCES gael.equipamento(id_equipamento);

ALTER TABLE gael.equipamento_realizou_atividade
ADD CONSTRAINT fk_atividade_id_atividade
FOREIGN KEY (atividade_id_atividade)
REFERENCES gael.atividade(id_atividade);




-- POVOAMENTO
INSERT INTO `gael`.`usuario` (`u_nome`, `u_email`, `senha`, `cpf`, `usuario_tipo`, `usuario_bolsista`, `turno_atividades`)
VALUES ('Nicole Stheffany Oliveira', 'nicolestheffa@gmail.com', '1234', '124.532.352-35', '2', true, '2');
 
INSERT INTO `gael`.`usuario` (`u_nome`, `u_email`, `senha`, `cpf`, `usuario_tipo`, `usuario_bolsista`, `turno_atividades`)
VALUES ('Diogo da Silva Lima', 'diogo.libras43@gmail.com', '1234', '126.444.444-35', '1', true, '2');

INSERT INTO `gael`.`usuario` (`u_nome`, `u_email`, `senha`, `cpf`, `usuario_tipo`, `usuario_bolsista`, `turno_atividades`)
VALUES ('Outro usuário para teste', 'teste.email@gmail.com', '1234', '000.444.000-00', '2', true, '2');

INSERT INTO `gael`.`equipamento` (`equipamento_nome`, `numero_serie`, `marca`, `modelo`, `situacao`,`entregue`)
VALUES ('Notebook', '2384783528', 'Dell', '32evs', '3', FALSE);






