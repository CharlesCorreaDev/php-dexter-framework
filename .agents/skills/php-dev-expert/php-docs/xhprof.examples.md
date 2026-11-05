# Examples

> **Fonte / Source:** https://www.php.net/manual/pt_BR/xhprof.examples.php

---

# Examples

**Exemplo #1 Exemplo de Xhprof com a GUI opcional**

Este exemplo inicia e interrompe o perfilador e, em seguida, usa a interface gráfica
incluída para salvar e analisar os resultados. Em outras palavras, o
código da própria extensão termina na chamada para
[xhprof\_disable()](function.xhprof-disable.md).

```
<?php
xhprof_enable(XHPROF_FLAGS_CPU + XHPROF_FLAGS_MEMORY);

for ($i = 0; $i <= 1000; $i++) {
    $a = $i * $i;
}

$xhprof_data = xhprof_disable();

$XHPROF_ROOT = "/tools/xhprof/";
include_once $XHPROF_ROOT . "/xhprof_lib/utils/xhprof_lib.php";
include_once $XHPROF_ROOT . "/xhprof_lib/utils/xhprof_runs.php";

$xhprof_runs = new XHProfRuns_Default();
$run_id = $xhprof_runs->save_run($xhprof_data, "xhprof_testing");

echo "http://localhost/xhprof/xhprof_html/index.php?run={$run_id}&source=xhprof_testing\n";

?>
```

O exemplo acima produzirá
algo semelhante a:

```
http://localhost/xhprof/xhprof_html/index.php?run=t11_4bdf44d21121f&source=xhprof_testing
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
