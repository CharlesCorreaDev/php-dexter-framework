# Git e GitHub: Guia Técnico e Dicionário para Desenvolvedores

Este documento serve como referência técnica, dicionário de termos e guia de boas práticas para o uso de Git (sistema de controle de versão) e GitHub (plataforma de hospedagem e colaboração). 

## 0. Blueprints: Documentação e Arquitetura

Antes de escrever a primeira linha de código, precisamos saber o que estamos construindo e por quê. No contexto de engenharia de software e GitHub, um **Blueprint** (ou Design Doc / ADR - Architecture Decision Record) é um documento técnico que detalha a arquitetura, o escopo e os impactos de uma mudança grande ou de um novo projeto.

### O que é um Blueprint?
É a "planta da casa". Diferente de uma Issue (que é uma tarefa) ou um README (que é o manual do projeto), o Blueprint é o documento de **design e planejamento**. Ele responde: Qual é o problema? Quais foram as alternativas consideradas? Por que escolhemos essa arquitetura específica? Quais são os riscos?

### Como estruturar um Blueprint no GitHub
A boa prática é manter uma pasta `/docs/blueprints` ou `/docs/adr` no repositório. O arquivo deve ser versionado junto com o código.

**Template Básico de um Blueprint (`docs/blueprints/001-nova-arquitetura-de-cache.md`):**

```markdown
# Blueprint: [Título da Mudança/Projeto]
**Status:** Proposto | Em Progresso | Aceito | Rejeitado | Obsoleto
**Autor:** [Nome do Dev/Arquiteto]
**Data:** YYYY-MM-DD

## 1. Contexto e Problema
Descreva o que está motivando essa mudança. (Ex: O banco de dados está sofrendo com leituras repetitivas, gerando lentidão no checkout).

## 2. Objetivos
O que queremos alcançar com isso? (Ex: Reduzir a latência do checkout em 40%).

## 3. Alternativas Consideradas
*   **Alternativa A:** (Ex: Aumentar o hardware do banco). *Prós:* X. *Contras:* Y.
*   **Alternativa B:** (Ex: Implementar Redis para cache de sessão). *Prós:* X. *Contras:* Y.

## 4. Proposta de Solução (A Arquitetura Escolhida)
Detalhe a Alternativa B. Inclua diagramas (pode usar Mermaid.js nativo do GitHub), fluxos de dados, e como os serviços vão se comunicar.

## 5. Impactos e Riscos
*   **Retrocompatibilidade:** Vai quebrar algo?
*   **Custo:** Vai aumentar o custo de infraestrutura?
*   **Segurança:** Algum novo vetor de ataque é introduzido?

## 6. Plano de Rollout e Reversão
Como vamos liberar isso em produção? Se der errado, como voltamos atrás em menos de 5 minutos?
```

### GitHub Template Repositories (Blueprints de Projetos)
Além do documento de design, o termo "Blueprint" também é usado para descrever **Templates de Repositório** no GitHub. 
Se a sua empresa ou equipe cria vários microsserviços ou projetos com a mesma base (ex: mesmo setup de Docker, mesmo CI/CD, mesma estrutura de pastas), você cria um repositório "Blueprint" e o marca como **Template** nas configurações do GitHub. 

Quando um dev for iniciar um projeto novo, ele clica em "Use this template", e o GitHub clona a estrutura exata (sem o histórico de commits), garantindo que todos os projetos já nascem seguindo o padrão da casa.

