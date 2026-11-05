# Dimensiona uma lista de kernel pela quantidade especificada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagickkernel.scale.php

---

# ImagickKernel::scale

(PECL imagick >= 3.3.0)

ImagickKernel::scale — Dimensiona uma lista de kernel pela quantidade especificada

### Descrição

public function **ImagickKernel::scale**([float](language.types.float.md) `$scale`, [int](language.types.integer.md) `$normalizeFlag` = ?): [void](language.types.void.md)

Dimensiona a lista de kernel fornecida de acordo com a quantidade especificada, com ou sem
normalização da soma dos valores do kernel (de acordo com as opções fornecidas).
O comportamento exato desta função depende do tipo de normalização usado.
Consulte http://www.imagemagick.org/api/morphology.php#ScaleKernelInfo para obter detalhes.

### Parâmetros

`scale`

`normalizeFlag`
:   - Imagick::NORMALIZE\_KERNEL\_NONE
    - Imagick::NORMALIZE\_KERNEL\_VALUE
    - Imagick::NORMALIZE\_KERNEL\_CORRELATE
    - Imagick::NORMALIZE\_KERNEL\_PERCENT

### Valor Retornado

### Examples

**Exemplo #1 Exemplo de **ImagickKernel::scale()****

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

    $output = "";

    $matrix = [
        [-1, 0, -1],
        [ 0, 4,  0],
        [-1, 0, -1],
    ];

    $kernel = \ImagickKernel::fromMatrix($matrix);
    $kernelClone = clone $kernel;

    $output .= "Inicia kernel<br/>";
    $output .= renderKernelTable($kernel->getMatrix());

    $output .= "Dimensionando com NORMALIZE_KERNEL_VALUE<br/>";
    $kernel->scale(2, \Imagick::NORMALIZE_KERNEL_VALUE);
    $output .= renderKernelTable($kernel->getMatrix());

    $kernel = clone $kernelClone;
    $output .= "Dimensionando por porcentagem<br/>";
    $kernel->scale(2, \Imagick::NORMALIZE_KERNEL_PERCENT);
    $output .= renderKernelTable($kernel->getMatrix());

    $matrix2 = [
        [-1, -1, 1],
        [ -1, false,  1],
        [1, 1, 1],
    ];

    $kernel = \ImagickKernel::fromMatrix($matrix2);
    $output .= "Dimensionando por correlação<br/>";
    $kernel->scale(1, \Imagick::NORMALIZE_KERNEL_CORRELATE);
    $output .= renderKernelTable($kernel->getMatrix());

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
