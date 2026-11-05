# Obtém variável do cliente

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yaf-request-http.get.php

---

# Yaf\_Request\_Http::get

(Yaf >=1.0.0)

Yaf\_Request\_Http::get — Obtém variável do cliente

### Descrição

public function **Yaf\_Request\_Http::get**([string](language.types.string.md) `$name`, [string](language.types.string.md) `$default` = ?): [mixed](language.types.mixed.md)

Obtém variável do cliente. Este método irá procurar pelo nome informado em
`name` nos parâmetros da requisição. Se o nome não for encontrado,
o método irá pesquisar em POST, GET, Cookie e Server.

### Parâmetros

`name`
:   O nome da variável.

`default`
:   Se este parâmetro for informado, seu valor será retornado se a variável não
    puder ser encontrada.

### Valor Retornado

### Veja também

- [Yaf\_Request\_Http::getQuery()](yaf-request-http.getquery.md) - Busca um parâmetro da consulta
- [Yaf\_Request\_Http::getPost()](yaf-request-http.getpost.md) - Obtém a variável POST
- [Yaf\_Request\_Http::getCookie()](yaf-request-http.getcookie.md) - Obtém a variável Cookie
- [Yaf\_Request\_Http::getRaw()](yaf-request-http.getraw.md) - Obtém o corpo bruto da requisição
- [Yaf\_Request\_Abstract::getServer()](yaf-request-abstract.getserver.md) - Obtém a variável SERVER
- [Yaf\_Request\_Abstract::getParam()](yaf-request-abstract.getparam.md) - Obtém o parâmetro da chamada

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
