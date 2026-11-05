# Retorna um array de nomes de traits usadas por esta classe

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionclass.gettraitnames.php

---

# ReflectionClass::getTraitNames

(PHP 5 >= 5.4.0, PHP 7, PHP 8)

ReflectionClass::getTraitNames — Retorna um array de nomes de traits usadas por esta classe

### Descrição

public function **ReflectionClass::getTraitNames**(): [array](language.types.array.md)

Obtém um array de nomes de traits usadas por esta classe.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um array com nomes de tratis em valores.

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
