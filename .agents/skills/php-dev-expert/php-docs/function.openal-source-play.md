# Começa a reproduzir a origem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.openal-source-play.php

---

# openal\_source\_play

(PECL openal >= 0.1.0)

openal\_source\_play — 
Começa a reproduzir a origem

### Descrição

function **openal\_source\_play**([resource](language.types.resource.md) `$source`): [bool](language.types.boolean.md)

### Parâmetros

`source`
:   Um recurso [Open AL(Source)](openal.resources.md)
    (criado anteriormente por [openal\_source\_create()](function.openal-source-create.md)).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [openal\_source\_stop()](function.openal-source-stop.md) - Para de reproduzir a origem
- [openal\_source\_pause()](function.openal-source-pause.md) - Pausa a origem
- [openal\_source\_rewind()](function.openal-source-rewind.md) - Retrocede a origem

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
