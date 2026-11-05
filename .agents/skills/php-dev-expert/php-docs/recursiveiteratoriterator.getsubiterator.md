# Retorna o sub-iterador ativo atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/recursiveiteratoriterator.getsubiterator.php

---

# RecursiveIteratorIterator::getSubIterator

(PHP 5, PHP 7, PHP 8)

RecursiveIteratorIterator::getSubIterator — Retorna o sub-iterador ativo atual

### Descrição

public function **RecursiveIteratorIterator::getSubIterator**([?](language.types.null.md)[int](language.types.integer.md) `$level` = **`null`**): [?](language.types.null.md)[RecursiveIterator](class.recursiveiterator.md)

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

`level`

### Valor Retornado

O atual sub-iterador ativo em caso de sucesso; **`null`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `level` agora é anulável |

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
