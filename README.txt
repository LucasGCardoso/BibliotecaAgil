O exercício escolhido foi o "Biblioteca Ágil". Sobre seu desenvolvimento, seguem alguns comentários:


FUNDAMENTOS E ESCOLHAS:

- Foi usada a linguagem PHP por ser uma linguagem simples para a web, robusta, e de fácil entendimento e conexão com o banco de dados.

- Também foi utilizado um pouco de Javascript puro e CSS, apenas para melhorar a usabilidade.

- Foi feita a escolha de ser um sistema web por preferência, visto que a maioria dos sistemas desse gênero são focados para web.

- A conexão com o banco de dados utilizada (PDO) não é das mais seguras, porém das mais simples, e foi usada apenas para simplificar 
o acesso e modificação dos dados.


FUNCIONAMENTO DO SISTEMA

- O sistema foi feito pensando-se em sua usabilidade dentro da suposta biblioteca do bairro, onde a pessoa bibliotecária ou o próprio 
indivíduo que deseja retirar/devolver um livro poderiam utilizá-lo.


OBSERVAÇÕES SOBRE AS FUNCIONALIDADES

- Vale lembrar que o sistema é deveras simples, e serve apenas de resposta ao exercício fornecido. Lhe falta uma gestão completa de 
usuários, que envolveriam novas tabelas no banco de dados e fatoração de mais código, o que sairia do escopo do exercício. Devido a isso,
foi feita a escolha do usuário simplesmente escrever seu nome no ato da retirada.

- A funcionalidade de emitir um código de devolução, embora não tenha sido pedida, foi uma solução grosseiramente simples, que permite 
um mínimo de segurança no sistema. Sem essa funcionalidade, qualquer um poderia devolver todos os livros.


INSTALAÇÃO E CONFIGURAÇÃO

-Para utilizar o sistema, é necessário possuir o XAMPP Apache instalado. Ele pode ser encontrado nesse link: 
https://www.apachefriends.org/pt_br/index.html

- Após a instalação, abra o Xampp Control Panel, e inicie o Apache e o MySQL, clicando em Start.

- Mova a pasta do projeto Biblioteca Agil para a pasta C:\xampp\htdocs

- Acesse o link localhost:/phpmyadmin para abrir o painel do banco de dados

- Crie uma base de dados com o nome de "biblioteca_agil"

- Importe o script do banco de dados books.sql (encontrado na pasta do projeto), clicando em importar e selecionando o arquivo.

- Após isso, basta acessar localhost/biblioteca e testar o sistema feito.

OBS: Caso ainda assim ocorra algum erro SQL, você pode checar as credenciais e informações do banco de dados no arquivo connection.php

REFERÊNCIAS VISUAIS:

- https://codepen.io/bartekd/pen/qFsDf
- https://codepen.io/atakan/pen/gqbIz
- https://codepen.io/AllThingsSmitty/pen/MyqmdM