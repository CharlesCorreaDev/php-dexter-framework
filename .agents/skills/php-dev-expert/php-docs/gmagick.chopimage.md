# Remove uma região de uma imagem e corta

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gmagick.chopimage.php

---

# Gmagick::chopimage

(PECL gmagick >= Unknown)

Gmagick::chopimage — Remove uma região de uma imagem e corta

### Descrição

public function **Gmagick::chopimage**(  
    [int](language.types.integer.md) `$width`,  
    [int](language.types.integer.md) `$height`,  
    [int](language.types.integer.md) `$x`,  
    [int](language.types.integer.md) `$y`  
): [Gmagick](class.gmagick.md)

Remove uma região de uma imagem e colapsa a imagem para ocupar a parte removida.

### Parâmetros

`width`
:   Largura da área cortada.

`height`
:   Altura da área cortada.

`x`
:   Coordenada X da origem da área cortada.

`y`
:   Coordenada Y da origem da área cortada.

### Valor Retornado

O objeto [Gmagick](class.gmagick.md) cortado.

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
