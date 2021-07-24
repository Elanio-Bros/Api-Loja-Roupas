# Api-Rest-Vesti
Primeiro crie um arquivo .env [`exemplo do arquivo env`](https://github.com/Elanio-Bros/Api-Rest-Vesti/blob/main/.env.example) os requisitos para mudança são:
1. DB_HOST
2. DB_PORT
3. DB_DATABASE
4. DB_USERNAME
5. DB_PASSWORD

&nbsp;
Esse requisitos são importantes pra a configuração do **Banco De Dados**

&nbsp;
Depois digite os commandos:
1. `composer install` para instalar as dependecias
2. `php artisan key:generate` para gerar uma chave.
3. `php artisan migrate` para criar todas as migrações no banco de dados
4. `php artisan serve` para iniciar o servidor

&nbsp;
A pagina home do servidor tem a documentação da API

&nbsp;
## Lógica

&nbsp;
A Api ela tem como funcionalidade criar Usuarios e Produtos, adicionar fotos e relatar no historico as entradas e saidas de produtos.
Além de também de mostrar os produtos e os links das fotos cadastradosm o historico geral e especifico de cada produto e a lista de usuários.


&nbsp;
**Toda utilização do Token deve ser pasado pelo o Header da requisições (GET,POST,PUT,PATCH e DELETE)**

