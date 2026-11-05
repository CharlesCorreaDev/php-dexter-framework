# Erros e tratamento de erros

> **Fonte / Source:** https://www.php.net/manual/pt_BR/com.error-handling.php

---

# Erros e tratamento de erros

Esta extensão lançará instâncias da classe [com\_exception](class.com-exception.md)
sempre que houver um erro potencialmente fatal relatado pelo COM. Todas
as exceções COM possuem uma propriedade `code` bem definida que
corresponde ao valor de retorno HRESULT das diversas operações COM.
Esse código pose ser usado para tomar decisões programáticas sobre como tratar
a exceção.

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
