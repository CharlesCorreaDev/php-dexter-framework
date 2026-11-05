# Verifica se a imagem tem um canal alfa

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.getimagealphachannel.php

---

# Imagick::getImageAlphaChannel

(PECL imagick 2 >= 2.3.0, PECL imagick 3)

Imagick::getImageAlphaChannel — Verifica se a imagem tem um canal alfa

### Descrição

public function **Imagick::getImageAlphaChannel**(): [bool](language.types.boolean.md)

Retorna se a imagem tem ou não um canal alfa.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** se a imagem tiver um canal alfa e **`false`** se não tiver,
ou seja, se a imagem for RGB ao invés de RGBA
ou CMYK ao invés de CMYKA.

### Erros/Exceções

Lança uma exceção ImagickException em caso de erro.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL imagick 3.6.0 | Retorna agora um [bool](language.types.boolean.md); anteriormente, retornava um [int](language.types.integer.md). |

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
