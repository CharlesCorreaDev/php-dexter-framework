# Adiciona um Kernel Unity à lista de kernels

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagickkernel.addunitykernel.php

---

# ImagickKernel::addUnityKernel

(PECL imagick >= 3.3.0)

ImagickKernel::addUnityKernel — Adiciona um Kernel Unity à lista de kernels

### Descrição

public function **ImagickKernel::addUnityKernel**([float](language.types.float.md) `$scale`): [void](language.types.void.md)

Adiciona uma determinada quantidade do Kernel de Convolução 'Unity' ao Kernel pré-escalado
e normalizado fornecido. Na verdade, isso adiciona essa quantidade da imagem original
ao kernel de convolução resultante. O efeito resultante é converter os kernels
definidos em kernels desfocados suaves combinados, ou em kernels nítidos.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

### Examples

**Exemplo #1 **ImagickKernel::addUnityKernel()****

```
<?php

    function renderKernelTable($matrix) {
        $output = "<table class='infoTable'>";

        foreach ($matrix as $row) {
            $output .= "<tr>";
            foreach ($row as $cell) {
                $output .= "<td style='text-align:left'>";
                if ($cell === false) {
                    $output .= "false";
                }
                else {
                    $output .= round($cell, 3);
                }
                $output .= "</td>";
            }
            $output .= "</tr>";
        }

        $output .= "</table>";

        return $output;
    }

    $matrix = [
        [-1, 0, -1],
        [ 0, 4,  0],
        [-1, 0, -1],
    ];

    $kernel = \ImagickKernel::fromMatrix($matrix);
    $kernel->scale(1, \Imagick::NORMALIZE_KERNEL_VALUE);
    $output = "Before adding unity kernel: <br/>";
    $output .= renderKernelTable($kernel->getMatrix());
    $kernel->addUnityKernel(0.5);
    $output .= "After adding unity kernel: <br/>";
    $output .= renderKernelTable($kernel->getMatrix());

    $kernel->scale(1, \Imagick::NORMALIZE_KERNEL_VALUE);
    $output .= "After renormalizing kernel: <br/>";
    $output .= renderKernelTable($kernel->getMatrix());

    echo $output;

?>
```

**Exemplo #2 Exemplo de **ImagickKernel::addUnityKernel()****

```
<?php
function addUnityKernel($imagePath) {

    $matrix = [
        [-1, 0, -1],
        [ 0, 4,  0],
        [-1, 0, -1],
    ];

    $kernel = ImagickKernel::fromMatrix($matrix);

    $kernel->scale(4, \Imagick::NORMALIZE_KERNEL_VALUE);
    $kernel->addUnityKernel(0.5);

    $imagick = new \Imagick(realpath($imagePath));
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
