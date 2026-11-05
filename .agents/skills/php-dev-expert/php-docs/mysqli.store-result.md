# Transfere um conjunto de resultados da última consulta

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysqli.store-result.php

---

# mysqli::store\_result

# mysqli\_store\_result

(PHP 5, PHP 7, PHP 8)

mysqli::store\_result -- mysqli\_store\_result — Transfere um conjunto de resultados da última consulta

### Descrição

Estilo orientado a objetos

public function **mysqli::store\_result**([int](language.types.integer.md) `$mode` = 0): [mysqli\_result](class.mysqli-result.md)|[false](language.types.singleton.md)

Estilo procedural

function **mysqli\_store\_result**([mysqli](class.mysqli.md) `$mysql`, [int](language.types.integer.md) `$mode` = 0): [mysqli\_result](class.mysqli-result.md)|[false](language.types.singleton.md)

Transfere o conjunto de resultados da última consulta na conexão do banco de dados
representada pelo parâmetro `mysql` para ser usado com a
função [mysqli\_data\_seek()](mysqli-result.data-seek.md).

### Parâmetros

`mysql`
:   Somente no estilo procedural: Um objeto [mysqli](class.mysqli.md)
    retornado por [mysqli\_connect()](function.mysqli-connect.md) ou [mysqli\_init()](mysqli.init.md)

`mode`
:   A opção que você deseja definir. A partir do PHP 8.1, este parâmetro não tem efeito. Pode ser um dos seguintes valores:

    **Valid options**

    | Nome | Descrição |
    | --- | --- |
    | **`MYSQLI_STORE_RESULT_COPY_DATA`** | Copia os resultados do buffer mysqlnd interno nas variáveis PHP buscadas. Por padrão, o mysqlnd usará uma lógica de referência para evitar copiar e duplicar os resultados mantidos na memória. Para certos conjuntos de resultados, por exemplo, conjuntos de resultados com muitas linhas pequenas, a abordagem de cópia pode reduzir o uso geral de memória porque as variáveis PHP que contêm resultados podem ser liberadas mais cedo (disponível apenas com mysqlnd) |

### Valor Retornado

Retorna um objeto de resultado armazenado em buffer ou **`false`** se ocorreu um erro.

> **Nota**:
>
> **mysqli\_store\_result()** retorna **`false`** caso a consulta
> não retorne um conjunto de resultados (se a consulta for, por exemplo, uma instrução
> INSERT). Esta função também retorna **`false`** se a leitura do conjunto de
> resultados falhou. Você pode verificar se houve um erro verificando se
> [mysqli\_error()](mysqli.error.md) não retorna uma string vazia, se
> [mysqli\_errno()](mysqli.errno.md) retorna um valor diferente de zero ou se
> [mysqli\_field\_count()](mysqli.field-count.md) retorna um valor diferente de zero.
> Além disso, a possível razão para esta função retornar **`false`** após
> uma chamada bem-sucedida para [mysqli\_query()](mysqli.query.md) pode ser um conjunto
> de resultados muito grande (a memória para ele não pode ser alocada). Se
> [mysqli\_field\_count()](mysqli.field-count.md) retornar um valor diferente de zero, a
> instrução deve ter produzido um conjunto de resultados não vazio.

### Erros/Exceções

Se o relatório de erros da extensão mysqli estiver habilitado (**`MYSQLI_REPORT_ERROR`**) e a operação solicitada falhar,
um aviso será gerado. Se, além disso, o modo for definido como **`MYSQLI_REPORT_STRICT`**,
uma exceção [mysqli\_sql\_exception](class.mysqli-sql-exception.md) será lançada em vez do aviso.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | Passar o parâmetro `mode` foi descontinuado. O parâmetro já não tem efeito a partir do PHP 8.1.0. |

### Examples

Veja [mysqli\_multi\_query()](mysqli.multi-query.md).

### Notas

> **Nota**:
>
> Embora seja sempre uma boa prática liberar a memória usada pelo resultado
> de uma consulta usando a função [mysqli\_free\_result()](mysqli-result.free.md),
> ao transferir grandes conjuntos de resultados usando
> **mysqli\_store\_result()** isso se torna particularmente
> importante.

### Veja também

- [mysqli\_real\_query()](mysqli.real-query.md) - Executa uma consulta SQL
- [mysqli\_use\_result()](mysqli.use-result.md) - Inicia uma recuperação de conjunto de resultados

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
