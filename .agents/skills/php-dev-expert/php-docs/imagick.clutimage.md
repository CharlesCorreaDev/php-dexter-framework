# Substitui cores na imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.clutimage.php

---

# Imagick::clutImage

(PECL imagick 2, PECL imagick 3)

Imagick::clutImage — Substitui cores na imagem

### Descrição

public function **Imagick::clutImage**([Imagick](class.imagick.md) `$lookup_table`, [int](language.types.integer.md) `$channel` = Imagick::CHANNEL\_DEFAULT): [bool](language.types.boolean.md)

Substitui cores na imagem a partir de uma tabela de pesquisa de cores.
O segundo parâmetro opcional serve para substituir cores em um canal específico. Este método estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.3.6 ou superior.

### Parâmetros

`lookup_table`
:   Objeto Imagick contendo a tabela de pesquisa de cores

`channel`
:   A constante de [tipo de canal](imagick.constants.md#imagick.constants.channel).
    Se não fornecida, os canais padrão são substituídos.

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Examples

**Exemplo #1 Usando **Imagick::clutImage()**:**

Substitui as cores na imagem a partir de uma tabela de pesquisa de cores.

```
<?php
$image = new Imagick('test.jpg');
$clut = new Imagick();
$clut->newImage(1, 1, new ImagickPixel('black'));
$image->clutImage($clut);
$image->writeImage('test_out.jpg');
?>
```

### Veja também

- [Imagick::adaptiveBlurImage()](imagick.adaptiveblurimage.md) - Adiciona filtro de desfoque adaptável à imagem
- [Imagick::motionBlurImage()](imagick.motionblurimage.md) - Simula desfoque de movimento
- [Imagick::radialBlurImage()](imagick.radialblurimage.md) - Desfoca uma imagem de forma radial

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
