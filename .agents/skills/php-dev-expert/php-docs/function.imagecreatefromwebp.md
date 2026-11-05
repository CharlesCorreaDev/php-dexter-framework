# Cria uma nova imagem a partir de um arquivo ou URL

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imagecreatefromwebp.php

---

# imagecreatefromwebp

(PHP 5 >= 5.4.0, PHP 7, PHP 8)

imagecreatefromwebp — Cria uma nova imagem a partir de um arquivo ou URL

### Descrição

function **imagecreatefromwebp**([string](language.types.string.md) `$filename`): [GdImage](class.gdimage.md)|[false](language.types.singleton.md)

**imagecreatefromwebp()** retorna um identificador de imagem
representando a imagem obtida a partir do arquivo informado.
Observe que arquivos WebP animados não podem ser lidos.

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
:   Caminho para a imagem WebP.

### Valor Retornado

Retorna um objeto de imagem em caso de sucesso, **`false`** em caso de erros.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | Em caso de sucesso, esta função agora retorna um objeto [GDImage](class.gdimage.md); anteriormente, um [resource](language.types.resource.md) era retornado. |

### Examples

**Exemplo #1 Converte uma imagem WebP para jpeg usando **imagecreatefromwebp()****

```
<?php
// Carrega o arquivo WebP
$im = imagecreatefromwebp('./example.webp');

// Converte para um jpeg com 100% de qualidade
imagejpeg($im, './example.jpeg', 100);
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
