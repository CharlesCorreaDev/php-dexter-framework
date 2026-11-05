# Informa se o arquivo pode ser escrito

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.is-writable.php

---

# is\_writable

(PHP 4, PHP 5, PHP 7, PHP 8)

is\_writable — Informa se o arquivo pode ser escrito

### Descrição

function **is\_writable**([string](language.types.string.md) `$filename`): [bool](language.types.boolean.md)

Retorna **`true`** se o arquivo informado por `filename` existe e
pode ser escrito. O argumento pode ser um nome de diretório, permitindo a
verificação de permissão de escrita em um diretório.

Lembre-se que o acesso ao arquivo pelo PHP pode ser feito com o ID de usuário
com o qual o servidor web é executado (geralmente 'nobody').

### Parâmetros

`filename`
:   O arquivo a ser verificado.

### Valor Retornado

Retorna **`true`** se o arquivo em `filename` existe e
pode ser escrito.

### Erros/Exceções

Em caso de falha, um **`E_WARNING`** será emitido.

### Examples

**Exemplo #1 Exemplo de **is\_writable()****

```
<?php
$filename = 'teste.txt';
if (is_writable($filename)) {
    echo 'O arquivo possui permissão de escrita';
} else {
    echo 'O arquivo não possui permissão de escrita';
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
- [file\_exists()](function.file-exists.md) - Verifica se um arquivo ou diretório existe
- [fwrite()](function.fwrite.md) - Escrita binary-safe em arquivos

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
