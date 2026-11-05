# A classe MongoDB\Driver\CursorId

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.mongodb-driver-cursorid.php

---

# A classe MongoDB\Driver\CursorId

(mongodb >=1.0.0)

## Introdução

A classe **MongoDB\Driver\CursorID** é um objeto de valor
que representa um ID de cursor. Instâncias desta classe são retornadas por
[MongoDB\Driver\Cursor::getId()](mongodb-driver-cursor.getid.md).

**Aviso**

Esta classe foi *DESCONTINUADA* a partir da versão
de extensão 1.20.0 e foi removida na versão 2.0. As aplicações devem atualizar
seu uso de [MongoDB\Driver\Cursor::getId()](mongodb-driver-cursor.getid.md) para retornar
um [MongoDB\BSON\Int64](class.mongodb-bson-int64.md) no lugar.

## Resumo da classe

final

class **MongoDB\Driver\CursorId**
implements
[Serializable](class.serializable.md), [Stringable](class.stringable.md) {

/\* Métodos \*/

final private function [\_\_construct](mongodb-driver-cursorid.construct.md)()

final public function [\_\_toString](mongodb-driver-cursorid.tostring.md)(): [string](language.types.string.md)

}

## Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL mongodb 2.0.0 | Esta classe foi removida. |
| PECL mongodb 1.20.0 | Esta classe foi descontinuada e será removida na versão 2.0. |
| PECL mongodb 1.12.0 | Implementa [Stringable](class.stringable.md) para o PHP 8.0+. |
| PECL mongodb 1.7.0 | Implementa [Serializable](class.serializable.md). |

## Índice

- [MongoDB\Driver\CursorId::\_\_construct](mongodb-driver-cursorid.construct.md) — Constrói um novo ID de cursor (não utilizado)
- [MongoDB\Driver\CursorId::\_\_toString](mongodb-driver-cursorid.tostring.md) — Representação string do ID de cursor

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
