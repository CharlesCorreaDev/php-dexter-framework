# Retorna a representação em string deste documento BSON

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-bson-document.tostring.php

---

# MongoDB\BSON\Document::\_\_toString

(mongodb >=1.16.0)

MongoDB\BSON\Document::\_\_toString — Retorna a representação em string deste documento BSON

### Descrição

final public function **MongoDB\BSON\Document::\_\_toString**(): [string](language.types.string.md)

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna a representação em string deste documento como BSON.

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
