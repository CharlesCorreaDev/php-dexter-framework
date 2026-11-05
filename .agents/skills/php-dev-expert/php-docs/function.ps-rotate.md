# Define o fator de rotação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ps-rotate.php

---

# ps\_rotate

(PECL ps >= 1.1.0)

ps\_rotate — Define o fator de rotação

### Descrição

function **ps\_rotate**([resource](language.types.resource.md) `$psdoc`, [float](language.types.float.md) `$rot`): [bool](language.types.boolean.md)

Define a rotação do sistema de coordenadas.

### Parâmetros

`psdoc`
:   Identificador de recurso do arquivo postscript
    conforme retornado por [ps\_new()](function.ps-new.md).

`rot`
:   Ângulo de rotação em graus.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Rotação do sistema de coordenadas**

```
<?php
function rectangle($ps) {
    ps_moveto($ps, 0, 0);
    ps_lineto($ps, 0, 50);
    ps_lineto($ps, 50, 50);
    ps_lineto($ps, 50, 0);
    ps_lineto($ps, 0, 0);
    ps_stroke($ps);
}

$ps = ps_new();
if (!ps_open_file($ps, "rotacao.ps")) {
  print "Não é possível abrir o arquivo PostScript\n";
  exit;
}

ps_set_info($ps, "Creator", "rotacao.php");
ps_set_info($ps, "Author", "Uwe Steinmann");
ps_set_info($ps, "Title", "Exemplo de rotação");
ps_set_info($ps, "BoundingBox", "0 0 596 842");

$psfont = ps_findfont($ps, "Helvetica", "", 0);

ps_begin_page($ps, 596, 842);
ps_set_text_pos($ps, 100, 100);
ps_save($ps);
ps_translate($ps, 100, 100);
ps_rotate($ps, 45);
rectangle($ps);
ps_restore($ps);
ps_setfont($ps, $psfont, 8.0);
ps_show($ps, "Texto sem rotação");
ps_end_page($ps);

ps_delete($ps);
?>
```

O exemplo acima ilustra uma maneira muito comum de rotacionar um
gráfico (neste caso, apenas um retângulo) simplesmente rotacionando o
sistema de coordenadas. Como o sistema de coordenadas do gráfico assume
(0,0) como a origem, o sistema de coordenadas da página também é transladado
para posicionar o gráfico fora da borda da página. Preste atenção
à ordem de [ps\_translate()](function.ps-translate.md) e
**ps\_rotate()**. No caso acima, o retângulo é
rotacionado em torno do ponto (100, 100) no sistema de coordenadas
não transladado. Trocar as duas instruções tem um resultado
completamente diferente.

Para gerar o texto na posição original, todas as
modificações do sistema de coordenadas são encapsuladas em
[ps\_save()](function.ps-save.md) e [ps\_restore()](function.ps-restore.md).

### Veja também

- [ps\_scale()](function.ps-scale.md) - Define o fator de escala
- [ps\_translate()](function.ps-translate.md) - Defina o ponto de translação

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
