# Gera buffer OpenAL

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.openal-buffer-create.php

---

# openal\_buffer\_create

(PECL openal >= 0.1.0)

openal\_buffer\_create — 
Gera buffer OpenAL

### Descrição

function **openal\_buffer\_create**(): [resource](language.types.resource.md)

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um recurso [Open AL(Buffer)](openal.resources.md) em caso de sucesso ou
**`false`** em caso de falha.

### Veja também

- [openal\_buffer\_loadwav()](function.openal-buffer-loadwav.md) - Carrega um arquivo .wav em um buffer
- [openal\_buffer\_data()](function.openal-buffer-data.md) - Carrega um buffer com dados

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
