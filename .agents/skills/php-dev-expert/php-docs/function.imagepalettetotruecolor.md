# Converte uma imagem baseada em paleta para cores verdadeiras

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imagepalettetotruecolor.php

---

# imagepalettetotruecolor

(PHP 5 >= 5.5.0, PHP 7, PHP 8)

imagepalettetotruecolor — Converte uma imagem baseada em paleta para cores verdadeiras

### Descrição

function **imagepalettetotruecolor**([GdImage](class.gdimage.md) `$image`): [bool](language.types.boolean.md)

Converte uma imagem baseada em paleta, criada por funções como
[imagecreate()](function.imagecreate.md), para uma imagem em cores verdadeiras, como
[imagecreatetruecolor()](function.imagecreatetruecolor.md).

### Parâmetros

`image`
:   Um objeto [GdImage](class.gdimage.md), retornado por uma das funções de criação de imagem,
    como [imagecreatetruecolor()](function.imagecreatetruecolor.md).

### Valor Retornado

Retorna **`true`** se a conversão for concluída, ou se a imagem de origem já
estiver em cores verdadeiras, caso contrário é retornado **`false`**.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `image` agora espera uma instância de [GdImage](class.gdimage.md); anteriormente, um [resource](language.types.resource.md) `gd` válido era esperado. |

### Examples

**Exemplo #1
Converte qualquer objeto de imagem para cores verdadeiras**

```
<?php
// Compatibilidade com versões anteriores
if(!function_exists('imagepalettetotruecolor'))
{
    function imagepalettetotruecolor(&$src)
    {
        if(imageistruecolor($src))
        {
            return(true);
        }

        $dst = imagecreatetruecolor(imagesx($src), imagesy($src));

        imagecopy($dst, $src, 0, 0, 0, 0, imagesx($src), imagesy($src));

        $src = $dst;

        return(true);
    }
}

// Closure de apoio
$typeof = function() use($im)
{
    echo 'typeof($im) = ' . (imageistruecolor($im) ? 'cores verdadeiras' : 'paleta'), PHP_EOL;
};

// Cria uma imagem baseada em paleta
$im = imagecreate(100, 100);
$typeof();

// Converte para cores verdadeiras
imagepalettetotruecolor($im);
$typeof();
?>
```

O exemplo acima produzirá:

```
typeof($im) = paleta
typeof($im) = cores verdadeiras
```

### Veja também

- [imagecreatetruecolor()](function.imagecreatetruecolor.md) - Cria uma nova imagem em cores verdadeiras
- [imageistruecolor()](function.imageistruecolor.md) - Descobre se uma imagem está em cores verdadeiras

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
