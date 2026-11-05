# Verifica se a função está desativada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionfunction.isdisabled.php

---

# ReflectionFunction::isDisabled

(PHP 5 >= 5.2.0, PHP 7, PHP 8)

ReflectionFunction::isDisabled — Verifica se a função está desativada

**Aviso**

Esta função foi
*DESCONTINUADA* a partir do PHP 8.0.0. O uso desta função
é fortemente desencorajado.

### Descrição

#[[\Deprecated](class.deprecated.md)]  
public function **ReflectionFunction::isDisabled**(): [bool](language.types.boolean.md)

Verifica se a função está desabilitada, através da
diretiva
[disable\_functions](ini.core.md#ini.disable-functions).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

**`true`** se estiver desabilitado, caso contrário **`false`**

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | Esta função foi descontinuada, já que [ReflectionFunction](class.reflectionfunction.md) não pode mais ser construída para funções desabilitadas. |

### Veja também

- [ReflectionFunctionAbstract::isUserDefined()](reflectionfunctionabstract.isuserdefined.md) - Verifica se foi definido pelo usuário
- [A diretiva disable\_functions](ini.core.md#ini.disable-functions)

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
