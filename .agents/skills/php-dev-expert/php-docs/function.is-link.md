# Informa se o arquivo é uma ligação simbólica

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.is-link.php

---

# is\_link

(PHP 4, PHP 5, PHP 7, PHP 8)

is\_link — Informa se o arquivo é uma ligação simbólica

### Descrição

function **is\_link**([string](language.types.string.md) `$filename`): [bool](language.types.boolean.md)

Informa se o arquivo informado é uma ligação simbólica (symbolic link).

### Parâmetros

`filename`
:   O caminho para o arquivo.

### Valor Retornado

Retorna **`true`** se o nome do arquivo existe e se é uma ligação simbólica, **`false`**
caso contrário.

### Erros/Exceções

Em caso de falha, um **`E_WARNING`** será emitido.

### Examples

**Exemplo #1 Cria e confirma se um arquivo é uma ligação simbólica**

```
<?php
$link = 'uploads';

if (is_link($link)) {
    echo readlink($link);
} else {
    symlink('uploads.php', $link);
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

- [is\_dir()](function.is-dir.md) - Diz se o caminho é um diretório
- [is\_file()](function.is-file.md) - Informa se o arquivo é um arquivo comum
- [readlink()](function.readlink.md) - Retornar o alvo de uma ligação simbólica
- [symlink()](function.symlink.md) - Cria uma ligação simbólica

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
