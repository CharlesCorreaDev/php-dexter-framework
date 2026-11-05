# RRetorna um array de aliases de trait

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionclass.gettraitaliases.php

---

# ReflectionClass::getTraitAliases

(PHP 5 >= 5.4.0, PHP 7, PHP 8)

ReflectionClass::getTraitAliases — RRetorna um array de aliases de trait

### Descrição

public function **ReflectionClass::getTraitAliases**(): [array](language.types.array.md)

Obtém um array de aliases do método trait definidos na classe atual.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um array com novos nomes de métodos em chaves e nomes originais (no
formato `"TraitName::original"`) em valores.

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
