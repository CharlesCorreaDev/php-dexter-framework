# Recupera uma propriedade de buffer OpenAL

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.openal-buffer-get.php

---

# openal\_buffer\_get

(PECL openal >= 0.1.0)

openal\_buffer\_get — 
Recupera uma propriedade de buffer OpenAL

### Descrição

function **openal\_buffer\_get**([resource](language.types.resource.md) `$buffer`, [int](language.types.integer.md) `$property`): [int](language.types.integer.md)|[false](language.types.singleton.md)

### Parâmetros

`buffer`
:   Um recurso [Open AL(Buffer)](openal.resources.md)
    (criado anteriormente por [openal\_buffer\_create()](function.openal-buffer-create.md)).

`property`
:   Propriedade específica, uma de:
    **`AL_FREQUENCY`**,
    **`AL_BITS`**,
    **`AL_CHANNELS`** e
    **`AL_SIZE`**.

### Valor Retornado

Retorna um valor inteiro apropriado para a propriedade solicitata
em `property` ou **`false`** em caso de falha.

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
