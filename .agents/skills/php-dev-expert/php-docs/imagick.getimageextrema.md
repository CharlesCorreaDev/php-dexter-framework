# Obtém os extremos da imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.getimageextrema.php

---

# Imagick::getImageExtrema

(PECL imagick 2, PECL imagick 3)

Imagick::getImageExtrema — Obtém os extremos da imagem

**Aviso**

Esta função foi *DESCONTINUADA* a partir da Imagick 3.4.4. O uso desta função é fortemente desencorajado.

### Descrição

public function **Imagick::getImageExtrema**(): [array](language.types.array.md)

Obtém os extremos da imagem. Retorna um array associativo com as chaves "min" e "max".

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um array associativo com as chaves "min" e "max".

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
