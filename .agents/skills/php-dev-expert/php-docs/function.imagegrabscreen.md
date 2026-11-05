# Captura toda a tela

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imagegrabscreen.php

---

# imagegrabscreen

(PHP 5 >= 5.2.2, PHP 7, PHP 8)

imagegrabscreen — Captura toda a tela

### Descrição

function **imagegrabscreen**(): [GdImage](class.gdimage.md)|[false](language.types.singleton.md)

Captura uma fotografia de toda a tela.

> **Nota**:
>
> Esta função está disponível apenas no Windows.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um objeto de imagem em caso de sucesso, ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | Em caso de sucesso, esta função retorna agora uma instância de [GDImage](class.gdimage.md); anteriormente, um [resource](language.types.resource.md) era retornado. |

### Examples

**Exemplo #1 Exemplo de **imagegrabscreen()****

Este exemplo demonstra como tirar uma fotografia da tela atual
e gravá-la como uma imagem PNG.

```
<?php
$im = imagegrabscreen();
imagepng($im, "myscreenshot.png");
?>
```

### Veja também

- [imagegrabwindow()](function.imagegrabwindow.md) - Captura uma janela

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
