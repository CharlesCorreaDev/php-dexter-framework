# Retorna um array de traits usadas por esta classe

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionclass.gettraits.php

---

# ReflectionClass::getTraits

(PHP 5 >= 5.4.0, PHP 7, PHP 8)

ReflectionClass::getTraits — Retorna um array de traits usadas por esta classe

### Descrição

public function **ReflectionClass::getTraits**(): [array](language.types.array.md)

Obtém um array de traits usadas por esta classe.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um array com nomes de traits em chaves e instâncias de traits
[ReflectionClass](class.reflectionclass.md) em valores.

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
