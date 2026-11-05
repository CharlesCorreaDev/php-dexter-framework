# Busca um parâmetro da consulta

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yaf-request-http.getquery.php

---

# Yaf\_Request\_Http::getQuery

(Yaf >=1.0.0)

Yaf\_Request\_Http::getQuery — Busca um parâmetro da consulta

### Descrição

public function **Yaf\_Request\_Http::getQuery**([string](language.types.string.md) `$name`, [string](language.types.string.md) `$default` = ?): [mixed](language.types.mixed.md)

Obtém a variável GET.

### Parâmetros

`name`
:   O nome da variável.

`default`
:   Se este parâmetro for informado, seu valor será retornado se a variável não
    puder ser encontrada.

### Valor Retornado

### Veja também

- [Yaf\_Request\_Http::get()](yaf-request-http.get.md) - Obtém variável do cliente
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
