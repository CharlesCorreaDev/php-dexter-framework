# Obtem o proprietário do arquivo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fileowner.php

---

# fileowner

(PHP 4, PHP 5, PHP 7, PHP 8)

fileowner — Obtem o proprietário do arquivo

### Descrição

function **fileowner**([string](language.types.string.md) `$filename`): [int](language.types.integer.md)|[false](language.types.singleton.md)

Obtém o proprietário do arquivo.

### Parâmetros

`filename`
:   Caminho para o arquivo.

### Valor Retornado

Retorna a ID do usuário do proprietário do arquivo, ou **`false`** em caso de falha.
A ID do usuário é retornada em formato numérico, use
a função [posix\_getpwuid()](function.posix-getpwuid.md) para obter o nome do usuário.

### Erros/Exceções

Em caso de falha, um **`E_WARNING`** será emitido.

### Examples

**Exemplo #1 Encontrando o proprietário de um arquivo**

```
<?php
$filename = 'index.php';
print_r(posix_getpwuid(fileowner($filename)));
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

- [filegroup()](function.filegroup.md) - Lê o grupo do arquivo
- [stat()](function.stat.md) - Obtém informações sobre um arquivo
- [posix\_getpwuid()](function.posix-getpwuid.md) - Retorna informações sobre um usuário por ID de usuário

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
