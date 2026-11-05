# Cria uma nova imagem a partir de uma parte de um arquivo GD2 ou URL

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imagecreatefromgd2part.php

---

# imagecreatefromgd2part

(PHP 4 >= 4.0.7, PHP 5, PHP 7, PHP 8)

imagecreatefromgd2part — Cria uma nova imagem a partir de uma parte de um arquivo GD2 ou URL

### Descrição

function **imagecreatefromgd2part**(  
    [string](language.types.string.md) `$filename`,  
    [int](language.types.integer.md) `$x`,  
    [int](language.types.integer.md) `$y`,  
    [int](language.types.integer.md) `$width`,  
    [int](language.types.integer.md) `$height`  
): [GdImage](class.gdimage.md)|[false](language.types.singleton.md)

Cria uma nova imagem a partir de uma parte de um arquivo GD2 ou URL.

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
:   Caminho para a imagem GD2.

`x`
:   Coordenada x do ponto de origem.

`y`
:   Coordenada y do ponto de origem.

`width`
:   Largura da imagem de origem.

`height`
:   Altura da imagem de origem.

### Valor Retornado

Retorna um objeto de imagem em caso de sucesso, **`false`** em caso de erros.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | Em caso de sucesso, esta função agora retorna um objeto [GDImage](class.gdimage.md); anteriormente, um [resource](language.types.resource.md) era retornado. |

### Examples

**Exemplo #1 Exemplo de **imagecreatefromgd2part()****

```
<?php
// Para este exemplo é necessário obter antes o tamanho da imagem
$image = getimagesize('./test.gd2');

// Cria a instância de imagem agora que já foi obtido o tamanho
// da imagem
$im = imagecreatefromgd2part('./test.gd2', 4, 4, ($image[0] / 2) - 6, ($image[1] / 2) - 6);

// Faz uma operação, neste caso transforma a imagem em alto relevo
if(function_exists('imagefilter'))
{
    imagefilter($im, IMG_FILTER_EMBOSS);
}

// Grava a imagem transformada
imagegd2($im, './test_emboss.gd2');
?>
```

### Notas

**Aviso**

Os formatos
de imagem GD e GD2 são formatos de imagem proprietários da biblioteca libgd. Eles devem ser considerados
*obsoletos* e só devem ser usados para propósitos de desenvolvimento
e testes.

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
