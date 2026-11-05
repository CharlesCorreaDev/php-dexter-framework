# Obtém o tamanho do arquivo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.filesize.php

---

# filesize

(PHP 4, PHP 5, PHP 7, PHP 8)

filesize — Obtém o tamanho do arquivo

### Descrição

function **filesize**([string](language.types.string.md) `$filename`): [int](language.types.integer.md)|[false](language.types.singleton.md)

Obtém o tamanho do arquivo.

### Parâmetros

`filename`
:   Caminho para o arquivo.

### Valor Retornado

Retorna o tamanho do arquivo em bytes, ou **`false`** (e gera um aviso
**`E_WARNING`**) em caso de erro.

> **Nota**:
>
> Como o tipo inteiro do PHP possui sinal e muitas plataformas usam números inteiros de 32 bits,
> algumas funções do sistema de arquivos podem retornar resultados inesperados para arquivos
> maiores que 2GB.

### Erros/Exceções

Em caso de falha, um **`E_WARNING`** será emitido.

### Examples

**Exemplo #1 Exemplo de **filesize()****

```
<?php

// Exibe algo como: arquivo.txt: 1024 bytes

$filename = 'arquivo.txt';
echo $filename . ': ' . filesize($filename) . ' bytes';

?>
```

### Notas

> **Nota**:
>
> Os resultados desta
> função são armazenados em cache. Consulte a função [clearstatcache()](function.clearstatcache.md) para
> mais detalhes.

**Dica**

A partir do PHP 5.0.0, esta função
também pode ser usada com *alguns* empacotadores de URL. Consulte os
[Protocolos e empacotadores suportados](wrappers.md) para determinar quais empacotadores suportam
a família de funções [stat()](function.stat.md).

### Veja também

- [file\_exists()](function.file-exists.md) - Verifica se um arquivo ou diretório existe

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
