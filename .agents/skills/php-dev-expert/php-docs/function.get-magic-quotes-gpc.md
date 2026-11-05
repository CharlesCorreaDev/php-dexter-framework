# Obtém a configuração atual de magic_quotes_gpc

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.get-magic-quotes-gpc.php

---

# get\_magic\_quotes\_gpc

(PHP 4, PHP 5, PHP 7)

get\_magic\_quotes\_gpc — Obtém a configuração atual de magic\_quotes\_gpc

**Aviso**

Esta função foi
*DESCONTINUADA* a partir do PHP 7.4.0 e foi *REMOVIDA* a partir do PHP 8.0.0. O uso desta função
é fortemente desencorajado.

### Descrição

function **get\_magic\_quotes\_gpc**(): [false](language.types.singleton.md)

Sempre retorna **`false`**.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Sempre retorna **`false`**.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | Esta função foi removida. |
| 7.4.0 | Esta função foi descontinuada. |

### Veja também

- [addslashes()](function.addslashes.md) - Adiciona barras invertidas a uma string
- [stripslashes()](function.stripslashes.md) - Desfaz os escapes de uma string escapada
- [get\_magic\_quotes\_runtime()](function.get-magic-quotes-runtime.md) - Obtém a configuração ativa para magic\_quotes\_runtime
- [ini\_get()](function.ini-get.md) - Obtém o valor de uma opção de configuração

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
