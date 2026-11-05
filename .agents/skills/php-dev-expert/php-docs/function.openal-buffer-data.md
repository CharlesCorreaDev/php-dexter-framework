# Carrega um buffer com dados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.openal-buffer-data.php

---

# openal\_buffer\_data

(PECL openal >= 0.1.0)

openal\_buffer\_data — 
Carrega um buffer com dados

### Descrição

function **openal\_buffer\_data**(  
    [resource](language.types.resource.md) `$buffer`,  
    [int](language.types.integer.md) `$format`,  
    [string](language.types.string.md) `$data`,  
    [int](language.types.integer.md) `$freq`  
): [bool](language.types.boolean.md)

### Parâmetros

`buffer`
:   Um recurso [Open AL(Buffer)](openal.resources.md)
    (criado anteriormente por [openal\_buffer\_create()](function.openal-buffer-create.md)).

`format`
:   Formato de `data`, um dos seguintes:
    **`AL_FORMAT_MONO8`**,
    **`AL_FORMAT_MONO16`**,
    **`AL_FORMAT_STEREO8`** e
    **`AL_FORMAT_STEREO16`**

`data`
:   Bloco de dados de áudio binários no formato especificado por `format` e
    frequência informada em `freq`.

`freq`
:   Frequência de `data` informada em Hz.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [openal\_buffer\_loadwav()](function.openal-buffer-loadwav.md) - Carrega um arquivo .wav em um buffer
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
