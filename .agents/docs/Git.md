

# Guia Definitivo de Git: Do Zero ao Avançado
*Uma abordagem humana, técnica e futurista para dominar o controle de versão.*

## 1. O que é Git?
Imagine que você está desenhando um quadrinho incrível. A cada página nova, você tira uma foto e guarda numa pasta mágica. Se você errar um traço na página 10, não precisa rasgar o caderno todo. Basta voltar para a foto da página 9 e continuar dali. Melhor ainda: você pode pedir para um amigo desenhar o cenário enquanto você desenha os personagens, e no final a pasta mágica junta os dois desenhos perfeitamente, sem um riscar o papel do outro. 

Git é essa pasta mágica. Ele é um sistema de controle de versão distribuído. Ele tira "fotos" (commits) do seu código ao longo do tempo, permitindo que você viaje no tempo, colabore sem caos e experimente ideias sem medo de estragar o que já funciona.

## 2. Por que e Quando Usar?
**Por que usar:** Porque a memória humana é falha e o trabalho em equipe sem controle é um desastre anunciado. Git te dá segurança, rastreabilidade e a capacidade de experimentar (branches) sem comprometer a versão estável do seu projeto.
**Quando usar:** Sempre. Desde o primeiro arquivo de um projeto pessoal minúsculo até o monólito de uma multinacional. Se o arquivo é importante o suficiente para ser perdido, ele é importante o suficiente para estar no Git.

## 3. Instalação (Rápida e Indolor)
O Git é leve e roda em qualquer lugar. É os Guri, a ferramenta universal.

*   **Windows:** Baixe o instalador oficial em `git-scm.com`. Durante a instalação, aceite as opções padrão, mas preste atenção para escolher o editor de texto que você já usa (como VS Code) e garantir que o Git use UTF-8 (para evitar aqueles caracteres corrompidos em acentos, lembra do nosso guia?).
*   **Linux (Ubuntu/Debian):** Abra o terminal e digite `sudo apt update && sudo apt install git`. Simples assim.
*   **Mac:** Use o Homebrew com `brew install git` ou baixe o instalador nativo. O macOS já vem com uma versão, mas a do Homebrew está sempre mais atualizada.

Após instalar, configure sua identidade globalmente:
```bash
git config --global user.name "Seu Nome Real"
git config --global user.email "seu.email@dominio.com"
git config --global init.defaultBranch main
```

## 4. O Dicionário Essencial (A Base de Tudo)
Para dominar, você precisa falar a língua.
*   **Repositório:** O cofre do seu projeto. Contém todo o código e o histórico de mudanças.
*   **Commit:** Uma foto imutável do estado do seu projeto em um momento exato.
*   **Branch (Ramificação):** Uma linha do tempo paralela. Você cria uma para desenvolver uma feature sem tocar na linha do tempo principal (`main`).
*   **Staging Area:** A sala de espera. Onde você escolhe quais arquivos farão parte da próxima foto (commit).
*   **HEAD:** O ponteiro que diz "você está trabalhando aqui agora".
*   **Merge:** Juntar duas linhas do tempo em uma só.
*   **Rebase:** Reescrever a história, pegando seus commits e aplicando-os no topo de outra branch, deixando o histórico linear e limpo.

## 5. Comandos Completos: Do Básico ao Avançado
Aqui está o arsenal. Decore o básico, consulte o avançado quando a situação exigir.

### Operações de Início e Configuração
```bash
git init                  # Transforma uma pasta comum em repositório Git
git clone <url>           # Baixa um repositório remoto completo para sua máquina
git config --list         # Mostra todas as configurações atuais
```

### O Ciclo de Vida Diário
```bash
git status                # O comando mais usado. Mostra o que está modificado, na staging ou ignorado
git add <arquivo>         # Coloca um arquivo na Staging Area (use '.' para todos)
git commit -m "feat: adiciona login social" # Tira a foto com uma mensagem clara (use Conventional Commits)
git log --oneline --graph # Mostra o histórico de commits de forma visual e resumida
```

### Gerenciamento de Branches (O Segredo da Produtividade)
```bash
git branch                # Lista branches locais
git switch <nome>         # Troca para outra branch (moderno e seguro, substitui o antigo checkout para isso)
git switch -c <nome>      # Cria uma nova branch e já troca para ela
git merge <nome>          # Junta a branch especificada na branch onde você está atualmente
git branch -d <nome>      # Deleta uma branch local que já foi mesclada
```

### Sincronização com o Mundo (Remoto)
```bash
git fetch origin          # Baixa as novidades do servidor, mas não mexe no seu código local
git pull origin main      # Baixa e já tenta juntar (fetch + merge) com seu trabalho atual
git push origin <branch>  # Envia seus commits locais para o servidor remoto
```

### Desfazendo Erros (Sem Pânico)
```bash
git restore <arquivo>     # Descarta mudanças em arquivos que ainda não foram para a staging
git restore --staged <arquivo> # Tira o arquivo da staging, mas mantém as mudanças no seu computador
git revert <hash>         # Cria um NOVO commit que desfaz exatamente o que um commit anterior fez (seguro para branches públicas)
git reset --hard <hash>   # Apaga tudo e volta no tempo. Cuidado: isso reescreve a história local. Nunca use em branches compartilhadas.
```

### Ferramentas Avançadas (Nível Arquiteto)
```bash
git stash                 # Guarda suas mudanças temporárias numa pilha para você trocar de branch sem committar bagunça
git stash pop             # Traz as mudanças guardadas de volta
git rebase -i HEAD~3      # Rebase interativo: permite juntar, reordenar ou editar os últimos 3 commits antes de enviar
git reflog                # O salvador da pátria. Mostra um log de TODOS os movimentos do HEAD, mesmo commits "deletados". Se você estragou tudo, o reflog te traz de volta.
git bisect                # Encontra exatamente qual commit introduziu um bug, usando busca binária. Mazzá!
```