### Boas Práticas de Blueprints
1.  **Versionamento de Documentos:** O Blueprint deve sofrer Pull Requests e Code Review, exatamente como o código. A equipe deve aprovar a arquitetura antes de ela ser implementada.
2.  **Use Mermaid.js:** O GitHub renderiza diagramas nativamente em Markdown. Use blocos ` ```mermaid ` para desenhar fluxos e arquiteturas direto no arquivo, sem depender de imagens externas que podem quebrar.
3.  **Mantenha vivo:** Se a implementação final divergiu do Blueprint original, atualize o documento. Um Blueprint desatualizado é pior que nenhum Blueprint.


***

---

## 1. Dicionário de Termos (Conceitos Fundamentais)

Para dominar o controle de versão, é fundamental entender o vocabulário. Abaixo estão os termos técnicos traduzidos e explicados.

### Termos do Git (O Sistema)
*   **Repository (Repositório):** O banco de dados do projeto. Contém todo o código, arquivos e o histórico completo de alterações.
*   **Commit:** Um "snapshot" (foto) do estado do repositório em um momento específico. É a unidade básica de salvamento no Git.
*   **Branch (Ramificação):** Uma linha de desenvolvimento independente. Permite isolar o trabalho de uma nova funcionalidade ou correção sem afetar o código principal.
*   **Main / Master:** O branch principal do repositório. Representa a "fonte da verdade" e, geralmente, o código que está em produção.
*   **HEAD:** Um ponteiro interno do Git que indica em qual branch ou commit você está trabalhando no momento.
*   **Staging Area (Index):** A sala de espera. É o espaço onde você prepara e seleciona quais alterações farão parte do próximo commit.
*   **Working Directory (Diretório de Trabalho):** A pasta local no seu computador onde você edita os arquivos fisicamente.
*   **Working Tree:** A árvore de arquivos atual no seu diretório de trabalho.

### Termos do GitHub (A Plataforma)
*   **Fork:** Uma cópia de um repositório de outra pessoa ou organização para a sua própria conta no GitHub. Usado para contribuir com projetos open source ou criar uma base para um projeto derivado.
*   **Pull Request (PR):** Uma solicitação formal para que as alterações de um branch sejam revisadas e mescladas (merge) em outro branch. É o coração da revisão de código no GitHub.
*   **Merge Request (MR):** O mesmo que Pull Request, termo utilizado em outras plataformas como GitLab.
*   **Issue:** Um sistema de rastreamento de bugs, tarefas, melhorias e discussões dentro do repositório.
*   **Release:** Um marco de versionamento (ex: v1.0.0). Empacota o código de um determinado ponto do histórico com notas de lançamento e binários compilados.
*   **Actions:** O sistema de CI/CD (Integração Contínua e Entrega Contínua) nativo do GitHub, usado para automatizar testes, builds e deploys.

---

## 2. Comandos Essenciais e Significados

### Configuração Inicial
```bash
# Configura o nome do usuário (aparece no histórico de commits)
git config --global user.name "Seu Nome"

# Configura o e-mail do usuário (deve ser o mesmo do GitHub)
git config --global user.email "seu.email@exemplo.com"

# Define a branch padrão como 'main' (padrão atual do Git)
git config --global init.defaultBranch main
```

### Operações Básicas
```bash
# Inicializa um novo repositório Git no diretório atual
git init

# Cria uma cópia local completa de um repositório remoto
git clone <url-do-repositorio>

# Mostra o estado atual dos arquivos (modificados, na staging area, ignorados)
git status

# Adiciona arquivos à Staging Area. (Use '.' para todos, ou o nome do arquivo)
git add .
git add caminho/do/arquivo.txt

# Cria um commit com os arquivos que estão na Staging Area
git commit -m "mensagem descritiva do commit"
```

### Gerenciamento de Branches
```bash
# Lista todos os branches locais
git branch

# Cria um novo branch
git branch nome-da-feature

# Troca para outro branch (comando moderno e recomendado)
git switch nome-da-feature

# Cria e já troca para um novo branch (atalho)
git switch -c nome-da-feature

# Mescla um branch específico no branch atual
git merge nome-da-feature

# Reaplica os commits do branch atual sobre a ponta de outro branch (reescreve o histórico)
git rebase branch-base
```

### Sincronização com o Remoto (GitHub)
```bash
# Baixa as alterações do repositório remoto, mas NÃO aplica no seu código local
git fetch origin

# Baixa as alterações e as mescla automaticamente no branch atual (fetch + merge)
git pull origin main

# Envia os commits do branch local para o repositório remoto
git push origin nome-do-branch
```

### Desfazendo Alterações (Cuidado aqui!)
```bash
# Descarta alterações em arquivos que ainda NÃO foram para a Staging Area
git restore caminho/do/arquivo.txt

# Remove arquivos da Staging Area, mantendo as alterações no diretório de trabalho
git restore --staged caminho/do/arquivo.txt

# Cria um NOVO commit que desfaz as alterações de um commit anterior (Seguro para branches públicos)
git revert <hash-do-commit>

