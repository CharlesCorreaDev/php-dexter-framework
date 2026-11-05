# Verifica se a posição atual é válida

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-bson-iterator.valid.php

---

# MongoDB\BSON\Iterator::valid

(mongodb >=1.16.0)

MongoDB\BSON\Iterator::valid — Verifica se a posição atual é válida

### Descrição

public function **MongoDB\BSON\Iterator::valid**(): [bool](language.types.boolean.md)

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** se a posição atual do iterador for válida, **`false`** caso contrário.

### Veja também

- [Iterator::valid()](iterator.valid.md) - Verifica se a posição atual é válida

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
