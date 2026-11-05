# Decodifica string no campo de cabeçalho MIME

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mb-decode-mimeheader.php

---

# mb\_decode\_mimeheader

(PHP 4 >= 4.0.6, PHP 5, PHP 7, PHP 8)

mb\_decode\_mimeheader — Decodifica string no campo de cabeçalho MIME

### Descrição

function **mb\_decode\_mimeheader**([string](language.types.string.md) `$string`): [string](language.types.string.md)

Decodifica a [string](language.types.string.md) codificada `string` no cabeçalho MIME.

### Parâmetros

`string`
:   A [string](language.types.string.md) sendo decodificada.

### Valor Retornado

A [string](language.types.string.md) decodificada na codificação interna de caracteres.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.3.0 | Caracteres de sublinhado (\_) são convertidos para espaços conforme especificado na [» RFC 2047](https://datatracker.ietf.org/doc/html/rfc2047). |

### Veja também

- [mb\_encode\_mimeheader()](function.mb-encode-mimeheader.md) - Codificar string para cabeçalho MIME

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
