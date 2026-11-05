# Separa um conjunto vinculado de kernels e retorna um array de ImagickKernels

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagickkernel.separate.php

---

# ImagickKernel::separate

(PECL imagick >= 3.3.0)

ImagickKernel::separate — Separa um conjunto vinculado de kernels e retorna um array de ImagickKernels

### Descrição

public function **ImagickKernel::separate**(): [array](language.types.array.md)

Separa um conjunto vinculado de kernels e retorna um array de ImagickKernels.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

### Examples

**Exemplo #1 Exemplo de **ImagickKernel::separate()****

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
    $kernel->scale(4, \Imagick::NORMALIZE_KERNEL_VALUE);
    $diamondKernel = \ImagickKernel::fromBuiltIn(
        \Imagick::KERNEL_DIAMOND,
        "2"
    );

    $kernel->addKernel($diamondKernel);

    $kernelList = $kernel->separate();

    $output = '';
    $count = 0;
    foreach ($kernelList as $kernel) {
        $output .= "<br/>Kernel $count<br/>";
        $output .= renderKernelTable($kernel->getMatrix());
        $count++;
    }

    return $output;

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
