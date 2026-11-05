# Uso básico de VarnishStat

> **Fonte / Source:** https://www.php.net/manual/pt_BR/varnish.example.stat.php

---

## Uso básico de VarnishStat

O exemplo ilustra como obter um instantâneo de estatísticas do Varnish a partir da memória
compartilhada

**Exemplo #1 Obtendo instantâneo de estatísticas**

```
<?php

$vs = new VarnishStat;

try {
    $data = $vs->getSnapshot();
} catch (VarnishException $e) {
    echo $e->getMessage();
    exit(3);
}

exit(0);
?>
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
