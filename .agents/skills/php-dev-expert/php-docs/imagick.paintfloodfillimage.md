# Altera o valor da cor de qualquer pixel que corresponda ao alvo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.paintfloodfillimage.php

---

# Imagick::paintFloodfillImage

(PECL imagick 2 >= 2.1.0, PECL imagick 3)

Imagick::paintFloodfillImage — Altera o valor da cor de qualquer pixel que corresponda ao alvo

**Aviso**

Esta função foi *DESCONTINUADA* a partir da Imagick 3.4.4. O uso desta função é fortemente desencorajado.

### Descrição

public function **Imagick::paintFloodfillImage**(  
    [mixed](language.types.mixed.md) `$fill`,  
    [float](language.types.float.md) `$fuzz`,  
    [mixed](language.types.mixed.md) `$bordercolor`,  
    [int](language.types.integer.md) `$x`,  
    [int](language.types.integer.md) `$y`,  
    [int](language.types.integer.md) `$channel` = Imagick::CHANNEL\_DEFAULT  
): [bool](language.types.boolean.md)

Altera o valor da cor de qualquer pixel que corresponda ao alvo e seja um
vizinho imediato. A partir do ImageMagick 6.3.8 este método foi preterido
e [Imagick::floodfillPaintImage()](imagick.floodfillpaintimage.md) deve ser usado em seu lugar.

### Parâmetros

`fill`
:   Objeto ImagickPixel ou uma string contendo a cor de preenchimento.

`fuzz`
:   A quantidade de fuzz. Por exemplo, definir fuzz como 10 e a cor vermelha em
    intensidades de 100 e 102, respectivamente, agora são interpretadas como a
    mesma cor para fins de preenchimento.

`bordercolor`
:   Objeto ImagickPixel ou uma string contendo a cor da borda.

`x`
:   Coordenada X da posição inicial do preenchimento.

`y`
:   Coordenada Y da posição inicial do preenchimento.

`channel`
:   Fornece qualquer constante de canal que seja válida no modo de canal. Para aplicar a mais de um canal, [constantes de canal](imagick.constants.md#imagick.constants.channel) devem ser combinadas usando operadores bit a bit. O padrão é **`Imagick::CHANNEL_DEFAULT`**. Consulte esta lista de [constantes de canal](imagick.constants.md#imagick.constants.channel)

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
