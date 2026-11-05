# Suspende o contexto especificado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.openal-context-suspend.php

---

# openal\_context\_suspend

(PECL openal >= 0.1.0)

openal\_context\_suspend — 
Suspende o contexto especificado

### Descrição

function **openal\_context\_suspend**([resource](language.types.resource.md) `$context`): [bool](language.types.boolean.md)

### Parâmetros

`context`
:   Um recurso [Open AL(Context)](openal.resources.md)
    (criado anteriormente por [openal\_context\_create()](function.openal-context-create.md)).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [openal\_context\_create()](function.openal-context-create.md) - Cria um contexto de processamento de áudio
- [openal\_context\_current()](function.openal-context-current.md) - Torna o contexto especificado atual
- [openal\_context\_process()](function.openal-context-process.md) - Processa o contexto especificado

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
