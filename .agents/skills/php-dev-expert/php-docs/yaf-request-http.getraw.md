# Obtém o corpo bruto da requisição

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yaf-request-http.getraw.php

---

# Yaf\_Request\_Http::getRaw

(Yaf >=3.0.7)

Yaf\_Request\_Http::getRaw — Obtém o corpo bruto da requisição

### Descrição

public function **Yaf\_Request\_Http::getRaw**(): [mixed](language.types.mixed.md)

Obtém o corpo bruto da requisição

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna uma string em caso de sucesso, FALSE em caso de falha.

### Veja também

- [Yaf\_Request\_Http::get()](yaf-request-http.get.md) - Obtém variável do cliente
- [Yaf\_Request\_Http::getPost()](yaf-request-http.getpost.md) - Obtém a variável POST
- [Yaf\_Request\_Http::getCookie()](yaf-request-http.getcookie.md) - Obtém a variável Cookie
- [Yaf\_Request\_Http::getQuery()](yaf-request-http.getquery.md) - Busca um parâmetro da consulta
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
