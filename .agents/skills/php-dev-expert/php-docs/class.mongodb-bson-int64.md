# A classe MongoDB\BSON\Int64

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.mongodb-bson-int64.php

---

# A classe MongoDB\BSON\Int64

(mongodb >=1.5.0)

## Introdução

Tipo BSON para um número inteiro de 64 bits. Ao decodificar dados BSON para PHP, esta classe
é usada quando um número inteiro de 64 bits não pode ser representado como um número inteiro PHP em
plataformas de 32 bits. Esses objetos suportam operadores sobrecarregados
[aritméticos](language.operators.arithmetic.md),
[binários](language.operators.bitwise.md) e
[comparativos](language.operators.comparison.md).

Ao trabalhar com dados BSON brutos através das classes
[MongoDB\BSON\Document](class.mongodb-bson-document.md),
[MongoDB\BSON\PackedArray](class.mongodb-bson-packedarray.md) e
[MongoDB\BSON\Iterator](class.mongodb-bson-iterator.md), qualquer número inteiro de 64 bits
será retornado como uma instância desta classe, independentemente da plataforma e
se o valor pode ser representado como um número inteiro PHP. Isso garante que
os valores possam ser percorridos sem alterar o tipo.

Durante a codificação BSON, os objetos desta classe serão convertidos novamente para
um tipo inteiro de 64 bits, mesmo se o valor couber em um número inteiro de 32 bits. Isso
permite armazenar valores como inteiros de 64 bits explicitamente no BSON.

## Resumo da classe

final

class **MongoDB\BSON\Int64**
implements
[MongoDB\BSON\Type](class.mongodb-bson-type.md), [JsonSerializable](class.jsonserializable.md), [Stringable](class.stringable.md) {

/\* Métodos \*/

final public function [\_\_construct](mongodb-bson-int64.construct.md)([int](language.types.integer.md)|[string](language.types.string.md) `$value`)

final public function [jsonSerialize](mongodb-bson-int64.jsonserialize.md)(): [mixed](language.types.mixed.md)

final public function [\_\_toString](mongodb-bson-int64.tostring.md)(): [string](language.types.string.md)

}

## Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL mongodb 2.0.0 | Esta classe não implementa mais a interface [Serializable](class.serializable.md). |
| PECL mongodb 1.16.0 | A classe agora pode ser instanciada em todas as plataformas. Adicionado suporte para operadores sobrecarregados aritméticos, binários e comparativos. |
| PECL mongodb 1.12.0 | Implementa [Stringable](class.stringable.md) para PHP 8.0+. |

## Índice

- [MongoDB\BSON\Int64::\_\_construct](mongodb-bson-int64.construct.md) — Constrói um novo Int64
- [MongoDB\BSON\Int64::jsonSerialize](mongodb-bson-int64.jsonserialize.md) — Retorna uma representação que pode ser convertida para JSON
- [MongoDB\BSON\Int64::\_\_toString](mongodb-bson-int64.tostring.md) — Retorna a representação em string deste Int64

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
