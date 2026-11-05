# Salva o contexto atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ps-save.php

---

# ps\_save

(PECL ps >= 1.1.0)

ps\_save — Salva o contexto atual

### Descrição

function **ps\_save**([resource](language.types.resource.md) `$psdoc`): [bool](language.types.boolean.md)

Salva o contexto gráfico atual, contendo cores, configurações de translação e rotação,
e muito mais. Um contexto salvo pode ser restaurado com
[ps\_restore()](function.ps-restore.md).

### Parâmetros

`psdoc`
:   Identificador de recurso do arquivo postscript
    conforme retornado por [ps\_new()](function.ps-new.md).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [ps\_restore()](function.ps-restore.md) - Restaura o contexto salvo anteriormente

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
