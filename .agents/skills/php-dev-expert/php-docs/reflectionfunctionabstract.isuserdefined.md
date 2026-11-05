# Verifica se foi definido pelo usuário

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionfunctionabstract.isuserdefined.php

---

# ReflectionFunctionAbstract::isUserDefined

(PHP 5 >= 5.2.0, PHP 7, PHP 8)

ReflectionFunctionAbstract::isUserDefined — Verifica se foi definido pelo usuário

### Descrição

public function **ReflectionFunctionAbstract::isUserDefined**(): [bool](language.types.boolean.md)

Verifica se a função é definida pelo usuário, e não interna.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

**`true`** se for definido pelo usuário, caso contrário, será falso;

### Veja também

- [ReflectionFunctionAbstract::isInternal()](reflectionfunctionabstract.isinternal.md) - Verifica se é interno

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
