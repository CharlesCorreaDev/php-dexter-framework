# Verifica se a posição atual no cursor é válida

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-cursor.valid.php

---

# MongoDB\Driver\Cursor::valid

(mongodb >=1.9.0)

MongoDB\Driver\Cursor::valid — Verifica se a posição atual no cursor é válida

### Descrição

public function **MongoDB\Driver\Cursor::valid**(): [bool](language.types.boolean.md)

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

**`true`** se a posição atual do cursor for válida, **`false`** caso contrário.

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
