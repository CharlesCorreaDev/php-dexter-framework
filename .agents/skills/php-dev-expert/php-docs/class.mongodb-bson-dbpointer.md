# A classe MongoDB\BSON\DBPointer

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.mongodb-bson-dbpointer.php

---

# A classe MongoDB\BSON\DBPointer

(mongodb >=1.4.0)

## Introdução

Tipo BSON para o tipo "DBPointer". Este tipo BSON está preterido e esta
classe não pode ser instanciada. Ele será criado a partir de um tipo BSON
DBPointer durante a conversão de BSON para PHP e também pode ser convertida de volta para
BSON durante o armazenamento de documentos no banco de dados.

## Resumo da classe

final

class **MongoDB\BSON\DBPointer**
implements
[MongoDB\BSON\Type](class.mongodb-bson-type.md), [JsonSerializable](class.jsonserializable.md), [Stringable](class.stringable.md) {

/\* Métodos \*/

final private function [\_\_construct](mongodb-bson-dbpointer.construct.md)()

final public function [jsonSerialize](mongodb-bson-dbpointer.jsonserialize.md)(): [mixed](language.types.mixed.md)

final public function [\_\_toString](mongodb-bson-dbpointer.tostring.md)(): [string](language.types.string.md)

}

## Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL mongodb 2.0.0 | Esta classe não implementa mais a interface [Serializable](class.serializable.md). |
| PECL mongodb 1.12.0 | Implementa [Stringable](class.stringable.md) para PHP 8.0+. |

## Índice

- [MongoDB\BSON\DBPointer::\_\_construct](mongodb-bson-dbpointer.construct.md) — Constrói um novo DBPointer (não utilizado)
- [MongoDB\BSON\DBPointer::jsonSerialize](mongodb-bson-dbpointer.jsonserialize.md) — Retorna uma representação que pode ser convertida para JSON
- [MongoDB\BSON\DBPointer::\_\_toString](mongodb-bson-dbpointer.tostring.md) — Retorna uma string vazia

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
