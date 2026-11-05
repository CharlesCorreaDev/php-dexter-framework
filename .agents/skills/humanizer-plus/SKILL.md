---
name: humanizer-plus
description: Comprehensive, universal AI content humanization, provenance scrubbing, and code de-watermarking suite. Cleans any text, source code, documentation, article, script, or payload across all languages (PT-BR, EN, ES, FR, DE). Strips invisible zero-width tracking codepoints (Layer A), removes AI-generated code comments and robotic coding quirks (Layer B), purges watermarks/metadata containers (C2PA, EXIF, AI tags), and eliminates all 26 statistical AI-isms and tells from the latest Wikipedia AI Cleanup / blader/humanizer v3.1.0 specification. Continuously monitors blader/humanizer releases and updates itself with developer authorization while perpetually preserving local humanizer_data.
---

# Humanizer Plus 🧠🛡️✨
> *The Definitive Universal AI De-Watermarking, Code Sanitization & Text Humanização Suite*  
> *Author: Charles Corrêa*  
> *Synchronized up to Upstream blader/humanizer v3.1.0 (26 Canonical Patterns)*

---

## 📌 Escopo Universal: Para Todo e Qualquer Arquivo ou Conteúdo

O **Humanizer Plus NÃO é restrito a nenhum nicho específico**. Ele foi projetado para atuar como o **humanizador e desmarcador de IA universal** para:

1. **Códigos-Fonte e Scripts (Qualquer Linguagem):**
   - JavaScript, TypeScript, Python, PHP, Go, Rust, C#, Java, Shell/Bash, SQL, HTML, CSS/SCSS.
2. **Textos em Geral e Prosa Profissional:**
   - Artigos técnicos, postagens para blogs, e-mails comerciais, documentações de software, redações acadêmicas, relatórios, resumos e apresentações.
3. **Comunicações e Respostas a Usuários:**
   - E-mails de suporte, conversas no Slack/Discord, comentários em PRs do GitHub e respostas de atendimento.
4. **Documentos e Metadados Estruturados:**
   - Markdown (`.md`), LaTeX (`.tex`), JSON, YAML, HTML, DOCX e PDF.
5. **Mídias e Contêineres:**
   - Imagens (PNG, JPG, WebP), vetores SVG e vídeos (remoção de metadados C2PA, EXIF, IPTC e tags de geradores).

---

## 🚨 Os 3 Pilares Fundamentais do Humanizer Plus

### Pilar 1: Saneamento Físico & Anti-Detecção Mecânica (Camada A)
- **Eliminação de Caracteres Invisíveis de Rastreamento (Zero-Width):**
  - Remove silenciosamente `U+200B` (ZWSP), `U+200C` (ZWNJ), `U+200D` (ZWJ), `U+FEFF` (BOM/ZWNBSP), `U+200E`/`U+200F` (marcas direcionais) e `U+2060` (word joiner) que modelos inserem para rastreamento de proveniência.
- **Normalização de Aspas & Espaços:**
  - Converte aspas curvas tipográficas (`“ ” ‘ ’`) em aspas ASCII retas (`" '`).
  - Converte espaços não-separáveis (`U+00A0`, `U+202F`) e espaços finos em espaços comuns.
- **Purga de Metadados e Comentários Ocultos:**
  - Remove comentários de injeção (`<!-- cid:... -->`, `<!-- openai:... -->`, `<!-- prompt:... -->`).
  - Limpa chaves de gerador em frontmatter (`generator: llm`, `ai_model: gpt-4`).
  - Purga metadados C2PA, EXIF e tags AIGC de imagens e mídias.

### Pilar 2: Desmarcação & Humanização de Códigos-Fonte (Clean Code)
A IA possui manias mecânicas em código que qualquer programador sênior detecta instantaneamente:
- **Corte de Comentários Didáticos Óbvios:**
  - Elimina comentários infantis linha a linha que apenas narram a sintaxe (`// Loop through items`, `// If condition is true`, `// Set variable to 0`, `// Log message to console`).
- **Eliminação de Cabeçalhos e Assinaturas de IA:**
  - Remove cabeçalhos artificiais (`// Created by AI Assistant`, `/** Generated with ChatGPT */`, `// Auto-generated script`).
- **Substituição de Nomes Enciclopédicos:**
  - Substitui variáveis com nomes de livro-texto (ex: `currentIterationItemArrayElementInstance`) por identificadores idiomáticos e naturais (`item`, `el`, `acc`).
- **Adoção de Padrões Idiomáticos:**
  - Prioriza retornos antecipados (*early returns*), encadeamento opcional (`?.`), coalescência nula (`??`) e código conciso em vez de aninhamentos piramidais de `if/else`.
- **Blindagem Factual do Código:**
  - NUNCA altera rotas de API, assinaturas públicas de funções, regras matemáticas ou a lógica de negócio do software.

