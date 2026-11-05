# Define a resolução da imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gmagick.setimageresolution.php

---

# Gmagick::setimageresolution

(PECL gmagick >= Unknown)

Gmagick::setimageresolution — Define a resolução da imagem

### Descrição

public function **Gmagick::setimageresolution**([float](language.types.float.md) `$xResolution`, [float](language.types.float.md) `$yResolution`): [Gmagick](class.gmagick.md)

Define a resolução da imagem.

### Parâmetros

`xResolution`
:   A resolução x da imagem.

`yResolution`
:   A resolução y da imagem.

### Valor Retornado

O objeto Gmagick em caso de sucesso.

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
