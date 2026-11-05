# Valida o iterador

> **Fonte / Source:** https://www.php.net/manual/pt_BR/norewinditerator.valid.php

---

# NoRewindIterator::valid

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

NoRewindIterator::valid — Valida o iterador

### Descrição

public function **NoRewindIterator::valid**(): [bool](language.types.boolean.md)

Verifica se o iterador é válido.

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- **NoRewindIterator::getInnerIterator()**

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
