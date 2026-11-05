# Define o tamanho do pacote do fluxo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.stream-set-chunk-size.php

---

# stream\_set\_chunk\_size

(PHP 5 >= 5.4.0, PHP 7, PHP 8)

stream\_set\_chunk\_size — Define o tamanho do pacote do fluxo

### Descrição

function **stream\_set\_chunk\_size**([resource](language.types.resource.md) `$stream`, [int](language.types.integer.md) `$size`): [int](language.types.integer.md)

Define o tamanho do pacote do fluxo.

### Parâmetros

`stream`
:   O fluxo alvo.

`size`
:   O novo tamanho de pacote desejado.

### Valor Retornado

Retorna o tamanho anterior em caso de sucesso.

### Erros/Exceções

Uma exceção [ValueError](class.valueerror.md) é disparada se `size`
for menor que 1 ou maior que **`PHP_INT_MAX`**.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | Uma exceção [ValueError](class.valueerror.md) agora é disparada se `size` for menor que 1 ou maior que **`PHP_INT_MAX`**. Anteriormente, um aviso **`E_WARNING`** era emitido e **`false`** era retornado. |

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
