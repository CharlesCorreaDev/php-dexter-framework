# Cria um iterador de qualquer coisa que seja percorrível

> **Fonte / Source:** https://www.php.net/manual/pt_BR/iteratoriterator.construct.php

---

# IteratorIterator::\_\_construct

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

IteratorIterator::\_\_construct — Cria um iterador de qualquer coisa que seja percorrível

### Descrição

public function **IteratorIterator::\_\_construct**([Traversable](class.traversable.md) `$iterator`, [?](language.types.null.md)[string](language.types.string.md) `$class` = **`null`**)

Cria um iterador de qualquer coisa que seja percorrível.

### Parâmetros

`iterator`
:   O iterador percorrível.

`class`
:   O nome da classe a ser usada para o iterador interno. Isso permite especificar uma
    classe de iterador diferente para envolver o iterador fornecido.
    Por padrão, usará a própria classe `IteratorIterator`.

### Veja também

- [Traversable](class.traversable.md)

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
