# Define limites de recursos do sistema

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.posix-setrlimit.php

---

# posix\_setrlimit

(PHP 7, PHP 8)

posix\_setrlimit — Define limites de recursos do sistema

### Descrição

function **posix\_setrlimit**([int](language.types.integer.md) `$resource`, [int](language.types.integer.md) `$soft_limit`, [int](language.types.integer.md) `$hard_limit`): [bool](language.types.boolean.md)

**posix\_setrlimit()** define os limites flexíveis e rígidos para
um determinado recurso do sistema.

Cada recurso tem um limite flexível e um limite rígido associado. O limite
flexível é o valor que o kernel impõe ao recurso
correspondente. O limite rígido funciona com um teto máximo para o limite flexível.
Um processo sem privilégios pode apenas definir seu limite flexível para um valor
entre 0 e o limite rígido e reduzir irreversivelmente seu limite rígido.

### Parâmetros

`resource`
:   A
    [constante de limite de recurso](posix.constants.setrlimit.md)
    correspondente ao limite que está sendo definido.

`soft_limit`
:   O limite flexível, na unidade que o limite de recurso necessitar ou
    **`POSIX_RLIMIT_INFINITY`**.

`hard_limit`
:   O limite rígido, na unidade que o limite de recurso necessitar ou
    **`POSIX_RLIMIT_INFINITY`**.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.5.0 | Agora lança um [ValueError](class.valueerror.md) quando `hard_limit` ou `soft_limit` são menores que -1 ou quando `soft_limit` é maior que `hard_limit`. |

### Veja também

- Página SETRLIMIT(2) do manual POSIX
- [posix\_getrlimit()](function.posix-getrlimit.md) - Retorna informações sobre limites de recursos do sistema

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
