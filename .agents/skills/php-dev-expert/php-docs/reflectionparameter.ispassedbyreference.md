# Verifica se foi passado por referência

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionparameter.ispassedbyreference.php

---

# ReflectionParameter::isPassedByReference

(PHP 5, PHP 7, PHP 8)

ReflectionParameter::isPassedByReference — Verifica se foi passado por referência

### Descrição

public function **ReflectionParameter::isPassedByReference**(): [bool](language.types.boolean.md)

Verifica se o parâmetro é passado por referência.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

**`true`** se o parâmetro for passado por referência, caso contrário **`false`**

### Veja também

- [ReflectionParameter::getName()](reflectionparameter.getname.md) - Obtém o nome do parâmetro

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
