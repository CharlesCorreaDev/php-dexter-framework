# A interface MongoDB\BSON\TimestampInterface

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.mongodb-bson-timestampinterface.php

---

# A interface MongoDB\BSON\TimestampInterface

(mongodb >=1.3.0)

## Introdução

Esta interface é implementada por
[MongoDB\BSON\Timestamp](class.mongodb-bson-timestamp.md) para ser usada como um parâmetro,
um retorno, ou um tipo de propriedade em classes do usuário.

## Resumo da classe

class **MongoDB\BSON\TimestampInterface**
{

/\* Métodos \*/

abstract public function [getIncrement](mongodb-bson-timestampinterface.getincrement.md)(): [int](language.types.integer.md)

abstract public function [getTimestamp](mongodb-bson-timestampinterface.gettimestamp.md)(): [int](language.types.integer.md)

abstract public function [\_\_toString](mongodb-bson-timestampinterface.tostring.md)(): [string](language.types.string.md)

}

## Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL mongodb 2.0.0 | Os tipos de retorno anteriormente declarados como temporários agora devem ser cumpridos. |
| mongodb 1.15.0 no PECL | Os tipos de retorno para métodos são declarados como provisórios no PHP 8.0 e mais recentes, disparando avisos de descontinuação no código que implementa essa interface sem declarar os tipos de retorno apropriados. O atributo `#[ReturnTypeWillChange]` pode ser adicionado para silenciar o aviso de descontinuação. |

## Índice

- [MongoDB\BSON\TimestampInterface::getIncrement](mongodb-bson-timestampinterface.getincrement.md) — Retorna o componente de incremento deste TimestampInterface
- [MongoDB\BSON\TimestampInterface::getTimestamp](mongodb-bson-timestampinterface.gettimestamp.md) — Retorna o componente de timestamp deste TimestampInterface
- [MongoDB\BSON\TimestampInterface::\_\_toString](mongodb-bson-timestampinterface.tostring.md) — Retorna a representação em string deste TimestampInterface

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
