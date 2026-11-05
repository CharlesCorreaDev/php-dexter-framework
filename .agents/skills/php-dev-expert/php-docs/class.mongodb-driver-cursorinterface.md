# A interface MongoDB\Driver\CursorInterface

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.mongodb-driver-cursorinterface.php

---

# A interface MongoDB\Driver\CursorInterface

(mongodb >=1.6.0)

## Introdução

Esta interface é implementada por
[MongoDB\Driver\Cursor](class.mongodb-driver-cursor.md) para ser usada como
um tipo de parâmetro, de retorno ou de propriedade em classes do usuário.

## Resumo da classe

class **MongoDB\Driver\CursorInterface**
implements
[Iterator](class.iterator.md) {

/\* Métodos \*/

abstract public function [getId](mongodb-driver-cursorinterface.getid.md)(): [MongoDB\BSON\Int64](class.mongodb-bson-int64.md)

abstract public function [getServer](mongodb-driver-cursorinterface.getserver.md)(): [MongoDB\Driver\Server](class.mongodb-driver-server.md)

abstract public function [isDead](mongodb-driver-cursorinterface.isdead.md)(): [bool](language.types.boolean.md)

abstract public function [setTypeMap](mongodb-driver-cursorinterface.settypemap.md)([array](language.types.array.md) `$typemap`): [void](language.types.void.md)

abstract public function [toArray](mongodb-driver-cursorinterface.toarray.md)(): [array](language.types.array.md)

}

## Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL mongodb 2.0.0 | Esta interface agora estende [Iterator](class.iterator.md).  Tipos de retorno anteriormente declarados como temporários agora devem ser cumpridos. |
| mongodb 1.15.0 no PECL | Os tipos de retorno para métodos são declarados como provisórios no PHP 8.0 e mais recentes, disparando avisos de descontinuação no código que implementa essa interface sem declarar os tipos de retorno apropriados. O atributo `#[ReturnTypeWillChange]` pode ser adicionado para silenciar o aviso de descontinuação. |

## Índice

- [MongoDB\Driver\CursorInterface::getId](mongodb-driver-cursorinterface.getid.md) — Retorna o ID deste cursor
- [MongoDB\Driver\CursorInterface::getServer](mongodb-driver-cursorinterface.getserver.md) — Retorna o servidor associado a este cursor
- [MongoDB\Driver\CursorInterface::isDead](mongodb-driver-cursorinterface.isdead.md) — Verifica se o cursor pode ter resultados adicionais
- [MongoDB\Driver\CursorInterface::setTypeMap](mongodb-driver-cursorinterface.settypemap.md) — Define um mapa de tipos a ser usado para desserialização BSON
- [MongoDB\Driver\CursorInterface::toArray](mongodb-driver-cursorinterface.toarray.md) — Retorna um array contendo todos os resultados deste cursor

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
