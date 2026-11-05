# Define a largura de uma linha

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ps-setlinewidth.php

---

# ps\_setlinewidth

(PECL ps >= 1.1.0)

ps\_setlinewidth — Define a largura de uma linha

### Descrição

function **ps\_setlinewidth**([resource](language.types.resource.md) `$psdoc`, [float](language.types.float.md) `$width`): [bool](language.types.boolean.md)

Define a largura da linha para todas as operações de desenho seguintes.

### Parâmetros

`psdoc`
:   Identificador de recurso do arquivo postscript
    conforme retornado por [ps\_new()](function.ps-new.md).

`width`
:   A largura das linhas em pontos.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [ps\_setlinecap()](function.ps-setlinecap.md) - Define a aparência das extremidades da linha
- [ps\_setlinejoin()](function.ps-setlinejoin.md) - Define como as linhas conectadas são unidas
- [ps\_setmiterlimit()](function.ps-setmiterlimit.md) - Define o limite de esquadria

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
