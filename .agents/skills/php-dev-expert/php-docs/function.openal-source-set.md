# Define propriedade da origem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.openal-source-set.php

---

# openal\_source\_set

(PECL openal >= 0.1.0)

openal\_source\_set — 
Define propriedade da origem

### Descrição

function **openal\_source\_set**([resource](language.types.resource.md) `$source`, [int](language.types.integer.md) `$property`, [mixed](language.types.mixed.md) `$setting`): [bool](language.types.boolean.md)

### Parâmetros

`source`
:   Um recurso [Open AL(Source)](openal.resources.md)
    (criado anteriormente por [openal\_source\_create()](function.openal-source-create.md)).

`property`
:   Propriedade a definir, uma das seguintes:
    **`AL_BUFFER`** (OpenAL(Source)),
    **`AL_LOOPING`** (bool),
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

`setting`
:   Valor a ser atribuído à propriedade especificada em `property`.
    Consulte a descrição de cada propriedade possível de `property`
    para uma descrição do(s) valor(es) esperado(s).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [openal\_source\_create()](function.openal-source-create.md) - Gera um recurso de origem
- [openal\_source\_get()](function.openal-source-get.md) - Recupera uma propriedade de origem OpenAL
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
