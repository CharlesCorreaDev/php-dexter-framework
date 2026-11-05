# Reverte a transação atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysqli.rollback.php

---

# mysqli::rollback

# mysqli\_rollback

(PHP 5, PHP 7, PHP 8)

mysqli::rollback -- mysqli\_rollback — Reverte a transação atual

### Descrição

Estilo orientado a objetos

public function **mysqli::rollback**([int](language.types.integer.md) `$flags` = 0, [?](language.types.null.md)[string](language.types.string.md) `$name` = **`null`**): [bool](language.types.boolean.md)

Estilo procedural

function **mysqli\_rollback**([mysqli](class.mysqli.md) `$mysql`, [int](language.types.integer.md) `$flags` = 0, [?](language.types.null.md)[string](language.types.string.md) `$name` = **`null`**): [bool](language.types.boolean.md)

Reverte a transação atual para o banco de dados.

### Parâmetros

`mysql`
:   Somente no estilo procedural: Um objeto [mysqli](class.mysqli.md)
    retornado por [mysqli\_connect()](function.mysqli-connect.md) ou [mysqli\_init()](mysqli.init.md)

`flags`
:   Uma máscara de bits das constantes **`MYSQLI_TRANS_COR_*`**.

`name`
:   Se fornecido, então `ROLLBACK/*name*/` é executado.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Erros/Exceções

Se o relatório de erros da extensão mysqli estiver habilitado (**`MYSQLI_REPORT_ERROR`**) e a operação solicitada falhar,
um aviso será gerado. Se, além disso, o modo for definido como **`MYSQLI_REPORT_STRICT`**,
uma exceção [mysqli\_sql\_exception](class.mysqli-sql-exception.md) será lançada em vez do aviso.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `name` agora é anulável. |

### Examples

Veja o exemplo [[mysqli::begin\_transaction()](mysqli.begin-transaction.md)](mysqli.begin-transaction.md#mysqli.begin-transaction.example.basic).

### Notas

> **Nota**:
>
> Esta função não funciona com tipos de tabelas não transacionais (como MyISAM ou
> ISAM).

### Veja também

- [mysqli\_begin\_transaction()](mysqli.begin-transaction.md) - Inicia uma transação
- [mysqli\_commit()](mysqli.commit.md) - Grava a transação atual
- [mysqli\_autocommit()](mysqli.autocommit.md) - Ativa ou desativa a gravação automática das modificações no banco de dados
- [mysqli\_release\_savepoint()](mysqli.release-savepoint.md) - Remove o ponto de salvamento nomeado do conjunto de pontos de salvamento da transação atual

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