## 6. Recursos que Você Pode Criar com Git
Git não é apenas salvar arquivos. É uma plataforma de automação.
*   **Git Hooks:** Scripts que rodam automaticamente em eventos (ex: `pre-commit` para rodar linter e impedir commit de código quebrado, ou `pre-push` para rodar testes).
*   **Submódulos:** Incluir outro repositório Git dentro do seu repositório, mantendo-os independentes mas vinculados.
*   **Worktrees:** Trabalhar em múltiplas branches do mesmo repositório simultaneamente, em pastas diferentes, sem precisar ficar dando `git stash` e `git switch` o tempo todo.

## 7. Como Criar Seu Próprio Servidor Git
Nem tudo precisa estar na nuvem de terceiros. Criar um servidor Git é surpreendentemente simples.
1. Em um servidor Linux (pode ser uma VM local ou na nuvem), instale o Git.
2. Crie um usuário dedicado (ex: `git`).
3. Crie um repositório "bare" (nu, sem diretório de trabalho, apenas os dados do Git):
   ```bash
   mkdir meu-projeto.git
   cd meu-projeto.git
   git init --bare
   ```
4. Na sua máquina local, adicione este servidor como remoto:
   ```bash
   git remote add origin ssh://git@seu-servidor.com:/caminho/para/meu-projeto.git
   git push -u origin main
   ```
Pronto. Você tem um repositório centralizado privado, controlado por você, usando o protocolo SSH seguro.

## 8. O Mercado de Repositórios: Gratuitos vs. Pagos
Onde hospedar seu código define seu fluxo de trabalho.

**Gratuitos (com limites generosos):**
*   **GitHub:** O padrão da indústria. Repositórios públicos e privados ilimitados. Actions (CI/CD) com 2000 minutos/mês gratuitos. Ecossistema imbatível de integrações e IA (Copilot).
*   **GitLab:** Foco pesado em DevOps completo. A versão SaaS gratuita é excelente, e a versão Community Edition (CE) pode ser hospedada no seu próprio servidor (self-hosted) gratuitamente, com CI/CD ilimitado.
*   **Bitbucket:** Da Atlassian. Integração nativa perfeita com Jira e Trello. Gratuito para times pequenos (até 5 usuários), mas o modelo de cobrança escala de forma diferente.

**Pagos / Corporativos:**
*   **Azure DevOps (Azure Repos):** O gigante para ecossistemas Microsoft, mas que roda Git perfeitamente. Oferece pipelines robustos, boards integrados e artefatos. Paga-se por usuário paralelo e minutos de pipeline. (Vamos detalhar isso no próximo documento).
*   **GitHub Enterprise / GitLab Premium:** Para grandes corporações. Trazem SSO (Single Sign-On), auditoria avançada, suporte 24/7 e regras de compliance rígidas.

**A Diferença Real:** A ferramenta não faz o desenvolvedor. O que separa um repositório amador de um profissional não é se é GitHub ou GitLab, mas sim a aplicação de boas práticas: Pull Requests obrigatórios, proteção de branch `main`, CI/CD rodando testes e mensagens de commit padronizadas.

---

## 9. Padrão de Commits (Conventional Commits)

Adotamos a especificação [Conventional Commits](https://www.conventionalcommits.org/pt-br/v1.0.0/) para todas as mensagens de commit neste projeto. Isso garante mensagens padronizadas, facilita a leitura do histórico e permite a geração automática de changelogs e versionamento semântico.

### Estrutura da Mensagem de Commit
```text
<tipo>[escopo opcional]: <descrição>

[corpo opcional]

[rodapé opcional]
```

### Regras Principais:
1. **Mensagens em Português**: Todas as mensagens devem ser escritas em **Português do Brasil (pt-BR)**.
2. **Tipos Permitidos**:
   - `feat`: Introduz uma nova funcionalidade (mapeia para `MINOR` no SemVer).
   - `fix`: Corrige um bug (mapeia para `PATCH` no SemVer).
   - `chore`: Tarefas de build, configurações ou atualizações de dependências (sem alteração de código produtivo).
   - `docs`: Alterações apenas na documentação.
   - `style`: Ajustes que não alteram o significado do código (espaço, formatação, etc.).
   - `refactor`: Mudança no código que não corrige um bug nem adiciona uma feature.
   - `perf`: Melhorias de desempenho.
   - `test`: Adição ou correção de testes unitários ou de integração.
   - `ci`: Alterações nos arquivos de configuração do pipeline de CI/CD (ex: Azure Pipelines, GitHub Actions).
3. **Quebras de Compatibilidade (BREAKING CHANGES)**:
   - Devem ser sinalizadas com um ponto de exclamação (`!`) após o tipo/escopo ou com o termo `BREAKING CHANGE:` no rodapé da mensagem (mapeia para `MAJOR` no SemVer).
   - Exemplo: `feat(api)!: altera a estrutura de retorno da API de CNPJ`

### Exemplos Práticos:
- `feat(cnpj): adiciona download automático do arquivo de Simples Nacional`
- `fix(auth): resolve problema de expiração precoce da sessão no Redis`
- `chore(deps): atualiza symfony/var-dumper para v8.1.1`
- `docs(adr): cria ADR-001 sobre banco de dados`

---

Veja também `Git-GitHub.md` , `Azure-DevOps.md` , `Versionamento-Semantico.md` , `PROJECT.md` , `AGENTS.md` 