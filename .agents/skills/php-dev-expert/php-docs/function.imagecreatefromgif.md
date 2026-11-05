# Cria uma nova imagem a partir de um arquivo ou URL

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imagecreatefromgif.php

---

# imagecreatefromgif

(PHP 4, PHP 5, PHP 7, PHP 8)

imagecreatefromgif — Cria uma nova imagem a partir de um arquivo ou URL

### Descrição

function **imagecreatefromgif**([string](language.types.string.md) `$filename`): [GdImage](class.gdimage.md)|[false](language.types.singleton.md)

**imagecreatefromgif()** retorna um identificador de imagem
representando a imagem obtida a partir do arquivo informado.

**Cuidado**

Ao carregar arquivos GIF na memória, apenas o primeiro quadro
é retornado ao objeto da imagem. O tamanho da imagem não é
necessariamente o reportado por [getimagesize()](function.getimagesize.md).

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
:   Caminho para a imagem GIF.

### Valor Retornado

Retorna um objeto de imagem em caso de sucesso, **`false`** em caso de erros.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | Em caso de sucesso, esta função agora retorna um objeto [GDImage](class.gdimage.md); anteriormente, um [resource](language.types.resource.md) era retornado. |

### Examples

**Exemplo #1 Exemplo de gerenciamento de erro durante carregamento de um GIF**

```
<?php
function LoadGif($imgname)
{
    /* Tenta abrir */
    $im = @imagecreatefromgif($imgname);

    /* Ver se falhou */
    if(!$im)
    {
        /* Cria uma imagem vazia */
        $im = imagecreatetruecolor (150, 30);
        $bgc = imagecolorallocate ($im, 255, 255, 255);
        $tc = imagecolorallocate ($im, 0, 0, 0);

        imagefilledrectangle ($im, 0, 0, 150, 30, $bgc);

        /* Mostra uma mensagem de erro */
        imagestring ($im, 1, 5, 5, 'Error loading ' . $imgname, $tc);
    }

    return $im;
}

header('Content-Type: image/gif');

$img = LoadGif('bogus.image');

imagegif($img);
?>
```

O exemplo acima produzirá
algo semelhante a:

![Saída do exemplo: Exemplo de gerenciamento de erro durante carregamento de um GIF](images/21009b70229598c6a80eef8b45bf282b-imagecreatefromgif.gif)

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