# Move o HEAD para um commit anterior, apagando o histórico (Perigoso! Use apenas em branches locais)
git reset --hard <hash-do-commit>
```

---

## 3. Regras de Ouro: O que pode e o que não pode fazer

### O que PODE (e deve) ser feito
1.  **Fazer commits atômicos:** Cada commit deve representar uma única mudança lógica (ex: um bug corrigido, uma função adicionada).
2.  **Usar branches para tudo:** Nunca trabalhe diretamente na branch `main` ou `master` localmente. Crie uma branch para a feature ou correção.
3.  **Atualizar o repositório local frequentemente:** Rode `git pull` ou `git fetch` antes de começar a trabalhar para evitar conflitos complexos.
4.  **Revisar Pull Requests:** O código deve ser lido por pelo menos um outro desenvolvedor antes de ir para a branch principal.
5.  **Usar o arquivo `.gitignore`:** Configure-o para ignorar pastas de dependências (`node_modules`, `vendor`), arquivos de ambiente (`.env`) e builds compilados.

### O que NÃO PODE ser feito
1.  **Nunca dê push direto na `main`:** A branch principal deve ser protegida. Todas as alterações devem passar por um Pull Request.
2.  **Nunca faça `rebase` em branches públicos:** Se outras pessoas já estão trabalhando no mesmo branch, dar rebase vai reescrever o histórico delas e causar um caos no repositório. Rebase é apenas para branches locais/privados.
3.  **Nunca commite credenciais:** Senhas, tokens de API, chaves SSH e arquivos `.env` jamais devem ir para o Git. Se acontecer, o histórico deve ser limpo e as chaves, revogadas imediatamente.
4.  **Nunca use `git commit -m "ajustes"` ou "wip":** Mensagens de commit devem explicar o *porquê* e o *quê* foi alterado.
5.  **Nunca force push (`git push --force`) na main:** Isso sobrescreve o histórico remoto e apaga o trabalho de outros desenvolvedores.

---

## 4. Boas Práticas e Padrões

### Padrão de Mensagens de Commit (Conventional Commits v1.0.0)
Utilize obrigatoriamente a especificação [Conventional Commits](https://www.conventionalcommits.org/pt-br/v1.0.0/) para estruturar mensagens de commit, facilitando a automação de changelogs e a determinação de versões semânticas (SemVer).

#### Estrutura Geral
```text
<tipo>[escopo opcional]: <descrição>

[corpo opcional]

