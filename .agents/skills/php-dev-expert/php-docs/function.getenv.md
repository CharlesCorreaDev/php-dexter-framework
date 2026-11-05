# Obtém o valor de uma única ou de todas as variáveis ​​de ambiente

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.getenv.php

---

# getenv

(PHP 4, PHP 5, PHP 7, PHP 8)

getenv — Obtém o valor de uma única ou de todas as variáveis ​​de ambiente

### Descrição

function **getenv**([?](language.types.null.md)[string](language.types.string.md) `$name` = **`null`**, [bool](language.types.boolean.md) `$local_only` = **`false`**): [string](language.types.string.md)|[array](language.types.array.md)|[false](language.types.singleton.md)

Obtém o valor de uma única ou de todas as variáveis ​​de ambiente.

Uma lista de todas as variáveis dem ambiente pode ser vista usando
[phpinfo()](function.phpinfo.md). Muitas dessas variáveis ​​estão listadas na
[» RFC 3875](https://datatracker.ietf.org/doc/html/rfc3875), especificamente na
seção 4.1, "Request Meta-Variables".

### Parâmetros

`name`
:   O nome da variável como uma [string](language.types.string.md) ou **`null`**.

`local_only`
:   Quando definido como **`true`**, apenas variáveis ​​de ambiente locais são retornadas, definidas pelo sistema operacional ou por putenv.
    Só tem efeito quando `name` é uma [string](language.types.string.md).

### Valor Retornado

Retorna o valor da variável de ambiente
`name` ou **`false`** se a variável de
ambiente `name` não existir.
Se `name` for **`null`**, todas as variáveis ​​de ambiente serão
retornadas como um [array](language.types.array.md) associativo.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `name` agora pode ser nulo. |
| 7.1.0 | O `name` agora pode ser omitido para recuperar um [array](language.types.array.md) associativo de todas as variáveis ​​de ambiente. |
| 7.0.9 | O parâmetro `local_only` foi adicionado. |

### Examples

**Exemplo #1 Exemplo de **getenv()****

```
<?php
// Exemplo de uso de getenv()
$ip = getenv('REMOTE_ADDR');

// Ou simplesmente usa uma variável super global ($_SERVER ou $_ENV)
$ip = $_SERVER['REMOTE_ADDR'];

// Obtenha com segurança o valor de uma variável de ambiente, ignorando se
// ela foi definida ou não por uma SAPI ou se foi alterada com putenv
$ip = getenv('REMOTE_ADDR', true) ?: getenv('REMOTE_ADDR')
?>
```

### Notas

**Aviso**

Se o PHP estiver sendo executado em uma SAPI como o Fast CGI, esta função sempre
retornará o valor de uma variável de ambiente definida pela SAPI,
mesmo que [putenv()](function.putenv.md) tenha sido usada para definir uma variável
de ambiente local de mesmo nome. Use o parâmetro `local_only`
para retornar o valor das variáveis ​​de ambiente definidas localmente.

### Veja também

- [putenv()](function.putenv.md) - Define o valor de uma variável de ambiente
- [apache\_getenv()](function.apache-getenv.md) - Retorna uma variável subprocess\_env do Apache
- [Super Globais](language.variables.superglobals.md)

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
