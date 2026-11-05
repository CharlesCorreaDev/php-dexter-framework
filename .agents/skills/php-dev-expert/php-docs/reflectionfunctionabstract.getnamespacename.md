# Obtém o nome do namespace

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionfunctionabstract.getnamespacename.php

---

# ReflectionFunctionAbstract::getNamespaceName

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

ReflectionFunctionAbstract::getNamespaceName — Obtém o nome do namespace

### Descrição

public function **ReflectionFunctionAbstract::getNamespaceName**(): [string](language.types.string.md)

Obtém o nome do namespace onde a classe está definida.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O nome do namespace.

### Veja também

- [ReflectionFunctionAbstract::getFileName()](reflectionfunctionabstract.getfilename.md) - Obtém o nome do arquivo
- [namespaces](language.namespaces.md)

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
