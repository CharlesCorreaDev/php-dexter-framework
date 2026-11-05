# Verifica se um arquivo ou diretório existe

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.file-exists.php

---

# file\_exists

(PHP 4, PHP 5, PHP 7, PHP 8)

file\_exists — Verifica se um arquivo ou diretório existe

### Descrição

function **file\_exists**([string](language.types.string.md) `$filename`): [bool](language.types.boolean.md)

Verifica se um arquivo ou diretório existe.

### Parâmetros

`filename`
:   Caminho para o arquivo ou diretório.

    No Windows, use //computername/share/filename ou
    \\computername\share\filename para checar arquivos em
    compartilhamentos de rede.

### Valor Retornado

Retorna **`true`** se o arquivo ou diretório especificado por
`filename` existe; **`false`** caso contrário.

> **Nota**:
>
> Esta função retorna **`false`** para ligações simbólicas apontando para arquivos
> inexistentes.

> **Nota**:
>
> O teste é realizado utilizando o UID/GID real, em vez de outro valor efetivo.

> **Nota**:
>
> Como o tipo inteiro do PHP possui sinal e muitas plataformas usam números inteiros de 32 bits,
> algumas funções do sistema de arquivos podem retornar resultados inesperados para arquivos
> maiores que 2GB.

### Erros/Exceções

Em caso de falha, um **`E_WARNING`** será emitido.

### Examples

**Exemplo #1 Testando se um arquivo existe**

```
<?php
$filename = '/caminho/para/arquivo.txt';

if (file_exists($filename)) {
    echo "O arquivo $filename existe";
} else {
    echo "O arquivo $filename não existe";
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

- [is\_readable()](function.is-readable.md) - Informa se um arquivo existe e se pode ser lido
- [is\_writable()](function.is-writable.md) - Informa se o arquivo pode ser escrito
- [is\_file()](function.is-file.md) - Informa se o arquivo é um arquivo comum
- [file()](function.file.md) - Lê todo o arquivo para um array
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
