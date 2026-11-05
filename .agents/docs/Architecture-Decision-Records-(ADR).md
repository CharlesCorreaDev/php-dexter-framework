# 📐 Guia de Architecture Decision Records (ADR)
> **Documentação de referência para Desenvolvedores e Agentes de IA**  
> *Versão: 1.0 | Última atualização: 2026*

Este documento define o padrão, o processo e as melhores práticas para criação, manutenção e uso de **Architecture Decision Records (ADRs)** neste projeto. O objetivo é garantir que o "porquê" das nossas escolhas técnicas seja preservado, acessível e utilizável tanto por humanos quanto por sistemas automatizados.

---

## 1. O que é um ADR?
Um **Architecture Decision Record (ADR)** é um documento curto, estruturado e imutável que captura uma decisão arquitetural significativa, o contexto em que foi tomada, as alternativas consideradas e as consequências (trade-offs) dessa escolha. 

Pense no ADR como a "memória de longo prazo" do projeto: ele responde à pergunta *"Por que raios fizemos dessa forma?"* que inevitavelmente surge meses ou anos depois.

---

## 2. Para que serve?
- **Para Desenvolvedores:** Evita a perda de conhecimento com a rotatividade de equipes, acelera o onboarding de novos membros e serve como fonte da verdade durante revisões de código e debates técnicos.
- **Para Agentes de IA:** Fornece contexto estruturado e confiável para sistemas de *Retrieval-Augmented Generation* (RAG). Agentes de IA podem ler ADRs para gerar código alinhado às regras do projeto, sugerir refatorações ou validar se um Pull Request viola decisões arquiteturais estabelecidas.

---

## 3. Quando aplicar?
Nem toda decisão merece um ADR. Aplique este processo apenas para decisões **arquiteturalmente significativas**, como:
- ✅ Escolha de padrões arquiteturais (ex: microsserviços, event-driven, monolito modular).
- ✅ Seleção de tecnologias base ou frameworks críticos (ex: banco de dados, protocolo de comunicação como gRPC vs. REST).
- ✅ Definição de requisitos não funcionais críticos (segurança, escalabilidade, tolerância a falhas, observabilidade).
- ✅ Definição de contratos de API, limites de contexto (*bounded contexts*) ou estratégias de persistência distribuída.

**Não use ADRs para:**
- ❌ Decisões triviais ou de baixo impacto (ex: escolha de uma biblioteca de ícones).
- ❌ Configurações temporárias, *workarounds* ou *proofs of concept* (PoCs).
- ❌ Decisões já cobertas por diretrizes ou padrões globais da empresa.

---

## 4. Ciclo de Vida e Regras de Aplicação
Um ADR segue um fluxo de vida claro para garantir governança sem burocracia excessiva. As regras são rigorosas para manter a integridade histórica:

1. **Proposto (Proposed):** Um membro da equipe escreve o rascunho e abre para discussão (ex: via Pull Request).
2. **Em Revisão (Under Review):** A equipe (devs, arquitetos, stakeholders) lê, comenta e sugere ajustes. O estado permanece "Proposto" até que todos os pontos de ação sejam resolvidos.
3. **Aceito (Accepted):** A decisão é formalizada. A partir deste momento, o ADR se torna **imutável** e serve como regra para o projeto.
4. **Rejeitado (Rejected):** A decisão não foi aprovada. O registro é mantido com o motivo da rejeição para evitar que o mesmo debate ocorra novamente no futuro.
5. **Substituído (Superseded):** Se o contexto do negócio ou da tecnologia mudar, **jamais edite um ADR Aceito**. Em vez disso, crie um *novo* ADR que referencia e substitui o anterior (ex: "Substituído por ADR-015").

---

## 5. Estrutura Padrão do ADR (Template)
Este template é otimizado para leitura humana rápida e para *parsing* preciso por Agentes de IA (uso de headings claros, listas e metadados no topo).

