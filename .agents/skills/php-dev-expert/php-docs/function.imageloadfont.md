# Carrega uma nova fonte

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imageloadfont.php

---

# imageloadfont

(PHP 4, PHP 5, PHP 7, PHP 8)

imageloadfont — Carrega uma nova fonte

### Descrição

function **imageloadfont**([string](language.types.string.md) `$filename`): [GdFont](class.gdfont.md)|[false](language.types.singleton.md)

**imageloadfont()** carrega um mapa de bits definido pelo usuário e retorna
seu identificador.

### Parâmetros

`filename`
:   O formato de arquivo de fonte atualmente é binário e dependente de
    arquitetura. Isto significa que os arquivos de fonte devem ser gerados
    no mesmo tipo de CPU da máquina onde o PHP estiver sendo executado.

    **Formato de arquivo de fonte**

    | posição do byte | tipo de dados C | descrição |
    | --- | --- | --- |
    | bytes 0-3 | int | número de caracteres na fonte |
    | bytes 4-7 | int | valor do primeiro caractere na fonte (normalmente 32 para espaço) |
    | bytes 8-11 | int | largura em pixel para cada caractere |
    | bytes 12-15 | int | altura em pixel para cada caractere |
    | bytes 16- | char | array com dados de caracteres, um byte por pixel em cada caractere, para um total de (num\_caracteres \* largura \* altura) bytes. |

### Valor Retornado

Retorna uma instância [GdFont](class.gdfont.md), ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | Retorna uma instância [GdFont](class.gdfont.md) agora; anteriormente, um [int](language.types.integer.md) era retornado. |

### Examples

**Exemplo #1 Exemplo de uso de **imageloadfont()****

```
<?php
// Cria uma nova instância de imagem
$im = imagecreatetruecolor(50, 20);
$black = imagecolorallocate($im, 0, 0, 0);
$white = imagecolorallocate($im, 255, 255, 255);

// Torna o fundo branco
imagefilledrectangle($im, 0, 0, 49, 19, $white);

// Carrega a fonte GD e escreve 'Hello'
$font = imageloadfont('./04b.gdf');
imagestring($im, $font, 0, 0, 'Hello', $black);

// Mostra no navegador
header('Content-type: image/png');

imagepng($im);
?>
```

### Veja também

- [imagefontwidth()](function.imagefontwidth.md) - Obtém a largura da fonte
- [imagefontheight()](function.imagefontheight.md) - Obtém a altura da fonte
- [imagestring()](function.imagestring.md) - Desenha uma string na horizontal

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
