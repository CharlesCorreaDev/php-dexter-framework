# Obtém informação de todos os namespaces registrados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yaf-loader.getnamespaces.php

---

# Yaf\_Loader::getLocalNamespace

(Yaf >=1.0.0)

Yaf\_Loader::getLocalNamespace — Obtém informação de todos os namespaces registrados

### Descrição

public function **Yaf\_Loader::getNamespaces**(): [array](language.types.array.md)

Obtém informação dos namespaces registrados.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

[array](language.types.array.md)

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