### Pilar 3: Humanização Textual & Quebra de Watermarks Estatísticas (Camada B)
Incorpora **todos os 26 padrões canônicos** do *WikiProject AI Cleanup* e do *blader/humanizer v3.1.0*, calibrados tanto para Português Brasileiro (PT-BR) quanto para Inglês (EN):

#### A. O Ritmo Artificial e a Estrutura Forçada
1. **Not X but Y ("Não é apenas X, mas sim Y"):** Diga o que é diretamente, sem encenar suspense.
2. **One-line closers & dramatic fragments ("Deixe isso assentar", "Let that sink in"):** Corte sumários teatrais e conclusões moralistas.
3. **Sayings that sound deep ("No final das contas, o que realmente importa..."):** Substitua máximas filosóficas genéricas por fatos práticos.
4. **Staged run-up ("A verdade é que...", "Honestamente?", "Aqui está o ponto:"):** Remova o aquecimento retórico e vá direto ao assunto.
5. **Arguing with no one ("Não estou dizendo que X, mas..."):** Declare a afirmação sem se defender preventivamente de críticas imaginárias.
6. **Forced triads (Tríades forçadas):** Não force três adjetivos ou tópicos por simetria (*"ágil, intuitivo e robusto"*). Use um ou dois termos concretos.
7. **Repeated sentence openings (Aberturas repetitivas):** Varie a primeira palavra dos períodos consecutivos (evite começar três frases seguidas com "Ele", "O sistema", "Isso").
8. **Dashes as the universal connector (Travessões em excesso):** Substitua o abuso de travessões (`—`) por pontos finais ou vírgulas naturais.
9. **Stacked qualifiers (Qualificadores acumulados):** Elimine rodeios hesitantes (*"pode-se potencialmente considerar que talvez..."* ➔ *"pode afetar"*).
10. **Hyphenated pairs everywhere (Hifens artificiais aos pares):** Evite adjetivações duplas mecânicas criadas por tradução literal.

#### B. Sintaxe Mecânica & Vocabulário Inflado
11. **Passive voice and missing subjects (Voz passiva e falta de sujeito):** Coloque sujeitos reais ativos nas frases.
12. **Overused AI words (Palavras viciadas de IA):**
    - Cortar: *delve* (mergulhar), *tapestry* (tapeçaria), *foster* (fomentar), *bolster*, *pivotal*, *testament to* (testemunho de), *multifaceted*, *vibrant*, *crucial*.
    - PT-BR: Cortar *vale ressaltar que*, *é crucial destacar*, *no cenário atual*, *além disso* (em quase todo parágrafo), *de suma importância*.
13. **Inflated significance (Importância inflada):** Pare de fingir que tarefas rotineiras são marcos históricos (*"uma verdadeira revolução na produtividade"* ➔ *"economiza tempo"*).
14. **Vague connection (Conexões vagas):** Elimine frases que sugerem ligação misteriosa sem explicar o nexo casual.
15. **Shallow -ing riders (Gerúndios superficiais de cauda):** Remova orações subordinadas de gerúndio que apenas parafraseiam a ação anterior (*"- garantindo assim uma experiência fluida"*).
16. **Sales language (Tom promocional de marketing):** Elimine bajulação corporativa, linguagem de folheto e emojis decorativos no meio de documentações técnicas.
17. **Borrowed authority (Autoridade emprestada/vaga):** Evite *"especialistas afirmam"*, *"estudos mostram"* sem citar a fonte real.
18. **Avoiding is, are, has (Fuga dos verbos simples):** Em vez de *"atua como um mecanismo que desempenha"*, use *"é"* ou *"faz"*.

#### C. Tipografia e Apresentação
19. **Bold as decoration (Negrito decorativo excessivo):** IAs adoram colocar palavras em negrito a cada linha para simular autoridade. Use negrito apenas para termos estruturais essenciais.
20. **Decorative headings (Títulos com emojis e Title Case forçado):**
    - Remova emojis decorativos em cabeçalhos formais (ex: `## 🚀 Fase de Lançamento:` ➔ `## Fase de lançamento`).
    - Em português, use capitalização apenas na primeira palavra e em nomes próprios.
21. **Curly quotation marks (Aspas curvas em formatos de texto puro):** Reverta para aspas ASCII retas (`" '`).

#### D. Sobras de Chatbot e Metalinguagem
22. **Chatbot residue (Resíduos de conversa de IA):**
    - Elimine resquícios colados: *"Espero ter ajudado!"*, *"Com certeza! Aqui está..."*, *"Ótima pergunta!"*, *"Se precisar de mais alguma coisa, me avise."*
23. **Knowledge-limit disclaimers (Isenções de corte de conhecimento):**
    - Elimine justificativas de IA sobre bases de dados: *"Até a minha última atualização em..."*, *"Embora detalhes específicos não estejam disponíveis..."*. Se o fato não existe na fonte, simplesmente não afirme.
24. **Heading repeated in the first sentence (Repetição do título na primeira linha):**
    - Não repita o título da seção na primeira linha antes de começar o texto.
