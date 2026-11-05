# Obtém a altura da fonte

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imagefontheight.php

---

# imagefontheight

(PHP 4, PHP 5, PHP 7, PHP 8)

imagefontheight — Obtém a altura da fonte

### Descrição

function **imagefontheight**([GdFont](class.gdfont.md)|[int](language.types.integer.md) `$font`): [int](language.types.integer.md)

Retorna a altura da fonte, em pixels, de um caractere em determinada fonte.

### Parâmetros

`font`
:   Pode ser 1, 2, 3, 4, 5 para as fontes
    nativas na codificação latin2 (onde números maiores correspondem a fontes maiores) ou uma instância de [GdFont](class.gdfont.md),
    retornada por [imageloadfont()](function.imageloadfont.md).

### Valor Retornado

Retorna a altura da fonte em pixels.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `font` agora aceita uma instância de [GdFont](class.gdfont.md) ou um [int](language.types.integer.md); anteriormente, apenas [int](language.types.integer.md) era aceito. |

### Examples

**Exemplo #1 Usando **imagefontheight()** em fontes internas**

```
<?php
echo 'Altura da fonte: ' . imagefontheight(4);
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Altura da fonte: 16
```

**Exemplo #2 Usando **imagefontheight()** junto com [imageloadfont()](function.imageloadfont.md)**

```
<?php
// Carrega uma fonte .gdf
$font = imageloadfont('anonymous.gdf');

echo 'Altura da fonte: ' . imagefontheight($font);
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Altura da fonte: 43
```

### Veja também

- [imagefontwidth()](function.imagefontwidth.md) - Obtém a largura da fonte
- [imageloadfont()](function.imageloadfont.md) - Carrega uma nova fonte

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
