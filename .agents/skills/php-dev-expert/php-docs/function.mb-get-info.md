# Obtém configurações internas do mbstring

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mb-get-info.php

---

# mb\_get\_info

(PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8)

mb\_get\_info — Obtém configurações internas do mbstring

### Descrição

function **mb\_get\_info**([string](language.types.string.md) `$type` = "all"): [array](language.types.array.md)|[string](language.types.string.md)|[int](language.types.integer.md)|[false](language.types.singleton.md)|[null](language.types.null.md)

**mb\_get\_info()** retorna os parâmetros de configuração internos do mbstring.

### Parâmetros

`type`
:   Se `type` não for especificado ou for especificado como `"all"`,
    `"internal_encoding"`, `"http_input"`,
    `"http_output"`, `"http_output_conv_mimetypes"`,
    `"mail_charset"`, `"mail_header_encoding"`,
    `"mail_body_encoding"`, `"illegal_chars"`,
    `"encoding_translation"`, `"language"`,
    `"detect_order"`, `"substitute_character"`
    e `"strict_detection"`
    serão retornados.

    Se `type` for especificado como
    `"internal_encoding"`, `"http_input"`,
    `"http_output"`, `"http_output_conv_mimetypes"`,
    `"mail_charset"`, `"mail_header_encoding"`,
    `"mail_body_encoding"`, `"illegal_chars"`,
    `"encoding_translation"`, `"language"`,
    `"detect_order"`, `"substitute_character"`
    ou `"strict_detection"`,
    o parâmetro de configuração especificado será retornado.

### Valor Retornado

Um [array](language.types.array.md) de informações do tipo se `type`
não for especificado, caso contrário, um `type` específico,
ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | Os `type`s `"func_overload"` e `"func_overload_list"` não são mais suportados. |

### Veja também

- [mb\_regex\_encoding()](function.mb-regex-encoding.md) - Define/Obtém codificação de caracteres para regex multibyte
- [mb\_http\_output()](function.mb-http-output.md) - Define/Obtém a codificação de caracteres de saída HTTP

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
