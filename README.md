# Api-Rest-Vesti
Primeiro Configure o arquivo crie um arquivo .env os requisitos [`exemplo do arquivo env`](https://github.com/Elanio-Bros/Api-Rest-Vesti/blob/main/.env.example)
1. DB_HOST
2. DB_PORT
3. DB_DATABASE
4. DB_USERNAME
5. DB_PASSWORD
Esse requisitos são importantes pra a configuração do **Banco De Dados**
&nbsp;
Depois digite os commandos
1. `composer install` para instalar as dependecias
2. `php artisan key:generate` para gerar uma chave.
3. `php artisan migrate` para criar todas as migrações no banco de dados
4. `php artisan serve` para iniciar o servidor e mostrar a documentação da API
&nbsp;
**Toda Utilizaçãod o Token deve ser pasado pelo o Header da requisição**
