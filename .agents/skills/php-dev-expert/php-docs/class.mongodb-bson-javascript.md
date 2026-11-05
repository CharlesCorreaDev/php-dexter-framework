# A classe MongoDB\BSON\Javascript

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.mongodb-bson-javascript.php

---

# A classe MongoDB\BSON\Javascript

(mongodb >=1.0.0)

## Introdução

Tipo BSON para código Javascript. Um documento de escopo opcional pode ser especificado
para mapear identificadores para valores e definir o escopo no qual o código
deve ser avaliado pelo servidor.

> **Nota**:
>
> Este tipo BSON é usado principalmente ao executar comandos de banco de dados que usam uma
> função Javascript como parâmetro, como
> [» mapReduce](https://www.mongodb.com/docs/manual/reference/command/mapReduce/).

## Resumo da classe

final

class **MongoDB\BSON\Javascript**
implements
[MongoDB\BSON\JavascriptInterface](class.mongodb-bson-javascriptinterface.md), [MongoDB\BSON\Type](class.mongodb-bson-type.md), [JsonSerializable](class.jsonserializable.md), [Stringable](class.stringable.md) {

/\* Métodos \*/

final public function [\_\_construct](mongodb-bson-javascript.construct.md)([string](language.types.string.md) `$code`, [array](language.types.array.md)|[object](language.types.object.md)|[null](language.types.null.md) `$scope` = **`null`**)

final public function [getCode](mongodb-bson-javascript.getcode.md)(): [string](language.types.string.md)

final public function [getScope](mongodb-bson-javascript.getscope.md)(): [?](language.types.null.md)[object](language.types.object.md)

final public function [jsonSerialize](mongodb-bson-javascript.jsonserialize.md)(): [mixed](language.types.mixed.md)

final public function [\_\_toString](mongodb-bson-javascript.tostring.md)(): [string](language.types.string.md)

}

## Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL mongodb 2.0.0 | Esta classe não implementa mais a interface [Serializable](class.serializable.md). |
| PECL mongodb 1.12.0 | Implementa [Stringable](class.stringable.md) para PHP 8.0+. |
| PECL mongodb 1.3.0 | Implementa [MongoDB\BSON\JavascriptInterface](class.mongodb-bson-javascriptinterface.md). |
| PECL mongodb 1.2.0 | Implementa [Serializable](class.serializable.md) e [JsonSerializable](class.jsonserializable.md). |

## Índice

- [MongoDB\BSON\Javascript::\_\_construct](mongodb-bson-javascript.construct.md) — Constrói um novo Javascript
- [MongoDB\BSON\Javascript::getCode](mongodb-bson-javascript.getcode.md) — Retorna o código do Javascript
- [MongoDB\BSON\Javascript::getScope](mongodb-bson-javascript.getscope.md) — Retorna o documento de escopo do Javascript
- [MongoDB\BSON\Javascript::jsonSerialize](mongodb-bson-javascript.jsonserialize.md) — Retorna uma representação que pode ser convertida para JSON
- [MongoDB\BSON\Javascript::\_\_toString](mongodb-bson-javascript.tostring.md) — Retorna o código do Javascript

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
