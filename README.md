Olá, para aprimorar os meus conhecimentos, realizei um sistema de cadastro e login usando HTML,CSS e o PHP. Para o banco de dados utilizei o PDO e o MySql Workbench.

Neste projeto, o usuário pode realizar o seu cadastro com o seu nome, email, senha e confirmação da senha. Os dados são armazenados no MySql. Ao fazer o login com email e senha, o programa também faz a verificação se o email e senha existem no banco de dados, se as informações existirem, o usuaário é logado, já se as informações não constarem no banco, o usuário permanece na mesma tela de login.

Toda vez que o usuário for logado, um cookie e uma sessão é criada.

Na página principal temos um botão de logout para deslogar o usuário, onde o arquivo logout.php destrói a sessão criada e desloga o usuário, não permitindo fazer o acesso a página pela url.
