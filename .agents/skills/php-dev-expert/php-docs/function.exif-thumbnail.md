# Recupera a miniatura embutida de uma imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.exif-thumbnail.php

---

# exif\_thumbnail

(PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8)

exif\_thumbnail — Recupera a miniatura embutida de uma imagem

### Descrição

function **exif\_thumbnail**(  
    [resource](language.types.resource.md)|[string](language.types.string.md) `$file`,  
    [int](language.types.integer.md) `&$width` = **`null`**,  
    [int](language.types.integer.md) `&$height` = **`null`**,  
    [int](language.types.integer.md) `&$image_type` = **`null`**  
): [string](language.types.string.md)|[false](language.types.singleton.md)

**exif\_thumbnail()** lê a miniatura embutida de uma imagem.

Se for desejado exibir miniaturas através desta função, deve-se enviar
a informação do tipo de mídia usando a função [header()](function.header.md).

É possível que **exif\_thumbnail()** não possa criar uma
imagem mas possa determinar seu tamanho. Neste caso, o valor retornado é
**`false`** mas a largura (`width`) e altura (`height`)
serão definidos.

### Parâmetros

`file`
:   A localização do arquivo de imagem. Pode ser um caminho ou um
    fluxo do tipo [resource](language.types.resource.md).

`width`
:   A largura da miniatura retornada.

`height`
:   A altura da miniatura retornada.

`image_type`
:   O tipo da imagem da miniatura retornada. Pode ser
    TIFF ou JPEG.

### Valor Retornado

Retorna a miniatura embutida, ou **`false`** se a imagem não contiver
miniatura.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 7.2.0 | O parâmetro `file` agora suporta arquivos locais e recursos de fluxo. |

### Examples

**Exemplo #1 Exemplo de **exif\_thumbnail()****

```
<?php
$image = exif_thumbnail('/path/to/image.jpg', $width, $height, $type);

if ($image!==false) {
    header('Content-type: ' .image_type_to_mime_type($type));
    echo $image;
    exit;
} else {
    // sem miniatura, gerencia o erro aqui
    echo 'Não há miniatura disponível';
}
?>
```

### Notas

> **Nota**:
>
> Se o parâmetro `file` for usado para passar um fluxo a esta função,
> ele deve ser do tipo pesquisável. Note que a posição do ponteiro do arquivo não é alterada após o retorno desta função.

### Veja também

- [exif\_read\_data()](function.exif-read-data.md) - Lê os cabeçalhos EXIF de um arquivo de imagen
- [image\_type\_to\_mime\_type()](function.image-type-to-mime-type.md) - Obtém o Mime-Type para o tipo de imagem retornado por getimagesize,
  exif\_read\_data, exif\_thumbnail e exif\_imagetype

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
