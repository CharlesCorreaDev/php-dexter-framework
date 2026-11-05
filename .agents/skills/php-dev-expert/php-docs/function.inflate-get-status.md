# Obtém o status da descompressão

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.inflate-get-status.php

---

# inflate\_get\_status

(PHP 7 >= 7.2.0, PHP 8)

inflate\_get\_status — Obtém o status da descompressão

### Descrição

function **inflate\_get\_status**([InflateContext](class.inflatecontext.md) `$context`): [int](language.types.integer.md)

Normalmente retorna **`ZLIB_OK`** ou **`ZLIB_STREAM_END`**.

### Parâmetros

`context`

### Valor Retornado

Retorna o status da descompressão.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `context` agora espera uma instância de [InflateContext](class.inflatecontext.md); anteriormente, esperava-se um [resource](language.types.resource.md). |

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
