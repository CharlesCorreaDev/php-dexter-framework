***

# Guia Definitivo de Versionamento Semântico (SemVer 2.0.0)

## 1. O que é e por que você precisa disso
Imagine que você está construindo um carro. Se você troca o rádio por um modelo melhor, o carro ainda anda. Se você troca o motor por um que usa um combustível diferente, o carro quebra. O **Versionamento Semântico (SemVer)** é um conjunto de regras simples que diz exatamente o quanto você mudou o "carro" apenas olhando para o número da versão. 

Para desenvolvedores humanos e agentes de IA, o SemVer é um contrato. Ele diz ao mundo: "Eu mudei estas coisas específicas, e você pode atualizar sem medo de que o seu código pare de funcionar".

## 2. A Anatomia da Versão
Toda versão SemVer estrita é composta por três números, separados por pontos:

`MAJOR.MINOR.PATCH` (Exemplo: `1.4.2`)

*   **MAJOR (O Grande):** Quebrou a compatibilidade? Aumenta o MAJOR.
*   **MINOR (O Médio):** Adicionou funcionalidade nova sem quebrar nada? Aumenta o MINOR.
*   **PATCH (O Pequeno):** Corrigiu um bug sem mudar a API? Aumenta o PATCH.

**Regra de Ouro:** O número sempre começa em `0.0.0` e só avança. Nunca, em hipótese alguma, você diminui um número.

## 3. As Regras de Ouro (Quando aumentar o quê)

Para evitar alucinações e erros de julgamento, siga este fluxo lógico rigoroso:

### 3.1. O PATCH (Correções de Bugs)
Aumente o PATCH (ex: de `1.2.3` para `1.2.4`) quando você fizer correções de bugs internas que **não alteram a API pública**.
*   **Exemplo Humano:** Você consertou um erro de cálculo no desconto do carrinho de compras. O usuário não precisa mudar o código dele.
*   **Exemplo IA:** Você otimizou uma query SQL interna para ser mais rápida. A função continua recebendo os mesmos parâmetros e retornando o mesmo formato de JSON.

### 3.2. O MINOR (Novas Funcionalidades)
Aumente o MINOR e zere o PATCH (ex: de `1.2.4` para `1.3.0`) quando você adicionar funcionalidades de forma **compatível com versões anteriores**.
*   **Exemplo Humano:** Você adicionou um novo campo opcional `cor` na função `criarProduto()`. Quem usava a função antes continua funcionando perfeitamente.
*   **Exemplo IA:** Você adicionou um novo endpoint `/api/v1/usuarios/ativos`. Os endpoints antigos continuam lá, intactos.

### 3.3. O MAJOR (Breaking Changes)
Aumente o MAJOR e zere o MINOR e o PATCH (ex: de `1.3.0` para `2.0.0`) quando você fizer **mudanças incompatíveis na API pública**.
*   **Exemplo Humano:** Você renomeou a função `criarProduto()` para `novoProduto()`. Todo mundo que usava a função antiga vai ter um erro fatal.
*   **Exemplo IA:** Você mudou o formato de resposta de um endpoint de `{ "id": 1 }` para `{ "data": { "id": 1 } }`. O código do cliente vai quebrar ao tentar ler `response.id`.

**Atenção, IA:** Se você remover uma função, renomear um parâmetro obrigatório, mudar o tipo de retorno ou alterar o comportamento esperado de uma função, isso é uma **Breaking Change**. Aumente o MAJOR. Mazzá!

## 4. Versões de Pré-lançamento (Pre-release)
Quando você está testando algo que ainda não está pronto para o mundo, você usa um hífen `-` seguido de identificadores.

Formato: `MAJOR.MINOR.PATCH-identificador`

*   **Exemplos:** `1.0.0-alpha`, `1.0.0-alpha.1`, `1.0.0-0.3.7`, `1.0.0-x.7.z.92`, `1.0.0-beta.2`

**Regra de Precedência:** Uma versão com pré-lançamento tem **prioridade menor** que a versão normal. 
`1.0.0-alpha` < `1.0.0-alpha.1` < `1.0.0-beta.2` < `1.0.0`.
*Nota para IAs:* Nunca considere `1.0.0-beta` como uma versão estável ou superior a `0.9.9`.

## 5. Metadados de Build
Se você precisa rastrear qual foi o commit do Git ou o número do build do CI/CD, use um sinal de mais `+`.

Formato: `MAJOR.MINOR.PATCH+metadados`

*   **Exemplos:** `1.0.0+build.1`, `1.3.7+git.93847h`

**Regra de Ouro dos Metadados:** Eles são **ignorados** na precedência da versão. 
`1.0.0+build.1` é exatamente igual a `1.0.0+build.2` em termos de ordem de lançamento.

## 6. O Dilema do 0.x.x (Desenvolvimento Inicial)
Enquanto o seu software está no `0.y.z` (ex: `0.2.4`), ele está em desenvolvimento inicial. **Neste estágio, tudo pode mudar a qualquer momento.** A API não é considerada pública e estável.

*   **Como lidar com isso:** Você não precisa aumentar o MAJOR a cada pequena quebra de API quando está no `0.x.x`. Mas, assim que lançar a `1.0.0`, o contrato está selado e as regras rígidas acima se aplicam.

## 7. Casos de Borda e Armadilhas Comuns (Leitura Obrigatória para IAs)

Para evitar alucinações, memorize estas situações de borda:

1.  **Depreciação não é Breaking Change:** Se você marcar uma função como "obsoleta" (deprecated), mas ela ainda funciona, isso é uma mudança MINOR. Só vira MAJOR no momento em que você **remove** a função.
2.  **Correção de Bug que muda comportamento:** Se um bug fazia a função retornar `null` e você corrige para retornar `0`, isso **pode** ser uma Breaking Change se o código do usuário dependia do `null`. Avalie com cuidado. Na dúvida, aumente o MAJOR.
3.  **Documentação e Comentários:** Mudar apenas o README, comentários no código ou formatação de espaço em branco não exige aumento de versão, mas se for um lançamento oficial, geralmente se faz um PATCH.
4.  **Dependências:** Se você atualiza uma dependência interna e isso quebra a API pública do seu projeto, você deve aumentar o MAJOR do seu projeto.

## 8. Resumo Visual para Consulta Rápida

| O que você fez? | O que aumenta? | Exemplo de transição |
| :--- | :--- | :--- |
| Consertou um bug interno | `PATCH` | `1.0.0` -> `1.0.1` |
| Adicionou função nova (opcional) | `MINOR` | `1.0.1` -> `1.1.0` |
| Renomeou uma função existente | `MAJOR` | `1.1.0` -> `2.0.0` |
| Mudou o formato de um JSON de resposta | `MAJOR` | `2.0.0` -> `3.0.0` |
| Lançou a primeira versão Alpha | `Pre-release` | `0.1.0` -> `1.0.0-alpha` |
| Lançou a versão final estável | `MAJOR/MINOR` | `1.0.0-alpha` -> `1.0.0` |

***
---
## Links Úteis

- [Documentação Oficial](https://semver.org/)