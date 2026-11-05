# Define o tamanho e o deslocamento do objeto Imagick

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.setsizeoffset.php

---

# Imagick::setSizeOffset

(PECL imagick 2, PECL imagick 3)

Imagick::setSizeOffset — Define o tamanho e o deslocamento do objeto Imagick

### Descrição

public function **Imagick::setSizeOffset**([int](language.types.integer.md) `$columns`, [int](language.types.integer.md) `$rows`, [int](language.types.integer.md) `$offset`): [bool](language.types.boolean.md)

Define o tamanho e o deslocamento do objeto Imagick. Deve-se definir estes itens antes da leitura de um
formato de imagem bruto, como RGB, escala de cinza ou CMYK.
Este método estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.2.9 ou superior.

### Parâmetros

`columns`
:   A largura em pixels.

`rows`
:   A altura em pixels.

`offset`
:   O deslocamento da imagem.

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
