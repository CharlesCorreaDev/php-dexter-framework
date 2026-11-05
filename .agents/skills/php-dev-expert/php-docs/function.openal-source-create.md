# Gera um recurso de origem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.openal-source-create.php

---

# openal\_source\_create

(PECL openal >= 0.1.0)

openal\_source\_create — 
Gera um recurso de origem

### Descrição

function **openal\_source\_create**(): [resource](language.types.resource.md)

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um recurso [Open AL(Source)](openal.resources.md) em caso de sucesso ou
**`false`** em caso de falha.

### Veja também

- [openal\_source\_set()](function.openal-source-set.md) - Define propriedade da origem
- [openal\_source\_play()](function.openal-source-play.md) - Começa a reproduzir a origem
- [openal\_source\_destroy()](function.openal-source-destroy.md) - Destrói um recurso de origem

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
