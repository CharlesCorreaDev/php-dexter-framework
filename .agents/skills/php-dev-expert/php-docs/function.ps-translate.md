# Defina o ponto de translação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ps-translate.php

---

# ps\_translate

(PECL ps >= 1.1.0)

ps\_translate — Defina o ponto de translação

### Descrição

function **ps\_translate**([resource](language.types.resource.md) `$psdoc`, [float](language.types.float.md) `$x`, [float](language.types.float.md) `$y`): [bool](language.types.boolean.md)

Define um novo ponto inicial do sistema de coordenadas.

### Parâmetros

`psdoc`
:   Identificador de recurso do arquivo postscript
    conforme retornado por [ps\_new()](function.ps-new.md).

`x`
:   Coordenada x da origem do sistema de coordenadas transladado.

`y`
:   Coordenada y da origem do sistema de coordenadas transladado.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Translação do sistema de coordenadas**

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
if (!ps_open_file($ps, "translacao.ps")) {
  print "Não é possível abrir o arquivo PostScript\n";
  exit;
}

ps_set_info($ps, "Creator", "translacao.php");
ps_set_info($ps, "Author", "Uwe Steinmann");
ps_set_info($ps, "Title", "Exemplo de translação");
ps_set_info($ps, "BoundingBox", "0 0 596 842");

$psfont = ps_findfont($ps, "Helvetica", "", 0);

ps_begin_page($ps, 596, 842);
ps_set_text_pos($ps, 100, 100);
ps_translate($ps, 500, 750);
rectangle($ps);
ps_translate($ps, -500, -750);
ps_setfont($ps, $psfont, 8.0);
ps_show($ps, "Texto na posição inicial");
ps_end_page($ps);

ps_begin_page($ps, 596, 842);
ps_set_text_pos($ps, 100, 100);
ps_save($ps);
ps_translate($ps, 500, 750);
rectangle($ps);
ps_restore($ps);
ps_setfont($ps, $psfont, 8.0);
ps_show($ps, "Texto na posição inicial");
ps_end_page($ps);

ps_delete($ps);
?>
```

O exemplo acima demonstra duas maneiras possíveis de posicionar
um gráfico (neste caso, apenas um retângulo) em qualquer posição da página,
enquanto o gráfico em si usa seu próprio sistema de coordenadas. O truque é
alterar a origem do sistema de coordenadas atual antes de desenhar
o retângulo. A translação precisa ser desfeita após o gráfico ter
sido desenhado.

Na segunda página, uma abordagem ligeiramente diferente e mais elegante é
aplicada. Em vez de desfazer a translação com uma segunda chamada a
**ps\_translate()**, o contexto gráfico é salvo antes
da modificação do sistema de coordenadas e restaurado após o desenho do retângulo.

### Veja também

- [ps\_scale()](function.ps-scale.md) - Define o fator de escala
- [ps\_rotate()](function.ps-rotate.md) - Define o fator de rotação

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
