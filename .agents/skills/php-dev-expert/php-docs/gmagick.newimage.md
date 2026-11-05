# Cria uma nova imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gmagick.newimage.php

---

# Gmagick::newimage

(PECL gmagick >= Unknown)

Gmagick::newimage — Cria uma nova imagem

### Descrição

public function **Gmagick::newimage**(  
    [int](language.types.integer.md) `$width`,  
    [int](language.types.integer.md) `$height`,  
    [string](language.types.string.md) `$background`,  
    [string](language.types.string.md) `$format` = ?  
): [Gmagick](class.gmagick.md)

Cria uma nova imagem com a cor de fundo especificada.

### Parâmetros

`width`
:   Largura da nova imagem.

`height`
:   Altura da nova imagem.

`background`
:   A cor de fundo usada para esta imagem (como float).

`format`
:   Formato de imagem.

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
