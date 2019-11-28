-- tabela de saida after insert
CREATE DEFINER=`root`@`localhost` TRIGGER `graossilva`.`saida_AFTER_INSERT` AFTER INSERT ON `saida` FOR EACH ROW
BEGIN
	INSERT INTO entrada (armazem_id, motorista_id, produto_id, fornecedor_id, status_id, chave) VALUES (new.armazem_id, new.motorista_id, new.produto_id, new.cliente_id, 3, new.chave);
	INSERT INTO graos_silva_log (user_id, tabela, tarefa) VALUES (1, 'SAIDA', 'INSERT');

END

-- tabela de entrada after update

CREATE DEFINER=`root`@`localhost` TRIGGER `graossilva`.`entrada_AFTER_UPDATE` AFTER UPDATE ON `entrada` FOR EACH ROW
BEGIN
	UPDATE saida SET status_id=1 WHERE chave=new.chave;
END
