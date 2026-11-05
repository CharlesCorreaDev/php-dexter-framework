# Exemplo procedural de PECL/rrd

> **Fonte / Source:** https://www.php.net/manual/pt_BR/rrd.examples-procedural.php

---

## Exemplo procedural de PECL/rrd

**Exemplo #1 Uso procedural de rrd**

```
<?php
$rrdFile = dirname(__FILE__) . "/speed.rrd";

// cria arquivo rrd
rrd_create($rrdFile,
 array(
  "--start",920804400,
  "DS:speed:COUNTER:600:U:U",
  "RRA:AVERAGE:0.5:1:24",
  "RRA:AVERAGE:0.5:6:10"
  )
);

// atualiza arquivo rrd
rrd_update($rrdFile,
 array(
  "920804700:12345",
  "920805000:12357"
  )
);

// exibe o gráfico
rrd_graph(dirname(__FILE__) . "/speed.png",
 array(
  "--start", "920804400",
  "--end", "920808000",
  "--vertical-label", "m/s",
  "DEF:myspeed=$rrdFile:speed:AVERAGE",
  "CDEF:realspeed=myspeed,1000,*",
  "LINE2:realspeed#FF0000"
 )
);
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
