# Inicializa o MySQLi e retorna um objeto a ser utilizado com mysqli_real_connect()

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysqli.init.php

---

# mysqli::init

# mysqli\_init

(PHP 5, PHP 7, PHP 8)

mysqli::init -- mysqli\_init — Inicializa o MySQLi e retorna um objeto a ser utilizado com mysqli\_real\_connect()

### Descrição

Estilo orientado a objetos

#[[\Deprecated](class.deprecated.md)]  
public function **mysqli::init**(): [?](language.types.null.md)[bool](language.types.boolean.md)

Estilo procedural

function **mysqli\_init**(): [mysqli](class.mysqli.md)|[false](language.types.singleton.md)

Aloca ou inicializa um objeto MYSQL adequado para as funções
[mysqli\_options()](mysqli.options.md) e [mysqli\_real\_connect()](mysqli.real-connect.md).

> **Nota**:
>
> Chamadas subsequentes a quaisquer funções mysqli (exceto [mysqli\_options()](mysqli.options.md)
> e [mysqli\_ssl\_set()](mysqli.ssl-set.md))
> irão falhar até que [mysqli\_real\_connect()](mysqli.real-connect.md) seja chamada.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

**mysqli::init()** retorna **`null`** em caso de sucesso, ou **`false`** em caso de falha.
**mysqli\_init()** retorna um objeto em caso de sucesso, ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O método **mysqli::init()** com estilo orientado a objeto foi descontinuado. Substitua as chamadas a **parent::init()** por **parent::\_\_construct()**. |

### Examples

Consulte [mysqli\_real\_connect()](mysqli.real-connect.md).

### Veja também

- [mysqli\_options()](mysqli.options.md) - Define opções
- [mysqli\_close()](mysqli.close.md) - Fecha uma conexão ao banco de dados previamente aberta
- [mysqli\_real\_connect()](mysqli.real-connect.md) - Abre uma conexão a um servidor MySQL
- [mysqli\_connect()](function.mysqli-connect.md) - Sinônimo de mysqli::\_\_construct

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
