-- --------------------------------------------------------------------
-- Estrutura da tabela usada pelo ConteudoModel (projeto a28952)
-- --------------------------------------------------------------------
-- Use este arquivo SOMENTE se a tabela "Conteudo" não existir no banco.
-- Ele NÃO apaga e NÃO altera nenhum dado já cadastrado.
--
-- phpMyAdmin:
--   1. Selecione o banco a28952
--   2. Aba "Importar" -> escolha este arquivo -> Executar
--
-- Terminal:
--   mysql -u a28952 -p a28952 < database/conteudo.sql
-- --------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS `Conteudo` (
    `Id`     INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
    `Titulo` VARCHAR(255)     NOT NULL,
    `Texto`  TEXT             NOT NULL,
    PRIMARY KEY (`Id`)
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

-- Conteúdo inicial. O INSERT IGNORE não sobrescreve registros existentes:
-- se a tabela já tiver os dados do aluno, nada é alterado.
INSERT IGNORE INTO `Conteudo` (`Id`, `Titulo`, `Texto`) VALUES
    (1, 'Home', 'Bem-vindo ao meu site! Aqui você encontra informações sobre mim, meus produtos e como entrar em contato.'),
    (2, 'Quem sou', 'Olá! Meu nome é Ian. Sou estudante de Análise e Desenvolvimento de Sistemas e estou construindo este site para praticar CodeIgniter 4.'),
    (4, 'Produtos', 'Em breve você encontrará aqui os produtos e serviços disponíveis.'),
    (5, 'Contato', 'Preencha o formulário ou envie uma mensagem para entrar em contato comigo.');
