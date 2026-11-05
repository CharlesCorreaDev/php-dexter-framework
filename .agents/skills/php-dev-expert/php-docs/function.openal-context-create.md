# Cria um contexto de processamento de áudio

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.openal-context-create.php

---

# openal\_context\_create

(PECL openal >= 0.1.0)

openal\_context\_create — 
Cria um contexto de processamento de áudio

### Descrição

function **openal\_context\_create**([resource](language.types.resource.md) `$device`): [resource](language.types.resource.md)

### Parâmetros

`device`
:   Um recurso [Open AL(Device)](openal.resources.md)
    (criado anteriormente por [openal\_device\_open()](function.openal-device-open.md)).

### Valor Retornado

Retorna um recurso [Open AL(Context)](openal.resources.md) em caso de sucesso ou
**`false`** em caso de falha.

### Veja também

- [openal\_device\_open()](function.openal-device-open.md) - Inicializa a camada de áudio OpenAL
- [openal\_context\_destroy()](function.openal-context-destroy.md) - Destrói um contexto

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
