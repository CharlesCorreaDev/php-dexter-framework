# Guia Definitivo de Git e Azure DevOps: Para Projetos, Desenvolvedores e Agentes de IA
*Domine o controle de versão, a gestão ágil e a automação corporativa com precisão cirúrgica.*

## 1. O que é e Pra Que Serve
**Git** continua sendo o motor. Não muda. É o sistema distribuído que guarda seu histórico.
**Azure DevOps** é a plataforma completa que orquestra o ciclo de vida do software. Ele não é só "hospedagem de código". Ele é dividido em 5 pilares:
1. **Azure Repos**: Hospedagem de repositórios Git (ou TFVC, mas vamos focar no Git, que é o padrão da indústria).
2. **Azure Pipelines**: O motor de CI/CD (Integração e Entrega Contínua) mais flexível do mercado, rodando em Windows, Linux ou macOS.
3. **Azure Boards**: Gestão de trabalho ágil (Kanban, Scrum, Backlogs) nativamente integrada aos commits e PRs.
4. **Azure Artifacts**: Gerenciamento de pacotes (Maven, npm, NuGet, Python, Universal Packages) para suas dependências privadas.
5. **Azure Test Plans**: Gestão de testes manuais e exploratórios (menos usado em stacks ágeis puramente automatizados, mas poderoso para QA).

**Pra que serve:** Para garantir que, do momento em que uma ideia vira um card no Board até o deploy em produção, tudo seja rastreável, auditável, automatizado e seguro.

## 2. Instalação e Configuração Inicial
O Git em si instala-se da mesma forma que vimos antes (Windows/WSL, Linux, Mac). A diferença crucial no ecossistema Azure é a **autenticação**.

*   **Windows/Mac/Linux**: Instale o Git e, imediatamente, o **Git Credential Manager (GCM)**. Ele já vem embutido nas instalações modernas do Git para Windows e Mac. No Linux, instale via `sudo apt install git-credential-manager`.
*   **Azure CLI**: Instale o `az cli` (`curl -sL https://aka.ms/InstallAzureCLIDeb | sudo bash` no Linux) para interagir com a plataforma via terminal.

**Configuração Inicial Obrigatória:**
```bash
git config --global user.name "Seu Nome"
git config --global user.email "seu.email@dominio.com"
git config --global init.defaultBranch main
# Configura o GCM para lidar com a autenticação da Microsoft sem dor
git config --global credential.helper manager-core
```

## 3. Como Usar: O Fluxo Azure DevOps
O fluxo muda um pouco pela integração nativa com a gestão de trabalho:
1. **Planeje**: Crie ou pegue um Work Item (Bug, User Story) no Azure Boards. Anote o ID (ex: `#142`).
2. **Isole**: `git switch -c feature/login-oauth`
3. **Trabalhe e Vincule**: `git commit -m "feat(auth): adiciona login Microsoft. Fixes AB#142"` *(O `AB#142` vincula magicamente o commit ao card no Board)*.
4. **Envie**: `git push -u origin feature/login-oauth`
5. **Proponha**: Abra um Pull Request no Azure Repos. O pipeline de validação roda automaticamente.
6. **Aprova e Mescla**: Após aprovação, o merge é feito e o card no Board move-se para "Concluído".

## 4. Comandos Essenciais (Foco Azure Repos)
A sintaxe Git é universal. O que muda é a URL do remoto e a integração.

**Clonando um Repositório Azure:**
```bash
# O formato da URL é: https://dev.azure.com/{Organizacao}/{Projeto}/_git/{Repositorio}
git clone https://dev.azure.com/MinhaEmpresa/MeuProjeto/_git/MeuRepositorio
```

**Vinculando Commits a Work Items (O Pulo do Gato):**
Use palavras-chave no commit ou na mensagem do PR para atualizar o Azure Boards automaticamente:
*   `Fixes AB#123` ou `Fixes #123`: Fecha o item de trabalho ao fazer o merge.
*   `Addresses AB#123`: Vincula o commit ao item, mas não o fecha.

**Sincronização e Limpeza:**
```bash
git fetch origin
git pull origin main
# Limpa branches locais que já foram mescladas e deletadas no remoto
git fetch -p && git branch --merged | egrep -v "(^\*|main|develop)" | xargs git branch -d
```

