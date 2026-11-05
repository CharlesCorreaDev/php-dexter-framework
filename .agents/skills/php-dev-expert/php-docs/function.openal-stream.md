# Inicia a transmissão de uma origem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.openal-stream.php

---

# openal\_stream

(PECL openal >= 0.1.0)

openal\_stream — 
Inicia a transmissão de uma origem

### Descrição

function **openal\_stream**([resource](language.types.resource.md) `$source`, [int](language.types.integer.md) `$format`, [int](language.types.integer.md) `$rate`): [resource](language.types.resource.md)|[false](language.types.singleton.md)

### Parâmetros

`source`
:   Um recurso [Open AL(Source)](openal.resources.md)
    (criado anteriormente por [openal\_source\_create()](function.openal-source-create.md)).

`format`
:   Formato de `data`, um dos seguintes:
    **`AL_FORMAT_MONO8`**,
    **`AL_FORMAT_MONO16`**,
    **`AL_FORMAT_STEREO8`** e
    **`AL_FORMAT_STEREO16`**

`rate`
:   Frequência de dados a serem transmitidos em Hz.

### Valor Retornado

Retorna um recurso de fluxo em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [openal\_source\_create()](function.openal-source-create.md) - Gera um recurso de origem
- [fwrite()](function.fwrite.md) - Escrita binary-safe em arquivos

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
