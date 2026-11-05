# Retorna a lista de conteúdo do diretório na URL do repositório, opcionalmente no número de revisão

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.svn-ls.php

---

# svn\_ls

(PECL svn >= 0.1.0)

svn\_ls — Retorna a lista de conteúdo do diretório na URL do repositório, opcionalmente no número de revisão

### Descrição

function **svn\_ls**(  
    [string](language.types.string.md) `$repos_url`,  
    [int](language.types.integer.md) `$revision_no` = SVN\_REVISION\_HEAD,  
    [bool](language.types.boolean.md) `$recurse` = **`false`**,  
    [bool](language.types.boolean.md) `$peg` = **`false`**  
): [array](language.types.array.md)

Esta função consulta a URL do repositório e retorna uma lista de
arquivos e diretórios, opcionalmente de uma revisão específica. Isso
é equivalente a **`svn list $repos_url[@$revision_no]`**.

> **Nota**:
>
> Esta função não funciona com cópias de trabalho. `repos_url`
> *precisa* ser uma URL de repositório.

### Parâmetros

`url`
:   URL do repositório, por exemplo: **`http://www.example.com/svnroot`**.
    Para acessar um repositório Subversion local via sistema de arquivos, utilize o
    esquema de URI de arquivo, por exemplo: **`file:///home/user/svn-repos`**.

`revision`
:   Número de revisão inteiro para recuperar a listagem. Quando omitido,
    a revisão HEAD é usada.

`recurse`
:   Habilita recursividade.

### Valor Retornado

Em caso de sucesso, esta função retorna uma lista de arquivos em array no formato
de:

```
[0] => Array
    (
        [created_rev] => número de revisão inteiro da última edição
        [last_author] => string com o nome do autor da última edição
        [size] => inteiro com tamanho do arquivo em bytes
        [time] => string com a data e horário da última edição no formato 'M d H:i'
                  ou 'M d Y', dependendo de quão antigo o arquivo é
        [time_t] => inteiro com o timestamp Unix da última edição
        [name] => nome do arquivo/diretório
        [type] => titpo, pode ser 'file' (arquivo) ou 'dir' (diretório)
    )
[1] => ...
```

### Examples

**Exemplo #1 Exemplo de **svn\_ls()****

```
<?php
print_r( svn_ls('http://www.example.com/svnroot/') );
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Array
(
    [0] => Array
        (
            [created_rev] => 20
            [last_author] => Joe
            [size] => 0
            [time] => Apr 02 09:28
            [time_t] => 1175520529
            [name] => tags
            [type] => dir
        )
    [1] => Array
        (
            [created_rev] => 23
            [last_author] => Bob
            [size] => 0
            [time] => Apr 02 15:15
            [time_t] => 1175541322
            [name] => trunk
            [type] => dir
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

- [» Documentação do SVN sobre svn list](https://svnbook.red-bean.com/en/1.2/svn.ref.svn.c.list.html)

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
