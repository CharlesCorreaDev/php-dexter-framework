# 🗄️ SQL & Padrões de Banco de Dados: Dexter Framework (Beta)

**Autor:** Charles Corrêa  
**Versão:** 0.1.0-beta  
**Data:** 05 de Novembro de 2026  
**Lema:** *Performance, Integridade e Otimização desde a Raiz.*

---

## 1. Princípio Fundamental de Arquitetura de Dados

No **Dexter Framework**, o banco de dados não é tratado como um simples repositório passivo de registros. A modelagem de dados é projetada para alta concorrência, grandes volumes (Datalakes, logs e transações) e resiliência:

> **Regra Mandatória:** Toda e qualquer tabela, migration e estrutura relacional deve planejar e implementar **particionamento de dados, índices cirúrgicos, triggers de consistência/auditoria, eventos/jobs programados e otimizações de I/O desde o primeiro dia de desenvolvimento**, nunca como ajuste reativo após deploy.

---

## 2. Multiconexão e Motores Suportados

O gerenciamento de conexões é centralizado na classe `Database-Manager.php`:

| Motor | Tipo | Driver PHP | Cenário de Uso |
|---|---|---|---|
| **PostgreSQL** | Relacional | `pdo_pgsql` | Transações complexas, JSONB avançado, Datalake analítico |
| **MySQL / MariaDB** | Relacional | `pdo_mysql` | Aplicação web principal, APIs, replicação mestre-escravo |
| **Firebird** | Relacional | `pdo_firebird` | Legados corporativos, ERPs locais e integração de dados |
| **SQL Server** | Relacional | `pdo_sqlsrv` / `pdo_dblib` | Integrações com ecossistemas legados/Windows |
| **SQLite** | Relacional | `pdo_sqlite` | Testes automatizados rápidos e ambientes isolados |
| **MongoDB** | NoSQL | `mongodb` / Adapter | Coleções de alta escrita sem schema rígido |

---

## 3. Padrões de Engenharia de Banco de Dados

### 3.1. Particionamento Obrigatório (Partitioning)
Tabelas com previsão de rápido crescimento (acessos, logs de auditoria, eventos de telemetria, filas, extratos, mensagens e registros de ETL) **devem ser particionadas**:
- **Particionamento por Intervalo (RANGE):** Por data/competência (`RANGE (YEAR(criado_em) * 100 + MONTH(criado_em))` ou `RANGE (TO_DAYS(criado_em))`).
- **Particionamento por Lista (LIST):** Por status de ciclo de vida ou tenant/região.
- **Particionamento por Hash / Key:** Para balancear I/O em filas e transações de alto paralelismo.

### 3.2. Estratégia de Índices (Indexes)
- **Índice Primário e Clustered:** Sempre baseado em identificadores inteiros sequenciais não-nulos (`BIGINT AUTO_INCREMENT` / `IDENTITY`) ou chaves naturais consolidadas.
- **Índices Compostos:** Criados seguindo a regra da seletividade e da ordem das cláusulas `WHERE`, `JOIN` e `ORDER BY`.
- **Índices Únicos:** Para garantir integridade de e-mails, slugs, UUIDs e chaves idempotentes.
- **Índices Parciais / Filtrados:** Quando suportado pelo motor (PostgreSQL/SQL Server), indexando apenas registros ativos (`WHERE ativo = TRUE`).
- **Full-Text Search:** Utilização de índices específicos de texto para mecanismos de busca textual, dispensando queries com `LIKE '%termo%'` que invalidam índices normais.

### 3.3. Triggers (Gatilhos de Auditoria e Integridade)
- **Auditoria Automática:** Toda tabela operacional sensível deve possuir trigger para registrar na tabela de log de auditoria: data da modificação, operação (`INSERT`, `UPDATE`, `DELETE`), usuário responsável e diff de dados anteriores.
- **Normalização Automática de Dados:** Atualização automática de colunas calculadas e carimbo de data/hora (`atualizado_em`).
- **Integridade Inviolável:** Bloqueio de deleções lógicas em tabelas imutáveis ou com restrições financeiras/legais.

### 3.4. Eventos e Rotinas Programadas (Events / Scheduled Jobs)
- **Purga e Arquivamento Automático:** Rotinas de banco programadas para rotacionar partições antigas e mover dados históricos frios para tabelas de arquivo no Datalake (`Bay Harbor`).
- **Manutenção Preventiva:** Reorganização e reconstrução periódica de índices para evitar fragmentação excessiva.
- **Recalculo de Indicadores:** Agendamento de consolidação de estatísticas e métricas analíticas fora dos horários de pico.

---

## 4. Regras Obrigatórias para Repositórios e Aplicação

1. **Idioma e Nomenclatura em Português do Brasil:** Tabelas, colunas, views, triggers e procedures utilizam português do Brasil em formato `snake_case` (ex: `usuarios`, `criado_em`, `valor_total`, `status_processamento`).
2. **Fuso Horário Oficial de Brasília (`America/Sao_Paulo` / UTC-3):**
   - Todas as conexões inicializadas via `Database-Manager.php` configuram o timezone de sessão para Brasília (`SET time_zone = '-03:00'` no MySQL/MariaDB e `SET timezone TO 'America/Sao_Paulo'` no PostgreSQL).
   - Colunas temporais (`criado_em`, `atualizado_em`, `expira_em`) gravam a hora de Brasília de forma consistente com a aplicação PHP.
