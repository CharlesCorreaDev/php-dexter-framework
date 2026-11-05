# Obtém detalhes da exceção

> **Fonte / Source:** https://www.php.net/manual/pt_BR/stomp.getdetails.php

---

# StompException::getDetails

(PECL stomp >= 0.1.0)

StompException::getDetails — Obtém detalhes da exceção

### Descrição

public function **StompException::getDetails**(): [string](language.types.string.md)

Obtém detalhes da exceção.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

[string](language.types.string.md) contendo os detalhes de erro.

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
