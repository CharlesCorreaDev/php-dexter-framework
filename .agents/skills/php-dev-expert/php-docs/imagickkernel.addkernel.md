# Anexa outro kernel a uma lista de kernels

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagickkernel.addkernel.php

---

# ImagickKernel::addKernel

(PECL imagick >= 3.3.0)

ImagickKernel::addKernel — Anexa outro kernel a uma lista de kernels

### Descrição

public function **ImagickKernel::addKernel**([ImagickKernel](class.imagickkernel.md) `$ImagickKernel`): [void](language.types.void.md)

Anexa outro kernel a este kernel para permitir que ambos sejam aplicados em uma única morfologia ou função de filtro. Retorna o novo kernel combinado.

### Parâmetros

`ImagickKernel`

### Valor Retornado

### Examples

**Exemplo #1 Exemplo de **ImagickKernel::addKernel()****

```
<?php
function addKernel($imagePath) {
    $matrix1 = [
        [-1, -1, -1],
        [ 0,  0,  0],
        [ 1,  1,  1],
    ];

    $matrix2 = [
        [-1,  0,  1],
        [-1,  0,  1],
        [-1,  0,  1],
    ];

    $kernel1 = ImagickKernel::fromMatrix($matrix1);
    $kernel2 = ImagickKernel::fromMatrix($matrix2);
    $kernel1->addKernel($kernel2);

    $imagick = new \Imagick(realpath($imagePath));
    $imagick->filter($kernel1);
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
