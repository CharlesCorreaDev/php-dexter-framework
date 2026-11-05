# Define o ponto primário verde da cromaticidade da imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gmagick.setimagegreenprimary.php

---

# Gmagick::setimagegreenprimary

(PECL gmagick >= Unknown)

Gmagick::setimagegreenprimary — Define o ponto primário verde da cromaticidade da imagem

### Descrição

public function **Gmagick::setimagegreenprimary**([float](language.types.float.md) `$x`, [float](language.types.float.md) `$y`): [Gmagick](class.gmagick.md)

Define o ponto primário verde da cromaticidade da imagem.

### Parâmetros

`x`
:   A coordenada x do ponto primário verde de cromaticidade.

`y`
:   A coordenada y do ponto primário verde de cromaticidade.

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
