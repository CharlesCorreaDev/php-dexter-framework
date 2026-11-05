# Funções

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ref.bson.functions.php

---

# Funções

## Índice

- [MongoDB\BSON\fromJSON](function.mongodb.bson-fromjson.md) — Retorna a representação BSON de um valor JSON
- [MongoDB\BSON\fromPHP](function.mongodb.bson-fromphp.md) — Retorna a representação BSON de um valor PHP
- [MongoDB\BSON\toCanonicalExtendedJSON](function.mongodb.bson-tocanonicalextendedjson.md) — Retorna a representação JSON Estendida Canônica de um valor BSON
- [MongoDB\BSON\toJSON](function.mongodb.bson-tojson.md) — Retorna a representação JSON Estendida Legada de um valor BSON
- [MongoDB\BSON\toPHP](function.mongodb.bson-tophp.md) — Retorna a representação PHP de um valor BSON
- [MongoDB\BSON\toRelaxedExtendedJSON](function.mongodb.bson-torelaxedextendedjson.md) — Retorna a representação JSON Estendida Relaxada de um valor BSON

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
