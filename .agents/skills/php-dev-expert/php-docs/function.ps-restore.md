# Restaura o contexto salvo anteriormente

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ps-restore.php

---

# ps\_restore

(PECL ps >= 1.1.0)

ps\_restore — Restaura o contexto salvo anteriormente

### Descrição

function **ps\_restore**([resource](language.types.resource.md) `$psdoc`): [bool](language.types.boolean.md)

Restaura um contexto gráfico salvo anteriormente. Qualquer chamada a
[ps\_save()](function.ps-save.md) deve ser acompanhada por uma chamada a
**ps\_restore()**. Todas as transformações de coordenadas, configurações
de estilo de linha, configurações de cor, etc. serão restauradas ao estado
anterior à chamada de [ps\_save()](function.ps-save.md).

### Parâmetros

`psdoc`
:   Identificador de recurso do arquivo postscript
    conforme retornado por [ps\_new()](function.ps-new.md).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [ps\_save()](function.ps-save.md) - Salva o contexto atual

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
