# Retorna a string de erro da última chamada a json_validate(), json_encode() ou json_decode()

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.json-last-error-msg.php

---

# json\_last\_error\_msg

(PHP 5 >= 5.5.0, PHP 7, PHP 8)

json\_last\_error\_msg — Retorna a string de erro da última chamada a json\_validate(), json\_encode() ou json\_decode()

### Descrição

function **json\_last\_error\_msg**(): [string](language.types.string.md)

Retorna a string de erro da última chamada a [json\_validate()](function.json-validate.md), [json\_encode()](function.json-encode.md) ou [json\_decode()](function.json-decode.md)
que não tenha especificado **`JSON_THROW_ON_ERROR`**.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna a mensagem de erro em caso de sucesso, ou `"No error"` se não
ocorreu erro.

### Veja também

- [json\_last\_error()](function.json-last-error.md) - Retorna o último erro ocorrido

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