[rodapé(s) opcional(is)]
```

#### Tipos Padronizados:
*   `feat`: Introduz uma nova funcionalidade (equivale a um `MINOR` no SemVer).
*   `fix`: Corrige um bug (equivale a um `PATCH` no SemVer).
*   `docs`: Alterações apenas em documentação.
*   `style`: Mudanças na formatação, estilo de código, quebras de linha ou espaçamento (não afeta o significado do código).
*   `refactor`: Melhorias na estrutura do código que não corrigem bugs nem adicionam novas funcionalidades.
*   `perf`: Alterações de código específicas para melhorar a performance.
*   `test`: Inclusão ou ajuste de suítes de testes automatizados.
*   `chore`: Atualizações de tarefas de build, arquivos de configuração locais e gerenciamento de dependências.
*   `ci`: Ajustes em arquivos de CI/CD (ex: Azure Pipelines, GitHub Actions).
*   `build`: Mudanças que afetam o sistema de build ou dependências externas (como escopos do composer, npm, etc.).

#### Quebras de Compatibilidade (BREAKING CHANGES):
Sinalize uma mudança que quebra a retrocompatibilidade (gerando alteração de `MAJOR` no SemVer) adicionando um ponto de exclamação (`!`) logo após o tipo ou escopo, ou declarando explicitamente `BREAKING CHANGE:` no rodapé.
*   *Exemplo inline:* `refactor(database)!: altera tipo da chave primária de UUID para INT`
*   *Exemplo no rodapé:*
    ```text
    fix(api): altera retorno do endpoint de consulta de CNPJ

    BREAKING CHANGE: a propriedade 'situacao' foi renomeada para 'situacao_cadastral'.
    ```

**Exemplos Gerais (Sempre em Português do Brasil):**
*   `feat(auth): adiciona login com OAuth2 via Google`
*   `fix(cart): corrige cálculo de frete para regiões sul/sudeste`
*   `docs(readme): atualiza instruções de instalação no WSL`
*   `chore(deps): atualiza symfony/var-dumper para v8.1.1`

### Estratégias de Branching
*   **GitFlow:** Ideal para projetos com releases versionadas e ciclos de desenvolvimento longos. Usa branches `develop`, `feature`, `release` e `hotfix`.
*   **Trunk-Based Development:** Ideal para CI/CD e entregas contínuas. Todos desenvolvem em branches de vida curta e fazem merge direto na `main` (ou em uma branch `develop`) várias vezes ao dia.

### Proteção de Branch no GitHub
Configure as "Branch Protection Rules" no GitHub para a branch `main`:
1.  Exigir Pull Request antes do merge.
2.  Exigir pelo menos 1 aprovação (Review).
3.  Exigir que os checks de status (GitHub Actions/CI) passem com sucesso.
4.  Impedir force pushes e exclusão da branch.

---

## 5. Ecossistema e Ferramentas

O Git e o GitHub possuem um ecossistema robusto para otimizar o fluxo de trabalho:

*   **Git CLI (Linha de Comando):** A ferramenta oficial e mais poderosa. Domine o terminal antes de depender de interfaces gráficas.
*   **GitHub CLI (`gh`):** Ferramenta oficial de linha de comando do GitHub. Permite criar PRs, revisar código, gerenciar issues e fazer checkout de PRs sem sair do terminal.
*   **GitHub Desktop:** Interface gráfica oficial. Excelente para iniciantes que ainda estão perdendo o medo da linha de comando, ou para visualizar diffs complexos.
*   **GitHub Copilot:** Assistente de IA integrado ao editor e ao GitHub. Auxilia na escrita de código, criação de mensagens de commit e revisão de PRs.
*   **GitHub Actions:** Motor de automação. Use para rodar testes automatizados, fazer linting de código e realizar deploys automáticos a cada push ou merge.
---

## 6. Versionamento, Tags e Releases

O versionamento é a forma de marcar pontos específicos e imutáveis no histórico do repositório para indicar marcos importantes, geralmente associados a entregas em produção ou ambientes de homologação. No Git, usamos **Tags**, e no GitHub, essas tags são frequentemente empacotadas em **Releases**.

### O Padrão: Semantic Versioning 2.0 (SemVer)
Para manter a consistência e comunicar claramente o impacto das mudanças para quem consome o projeto, adotamos obrigatoriamente o padrão [Semantic Versioning 2.0.0](https://semver.org/).

O formato é estritamente `MAJOR.MINOR.PATCH` (ex: `v1.4.2`), onde:

*   **MAJOR (Maior):** Incrementado quando há mudanças incompatíveis na API ou quebras de retrocompatibilidade (*Breaking Changes*). O usuário/cliente precisará refatorar algo para atualizar.
*   **MINOR (Menor):** Incrementado quando novas funcionalidades são adicionadas de forma compatível com versões anteriores. Não quebra nada do que já existe.
*   **PATCH (Correção):** Incrementado quando são feitas correções de bugs compatíveis com versões anteriores.

**Regras de Ouro do SemVer:**
1.  A versão inicial de desenvolvimento é `0.1.0` (ou `0.0.1`). O `0.x.x` indica que a API é instável e pode mudar a qualquer momento.
2.  O `1.0.0` define a API pública oficial. A partir daqui, as regras de MAJOR/MINOR/PATCH são aplicadas rigorosamente.
3.  Versões de pré-lançamento (testes, betas) são sufixadas com hífen (ex: `v1.2.0-beta.1`, `v2.0.0-rc.1`).

### Trabalhando com Tags no Git

As tags são os marcadores no Git. Uma vez criadas e compartilhadas no remoto, **elas são consideradas imutáveis e não devem ser alteradas**.

```bash
# Lista todas as tags existentes no repositório local
git tag

# Cria uma tag leve (apenas um ponteiro para um commit, sem metadados)
git tag v1.0.0

# Cria uma tag anotada (Altamente Recomendado! Contém metadados: autor, data, mensagem)
git tag -a v1.0.0 -m "Release 1.0.0: Lançamento oficial da API pública"

# Envia uma tag específica para o repositório remoto
git push origin v1.0.0

# Envia TODAS as tags locais que ainda não foram enviadas para o remoto
git push origin --tags

# Deleta uma tag local
git tag -d v1.0.0

