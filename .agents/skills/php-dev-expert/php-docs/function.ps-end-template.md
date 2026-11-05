# Termina um modelo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ps-end-template.php

---

# ps\_end\_template

(PECL ps >= 1.2.0)

ps\_end\_template — Termina um modelo

### Descrição

function **ps\_end\_template**([resource](language.types.resource.md) `$psdoc`): [bool](language.types.boolean.md)

Termina um modelo iniciado com [ps\_begin\_template()](function.ps-begin-template.md).
Após o término de um modelo, ele pode ser usado como uma imagem.

### Parâmetros

`psdoc`
:   Identificador de recurso do arquivo postscript
    conforme retornado por [ps\_new()](function.ps-new.md).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [ps\_begin\_template()](function.ps-begin-template.md) - Inicia um novo modelo

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
