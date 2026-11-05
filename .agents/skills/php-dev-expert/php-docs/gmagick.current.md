# Retorna referência ao objeto Gmagick atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gmagick.current.php

---

# Gmagick::current

(PECL gmagick >= Unknown)

Gmagick::current — Retorna referência ao objeto Gmagick atual

### Descrição

public function **Gmagick::current**(): [Gmagick](class.gmagick.md)

Retorna referência ao objeto Gmagick atual com o ponteiro de imagem na sequência correta.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o próprio objeto em caso de sucesso.

### Erros/Exceções

Lança uma exceção
**GmagickException** em caso de erro.

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
