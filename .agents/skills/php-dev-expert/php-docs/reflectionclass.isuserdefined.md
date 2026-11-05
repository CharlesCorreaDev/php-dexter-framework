# Verifica se foi definida pelo usuário

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionclass.isuserdefined.php

---

# ReflectionClass::isUserDefined

(PHP 5, PHP 7, PHP 8)

ReflectionClass::isUserDefined — Verifica se foi definida pelo usuário

### Descrição

public function **ReflectionClass::isUserDefined**(): [bool](language.types.boolean.md)

Verifica se a classe é definida pelo usuário, e não interna.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [ReflectionClass::isInternal()](reflectionclass.isinternal.md) - Verifica se a classe está definida internamente por uma extensão ou pelo núcleo

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
