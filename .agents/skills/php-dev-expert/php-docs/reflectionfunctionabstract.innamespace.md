# Verifica se a função está no namespace

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionfunctionabstract.innamespace.php

---

# ReflectionFunctionAbstract::inNamespace

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

ReflectionFunctionAbstract::inNamespace — Verifica se a função está no namespace

### Descrição

public function **ReflectionFunctionAbstract::inNamespace**(): [bool](language.types.boolean.md)

Verifica se uma função está definida em um namespace.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

**`true`** se estiver em um namespace, caso contrário, **`false`**

### Veja também

- [ReflectionFunctionAbstract::getNamespaceName()](reflectionfunctionabstract.getnamespacename.md) - Obtém o nome do namespace
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
