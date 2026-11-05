# Define a posição para saída de texto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ps-set-text-pos.php

---

# ps\_set\_text\_pos

(PECL ps >= 1.1.0)

ps\_set\_text\_pos — Define a posição para saída de texto

### Descrição

function **ps\_set\_text\_pos**([resource](language.types.resource.md) `$psdoc`, [float](language.types.float.md) `$x`, [float](language.types.float.md) `$y`): [bool](language.types.boolean.md)

Define a posição para a próxima saída de texto. Alternativamente, podem ser definidos os valores x
e y separadamente chamando [ps\_set\_value()](function.ps-set-value.md) e
escolhendo `textx` respectivamente `texty` como
o nome do valor.

Se a intenção for exibir texto em uma determinada posição, é mais conveniente
usar [ps\_show\_xy()](function.ps-show-xy.md) em vez de definir a posição do texto
e chamar [ps\_show()](function.ps-show.md).

### Parâmetros

`psdoc`
:   Identificador de recurso do arquivo postscript
    conforme retornado por [ps\_new()](function.ps-new.md).

`x`
:   Coordenada x da nova posição do texto.

`y`
:   Coordenada y da nova posição do texto.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Colocando texto em uma determinada posição**

```
<?php
$ps = ps_new();
if (!ps_open_file($ps, "text.ps")) {
  print "Não é possível abrir o arquivo PostScript\n";
  exit;
}

ps_set_info($ps, "Creator", "rectangle.php");
ps_set_info($ps, "Author", "Uwe Steinmann");
ps_set_info($ps, "Title", "Exemplo de posicionamento de texto");

ps_begin_page($ps, 596, 842);
$psfont = ps_findfont($ps, "Helvetica", "", 0);
ps_setfont($ps, $psfont, 8.0);
ps_show_xy($ps, "Algum texto em (100, 100)", 100, 100);

ps_set_value($ps, "textx", 100);
ps_set_value($ps, "texty", 120);
ps_show($ps, "Algum texto em (100, 120)");
ps_end_page($ps);

ps_delete($ps);
?>
```

### Veja também

- [ps\_set\_value()](function.ps-set-value.md) - Define certos valores
- [ps\_show()](function.ps-show.md) - Exibe texto

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
