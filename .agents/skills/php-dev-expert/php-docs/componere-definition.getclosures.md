# Obtém Closures

> **Fonte / Source:** https://www.php.net/manual/pt_BR/componere-definition.getclosures.php

---

# Componere\Definition::getClosures

(Componere 2 >= 2.1.0)

Componere\Definition::getClosures — Obtém Closures

### Descrição

public function **Componere\Definition::getClosures**(): [array](language.types.array.md)

Retorna um array de Closures.

### Valor Retornado

Retorna todos os métodos como um array de objetos Closure ligados ao escopo correto.

### Exceptions

**Aviso**

Lança uma [RuntimeException](class.runtimeexception.md) se Definition já estiver registrada.

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
