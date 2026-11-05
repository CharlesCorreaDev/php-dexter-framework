# Obtém informações sobre um arquivo ou ligação simbólica

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.lstat.php

---

# lstat

(PHP 4, PHP 5, PHP 7, PHP 8)

lstat — Obtém informações sobre um arquivo ou ligação simbólica

### Descrição

function **lstat**([string](language.types.string.md) `$filename`): [array](language.types.array.md)|[false](language.types.singleton.md)

Obtém estatísticas do arquivo ou ligação simbólica com o nome de
`filename`.

### Parâmetros

`filename`
:   Caminho para um arquivo ou ligação simbólica.

### Valor Retornado

Veja a página do manual para [stat()](function.stat.md) para informações sobre
a estrutura do array retornado que **lstat()** retorna.
Esta função é idêntica à [stat()](function.stat.md) exceto que se o parâmetro
`filename` é uma ligação simbólica, e o
status da ligação simbólica é retornado e não o status do
arquivo apontado pela ligação simbólica.

Em caso de falhas retorna **`false`**.

### Erros/Exceções

Em caso de falha, um **`E_WARNING`** será emitido.

### Examples

**Exemplo #1 Comparação de [stat()](function.stat.md) e **lstat()****

```
<?php
symlink('uploads.php', 'uploads');

// Compara a informação de uploads.php e uploads
array_diff(stat('uploads'), lstat('uploads'));
?>
```

O exemplo acima produzirá
algo semelhante a:

Informação que difere entre os dois arquivos:

```
Array
(
    [ino] => 97236376
    [mode] => 33188
    [size] => 34
    [atime] => 1223580003
    [mtime] => 1223581848
    [ctime] => 1223581848
    [blocks] => 8
)
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
