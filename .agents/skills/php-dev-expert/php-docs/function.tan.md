# Tangente

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.tan.php

---

# tan

(PHP 4, PHP 5, PHP 7, PHP 8)

tan — Tangente

### Descrição

function **tan**([float](language.types.float.md) `$num`): [float](language.types.float.md)

**tan()** retorna a tangente do parâmetro `num`.
O argumento `num` deve estar em radianos.

### Parâmetros

`num`
:   O argumento para processar em radianos

### Valor Retornado

A tangente de `num`

### Examples

**Exemplo #1 Exemplo da **tan()****

```
<?php

echo tan(M_PI_4); // 1

?>
```

### Veja também

- [atan()](function.atan.md) - Arco tangente
- [atan2()](function.atan2.md) - Arco tangente de duas variáveis
- [sin()](function.sin.md) - Seno
- [cos()](function.cos.md) - Cosseno
- [tanh()](function.tanh.md) - Tangente hiperbólica
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
