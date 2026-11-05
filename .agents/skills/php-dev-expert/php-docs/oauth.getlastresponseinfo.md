# Obtém informação HTTP sobre a última resposta

> **Fonte / Source:** https://www.php.net/manual/pt_BR/oauth.getlastresponseinfo.php

---

# OAuth::getLastResponseInfo

(PECL OAuth >= 0.99.1)

OAuth::getLastResponseInfo — Obtém informação HTTP sobre a última resposta

### Descrição

public function **OAuth::getLastResponseInfo**(): [array](language.types.array.md)

Obtém informação HTTP sobre a última resposta.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um array contendo a informação de resposta para a última
requisição. Constantes de [curl\_getinfo()](function.curl-getinfo.md) podem ser
usadas.

### Veja também

- [OAuth::fetch()](oauth.fetch.md) - Busca um recurso protegido OAuth
- [OAuth::getLastResponse()](oauth.getlastresponse.md) - Obtém a última resposta

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
