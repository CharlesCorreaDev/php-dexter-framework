# Desenha uma linha

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ps-lineto.php

---

# ps\_lineto

(PECL ps >= 1.1.0)

ps\_lineto — Desenha uma linha

### Descrição

function **ps\_lineto**([resource](language.types.resource.md) `$psdoc`, [float](language.types.float.md) `$x`, [float](language.types.float.md) `$y`): [bool](language.types.boolean.md)

Adiciona uma linha reta do ponto atual às coordenadas fornecidas para o
caminho atual. Use [ps\_moveto()](function.ps-moveto.md) para definir o ponto inicial
da linha.

### Parâmetros

`psdoc`
:   Identificador de recurso do arquivo postscript
    conforme retornado por [ps\_new()](function.ps-new.md).

`x`
:   Coordenada x do ponto final da linha.

`y`
:   Coordenada y do ponto final da linha.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Desenhando um retângulo**

```
<?php
$ps = ps_new();
if (!ps_open_file($ps, "retangulo.ps")) {
  print "Não é possível abrir o arquivo PostScript\n";
  exit;
}

ps_set_info($ps, "Creator", "retangulo.php");
ps_set_info($ps, "Author", "Uwe Steinmann");
ps_set_info($ps, "Title", "Exemplo de ps_lineto");

ps_begin_page($ps, 596, 842);
ps_moveto($ps, 100, 100);
ps_lineto($ps, 100, 200);
ps_lineto($ps, 200, 200);
ps_lineto($ps, 200, 100);
ps_lineto($ps, 100, 100);
ps_stroke($ps);
ps_end_page($ps);

ps_delete($ps);
?>
```

### Veja também

- [ps\_moveto()](function.ps-moveto.md) - Define o ponto atual

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
