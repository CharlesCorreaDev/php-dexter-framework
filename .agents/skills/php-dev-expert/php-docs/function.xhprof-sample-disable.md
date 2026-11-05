# Interrompe o perfilador de amostra xhprof

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.xhprof-sample-disable.php

---

# xhprof\_sample\_disable

(PECL xhprof >= 0.9.0)

xhprof\_sample\_disable — Interrompe o perfilador de amostra xhprof

### Descrição

function **xhprof\_sample\_disable**(): [?](language.types.null.md)[array](language.types.array.md)

Interrompe o perfilador xhprof do modo de amostragem e retorna as informações do perfil.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Um [array](language.types.array.md) de dados de amostra do xhprof, da execução.
Retorna **`null`** se a criação de perfil não estiver habilitada.

### Examples

**Exemplo #1 Exemplo de **xhprof\_sample\_disable()****

```
<?php
xhprof_sample_enable();

for ($i = 0; $i <= 10000; $i++) {
    $a = strlen($i);
    $b = $i * $a;
    $c = rand();
}

$xhprof_data = xhprof_sample_disable();

print_r($xhprof_data);
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Array
(
    [1272935300.800000] => main()
    [1272935300.900000] => main()
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
