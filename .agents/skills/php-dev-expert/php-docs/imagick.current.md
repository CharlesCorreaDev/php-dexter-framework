# Retorna uma referência ao objeto Imagick atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.current.php

---

# Imagick::current

(PECL imagick 2, PECL imagick 3)

Imagick::current — Retorna uma referência ao objeto Imagick atual

### Descrição

public function **Imagick::current**(): [Imagick](class.imagick.md)

Retorna referência ao objeto Imagick atual com ponteiro de imagem na sequência correta.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o próprio objeto em caso de sucesso.

### Erros/Exceções

Lança uma exceção ImagickException em caso de erro.

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
