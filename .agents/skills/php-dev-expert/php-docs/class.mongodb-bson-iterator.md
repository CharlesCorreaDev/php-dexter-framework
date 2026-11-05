# A classe MongoDB\BSON\Iterator

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.mongodb-bson-iterator.php

---

# A classe MongoDB\BSON\Iterator

(mongodb >=1.16.0)

## Introdução

Iterador usado para iterar sobre um documento ou array BSON.

## Resumo da classe

final

class **MongoDB\BSON\Iterator**
implements
[Iterator](class.iterator.md) {

/\* Métodos \*/

final private function [\_\_construct](mongodb-bson-iterator.construct.md)()

public function [current](mongodb-bson-iterator.current.md)(): [mixed](language.types.mixed.md)

public function [key](mongodb-bson-iterator.key.md)(): [string](language.types.string.md)|[int](language.types.integer.md)

public function [next](mongodb-bson-iterator.next.md)(): [void](language.types.void.md)

public function [rewind](mongodb-bson-iterator.rewind.md)(): [void](language.types.void.md)

public function [valid](mongodb-bson-iterator.valid.md)(): [bool](language.types.boolean.md)

}

## Índice

- [MongoDB\BSON\Iterator::\_\_construct](mongodb-bson-iterator.construct.md) — Constrói um novo iterador BSON (não utilizado)
- [MongoDB\BSON\Iterator::current](mongodb-bson-iterator.current.md) — Retorna o elemento atual
- [MongoDB\BSON\Iterator::key](mongodb-bson-iterator.key.md) — Retorna a chave do elemento atual
- [MongoDB\BSON\Iterator::next](mongodb-bson-iterator.next.md) — Avança o iterador para o próximo elemento
- [MongoDB\BSON\Iterator::rewind](mongodb-bson-iterator.rewind.md) — Retrocede o iterador para o primeiro elemento
- [MongoDB\BSON\Iterator::valid](mongodb-bson-iterator.valid.md) — Verifica se a posição atual é válida

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
