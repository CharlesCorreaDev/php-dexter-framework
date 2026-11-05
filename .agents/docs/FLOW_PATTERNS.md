# Padrões de Desenvolvimento Flow-PHP (v1.x)

Este documento registra as melhores práticas e a sintaxe oficial adotada no projeto **Jiraiya Source** para o uso do framework Flow-PHP.

## 🌊 Core Concepts

O Flow-PHP é utilizado para pipelines de dados complexos, garantindo baixo consumo de memória e alta performance através de processamento em lote (batching).

### 1. Inicialização do Pipeline
Sempre utilize o atalho `data_frame()` para iniciar um novo pipeline.

```php
use function Flow\ETL\DSL\data_frame;

data_frame()->read(...)->transform(...)->write(...)->run();
```

### 2. Leitura de Dados (Extractors)

#### Arquivos Estruturados
**Namespaces:** `use function Flow\ETL\Adapter\[FORMATO]\from_[formato];`

| Formato | Função | Requisito |
| :--- | :--- | :--- |
| **CSV** | `from_csv($path)` | `etl-adapter-csv` |
| **JSON** | `from_json($path)` | `etl-adapter-json` |
| **XML** | `from_xml($path)` | `etl-adapter-xml` |
| **Excel** | `from_excel($path)` | `etl-adapter-excel` |
| **Parquet** | `from_parquet($path)` | `etl-adapter-parquet` |
| **Texto** | `from_text($path)` | `etl-adapter-text` |

#### Bancos de Dados (SQL Server, Firebird, PostgreSQL)
Para bancos fora do MySQL, o Flow-PHP utiliza a ponte **Doctrine DBAL**. No projeto Jiraiya, as conexões Wooba (SQL Server) e Sisav (Firebird) podem ser lidas assim:

```php
use function Flow\ETL\Adapter\Doctrine\from_dbal_query;

// $connection deve ser uma instância de Doctrine\DBAL\Connection
->read(from_dbal_query($connection, "SELECT * FROM sua_tabela"))
```

#### Blobs e Cloud (Azure)
Como o projeto possui `flow-php/azure-sdk`, você pode ler direto da nuvem:
**Namespace:** `use function Flow\Filesystem\Bridge\Azure\DSL\azure_blob_path;`

```php
```

#### Array (Memory)
Para dados já em memória ou vindos de consultas SQL simples.
**Namespace:** `use function Flow\ETL\DSL\from_array;`

```php
->read(from_array($data))
```

### 3. Transformações e Joins

#### Renomear e Selecionar
Utilize `select()` e `rename()` para limpar o dataset logo no início.

```php
->select('old_col', 'other')
->rename('old_col', 'new_name')
```

#### Joins e Conflitos de Schema
O join no Flow-PHP v1.x utiliza a função `join_on`. Ao realizar joins entre fontes diferentes (ex: JSON e Array), pode haver conflitos de tipos complexos (Map vs Json).
**Namespace:** `use function Flow\ETL\DSL\join_on;`
**Enum:** `use Flow\ETL\Join\Join;`

**Boas Práticas:**
1.  **Select Explícito**: Sempre use `select()` antes do `join()` para limitar as colunas.
2.  **Schema Estável**: Evite passar colunas aninhadas (Map/Translations) por Joins se não for estritamente necessário.
3.  **Renomeação de Conflitos**: Se ambas as fontes tiverem colunas com o mesmo nome que não são a chave de join, use `rename()` antes de juntar.

```php
->select('key', 'simple_col') // Remova campos complexos se possível
->join(
    data_frame()->read(from_array($external_data)),
    join_on(['local_key' => 'foreign_key']),
    Join::left
)
```

### 4. Persistência (Loaders)

#### Callback Loader (Recomendado para PDO)
Como o projeto utiliza uma instância centralizada de PDO via `Database::getInstance()`, o uso de `to_callable` é o padrão para persistência em banco.
**Namespace:** `use function Flow\ETL\DSL\to_callable;`

```php
->write(to_callable(function (Rows $rows) use ($stmt) {
    foreach ($rows as $row) {
        $stmt->execute($row->toArray());
    }
}))
```

## 🛠️ Debugging
Para depurar rows em tempo real:
```php
->write(Flow\ETL\DSL\to_output())
```

---
*Documentação atualizada em: 2026-05-10*
