# Pesquisa pacotes RPM

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.rpmdbsearch.php

---

# rpmdbsearch

(PECL rpminfo >= 0.3.0)

rpmdbsearch — Pesquisa pacotes RPM

### Descrição

function **rpmdbsearch**(  
    [string](language.types.string.md) `$pattern`,  
    [int](language.types.integer.md) `$rpmtag` = RPMTAG\_NAME,  
    [int](language.types.integer.md) `$rpmmire` = -1,  
    [bool](language.types.boolean.md) `$full` = **`false`**  
): [?](language.types.null.md)[array](language.types.array.md)

Pesquisa pacotes no banco de dados RPM do sistema.

### Parâmetros

`pattern`
:   Valor a ser pesquisado.

`rpmtag`
:   Critério de busca, que é uma das constantes
    **`RPMTAG_*`**.

`rpmmire`
:   Tipo de padrão, que é uma das constantes
    **`RPMMIRE_*`**.
    Quando < 0, o critério deve ser igual ao valor, e o índice do banco de dados é usado, se possível.

`full`
:   Se **`true`** todos os cabeçalhos de informações do arquivo são recuperados, caso contrário, apenas um conjunto mínimo.

### Valor Retornado

Um [array](language.types.array.md) de [array](language.types.array.md) de informações, ou **`null`** em caso de erro.

### Examples

**Exemplo #1 Procurando o pacote que possui um arquivo**

```
<?php
$info = rpmdbsearch("/usr/bin/php", RPMTAG_INSTFILENAMES);
print_r($info);
?>
```

O exemplo acima produzirá:

```
Array
(
    [0] => Array
        (
            [Name] => php-cli
            [Version] => 7.4.4
            [Release] => 1.fc32
            [Summary] => Command-line interface for PHP
            [Arch] => x86_64
        )

)
```

### Veja também

- [rpmaddtag()](function.rpmaddtag.md) - Adiciona a tag recuperada na consulta

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