# Deleta uma tag no repositório remoto
git push origin --delete v1.0.0
```
---
## 7. Criação e Gerenciamento de Releases

Enquanto a **Tag** é apenas um marcador no Git, a **Release** é o pacote de entrega. É o momento em que transformamos código em um produto versionado, pronto para ser consumido por usuários, ambientes de produção ou outras aplicações.

### 1. Criação Manual (Interface do GitHub)
Ideal para releases pontuais ou quando é necessária uma revisão humana detalhada das notas de lançamento antes da publicação.

1. No repositório, navegue até a aba **Releases** (no menu lateral direito).
2. Clique em **Draft a new release**.
3. **Choose a tag:** Digite a tag seguindo o SemVer (ex: `v1.2.0`). Se a tag não existir no Git, o GitHub a criará automaticamente no commit selecionado.
4. **Target:** Selecione a branch de origem (geralmente `main` ou `master`).
5. **Release title:** Crie um título claro (ex: `v1.2.0 - Integração com Gateway de Pagamento`).
6. **Describe this release:** Clique no botão **Generate release notes**. O GitHub lerá os Pull Requests mesclados desde a última tag e gerará automaticamente uma lista de mudanças categorizada.
7. **Attach binaries:** Arraste e solte arquivos compilados, instaladores ou logs (ex: `.zip`, `.tar.gz`, `.apk`) se o seu projeto gerar artefatos físicos.
8. Clique em **Publish release**.

### 2. Criação via GitHub CLI (`gh`)
Para desenvolvedores que preferem manter o fluxo inteiramente no terminal sem abrir o navegador.

```bash
# Cria uma release interativa (abre o editor de texto para as notas)
gh release create v1.2.0

# Cria uma release diretamente com título e notas no comando
gh release create v1.2.0 --title "v1.2.0" --notes "Correção de bugs críticos no módulo de autenticação."

# Cria uma release anexando um arquivo binário (Asset)
gh release create v1.2.0 ./dist/meu-app-v1.2.0.zip --title "v1.2.0" --notes "Release de produção"

# Cria uma release de pré-lançamento (Draft/Pré-release)
gh release create v1.3.0-beta.1 --prerelease --title "Beta 1" --notes "Versão de testes"
```

### 3. Automação via GitHub Actions (O Padrão Moderno)
Em times ágeis e com CI/CD maduro, a criação de Releases deve ser automatizada. A cada merge na branch principal, o pipeline lê as mensagens de commit (Conventional Commits), decide se a versão é MAJOR, MINOR ou PATCH, cria a tag e publica a Release.

**Exemplo de Workflow (`/.github/workflows/release.yml`):**
```yaml
name: Automated Release

on:
  push:
    branches:
      - main

jobs:
  release:
    runs-on: ubuntu-latest
    steps:
      - name: Checkout Code
        uses: actions/checkout@v4

      - name: Setup Node.js
        uses: actions/setup-node@v4
        with:
          node-version: '20'

      # O semantic-release analisa os commits, gera a nova versão, cria a tag e publica a release no GitHub
      - name: Run Semantic Release
        env:
          GITHUB_TOKEN: ${{ secrets.GITHUB_TOKEN }}
        run: npx semantic-release
