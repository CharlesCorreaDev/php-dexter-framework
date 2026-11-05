# Calcula o valor do hash necessário para EZMLM

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ezmlm-hash.php

---

# ezmlm\_hash

(PHP 4 >= 4.0.2, PHP 5, PHP 7)

ezmlm\_hash — Calcula o valor do hash necessário para EZMLM

**Aviso**

Esta função foi
*DESCONTINUADA* a partir do PHP 7.4.0 e foi *REMOVIDA* a partir do PHP 8.0.0. O uso desta função
é fortemente desencorajado.

### Descrição

function **ezmlm\_hash**([string](language.types.string.md) `$addr`): [int](language.types.integer.md)

**ezmlm\_hash()** calcula valor do hash necessário
ao se manter listas de e-mail EZMLM num banco de dados MySQL.

### Parâmetros

`addr`
:   O endereço de e-mail para o qual está sendo calculado o hash.

### Valor Retornado

O valor do hash de `addr`.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | Esta função foi removida. |
| 7.4.0 | Esta função foi descontinuada. |

### Examples

**Exemplo #1 Calculando o hash e inscrevendo um usuário**

```
<?php

$user = "joecool@example.com";
$hash = ezmlm_hash($user);
$query = sprintf("INSERT INTO sample VALUES (%s, '%s')", $hash, $user);
$db->query($query); // usando interface de banco de dados PHPLIB

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
