# Altera o valor da cor de qualquer pixel que corresponda ao alvo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.opaquepaintimage.php

---

# Imagick::opaquePaintImage

(PECL imagick 2 >= 2.3.0, PECL imagick 3)

Imagick::opaquePaintImage — Altera o valor da cor de qualquer pixel que corresponda ao alvo

### Descrição

public function **Imagick::opaquePaintImage**(  
    [mixed](language.types.mixed.md) `$target`,  
    [mixed](language.types.mixed.md) `$fill`,  
    [float](language.types.float.md) `$fuzz`,  
    [bool](language.types.boolean.md) `$invert`,  
    [int](language.types.integer.md) `$channel` = Imagick::CHANNEL\_DEFAULT  
): [bool](language.types.boolean.md)

Altera qualquer pixel que corresponda à cor definida pelo preenchimento.
Este método estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.3.8 ou superior.

### Parâmetros

`target`
:   Objeto ImagickPixel ou uma string contendo a cor a ser alterada.

`fill`
:   A cor de substituição.

`fuzz`
:   A quantidade de fuzz. Por exemplo, definir fuzz como 10 e a cor vermelha nas intensidades de 100 e 102, respectivamente, agora são interpretadas como a mesma cor.

`invert`
:   Se **`true`**, pinta qualquer pixel que não corresponda à cor alvo.

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