```markdown
# ADR-[NÚMERO]: [Título Declarativo e Objetivo da Decisão]

- **Data:** AAAA-MM-DD
- **Status:** [Proposto | Aceito | Rejeitado | Substituído por ADR-XXX]
- **Autores:** [Nomes ou equipes]
- **Stakeholders:** [Pessoas, times ou sistemas impactados]
- **Tags:** [ex: banco-de-dados, segurança, microsservicos]

## 1. Contexto
Descreva o problema, o cenário de negócio ou o requisito técnico que levou à necessidade desta decisão. Seja objetivo. Inclua restrições relevantes (ex: prazo, orçamento, limitações de infraestrutura, leis de compliance).

## 2. Decisão
Declare a decisão tomada de forma clara, concisa e afirmativa. (Ex: "Adotaremos o protocolo gRPC sobre HTTP/2 para toda a comunicação síncrona interna entre microsserviços").

## 3. Justificativa
Explique **por que** esta decisão foi a melhor escolha. Liste os critérios, requisitos atendidos e fatores que pesaram a favor. *Esta é a seção mais crítica para o aprendizado futuro e para o contexto de Agentes de IA.*

## 4. Alternativas Consideradas
Liste as outras opções avaliadas e os motivos objetivos pelos quais foram descartadas.
- **Alternativa A:** [Nome] - Motivo da rejeição (ex: "Maior latência", "Custo proibitivo").
- **Alternativa B:** [Nome] - Motivo da rejeição.

## 5. Consequências
Descreva os impactos (trade-offs) da decisão, tanto positivos quanto negativos.
- **Positivas:** (Ex: Melhora de performance, tipagem forte, menor acoplamento).
- **Negativas / Riscos:** (Ex: Curva de aprendizado da equipe, necessidade de nova ferramenta de monitoramento).
- **Ações Requeridas:** (Ex: "Atualizar pipeline de CI/CD", "Criar workshop de nivelamento sobre a tecnologia X").
```

---

## 6. Onde Salvar a Documentação de ADR?
A acessibilidade e o versionamento são cruciais. As abordagens recomendadas, em ordem de preferência:

1. **No Repositório de Código (Recomendado):**  
   Crie uma pasta `docs/adr/` ou `decisions/` na raiz do projeto.  
   *Vantagens:* Versionado junto com o código (Git), facilita a revisão em Pull Requests, e permite que Agentes de IA que analisam o repositório tenham acesso direto ao contexto.
