# Obtém o tipo do arquivo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.filetype.php

---

# filetype

(PHP 4, PHP 5, PHP 7, PHP 8)

filetype — Obtém o tipo do arquivo

### Descrição

function **filetype**([string](language.types.string.md) `$filename`): [string](language.types.string.md)|[false](language.types.singleton.md)

Retorna o tipo do arquivo informado.

### Parâmetros

`filename`
:   Caminho para o arquivo.

### Valor Retornado

Retorna o tipo do arquivo. Os valores possíveis são 'fifo' (fila), 'char' (caractere),
'dir' (diretório), 'block' (bloco), 'link' (ligação), 'file' (arquivo), 'socket' (soquete) e 'unknown' (desconhecido).

Retorna **`false`** se ocorrer um erro. **filetype()** também
produzirá uma mensagem **`E_NOTICE`** se a chamada 'stat'
falhar ou se o tipo do arquivo for desconhecido.

### Erros/Exceções

Em caso de falha, um **`E_WARNING`** será emitido.

### Examples

**Exemplo #1 Exemplo de **filetype()****

```
<?php

echo filetype('/etc/passwd');
echo "\n";
echo filetype('/etc/');

?>
```

O exemplo acima produzirá:

```
file
dir
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
- [is\_link()](function.is-link.md) - Informa se o arquivo é uma ligação simbólica
- [file\_exists()](function.file-exists.md) - Verifica se um arquivo ou diretório existe
- [mime\_content\_type()](function.mime-content-type.md) - Detecta o tipo de conteúdo MIME de um arquivo
- [pathinfo()](function.pathinfo.md) - Retorna informações sobre um caminho de arquivo
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
