# Define a aparência de uma linha tracejada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ps-setpolydash.php

---

# ps\_setpolydash

(PECL ps >= 1.1.0)

ps\_setpolydash — Define a aparência de uma linha tracejada

### Descrição

function **ps\_setpolydash**([resource](language.types.resource.md) `$psdoc`, [float](language.types.float.md) `$arr`): [bool](language.types.boolean.md)

Define o comprimento das partes preta e branca de uma linha tracejada.
**ps\_setpolydash()** é usada para definir padrões de traços
mais complexos.

### Parâmetros

`psdoc`
:   Identificador de recurso do arquivo postscript
    conforme retornado por [ps\_new()](function.ps-new.md).

`arr`
:   `arr` é uma lista de elementos de comprimento alternados para
    as partes preta e branca.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Desenhando uma linha tracejada**

```
<?php
$ps = ps_new();
if (!ps_open_file($ps, "polydash.ps")) {
   print "Não é possível abrir o arquivo PostScript\n";
     exit;
}

ps_set_info($ps, "Creator", "polydash.php");
ps_set_info($ps, "Author", "Uwe Steinmann");
ps_set_info($ps, "Title", "Exemplo de linha tracejada");

ps_begin_page($ps, 596, 842);
ps_setpolydash($ps, array(10, 5, 2, 5));
ps_moveto($ps, 100, 100);
ps_lineto($ps, 200, 200);
ps_stroke($ps);
ps_end_page($ps);

ps_delete($ps);
?>
```

Este exemplo desenha uma linha com 10 pontos de comprimento e 2 pontos de distância, e
intervalos de 5 pontos entre elas.

### Veja também

- [ps\_setdash()](function.ps-setdash.md) - Define a aparência de uma linha tracejada

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
