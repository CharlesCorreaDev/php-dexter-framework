# Retorna as mensagens de registro de envios de uma URL de repositório

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.svn-log.php

---

# svn\_log

(PECL svn >= 0.1.0)

svn\_log — Retorna as mensagens de registro de envios de uma URL de repositório

### Descrição

function **svn\_log**(  
    [string](language.types.string.md) `$repos_url`,  
    [int](language.types.integer.md) `$start_revision` = ?,  
    [int](language.types.integer.md) `$end_revision` = ?,  
    [int](language.types.integer.md) `$limit` = 0,  
    [int](language.types.integer.md) `$flags` = SVN\_DISCOVER\_CHANGED\_PATHS | SVN\_STOP\_ON\_COPY  
): [array](language.types.array.md)

**svn\_log()** retorna o histórico completo do item na URL do repositório
`repos_url`, ou o histórico de uma revisão específica
se `start_revision` estiver definido. Esta função é equivalente
a **`svn log --verbose -r $start_revision $repos_url`**.

### Parâmetros

`repos_url`
:   URL do repositório do item do qual será recuperado o histórico de registros.

`start_revision`
:   Número de revisão do primeiro registro a ser recuperado. Use
    **`SVN_REVISION_HEAD`** para recuperar o registro
    da revisão mais recente.

`end_revision`
:   Número de revisão do último registro a ser recuperado. O padrão é
    `start_revision` se especificado ou
    **`SVN_REVISION_INITIAL`** caso contrário.

`limit`
:   Número de registros a serem recuperados.

`flags`
:   Qualquer combinação de **`SVN_OMIT_MESSAGES`**,
    **`SVN_DISCOVER_CHANGED_PATHS`** e
    **`SVN_STOP_ON_COPY`**.

### Valor Retornado

Em caso de sucesso, esta função retorna uma lista de arquivos em array no formato
de:

```
[0] => Array, ordenado pela revisão mais recente (mais alta) primeiro
(
    [rev] => número de revisão inteiro
    [author] => string com nome do autor
    [msg] => string com mensagem de registro
    [date] => string com data formatada conforme ISO 8601, ou seja, date('c')
    [paths] => Array, descrevendo os arquivos modificados
        (
            [0] => Array
                (
                    [action] => string com a letra explicando a alteração
                    [path] =>  caminho absoluto do repositório do arquivo alterado
                )
            [1] => ...
        )
)
[1] => ...
```

> **Nota**:
>
> A saída será sempre um array de arrays indexados numericamente,
> mesmo quando não houver nenhuma ou apenas uma mensagem de registro.

O valor de action é um subconjunto da
[» saída de status
na primeira coluna](https://svnbook.red-bean.com/en/1.2/svn.ref.svn.c.status.html), onde os valores possíveis são:

**Ações**

| Letra | Descrição |
| --- | --- |
| M | Itens/propriedades foram modificados |
| A | Item foi adicionado |
| D | Item foi excluído |
| R | Item foi substituído |

Se nenhuma alteração foi feita no item, um array vazio será retornado.

### Examples

**Exemplo #1 Exemplo de **svn\_log()****

```
<?php
print_r( svn_log('http://www.example.com/', 23) );
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Array
(
    [0] => Array
    (
        [rev] => 23
        [author] => 'joe'
        [msg] => 'Add cheese and salami to our sandwich.'
        [date] => '2007-04-06T16:00:27-04:00'
        [paths] => Array
            (
                [0] => Array
                    (
                        [action] => 'M'
                        [path] =>  '/sandwich.txt'
                    )
            )
    )
)
```

### Notas

**Aviso**

Esta função é
*EXPERIMENTAL*. O comportamento desta função, seu nome e
documentação poderão mudar sem aviso prévio em futuras versões do PHP.
Use por sua conta e risco.

### Veja também

- [» 
  Documentação do SVN sobre svn log](https://svnbook.red-bean.com/en/1.2/svn.ref.svn.c.log.html)

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
