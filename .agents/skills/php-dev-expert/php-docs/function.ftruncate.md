# Trunca um arquivo a um tamanho especificado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ftruncate.php

---

# ftruncate

(PHP 4, PHP 5, PHP 7, PHP 8)

ftruncate — Trunca um arquivo a um tamanho especificado

### Descrição

function **ftruncate**([resource](language.types.resource.md) `$stream`, [int](language.types.integer.md) `$size`): [bool](language.types.boolean.md)

Toma o ponteiro de arquivo `stream` e trunca o arquivo
para o comprimento definido em `size`.

### Parâmetros

`stream`
:   O ponteiro do arquivo.

    > **Nota**:
    >
    > O fluxo `stream` deve estar aberto para escrita.

`size`
:   O tamanho para o qual será truncado.

    > **Nota**:
    >
    > Se o parâmetro `size` for maior que o arquivo, o
    > arquivo será estendido com bytes nulos.
    >
    > Se o parâmetro `size` for menor que o arquivo, o
    > arquivo será truncado para este tamanho.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de truncamento de arquivo**

```
<?php
$filename = 'lorem_ipsum.txt';

$handle = fopen($filename, 'r+');
ftruncate($handle, rand(1, filesize($filename)));
rewind($handle);
echo fread($handle, filesize($filename));
fclose($handle);
?>
```

### Notas

> **Nota**:
>
> O ponteiro do arquivo *não* é alterado.

### Veja também

- [fopen()](function.fopen.md) - Abre um arquivo ou URL
- [fseek()](function.fseek.md) - Aponta para uma posição no arquivo

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
