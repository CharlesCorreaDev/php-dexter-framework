# Define o ponto branco da cromaticidade da imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gmagick.setimagewhitepoint.php

---

# Gmagick::setimagewhitepoint

(PECL gmagick >= Unknown)

Gmagick::setimagewhitepoint — Define o ponto branco da cromaticidade da imagem

### Descrição

public function **Gmagick::setimagewhitepoint**([float](language.types.float.md) `$x`, [float](language.types.float.md) `$y`): [Gmagick](class.gmagick.md)

Define o ponto branco da cromaticidade da imagem.

### Parâmetros

`x`
:   A coordenada x do ponto branco.

`y`
:   A coordenada y do ponto branco.

### Valor Retornado

O objeto [Gmagick](class.gmagick.md).

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
