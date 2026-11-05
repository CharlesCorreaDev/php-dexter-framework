# 📖 Engineering Playbook: Padrão Ouro de Desenvolvimento

## ⚠️ Regras Inegociáveis (Foundation)
1. **Docs-as-Code:** Toda documentação (PRD, RFC, ADR, Runbooks) deve ser escrita em Markdown e versionada dentro do repositório Git (pasta `/.agents/docs`), nunca em wikis externas desconectadas do código.
2. **DevSecOps:** Segurança não é uma fase final. Scans de dependências, secrets e ameaças são obrigatórios no CI.
3. **Zero Pulo de Fases:** É estritamente proibido começar a escrever código (Fase 3) sem um RFC aprovado e um contrato de API definido (Fase 2).

---

## 🧑‍💻 vs 🤖: Diretrizes de Comportamento
*   **🧑‍💻 Desenvolvedor Humano:** Foco em visão de negócio, empatia com o usuário, arquitetura de alto nível, tomada de decisão complexa e Code Review crítico.
*   **🤖 Agente de IA:** Foco em geração de boilerplate, escrita de testes, garantia de conformidade com o contrato da API, formatação, e sugestão de melhorias. **A IA não tem autonomia para pular fases ou aprovar seus próprios PRs.**

---

# 🚀 O Fluxo Obrigatório de 4 Fases

## FASE 1: Descoberta e Especificação (Discovery & PRD)
**Objetivo:** Definir *o que* vamos construir, *por que* e *como* mediremos o sucesso.

### Passos Obrigatórios:
1. **Redação do PRD:** Definir problema, solução, escopo (o que entra e o que *não* entra).
2. **User Stories & BDD:** Escrever critérios de aceite no formato `Dado que / Quando / Então`.
3. **Design/UX:** Definir fluxos de tela e componentes (Figma/Design System).
4. **Métricas de Sucesso:** Definir KPIs claros.

> 🤖 **INSTRUÇÃO PARA AGENTE DE IA (FASE 1):**
> *   **Sua tarefa:** Auxiliar na estruturação do PRD, gerar rascunhos de User Stories em formato BDD a partir de textos brutos, e garantir que não haja ambiguidade nos requisitos.
> *   **O que você NÃO deve fazer:** Não sugira tecnologias, bancos de dados ou arquiteturas nesta fase. Foque 100% no produto e no usuário.

🔒 **GATEWAY (Condição para avançar):** O PRD está no repositório (`/docs/prd/`), as métricas estão definidas e o Produto/Design aprovou.

---

## FASE 2: Design de Engenharia (RFC & ADR)
**Objetivo:** Definir *como* vamos construir, mitigando riscos técnicos antes de codar.

### Passos Obrigatórios:
1. **API-First:** Criar o contrato da API (OpenAPI/Swagger ou GraphQL Schema).
2. **Redação do RFC:** Propor a arquitetura, modelagem de dados, alternativas consideradas e trade-offs.
3. **Threat Modeling:** Análise básica de segurança (ex: onde os dados sensíveis ficam, como a autenticação será tratada).
4. **Criação do ADR:** Após o RFC ser aceito, registrar a decisão final no formato ADR (`/docs/adr/`).

> 🤖 **INSTRUÇÃO PARA AGENTE DE IA (FASE 2):**
> *   **Sua tarefa:** Gerar o esqueleto do OpenAPI/Swagger baseado no PRD. Sugerir modelos de dados (SQL/NoSQL) baseados nos requisitos. Redigir o rascunho do RFC e do ADR seguindo os templates da empresa.
> *   **O que você NÃO deve fazer:** **PROIBIDO ESCREVER CÓDIGO DE APLICAÇÃO NESTA FASE.** Você deve apenas escrever código de documentação (Markdown, YAML, JSON schemas).

🔒 **GATEWAY (Condição para avançar):** O contrato da API está versionado. O RFC foi revisado por pelo menos 2 engenheiros seniores. O ADR foi mergeado na branch `main`.

---

## FASE 3: Ação e Execução (Dev & CI)
**Objetivo:** Implementar a solução seguindo estritamente o design da Fase 2.

### Passos Obrigatórios:
1. **Setup de Ambiente:** Garantir que o `DevContainer` (ou equivalente) está rodando.
2. **Implementação:** Escrever o código (Backend e Frontend) respeitando o contrato da API.
3. **Testes (Shift-Left):** Escrever testes Unitários (regras de negócio), de Integração (API/DB) e E2E (fluxos críticos).
4. **Pull Request (PR):** Abrir PR com descrição clara, link para o PRD e RFC.
5. **CI Automatizado:** O pipeline deve rodar Linters, Testes, SonarQube (qualidade) e Snyk/Dependabot (segurança).