```
*Nota: O `semantic-release` exige que o time seja rigoroso no uso do padrão Conventional Commits.*

### 4. Anatomia de um Bom Release Note (Changelog)
O corpo da Release não deve ser um "vazamento" de commits técnicos. Ele deve ser um resumo organizado para quem vai consumir a mudança. Utilize a seguinte estrutura:

**🚀 Novas Funcionalidades**
*   Adicionado suporte a login biometria (`feat`)
*   Novo endpoint para exportação de relatórios em PDF (`feat`)

**🐛 Correções de Bugs**
*   Corrigido erro 500 ao tentar salvar formulários com caracteres especiais (`fix`)
*   Ajuste no cálculo de impostos para a região Sul (`fix`)

**⚠️ Breaking Changes (Atenção!)**
*   O endpoint `/api/v1/users` foi removido. Migre para `/api/v2/users`.

**📦 Dependências e Build**
*   Atualizado o framework X da versão 4 para 5 (`chore`)

### 5. Boas Práticas de Releases
1.  **Imutabilidade:** Uma vez publicada, uma Release não deve ser alterada. Se houver um erro na Release `v1.2.0`, não edite-a para consertar. Crie e publique a `v1.2.1`.
2.  **Assets e Binários:** Se o seu projeto gera artefatos (como um `.jar` do Java, um `.exe` do C# ou um `.zip` do frontend compilado), anexe-os na Release. Isso permite que usuários baixem a versão pronta sem precisar compilar o código-fonte.
3.  **Rastreabilidade:** Sempre vincule a Release às Issues ou Pull Requests que ela resolve. O GitHub faz isso automaticamente se você usar palavras-chave nos PRs (ex: "Closes #42").
4.  **Versões de Pré-lançamento:** Use o sufixo de pré-lançamento (ex: `-alpha`, `-beta`, `-rc`) e marque a opção *"Set as a pre-release"* no GitHub. Isso avisa aos usuários que aquela versão é instável e não deve ser usada em produção.

### 6. Solução de Problemas: Acentuação no Windows (Mojibake)

Quando commits, tags ou notas de release são gerados diretamente via linha de comando (PowerShell ou CMD) no Windows, caracteres acentuados (ex: `á`, `é`, `ç`, `ã`) podem aparecer corrompidos no GitHub (ex: `Explicação` torna-se `ExplicaÃ§Ã£o`). Isso ocorre porque o terminal do Windows por padrão utiliza codificações locais (como CP1252 ou CP850), enquanto o Git e o GitHub esperam codificação **UTF-8**.

> [!WARNING]
> **Evite Commits Corrompidos:** A desatenção à codificação do terminal gera logs técnicos e releases difíceis de ler por outros desenvolvedores e ferramentas de CI/CD.

#### Como Corrigir e Prevenir:

1. **Configurar o Terminal (PowerShell) para UTF-8** (Executar antes de comandos Git com acentos):
   ```powershell
   [Console]::InputEncoding = [System.Text.Encoding]::UTF8
   [Console]::OutputEncoding = [System.Text.Encoding]::UTF8
   ```

2. **Configurar o Terminal (CMD) para UTF-8**:
   ```cmd
   chcp 65001
   ```

3. **Garantir as configurações de encoding globais do Git**:
   ```bash
   git config --global i18n.commitEncoding utf-8
   git config --global i18n.logOutputEncoding utf-8
   ```

4. **Uso de Editor Configurado**:
   Em vez de passar a mensagem inline no terminal com o parâmetro `-m "Mensagem com Acentuação"`, prefira abrir o editor configurado (ex: VS Code ou Notepad++) que já salva os arquivos nativamente em UTF-8:
   ```bash
   git commit
   ```

---

## 8. Changelog: Histórico de Mudanças

O Changelog é um arquivo (geralmente `CHANGELOG.md` na raiz do projeto) que documenta todas as mudanças notáveis de forma cronológica, versão por versão. 

**Atenção à diferença:** O Changelog **não** é o log de commits do Git. O log do Git é técnico, cru e voltado para o desenvolvedor. O Changelog é curado, legível e voltado para o ser humano (seja o usuário final, o DevOps que vai fazer o deploy, ou o próximo dev a entrar no projeto).

### O Padrão: Keep a Changelog
Para garantir consistência e legibilidade, adotamos o formato proposto pelo [Keep a Changelog](https://keepachangelog.com/). 

A estrutura base do arquivo `CHANGELOG.md` deve ser:

`
# Changelog

Todas as mudanças notáveis neste projeto serão documentadas neste arquivo.

