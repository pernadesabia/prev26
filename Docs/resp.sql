INSERT INTO `resp`(`tituloResp`, `valor`, `idPerg`) VALUES 
('Ser Piloto','2',16),
('Conversar com os passageiros','3',16),
('Planejar a viagem','1',16),
('Explrar novas rotas','4',16),

('Me dê liberdade','4',17),
('Me deixe saber a sua expectativa','1',17),
('Lidere, siga ou saia do caminho','2',17),
('Seja amigavel, compreensivel, ou saia do caminho','3',17),

('Ter incertezas','4',18),
('Controlar o essencial','1',18),
('Diversão e celebração','2',18),
('Planejar e obter recursos','3',18),

--Eu me divirto quando
('Estou me exercitando','2',19),
('Tenho novidades','4',19),
('Estou com os outros','3',19),
('Determino as regras','1',19),

--Eu penso que...
('Unidos venceremos, dividimos perderemos','3',20),
('O ataque é melhor que a defesa','2',20),
('É bom ser manso, mas andar com porrete','4',20),
('Um homem prevenido vale por dois','3',20),

--Minha preocuração é
('Gerar a ideia global','4',21),
('Fazer com que as pessoas gostem','3',21),
('Fazer com que funcione','1',21),
('Fazer com que aconteça','2',21),

--Eu prefiro...
('Perguntas e respostas','4',22),
('Ter todos os detalhes','1',22),
('Vantagens ao meu favor','2',22),
('Que todos tenham a chance de ser ouvidos','3',22),

--Eu gosto de...
('Fazer progresso','2',23),
('Construir memórias','3',23),
('Fazer sentido','1',23),
('Tornas as pessoas confortáveis','4',23),

--Eu gosto de chegar
('Na frente','2',24),
('Junto','3',24),
('Na hora','1',24),
('Em outro lugar','4',24),

-- Um ótimo dia para mim...
('Consigo fazer muitas coisas','2',25),
('Me divirto com os meus amigos','3',25),
('Tudo segue conforme o planejado','1',25),
('Desfruto de coisas novas e estimulantes','4',25),

--Eu vejo a morte quando
('Uma grande aventura misteriosa','4',26),
('Oportunidade de rever os falecidos','3',26),
('Um modo de receber recompensas','1',26),
('Algo que sempre chega muito cedo','2',26),

--Minha filosofia de vida é...
('Há ganhadores é perdedores, e eu acredito ser um ganhador','2',27),
('Para eu ganhar, ninguém precisa perder','3',27),
('Para ganhar é preciso seguir as regras','1',27),
('Para ganhar, é necessário inventar novas regras','4',27),

--Eu sempre gostei de...
('Explorar','4',28),
('Evitar surpresas','1',28),
('Focalizar a meta','2',28),
('Realizar uma abordagem natural','3',28),

--Eu gosto de mudança se
('Me der  uma vantagem competitiva','2',29),
('For divertido e puder ser compartilhado','3',29),
('Me der mais liberdade e variedade','4',29),
('Melhorar ou me dar mais controle','1',29),

--Não existe nada de errado em
('Se colocar na frente','2',30),
('Colocar os outros na frente','3',30),
('Mudar de ideia','4',30),
('Ser consistente','1',30),

--Eu gosto de buscar conselhos de...
('Pessoas bem sucedidas','2',31),
('Anciões e conselheiros','3',31),
('Autoridades no assunto','1',31),
('Lugares, os mais estranhos','4',31),


--Meu lema é...
('Fazer o que precisa ser feito','4',32),
('Fazer bem feito','1',32),
('Fazer junto com o grupo','3',32),
('Simplesmente fazer','2',32),

--Tempo pra mim é...
('Algo que detesto desperdiçar','2',33),
('Um grande ciclo','3',33),
('Uma flecha que leva ao inevitável','1',33),
('Irrelevante','4',33),

--Se eu fosse bilionário...
('Faria doações para entidades','3',34),
('Criaria uma poupança avantajada','1',34),
('Faria o que desse na cabeça','4',34),
('Exibiria bastante com algumas pessoas','2',34),

--Eu acredito que...
('O destino é mais importante que a jornada','4',35),
('A jornada é mais importante que o destino','1',35),
('Um centavo economizado é um centavo ganho','3',35),
('Basta um navio e uma estrela para navegar','2',35),

--Eu acredito que também...
('Aquele que hesita está perdido','2',36),
('De grão em grão a galinha enche o papo','1',36),
('O que vai volta','3',36),
('Um sorriso ou uma careta é o mesmo pra quem é cego','4',36),

--Eu acredito ainda que...
('É melhor prudencia do que arrependimento','1',37),
('A autoridade deve ser desafiada','4',37),
('Ganhar é fundamental','3',37),
('O coletivo é mais importante do que o individual','2',37),

--Eu penso que...
('Não é fácil ficar encurralado','4',38),
('É preverivel olhar, antes de pular','1',38),
('Duas cabeças pensam melhor do que uma','3',38),
('Se você não tem condições de competir, não compita','2',38),

--Eu gosto de...
('Complexidade, mesmo se confuso','4',39),
('Ordem e sistematização','1',39),
('Calor humano e animação','3',39),
('Coisas claras e simples','2',39),

--I = 4 (Águia)
--C = 3 (Gato)
--A = 2 (Tubarão)
--O = 1 (Lobo)

-- traz as perguntas e respostas
SELECT p.idQuestionario, r.idPerg, p.tituloPerg, r.tituloResp
FROM perg p, resp r 
WHERE p.idPerg = r.idResp