# Verifica se o gerador está ativo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/generator.valid.php

---

# Generator::valid

(PHP 5 >= 5.5.0, PHP 7, PHP 8)

Generator::valid — Verifica se o gerador está ativo

### Descrição

public function **Generator::valid**(): [bool](language.types.boolean.md)

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`false`** se o gerador foi fechado. Caso contrário retornará **`true`**.

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
