# Adiciona nova imagem à lista de imagens de objetos Imagick

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.addimage.php

---

# Imagick::addImage

(PECL imagick 2, PECL imagick 3)

Imagick::addImage — Adiciona nova imagem à lista de imagens de objetos Imagick

### Descrição

public function **Imagick::addImage**([Imagick](class.imagick.md) `$source`): [bool](language.types.boolean.md)

Adiciona uma nova imagem ao objeto Imagick a partir da posição atual do objeto de origem.
Após a operação, a posição do iterador é movida para o final da lista.

### Parâmetros

`source`
:   O objeto Imagick de origem.

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
