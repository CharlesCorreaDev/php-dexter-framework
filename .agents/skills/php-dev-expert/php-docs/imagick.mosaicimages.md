# Forma um mosaico a partir de imagens

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.mosaicimages.php

---

# Imagick::mosaicImages

(PECL imagick 2, PECL imagick 3)

Imagick::mosaicImages — Forma um mosaico a partir de imagens

**Aviso**

Esta função foi *DESCONTINUADA* a partir da Imagick 3.4.4. O uso desta função é fortemente desencorajado.

### Descrição

public function **Imagick::mosaicImages**(): [Imagick](class.imagick.md)

Insere uma sequência de imagens para formar uma única imagem coerente.
Retorna uma varinha com cada imagem da sequência composta no
local definido pela posição da imagem na página.

### Parâmetros

Esta função não possui parâmetros.

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
