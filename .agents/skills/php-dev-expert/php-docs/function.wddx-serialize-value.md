# Serializa um único valor em um pacote WDDX

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.wddx-serialize-value.php

---

# wddx\_serialize\_value

(PHP 4, PHP 5, PHP 7)

wddx\_serialize\_value — Serializa um único valor em um pacote WDDX

**Aviso**

Esta função foi
*REMOVIDA* a partir do PHP 7.4.0.

### Descrição

function **wddx\_serialize\_value**([mixed](language.types.mixed.md) `$var`, [string](language.types.string.md) `$comment` = ?): [string](language.types.string.md)

Cria um pacote WDDX a partir de uma única variável.

### Parâmetros

`var`
:   Variável a ser serializada

`comment`
:   Um comentário (opcional) que aparece no cabeçalho do pacote.

### Valor Retornado

Retorna o pacote WDDX ou **`false`** em caso de erro.

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
