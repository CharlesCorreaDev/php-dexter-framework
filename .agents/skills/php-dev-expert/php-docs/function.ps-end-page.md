# Termina uma página

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ps-end-page.php

---

# ps\_end\_page

(PECL ps >= 1.1.0)

ps\_end\_page — Termina uma página

### Descrição

function **ps\_end\_page**([resource](language.types.resource.md) `$psdoc`): [bool](language.types.boolean.md)

Termina uma página que foi iniciada com [ps\_begin\_page()](function.ps-begin-page.md).
Termina uma página e sai do contexto de desenho atual, o que, por exemplo, requer
o recarregamento das fontes, caso elas estejam sendo carregadas dentro da página, e a definição de muitos
outros parâmetros de desenho, como a largura da linha ou a cor.

### Parâmetros

`psdoc`
:   Identificador de recurso do arquivo postscript
    conforme retornado por [ps\_new()](function.ps-new.md).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [ps\_begin\_page()](function.ps-begin-page.md) - Inicia uma nova página

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