3. **Proibição Absoluta de SQL Puro:**
   - Todo acesso no backend deve ser realizado através do **Fluent Query Builder** do framework.
   - `raw_query` com PDO preparado é tolerado única e exclusivamente para rotinas extremas de banco devidamente justificadas em ADR.
4. **Prepared Statements Mandatórios:** Parâmetros recebidos de requisições nunca são concatenados em strings.
5. **Transações Atômicas:** Operações mutativas em múltiplas tabelas devem estar sempre envolvidas em blocos de transação PDO com rollback automático em caso de exceções:
   ```php
   $db->iniciarTransacao();
   try {
       // Operações via Query Builder
       $db->confirmar();
   } catch (\Throwable $e) {
       $db->reverter();
       throw $e;
   }
   ```
6. **Migrations Versionadas e Seguras:** Nenhuma alteração estrutural no banco ocorre sem uma migration correspondente, respeitando o protocolo de governança detalhado na seção 5.

---

## 5. Diretrizes e Governança de Migrations

No Dexter Framework, o versionamento do schema do banco de dados é gerido de forma centralizada pelo mecanismo de Migrations (`/database/migrations/` e `/modules/<modulo>/Migrations/`).

### 5.1. Estrutura e Nomenclatura dos Arquivos
Os arquivos de migration seguem o padrão cronológico e descritivo:
```
AAAA_MM_DD_HHMMSS_descricao_da_migracao.php
Exemplo: 2026_11_05_004500_criar_tabela_usuarios_com_particao.php
```

### 5.2. Métodos Obrigatórios (`executar` e `reverter`)
Toda migration deve implementar os métodos de aplicação e reversão estrita:
- `executar(SchemaBuilder $schema): void` — Aplica a criação de tabelas, partições, índices ou triggers.
- `reverter(SchemaBuilder $schema): void` — Desfaz exatamente o que foi executado (rollback seguro e idempotente).

### 5.3. Regras Mandatórias para Migrations
1. **Idempotência:** A migration deve ser projetada para não quebrar caso elementos já existam ou falhem parcialmente (verificações de existência e rollback transacional automático).
2. **Criação Casada com Otimizações:**
   - Se uma tabela for de alto volume, a criação da tabela **já deve conter suas partições, índices compostos e triggers** na própria migration inicial.
   - Proibido criar a tabela "simples" para "otimizar depois".
3. **Migração em Etapas Sem Downtime (Zero Downtime Deployments):**
   - **Adição de Novas Colunas:** Devem permitir valor `NULL` ou possuir valor `DEFAULT` definido.
   - **Renomeação de Colunas:** Criar nova coluna → sincronizar dados via trigger/serviço → descontinuar coluna antiga em migration posterior (nunca renomear coluna em produção de forma destrutiva).
4. **Seeders e Dados Iniciais:**
   - Migrations alteram exclusivamente **estrutura** (DDL).
   - Dados iniciais, cargas de teste e valores padrão do sistema devem residir na pasta `/database/seeds/`.
5. **Auditoria de Execução:** Todas as migrações aplicadas são registradas na tabela de controle interno `dexter_migracoes` com data, lote (*batch*) e tempo de execução.

### 5.4. Interface e Exemplo Canônico de Migration

Todas as classes de migration estendem `Dexter\Database\Migrations\Migracao` e utilizam o construtor fluente de esquema:

```php
<?php

declare(strict_types=1);

namespace Dexter\Database\Migrations;

use Dexter\Database\Schema\SchemaBuilder;
use Dexter\Database\Schema\TabelaBlueprint;

return new class extends Migracao {
    /**
     * Aplica as alterações no banco de dados.
     */
    public function executar(SchemaBuilder $schema): void
    {
        $schema->criarTabela('usuarios', function (TabelaBlueprint $tabela) {
            $tabela->idGrande('id_usuario')->chavePrimaria();
            $tabela->textoCurto('nome_completo', 150)->naoNulo();
            $tabela->textoCurto('email', 190)->unico()->naoNulo();
            $tabela->textoCurto('hash_senha', 255)->naoNulo();
            $tabela->booleano('ativo')->padrao(true);
            $tabela->carimboDataHora('criado_em')->padraoAtual();
            $tabela->carimboDataHora('atualizado_em')->padraoAtual()->aoAtualizarAtual();

            // Índices cirúrgicos criados no momento zero
            $tabela->indiceComposto(['email', 'ativo'], 'idx_usuarios_email_ativo');
        });
    }

    /**
     * Reverte as alterações aplicadas.
     */
    public function reverter(SchemaBuilder $schema): void
    {
        $schema->removerTabelaSeExiste('usuarios');
    }
};
```