O formato é baseado em [Keep a Changelog](https://keepachangelog.com/pt-BR/1.1.0/),
e este projeto adere ao [Versionamento Semântico](https://semver.org/lang/pt-BR/).

## [Não Publicado]
### Adicionado
- Novo endpoint para reset de senha via e-mail.

## [1.2.0] - 2026-06-24
### Adicionado
- Suporte a exportação de relatórios em PDF. [#142]

### Corrigido
- Erro de timeout ao processar pagamentos acima de R$ 10.000. [#145]

### Alterado
- Atualizado o layout do dashboard de métricas.

## [1.1.0] - 2026-05-10
...


### Categorias Padronizadas
As mudanças dentro de cada versão devem ser agrupadas nas seguintes categorias:
*   **Adicionado (Added):** Novas funcionalidades.
*   **Alterado (Changed):** Mudanças em funcionalidades existentes.
*   **Depreciado (Deprecated):** Funcionalidades que serão removidas em breve (aviso de descontinuação).
*   **Removido (Removed):** Funcionalidades que foram efetivamente deletadas.
*   **Corrigido (Fixed):** Correções de bugs.
*   **Segurança (Security):** Correções de vulnerabilidades.

### Como Criar e Atualizar

Existem duas abordagens principais para manter o Changelog, e a escolha depende da maturidade do CI/CD do projeto:

#### 1. Abordagem Manual (Tradicional)
O próprio desenvolvedor atualiza o arquivo `CHANGELOG.md` dentro do Pull Request, movendo as mudanças da seção `[Não Publicado]` para a nova versão no momento do merge.
*   **Vantagem:** Controle total sobre a narrativa e a clareza do texto.
*   **Desvantagem:** Propenso a esquecimentos e exige disciplina do time.

#### 2. Abordagem Automatizada (Moderna)
Ferramentas leem as mensagens de commit (usando o padrão *Conventional Commits*) e geram o Changelog automaticamente durante o processo de Release.
*   **Ferramentas recomendadas:** `semantic-release`, `conventional-changelog`, `release-it`, ou a própria geração nativa de *Release Notes* do GitHub.
*   **Vantagem:** Impossível esquecer de atualizar. O processo é 100% automatizado.
*   **Desvantagem:** Exige que o time seja rigoroso na escrita das mensagens de commit.

### Boas Práticas de um Changelog de Sucesso

1.  **Foco no Impacto, não na Implementação:**
    *   *Ruim:* "Alterado o `if` na linha 42 do `UserController.php`." (Isso é commit, não changelog).
    *   *Bom:* "Corrigido erro que impedia o login de usuários com caracteres especiais no e-mail."
2.  **A Versão Mais Recente no Topo:** A ordem cronológica deve ser decrescente. A versão mais nova fica no topo do arquivo, logo após o cabeçalho.
3.  **Mantenha a Seção "Não Publicado":** Sempre mantenha um bloco `## [Não Publicado]` no topo. Conforme os PRs vão sendo mesclados na `main`, as mudanças vão caindo ali. Quando for criar a Release, você apenas renomeia esse bloco para a nova versão (ex: `## [1.3.0] - 2026-06-24`) e cria um novo `Não Publicado` abaixo.
4.  **Link para Issues e PRs:** Sempre que possível, adicione o número da Issue ou do PR no final da linha (ex: `[#142]`). Isso facilita a rastreabilidade para quem quer entender o contexto técnico da mudança.
5.  **Seja Honesto com Breaking Changes:** Se uma versão quebra a retrocompatibilidade (incremento de MAJOR no SemVer), isso deve estar explícito e destacado no topo das notas daquela versão, de preferência com um guia rápido de migração.
6.  **Não Documente Tudo, Documente o que Importa:** Mudanças triviais de refatoração interna que não afetam o comportamento do software ou a API não precisam ir para o Changelog. Deixe isso apenas no histórico do Git.


---

## 9. Estratégias de Branching e Entrega

A forma como organizamos as branches e entregamos código define a velocidade e a segurança do time. Não existe "bala de prata", mas existem padrões de mercado que resolvem problemas específicos.

### 1. GitFlow (O Modelo Clássico)
Ideal para projetos com ciclos de release longos, versões numeradas rigorosamente e necessidade de manter múltiplas versões em produção simultaneamente (ex: software desktop, apps mobile nativos, ou APIs com SLA rígido de versões).

**Estrutura de Branches:**
*   `main`: Contém apenas o código que está em produção. Cada commit aqui é uma nova Release.
*   `develop`: A branch de integração. Contém o código completo e aprovado que irá para a próxima release.
*   `feature/*`: Ramificações da `develop` para criar novas funcionalidades.
*   `release/*`: Ramificações da `develop` para preparação de uma nova versão (apenas correções de bugs e ajustes de build, sem novas features).
*   `hotfix/*`: Ramificações da `main` para correções emergenciais em produção.

**Veredito:** Robusto, mas burocrático. Pode gerar conflitos complexos de merge entre `develop` e `main` se o time não for disciplinado.

### 2. Trunk-Based Development (O Modelo Moderno/Ágil)
O padrão ouro para times que praticam CI/CD (Integração e Entrega Contínuas), SaaS e aplicações web. O foco é manter o ciclo de feedback o mais curto possível.

**Estrutura:**
*   `main` (ou `trunk`): A única branch de longa duração. Todo código integrado aqui está (ou deveria estar) pronto para produção.
*   Branches de Feature: Devem ter vida curtíssima (horas ou, no máximo, 1-2 dias). Se a feature é grande, ela deve ser quebrada em pedaços menores.

**Veredito:** Exige maturidade do time, testes automatizados fortes e uso obrigatório de **Feature Flags**. Elimina os "infernos de merge" do GitFlow.

### 3. Feature Flags (Toggles)
No Trunk-Based Development, como entregamos uma feature que ainda está pela metade sem que o usuário final a veja? A resposta é Feature Flags (Chaves de Funcionalidade).

Feature Flags permitem ligar ou desligar trechos de código em tempo de execução, sem precisar fazer um novo deploy.

**Como implementar no ecossistema GitHub/DevOps:**
O GitHub não possui um sistema nativo de Feature Flags complexo (como LaunchDarkly ou Split.io), mas o padrão de mercado se integra perfeitamente ao fluxo:
1.  **Variáveis de Ambiente / Configuração:** O código verifica uma variável (`if (config.ENABLE_NEW_CHECKOUT)`). O GitHub Actions injeta essas variáveis no momento do deploy para cada ambiente (Homologação vs. Produção).
2.  **Tabela no Banco de Dados / Redis:** O sistema consulta uma tabela de `feature_toggles` (muitas vezes cacheada no Redis/Memcached para performance) para decidir se o usuário X ou Y verá a nova feature.
3.  **GitHub Actions para Automação:** Você pode criar workflows no GitHub que, ao receberem um webhook de uma ferramenta de Feature Flags, rodam testes automatizados especificamente para a feature que foi liberada.

**Regra de Ouro das Flags:** Feature Flags não são eternas. Uma vez que a feature é validada em produção e liberada para 100% dos usuários, o código da flag e o caminho antigo devem ser **removidos** (o famoso *Flag Cleanup*) para evitar que o código vire um espaguete de `if/else`.

---

---

## 10. API do GitHub e OAuth 2.0
Integrar sua aplicação ao GitHub é poderoso, seja para buscar dados ou permitir login.

**OAuth 2.0 (Login com GitHub na sua aplicação):**
1. Registre um "OAuth App" nas configurações de desenvolvedor do GitHub.
2. Obtenha o `Client ID` e `Client Secret`.
3. Redirecione o usuário para: `https://github.com/login/oauth/authorize?client_id=SEU_ID&scope=read:user`
4. O GitHub redireciona de volta ao seu `callback` com um `code`.
5. Seu backend (PHP, Node, etc.) usa cURL para trocar o `code` por um `access_token`:
```php
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://github.com/login/oauth/access_token");
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, "client_id=SEU_ID&client_secret=SEU_SECRET&code=$code");
curl_setopt($ch, CURLOPT_HTTPHEADER, ["Accept: application/json"]);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
```
6. Use o token para chamar a API do GitHub (ex: `https://api.github.com/user`) e obter os dados do usuário logado.

**Trabalhando com a API:**
Use a GitHub CLI (`gh`) para automações locais ou cURL/PHP para integrações no backend (como conectar o n8n ou Blip! para monitorar issues automaticamente).

---

## 11. Regras Especiais para Agentes de IA
Se você está instruindo um agente (Ollama, Hermes, Openclaw) a operar no Git, imponha estas regras rígidas para evitar alucinações:
1. **Verifique o estado antes de agir:** O agente deve sempre rodar `git status` e `git log -1` antes de propor qualquer alteração, para ter contexto real do diretório.
2. **Nunca invente hashes:** Se o agente precisar referenciar um commit, ele deve obtê-lo via `git log`, nunca gerar um hash aleatório.
3. **Commits atômicos e descritivos em Português**: O agente deve gerar mensagens de commit no padrão Conventional Commits, escritas obrigatoriamente em **Português do Brasil (pt-BR)**, explicando o "porquê" da mudança, não apenas o "o que".
4. **Proibido force push:** O agente nunca deve sugerir ou executar `git push --force` sem uma confirmação explícita e detalhada do desenvolvedor humano.
5. **Respeite o `.gitignore`:** O agente não deve tentar adicionar ou versionar arquivos de ambiente (`.env`), pastas `vendor/` ou `node_modules/`.

---

## 12. Regras para Desenvolvedores
*   **Mensagens de Commit em Português**: Todas as mensagens de commit (tanto de desenvolvedores quanto de agentes de IA) devem ser escritas obrigatoriamente em **Português do Brasil (pt-BR)**.
*   **Commits atômicos:** Um commit, uma ideia. Não misture correção de bug com refatoração de CSS no mesmo commit.
*   **Nunca commite credenciais:** Chaves de API, senhas de banco e tokens morrem no `.gitignore`. Se vazar, revogue a chave imediatamente e limpe o histórico do Git.
*   **PRs pequenos:** Pull Requests com mais de 400 linhas de código são ignorados ou aprovados sem revisão real. Quebre a entrega em pedaços lógicos.
*   **Proteja a main:** Configure no GitHub que a branch `main` exija pelo menos 1 aprovação de PR e a passagem nos checks de CI antes de permitir o merge.

---

## Links Úteis

- [Documentação Oficial](https://git-scm.com/)
- [Github](https://github.com/)
- [Versionamento Semântico (SemVer 2.0.0)](https://semver.org/lang/pt-BR/)
- [Changelog](https://keepachangelog.com/pt-BR/1.1.0/)

