# A classe MongoDB\BSON\Symbol

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.mongodb-bson-symbol.php

---

# A classe MongoDB\BSON\Symbol

(mongodb >=1.4.0)

## Introdução

Tipo BSON para o tipo "Símbolo". Este tipo BSON está preterido e esta
classe não pode ser instanciada. Ele será criado a partir de um tipo de símbolo
BSON durante a conversão de BSON para PHP e também pode ser convertido novamente em
BSON durante o armazenamento de documentos no banco de dados.

## Resumo da classe

final

class **MongoDB\BSON\Symbol**
implements
[MongoDB\BSON\Type](class.mongodb-bson-type.md), [JsonSerializable](class.jsonserializable.md), [Stringable](class.stringable.md) {

/\* Métodos \*/

final private function [\_\_construct](mongodb-bson-symbol.construct.md)()

final public function [jsonSerialize](mongodb-bson-symbol.jsonserialize.md)(): [mixed](language.types.mixed.md)

final public function [\_\_toString](mongodb-bson-symbol.tostring.md)(): [string](language.types.string.md)

}

## Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL mongodb 2.0.0 | Esta classe não implementa mais a interface [Serializable](class.serializable.md). |
| PECL mongodb 1.12.0 | Implementa [Stringable](class.stringable.md) para PHP 8.0+. |

## Índice

- [MongoDB\BSON\Symbol::\_\_construct](mongodb-bson-symbol.construct.md) — Constrói um novo Symbol (não utilizado)
- [MongoDB\BSON\Symbol::jsonSerialize](mongodb-bson-symbol.jsonserialize.md) — Retorna uma representação que pode ser convertida para JSON
- [MongoDB\BSON\Symbol::\_\_toString](mongodb-bson-symbol.tostring.md) — Retorna o Symbol como uma string

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
