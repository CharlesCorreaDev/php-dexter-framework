# Define uma propriedade de ouvinte

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.openal-listener-set.php

---

# openal\_listener\_set

(PECL openal >= 0.1.0)

openal\_listener\_set — 
Define uma propriedade de ouvinte

### Descrição

function **openal\_listener\_set**([int](language.types.integer.md) `$property`, [mixed](language.types.mixed.md) `$setting`): [bool](language.types.boolean.md)

### Parâmetros

`property`
:   Propriedade a ser definida, uma de:
    **`AL_GAIN`** (float),
    **`AL_POSITION`** (array(float,float,float)),
    **`AL_VELOCITY`** (array(float,float,float)) e
    **`AL_ORIENTATION`** (array(float,float,float)).

`setting`
:   Valor a ser definido, float ou um array de floats, conforme apropriado.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [openal\_listener\_get()](function.openal-listener-get.md) - Recupera uma propriedade do ouvinte

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