### 5.5. Comandos de CLI para Gestão de Migrations
O CLI do framework (`php dexter`) disponibiliza as seguintes operações para migrations:
- `php dexter migrar`: Executa todas as migrações pendentes em ordem cronológica.
- `php dexter migrar:reverter`: Desfaz o último lote (*batch*) de migrações executadas.
- `php dexter migrar:status`: Lista todas as migrações aplicadas e pendentes.
- `php dexter migrar:criar nome_da_migracao`: Cria o arquivo timestamped com o template oficial.
- `php dexter migrar:recarregar`: Executa rollback total e reaplica todas as migrações (uso exclusivo em desenvolvimento/sandbox *Kill Room*).


## 5. Diretrizes e Governança de Migrations

No Dexter Framework, o versionamento do schema do banco de dados é gerido de forma centralizada pelo mecanismo de Migrations (`/database/migrations/` e `/modules/<modulo>/Migrations/`).

### 5.1. Estrutura e Nomenclatura dos Arquivos
Os arquivos de migration seguem o padrão cronológico e descritivo:
```
AAAA_MM_DD_HHMMSS_descricao_da_migracao.php
Exemplo: 2026_11_05_004500_criar_tabela_usuarios_com_particao.php
```

### 5.2. Métodos Obrigatórios (`executar` e `reverter`)
Toda migration deve implementar os métodos de aplicação e reversão estrita:
- `executar(SchemaBuilder $schema): void` — Aplica a criação de tabelas, partições, índices ou triggers.
- `reverter(SchemaBuilder $schema): void` — Desfaz exatamente o que foi executado (rollback seguro e idempotente).

### 5.3. Regras Mandatórias para Migrations
1. **Idempotência:** A migration deve ser projetada para não quebrar caso elementos já existam ou falhem parcialmente (verificações de existência e rollback transacional automático).
2. **Criação Casada com Otimizações:**
   - Se uma tabela for de alto volume, a criação da tabela **já deve conter suas partições, índices compostos e triggers** na própria migration inicial.
   - Proibido criar a tabela "simples" para "otimizar depois".
3. **Migração em Etapas Sem Downtime (Zero Downtime Deployments):**
   - **Adição de Novas Colunas:** Devem permitir valor `NULL` ou possuir valor `DEFAULT` definido.
   - **Renomeação de Colunas:** Criar nova coluna → sincronizar dados via trigger/serviço → descontinuar coluna antiga em migration posterior (nunca renomear coluna em produção de forma destrutiva).
4. **Seeders e Dados Iniciais:**
   - Migrations alteram exclusivamente **estrutura** (DDL).
   - Dados iniciais, cargas de teste e valores padrão do sistema devem residir na pasta `/database/seeds/`.
5. **Auditoria de Execução:** Todas as migrações aplicadas são registradas na tabela de controle interno `dexter_migracoes` com data, lote (*batch*) e tempo de execução.

### 5.4. Interface e Exemplo Canônico de Migration

Todas as classes de migration estendem `Dexter\Database\Migrations\Migracao` e utilizam o construtor fluente de esquema:

```php
<?php

declare(strict_types=1);

namespace Dexter\Database\Migrations;

use Dexter\Database\Schema\SchemaBuilder;
use Dexter\Database\Schema\TabelaBlueprint;

return new class extends Migracao {
    /**
     * Aplica as alterações no banco de dados.
     */
    public function executar(SchemaBuilder $schema): void
    {
        $schema->criarTabela('usuarios', function (TabelaBlueprint $tabela) {
            $tabela->idGrande('id_usuario')->chavePrimaria();
            $tabela->textoCurto('nome_completo', 150)->naoNulo();
            $tabela->textoCurto('email', 190)->unico()->naoNulo();
            $tabela->textoCurto('hash_senha', 255)->naoNulo();
            $tabela->booleano('ativo')->padrao(true);
            $tabela->carimboDataHora('criado_em')->padraoAtual();
            $tabela->carimboDataHora('atualizado_em')->padraoAtual()->aoAtualizarAtual();

            // Índices cirúrgicos criados no momento zero
            $tabela->indiceComposto(['email', 'ativo'], 'idx_usuarios_email_ativo');
        });
    }

    /**
     * Reverte as alterações aplicadas.
     */
    public function reverter(SchemaBuilder $schema): void
    {
        $schema->removerTabelaSeExiste('usuarios');
    }
};
```

### 5.5. Comandos de CLI para Gestão de Migrations
O CLI do framework (`php dexter`) disponibiliza as seguintes operações para migrations:
- `php dexter migrar`: Executa todas as migrações pendentes em ordem cronológica.
- `php dexter migrar:reverter`: Desfaz o último lote (*batch*) de migrações executadas.
- `php dexter migrar:status`: Lista todas as migrações aplicadas e pendentes.
- `php dexter migrar:criar nome_da_migracao`: Cria o arquivo timestamped com o template oficial.
- `php dexter migrar:recarregar`: Executa rollback total e reaplica todas as migrações (uso exclusivo em desenvolvimento/sandbox *Kill Room*).

