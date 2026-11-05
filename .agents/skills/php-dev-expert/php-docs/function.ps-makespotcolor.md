# Cria cor especial

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ps-makespotcolor.php

---

# ps\_makespotcolor

(PECL ps >= 1.1.0)

ps\_makespotcolor — Cria cor especial

### Descrição

function **ps\_makespotcolor**([resource](language.types.resource.md) `$psdoc`, [string](language.types.string.md) `$name`, [int](language.types.integer.md) `$reserved` = 0): [int](language.types.integer.md)

Cria uma cor especial a partir da cor de preenchimento atual. A cor de preenchimento deve ser
definida no espaço de cores RGB, CMYK ou Gray. O nome da cor especial pode ser um
nome arbitrário. Uma cor especial pode ser definida como qualquer cor com
[ps\_setcolor()](function.ps-setcolor.md). Quando o documento não é impresso,
mas exibido por um visualizador PostScript, a cor fornecida no
espaço de cores especificado é usada.

### Parâmetros

`psdoc`
:   Identificador de recurso do arquivo postscript
    conforme retornado por [ps\_new()](function.ps-new.md).

`name`
:   Nome da cor especial, por exemplo, Pantone 5565.

### Valor Retornado

O ID da nova cor especial ou 0 em caso de erro.

### Examples

**Exemplo #1 Criando e usando uma cor especial**

```
<?php
$ps = ps_new();
if (!ps_open_file($ps, "spotcolor.ps")) {
  print "Não é possível abrir o arquivo PostScript\n";
  exit;
}

ps_set_info($ps, "Creator", "spotcolor.php");
ps_set_info($ps, "Author", "Uwe Steinmann");
ps_set_info($ps, "Title", "Exemplo de ps_makespotcolor");

ps_begin_page($ps, 596, 842);
ps_setcolor($ps, "fill", "cmyk", 0.37, 0.0, 0.34, 0.34);
$spotcolor = ps_makespotcolor($ps, "PANTONE 5565 C", 0);
ps_setcolor($ps, "fill", "spot", $spotcolor, 0.5, 0.0, 0.0);
ps_moveto($ps, 100, 100);
ps_lineto($ps, 100, 200);
ps_lineto($ps, 200, 200);
ps_lineto($ps, 200, 100);
ps_lineto($ps, 100, 100);
ps_fill($ps);
ps_end_page($ps);

ps_delete($ps);
?>
```

Este exemplo cria a cor especial "PANTONE 5565 C", que
é um verde mais escuro (oliva) e preenche um retângulo com 50% de intensidade.

### Veja também

- [ps\_setcolor()](function.ps-setcolor.md) - Define a cor atual

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
