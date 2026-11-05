# Verifica a distância entre esta cor e uma outra

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagickpixel.issimilar.php

---

# ImagickPixel::isSimilar

(PECL imagick 2, PECL imagick 3)

ImagickPixel::isSimilar — Verifica a distância entre esta cor e uma outra

### Descrição

public function **ImagickPixel::isSimilar**([ImagickPixel](class.imagickpixel.md) `$color`, [float](language.types.float.md) `$fuzz`): [bool](language.types.boolean.md)

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

Verifica a distância entre a cor descrita por este objeto
ImagickPixel e a do objeto fornecido, traçando seus valores RGB
no cubo de cores. Se a distância entre os dois pontos for menor que
o valor de fuzz fornecido, as cores serão semelhantes.
Preterida em favor de [ImagickPixel::isPixelSimilar()](imagickpixel.ispixelsimilar.md).

### Parâmetros

`color`
:   O objeto ImagickPixel para comparar com este objeto.

`fuzz`
:   A distância máxima dentro da qual estas cores serão consideradas similares.
    O máximo teórico para este valor é a raiz quadrada de três
    (1.732).

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Examples

**Exemplo #1 Exemplo de **ImagickPixel::isSimilar()****

```
<?php
        // Os testes abaixo são escritos com a distância máxima expressa como 255,
        // portanto é necessário dimensioná-los pela raiz quadrada de 3 - o comprimento diagonal
        // de um cubo unitário.
        $root3 = 1.732050807568877;

        $tests = array(
            ['rgb(245, 0, 0)',      'rgb(255, 0, 0)',   9 / $root3,         false,],
            ['rgb(245, 0, 0)',      'rgb(255, 0, 0)',  10 / $root3,         true,],
            ['rgb(0, 0, 0)',        'rgb(7, 7, 0)',     9 / $root3,         false,],
            ['rgb(0, 0, 0)',        'rgb(7, 7, 0)',    10 / $root3,         true,],
            ['rgba(0, 0, 0, 1)',    'rgba(7, 7, 0, 1)', 9 / $root3,         false,],
            ['rgba(0, 0, 0, 1)',    'rgba(7, 7, 0, 1)',    10 / $root3,     true,],
            ['rgb(128, 128, 128)',  'rgb(128, 128, 120)',   7 / $root3,     false,],
            ['rgb(128, 128, 128)',  'rgb(128, 128, 120)',   8 / $root3,     true,],
            ['rgb(0, 0, 0)',        'rgb(255, 255, 255)',   254.9,          false,],
            ['rgb(0, 0, 0)',        'rgb(255, 255, 255)',   255,            true,],
            ['rgb(255, 0, 0)',      'rgb(0, 255, 255)',     254.9,          false,],
            ['rgb(255, 0, 0)',      'rgb(0, 255, 255)',     255,            true,],
            ['black',               'rgba(0, 0, 0)',        0.0,            true],
            ['black',               'rgba(10, 0, 0, 1.0)',  10.0 / $root3,  true],);

        $output = "<table width='100%' class='infoTable'><thead>
                <tr>
                <th>
                Cor 1
                </th>
                <th>
                Cor 2
                </th>
                <th>
                    Distância de teste * 255
                </th>
                <th>
                    Está dentro da distância
                </th>
                </tr>
        </thead>";

        $output .= "<tbody>";

        foreach ($tests as $testInfo) {
            $color1 = $testInfo[0];
            $color2 = $testInfo[1];
            $distance = $testInfo[2];
            $expectation = $testInfo[3];
            $testDistance = ($distance / 255.0);

            $color1Pixel = new \ImagickPixel($color1);
            $color2Pixel = new \ImagickPixel($color2);

            $isSimilar = $color1Pixel->isPixelSimilar($color2Pixel, $testDistance);

            if ($isSimilar !== $expectation) {
                echo "Distância de teste falhou. Cor [$color1] comparada com cor [$color2] não está dentro da distância $testDistance, FALHOU.".NL;
            }

            $layout = "<tr>
                <td>%s</td>
                <td>%s</td>
                <td>%s</td>
                <td style='text-align: center;'>%s</td>
            </tr>";

            $output .= sprintf(
                $layout,
                $color1,
                $color2,
                $distance,
                $isSimilar ? 'sim' : 'não'
            );
        }

        $output .= "</tbody></table>";

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
