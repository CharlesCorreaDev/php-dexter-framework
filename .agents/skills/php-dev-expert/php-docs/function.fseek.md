# Aponta para uma posição no arquivo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fseek.php

---

# fseek

(PHP 4, PHP 5, PHP 7, PHP 8)

fseek — Aponta para uma posição no arquivo

### Descrição

function **fseek**([resource](language.types.resource.md) `$stream`, [int](language.types.integer.md) `$offset`, [int](language.types.integer.md) `$whence` = **`SEEK_SET`**): [int](language.types.integer.md)

Modifica o indicador de posição do arquivo referenciado por
`stream`. A nova posição, medida em bytes a partir
do início do arquivo, é obtida ao adicionar
`offset` à posição especificada por
`whence`.

Geralmente é permitido apontar para além do fim-do-arquivo; se algum dado for então
escrito, leituras além de qualquer região escrita entre o fim-do-arquivo e a região desejada
irão trazer bytes com valor 0. Entretanto, alguns fluxos
podem não suportar esse comportamento, especialmente quando têm definido
um tamanho de armazenamento fixo.

### Parâmetros

`stream`
:   Um [resource](language.types.resource.md) de ponteiro do sistema de arquivos
    que normalmente é criado usando [fopen()](function.fopen.md).

`offset`
:   A posição.

    Para apontar para uma posição anterior ao fim-do-arquivo,
    um valor negativo em `offset` deve ser passado
    e o parâmetro `whence` deve ser definido
    para **`SEEK_END`**.

`whence`
:   Valores de `whence` são:

    - **`SEEK_SET`** - Define a posição igual ao número de bytes informado em `offset` desde o início do arquivo.
    - **`SEEK_CUR`** - Define a posição para a localização atual mais o número de bytes informado em `offset`.
    - **`SEEK_END`** - Define a posição para o final do arquivo mais o número de bytes informado em `offset`.

### Valor Retornado

Em caso de sucesso, retorna `0`;
caso contrário, retorna `-1`.

**Aviso**

Esta função foi criada para imitar a função de mesmo nome da linguagem C.
Atenção aos valores de retorno, pois eles diferem do
esperado no PHP.

### Examples

**Exemplo #1 Exemplo de **fseek()****

```
<?php

$fp = fopen('arquivo.txt');

// lê alguns dados
$data = fgets($fp, 4096);

// move de volta para o inicio do arquivo
// o mesmo que rewind($fp);
fseek($fp, 0);

?>
```

### Notas

> **Nota**:
>
> Se o arquivo foi aberto em modo de adição (`a` ou `a+`), quaisquer dados que
> sejam escritos no arquivo serão sempre acrescentados ao final, independente da
> posição do arquivo, e o resultado da chamada a
> **fseek()** será indefinido.

> **Nota**:
>
> Nem todos os fluxos suportam pesquisa. Para aqueles que não suportam,
> pesquisas além da posição atual podem ser feitas através
> da leitura e descarte de dados; outras formas de pesquisa irão falhar.

### Veja também

- [ftell()](function.ftell.md) - Retorna a posição atual do ponteiro de leitura/gravação do arquivo
- [rewind()](function.rewind.md) - Retrocede a posição de um ponteiro de arquivos

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
