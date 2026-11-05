# Obtém cabeçalhos para a última resposta

> **Fonte / Source:** https://www.php.net/manual/pt_BR/oauth.getlastresponseheaders.php

---

# OAuth::getLastResponseHeaders

(No version information available, might only be in Git)

OAuth::getLastResponseHeaders — Obtém cabeçalhos para a última resposta

### Descrição

public function **OAuth::getLastResponseHeaders**(): [string](language.types.string.md)|[false](language.types.singleton.md)

Obtém cabeçalhos para a última resposta.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Uma string contendo os cabeçalhos da última resposta ou **`false`** em caso de falha

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
