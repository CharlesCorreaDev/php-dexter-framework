# Adiciona uma linha ao histórico

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.readline-add-history.php

---

# readline\_add\_history

(PHP 4, PHP 5, PHP 7, PHP 8)

readline\_add\_history — Adiciona uma linha ao histórico

### Descrição

function **readline\_add\_history**([string](language.types.string.md) `$prompt`): [true](language.types.singleton.md)

Esta função adiciona uma linha ao histórico da linha de comando.

### Parâmetros

`prompt`
:   A linha a ser adicionada ao histórico.

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
