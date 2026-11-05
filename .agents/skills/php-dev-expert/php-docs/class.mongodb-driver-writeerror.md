# A classe MongoDB\Driver\WriteError

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.mongodb-driver-writeerror.php

---

# A classe MongoDB\Driver\WriteError

(mongodb >=1.0.0)

## Introdução

A classe **MongoDB\Driver\WriteError** encapsula
informações sobre um erro de gravação e pode ser retornada como um elemento de array de
[MongoDB\Driver\WriteResult::getWriteErrors()](mongodb-driver-writeresult.getwriteerrors.md).

## Resumo da classe

final

class **MongoDB\Driver\WriteError**
{

/\* Propriedades \*/

public
readonly
[string](language.types.string.md)
[$message](class.mongodb-driver-writeerror.md#mongodb-driver-writeerror.props.message);

public
readonly
[int](language.types.integer.md)
[$code](class.mongodb-driver-writeerror.md#mongodb-driver-writeerror.props.code);

public
readonly
[int](language.types.integer.md)
[$index](class.mongodb-driver-writeerror.md#mongodb-driver-writeerror.props.index);

public
readonly
?[object](language.types.object.md)
[$info](class.mongodb-driver-writeerror.md#mongodb-driver-writeerror.props.info);

/\* Métodos \*/

final public function [getCode](mongodb-driver-writeerror.getcode.md)(): [int](language.types.integer.md)

final public function [getIndex](mongodb-driver-writeerror.getindex.md)(): [int](language.types.integer.md)

final public function [getInfo](mongodb-driver-writeerror.getinfo.md)(): [?](language.types.null.md)[object](language.types.object.md)

final public function [getMessage](mongodb-driver-writeerror.getmessage.md)(): [string](language.types.string.md)

}

## Propriedades

message
:   A mensagem de erro.

code
:   O código de erro.

index
:   O índice da operação de gravação dentro do
    [MongoDB\Driver\BulkWrite](class.mongodb-driver-bulkwrite.md) que causou o erro.

info
:   Informações adicionais sobre o erro, ou **`null`** se não disponíveis.

## Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL mongodb 2.3.0 | Adicionadas propriedades públicas readonly. |

## Índice

- [MongoDB\Driver\WriteError::getCode](mongodb-driver-writeerror.getcode.md) — Retorna o código de erro do WriteError
- [MongoDB\Driver\WriteError::getIndex](mongodb-driver-writeerror.getindex.md) — Retorna o índice da operação de gravação correspondente a este WriteError
- [MongoDB\Driver\WriteError::getInfo](mongodb-driver-writeerror.getinfo.md) — Retorna documento de metadados para WriteError
- [MongoDB\Driver\WriteError::getMessage](mongodb-driver-writeerror.getmessage.md) — Retorna a mensagem de erro do WriteError

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
