# Obtém permissões de arquivo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fileperms.php

---

# fileperms

(PHP 4, PHP 5, PHP 7, PHP 8)

fileperms — Obtém permissões de arquivo

### Descrição

function **fileperms**([string](language.types.string.md) `$filename`): [int](language.types.integer.md)|[false](language.types.singleton.md)

Obtém as permissões para o arquivo informado.

### Parâmetros

`filename`
:   Caminho para o arquivo.

### Valor Retornado

Retorna as permissões do arquivo em modo numérico. Os bits menos significativos deste modo
são os mesmos das permissões esperadas por [chmod()](function.chmod.md),
entretanto na maioria das plataformas o valor de retorno também inclui informação sobre
o tipo do arquivo informado em `filename`. Os exemplos
abaixo demonstram como testar o valor de retorno para permissões e tipos de arquivos
específicos em sistemas POSIX, incluindo Linux e macOS.

Para aquivos locais, o valor de retorno específico é o do membro
`st_mode` da estrutura retornada pela função
[stat()](function.stat.md) da biblioteca C. Exatamente quais bits são definidos
pode variar de plataforma para plataforma, e é recomendado consultar a documentação
específica da plataforma se for necessária uma interpretação dos bits de não-permissão
do valor de retorno.

Retorna **`false`** em caso de falha.

### Erros/Exceções

Em caso de falha, um **`E_WARNING`** será emitido.

### Examples

**Exemplo #1 Mostra as permissões como um valor em octal**

```
<?php
echo substr(sprintf('%o', fileperms('/tmp')), -4);
echo substr(sprintf('%o', fileperms('/etc/passwd')), -4);
?>
```

O exemplo acima produzirá:

```
1777
0644
```

**Exemplo #2 Mostra as permissões completas**

```
<?php
$perms = fileperms('/etc/passwd');

switch ($perms & 0xF000) {
    case 0x1000: $info = 'p'; break; // pipe FIFO
    case 0x2000: $info = 'c'; break; // caractere especial
    case 0x4000: $info = 'd'; break; // diretório
    case 0x6000: $info = 'b'; break; // bloco especial
    case 0x8000: $info = '-'; break; // comum
    case 0xA000: $info = 'l'; break; // ligação simbólica (disponível ao utilizar a função lstat)
    case 0xC000: $info = 's'; break; // socket

    // desconhecido
    default: $info = 'u';
}

// Proprietário
$setuid = $perms & 0x0800;
$info .= (($perms & 0x0100) ? 'r' : '-');
$info .= (($perms & 0x0080) ? 'w' : '-');
$info .= (($perms & 0x0040) ? ($setuid ? 's' : 'x') : ($setuid ? 'S' : '-'));

// Grupo
$setgid = $perms & 0x0400;
$info .= (($perms & 0x0020) ? 'r' : '-');
$info .= (($perms & 0x0010) ? 'w' : '-');
$info .= (($perms & 0x0008) ? ($setgid ? 's' : 'x') : ($setgid ? 'S' : '-'));

// Outros
$sticky = $perms & 0x0200;
$info .= (($perms & 0x0004) ? 'r' : '-');
$info .= (($perms & 0x0002) ? 'w' : '-');
$info .= (($perms & 0x0001) ? ($sticky ? 't' : 'x') : ($sticky ? 'T' : '-'));

echo $info;
?>
```

O exemplo acima produzirá:

```
-rw-r--r--
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

- [chmod()](function.chmod.md) - Modifica as permissões do arquivo
- [is\_readable()](function.is-readable.md) - Informa se um arquivo existe e se pode ser lido
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
