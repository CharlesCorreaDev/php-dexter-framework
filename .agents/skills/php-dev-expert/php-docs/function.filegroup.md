# Lê o grupo do arquivo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.filegroup.php

---

# filegroup

(PHP 4, PHP 5, PHP 7, PHP 8)

filegroup — Lê o grupo do arquivo

### Descrição

function **filegroup**([string](language.types.string.md) `$filename`): [int](language.types.integer.md)|[false](language.types.singleton.md)

Obtém o grupo do arquivo. O ID do grupo é retornado no formato numérico, use
[posix\_getgrgid()](function.posix-getgrgid.md) para resolvê-lo para um nome do grupo.

### Parâmetros

`filename`
:   Caminho do arquivo.

### Valor Retornado

Retorna o group ID do arquivo, ou **`false`** no caso de um
erro. O group ID é retornado em um formato numérico. Use
[posix\_getgrgid()](function.posix-getgrgid.md) para resolver para o nome do grupo.
Em caso de falha, **`false`** é retornado.

### Erros/Exceções

Em caso de falha. um **`E_WARNING`** é emitido.

### Examples

**Exemplo #1 Descobrindo o grupo de um arquivo**

```
<?php
$filename = 'index.php';
print_r(posix_getgrgid(filegroup($filename)));
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

- [fileowner()](function.fileowner.md) - Obtem o proprietário do arquivo
- [posix\_getgrgid()](function.posix-getgrgid.md) - Retorna informação sobre um grupo a partir de um ID de grupo

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
