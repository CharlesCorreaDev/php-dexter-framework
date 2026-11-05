# Define o modo de auto-confirmação da conexão

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.cubrid-set-autocommit.php

---

# cubrid\_set\_autocommit

(PECL CUBRID >= 8.4.0)

cubrid\_set\_autocommit — Define o modo de auto-confirmação da conexão

### Descrição

function **cubrid\_set\_autocommit**([resource](language.types.resource.md) `$conn_identifier`, [bool](language.types.boolean.md) `$mode`): [bool](language.types.boolean.md)

A função **cubrid\_set\_autocommit()** é usada para definir o
modo de auto-confirmação do banco de dados CUBRID da conexão atual.

No CUBRID PHP, o modo de auto-confirmação é desligado por padrão para gerenciamento
de transações. Quando o modo de auto-confirmação é ligado, qualquer trabalho pendente é
automaticamente confirmado.

### Parâmetros

`conn_identifier`
:   Identificador da conexão.

`mode`
:   Modo de auto-confirmação. As seguintes constantes podem ser usadas:

    - **`CUBRID_AUTOCOMMIT_FALSE`**
    - **`CUBRID_AUTOCOMMIT_TRUE`**

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [cubrid\_get\_autocommit()](function.cubrid-get-autocommit.md) - Obtém o modo de auto-confirmação da conexão
- [cubrid\_commit()](function.cubrid-commit.md) - Confirma uma transação

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
