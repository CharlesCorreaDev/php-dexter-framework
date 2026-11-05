# Inicia um novo modelo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ps-begin-template.php

---

# ps\_begin\_template

(PECL ps >= 1.2.0)

ps\_begin\_template — Inicia um novo modelo

### Descrição

function **ps\_begin\_template**([resource](language.types.resource.md) `$psdoc`, [float](language.types.float.md) `$width`, [float](language.types.float.md) `$height`): [int](language.types.integer.md)

Inicia um novo modelo. Um modelo é chamado de formulário na linguagem PostScript.
Ele é criado de forma semelhante a um padrão, mas usado como uma imagem.
Os modelos são frequentemente usados ​​para desenhos que são colocados várias vezes
ao longo do documento, por exemplo, como o logotipo de uma empresa. Todas as funções de desenho
podem ser usadas dentro de um modelo. O modelo não será desenhado até
que seja colocado por [ps\_place\_image()](function.ps-place-image.md).

### Parâmetros

`psdoc`
:   Identificador de recurso do arquivo postscript
    conforme retornado por [ps\_new()](function.ps-new.md).

`width`
:   A largura do modelo em pixels.

`height`
:   A altura do modelo em pixels.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Criando e usando um modelo**

```
<?php
$ps = ps_new();

if (!ps_open_file($ps, "modelo.ps")) {
  print "Não é possível abrir o arquivo PostScript\n";
  exit;
}

ps_set_parameter($ps, "warning", "true");
ps_set_info($ps, "Creator", "modelo.php");
ps_set_info($ps, "Author", "Uwe Steinmann");
ps_set_info($ps, "Title", "Exemplo de modelo");

$pstemplate = ps_begin_template($ps, 30.0, 30.0);
ps_moveto($ps, 0, 0);
ps_lineto($ps, 30, 30);
ps_moveto($ps, 0, 30);
ps_lineto($ps, 30, 0);
ps_stroke($ps);
ps_end_template($ps);

ps_begin_page($ps, 596, 842);
ps_place_image($ps, $pstemplate, 20.0, 20.0, 1.0);
ps_place_image($ps, $pstemplate, 50.0, 30.0, 0.5);
ps_place_image($ps, $pstemplate, 70.0, 70.0, 0.6);
ps_place_image($ps, $pstemplate, 30.0, 50.0, 1.3);
ps_end_page($ps);

ps_close($ps);
ps_delete($ps);
?>
```

### Veja também

- [ps\_end\_template()](function.ps-end-template.md) - Termina um modelo

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
