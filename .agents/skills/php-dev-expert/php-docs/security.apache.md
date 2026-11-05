# Instalando como módulo do Apache

> **Fonte / Source:** https://www.php.net/manual/pt_BR/security.apache.php

---

# Instalando como módulo do Apache

Quando o PHP é usado como módulo do Apache, ele herda as permissões
do usuário do Apache (normalmente as do usuário "nobody"). Isso tem
vários impactos de segurança e autorização. Por exemplo, se você estiver usando
o PHP para acessar um banco de dados, a menos que o banco de dados tenha um controle
de acesso interno, você terá que fazer com que o banco de dados seja acessível ao usuário
"nobody". Isso significa que um script malicioso pode acessar e modificar
o banco de dados, mesmo sem um usuário e senha. É possível que um web spider
possa passar em uma página web de administração do banco de dados
e remover todos os bancos de dados. Você pode se proteger contra isso
usando autorização do Apache, ou você pode desenvolver
seu modelo de acesso próprio usando LDAP, arquivos .htaccess, etc. e incluir
esse código como parte dos seus scripts PHP.

Normalmente, uma vez que a segurança está estabelecida até esse ponto onde o
usuário do PHP (no caso, o usuário apache) tem pouco risco atribuído a ele,
você descobre que o PHP não tem permissão de escrita nos
diretórios dos usuários. Ou talvez tenha sido proibido de acessar
ou alterar bancos de dados. Também foi proibido de escrever
arquivos, bons ou ruins, ou fazer transações de bancos de dados, boas ou ruins.

Um erro frequente de segurança feito até esse ponto é permitir ao Apache
permissões de administrador (root), ou aumentar as habilidades do Apache
de qualquer outra forma.

Aumentar as permissões do usuário do Apache para a de administrador é
extremamente perigoso e pode comprometer o sistema inteiro, então executar com sudo,
com chroot, ou então executar como root não deve ser considerado por
aqueles que não são profissionais em segurança.

Existem algumas soluções mais simples. Usando a diretiva
[open\_basedir](ini.core.md#ini.open-basedir) pode-se controlar e restringir quais
diretórios o PHP tem permissão de usar. Você também pode configurar
áreas exclusivas para o Apache, restringir todas as atividades web para arquivos
que não sejam de algum usuário ou do sistema.

`↑` and `↓` to navigate •
`Enter` to select •
`Esc` to close • `/` to open

document.addEventListener("DOMContentLoaded", function() {
/\*{{{Search Modal\*/
const language = 'local';
initSearchModal();
initPHPSearch(language).then((searchCallback) => {
initSearchUI({language, searchCallback, limit: 30});
});
/\*}}}\*/
});
