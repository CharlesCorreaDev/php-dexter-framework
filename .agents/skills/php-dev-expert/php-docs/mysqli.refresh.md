# Atualiza

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysqli.refresh.php

---

# mysqli::refresh

# mysqli\_refresh

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

mysqli::refresh -- mysqli\_refresh — Atualiza

**Aviso**

Esta função foi
*DESCONTINUADA* a partir do PHP 8.4.0. O uso desta função
é fortemente desencorajado.

### Descrição

Estilo orientado a objetos

#[[\Deprecated](class.deprecated.md)]  
public function **mysqli::refresh**([int](language.types.integer.md) `$flags`): [bool](language.types.boolean.md)

Estilo procedural

#[[\Deprecated](class.deprecated.md)]  
function **mysqli\_refresh**([mysqli](class.mysqli.md) `$mysql`, [int](language.types.integer.md) `$flags`): [bool](language.types.boolean.md)

Libera tabelas ou caches ou redefine as informações do servidor de replicação.

### Parâmetros

`mysql`
:   Somente no estilo procedural: Um objeto [mysqli](class.mysqli.md)
    retornado por [mysqli\_connect()](function.mysqli-connect.md) ou [mysqli\_init()](mysqli.init.md)

`flags`
:   As opções para atualizar, usando as constantes MYSQLI\_REFRESH\_\* conforme documentado
    na documentação das [MySQLi constantes](mysqli.constants.md).

    Veja também a documentação oficial do [» MySQL
    Refresh](https://dev.mysql.com/doc/c-api/8.4/en/mysql-refresh.html).

### Valor Retornado

**`true`** se a atualização foi bem-sucedida, caso contrário, **`false`**

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | O método **mysqli::refresh()** e a função **mysqli\_refresh()** foram descontinuados. No lugar deles, use o comando SQL `FLUSH`. |

### Veja também

- [mysqli\_poll()](mysqli.poll.md) - Sondagem de conexões

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
