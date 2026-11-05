# Configura ou obtêm o parâmetro escala para todas as funções bc

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.bcscale.php

---

# bcscale

(PHP 4, PHP 5, PHP 7, PHP 8)

bcscale — Configura ou obtêm o parâmetro escala para todas as funções bc

### Descrição

function **bcscale**([int](language.types.integer.md) `$scale`): [int](language.types.integer.md)

Configura o parâmetro de escala padrão para todas as chamadas subsequentes às funções bcmath
que não tenham o parâmatro escala informado explicitamente.

function **bcscale**([null](language.types.null.md) `$scale` = **`null`**): [int](language.types.integer.md)

Retorna o valor de escala atual.

### Parâmetros

`scale`
:   O fator de escala.

### Valor Retornado

Retorna o valor de escala antigo quando configurando um novo, senão retorna o valor atual.

### Erros/Exceções

Esta função lança uma exceção [ValueError](class.valueerror.md) se `scale`
estiver fora do intervalo válido.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `scale` agora pode ser null. |
| 7.3.0 | **bcscale()** pode ser utilizado para obter o falor de escala atual, quando utilizado para configurar. Anteriormente, `scale` era obrigatório, e **bcscale()** sempre retornava **`true`**. |

### Examples

**Exemplo #1 Exemplo da **bcscale()****

```
<?php

// Escala default: 3
bcscale(3);
echo bcdiv('105', '6.55957'); // 16.007

// Obtém o mesmo resultado sem bcscale()
echo bcdiv('105', '6.55957', 3); // 16.007

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
