# Retorna formatos suportados pelo Imagick

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.queryformats.php

---

# Imagick::queryFormats

(PECL imagick 2, PECL imagick 3)

Imagick::queryFormats — Retorna formatos suportados pelo Imagick

### Descrição

public static function **Imagick::queryFormats**([string](language.types.string.md) `$pattern` = "\*"): [array](language.types.array.md)

Retorna formatos suportados pelo Imagick.

### Parâmetros

`pattern`

### Valor Retornado

Retorna um array contendo os formatos suportados pelo Imagick.

### Erros/Exceções

Lança uma exceção ImagickException em caso de erro.

### Examples

**Exemplo #1 Exemplo de **Imagick::queryFormats()****

```
<?php
    function render() {
        $output = "";
        $input = \Imagick::queryformats();
        $columns = 6;

        $output .= "<table border='2'>";

        for ($i=0; $i < count($input); $i += $columns) {
            $output .= "<tr>";
            for ($c=0; $c<$columns; $c++) {
                $output .= "<td>";
                if (($i + $c) <  count($input)) {
                    $output .= $input[$i + $c];
                }
                $output .= "</td>";
            }
            $output .= "</tr>";
        }

        $output .= "</table>";

        return $output;
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
