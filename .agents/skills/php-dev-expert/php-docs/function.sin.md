# Seno

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.sin.php

---

# sin

(PHP 4, PHP 5, PHP 7, PHP 8)

sin — Seno

### Descrição

function **sin**([float](language.types.float.md) `$num`): [float](language.types.float.md)

**sin()** retorna o seno do parâmetro `num`.
O argumento `num` deve estar em radianos.

### Parâmetros

`num`
:   O valor em radianos

### Valor Retornado

O seno do `num`

### Examples

**Exemplo #1 Exemplo da **sin()****

```
<?php
// Precisão depende da diretiva precision
echo sin(deg2rad(60)), PHP_EOL;  //  0.866025403 ...
echo sin(60), PHP_EOL;           // -0.304810621 ...
?>
```

### Veja também

- [asin()](function.asin.md) - Arco seno
- [sinh()](function.sinh.md) - Seno hiperbólico
- [cos()](function.cos.md) - Cosseno
- [tan()](function.tan.md) - Tangente
- [deg2rad()](function.deg2rad.md) - Converte o número em graus para o equivalente em radianos

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
