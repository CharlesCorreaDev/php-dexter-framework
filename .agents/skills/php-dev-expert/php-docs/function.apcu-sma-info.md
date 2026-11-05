# Obtém informação de Alocação de Memória Compartilhada (SMA) do APCu

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.apcu-sma-info.php

---

# apcu\_sma\_info

(PECL apcu >= 4.0.0)

apcu\_sma\_info — 
Obtém informação de Alocação de Memória Compartilhada (SMA) do APCu

### Descrição

function **apcu\_sma\_info**([bool](language.types.boolean.md) `$limited` = **`false`**): [array](language.types.array.md)|[false](language.types.singleton.md)

Obtém informação de Alocação de Memória Compartilhada (SMA) do APCu.

### Parâmetros

`limited`
:   Quando definido para **`false`** (o padrão), **apcu\_sma\_info()** retornará
    uma informação detalhada sobre cada segmento.

### Valor Retornado

Array de dados de Alocação de Memória Compartilhada; **`false`** em caso de falha.

### Examples

**Exemplo #1 Um exemplo de **apcu\_sma\_info()****

```
<?php
print_r(apcu_sma_info());
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Array
(
    [num_seg] => 1
    [seg_size] => 31457280
    [avail_mem] => 31448408
    [block_lists] => Array
        (
            [0] => Array
                (
                    [0] => Array
                        (
                            [size] => 31448408
                            [offset] => 8864
                        )

                )

        )

)
```

### Veja também

- [Diretivas de configuração APCu](apcu.configuration.md)

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
