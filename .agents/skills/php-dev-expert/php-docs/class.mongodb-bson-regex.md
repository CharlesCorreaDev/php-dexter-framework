# A classe MongoDB\BSON\Regex

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.mongodb-bson-regex.php

---

# A classe MongoDB\BSON\Regex

(mongodb >=1.0.0)

## Introdução

Tipo BSON para um padrão de expressão regular e
[» opções](https://www.mongodb.com/docs/manual/reference/operator/query/regex/#op._S_options) adicionais.

> **Nota**:
>
> Este tipo BSON é usado principalmente ao consultar o banco de dados. Alternativamente,
> o operador de consulta
> [» $regex](https://www.mongodb.com/docs/manual/reference/operator/query/regex)
> pode ser usado.

## Resumo da classe

final

class **MongoDB\BSON\Regex**
implements
[MongoDB\BSON\RegexInterface](class.mongodb-bson-regexinterface.md), [MongoDB\BSON\Type](class.mongodb-bson-type.md), [JsonSerializable](class.jsonserializable.md), [Stringable](class.stringable.md) {

/\* Métodos \*/

final public function [\_\_construct](mongodb-bson-regex.construct.md)([string](language.types.string.md) `$pattern`, [string](language.types.string.md) `$flags` = "")

final public function [getFlags](mongodb-bson-regex.getflags.md)(): [string](language.types.string.md)

final public function [getPattern](mongodb-bson-regex.getpattern.md)(): [string](language.types.string.md)

final public function [jsonSerialize](mongodb-bson-regex.jsonserialize.md)(): [mixed](language.types.mixed.md)

final public function [\_\_toString](mongodb-bson-regex.tostring.md)(): [string](language.types.string.md)

}

## Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL mongodb 2.0.0 | Esta classe não implementa mais a interface [Serializable](class.serializable.md). |
| PECL mongodb 1.12.0 | Implementa [Stringable](class.stringable.md) para PHP 8.0+. |
| PECL mongodb 1.3.0 | Implementa [MongoDB\BSON\RegexInterface](class.mongodb-bson-regexinterface.md). |
| PECL mongodb 1.2.0 | Implementa [Serializable](class.serializable.md) e [JsonSerializable](class.jsonserializable.md). |

## Índice

- [MongoDB\BSON\Regex::\_\_construct](mongodb-bson-regex.construct.md) — Constrói um novo Regex
- [MongoDB\BSON\Regex::getFlags](mongodb-bson-regex.getflags.md) — Retorna as opções de Regex
- [MongoDB\BSON\Regex::getPattern](mongodb-bson-regex.getpattern.md) — Retorna a expressão regular de Regex
- [MongoDB\BSON\Regex::jsonSerialize](mongodb-bson-regex.jsonserialize.md) — Retorna uma representação que pode ser convertida para JSON
- [MongoDB\BSON\Regex::\_\_toString](mongodb-bson-regex.tostring.md) — Retorna a representação em string deste Regex

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
