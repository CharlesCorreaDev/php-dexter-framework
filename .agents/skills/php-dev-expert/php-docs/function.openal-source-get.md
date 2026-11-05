# Recupera uma propriedade de origem OpenAL

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.openal-source-get.php

---

# openal\_source\_get

(PECL openal >= 0.1.0)

openal\_source\_get — 
Recupera uma propriedade de origem OpenAL

### Descrição

function **openal\_source\_get**([resource](language.types.resource.md) `$source`, [int](language.types.integer.md) `$property`): [mixed](language.types.mixed.md)

### Parâmetros

`source`
:   Um recurso [Open AL(Source)](openal.resources.md)
    (criado anteriormente por [openal\_source\_create()](function.openal-source-create.md)).

`property`
:   Propriedade a ser obtida, uma das seguintes:
    **`AL_SOURCE_RELATIVE`** (int),
    **`AL_SOURCE_STATE`** (int),
    **`AL_PITCH`** (float),
    **`AL_GAIN`** (float),
    **`AL_MIN_GAIN`** (float),
    **`AL_MAX_GAIN`** (float),
    **`AL_MAX_DISTANCE`** (float),
    **`AL_ROLLOFF_FACTOR`** (float),
    **`AL_CONE_OUTER_GAIN`** (float),
    **`AL_CONE_INNER_ANGLE`** (float),
    **`AL_CONE_OUTER_ANGLE`** (float),
    **`AL_REFERENCE_DISTANCE`** (float),
    **`AL_POSITION`** (array(float,float,float)),
    **`AL_VELOCITY`** (array(float,float,float)),
    **`AL_DIRECTION`** (array(float,float,float)).

### Valor Retornado

Retorna o tipo associado à propriedade que está sendo recuperada
ou **`false`** em caso de falha.

### Veja também

- [openal\_source\_create()](function.openal-source-create.md) - Gera um recurso de origem
- [openal\_source\_set()](function.openal-source-set.md) - Define propriedade da origem
- [openal\_source\_play()](function.openal-source-play.md) - Começa a reproduzir a origem

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
