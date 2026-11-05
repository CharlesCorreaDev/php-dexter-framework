# O método current()

> **Fonte / Source:** https://www.php.net/manual/pt_BR/emptyiterator.current.php

---

# EmptyIterator::current

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

EmptyIterator::current — O método current()

### Descrição

public function **EmptyIterator::current**(): [never](language.types.never.md)

Esta função não deve ser chamada. Ela lança uma exceção quando acessada.

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

Esta função não possui parâmetros.

### Erros/Exceções

Lança uma [Exception](class.exception.md) se for chamada.

### Valor Retornado

Nenhum valor é retornado.

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
