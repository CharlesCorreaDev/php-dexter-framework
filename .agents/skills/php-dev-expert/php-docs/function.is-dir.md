# Diz se o caminho é um diretório

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.is-dir.php

---

# is\_dir

(PHP 4, PHP 5, PHP 7, PHP 8)

is\_dir — Diz se o caminho é um diretório

### Descrição

function **is\_dir**([string](language.types.string.md) `$filename`): [bool](language.types.boolean.md)

Informa se o dado nome de arquivo é um diretório.

### Parâmetros

`filename`
:   Caminho para o arquivo. Se `filename` for um
    nome de arquivo relativo, será verificado relativamente ao diretório
    atual de trabalho. Se `filename` for uma ligação simbólica ou ligação rígida
    então a ligação será resolvida e validado. Se
    [open\_basedir](ini.core.md#ini.open-basedir) estiver habilitado
    restrições adicionais podem ser aplicáveis.

### Valor Retornado

Retorna **`true`** se o nome do arquivo existe e é um diretório, **`false`**
caso contrário.

### Erros/Exceções

Em caso de falha, um **`E_WARNING`** será emitido.

### Examples

**Exemplo #1 Exemplo da **is\_dir()****

```
<?php
var_dump(is_dir('a_file.txt'));
var_dump(is_dir('bogus_dir/abc'));

var_dump(is_dir('..')); // um diretório acima
?>
```

O exemplo acima produzirá:

```
bool(false)
bool(false)
bool(true)
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

- [chdir()](function.chdir.md) - Muda o diretório
- [dir()](function.dir.md) - Retorna uma instância da classe Directory
- [opendir()](function.opendir.md) - Abre um manipulador de diretório
- [is\_file()](function.is-file.md) - Informa se o arquivo é um arquivo comum
- [is\_link()](function.is-link.md) - Informa se o arquivo é uma ligação simbólica

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
