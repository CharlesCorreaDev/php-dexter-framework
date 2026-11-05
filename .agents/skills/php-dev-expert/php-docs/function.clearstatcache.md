# Limpa o cache de estado de arquivos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.clearstatcache.php

---

# clearstatcache

(PHP 4, PHP 5, PHP 7, PHP 8)

clearstatcache — Limpa o cache de estado de arquivos

### Descrição

function **clearstatcache**([bool](language.types.boolean.md) `$clear_realpath_cache` = **`false`**, [string](language.types.string.md) `$filename` = ""): [void](language.types.void.md)

Quando são chamadas as funções [stat()](function.stat.md), [lstat()](function.lstat.md) ou
qualquer uma das funções afetadas (listadas abaixo),
o PHP mantém em cache as informações que essas funções retornam para fornecer
desempenho mais rápido. Entretanto, em certos casos pode ser necessário limpar as
informações em cache. Por exemplo, se um mesmo arquivo é verificado
várias vezes em um único script, e esse arquivo corre o risco de
ser apagado ou modificado durante a operação do script, pode ser necessário
limpar os dados do cache. Nesses casos, pode-se utilizar a função
**clearstatcache()** para limpar as informações que
o PHP mantém em cache sobre um arquivo.

Deve-se notar também que o PHP não guarda informação em cache sobre arquivos
não existente. Assim, a função [file\_exists()](function.file-exists.md) for chamada em um arquivo que
não existe, ela retornará **`false`** até que o arquivo seja criado. Se o arquivo
for criado, ela retornará **`true`** mesmo que o arquivo seja removido.
Entretanto, a função [unlink()](function.unlink.md) limpa o cache automaticamente.

> **Nota**:
>
> Esta função guarda informações em cache sobre nomes de arquivos específicos, de forma que somente
> será necessário chamar **clearstatcache()** se estão sendo realizadas
> várias operações sobre o mesmo nome de arquivo e seja necessário que a informação
> sobre esse arquivo em particular não seja armazenada em cache.

As funções afetadas incluem [stat()](function.stat.md),
[lstat()](function.lstat.md),
[file\_exists()](function.file-exists.md),
[is\_writable()](function.is-writable.md),
[is\_readable()](function.is-readable.md),
[is\_executable()](function.is-executable.md),
[is\_file()](function.is-file.md),
[is\_dir()](function.is-dir.md),
[is\_link()](function.is-link.md),
[filectime()](function.filectime.md),
[fileatime()](function.fileatime.md),
[filemtime()](function.filemtime.md),
[fileinode()](function.fileinode.md),
[filegroup()](function.filegroup.md),
[fileowner()](function.fileowner.md),
[filesize()](function.filesize.md),
[filetype()](function.filetype.md), e
[fileperms()](function.fileperms.md).

### Parâmetros

`clear_realpath_cache`
:   Se deve-se *também* limpar o cache de caminho real.

`filename`
:   Limpa o cache de caminho real para um arquivo específico somente; apenas
    usado se `clear_realpath_cache` for **`true`**.

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Exemplo de **clearstatcache()****

```
<?php
$file = 'output_log.txt';

function get_owner($file)
{
    $stat = stat($file);
    $user = posix_getpwuid($stat['uid']);
    return $user['name'];
}

$format = "UID @ %s: %s\n";

printf($format, date('r'), get_owner($file));

chown($file, 'ross');
printf($format, date('r'), get_owner($file));

clearstatcache();
printf($format, date('r'), get_owner($file));
?>
```

O exemplo acima produzirá
algo semelhante a:

```
UID @ Sun, 12 Oct 2008 20:48:28 +0100: root
UID @ Sun, 12 Oct 2008 20:48:28 +0100: root
UID @ Sun, 12 Oct 2008 20:48:28 +0100: ross
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
