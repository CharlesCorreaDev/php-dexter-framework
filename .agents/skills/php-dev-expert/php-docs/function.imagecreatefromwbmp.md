# Cria uma nova imagem a partir de um arquivo ou URL

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imagecreatefromwbmp.php

---

# imagecreatefromwbmp

(PHP 4 >= 4.0.1, PHP 5, PHP 7, PHP 8)

imagecreatefromwbmp — Cria uma nova imagem a partir de um arquivo ou URL

### Descrição

function **imagecreatefromwbmp**([string](language.types.string.md) `$filename`): [GdImage](class.gdimage.md)|[false](language.types.singleton.md)

**imagecreatefromwbmp()** retorna um identificador de imagem
representando a imagem obtida a partir do arquivo informado.

> **Nota**:
>
> Imagen WBMP é um Bitmap "Wireless", e não um Bitmap do Windows. Este último pode ser
> carregado com [imagecreatefrombmp()](function.imagecreatefrombmp.md).

**Dica**

Uma URL pode ser usada como um
nome de arquivo com esta função se os [empacotadores fopen](filesystem.configuration.md#ini.allow-url-fopen) estiverem habilitados.
Consulte a função [fopen()](function.fopen.md) para mais detalhes sobre como especificar
o nome do arquivo. Consulte os [Protocolos e empacotadores suportados](wrappers.md) para obter links para informações
sobre as capacidades de cada empacotador, notas de uso
e informações sobre quaisquer variáveis predefinidas que eles possam
fornecer.

### Parâmetros

`filename`
:   Caminho para a imagem WBMP.

### Valor Retornado

Retorna um objeto de imagem em caso de sucesso, **`false`** em caso de erros.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | Em caso de sucesso, esta função agora retorna um objeto [GDImage](class.gdimage.md); anteriormente, um [resource](language.types.resource.md) era retornado. |

### Examples

**Exemplo #1 Exemplo de gerenciamento de erro ao carregar um WBMP**

```
<?php
function LoadWBMP($imgname)
{
    /* Tenta abrir */
    $im = @imagecreatefromwbmp($imgname);

    /* Vê se falhou */
    if(!$im)
    {
        /* Cria uma imagem vazia */
        $im  = imagecreatetruecolor(150, 30);
        $bgc = imagecolorallocate($im, 255, 255, 255);
        $tc  = imagecolorallocate($im, 0, 0, 0);

        imagefilledrectangle($im, 0, 0, 150, 30, $bgc);

        /* Mostra mensagem de erro */
        imagestring($im, 1, 5, 5, 'Error loading ' . $imgname, $tc);
    }

    return $im;
}

header('Content-Type: image/vnd.wap.wbmp');

$img = LoadWBMP('bogus.image');

imagewbmp($img);
?>
```

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
