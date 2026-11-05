# Limpa o histórico

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.readline-clear-history.php

---

# readline\_clear\_history

(PHP 4, PHP 5, PHP 7, PHP 8)

readline\_clear\_history — Limpa o histórico

### Descrição

function **readline\_clear\_history**(): [true](language.types.singleton.md)

Esta função limpa todo o histórico da linha de comando.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Sempre retorna **`true`**.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.5.0 | O tipo do retorno agora é **`true`**; anteriormente, era [bool](language.types.boolean.md). |

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
