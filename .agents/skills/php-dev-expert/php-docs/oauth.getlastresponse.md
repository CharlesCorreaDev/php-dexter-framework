# Obtém a última resposta

> **Fonte / Source:** https://www.php.net/manual/pt_BR/oauth.getlastresponse.php

---

# OAuth::getLastResponse

(PECL OAuth >= 0.99.1)

OAuth::getLastResponse — Obtém a última resposta

### Descrição

public function **OAuth::getLastResponse**(): [string](language.types.string.md)

Obtém a resposta bruta da requisição mais recente.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna uma string contendo a última resposta.

### Veja também

- [OAuth::getLastResponseInfo()](oauth.getlastresponseinfo.md) - Obtém informação HTTP sobre a última resposta
- [OAuth::fetch()](oauth.fetch.md) - Busca um recurso protegido OAuth

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
