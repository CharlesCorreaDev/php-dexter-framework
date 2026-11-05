# A interface MongoDB\BSON\BinaryInterface

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.mongodb-bson-binaryinterface.php

---

# A interface MongoDB\BSON\BinaryInterface

(mongodb >=1.3.0)

## Introdução

Esta interface é implementada por [MongoDB\BSON\Binary](class.mongodb-bson-binary.md)
para ser usada como um parâmetro, um retorno, ou um tipo de propriedade em classes do usuário.

## Resumo da classe

class **MongoDB\BSON\BinaryInterface**
{

/\* Métodos \*/

abstract public function [getData](mongodb-bson-binaryinterface.getdata.md)(): [string](language.types.string.md)

abstract public function [getType](mongodb-bson-binaryinterface.gettype.md)(): [int](language.types.integer.md)

abstract public function [\_\_toString](mongodb-bson-binaryinterface.tostring.md)(): [string](language.types.string.md)

}

## Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL mongodb 2.0.0 | Os tipos de retorno anteriormente declarados como temporários agora devem ser cumpridos. |
| mongodb 1.15.0 no PECL | Os tipos de retorno para métodos são declarados como provisórios no PHP 8.0 e mais recentes, disparando avisos de descontinuação no código que implementa essa interface sem declarar os tipos de retorno apropriados. O atributo `#[ReturnTypeWillChange]` pode ser adicionado para silenciar o aviso de descontinuação. |

## Índice

- [MongoDB\BSON\BinaryInterface::getData](mongodb-bson-binaryinterface.getdata.md) — Retorna os dados da BinaryInterface
- [MongoDB\BSON\BinaryInterface::getType](mongodb-bson-binaryinterface.gettype.md) — Retorna o tipo da BinaryInterface
- [MongoDB\BSON\BinaryInterface::\_\_toString](mongodb-bson-binaryinterface.tostring.md) — Retorna os dados da BinaryInterface

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
