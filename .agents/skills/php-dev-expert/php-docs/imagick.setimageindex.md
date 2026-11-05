# Define a posição do iterador

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.setimageindex.php

---

# Imagick::setImageIndex

(PECL imagick 2, PECL imagick 3)

Imagick::setImageIndex — Define a posição do iterador

**Aviso**

Esta função foi *DESCONTINUADA* a partir da Imagick 3.4.4. O uso desta função é fortemente desencorajado.

### Descrição

public function **Imagick::setImageIndex**([int](language.types.integer.md) `$index`): [bool](language.types.boolean.md)

Define o iterador para a posição na lista de imagens especificada com o parâmetro
index.

Este método foi preterido em favor do
[Imagick::setIteratorIndex()](imagick.setiteratorindex.md).

### Parâmetros

`index`
:   A posição na qual o iterador será definido.

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
