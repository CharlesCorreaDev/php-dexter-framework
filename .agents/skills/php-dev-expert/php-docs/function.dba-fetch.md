# Busca dados especificados por chave

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.dba-fetch.php

---

# dba\_fetch

(PHP 4, PHP 5, PHP 7, PHP 8)

dba\_fetch — Busca dados especificados por chave

### Descrição

function **dba\_fetch**([string](language.types.string.md)|[array](language.types.array.md) `$key`, [Dba\Connection](class.dba-connection.md) `$dba`, [int](language.types.integer.md) `$skip` = 0): [string](language.types.string.md)|[false](language.types.singleton.md)

Assinatura sobrecarregada, preterida a partir do PHP 8.3.0:

function **dba\_fetch**([string](language.types.string.md)|[array](language.types.array.md) `$key`, [int](language.types.integer.md) `$skip`, [resource](language.types.resource.md) `$dba`): [string](language.types.string.md)

**dba\_fetch()** busca os dados especificados pela chave em
`key` do banco de dados especificado por
`dba`.

### Parâmetros

`key`
:   A chave pela qual os dados são especificados.

    > **Nota**:
    >
    > Ao trabalhar com arquivos INI, eta função aceita arrays como chaves
    > onde o índice 0 é o grupo e o índice 1 é o nome do valor. Consulte:
    > [dba\_key\_split()](function.dba-key-split.md).

`dba`
:   Uma instância de [Dba\Connection](class.dba-connection.md), retornada por [dba\_open()](function.dba-open.md) ou [dba\_popen()](function.dba-popen.md).

`skip`
:   O número de pares chave-valor a ignorar no uso de bancos de dados CDB.
    Este valor é ignorado para todos os outros bancos de dados que não suportam
    múltiplas chaves com o mesmo nome.

### Valor Retornado

Retorna a string associada se o par chave/dados for encontrado, **`false`**
caso contrário.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | O parâmetro `dba` agora espera uma instância de[Dba\Connection](class.dba-connection.md); anteriormente, um [resource](language.types.resource.md) `dba` válido era esperado. |
| 8.3.0 | Chamar **dba\_fetch()** com `dba` no 3º argumento agora foi descontinuado. |
| 8.2.0 | O argumento opcional "skip" de **dba\_fetch()** fica agora no final, alinhado com a semântica das funções de usuário do PHP. A assinatura anterior com sobrecarga ainda é aceita porém desencorajada. |

### Veja também

- [dba\_exists()](function.dba-exists.md) - Verifica existência de uma chave
- [dba\_delete()](function.dba-delete.md) - Remove uma entrada DBA especificada por chave
- [dba\_insert()](function.dba-insert.md) - Insere entrada
- [dba\_replace()](function.dba-replace.md) - Substitui ou insere uma entrada
- [dba\_key\_split()](function.dba-key-split.md) - Divide uma chave em representação string para uma representação array

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
