# Define a resolução da imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.setresolution.php

---

# Imagick::setResolution

(PECL imagick 2, PECL imagick 3)

Imagick::setResolution — Define a resolução da imagem

### Descrição

public function **Imagick::setResolution**([float](language.types.float.md) `$x_resolution`, [float](language.types.float.md) `$y_resolution`): [bool](language.types.boolean.md)

Define a resolução da imagem.

### Parâmetros

`x_resolution`
:   A resolução horizontal.

`y_resolution`
:   A resolução vertical.

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Notas

**Imagick::setResolution()** precisa ser chamado antes
do carregamento ou da criação de uma imagem.

### Veja também

- [Imagick::setImageResolution()](imagick.setimageresolution.md) - Define a resolução da imagem
- [Imagick::getImageResolution()](imagick.getimageresolution.md) - Obtém a resolução X e Y da imagem

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
