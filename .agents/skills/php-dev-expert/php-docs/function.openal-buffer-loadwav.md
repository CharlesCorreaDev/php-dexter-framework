# Carrega um arquivo .wav em um buffer

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.openal-buffer-loadwav.php

---

# openal\_buffer\_loadwav

(PECL openal >= 0.1.0)

openal\_buffer\_loadwav — 
Carrega um arquivo .wav em um buffer

### Descrição

function **openal\_buffer\_loadwav**([resource](language.types.resource.md) `$buffer`, [string](language.types.string.md) `$wavfile`): [bool](language.types.boolean.md)

### Parâmetros

`buffer`
:   Um recurso [Open AL(Buffer)](openal.resources.md)
    (criado anteriormente por [openal\_buffer\_create()](function.openal-buffer-create.md)).

`wavfile`
:   Caminho para o arquivo .wav no
    sistema de arquivos *local*.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [openal\_buffer\_data()](function.openal-buffer-data.md) - Carrega um buffer com dados
- [openal\_stream()](function.openal-stream.md) - Inicia a transmissão de uma origem

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