2. **Ferramentas Especializadas em ADR:**  
   Ferramentas como [Log4Brains](https://github.com/loicpoullain/log4brains) ou [MADR](https://adr.github.io/madr/) que leem os arquivos Markdown da pasta `docs/adr/` e geram um site de documentação navegável com histórico e status.
3. **Wikis Corporativas (Notion, Confluence):**  
   Útil para visualização por partes interessadas não-técnicas (gestão, produto). Se usar esta abordagem, mantenha um link bidirecional entre o card da Wiki e o commit/PR no repositório de código.

---

## 7. Melhores Práticas: Desenvolvedores e Agentes de IA

### 👨‍💻 Para Desenvolvedores Humanos
- **Seja Conciso:** Um ADR deve ser lido e compreendido em 5 a 10 minutos. Vá direto ao ponto.
- **Imutabilidade é Lei:** Jamais edite o conteúdo de um ADR com status "Aceito". Se o contexto mudou, crie um novo ADR.
- **Vincule ao Código:** Referencie o número do ADR em mensagens de commit e descrições de Pull Request (ex: `"feat: implementa retry policy conforme definido no ADR-004"`).
- **Revise Periodicamente:** Em retrospectivas técnicas, verifique se os ADRs "Aceitos" ainda refletem a realidade do sistema.

### 🤖 Para Agentes de IA e Automação
- **Contexto para Geração de Código (Prompting):** Ao solicitar que uma IA gere um componente, inclua no prompt: *"Siga estritamente as regras de arquitetura definidas nos arquivos `docs/adr/ADR-001.md` e `docs/adr/ADR-003.md`."*
- **Validação Automatizada (Fitness Functions):** Agentes de IA podem ser integrados ao CI/CD para ler os ADRs e verificar se o código submetido os viola. Exemplo: Um script que falha no build se detectar chamadas HTTP/REST internas, violando um ADR que exige gRPC.
- **Guardrails de Pull Request:** Utilize ferramentas (como *Decision Guardian* ou scripts customizados de GitHub Actions) que analisam os arquivos modificados no PR e comentam automaticamente: *"⚠️ Você está modificando o módulo de autenticação. Verifique se esta alteração está alinhada com o ADR-007."*
- **Formatação para RAG:** Mantenha o Markdown dos ADRs limpo. Evite formatação exótica, imagens sem texto alternativo ou tabelas complexas. IAs dependem de headings (`##`), listas (`-`) e negrito (`**`) para *chunking* e recuperação de contexto precisa em bancos de dados vetoriais.

---

## 8. Exemplo Prático (Cenário de Microsserviços)

```markdown
# ADR-001: Protocolo de Comunicação entre Microsserviços

- **Data:** 2026-07-18
- **Status:** Aceito
- **Autores:** Equipe de Arquitetura
- **Tags:** comunicacao, performance, microsservicos

## 1. Contexto
Estamos construindo uma plataforma de microsserviços que exige baixa latência nas chamadas inter-serviços e comunicação point-to-point frequente. Avaliamos a necessidade de um contrato de dados estrito para evitar incompatibilidades sutis entre serviços escritos em linguagens diferentes.

## 2. Decisão
Adotaremos **gRPC sobre HTTP/2** como protocolo padrão para toda a comunicação síncrona interna entre microsserviços. APIs REST/JSON continuarão sendo usadas apenas para comunicação com clientes externos (frontend, parceiros).

## 3. Justificativa
- **Desempenho:** Serialização binária (Protobuf) e multiplexação do HTTP/2 reduzem drasticamente a latência e o tamanho do payload.
- **Contrato Forte:** Arquivos `.proto` geram *stubs* de cliente/servidor automaticamente, eliminando erros de integração em tempo de compilação.
- **Ecosistema:** A empresa já possui expertise interna e bibliotecas padronizadas para gRPC.

## 4. Alternativas Consideradas
- **REST/JSON HTTP:** Descartado para uso interno devido à sobrecarga de payload (texto) e falta de contrato estrito, o que gera fragilidade em refatorações.
- **Mensageria Assíncrona (Kafka/RabbitMQ):** Descartada como padrão *geral* por adicionar complexidade desnecessária (consistência eventual, dead-letter queues) para cenários de requisição-resposta simples e síncronos.

## 5. Consequências
- **Positivas:** Interoperabilidade garantida, performance superior e evolução de contratos versionada.
- **Negativas:** Curva de aprendizado para desenvolvedores acostumados apenas com REST. As chamadas não são legíveis em texto puro, exigindo ferramentas específicas para debug.
- **Ações Requeridas:** 
  1. Configurar o pipeline de CI para compilar arquivos `.proto` automaticamente.
  2. Implementar *Distributed Tracing* (OpenTelemetry) para monitorar chamadas gRPC.
  3. Realizar workshop de nivelamento sobre Protobuf para a equipe de desenvolvimento.
```

---

## 9. Recursos e Ferramentas Recomendadas
- **[adr-tools](https://github.com/npryce/adr-tools):** CLI para criar, listar e vincular ADRs facilmente via terminal.
- **[MADR (Markdown Any Decision Records)](https://adr.github.io/madr/):** Template leve e amplamente adotado pela comunidade.
- **[Log4Brains](https://github.com/loicpoullain/log4brains):** Gera um site estático navegável a partir da sua pasta de ADRs no repositório.
- **[ArchUnit / ArchUnitTS](https://www.archunit.org/):** Para criar "fitness functions" que validam via testes unitários se o código respeita as decisões documentadas nos ADRs.

---
*Nota: Este guia é um documento vivo. Sugestões de melhoria para este processo devem ser discutidas no fórum de arquitetura e, se aprovadas, registradas em um novo ADR.*