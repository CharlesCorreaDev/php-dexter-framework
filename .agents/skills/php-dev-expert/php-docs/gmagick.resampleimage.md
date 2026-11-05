# Reamostra imagem para a resolução desejada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gmagick.resampleimage.php

---

# Gmagick::resampleimage

(PECL gmagick >= Unknown)

Gmagick::resampleimage — Reamostra imagem para a resolução desejada

### Descrição

public function **Gmagick::resampleimage**(  
    [float](language.types.float.md) `$xResolution`,  
    [float](language.types.float.md) `$yResolution`,  
    [int](language.types.integer.md) `$filter`,  
    [float](language.types.float.md) `$blur`  
): [Gmagick](class.gmagick.md)

Reamostra imagem para a resolução desejada.

### Parâmetros

`xResolution`
:   A nova resolução X da imagem.

`yResolution`
:   A nova resolução Y da imagem.

`filter`
:   Filtro de imagem a ser usado.

`blur`
:   O fator de desfoque onde maior que 1 é desfocado, menor que 1 é nítido.

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
