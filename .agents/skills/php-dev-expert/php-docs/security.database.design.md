# Desenhando Bancos de Dados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/security.database.design.php

---

## Desenhando Bancos de Dados

O primeiro passo é sempre criar o banco de dados, a não ser que você queira
usar um de terceiros. Quando um banco de dados é criado, ele é
atribuído a um dono, o mesmo que executou os comandos de criação. Normalmente, só
o dono (ou um superusuário) pode fazer algo com os objetos naquele
banco de dados, e para permitir que outros usuários usem, privilégios devem
ser concedidos.

Aplicações nunca devem conectar-se ao banco de dados como seu dono ou um
superusuário, porque esses usuários podem executar qualquer consulta que
quiserem como, por exemplo, modificar o esquema (ex.: destruindo tabelas) ou
removendo seu conteúdo completamente.

Devem ser criados usuários de bancos de dados diferentes para cada aspecto
da sua aplicação com direitos bem limitados aos objetos do banco de dados.
Apenas os privilégios necessários devem ser concedidos, e deve-se evitar que o
mesmo usuário possa interagir com o banco de dados em casos de uso diferentes. Isso
significa que se invasores conseguirem acessar seu banco de dados usando credenciais da sua
aplicação, eles só podem afetar o banco tanto quanto sua aplicação poderia.

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
