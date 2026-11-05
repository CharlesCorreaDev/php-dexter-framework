# Obtém a língua preferida do cliente

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yaf-request-abstract.getlanguage.php

---

# Yaf\_Request\_Abstract::getLanguage

(Yaf >=1.0.0)

Yaf\_Request\_Abstract::getLanguage — Obtém a língua preferida do cliente

### Descrição

public function **Yaf\_Request\_Abstract::getLanguage**(): [void](language.types.void.md)

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna uma string.

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
