# Diz se um arquivo é executável

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.is-executable.php

---

# is\_executable

(PHP 4, PHP 5, PHP 7, PHP 8)

is\_executable — Diz se um arquivo é executável

### Descrição

function **is\_executable**([string](language.types.string.md) `$filename`): [bool](language.types.boolean.md)

Diz se um arquivo é executável.

### Parâmetros

`filename`
:   Caminho para o arquivo.

### Valor Retornado

Retorna **`true`** se o arquivo existe e é executável, ou **`false`** em
caso de erro. Em sistemas POSIX, um arquivo é executável se o bit de executável
das permissões de arquivo estiver ligado. Para Windows, veja a nota abaixo.

### Erros/Exceções

Em caso de falha, um **`E_WARNING`** será emitido.

### Examples

**Exemplo #1 Exemplo da **is\_executable()****

```
<?php

$file = '/home/vincent/arquivo.sh';

if (is_executable($file)) {
    echo $file.' é executável';
} else {
    echo $file.' não é executável';
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

> **Nota**:
>
> No Windows, um arquivo é considerado executável se for assim
> reportado pela função `GetBinaryType()` da API do Windows; por
> razões de compatibilidade, arquivos com extensões .bat ou .cmd
> também são considerados executáveis. Antes do PHP 7.4.0, qualquer arquivo não
> vazio com extensão .exe ou .com
> era considerado executável. Note que PATHEXT é irrelevante
> para a função **is\_executable()**.

### Veja também

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
