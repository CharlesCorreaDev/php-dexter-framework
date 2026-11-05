# Informa se o arquivo é um arquivo comum

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.is-file.php

---

# is\_file

(PHP 4, PHP 5, PHP 7, PHP 8)

is\_file — Informa se o arquivo é um arquivo comum

### Descrição

function **is\_file**([string](language.types.string.md) `$filename`): [bool](language.types.boolean.md)

Informa se o arquivo é um arquivo comum. Se o parâmetro `filename` apontar
para uma ligação simbólica, a função resolverá a ligação e dará informação sobre o arquivo referenciado.

### Parâmetros

`filename`
:   Caminho para o arquivo.

### Valor Retornado

Retorna **`true`** se o arquivo existe e é um arquivo comum, **`false`**
caso contrário.

> **Nota**:
>
> Como o tipo inteiro do PHP possui sinal e muitas plataformas usam números inteiros de 32 bits,
> algumas funções do sistema de arquivos podem retornar resultados inesperados para arquivos
> maiores que 2GB.

### Erros/Exceções

Em caso de falha, um **`E_WARNING`** será emitido.

### Examples

**Exemplo #1 Exemplo da **is\_file()****

```
<?php
var_dump(is_file('a_file.txt')) . "\n";
var_dump(is_file('/usr/bin/')) . "\n";
?>
```

O exemplo acima produzirá:

```
bool(true)
bool(false)
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
- [is\_link()](function.is-link.md) - Informa se o arquivo é uma ligação simbólica
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
