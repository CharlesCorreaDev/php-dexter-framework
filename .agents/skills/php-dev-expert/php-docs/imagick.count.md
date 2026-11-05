# Obtém o número de imagens

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.count.php

---

# Imagick::count

(PECL imagick 3 >= 3.3.0)

Imagick::count — Obtém o número de imagens

### Descrição

public function **Imagick::count**([int](language.types.integer.md) `$mode` = 0): [int](language.types.integer.md)

Retorna o número de imagens.

### Parâmetros

`mode`
:   Um argumento não utilizado. Atualmente existe um recurso não particularmente bem definido no PHP onde chamar count() em um objeto contável pode (ou não) exigir que este método aceite um parâmetro. Este parâmetro está aqui para estar em conformidade com a interface de Countable, mesmo que o parâmetro não seja usado.

### Valor Retornado

Retorna o número de imagens.

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
