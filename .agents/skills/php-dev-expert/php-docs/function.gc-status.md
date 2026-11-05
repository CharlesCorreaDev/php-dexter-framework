# Obtém informações sobre o coletor de lixo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.gc-status.php

---

# gc\_status

(PHP 7 >= 7.3.0, PHP 8)

gc\_status — Obtém informações sobre o coletor de lixo

### Descrição

function **gc\_status**(): [array](language.types.array.md)

Obtém informações sobre o status atual do coletor de lixo.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um array associativo com os seguintes elementos:

- `"runs"`
- `"collected"`
- `"threshold"`
- `"roots"`
- `"running"`
- `"protected"`
- `"full"`
- `"buffer_size"`
- `"application_time"`
- `"collector_time"`
- `"destructor_time"`
- `"free_time"`

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.3.0 | **gc\_status()** agora retorna os seguintes campos adicionais: `"running"`, `"protected"`, `"full"`, `"buffer_size"`, `"application_time"`, `"collector_time"`, `"destructor_time"` e `"free_time"`. |

### Examples

**Exemplo #1 Uso de **gc\_status()****

```
<?php

// cria árvore de objetos que precisam de coleta de lixo
$a = new stdClass();
$a->b = [];
for ($i = 0; $i < 100000; $i++) {
    $b = new stdClass();
    $b->a = $a;
    $a->b[] = $b;
}
unset($a);
unset($b);
gc_collect_cycles();

var_dump(gc_status());
```

O exemplo acima produzirá
algo semelhante a:

```
array(4) {
  ["runs"]=>
  int(5)
  ["collected"]=>
  int(100002)
  ["threshold"]=>
  int(50001)
  ["roots"]=>
  int(0)
}
```

A saída do exemplo acima no PHP 8.3 é semelhante a:

```
array(12) {
  ["running"]=>
  bool(false)
  ["protected"]=>
  bool(false)
  ["full"]=>
  bool(false)
  ["runs"]=>
  int(5)
  ["collected"]=>
  int(100002)
  ["threshold"]=>
  int(50001)
  ["buffer_size"]=>
  int(131072)
  ["roots"]=>
  int(0)
  ["application_time"]=>
  float(0.031182458)
  ["collector_time"]=>
  float(0.020106291)
  ["destructor_time"]=>
  float(0)
  ["free_time"]=>
  float(0.003707167)
}
```

### Veja também

- [Coleta de Lixo](features.gc.md)

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
