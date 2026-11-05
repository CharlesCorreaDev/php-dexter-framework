# Obtém o último horário de acesso do arquivo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fileatime.php

---

# fileatime

(PHP 4, PHP 5, PHP 7, PHP 8)

fileatime — Obtém o último horário de acesso do arquivo

### Descrição

function **fileatime**([string](language.types.string.md) `$filename`): [int](language.types.integer.md)|[false](language.types.singleton.md)

Obtém o último horário de acesso do arquivo.

### Parâmetros

`filename`
:   Caminho para o arquivo.

### Valor Retornado

Retorna o horário em que um arquivo foi acessado pela última vez, ou **`false`** em caso de falha.
O horário é retornado como um timestamp Unix.

### Erros/Exceções

Em caso de falha, um **`E_WARNING`** será emitido.

### Examples

**Exemplo #1 Exemplo de **fileatime()****

```
<?php

// Exibe algo como: arquivo.txt teve o último acesso em: December 29 2002 22:16:23.

$filename = 'arquivo.txt';
if (file_exists($filename)) {
    echo "$filename teve o último acesso em: " . date ("F d Y H:i:s.", fileatime($filename));
}

?>
```

### Notas

> **Nota**:
>
> O horário de acesso de um arquivo deve mudar sempre os blocos de dados de um
> arquivo estão sendo lidos. Isto pode ser custoso do ponto de vista de desempenho quando uma
> aplicação acessa regularmente um grande número de arquivos ou
> diretórios.
>
> Alguns sistemas de arquivos Unix podem ser montados com atualizações de horário de acesso
> desabilitadas para aumentar o desempenho de tais aplicações; os spools de notícias da USENET
> são um exemplo comum. Nestes sistemas de arquivos esta função não terá utilidade.

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
- [fileinode()](function.fileinode.md) - Lê o inode do arquivo
- [date()](function.date.md) - Formata um timestamp Unix

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
