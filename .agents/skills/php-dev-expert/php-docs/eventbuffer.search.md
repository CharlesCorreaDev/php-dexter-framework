# Verifica o buffer em busca de uma ocorrência de uma string

> **Fonte / Source:** https://www.php.net/manual/pt_BR/eventbuffer.search.php

---

# EventBuffer::search

(PECL event >= 1.2.6-beta)

EventBuffer::search — Verifica o buffer em busca de uma ocorrência de uma string

### Descrição

public
function **EventBuffer::search**(
[string](language.types.string.md) `$what`
, 
[int](language.types.integer.md) `$start`
 = -1
, 
[int](language.types.integer.md) `$end`
 = -1
): [mixed](language.types.mixed.md)

Verifica o buffer para uma ocorrência da string
`what`
. Ele retorna a posição numérica da string, ou **`false`** se a string não foi
encontrada.

Se o argumento
`start`
for fornecido, ele aponta para a posição na qual a pesquisa deve
começar; caso contrário, a pesquisa é realizada a partir do início da string. Se o argumento
`end`
for fornecido, a pesquisa é realizada entre as posições de buffer
inicial e final.

### Parâmetros

`what`
:   String para pesquisar.

`start`
:   Posição inicial de pesquisa.

`end`
:   Posição final de pesquisa.

### Valor Retornado

Retorna a posição numérica da primeira ocorrência da string no
buffer, ou **`false`** se a string não for encontrada.

**Aviso**

Esta função pode
retornar o valor booleano **`false`**, mas também pode retornar um valor não booleano que pode ser
avaliado como **`false`**. Leia a seção sobre [Booleanos](language.types.boolean.md) para mais
informações. Use o [operador
===](language.operators.comparison.md) para testar o valor retornado por esta
função.

### Examples

**Exemplo #1
Exemplo de **EventBuffer::search()****

```
<?php
// Conta o total de ocorrências de 'str' em 'buf'
function count_instances($buf, $str) {
    $total = 0;
    $p     = 0;
    $i     = 0;

    while (1) {
        $p = $buf->search($str, $p);
        if ($p === FALSE) {
            break;
        }
        ++$total;
        ++$p;
    }

    return $total;
}

$buf = new EventBuffer();
$buf->add("Uma string dentro de uma string dentro de outra string");
var_dump(count_instances($buf, "str"));
?>
```

O exemplo acima produzirá
algo semelhante a:

```
int(3)
```

### Veja também

- [EventBuffer::searchEol()](eventbuffer.searcheol.md) - Verifica o buffer para detectar a ocorrência de um fim de linha

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
