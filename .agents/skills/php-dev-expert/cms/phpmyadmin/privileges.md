# Gerenciamento de usuários — documentação phpMyAdmin 6.0.0-dev

> **Fonte / Source:** https://docs.phpmyadmin.net/pt-br/latest/privileges.html

---

# Gerenciamento de usuários[¶](#user-management "Link permanente para este título")

O gerenciamento de usuários é o processo de controlar quais usuários podem se conectar ao servidor MySQL e quais permissões eles têm em cada banco de dados. O phpMyAdmin não lida com o gerenciamento de usuários, mas passa o nome de usuário e a senha para o MySQL, que por sua vez determina se um usuário pode executar uma ação específica. Dentro do phpMyAdmin, os administradores têm controle total sobre a criação de usuários, visualização e edição de privilégios para usuários existentes e remoção de usuários.

Within phpMyAdmin, user management is controlled via the User accounts tab
from the main page. Users can be created, edited, and removed.

## Criando um novo usuário[¶](#creating-a-new-user "Link permanente para este título")

To create a new user, click the Add user account link near the bottom
of the User accounts page (you must be a “superuser”, e.g., user “root”).
Use the textboxes and drop-downs to configure the user to your particular
needs. You can then select whether to create a database for that user and grant
specific global privileges. Once you’ve created the user (by clicking Go), you
can define that user’s permissions on a specific database (don’t grant global
privileges in that case). In general, users do not need any global privileges
(other than USAGE), only permissions for their specific database.

## Editando um usuário existente[¶](#editing-an-existing-user "Link permanente para este título")

To edit an existing user, simply click the pencil icon to the right of that
user in the User accounts page. You can then edit their global- and
database-specific privileges, change their password, or even copy those
privileges to a new user.

## Excluindo um usuário[¶](#deleting-a-user "Link permanente para este título")

From the User accounts page, check the checkbox for the user you wish to
remove, select whether or not to also remove any databases of the same name (if
they exist), and click Go.

## Atribuindo privilégios ao usuário para um banco de dados específico[¶](#assigning-privileges-to-user-for-a-specific-database "Link permanente para este título")

Os usuários são atribuídos a bancos de dados editando o registro do usuário (a partir do link User accounts na página inicial). Se você estiver criando um usuário especificamente para uma determinada tabela, você terá que criar primeiro o usuário (sem privilégios globais) e depois voltar e editar esse usuário para adicionar a tabela e privilégios para a tabela individual.

## Menus configuráveis e grupos de usuários[¶](#configurable-menus-and-user-groups "Link permanente para este título")

By enabling [`$cfg['Servers'][$i]['users']`](config.md#cfg_Servers_users) and
[`$cfg['Servers'][$i]['usergroups']`](config.md#cfg_Servers_usergroups) you can customize what users
will see in the phpMyAdmin navigation.

Aviso

Este recurso limita apenas o que um usuário vê, ele ainda é capaz de usar todas as funções. Portanto, isso não pode ser considerado como uma limitação de segurança. Se você quiser limitar o que os usuários podem fazer, use os privilégios do MySQL para isso.

Com este recurso ativado, a interface de gerenciamento User accounts ganha uma segunda aba para gerenciar User groups, onde você pode definir o que cada grupo irá visualizar (veja a imagem abaixo) e então atribuir cada usuário a um desses grupos. Os usuários verão uma interface de usuário simplificada, o que pode ser útil para usuários inexperientes que possam estar sobrecarregados com todos os recursos que o phpMyAdmin fornece.

![_images/usergroups.png](_images/usergroups.png)
