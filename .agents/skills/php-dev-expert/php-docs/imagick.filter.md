# Aplica um kernel de convolução personalizado à imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.filter.php

---

# Imagick::filter

(PECL imagick 3 >= 3.3.0)

Imagick::filter — Aplica um kernel de convolução personalizado à imagem

**Aviso**

Esta função foi *DESCONTINUADA* a partir da Imagick 3.4.4. O uso desta função é fortemente desencorajado.

### Descrição

public function **Imagick::filter**([ImagickKernel](class.imagickkernel.md) `$ImagickKernel`, [int](language.types.integer.md) `$channel` = Imagick::CHANNEL\_UNDEFINED): [bool](language.types.boolean.md)

Aplica um kernel de convolução personalizado à imagem.

### Parâmetros

`ImagickKernel`
:   Uma instância de ImagickKernel que representa um único kernel ou uma série vinculada de kernels.

`channel`
:   Fornece qualquer constante de canal que seja válida no modo de canal. Para aplicar a mais de um canal, [constantes de canal](imagick.constants.md#imagick.constants.channel) devem ser combinadas usando operadores bit a bit. O padrão é **`Imagick::CHANNEL_DEFAULT`**. Consulte esta lista de [constantes de canal](imagick.constants.md#imagick.constants.channel)

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Examples

**Exemplo #1 Exemplo de **Imagick::filter()****

```
<?php
function filter($imagePath) {
    $imagick = new \Imagick(realpath($imagePath));
    $matrix = [
        [-1, 0, -1],
        [0,  5,  0],
        [-1, 0, -1],
    ];

    $kernel = \ImagickKernel::fromMatrix($matrix);
    $strength = 0.5;
    $kernel->scale($strength, \Imagick::NORMALIZE_KERNEL_VALUE);
    $kernel->addUnityKernel(1 - $strength);

    $imagick->filter($kernel);
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
