# A classe MongoDB\Driver\WriteConcern

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.mongodb-driver-writeconcern.php

---

# A classe MongoDB\Driver\WriteConcern

(mongodb >=1.0.0)

## Introdução

**MongoDB\Driver\WriteConcern** descreve o nível de
confirmação solicitado do MongoDB para operações de gravação em um
`mongod` independente ou em conjuntos de réplicas ou em clusters fragmentados. Em
clusters fragmentados, as instâncias `mongos` passarão a preocupação
de gravação para os fragmentos.

## Resumo da classe

final

class **MongoDB\Driver\WriteConcern**
implements
[MongoDB\BSON\Serializable](class.mongodb-bson-serializable.md), [Serializable](class.serializable.md) {

/\* Constantes \*/

const
[string](language.types.string.md)
[MAJORITY](class.mongodb-driver-writeconcern.md#mongodb-driver-writeconcern.constants.majority) = "majority";

/\* Propriedades \*/

public
readonly
[string](language.types.string.md)|[int](language.types.integer.md)|[null](language.types.null.md)
[$w](class.mongodb-driver-writeconcern.md#mongodb-driver-writeconcern.props.w);

public
readonly
?[bool](language.types.boolean.md)
[$j](class.mongodb-driver-writeconcern.md#mongodb-driver-writeconcern.props.j);

public
readonly
[int](language.types.integer.md)
[$wtimeout](class.mongodb-driver-writeconcern.md#mongodb-driver-writeconcern.props.wtimeout);

/\* Métodos \*/

final public function [bsonSerialize](mongodb-driver-writeconcern.bsonserialize.md)(): [stdClass](class.stdclass.md)

final public function [\_\_construct](mongodb-driver-writeconcern.construct.md)([string](language.types.string.md)|[int](language.types.integer.md) `$w`, [?](language.types.null.md)[int](language.types.integer.md) `$wtimeout` = **`null`**, [?](language.types.null.md)[bool](language.types.boolean.md) `$journal` = **`null`**)

final public function [getJournal](mongodb-driver-writeconcern.getjournal.md)(): [?](language.types.null.md)[bool](language.types.boolean.md)

final public function [getW](mongodb-driver-writeconcern.getw.md)(): [string](language.types.string.md)|[int](language.types.integer.md)|[null](language.types.null.md)

final public function [getWtimeout](mongodb-driver-writeconcern.getwtimeout.md)(): [int](language.types.integer.md)

final public function [isDefault](mongodb-driver-writeconcern.isdefault.md)(): [bool](language.types.boolean.md)

}

## Propriedades

w
:   O valor de garantia de gravação (número inteiro de nós, a string
    `"majority"`, ou um nome de tag de garantia de gravação personalizado),
    ou **`null`** se não estiver definido.

j
:   Se as operações de escrita devem ser confirmadas no diário antes de serem reconhecidas,
    ou **`null`** se não especificado.

wtimeout
:   O tempo limite em milissegundos para aguardar o reconhecimento da solicitação de gravação.
    Um valor de `0` significa aguardar indefinidamente.

## Constantes predefinidas

**`MongoDB\Driver\WriteConcern::MAJORITY`**
:   Maioria de todos os membros do conjunto; árbitros, membros sem direito
    a voto, membros passivos, membros ocultos e membros atrasados ​​estão todos incluídos na
    definição de preocupação de escrita majoritária.

## Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL mongodb 2.3.0 | Adicionadas propriedades públicas readonly. |
| PECL mongodb 1.7.0 | Implementa [Serializable](class.serializable.md). |
| PECL mongodb 1.2.0 | Implementa [MongoDB\BSON\Serializable](class.mongodb-bson-serializable.md). |

## Índice

- [MongoDB\Driver\WriteConcern::bsonSerialize](mongodb-driver-writeconcern.bsonserialize.md) — Retorna um objeto para serialização BSON
- [MongoDB\Driver\WriteConcern::\_\_construct](mongodb-driver-writeconcern.construct.md) — Cria uma nova preocupação de gravação
- [MongoDB\Driver\WriteConcern::getJournal](mongodb-driver-writeconcern.getjournal.md) — Retorna a opção "journal" do WriteConcern
- [MongoDB\Driver\WriteConcern::getW](mongodb-driver-writeconcern.getw.md) — Retorna a opção "w" do WriteConcern
- [MongoDB\Driver\WriteConcern::getWtimeout](mongodb-driver-writeconcern.getwtimeout.md) — Retorna a opção "wtimeout" do WriteConcern
- [MongoDB\Driver\WriteConcern::isDefault](mongodb-driver-writeconcern.isdefault.md) — Verifica se esta é a preocupação de gravação padrão

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
