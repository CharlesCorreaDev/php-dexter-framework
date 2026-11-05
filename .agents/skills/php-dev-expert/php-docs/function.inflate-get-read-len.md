# Obtém o número de bytes lidos até o momento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.inflate-get-read-len.php

---

# inflate\_get\_read\_len

(PHP 7 >= 7.2.0, PHP 8)

inflate\_get\_read\_len — Obtém o número de bytes lidos até o momento

### Descrição

function **inflate\_get\_read\_len**([InflateContext](class.inflatecontext.md) `$context`): [int](language.types.integer.md)

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

`context`

### Valor Retornado

Retorna o número de bytes lidos até o momento ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `context` espera uma instância de [InflateContext](class.inflatecontext.md) agora; anteriormente, era esperado um [resource](language.types.resource.md). |

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
