# Obtém o horário de modificação de inode do arquivo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.filectime.php

---

# filectime

(PHP 4, PHP 5, PHP 7, PHP 8)

filectime — Obtém o horário de modificação de inode do arquivo

### Descrição

function **filectime**([string](language.types.string.md) `$filename`): [int](language.types.integer.md)|[false](language.types.singleton.md)

Obtém o horário de modificação do inode de um arquivo.

### Parâmetros

`filename`
:   Caminho para o arquivo.

### Valor Retornado

Retorna o horário em que o arquivo foi modificado pela última vez, ou **`false`** em caso de falha.
O horário é retornado como um timestamp Unix.

### Erros/Exceções

Em caso de falha, um **`E_WARNING`** será emitido.

### Examples

**Exemplo #1 Exemplo de **filectime()****

```
<?php

// Exibe algo como: arquivo.txt foi modificado em: December 29 2002 22:16:23.

$filename = 'arquivo.txt';
if (file_exists($filename)) {
    echo "$filename foi modificado em: " . date ("F d Y H:i:s.", filectime($filename));
}

?>
```

### Notas

> **Nota**:
>
> Nota: Na maioria dos sistemas de arquivos Unix, um arquivo é considerado modificado
> quando seus dados de inode são modificados; isto é, quando as permissões, proprietário,
> grupo ou outros metadados do inode são atualizados. Consulte também
> [filemtime()](function.filemtime.md) (que é usado quando se
> deseja criar rodapés de páginas web do tipo "Última Modificação") e
> [fileatime()](function.fileatime.md).

> **Nota**:
>
> Note também que em alguns textos sobre Unix o horário de modificação de um arquivo é definido
> como sendo o horário de criação do arquivo. Isto está errado. Não existe horário de
> criação para arquivos na maioria dos sistemas de arquivos Unix.

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

- [filemtime()](function.filemtime.md) - Obtém o horário de modificação do arquivo

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
