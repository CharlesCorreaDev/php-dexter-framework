# Verifica se opcional

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionparameter.isoptional.php

---

# ReflectionParameter::isOptional

(PHP 5 >= 5.0.3, PHP 7, PHP 8)

ReflectionParameter::isOptional — Verifica se opcional

### Descrição

public function **ReflectionParameter::isOptional**(): [bool](language.types.boolean.md)

Verifica se o parâmetro é opcional.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

**`true`** se o parâmetro é opcional, caso contrário **`false`**

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
