# Implementação: Database Manager Multiconexão, Fluent Query Builder & Migrations (Bloco 2)

**Data:** 2026-11-05  
**Autor:** Charles Corrêa <charlescorreaweb@gmail.com>  
**Status:** Concluído com 100% de cobertura nos testes, PHPStan Nível 8 e PSR-12  

> [!IMPORTANT]
> Para consultar o status global do backlog de desenvolvimento e próximas entregas prioritárias, revise sempre o arquivo central de handoff em:
> 👉 [`.agents/handoff/tarefas_pendentes.md`](../handoff/tarefas_pendentes.md)

---

## 1. Visão Geral da Entrega
Conclusão da camada de persistência de dados do **Dexter Framework** (Bloco 2 do backlog), atendendo aos requisitos estritos de:
- Suporte a múltiplos bancos de dados simultâneos: PostgreSQL, MySQL, SQLite, SQL Server e **Firebird** (`pdo_firebird`).
- Proibição absoluta de SQL puro/raw queries em repositórios através do **Fluent Query Builder**.
- Suporte nativo ao dialeto do Firebird (paginação `FIRST x SKIP y`).
- Fuso horário padronizado em `America/Sao_Paulo` (`-03:00`).
- Sistema robusto de Migrations com rollback transacional e rastreamento de lotes na tabela `dexter_migracoes`.

---

## 2. Componentes Criados

### 2.1. Conexão & Gerenciador Multiconexão
- [`core/Database/Conexao/ConexaoFactory.php`](../../core/Database/Conexao/ConexaoFactory.php):
  - Fábrica segura de instâncias PDO com `ATTR_ERRMODE => ERRMODE_EXCEPTION`, `ATTR_DEFAULT_FETCH_MODE => FETCH_ASSOC` e prepared statements reais (`ATTR_EMULATE_PREPARES => false`).
  - Aplica automaticamente `SET time_zone = '-03:00'` (MySQL) e `SET timezone TO 'America/Sao_Paulo'` (PostgreSQL).
- [`core/Database/DatabaseManager.php`](../../core/Database/DatabaseManager.php):
  - Pool multiconexão: `$db->conexao('padrao')`, `$db->conexao('firebird')`.
  - Controle de transações: `iniciarTransacao()`, `confirmar()`, `reverter()` e closure helper `transacao()`.

### 2.2. Gramáticas de Dialeto SQL & Fluent Query Builder
- [`core/Database/Gramatica/GramaticaInterface.php`](../../core/Database/Gramatica/GramaticaInterface.php): Contrato de compilação.
- [`core/Database/Gramatica/GramaticaPadrao.php`](../../core/Database/Gramatica/GramaticaPadrao.php): Compilador ANSI / MySQL / PostgreSQL / SQLite com suporte a `LIMIT/OFFSET`, JOINs e WHERE parametrizados.
- [`core/Database/Gramatica/GramaticaFirebird.php`](../../core/Database/Gramatica/GramaticaFirebird.php): Compilador específico para Firebird com paginação via `FIRST x SKIP y`.
- [`core/Database/Query/QueryBuilder.php`](../../core/Database/Query/QueryBuilder.php):
  - Métodos em português: `tabela()`, `campos()`, `onde()`, `ouOnde()`, `ondeNulo()`, `ondeEm()`, `juntar()`, `juntarEsquerda()`, `ordenarPor()`, `limite()`, `deslocamento()`, `obter()`, `primeiro()`, `contar()`, `inserir()`, `atualizar()`, `excluir()`.

### 2.3. Schema Builder & Migrations Engine
- [`core/Database/Schema/Blueprint.php`](../../core/Database/Schema/Blueprint.php): Construtor fluente de esquemas (`id()`, `string()`, `texto()`, `inteiro()`, `booleano()`, `dataHora()`, `timestamps()`).
- [`core/Database/Schema/SchemaBuilder.php`](../../core/Database/Schema/SchemaBuilder.php): Operações DDL (`criar()`, `derrubarSeExiste()`, `temTabela()`).
- [`core/Database/Migrations/Migracao.php`](../../core/Database/Migrations/Migracao.php): Classe abstrata com `executar()` e `reverter()`.
- [`core/Database/Migrations/MigrationRunner.php`](../../core/Database/Migrations/MigrationRunner.php): Executor de lotes, rollback e auditoria de status na tabela `dexter_migracoes`.

---

## 3. Testes Unitários e Validação Estática
- Teste criado: [`testes/unitarios/DatabaseTest.php`](../../testes/unitarios/DatabaseTest.php) (7 testes cobrindo factory, query builder, joins, paginação padrão e Firebird, transações atômicas com rollback e ciclo completo de migrations).
- **PHPUnit**: 17 testes, 51 asserções — 100% OK.
- **PHPStan**: Nível 8 estrito — 0 erros.
- **PHPCS**: PSR-12 estrito — 0 erros e 0 avisos.