## 5. Branches e Merge: Pull Requests no Azure
No Azure Repos, o Pull Request (PR) é uma entidade rica, não apenas um pedido de merge.
**Como criar e mesclar:**
1. Push da sua branch.
2. No portal do Azure, crie o PR.
3. **Regra de Ouro**: Configure *Branch Policies* na `main`. Exija:
   - Mínimo de 1 (ou 2) revisores.
   - *Build Validation*: Um pipeline deve rodar e passar antes de o botão "Complete" ficar habilitado.
   - Vinculação obrigatória de um Work Item.
4. Ao completar, escolha o tipo de merge: **Squash merge** (recomendado para manter o histórico da `main` limpo) ou **Rebase and fast-forward**.

## 6. Automatizando Processos: Azure Pipelines
**O que são:** Arquivos YAML (ou o editor clássico, mas YAML é o futuro e o presente) que definem etapas de build, teste e deploy.
**Pra que servem:** Garantir que o código seja compilado, testado e empacotado da mesma forma, toda vez, sem intervenção humana ("Funciona na minha máquina" não é aceito aqui).

**Exemplo Prático (`azure-pipelines.yml`) para um projeto PHP/Node:**
```yaml
trigger:
  branches:
    include:
      - main
      - release/*

pool:
  vmImage: 'ubuntu-latest'

steps:
- task: NodeTool@0
  inputs:
    versionSpec: '20.x'
  displayName: 'Instalar Node.js'

- script: |
    npm install
    npm run build
  displayName: 'Instalar dependências e Build'

- task: PublishBuildArtifacts@1
  inputs:
    PathtoPublish: 'dist'
    ArtifactName: 'drop'
  displayName: 'Publicar Artefato para Deploy'
```

## 7. Tags, Releases e Versionamento no Azure
Aqui há uma distinção importante que confunde muita gente:
*   **Git Tag**: É o marcador imutável no código (ex: `v1.2.0`). Cria-se exatamente como no Git padrão (`git tag -a v1.2.0 -m "Release" && git push origin v1.2.0`).
*   **Azure Release (Environments)**: No Azure, "Release" frequentemente se refere ao *pipeline de implantação* que pega o artefato gerado no Build e o envia para ambientes (Homologação, Produção), com aprovações manuais e janelas de manutenção.

**Como criar versionamento automático:**
Use uma tarefa no pipeline para ler o SemVer e atualizar arquivos (`package.json`, `composer.json`) antes do build, ou use ferramentas como `GitVersion` que calculam a versão com base no histórico de branches e tags.

## 8. Recuperação de Dados
*   **Nível Git**: `git reflog`, `git restore`, `git revert` (funcionam exatamente como documentado anteriormente).
*   **Nível Azure DevOps**: Se um repositório, pipeline ou projeto inteiro for deletado por engano, o Azure DevOps mantém os dados em um estado de "soft delete" por **28 dias**. Um administrador da organização pode restaurá-lo pela interface de configuração da organização. É a rede de segurança definitiva.

## 9. API do Azure DevOps e OAuth (Microsoft Entra ID)
Integrar sua aplicação ao ecossistema Microsoft é nativo e poderoso.

**OAuth 2.0 (Login com Microsoft na sua aplicação):**
Hoje, isso é feito via **Microsoft Entra ID** (antigo Azure AD).
1. Registre um "App Registration" no portal do Azure (Entra ID).
2. Obtenha o `Client ID` e crie um `Client Secret`.
3. Configure o URI de redirecionamento (ex: `https://suaapp.com/callback`).
4. Redirecione o usuário para:
   `https://login.microsoftonline.com/{tenant-id}/oauth2/v2.0/authorize?client_id=SEU_ID&response_type=code&redirect_uri=SEU_URI&scope=openid profile email`
5. No backend (PHP, Node, etc.), troque o `code` pelo token via cURL no endpoint `token` do v2.0.
6. Use o token para obter os dados do usuário ou, se precisar, chamar a API do Azure DevOps (adicionando o escopo `499b84ac-1321-427f-aa17-267ca6975798/.default`).

**Trabalhando com a API REST do Azure DevOps:**
Para automações (ex: um agente criando um Work Item ou disparando um pipeline), use **Personal Access Tokens (PATs)** com escopo mínimo necessário, ou registre um App para usar OAuth. A API é RESTful e documentada exaustivamente pela Microsoft.
Exemplo de chamada para listar repositórios:
```bash
curl -u :SEU_PAT_TOKEN https://dev.azure.com/{organizacao}/{projeto}/_apis/git/repositories?api-version=7.1
```

