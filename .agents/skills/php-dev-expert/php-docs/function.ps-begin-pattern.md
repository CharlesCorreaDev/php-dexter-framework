# Inicia um novo padrão

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ps-begin-pattern.php

---

# ps\_begin\_pattern

(PECL ps >= 1.2.0)

ps\_begin\_pattern — Inicia um novo padrão

### Descrição

function **ps\_begin\_pattern**(  
    [resource](language.types.resource.md) `$psdoc`,  
    [float](language.types.float.md) `$width`,  
    [float](language.types.float.md) `$height`,  
    [float](language.types.float.md) `$xstep`,  
    [float](language.types.float.md) `$ystep`,  
    [int](language.types.integer.md) `$painttype`  
): [int](language.types.integer.md)|[false](language.types.singleton.md)

Inicia um novo padrão. Um padrão é como uma página contendo, por exemplo, um desenho
que pode ser usado para preencher áreas. É usado como uma cor, chamando
[ps\_setcolor()](function.ps-setcolor.md) e definindo o parâmetro de espaço de cores com
o valor `pattern`.

### Parâmetros

`psdoc`
:   Identificador de recurso do arquivo postscript
    conforme retornado por [ps\_new()](function.ps-new.md).

`width`
:   A largura do padrão em pixels.

`height`
:   A altura do padrão em pixels.

`xstep`
:   A distância em pixels dos posicionamentos do padrão na
    direção horizontal.

`ystep`
:   A distância em pixels dos posicionamentos do padrão na
    direção vertical.

`painttype`
:   Deve ser 1 ou 2.

### Valor Retornado

O identificador do padrão ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Criando e usando um padrão**

```
<?php
$ps = ps_new();

if (!ps_open_file($ps, "padrao.ps")) {
  print "Não é possível abrir o arquivo PostScript\n";
  exit;
}

ps_set_parameter($ps, "warning", "true");
ps_set_info($ps, "Creator", "padrao.php");
ps_set_info($ps, "Author", "Uwe Steinmann");
ps_set_info($ps, "Title", "Exemplo de Padrão");

$pspattern = ps_begin_pattern($ps, 10.0, 10.0, 10.0, 10.0, 1);
ps_setlinewidth($ps, 0.2);
ps_setcolor($ps, "stroke", "rgb", 0.0, 0.0, 1.0, 0.0);
ps_moveto($ps, 0, 0);
ps_lineto($ps, 7, 7);
ps_stroke($ps);
ps_moveto($ps, 0, 7);
ps_lineto($ps, 7, 0);
ps_stroke($ps);
ps_end_pattern($ps);

ps_begin_page($ps, 596, 842);
ps_setcolor($ps, "both", "pattern", $pspattern, 0.0, 0.0, 0.0);
ps_rect($ps, 50, 400, 200, 200);
ps_fill($ps);
ps_end_page($ps);

ps_close($ps);
ps_delete($ps);
?>
```

### Veja também

- [ps\_end\_pattern()](function.ps-end-pattern.md) - Termina um padrão
- [ps\_setcolor()](function.ps-setcolor.md) - Define a cor atual
- [ps\_shading\_pattern()](function.ps-shading-pattern.md) - Cria um padrão com base em um sombreamento

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
