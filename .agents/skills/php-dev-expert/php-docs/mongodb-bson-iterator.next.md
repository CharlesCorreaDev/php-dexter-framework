# Avança o iterador para o próximo elemento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-bson-iterator.next.php

---

# MongoDB\BSON\Iterator::next

(mongodb >=1.16.0)

MongoDB\BSON\Iterator::next — Avança o iterador para o próximo elemento

### Descrição

public function **MongoDB\BSON\Iterator::next**(): [void](language.types.void.md)

### Parâmetros

Esta função não possui parâmetros.

### Veja também

- [Iterator::next()](iterator.next.md) - Move para o próximo elemento

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
