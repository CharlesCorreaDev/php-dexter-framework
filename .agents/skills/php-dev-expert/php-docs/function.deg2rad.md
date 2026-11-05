# Converte o número em graus para o equivalente em radianos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.deg2rad.php

---

# deg2rad

(PHP 4, PHP 5, PHP 7, PHP 8)

deg2rad — 
Converte o número em graus para o equivalente em radianos

### Descrição

function **deg2rad**([float](language.types.float.md) `$num`): [float](language.types.float.md)

Esta função converte `num` de graus
para o equivalente em radianos.

### Parâmetros

`num`
:   Valor do ângulo em graus

### Valor Retornado

O radiano equivalente ao `num`

### Examples

**Exemplo #1 Exemplo de **deg2rad()****

```
<?php

echo deg2rad(45), PHP_EOL; // 0.785398163397
var_dump(deg2rad(45) === M_PI_4); // bool(true)

?>
```

### Veja também

- [rad2deg()](function.rad2deg.md) - Converte o número em radianos para o equivalente em graus

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
