# Cosseno

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.cos.php

---

# cos

(PHP 4, PHP 5, PHP 7, PHP 8)

cos — Cosseno

### Descrição

function **cos**([float](language.types.float.md) `$num`): [float](language.types.float.md)

**cos()** retorna o cosseno do parâmetro `num`.
O parâmetro `num` deve estar em radianos.

### Parâmetros

`num`
:   Um ângulo em radianos

### Valor Retornado

O cosseno de `num`

### Examples

**Exemplo #1 Exemplo de **cos()****

```
<?php

echo cos(M_PI); // -1

?>
```

### Veja também

- [acos()](function.acos.md) - Arco cosseno
- [sin()](function.sin.md) - Seno
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
