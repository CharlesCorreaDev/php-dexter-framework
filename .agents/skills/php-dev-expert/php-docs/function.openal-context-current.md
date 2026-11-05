# Torna o contexto especificado atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.openal-context-current.php

---

# openal\_context\_current

(PECL openal >= 0.1.0)

openal\_context\_current — 
Torna o contexto especificado atual

### Descrição

function **openal\_context\_current**([resource](language.types.resource.md) `$context`): [bool](language.types.boolean.md)

### Parâmetros

`context`
:   Um recurso [Open AL(Context)](openal.resources.md)
    (criado anteriormente por [openal\_context\_create()](function.openal-context-create.md)).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [openal\_context\_create()](function.openal-context-create.md) - Cria um contexto de processamento de áudio

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
