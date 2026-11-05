# Obtém o horário de modificação do arquivo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.filemtime.php

---

# filemtime

(PHP 4, PHP 5, PHP 7, PHP 8)

filemtime — Obtém o horário de modificação do arquivo

### Descrição

function **filemtime**([string](language.types.string.md) `$filename`): [int](language.types.integer.md)|[false](language.types.singleton.md)

Esta função retorna o horário em que os blocos de dados de um arquivo estavam sendo
escritos, isto é, o horário em que o conteúdo do arquivo foi modificado.

### Parâmetros

`filename`
:   Caminho para o arquivo.

### Valor Retornado

Retorna o horário em que o arquivo foi modificado pela última vez, ou **`false`** em caso de falha.
O horário é retornado como um timestamp Unix, que é
adequado para a função [date()](function.date.md).

### Erros/Exceções

Em caso de falha, um **`E_WARNING`** será emitido.

### Examples

**Exemplo #1 Exemplo de **filemtime()****

```
<?php
// exibe algo como: arquivo.txt foi modificado em December 29 2002 22:16:23.

$filename = 'arquivo.txt';
if (file_exists($filename)) {
    echo "$filename foi modificado em " . date ("F d Y H:i:s.", filemtime($filename));
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
a família de funções [stat()](function.stat.md).

### Veja também

- [filectime()](function.filectime.md) - Obtém o horário de modificação de inode do arquivo
- [stat()](function.stat.md) - Obtém informações sobre um arquivo
- [touch()](function.touch.md) - Define horário de acesso e de modificação de arquivo
- [getlastmod()](function.getlastmod.md) - Obtém o horário da última modificação na página

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
