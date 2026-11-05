# Ataques de Injeção de Requisição

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb.security.request_injection.php

---

## Ataques de Injeção de Requisição

Se você estiver passando parâmetros `$_GET` (ou `$_POST`)
para suas consultas, certifique-se de que eles sejam convertidos em strings primeiro.
Os usuários podem inserir arrays associativos em solicitações GET e POST, que podem se tornar
consultas indesejadas.

Um exemplo bastante inócuo: suponha que você esteja procurando informações de um usuário
com a solicitação *http://www.example.com?username=bob*.
Sua aplicação cria a consulta
`$q = new \MongoDB\Driver\Query( [ 'username' => $_GET['username'] ])`.

Alguém poderia subverter isso obtendo
*http://www.example.com?username[$ne]=foo*, que o PHP
transformará magicamente em um array associativo, transformando sua consulta em
`$q = new \MongoDB\Driver\Query( [ 'username' => [ '$ne' => 'foo' ] ] )`,
que retornará todos os usuários não nomeados "foo" (todos os seus usuários, provavelmente).

Este é um ataque bastante fácil de se defender: certifique-se de que os parâmetros $\_GET e $\_POST
sejam do tipo que você espera antes de enviá-los ao banco de dados.
O PHP tem a função [filter\_var()](function.filter-var.md) para ajudar nisso.

Observe que esse tipo de ataque pode ser usado com qualquer interação de banco de dados que
localize um documento, incluindo atualizações, inclusões, exclusões e comandos
findAndModify.

Consulte [» a documentação principal](https://www.mongodb.com/docs/manual/security/)
para obter mais informações sobre problemas semelhantes à injeção de SQL com o MongoDB.

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
