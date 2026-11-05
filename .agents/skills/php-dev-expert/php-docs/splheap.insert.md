# Insere um elemento no heap, ajustando-o para cima

> **Fonte / Source:** https://www.php.net/manual/pt_BR/splheap.insert.php

---

# SplHeap::insert

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

SplHeap::insert — Insere um elemento no heap, ajustando-o para cima

### Descrição

public function **SplHeap::insert**([mixed](language.types.mixed.md) `$value`): [true](language.types.singleton.md)

Insere o `value` no heap.

### Parâmetros

`value`
:   O valor a ser inserido.

### Valor Retornado

Sempre retorna **`true`**.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | **SplHeap::insert()** agora tem um tipo de retorno provisório de [true](language.types.singleton.md). |

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
