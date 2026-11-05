# Extrai o arquivo carregado incorporado no FDF

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fdf-get-attachment.php

---

# fdf\_get\_attachment

(PHP 4 >= 4.3.0, PHP 5 < 5.3.0, PECL fdf SVN)

fdf\_get\_attachment — Extrai o arquivo carregado incorporado no FDF

### Descrição

function **fdf\_get\_attachment**([resource](language.types.resource.md) `$fdf_document`, [string](language.types.string.md) `$fieldname`, [string](language.types.string.md) `$savepath`): [array](language.types.array.md)

Extrai um arquivo carregado por meio do campo "file selection"
`fieldname` e o armazena em
`savepath`.

### Parâmetros

`fdf_document`
:   O identificador do documento FDF, retornado por [fdf\_create()](function.fdf-create.md),
    [fdf\_open()](function.fdf-open.md) ou [fdf\_open\_string()](function.fdf-open-string.md).

`fieldname`

`savepath`
:   Pode ser o nome de um arquivo simples ou um diretório existente no qual o
    arquivo deve ser criado sob seu nome original. Qualquer arquivo existente sob
    o mesmo nome será sobrescrito.

    > **Nota**:
    >
    > Parece não haver outra maneira de descobrir o nome do arquivo original, a não ser
    > armazenar o arquivo usando um diretório como
    > `savepath` e verificar o nome base em que ele foi
    > armazenado.

### Valor Retornado

O array retornado contém os seguintes campos:

- `path` - caminho onde o arquivo foi armazenado
- `size` - tamanho do arquivo armazenado em bytes
- `type` - tipo de mídia se fornecido no FDF

### Examples

**Exemplo #1 Armazenando um arquivo carregado**

```
<?php
  $fdf = fdf_open_string($HTTP_FDF_DATA);
  $data = fdf_get_attachment($fdf, "filename", "/tmpdir");
  echo "O arquivo enviado está armazenado em $data[path]";
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
