CREATE TABLE categoria (
  id INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
  descricao VARCHAR(150) NOT NULL
) ENGINE=InnoDB;

CREATE TABLE cliente (
  codigo INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(80) NOT NULL,
  endereco VARCHAR(50) NOT NULL,
  telefone VARCHAR(15) NOT NULL,
  limite_cred decimal(10,2) NOT NULL,
  cidade VARCHAR(80) NOT NULL,
  email VARCHAR(100) NOT NULL,
  CPF VARCHAR(15) NOT NULL,
  estado char(2) NOT NULL
) ENGINE=InnoDB;

CREATE TABLE itens_vendas (
  fk_produtos_cod INTEGER NOT NULL REFERENCES produtos (cod),
  fk_vendas_numero INTEGER NOT NULL REFERENCES vendas (numero),
  quant_vendida INTEGER NOT NULL,
  PRIMARY KEY (fk_produtos_cod, fk_vendas_numero)
) ENGINE=InnoDB;

CREATE TABLE produtos (
  cod INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(100) NOT NULL,
  preco decimal(10,2) NOT NULL,
  qtd_estoque INTEGER NOT NULL,
  unidade_medida char(3) NOT NULL,
  fk_categoria_id INTEGER NOT NULL REFERENCES categoria (id)
) ENGINE=InnoDB;

CREATE TABLE vendas (
  numero INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
  data date NOT NULL,
  prazo_entrega VARCHAR(25) NOT NULL,
  cond_pagto VARCHAR(20) NOT NULL,
  fk_cliente_codigo INTEGER NOT NULL REFERENCES cliente (codigo),
  fk_vendedor_cod INTEGER NOT NULL REFERENCES vendedor (cod)
) ENGINE=InnoDB;

CREATE TABLE vendedor (
  cod INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(80) NOT NULL,
  endereco VARCHAR(80) NOT NULL,
  cidade VARCHAR(80) NOT NULL,
  estado char(2) NOT NULL,
  telefone VARCHAR(15) NOT NULL,
  porc_comissao decimal(10,2) NOT NULL
) ENGINE=InnoDB;