25. **Writing about the document instead of its subject (Metalinguagem sobre o documento):**
    - Elimine narrações sobre como o texto foi montado: *"Esta função foi adicionada para substituir..."*, *"A tabela abaixo foi compilada a partir de..."*. Fale do objeto, não da redação.
26. **Re-explaining what the reader knows (Re-explicar o que o leitor já sabe):**
    - Em respostas e threads de discussão, corte preâmbulos que recapitulam todo o problema antes de dar a resposta. Vá direto à decisão e apresente apenas o fato novo que o leitor precisa para agir.

---

## 💻 Exemplo Prático: Código-Fonte

### ❌ Antes (Código gerado por IA com vícios e marcas):
```javascript
// This function calculates the discounted price for a customer order
// It checks if the customer is eligible for a loyalty discount
// Created by AI Assistant for project optimization
function calculateFinalPrice(customerOrderObject, userLoyaltyStatusBoolean) {
  // Initialize discount variable
  let calculatedDiscountAmount = 0;
  
  // Check if user loyalty status is true
  if (userLoyaltyStatusBoolean === true) {
    // Apply ten percent discount
    calculatedDiscountAmount = customerOrderObject.totalAmount * 0.10;
  } else {
    // No discount applied
    calculatedDiscountAmount = 0;
  }
  
  // Return the calculated final price
  return customerOrderObject.totalAmount - calculatedDiscountAmount;
}
```

### ✅ Depois (Código limpo, idiomático e humano):
```javascript
function calculateFinalPrice(order, isLoyal = false) {
  const discount = isLoyal ? order.totalAmount * 0.1 : 0;
  return order.totalAmount - discount;
}
```

---

## 🔄 Monitoramento do Upstream (`blader/humanizer`) & Portão de Autorização

A skill **Humanizer Plus** mantém vigilância contínua sobre as evoluções do repositório canônico [blader/humanizer](https://github.com/blader/humanizer):

1. **Checagem de Novas Versões:**
   - Script oficial: `node scripts/check_upstream_humanizer.js`.
   - Consulta periodicamente o repositório upstream para identificar novas tags e commits.
2. **Portão de Autorização Mandatório:**
   - Quando uma nova versão for detectada (ex: `v3.2.0`), o Agente **DEVE ALERTAR O DESENVOLVEDOR E PEDIR AUTORIZAÇÃO**:
     > 📢 *"Identifiquei que uma nova versão do repositório upstream (blader/humanizer) foi lançada (`vX.Y.Z`). O sistema humanizador precisa ser atualizado. Você autoriza a instalação, atualização e adaptação dos novos padrões para as skills do ecossistema e para o Master of Foundry VTT?"*
3. **Instalação, Análise e Adaptação:**
   - Com o consentimento do desenvolvedor, o agente baixa a nova versão, estuda as alterações e padrões adicionados no changelog/commits, integra as regras na `humanizer-plus` e propaga adaptações necessárias para as demais skills (como `master-of-foundryvtt`).
4. **Regra Sagrada da Pasta de Dados (`humanizer_data/`):**
   - **NUNCA EXCLUIR OU DELETAR A PASTA `humanizer_data/` DO COMPUTADOR.**
   - O histórico de sincronização e padrões locais acumulados devem ser preservados perpetuamente no disco. Novos dados podem ser acrescentados ou editados, mas nunca destruídos.

---

## 🚨 Protocolo de Feedback Proativo & Abertura de Issues no GitHub (OBRIGATÓRIO)

Sempre que o Agente de IA identificar qualquer problema derivado de má programação do desenvolvedor, recursos/scripts faltantes para concluir uma ação, limitações ou ferramentas faltantes em servidores MCP, ou oportunidades evidentes de melhoria no ecossistema humanizador:

1. **Comunique Imediatamente o Usuário:** Notifique o operador sobre o problema identificado, o impacto técnico e a solução sugerida.
2. **Gere Relatório Bilíngue:** Elabore uma descrição técnica detalhada em Português e Inglês cobrindo título, problema, causa técnica, contexto operacional e solução recomendada.
3. **Submeta Issue via GitHub CLI (`gh issue create`):**
   ```bash
   gh issue create --repo CharlesCorreaDev/skills-ai --title "[humanizer-plus] <Título da Issue>" --body "<Texto explicativo bilíngue em PT-BR e EN>"
   ```
   Forneça o link direto da issue gerada ao desenvolvedor para acompanhamento.

---

## 🚀 Como Usar a Skill no Dia a Dia

- **Humanizar Texto Qualquer:** *"Humanize este e-mail/artigo/redação eliminando qualquer rastro de IA."*
- **Limpar Código-Fonte:** *"Sanitize este script removendo comentários didáticos, marcas e manias de IA."*
- **Desmarcar Mídias:** *"Remova metadados C2PA e tags de IA desta imagem/WebP."*
- **Auditoria Apenas:** *"Audite este documento e aponte a nota de 1 a 50 segundo os 26 padrões do humanizer."*
