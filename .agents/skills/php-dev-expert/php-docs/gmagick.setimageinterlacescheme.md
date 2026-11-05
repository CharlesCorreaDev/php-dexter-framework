# Define o esquema de entrelaçamento da imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gmagick.setimageinterlacescheme.php

---

# Gmagick::setimageinterlacescheme

(PECL gmagick >= Unknown)

Gmagick::setimageinterlacescheme — Define o esquema de entrelaçamento da imagem

### Descrição

public function **Gmagick::setimageinterlacescheme**([int](language.types.integer.md) `$interlace`): [Gmagick](class.gmagick.md)

Define o esquema de entrelaçamento da imagem.

### Parâmetros

`interlace`
:   Uma das constantes [Interlace](gmagick.constants.md#gmagick.constants.interlace)
    (`Gmagick::INTERLACE_*`).

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
