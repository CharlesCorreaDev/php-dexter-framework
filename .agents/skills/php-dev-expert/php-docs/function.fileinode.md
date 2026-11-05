# Lê o inode do arquivo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fileinode.php

---

# fileinode

(PHP 4, PHP 5, PHP 7, PHP 8)

fileinode — Lê o inode do arquivo

### Descrição

function **fileinode**([string](language.types.string.md) `$filename`): [int](language.types.integer.md)|[false](language.types.singleton.md)

Obtém o inode do arquivo.

### Parâmetros

`filename`
:   Caminho para o arquivo.

### Valor Retornado

Retorna o número do inode do arquivo, ou **`false`** em caso de falha.

### Erros/Exceções

Em caso de falha, um **`E_WARNING`** será emitido.

### Examples

**Exemplo #1 Comparando o inode de um arquivo com o arquivo atual**

```
<?php
$filename = 'index.php';
if (getmyinode() == fileinode($filename)) {
    echo 'Você está verificando o arquivo atual.';
}
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

- [getmyinode()](function.getmyinode.md) - Obtém o inode do script atual
- [stat()](function.stat.md) - Obtém informações sobre um arquivo

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
