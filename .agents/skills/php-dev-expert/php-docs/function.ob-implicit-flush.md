# Liga ou desliga o descarregamento implícito

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ob-implicit-flush.php

---

# ob\_implicit\_flush

(PHP 4, PHP 5, PHP 7, PHP 8)

ob\_implicit\_flush — Liga ou desliga o descarregamento implícito

### Descrição

function **ob\_implicit\_flush**([bool](language.types.boolean.md) `$enable` = **`true`**): [void](language.types.void.md)

**ob\_implicit\_flush()** ativará ou desativará o descarregamento
implícito. O descarregamento implícito resultará em uma operação de envio após cada bloco de
código que resulte em saída, de modo que chamadas explícitas a [flush()](function.flush.md)
não serão mais necessárias.

> **Nota**:
>
> Imprimir strings vazias ou enviar cabeçalhos não é considerado saída
> e não resultará em uma operação de descarregamento.

> **Nota**:
>
> Esta função não tem nenhum efeito nos manipuladores de saída no nível do usuário,
> como aqueles iniciados por [ob\_start()](function.ob-start.md)
> ou [output\_add\_rewrite\_var()](function.output-add-rewrite-var.md).

### Parâmetros

`enable`
:   **`true`** para ligar o descarregamento implícito, **`false`** para desligar.

### Valor Retornado

Nenhum valor é retornado.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `enable` agora espera um valor do tipo [bool](language.types.boolean.md); anteriormente, um [int](language.types.integer.md) era esperado. |

### Veja também

- [flush()](function.flush.md) - Descarrega o buffer na saída do sistema
- [ob\_start()](function.ob-start.md) - Ativa o buffer de saída
- [ob\_end\_flush()](function.ob-end-flush.md) - Descarrega (envia) o valor de retorno do manipulador de saída ativo
  e desliga o buffer de saída ativo

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
