# Retorna o Symbol como uma string

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-bson-symbol.tostring.php

---

# MongoDB\BSON\Symbol::\_\_toString

(mongodb >=1.4.0)

MongoDB\BSON\Symbol::\_\_toString — Retorna o Symbol como uma string

### Descrição

final public function **MongoDB\BSON\Symbol::\_\_toString**(): [string](language.types.string.md)

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna a representação em string deste Symbol.

### Veja também

- [» Tipos BSON](https://www.mongodb.com/docs/manual/reference/bson-types/)

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
