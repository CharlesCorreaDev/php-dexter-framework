# Retorna o deslocamento de tamanho

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.getsizeoffset.php

---

# Imagick::getSizeOffset

(PECL imagick 2, PECL imagick 3)

Imagick::getSizeOffset — Retorna o deslocamento de tamanho

### Descrição

public function **Imagick::getSizeOffset**(): [int](language.types.integer.md)

Retorna o deslocamento de tamanho associado ao objeto Imagick.
Este método estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.2.9 ou superior.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o deslocamento de tamanho associado ao objeto Imagick.

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
