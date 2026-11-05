# Uso básico

> **Fonte / Source:** https://www.php.net/manual/pt_BR/hrtime.example.basic.php

---

## Uso básico

O exemplo ilustra o uso básico da classe StopWatch

**Exemplo #1 Meça a execução de vários blocos de código e obtenha o total**

```
<?php

$c = new HRTime\StopWatch;

$c->start();
/* mede a execução deste bloco de código */
for ($i = 0; $i < 1024*1024; $i++);
$c->stop();
$elapsed0 = $c->getLastElapsedTime(HRTime\Unit::NANOSECOND);

/* a medição não está sendo executada aqui*/
for ($i = 0; $i < 1024*1024; $i++);

$c->start();
/* mede a execução deste bloco de código */
for ($i = 0; $i < 1024*1024; $i++);
$c->stop();
$elapsed1 = $c->getLastElapsedTime(HRTime\Unit::NANOSECOND);

$elapsed_total = $c->getElapsedTime(HRTime\Unit::NANOSECOND);

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
