# Obtém a matriz 2D de valores usada neste kernel

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagickkernel.getmatrix.php

---

# ImagickKernel::getMatrix

(PECL imagick >= 3.3.0)

ImagickKernel::getMatrix — Obtém a matriz 2D de valores usada neste kernel

### Descrição

public function **ImagickKernel::getMatrix**(): [array](language.types.array.md)

Obtém a matriz 2D de valores usada neste kernel. Os elementos são
float para elementos usados ​​ou 'false' se o elemento deve ser ignorado.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Uma matriz (array 2D) dos valores que representam o kernel.

### Examples

**Exemplo #1 Exemplo de **ImagickKernel::getMatrix()****

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

    $output = "O nome do kernel integrado 'ring' com parâmetros de '2,3.5':<br/>";
    $kernel = \ImagickKernel::fromBuiltIn(
        \Imagick::KERNEL_RING,
        "2,3.5"
    );
    $matrix = $kernel->getMatrix();
    $output .= renderKernelTable($matrix);

    echo $output;

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
