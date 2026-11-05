# Mescla uma sequência de imagens

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.flattenimages.php

---

# Imagick::flattenImages

(PECL imagick 2, PECL imagick 3)

Imagick::flattenImages — Mescla uma sequência de imagens

**Aviso**

Esta função foi *DESCONTINUADA* a partir da Imagick 3.4.4. O uso desta função é fortemente desencorajado.

### Descrição

public function **Imagick::flattenImages**(): [Imagick](class.imagick.md)

Mescla uma sequência de imagens. Isso é útil para combinar camadas Photoshop em uma única imagem.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** em caso de sucesso.

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
