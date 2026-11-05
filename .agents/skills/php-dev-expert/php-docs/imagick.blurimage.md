# Adiciona filtro de desfoque à imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.blurimage.php

---

# Imagick::blurImage

(PECL imagick 2, PECL imagick 3)

Imagick::blurImage — Adiciona filtro de desfoque à imagem

### Descrição

public function **Imagick::blurImage**([float](language.types.float.md) `$radius`, [float](language.types.float.md) `$sigma`, [int](language.types.integer.md) `$channel` = ?): [bool](language.types.boolean.md)

Adiciona filtro de desfoque à imagem. Terceiro parâmetro opcional para desfocar um canal
específico.

### Parâmetros

`radius`
:   Raio de desfoque

`sigma`
:   Desvio padrão

`channel`
:   A constante de [tipo de canal](imagick.constants.md#imagick.constants.channel).
    Quando não fornecida, todos os canais são desfocados.

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Erros/Exceções

Lança uma exceção ImagickException em caso de erro.

### Examples

**Exemplo #1 Usando **Imagick::blurImage()**:**

Desfoca uma image e mostra no navegador.

```
<?php

header('Content-type: image/jpeg');

$image = new Imagick('test.jpg');

$image->blurImage(5,3);
echo $image;

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
