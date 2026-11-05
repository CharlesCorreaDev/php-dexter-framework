# A classe MongoDB\BSON\MaxKey

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.mongodb-bson-maxkey.php

---

# A classe MongoDB\BSON\MaxKey

(mongodb >=1.0.0)

## Introdução

Tipo BSON especial que compara valores superiores a todos os outros valores de elemento
BSON possíveis.

> **Nota**:
>
> Este é um tipo interno do MongoDB usado para indexação e fragmentação.

## Resumo da classe

final

class **MongoDB\BSON\MaxKey**
implements
[MongoDB\BSON\MaxKeyInterface](class.mongodb-bson-maxkeyinterface.md), [MongoDB\BSON\Type](class.mongodb-bson-type.md), [JsonSerializable](class.jsonserializable.md) {

/\* Métodos \*/

final public function [\_\_construct](mongodb-bson-maxkey.construct.md)()

final public function [jsonSerialize](mongodb-bson-maxkey.jsonserialize.md)(): [mixed](language.types.mixed.md)

}

## Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL mongodb 2.0.0 | Esta classe não implementa mais a interface [Serializable](class.serializable.md). |
| PECL mongodb 1.3.0 | Implementa [MongoDB\BSON\MaxKeyInterface](class.mongodb-bson-maxkeyinterface.md). |
| PECL mongodb 1.2.0 | Implementa [Serializable](class.serializable.md) e [JsonSerializable](class.jsonserializable.md). |

## Índice

- [MongoDB\BSON\MaxKey::\_\_construct](mongodb-bson-maxkey.construct.md) — Constrói um novo MaxKey
- [MongoDB\BSON\MaxKey::jsonSerialize](mongodb-bson-maxkey.jsonserialize.md) — Retorna uma representação que pode ser convertida para JSON

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
