# A classe MongoDB\BSON\Binary

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.mongodb-bson-binary.php

---

# A classe MongoDB\BSON\Binary

(mongodb >=1.0.0)

## Introdução

Tipo BSON para dados binários (ou seja, array de bytes). Os valores binários também possuem um
subtipo, que é usado para indicar que tipo de dados está no array de bytes.
Os subtipos de zero a 127 são predefinidos ou reservados. Os subtipos de 128 a 255
são definidos pelo usuário.

## Resumo da classe

final

class **MongoDB\BSON\Binary**
implements
[MongoDB\BSON\BinaryInterface](class.mongodb-bson-binaryinterface.md), [MongoDB\BSON\Type](class.mongodb-bson-type.md), [JsonSerializable](class.jsonserializable.md), [Stringable](class.stringable.md) {

/\* Constantes \*/

const
[int](language.types.integer.md)
[TYPE\_GENERIC](class.mongodb-bson-binary.md#mongodb-bson-binary.constants.type-generic) = 0;

const
[int](language.types.integer.md)
[TYPE\_FUNCTION](class.mongodb-bson-binary.md#mongodb-bson-binary.constants.type-function) = 1;

const
[int](language.types.integer.md)
[TYPE\_OLD\_BINARY](class.mongodb-bson-binary.md#mongodb-bson-binary.constants.type-old-binary) = 2;

const
[int](language.types.integer.md)
[TYPE\_OLD\_UUID](class.mongodb-bson-binary.md#mongodb-bson-binary.constants.type-old-uuid) = 3;

const
[int](language.types.integer.md)
[TYPE\_UUID](class.mongodb-bson-binary.md#mongodb-bson-binary.constants.type-uuid) = 4;

const
[int](language.types.integer.md)
[TYPE\_MD5](class.mongodb-bson-binary.md#mongodb-bson-binary.constants.type-md5) = 5;

const
[int](language.types.integer.md)
[TYPE\_ENCRYPTED](class.mongodb-bson-binary.md#mongodb-bson-binary.constants.type-encrypted) = 6;

const
[int](language.types.integer.md)
[TYPE\_COLUMN](class.mongodb-bson-binary.md#mongodb-bson-binary.constants.type-column) = 7;

const
[int](language.types.integer.md)
[TYPE\_SENSITIVE](class.mongodb-bson-binary.md#mongodb-bson-binary.constants.type-sensitive) = 8;

const
[int](language.types.integer.md)
[TYPE\_VECTOR](class.mongodb-bson-binary.md#mongodb-bson-binary.constants.type-vector) = 9;

const
[int](language.types.integer.md)
[TYPE\_USER\_DEFINED](class.mongodb-bson-binary.md#mongodb-bson-binary.constants.type-user-defined) = 128;

/\* Métodos \*/

final public function [\_\_construct](mongodb-bson-binary.construct.md)([string](language.types.string.md) `$data`, [int](language.types.integer.md) `$type` = MongoDB\BSON\Binary::TYPE\_GENERIC)

final public static function [fromVector](mongodb-bson-binary.fromvector.md)([array](language.types.array.md) `$vector`, [MongoDB\BSON\VectorType](enum.mongodb-bson-vectortype.md) `$vectorType`): [MongoDB\BSON\Binary](class.mongodb-bson-binary.md)

final public function [getData](mongodb-bson-binary.getdata.md)(): [string](language.types.string.md)

final public function [getType](mongodb-bson-binary.gettype.md)(): [int](language.types.integer.md)

final public function [getVectorType](mongodb-bson-binary.getvectortype.md)(): [MongoDB\BSON\VectorType](enum.mongodb-bson-vectortype.md)

final public function [jsonSerialize](mongodb-bson-binary.jsonserialize.md)(): [mixed](language.types.mixed.md)

final public function [toArray](mongodb-bson-binary.toarray.md)(): [array](language.types.array.md)

final public function [\_\_toString](mongodb-bson-binary.tostring.md)(): [string](language.types.string.md)

}

## Constantes predefinidas

**`MongoDB\BSON\Binary::TYPE_GENERIC`**
:   Dados binários genéricos.

**`MongoDB\BSON\Binary::TYPE_FUNCTION`**
:   Função.

**`MongoDB\BSON\Binary::TYPE_OLD_BINARY`**
:   Dados binários genéricos (preterido em favor de **`MongoDB\BSON\Binary::TYPE_GENERIC`**).

**`MongoDB\BSON\Binary::TYPE_OLD_UUID`**
:   Identificador único universal (preterido em favor de
    **`MongoDB\BSON\Binary::TYPE_UUID`**). Ao usar este
    tipo, os dados binários precisam ter 16 bytes de comprimento.

    Historicamente, outros drivers codificaram valores com este tipo com base em suas
    convenções de linguagem (ex.: variações little endian / big endian), o que o torna
    não portável. A extensão PHP não aplica nenhuma manipulação especial para codificar
    ou decodificar dados com este tipo.

**`MongoDB\BSON\Binary::TYPE_UUID`**
:   Identificador único universal. Ao usar este tipo, os dados do binário
    devem ter 16 bytes de comprimento e codificados de acordo com a
    [» RFC 4122](https://datatracker.ietf.org/doc/html/rfc4122).

**`MongoDB\BSON\Binary::TYPE_MD5`**
:   Hash MD5. Ao usar este tipo, os dados do binário devem ter 16 bytes de comprimento.

**`MongoDB\BSON\Binary::TYPE_ENCRYPTED`**
:   Valor criptografado. Este subtipo é usado para criptografia do lado do cliente.

**`MongoDB\BSON\Binary::TYPE_COLUMN`**
:   Dados da coluna. Este subtipo é usado para coleções de séries temporais.

**`MongoDB\BSON\Binary::TYPE_SENSITIVE`**
:   Dados confidenciais. Este subtipo é usado para dados confidenciais que devem ser
    excluídos do registro do servidor quando possível.

**`MongoDB\BSON\Binary::TYPE_VECTOR`**
:   Dados do vetor. Este subtipo é usado para armazenar dados de vetor de forma eficiente para
    uso nas pesquisas de vetor do MongoDB.

**`MongoDB\BSON\Binary::TYPE_USER_DEFINED`**
:   Tipo definido pelo usuário. Enquanto os tipos entre 0 e 127 são predefinidos ou
    reservados, os tipos entre 128 e 255 são definidos pelo usuário e podem ser usados ​​para
    qualquer coisa.

## Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL mongodb 2.2.0 | Adicionada a constante **`MongoDB\BSON\Binary::TYPE_VECTOR`** e também as funções [MongoDB\BSON\Binary::fromVector()](mongodb-bson-binary.fromvector.md), [MongoDB\BSON\Binary::getVectorType()](mongodb-bson-binary.getvectortype.md) e [MongoDB\BSON\Binary::toArray()](mongodb-bson-binary.toarray.md). |
| PECL mongodb 2.0.0 | Esta classe não implementa mais a interface [Serializable](class.serializable.md). |
| PECL mongodb 1.17.0 | Adicionada a constante **`MongoDB\BSON\Binary::TYPE_SENSITIVE`**. |
| PECL mongodb 1.12.0 | Implementada a interface [Stringable](class.stringable.md) para PHP 8.0+.  Adicionada a constante **`MongoDB\BSON\Binary::TYPE_COLUMN`**. |
| PECL mongodb 1.7.0 | Adicionada a constante **`MongoDB\BSON\Binary::TYPE_ENCRYPTED`**. |
| PECL mongodb 1.3.0 | Implementada a interface [MongoDB\BSON\BinaryInterface](class.mongodb-bson-binaryinterface.md). |
| PECL mongodb 1.2.0 | Implementadas as interfaces [Serializable](class.serializable.md) e [JsonSerializable](class.jsonserializable.md). |

## Índice

- [MongoDB\BSON\Binary::\_\_construct](mongodb-bson-binary.construct.md) — Constrói um novo Binary
- [MongoDB\BSON\Binary::fromVector](mongodb-bson-binary.fromvector.md) — Cria um novo binário com subtipo MongoDB\BSON\Binary::SUBTYPE\_VECTOR a partir de um array e do tipo de vetor
- [MongoDB\BSON\Binary::getData](mongodb-bson-binary.getdata.md) — Retorna os dados de Binary
- [MongoDB\BSON\Binary::getType](mongodb-bson-binary.gettype.md) — Retorna o tipo de Binary
- [MongoDB\BSON\Binary::getVectorType](mongodb-bson-binary.getvectortype.md) — Retorna o tipo de dados de um binário com o subtipo do vetor
- [MongoDB\BSON\Binary::jsonSerialize](mongodb-bson-binary.jsonserialize.md) — Retorna uma representação que pode ser convertida para JSON
- [MongoDB\BSON\Binary::toArray](mongodb-bson-binary.toarray.md) — Retorna o vetor como um array para um binário com subtipo MongoDB\BSON\Binary::SUBTYPE\_VECTOR
- [MongoDB\BSON\Binary::\_\_toString](mongodb-bson-binary.tostring.md) — Retorna string representando os dados de Binary

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
