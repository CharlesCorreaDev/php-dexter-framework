# Retorna uma representação que pode ser convertida em JSON

> **Fonte / Source:** https://www.php.net/manual/pt_BR/splfixedarray.jsonserialize.php

---

# SplFixedArray::jsonSerialize

(PHP 8 >= 8.1.0)

SplFixedArray::jsonSerialize — Retorna uma representação que pode ser convertida em JSON

### Descrição

public function **SplFixedArray::jsonSerialize**(): [array](language.types.array.md)

Serializa o array para um valor que pode ser serializado nativamente pelo
[json\_encode()](function.json-encode.md).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna os dados do array que podem ser serializados pelo [json\_encode()](function.json-encode.md),
que é um valor de qualquer tipo que não seja um [resource](language.types.resource.md).

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
