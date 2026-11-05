# Retorna o índice do resultado atual dentro do cursor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-cursor.key.php

---

# MongoDB\Driver\Cursor::key

(mongodb >=1.9.0)

MongoDB\Driver\Cursor::key — Retorna o índice do resultado atual dentro do cursor

### Descrição

public function **MongoDB\Driver\Cursor::key**(): [int](language.types.integer.md)

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O índice numérico do resultado atual dentro do cursor.

### Veja também

- [Iterator::key()](iterator.key.md) - Retorna a chave do elemento atual

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
