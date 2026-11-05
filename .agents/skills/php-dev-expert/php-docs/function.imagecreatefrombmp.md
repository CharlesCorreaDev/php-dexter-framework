# Cria uma nova imagem a partir de um arquivo ou URL

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imagecreatefrombmp.php

---

# imagecreatefrombmp

(PHP 7 >= 7.2.0, PHP 8)

imagecreatefrombmp — Cria uma nova imagem a partir de um arquivo ou URL

### Descrição

function **imagecreatefrombmp**([string](language.types.string.md) `$filename`): [GdImage](class.gdimage.md)|[false](language.types.singleton.md)

**imagecreatefrombmp()** retorna um identificador de imagem
representando a imagem obtida pelo nome de arquivo fornecido.

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
:   Caminho para a imagem BMP.

### Valor Retornado

Retorna um objeto de imagem em caso de sucesso, **`false`** em caso de erros.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | Em caso de sucesso, esta função agora retorna um objeto [GDImage](class.gdimage.md); anteriormente, um [resource](language.types.resource.md) era retornado. |

### Examples

**Exemplo #1 Converte uma imagem BMP para PNG usando **imagecreatefrombmp()****

```
<?php
// Carrega o arquivo BMP
$im = imagecreatefrombmp('./example.bmp');

// Converte para um PNG com a configuração padrão
imagepng($im, './example.png');
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
