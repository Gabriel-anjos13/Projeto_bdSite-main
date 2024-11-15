CREATE TABLE cadastro_cliente (
    cpf VARCHAR(14) PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    telefone VARCHAR(20),
    data_nascimento DATE,
    email VARCHAR(100) UNIQUE NOT NULL
);



CREATE TABLE agendamento(
id_agendamento INT PRIMARY KEY AUTO_INCREMENT,
cpf_cliente VARCHAR(14),
data_agendamento DATE NOT NULL,
hora_agendamento TIME NOT NULL,
procedimento VARCHAR(100),
CONSTRAINT fk_cliente FOREIGN KEY (cpf_cliente) REFERENCES cadastro_cliente(cpf),
CONSTRAINT uc_data_hora UNIQUE (data_agendamento, hora_agendamento)
);



CREATE TABLE login_cliente (
    cpf_cliente VARCHAR(14) PRIMARY KEY,
    email VARCHAR(100) UNIQUE NOT NULL,
    senha_hash VARCHAR(255) NOT NULL,
    CONSTRAINT fk_login_cliente FOREIGN KEY (cpf_cliente) REFERENCES cadastro_cliente(cpf) ON DELETE CASCADE
);
