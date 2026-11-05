# Obtém informações sobre um arquivo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.stat.php

---

# stat

(PHP 4, PHP 5, PHP 7, PHP 8)

stat — Obtém informações sobre um arquivo

### Descrição

function **stat**([string](language.types.string.md) `$filename`): [array](language.types.array.md)|[false](language.types.singleton.md)

Coleta estatísticas do arquivo informado em
`filename`. Se `filename` for uma
ligação simbólica, estatísticas serão do próprio arquivo, não da ligação.
Antes do PHP 7.4.0, nas compilações NTS do Windows, as estatísticas `size`,
`atime`, `mtime` e `ctime`
são da ligação simbólica, neste caso.

[lstat()](function.lstat.md) é idêntica à **stat()**
exceto que ela foi baseada no estado de ligações simbólicas.

### Parâmetros

`filename`
:   Caminho para o arquivo.

### Valor Retornado

**Formato de retorno de **stat()** e
[fstat()](function.fstat.md)**

| Numérico | Associativo | Descrição |
| --- | --- | --- |
| 0 | dev | número do dispositivo \*\*\* |
| 1 | ino | número do inode \*\*\* |
| 2 | mode | modo de proteção do inode \*\*\*\*\* |
| 3 | nlink | número de ligações |
| 4 | uid | id de usuário do proprietário \* |
| 5 | gid | id de grupo do proprietário \* |
| 6 | rdev | tipo de dispositivo, se for inode |
| 7 | size | tamanho em bytes |
| 8 | atime | horário do último acesso (timestamp Unix) |
| 9 | mtime | horário da última modificação (timestamp Unix) |
| 10 | ctime | hora da última modificação do inode (timestamp Unix) |
| 11 | blksize | tamanho do bloco de E/S no sistema de arquivos \*\* |
| 12 | blocks | número de blocos de 512 bytes alocados \*\* |

\* No Windows será sempre `0`.

\*\* Válido apenas em sistemas que suportam o tipo st\_blksize type - outros
sistemas (ex.: Windows) retornam `-1`.

\*\*\* No Windows, a partir do PHP 7.4.0, este é o número de série do volume que contém o arquivo,
que é um inteiro de 64-bits *sem sinal*, ou seja, pode sobrecarregar.
Anteriormente, era uma representação numérica da letra do dispositivo (ex.: `2`
para `C:`) para **stat()**, e `0` para
[lstat()](function.lstat.md).

\*\*\*\* No Windows, a partir do PHP 7.4.0, este é o identificador associado com o arquivo,
que é um inteiro de 64-bits *sem sinal*, ou seja, pode sobrecarregar.
Anteriormente, era sempre `0`.

\*\*\*\*\* No Windows, o bit de permissão de escrita é definido de acordo com o atributo
de somente-leitura do arquivo, e o mesmo valor é reportado para todos os usuários, grupos e proprietários.
A ACL não é levada em consideração, contrário a [is\_writable()](function.is-writable.md).

O valor de `mode` contém informação lida por várias funções.
Quando escrita em octal, começando da direita, os primeiros três dígitos são retornados por
[chmod()](function.chmod.md). O dígito seguinte é ignorado pelo PHP. Os dois dígitos seguintes indicam
o tipo de arquivo:

**Tipos de arquivo para `mode`**

| `mode` em octal | Significado |
| --- | --- |
| `0140000` | socket |
| `0120000` | ligação |
| `0100000` | arquivo normal |
| `0060000` | dispositivo de bloco |
| `0040000` | diretório |
| `0020000` | dispositivo de caracteres |
| `0010000` | fifo |

Por exemplo, um arquivo normal poderia ser `0100644` e um diretório poderia ser
`0040755`.

Em caso de erro, **stat()** retorna **`false`**.

> **Nota**:
>
> Como o tipo inteiro do PHP possui sinal e muitas plataformas usam números inteiros de 32 bits,
> algumas funções do sistema de arquivos podem retornar resultados inesperados para arquivos
> maiores que 2GB.

### Erros/Exceções

Em caso de falha, um **`E_WARNING`** é emitido.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 7.4.0 | No Windows, o número do dispositivo agora é o número de série do volume que contém o arquivo, e o número do inode é o identificador associado com o arquivo. |
| 7.4.0 | As estatísticas `size`, `atime`, `mtime` e `ctime` de ligações simbólicas agora são sempre aquelas do alvo. Anteriormente não era o caso para compilações NTS do Windows. |

### Examples

**Exemplo #1 Exemplo de **stat()****

```
<?php
/* Obtém estatística sobre o arquivo */
$stat = stat('C:\php\php.exe');

/*
 * Mostra o horário de acesso ao arquivo, é o mesmo que
 * chamar fileatime()
 */
echo 'Horário de acesso: ' . $stat['atime'];

/*
 * Mostra o horário de modificação do arquivo, é o mesmo que
 * chamar filemtime()
 */
echo 'Horário de modificação: ' . $stat['mtime'];

/* Mostra o número de dispositivo */
echo 'Número de dispositivo: ' . $stat['dev'];
?>
```

**Exemplo #2 Usando informação de **stat()** junto com a função [touch()](function.touch.md)**

```
<?php
/* Obtém estatística sobre o arquivo */
$stat = stat('C:\php\php.exe');

/* Falhou a obtenção de estatística? */
if (!$stat) {
    echo 'stat() falhou...';
} else {
    /*
     * Queremos o horário de acesso 1 semana
     * depois do atual.
     */
    $atime = $stat['atime'] + 604800;

    /* Toca o arquivo */
    if (!touch('some_file.txt', time(), $atime)) {
        echo 'Falha ao tocar o arquivo...';
    } else {
        echo 'touch() retorno com sucesso...';
    }
}
?>
```

### Notas

> **Nota**:
>
> Note que a resolução de tempo pode variar
> de um sistema de arquivos para outro.

> **Nota**:
>
> Os resultados desta
> função são armazenados em cache. Consulte a função [clearstatcache()](function.clearstatcache.md) para
> mais detalhes.

**Dica**

A partir do PHP 5.0.0, esta função
também pode ser usada com *alguns* empacotadores de URL. Consulte os
[Protocolos e empacotadores suportados](wrappers.md) para determinar quais empacotadores suportam
a família de funções **stat()**.

### Veja também

- [lstat()](function.lstat.md) - Obtém informações sobre um arquivo ou ligação simbólica
- [fstat()](function.fstat.md) - Lê informações sobre um arquivo usando um ponteiro de arquivo aberto
- [filemtime()](function.filemtime.md) - Obtém o horário de modificação do arquivo
- [filegroup()](function.filegroup.md) - Lê o grupo do arquivo
- [SplFileInfo](class.splfileinfo.md)

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
