# Recupera uma propriedade do ouvinte

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.openal-listener-get.php

---

# openal\_listener\_get

(PECL openal >= 0.1.0)

openal\_listener\_get — 
Recupera uma propriedade do ouvinte

### Descrição

function **openal\_listener\_get**([int](language.types.integer.md) `$property`): [mixed](language.types.mixed.md)

### Parâmetros

`property`
:   Propriedade a ser recuperada, uma de:
    **`AL_GAIN`** (float),
    **`AL_POSITION`** (array(float,float,float)),
    **`AL_VELOCITY`** (array(float,float,float)) e
    **`AL_ORIENTATION`** (array(float,float,float)).

### Valor Retornado

Retorna um float ou um array de floats (conforme apropriado) ou **`false`** em caso de falha.

### Veja também

- [openal\_listener\_set()](function.openal-listener-set.md) - Define uma propriedade de ouvinte

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