## 10. Regras Especiais para Agentes de IA
Se o Hermes, Openclaw ou qualquer outro agente for operar aqui, as regras são inegociáveis:
1. **Nunca hardcode PATs ou Segredos**: O agente deve usar variáveis de ambiente ou variáveis de pipeline (`$(System.AccessToken)`) para autenticação.
2. **Vinculação Obrigatória**: O agente deve sempre tentar identificar o ID do Work Item relacionado e incluí-lo na mensagem de commit ou PR (`Fixes AB#XYZ`).
3. **Respeito às Políticas**: O agente não deve tentar forçar (`--force`) ou completar um PR se as políticas de branch (ex: aprovação pendente, build falhando) não estiverem satisfeitas. Ele deve reportar o bloqueio ao humano.
4. **Leitura de Contexto**: Antes de propor código, o agente deve ler o `azure-pipelines.yml` existente para entender as restrições de build e os passos de validação do projeto.

## 11. Regras para Versionamento e Commits (SemVer e Conventional Commits)

Adotamos rigorosamente a especificação [Conventional Commits v1.0.0](https://www.conventionalcommits.org/pt-br/v1.0.0/) integrada com o versionamento semântico (SemVer) e vinculação de cartões do Azure Boards:

### Padrão de Commits no Azure DevOps
A mensagem de commit deve seguir a estrutura padrão do Conventional Commits e conter obrigatoriamente a referência ao card do Azure Boards no final (`Fixes AB#ID` para encerrar, ou `Addresses AB#ID` / apenas `AB#ID` para vincular):
```text
<tipo>[escopo opcional]: <descrição> [AB#ID]
```

### Mapeamento de Tipos e SemVer:
*   `feat`: Funcionalidades novas (incrementa **MINOR** ex: `1.1.0`).
*   `fix`: Correções de bugs (incrementa **PATCH** ex: `1.0.1`).
*   `chore` / `ci` / `docs` / `style` / `refactor` / `perf` / `test`: Alterações que não impactam a versão pública (normalmente não geram nova release ou incrementam apenas **PATCH** dependendo do setup).
*   **BREAKING CHANGES (Quebras de Compatibilidade)**: Devem conter um ponto de exclamação (`!`) após o tipo/escopo ou incluir `BREAKING CHANGE:` no rodapé (incrementa **MAJOR** ex: `2.0.0`).

### Exemplos Práticos no Azure DevOps:
- `feat(api): adiciona exportação de relatórios em PDF AB#405`
- `fix(auth): corrige autenticação de token expirado AB#201`
- `refactor(db)!: remove coluna obsoleta do banco de dados AB#334`

### Recomendações Adicionais no Azure:
*   Use o **Azure Artifacts** para publicar pacotes versionados. Um pacote `1.2.3` no feed é imutável.
*   Configure o pipeline de Release para só promover o artefato para o ambiente de "Produção" se a versão for estável (sem sufixos `-alpha` ou `-beta`, a menos que seja um canal de pré-lançamento dedicado).
*   Mantenha o arquivo `CHANGELOG.md` atualizado, preferencialmente gerado de forma automática pelo próprio pipeline ao analisar os commits com Conventional Commits.

## 12. Regras para Desenvolvedores
*   **Trabalhe com o Board**: Não existe "código fantasma". Todo PR deve estar vinculado a um item de trabalho. Se não tem card, não tem código.
*   **Proteja a Main**: Branch policies não são sugestões, são leis. Configure-as e não peça para bypassar.
*   **Use Azure Artifacts**: Não baixe dependências de repositórios públicos no pipeline de produção se você tem uma cópia espelhada ou privada no Artifacts. É mais seguro e rápido.
*   **Limpeza**: Delete sua branch remota logo após o merge do PR. O Azure oferece um botão para isso no PR. Mantenha o repositório enxuto.

## 13. Notas Finais
O Azure DevOps pode parecer uma nave espacial comparado a um setup básico de Git. Mas a complexidade dele é justamente o que oferece a segurança e a escalabilidade que projetos sérios exigem. 

A beleza está em configurar as regras uma vez (Pipelines, Policies, Boards) e depois deixar o sistema trabalhar para você. O desenvolvedor foca em resolver o problema de negócio, e a plataforma garante que a entrega seja segura, rastreável e repetível. 
