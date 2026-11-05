# A interface MongoDB\BSON\ObjectIdInterface

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.mongodb-bson-objectidinterface.php

---

# A interface MongoDB\BSON\ObjectIdInterface

(mongodb >=1.3.0)

## Introdução

Esta interface é implementada por
[MongoDB\BSON\ObjectId](class.mongodb-bson-objectid.md) para ser usada como um parâmetro,
um retorno, ou um tipo de propriedade em classes do usuário.

## Resumo da classe

class **MongoDB\BSON\ObjectIdInterface**
{

/\* Métodos \*/

abstract public function [getTimestamp](mongodb-bson-objectidinterface.gettimestamp.md)(): [int](language.types.integer.md)

abstract public function [\_\_toString](mongodb-bson-objectidinterface.tostring.md)(): [string](language.types.string.md)

}

## Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL mongodb 2.0.0 | Os tipos de retorno anteriormente declarados como temporários agora devem ser cumpridos. |
| mongodb 1.15.0 no PECL | Os tipos de retorno para métodos são declarados como provisórios no PHP 8.0 e mais recentes, disparando avisos de descontinuação no código que implementa essa interface sem declarar os tipos de retorno apropriados. O atributo `#[ReturnTypeWillChange]` pode ser adicionado para silenciar o aviso de descontinuação. |

## Índice

- [MongoDB\BSON\ObjectIdInterface::getTimestamp](mongodb-bson-objectidinterface.gettimestamp.md) — etorna o componente timestamp deste ObjectIdInterface
- [MongoDB\BSON\ObjectIdInterface::\_\_toString](mongodb-bson-objectidinterface.tostring.md) — Retorna a representação hexadecimal deste ObjectIdInterface

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
