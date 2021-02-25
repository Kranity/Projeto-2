1 - Faze o download do Projeto 2

2 - Extraia ele para algum local que deseja

3 - Entre na pasta Projeto-2-main

4 - Abra o git bash ou cmd com o path da pasta Projeto-2-main

5 - Execute o comando: git clone https://github.com/Laradock/laradock.git

6 - Entre na pasta laradock que foi criada

7 - Abra o git bash ou cmd com o path da pasta laradock

8 - Execute o comando: cp env-example .env

9 - Inicie o docker desktop

10 - Execute o comando: docker-compose up -d nginx mysql phpmyadmin

    Obs: Caso ocorra algum erro de porta ao fazer o passo 10
    
    1 - Abra o arquivo .env que está dentro da pasta laradock
    
    2 - Modifique a porta da aplicação que ocorreu o erro
    
    3 - Salve e tente executar novamente

11 - Volte para pasta Projeto-2-main

12 - Abra o git bash ou cmd com o path da pasta Projeto-2-main

13 - Execute o comando: php artisan migrate

14 - Execute o comando: php artisan db:seed

    Obs: Se você não conseguir fazer os passos 13 e 14

    1 - Abra o navegador e escreva localhost:(PORTA DO PHPHMYADMIN) na barra de endereço para acessar o phpmyadmin

    2 - Coloque servidor: mysql, usuário: root e senha: root

    3 - Clique em novo e crie um banco de dados com o nome: default e charset: utf8mb4_unicode_ci

    4 - Tente fazer os passos 13 e 14 novamente

15 - Abra o arquivo .env com um editor de texto que está dentro da pasta Projeto-2-main

16 - Encontre o comando DB_HOST=127.0.0.1 e troque para DB_HOST=mysql

17 - Salve a alteração e abra o navegador

18 - Escreva localhost na barra de endereço do navegador para acessar a aplicação

19 - Clique em "Entrar" no canto direito superior da tela

20 - Coloque o email: admin@admin.com e senha: password

21 - Teste o projeto
