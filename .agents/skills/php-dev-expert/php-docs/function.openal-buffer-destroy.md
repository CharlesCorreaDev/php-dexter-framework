# Destrói um buffer OpenAL

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.openal-buffer-destroy.php

---

# openal\_buffer\_destroy

(PECL openal >= 0.1.0)

openal\_buffer\_destroy — 
Destrói um buffer OpenAL

### Descrição

function **openal\_buffer\_destroy**([resource](language.types.resource.md) `$buffer`): [bool](language.types.boolean.md)

### Parâmetros

`buffer`
:   Um recurso [Open AL(Buffer)](openal.resources.md)
    (criado anteriormente por [openal\_buffer\_create()](function.openal-buffer-create.md)).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [openal\_buffer\_create()](function.openal-buffer-create.md) - Gera buffer OpenAL

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
