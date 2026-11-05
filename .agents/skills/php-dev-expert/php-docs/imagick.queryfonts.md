# Retorna as fontes configuradas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.queryfonts.php

---

# Imagick::queryFonts

(PECL imagick 2, PECL imagick 3)

Imagick::queryFonts — Retorna as fontes configuradas

### Descrição

public static function **Imagick::queryFonts**([string](language.types.string.md) `$pattern` = "\*"): [array](language.types.array.md)

Retorna as fontes configuradas.

### Parâmetros

`pattern`
:   O padrão de consulta

### Valor Retornado

Retorna um array contendo as fontes configuradas.

### Erros/Exceções

Lança uma exceção ImagickException em caso de erro.

### Examples

**Exemplo #1 Exemplo de **Imagick::queryFonts()****

```
<?php
    $output = '';
    $output .= "As fontes que correspondem a 'Helvetica*' são:<br/>";

    $fontList = \Imagick::queryFonts("Helvetica*");

    foreach ($fontList as $fontName) {
        $output .= '<li>'. $fontName."</li>";
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
