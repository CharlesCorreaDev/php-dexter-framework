# Adiciona filtro de desfoque adaptável à imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.adaptiveblurimage.php

---

# Imagick::adaptiveBlurImage

(PECL imagick 2, PECL imagick 3)

Imagick::adaptiveBlurImage — Adiciona filtro de desfoque adaptável à imagem

### Descrição

public function **Imagick::adaptiveBlurImage**([float](language.types.float.md) `$radius`, [float](language.types.float.md) `$sigma`, [int](language.types.integer.md) `$channel` = Imagick::CHANNEL\_DEFAULT): [bool](language.types.boolean.md)

Adiciona um filtro de desfoque adaptável à imagem. A intensidade de um desfoque adaptativo
diminui drasticamente na borda da imagem, enquanto um desfoque
padrão é uniforme em toda a imagem. Este método estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.2.9 ou superior.

### Parâmetros

`radius`
:   O raio do desfoque gaussiano, em pixels, sem contar o pixel central.
    Forneça um valor 0 e o raio será escolhido automagicamente.

`sigma`
:   O desvio padrão do desfoque gaussiano, em pixels.

`channel`
:   Fornece qualquer constante de canal que seja válida no modo de canal. Para aplicar a mais de um canal, [constantes de canal](imagick.constants.md#imagick.constants.channel) devem ser combinadas usando operadores bit a bit. O padrão é **`Imagick::CHANNEL_DEFAULT`**. Consulte esta lista de [constantes de canal](imagick.constants.md#imagick.constants.channel)

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Erros/Exceções

Lança uma exceção ImagickException em caso de erro.

### Examples

**Exemplo #1 Usando **Imagick::adaptiveBlurImage()**:**

Desfoca uma imagem de forma adaptativa e depois exibe-a no navegador.

```
<?php

header('Content-type: image/jpeg');

$image = new Imagick('test.jpg');

$image->adaptiveBlurImage(5,3);
echo $image;

?>
```

O exemplo acima produzirá
algo semelhante a:

![Saída do exemplo : Usando Imagick::adaptiveBlurImage()](images/c0d23d2d6769e53e24a1b3136c064577-adaptiveBlurImage.gif)

### Veja também

- [Imagick::blurImage()](imagick.blurimage.md) - Adiciona filtro de desfoque à imagem
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
