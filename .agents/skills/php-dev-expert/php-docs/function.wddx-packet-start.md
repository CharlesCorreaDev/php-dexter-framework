# Inicializa um novo pacote WDDX com uma estrutura dentro dele

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.wddx-packet-start.php

---

# wddx\_packet\_start

(PHP 4, PHP 5, PHP 7)

wddx\_packet\_start — Inicializa um novo pacote WDDX com uma estrutura dentro dele

**Aviso**

Esta função foi
*REMOVIDA* a partir do PHP 7.4.0.

### Descrição

function **wddx\_packet\_start**([string](language.types.string.md) `$comment` = ?): [resource](language.types.resource.md)

Inicializa um novo pacote WDDX para adição incremental de variáveis.
A função cria automaticamente uma definição de estrutura dentro do pacote
para armazenar as variáveis.

### Parâmetros

`comment`
:   Uma string opcional contendo comentários.

### Valor Retornado

Retorna o ID do pacote para ser usado em outras funções ou **`false`** em caso de erro.

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
