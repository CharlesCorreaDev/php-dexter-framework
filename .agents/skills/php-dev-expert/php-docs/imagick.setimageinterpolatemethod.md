# Define o método de interpolação de pixel da imagem.

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.setimageinterpolatemethod.php

---

# Imagick::setImageInterpolateMethod

(PECL imagick 2, PECL imagick 3)

Imagick::setImageInterpolateMethod — Define o método de interpolação de pixel da imagem.

### Descrição

public function **Imagick::setImageInterpolateMethod**([int](language.types.integer.md) `$method`): [bool](language.types.boolean.md)

Define o método de interpolação de pixel da imagem.

### Parâmetros

`method`
:   O método é uma das constantes **`Imagick::INTERPOLATE_*`**.

### Valor Retornado

Retorna **`true`** em caso de sucesso.

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
