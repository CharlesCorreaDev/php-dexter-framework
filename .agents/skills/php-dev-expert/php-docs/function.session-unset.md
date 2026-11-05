# Libera todas as variáveis de sessão

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.session-unset.php

---

# session\_unset

(PHP 4, PHP 5, PHP 7, PHP 8)

session\_unset — Libera todas as variáveis de sessão

### Descrição

function **session\_unset**(): [bool](language.types.boolean.md)

A função **session\_unset()** libera todas as variáveis atualmente
registradas na sessão.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 7.2.0 | O tipo de retorno desta função é [bool](language.types.boolean.md) agora. Anteriormente, era [void](language.types.void.md). |

### Notas

> **Nota**:
>
> Se [$\_SESSION](reserved.variables.session.md) é usado, use [unset()](function.unset.md) para
> desregistrar a variável da sessão, isto é,
> `unset($_SESSION['varname']);`.

**Cuidado**

NÃO elimine completamente [$\_SESSION](reserved.variables.session.md) com
`unset($_SESSION)` já que isto desabilitará o registro de
variáveis de sessão através da super global [$\_SESSION](reserved.variables.session.md).

> **Nota**:
>
> O uso de **session\_unset()** é idêntico a `$_SESSION = []`.

**Cuidado**

Esta função funciona apenas se uma sessão estiver ativa. Não limpará o
array [$\_SESSION](reserved.variables.session.md) se a sessão ainda não foi iniciada
ou já foi destruída. Use `$_SESSION = []` para desmontar todas as
variáveis de sessão mesmo que a sessão não esteja ativa.

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
