# Continua o texto na próxima linha

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ps-continue-text.php

---

# ps\_continue\_text

(PECL ps >= 1.1.0)

ps\_continue\_text — Continua o texto na próxima linha

### Descrição

function **ps\_continue\_text**([resource](language.types.resource.md) `$psdoc`, [string](language.types.string.md) `$text`): [bool](language.types.boolean.md)

Gera um texto uma linha abaixo da última linha. O espaçamento entre linhas é
obtido do valor "leading", que deve ser definido com
[ps\_set\_value()](function.ps-set-value.md). A posição real do
texto é determinada pelos valores "textx" e "texty", que podem ser solicitados
com [ps\_get\_value()](function.ps-get-value.md).

### Parâmetros

`psdoc`
:   Identificador de recurso do arquivo postscript
    conforme retornado por [ps\_new()](function.ps-new.md).

`text`
:   O texto a ser gerado.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [ps\_show()](function.ps-show.md) - Exibe texto
- [ps\_show\_xy()](function.ps-show-xy.md) - Exibe texto na posição fornecida
- [ps\_show\_boxed()](function.ps-show-boxed.md) - Gera texto em uma caixa

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
