# Proíbe a desserialização a menos que métodos de desserialização estejam implementados em uma subclasse

> **Fonte / Source:** https://www.php.net/manual/pt_BR/domnode.wakeup.php

---

# DOMNode::\_\_wakeup

(PHP 8 PHP 8 >= 8.1.25)

DOMNode::\_\_wakeup — Proíbe a desserialização a menos que métodos de desserialização estejam implementados em uma subclasse

### Descrição

public function **DOMNode::\_\_wakeup**(): [void](language.types.void.md)

Proíbe a desserialização a menos que métodos de desserialização estejam implementados em uma subclasse.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O método sempre lança uma exceção.

### Erros/Exceções

Lança uma exceção [Error](class.error.md) quando chamado.

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
