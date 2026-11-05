# Testa pelo fim-de-arquivo em um ponteiro de arquivo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.feof.php

---

# feof

(PHP 4, PHP 5, PHP 7, PHP 8)

feof — Testa pelo fim-de-arquivo em um ponteiro de arquivo

### Descrição

function **feof**([resource](language.types.resource.md) `$stream`): [bool](language.types.boolean.md)

Testa pelo fim-de-arquivo em um ponteiro de arquivo.

### Parâmetros

`stream`
:   O ponteiro de arquivo deve ser válido e deve apontar para
    um arquivo aberto com sucesso por [fopen()](function.fopen.md) ou
    [fsockopen()](function.fsockopen.md) (e ainda não fechado por
    [fclose()](function.fclose.md)).

### Valor Retornado

Retorna **`true`** se o ponteiro estiver no fim do arquivo ou um erro ocorrer
(incluindo um limite de tempo de socket); caso contrário retorna **`false`**.

### Notas

**Aviso**

Se uma conexão aberta por [fsockopen()](function.fsockopen.md) não foi
fechada pelo servidor, **feof()** irá travar. Para contornar isto, veja
o exemplo abaixo:

**Exemplo #1 Manipulando limites de tempo com **feof()****

```
<?php
function safe_feof($fp, &$start = NULL) {
 $start = microtime(true);

 return feof($fp);
}

/* Assumindo que $fp foi previamente aberto por fsockopen() */

$start = NULL;
$timeout = ini_get('default_socket_timeout');

while(!safe_feof($fp, $start) && (microtime(true) - $start) < $timeout)
{
 /* Manipulação */
}
?>
```

**Aviso**

Se o ponteiro de arquivo passado não for válido pode-se chegar a um loop infinito, porque
**feof()** falha em retornar **`true`**.

**Exemplo #2 Exemplo de **feof()** com um ponteiro de arquivo inválido**

```
<?php
// se o arquivo não puder ser lido ou não existir a função fopen retorna FALSE
$file = @fopen("no_such_file", "r");

// FALSE a partir do fopen irá emitir um aviso (warning) e resultar em um loop infinito aqui
while (!feof($file)) {
}

fclose($file);
?>
```

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
