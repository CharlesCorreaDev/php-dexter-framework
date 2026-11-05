# Verifica se retorna referência

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionfunctionabstract.returnsreference.php

---

# ReflectionFunctionAbstract::returnsReference

(PHP 5 >= 5.2.0, PHP 7, PHP 8)

ReflectionFunctionAbstract::returnsReference — Verifica se retorna referência

### Descrição

public function **ReflectionFunctionAbstract::returnsReference**(): [bool](language.types.boolean.md)

Verifica se a função retorna uma referência.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

**`true`** se retorna uma referência, caso contrário **`false`**

### Veja também

- [ReflectionFunctionAbstract::isClosure()](reflectionfunctionabstract.isclosure.md) - Verifica se é um closure

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
