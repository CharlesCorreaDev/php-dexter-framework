# A interface JsonSerializable

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.jsonserializable.php

---

# A interface JsonSerializable

(PHP 5 >= 5.4.0, PHP 7, PHP 8)

## Introdução

Os objetos que implementam **JsonSerializable**
podem personalizar sua representação JSON quando codificados com
[json\_encode()](function.json-encode.md).

## Resumo da Interface

interface ****JsonSerializable**** {

/\* Métodos \*/

public function [jsonSerialize](jsonserializable.jsonserialize.md)(): [mixed](language.types.mixed.md)

}

## Índice

- [JsonSerializable::jsonSerialize](jsonserializable.jsonserialize.md) — Especifica os dados que devem ser serializados para JSON

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
