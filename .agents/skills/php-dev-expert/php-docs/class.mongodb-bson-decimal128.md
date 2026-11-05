# A classe MongoDB\BSON\Decimal128

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.mongodb-bson-decimal128.php

---

# A classe MongoDB\BSON\Decimal128

(mongodb >=1.2.0)

## Introdução

Tipo BSON para o
[» formato de ponto flutuante Decimal128](https://en.wikipedia.org/wiki/Decimal128_floating-point_format),
que suporta números com até 34 dígitos decimais (ou seja, dígitos
significativos) e um intervalo de expoentes de -6143 a +6144.

Ao contrário do tipo BSON "double" (ou seja, [float](language.types.float.md) em PHP), que armazena
apenas uma aproximação dos valores decimais, o tipo de dados decimal armazena
o valor exato. Por exemplo, `MongoDB\BSON\Decimal128('9.99')`
tem um valor preciso de 9.99, onde um "double" 9.99 teria um valor aproximado
de 9.990000000000002131628….

> **Nota**:
>
> **MongoDB\BSON\Decimal128** só é compatível com
> o MongoDB 3.4+. Tentar usar o tipo BSON com uma versão anterior do
> MongoDB resultará em erro.

## Resumo da classe

final

class **MongoDB\BSON\Decimal128**
implements
[MongoDB\BSON\Decimal128Interface](class.mongodb-bson-decimal128interface.md), [MongoDB\BSON\Type](class.mongodb-bson-type.md), [JsonSerializable](class.jsonserializable.md), [Stringable](class.stringable.md) {

/\* Métodos \*/

final public function [\_\_construct](mongodb-bson-decimal128.construct.md)([string](language.types.string.md) `$value`)

final public function [jsonSerialize](mongodb-bson-decimal128.jsonserialize.md)(): [mixed](language.types.mixed.md)

final public function [\_\_toString](mongodb-bson-decimal128.tostring.md)(): [string](language.types.string.md)

}

## Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL mongodb 2.0.0 | Esta classe não implementa mais a interface [Serializable](class.serializable.md). |
| PECL mongodb 1.12.0 | Implementa [Stringable](class.stringable.md) para PHP 8.0+. |
| PECL mongodb 1.3.0 | Implementa [MongoDB\BSON\Decimal128Interface](class.mongodb-bson-decimal128interface.md). |
| PECL mongodb 1.2.0 | Implementa [Serializable](class.serializable.md) e [JsonSerializable](class.jsonserializable.md). |

## Índice

- [MongoDB\BSON\Decimal128::\_\_construct](mongodb-bson-decimal128.construct.md) — Constrói um novo Decimal128
- [MongoDB\BSON\Decimal128::jsonSerialize](mongodb-bson-decimal128.jsonserialize.md) — Retorna uma representação que pode ser convertida para JSON
- [MongoDB\BSON\Decimal128::\_\_toString](mongodb-bson-decimal128.tostring.md) — Retorna a representação em string deste Decimal128

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
