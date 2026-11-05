# Interpreta um bloco IPTC binário em etiquetas simples

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.iptcparse.php

---

# iptcparse

(PHP 4, PHP 5, PHP 7, PHP 8)

iptcparse — Interpreta um bloco IPTC binário em etiquetas simples

### Descrição

function **iptcparse**([string](language.types.string.md) `$iptc_block`): [array](language.types.array.md)|[false](language.types.singleton.md)

Interpreta um bloco [» IPTC](https://www.iptc.org/) em etiquetas simples.

### Parâmetros

`iptc_block`
:   Um bloco binário IPTC.

### Valor Retornado

Retorna um array usando o marcador de etiquetas como um índice e o valor como
o valor. Retorna **`false`** em caso de erro ou se nenhum dado IPTC for encontrado.

### Examples

**Exemplo #1 iptcparse() usado junto com [getimagesize()](function.getimagesize.md)**

```
<?php
$size = getimagesize('./test.jpg', $info);
if(isset($info['APP13']))
{
    $iptc = iptcparse($info['APP13']);
    var_dump($iptc);
}
?>
```

### Notas

> **Nota**:
>
> Esta função não requer a biblioteca de imagens GD.

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
