# Uso básico de VarnishLog

> **Fonte / Source:** https://www.php.net/manual/pt_BR/varnish.example.log.php

---

## Uso básico de VarnishLog

O exemplo ilustra a leitura de linhas de registro do Varnish da memória compartilhada

**Exemplo #1 Lendo o registro de memória compartilhada do Varnish**

```
<?php

$vl = new VarnishLog;
while(1) {
    $line = $vl->getLine();
    printf("%s %d %s", VarnishLog::getTagName($line['tag']), $line['id'],
    $line['data']);
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
