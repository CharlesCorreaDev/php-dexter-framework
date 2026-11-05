# Habilita/desabilita o tratamento de sinal assíncrono ou retorna a configuração antiga

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pcntl-async-signals.php

---

# pcntl\_async\_signals

(PHP 7 >= 7.1.0, PHP 8)

pcntl\_async\_signals — Habilita/desabilita o tratamento de sinal assíncrono ou retorna a configuração antiga

### Descrição

function **pcntl\_async\_signals**([?](language.types.null.md)[bool](language.types.boolean.md) `$enable` = **`null`**): [bool](language.types.boolean.md)

Se o parâmetro `enable` for **`null`**,
**pcntl\_async\_signals()** retornará se o tratamento de sinais assíncronos
está habilitado. Caso contrário, o tratamento de sinais assíncronos estará habilitado ou
desabilitado.

### Parâmetros

`enable`
:   Se o tratamento de sinal assíncrono deve ser habilitado.

### Valor Retornado

Quando usado como getter (o parâmetro `enable` é **`null`**), ele retorna
se o tratamento de sinais assíncronos está habilitado. Quando usado como setter (o parâmetro `enable`
não é **`null`**), ele retorna se o tratamento de sinais assíncronos
estava habilitado *antes* da chamada da função.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `enable` agora é anulável. |

### Veja também

- [declare](control-structures.declare.md)

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
