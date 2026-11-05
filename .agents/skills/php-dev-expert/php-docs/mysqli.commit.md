# Grava a transação atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysqli.commit.php

---

# mysqli::commit

# mysqli\_commit

(PHP 5, PHP 7, PHP 8)

mysqli::commit -- mysqli\_commit — Grava a transação atual

### Descrição

Estilo orientado a objetos

public function **mysqli::commit**([int](language.types.integer.md) `$flags` = 0, [?](language.types.null.md)[string](language.types.string.md) `$name` = **`null`**): [bool](language.types.boolean.md)

Estilo procedural

function **mysqli\_commit**([mysqli](class.mysqli.md) `$mysql`, [int](language.types.integer.md) `$flags` = 0, [?](language.types.null.md)[string](language.types.string.md) `$name` = **`null`**): [bool](language.types.boolean.md)

Grava a transação atual para a conexão do banco de dados.

### Parâmetros

`mysql`
:   Somente no estilo procedural: Um objeto [mysqli](class.mysqli.md)
    retornado por [mysqli\_connect()](function.mysqli-connect.md) ou [mysqli\_init()](mysqli.init.md)

`flags`
:   Uma máscara de bits de constantes **`MYSQLI_TRANS_COR_*`**.

`name`
:   Se fornecido, `COMMIT/*name*/` é executado.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Erros/Exceções

Se o relatório de erros da extensão mysqli estiver habilitado (**`MYSQLI_REPORT_ERROR`**) e a operação solicitada falhar,
um aviso será gerado. Se, além disso, o modo for definido como **`MYSQLI_REPORT_STRICT`**,
uma exceção [mysqli\_sql\_exception](class.mysqli-sql-exception.md) será lançada em vez do aviso.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `name` agora pode ser nulo. |

### Examples

Consulto o exemplo de [[mysqli::begin\_transaction()](mysqli.begin-transaction.md)](mysqli.begin-transaction.md#mysqli.begin-transaction.example.basic).

### Notas

> **Nota**:
>
> Esta função não funciona com tipos de tabelas não transacionais (como
> MyISAM ou ISAM).

### Veja também

- [mysqli\_autocommit()](mysqli.autocommit.md) - Ativa ou desativa a gravação automática das modificações no banco de dados
- [mysqli\_begin\_transaction()](mysqli.begin-transaction.md) - Inicia uma transação
- [mysqli\_rollback()](mysqli.rollback.md) - Reverte a transação atual
- [mysqli\_savepoint()](mysqli.savepoint.md) - Define um ponto de salvamento de transação nomeado

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
