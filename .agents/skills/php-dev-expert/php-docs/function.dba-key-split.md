# Divide uma chave em representação string para uma representação array

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.dba-key-split.php

---

# dba\_key\_split

(PHP 5, PHP 7, PHP 8)

dba\_key\_split — 
Divide uma chave em representação string para uma representação array

### Descrição

function **dba\_key\_split**([string](language.types.string.md)|[false](language.types.singleton.md)|[null](language.types.null.md) `$key`): [array](language.types.array.md)|[false](language.types.singleton.md)

**dba\_key\_split()** divide uma chave (representação string)
para uma representação array.

### Parâmetros

`key`
:   A chave em representação string.

### Valor Retornado

Retorna um array na forma `array(0 => grupo, 1 =>
nome_valor)`. Esta função retornará **`false`** se
`key` for **`null`** ou **`false`**.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | Passar **`null`** ou **`false`** em `key` agora está descontinuado. |

### Veja também

- [dba\_firstkey()](function.dba-firstkey.md) - Busca a primeira chave
- [dba\_nextkey()](function.dba-nextkey.md) - Busca a próxima chave
- [dba\_fetch()](function.dba-fetch.md) - Busca dados especificados por chave

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
