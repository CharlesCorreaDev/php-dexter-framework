# Aplica um kernel de convolução personalizado à imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.convolveimage.php

---

# Imagick::convolveImage

(PECL imagick 2, PECL imagick 3)

Imagick::convolveImage — Aplica um kernel de convolução personalizado à imagem

### Descrição

public function **Imagick::convolveImage**([array](language.types.array.md) `$kernel`, [int](language.types.integer.md) `$channel` = Imagick::CHANNEL\_DEFAULT): [bool](language.types.boolean.md)

Aplica um kernel de convolução personalizado à imagem.

### Parâmetros

`kernel`
:   O kernel de convolução

`channel`
:   Forneça qualquer constante de canal válida para o modo de canal. Para
    aplicar a mais de um canal, combine constantes de tipo de canal usando
    operadores bit a bit. Consulte esta
    lista de [constantes de canal](imagick.constants.md#imagick.constants.channel).

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Erros/Exceções

Lança uma exceção ImagickException em caso de erro.

### Examples

**Exemplo #1 Exemplo de **Imagick::convolveImage()****

```
<?php
function convolveImage($imagePath, $bias, $kernelMatrix) {
    $imagick = new \Imagick(realpath($imagePath));
    //$edgeFindingKernel = [-1, -1, -1, -1, 8, -1, -1, -1, -1,];
    $imagick->setImageBias($bias * \Imagick::getQuantum());
    $imagick->convolveImage($kernelMatrix);
    header("Content-Type: image/jpg");
    echo $imagick->getImageBlob();
}

?>
```

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
