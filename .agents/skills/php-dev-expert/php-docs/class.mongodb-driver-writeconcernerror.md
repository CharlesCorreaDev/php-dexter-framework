# A classe MongoDB\Driver\WriteConcernError

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.mongodb-driver-writeconcernerror.php

---

# A classe MongoDB\Driver\WriteConcernError

(mongodb >=1.0.0)

## Introdução

A classe **MongoDB\Driver\WriteConcernError**
encapsula informações sobre um erro de preocupação de gravação e pode ser retornada por
[MongoDB\Driver\WriteResult::getWriteConcernError()](mongodb-driver-writeresult.getwriteconcernerror.md).

## Resumo da classe

final

class **MongoDB\Driver\WriteConcernError**
{

/\* Propriedades \*/

public
readonly
[string](language.types.string.md)
[$message](class.mongodb-driver-writeconcernerror.md#mongodb-driver-writeconcernerror.props.message);

public
readonly
[int](language.types.integer.md)
[$code](class.mongodb-driver-writeconcernerror.md#mongodb-driver-writeconcernerror.props.code);

public
readonly
?[object](language.types.object.md)
[$info](class.mongodb-driver-writeconcernerror.md#mongodb-driver-writeconcernerror.props.info);

/\* Métodos \*/

final public function [getCode](mongodb-driver-writeconcernerror.getcode.md)(): [int](language.types.integer.md)

final public function [getInfo](mongodb-driver-writeconcernerror.getinfo.md)(): [?](language.types.null.md)[object](language.types.object.md)

final public function [getMessage](mongodb-driver-writeconcernerror.getmessage.md)(): [string](language.types.string.md)

}

## Propriedades

message
:   The error message.

code
:   The error code.

info
:   Additional information for the error, or **`null`** if not available.

## Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL mongodb 2.3.0 | Adicionadas propriedades públicas readonly. |

## Índice

- [MongoDB\Driver\WriteConcernError::getCode](mongodb-driver-writeconcernerror.getcode.md) — Retorna o código de erro do WriteConcernError
- [MongoDB\Driver\WriteConcernError::getInfo](mongodb-driver-writeconcernerror.getinfo.md) — Retorna documento de metadados para WriteConcernError
- [MongoDB\Driver\WriteConcernError::getMessage](mongodb-driver-writeconcernerror.getmessage.md) — Retorna a mensagem de erro do WriteConcernError

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
