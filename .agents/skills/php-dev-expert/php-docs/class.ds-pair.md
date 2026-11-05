# A classe Pair

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.ds-pair.php

---

# A classe Pair

(PECL ds >= 1.0.0)

## Introdução

A pair é usadao por [Ds\Map](class.ds-map.md) para associar chaves a valores.

## Resumo da classe

class **Ds\Pair**
implements
[JsonSerializable](class.jsonserializable.md) {

/\* Métodos \*/

public function [\_\_construct](ds-pair.construct.md)([mixed](language.types.mixed.md) `$key` = ?, [mixed](language.types.mixed.md) `$value` = ?)

public function [clear](ds-pair.clear.md)(): [void](language.types.void.md)

public function [copy](ds-pair.copy.md)(): [Ds\Pair](class.ds-pair.md)

public function [isEmpty](ds-pair.isempty.md)(): [bool](language.types.boolean.md)

public function [toArray](ds-pair.toarray.md)(): [array](language.types.array.md)

}

## Índice

- [Ds\Pair::clear](ds-pair.clear.md) — Remove todos os valores
- [Ds\Pair::\_\_construct](ds-pair.construct.md) — Cria uma nova instância
- [Ds\Pair::copy](ds-pair.copy.md) — Retorna uma cópia rasa do par
- [Ds\Pair::isEmpty](ds-pair.isempty.md) — Retorna se o par está vazio
- [Ds\Pair::jsonSerialize](ds-pair.jsonserialize.md) — Retorna uma representação que pode ser convertida para JSON
- [Ds\Pair::toArray](ds-pair.toarray.md) — Converte o par para um array

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
