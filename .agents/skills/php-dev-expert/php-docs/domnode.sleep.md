# Proíbe a serialização a menos que métodos de serialização estejam implementados em uma subclasse

> **Fonte / Source:** https://www.php.net/manual/pt_BR/domnode.sleep.php

---

# DOMNode::\_\_sleep

(PHP 8 >= 8.1.25)

DOMNode::\_\_sleep — Proíbe a serialização a menos que métodos de serialização estejam implementados em uma subclasse

### Descrição

public function **DOMNode::\_\_sleep**(): [array](language.types.array.md)

Proíbe a serialização a menos que métodos de serialização estejam implementados em uma subclasse.

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
