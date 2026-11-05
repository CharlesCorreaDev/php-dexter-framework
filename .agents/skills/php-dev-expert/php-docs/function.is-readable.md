# Informa se um arquivo existe e se pode ser lido

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.is-readable.php

---

# is\_readable

(PHP 4, PHP 5, PHP 7, PHP 8)

is\_readable — Informa se um arquivo existe e se pode ser lido

### Descrição

function **is\_readable**([string](language.types.string.md) `$filename`): [bool](language.types.boolean.md)

Informa se um arquivo existe e se pode ser lido.

### Parâmetros

`filename`
:   Caminho para o arquivo.

### Valor Retornado

Retorna **`true`** se o arquivo ou diretório especificado por
`filename` existe e pode ser lido, **`false`** caso contrário.

### Erros/Exceções

Em caso de falha, um **`E_WARNING`** será emitido.

### Examples

**Exemplo #1 Exemplo de **is\_readable()****

```
<?php
$filename = 'teste.txt';
if (is_readable($filename)) {
    echo 'O arquivo pode ser lido.';
} else {
    echo 'O arquivo não pode ser lido.';
}
?>
```

### Notas

Lembre-se que o PHP pode acessar o arquivo como o ID de usuário
com o qual o servidor web é executado (geralmente 'nobody').

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

> **Nota**:
>
> A verificação é feita usando os UID/GID reais em vez dos efetivos.

Essa função pode retornar **`true`** para diretórios. Use a função
[is\_dir()](function.is-dir.md) para distinguir arquivo de diretório.

### Veja também

- [is\_writable()](function.is-writable.md) - Informa se o arquivo pode ser escrito
- [file\_exists()](function.file-exists.md) - Verifica se um arquivo ou diretório existe
- [fgets()](function.fgets.md) - Lê uma linha de um ponteiro de arquivo

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
