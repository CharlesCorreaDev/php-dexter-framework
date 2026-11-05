# Cria uma nova imagem a partir de um arquivo ou URL

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imagecreatefromjpeg.php

---

# imagecreatefromjpeg

(PHP 4, PHP 5, PHP 7, PHP 8)

imagecreatefromjpeg — Cria uma nova imagem a partir de um arquivo ou URL

### Descrição

function **imagecreatefromjpeg**([string](language.types.string.md) `$filename`): [GdImage](class.gdimage.md)|[false](language.types.singleton.md)

**imagecreatefromjpeg()** retorna um identificador de imagem
que representa a imagem obtida a partir do nome de arquivo fornecido.

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
:   Caminho para a imagem JPEG.

### Valor Retornado

Retorna um objeto de imagem em caso de sucesso, **`false`** em caso de erros.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | Caso for sucesso, esta função agora retorna uma instância de [GDImage](class.gdimage.md); anteriormente, era retornado um [resource](language.types.resource.md). |

### Examples

**Exemplo #1 Exemplo de como lidar com um erro durante o carregamento de uma imagem JPEG.**

```
<?php
function LoadJpeg($imgname)
{
    /* Tentativa de abrir */
    $im = @imagecreatefromjpeg($imgname);

    /* Verificar se falhou */
    if(!$im)
    {
        /* Crie uma imagem preta */
        $im  = imagecreatetruecolor(150, 30);
        $bgc = imagecolorallocate($im, 255, 255, 255);
        $tc  = imagecolorallocate($im, 0, 0, 0);

        imagefilledrectangle($im, 0, 0, 150, 30, $bgc);

        /* Exibir uma mensagem de erro */
        imagestring($im, 1, 5, 5, 'Erro ao carregar ' . $imgname, $tc);
    }

    return $im;
}

header('Content-Type: image/jpeg');

$img = LoadJpeg('bogus.image');

imagejpeg($img);
?>
```

O exemplo acima produzirá
algo semelhante a:

![Saída do exemplo: Exemplo de como lidar com um erro durante o carregamento de um JPEG.](images/21009b70229598c6a80eef8b45bf282b-imagecreatefromjpeg.jpg)

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