> 🤖 **INSTRUÇÃO PARA AGENTE DE IA (FASE 3):**
> *   **Sua tarefa:** Escrever o código da aplicação estritamente obedecendo ao contrato da API gerado na Fase 2. Gerar testes unitários e de integração com alta cobertura. Corrigir erros apontados pelo CI/Linter. Escrever a descrição do PR.
> *   **O que você NÃO deve fazer:** Não altere o contrato da API sem abrir um novo RFC. Não faça `git push --force` na branch main. **Nunca faça merge do seu próprio PR.**

🔒 **GATEWAY (Condição para avançar):** CI está 100% verde (Passando). Code Review aprovado por pelo menos 1 desenvolvedor humano. Cobertura de testes atinge o mínimo definido (ex: 80%).

---

## FASE 4: Ciclo de Vida e Operação (CD, Deploy & SRE)
**Objetivo:** Entregar o valor ao usuário com segurança, visibilidade total e capacidade de rollback.

### Passos Obrigatórios:
1. **Feature Flags:** A feature deve ser mergeada "desligada".
2. **Deploy Automatizado (CD):** Pipeline de deploy para Staging (validação) e Produção.
3. **Observabilidade:** Implementar Logs estruturados, Métricas e Traces (OpenTelemetry).
4. **Definição de SLOs:** Configurar alertas baseados nos SLIs (ex: Latência < 200ms, Erro < 1%).
5. **Pós-Deploy:** Liberar a Feature Flag progressivamente.

> 🤖 **INSTRUÇÃO PARA AGENTE DE IA (FASE 4):**
> *   **Sua tarefa:** Gerar o boilerplate de instrumentação (OpenTelemetry) no código. Sugerir configurações de alertas e dashboards (Grafana/Datadog) baseados nas métricas do PRD. Se ocorrer um incidente, ajudar a rascunhar o *Blameless Post-Mortem*.
> *   **O que você NÃO deve fazer:** Não execute comandos de deploy manualmente. Não altere regras de negócio via Feature Flag sem notificar o time de Produto.

🔒 **GATEWAY (Condição para avançar/Encerrar):** A feature está em produção (mesmo que para 1% dos usuários). Os dashboards de observabilidade estão capturando dados. O ciclo se encerra e o feedback volta para a Fase 1.

---

# 🛑 Protocolo de Emergência e Incidentes

Se um erro ocorrer em produção em qualquer momento:

1. **Mitigação Imediata:** Reverter a Feature Flag ou dar rollback do deploy. (O objetivo é parar a dor do usuário, não achar o bug).
2. **Comunicação:** Avisar os stakeholders.
3. **Post-Mortem (Obrigatório):** Em até 48h, um documento deve ser criado em `/docs/post-mortems/`.
   * **Regra de Ouro:** Foco no *processo e sistema*, nunca em culpar indivíduos (Blameless).
   * **Ação Corretiva:** Criar tickets para garantir que o erro não se repita (ex: adicionar um teste E2E que simule o erro).

> 🤖 **INSTRUÇÃO PARA AGENTE DE IA (EM INCIDENTES):**
> *   Analise os logs e traces fornecidos. Sugira a causa raiz baseada no código. Rascunhe o documento de Post-Mortem seguindo o template. Crie o código do teste de regressão para o bug encontrado.

---

### Como usar este documento com Agentes de IA (System Prompt)

*Se você for configurar um Agente de IA (como um assistente de IDE, Copilot Workspace, ou um agente autônomo), injete o seguinte no System Prompt dele:*

```text
Você é um Engenheiro de Software Sênior operando sob o "Engineering Playbook" da empresa. 
Sua regra absoluta é: NENHUMA FASE PODE SER PULADA.

Antes de gerar qualquer código de aplicação, você DEVE verificar:
1. Existe um PRD e User Stories definidos? (Fase 1)
2. Existe um RFC aprovado e um Contrato de API (OpenAPI/GraphQL) definido? (Fase 2)

Se a Fase 1 ou 2 não estiverem concluídas, RECUSE-SE a escrever código de aplicação. Em vez disso, ajude o usuário a redigir o PRD, o RFC ou o Contrato da API.
Se as fases estiverem concluídas, escreva o código estritamente respeitando o contrato da API, garanta que os testes estão sendo escritos (Shift-Left) e adicione instrumentação de OpenTelemetry.
Nunca sugira pular o Code Review ou o CI.



```