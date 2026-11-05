# Detecta o tipo de conteúdo MIME de um arquivo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mime-content-type.php

---

# mime\_content\_type

(PHP 4 >= 4.3.0, PHP 5, PHP 7, PHP 8)

mime\_content\_type — Detecta o tipo de conteúdo MIME de um arquivo

### Descrição

function **mime\_content\_type**([resource](language.types.resource.md)|[string](language.types.string.md) `$filename`): [string](language.types.string.md)|[false](language.types.singleton.md)

Retorna o tipo de conteúdo MIME de um arquivo conforme determinado usando
informações do arquivo magic.mime.

### Parâmetros

`filename`
:   Caminho para o arquivo.

### Valor Retornado

Retorna o tipo de conteúdo no formato MIME, como
`text/plain` ou `application/octet-stream`,
ou **`false`** em caso de falha.

### Erros/Exceções

Em caso de falha, um **`E_WARNING`** será emitido.

### Examples

**Exemplo #1 Exemplo de **mime\_content\_type()****

```
<?php
echo mime_content_type('php.gif') . "\n";
echo mime_content_type('teste.php');
?>
```

O exemplo acima produzirá:

```
image/gif
text/plain
```

### Veja também

- [finfo\_file()](function.finfo-file.md) - Retorna informações sobre um arquivo
- [finfo\_buffer()](function.finfo-buffer.md) - Retorna informações sobre um buffer de string

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
