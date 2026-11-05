# Converte o número em radianos para o equivalente em graus

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.rad2deg.php

---

# rad2deg

(PHP 4, PHP 5, PHP 7, PHP 8)

rad2deg — 
Converte o número em radianos para o equivalente em graus

### Descrição

function **rad2deg**([float](language.types.float.md) `$num`): [float](language.types.float.md)

Esta função converte `num` de radianos
para graus.

### Parâmetros

`num`
:   Um valor em radianos

### Valor Retornado

O equivalente de `num` em graus

### Examples

**Exemplo #1 Exemplo de **rad2deg()****

```
<?php

echo rad2deg(M_PI_4); // 45

?>
```

### Veja também

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
