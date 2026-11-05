# Retorna uma lista de chamadas instrumentadas que ocorreram

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.scoutapm-get-calls.php

---

# scoutapm\_get\_calls

(PECL scoutapm >= 1.0.0)

scoutapm\_get\_calls — Retorna uma lista de chamadas instrumentadas que ocorreram

### Descrição

function **scoutapm\_get\_calls**(): [array](language.types.array.md)

Retorna uma lista de todas as chamadas de função instrumentadas desde a última chamada de **scoutapm\_get\_calls()**. A lista é limpa sempre que a função é chamada.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

**scoutapm\_get\_calls()** retorna um array contendo uma lista
de todas as chamadas registradas a funções instrumentadas.

### Examples

**Exemplo #1 Buscando chamadas instrumentadas**

```
<?php

file_get_contents('a.txt');
file_get_contents('b.txt');

print_r(scoutapm_get_calls());
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Array
(
    [0] => Array
        (
            [function] => file_get_contents
            [entered] => 1576839727.7934
            [exited] => 1576839727.7935
            [time_taken] => 2.7894973754883E-5
            [argv] => Array
                (
                    [0] => a.txt
                )

        )

    [1] => Array
        (
            [function] => file_get_contents
            [entered] => 1576839727.7935
            [exited] => 1576839727.7935
            [time_taken] => 7.8678131103516E-6
            [argv] => Array
                (
                    [0] => b.txt
                )

        )

)
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
