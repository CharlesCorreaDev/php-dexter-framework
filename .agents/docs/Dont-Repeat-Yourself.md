# Princípio DRY (Don't Repeat Yourself) para Agentes de IA

**Este é um guia obrigatório para qualquer desenvolvimento ou refatoração.**

## 1. Evite Duplicação de Código (DRY)
Antes de escrever qualquer nova função, método, classe ou script, você **deve sempre verificar** se já não existe uma implementação no repositório que resolva o problema ou atenda àquela função.

*   Busque ativamente no código-fonte por classes, helpers, funções globais ou bibliotecas internas que já realizem a tarefa solicitada.
*   Utilize ferramentas de busca (como `grep_search`) para procurar por termos-chave do domínio do problema.

## 2. Debate e Alinhamento
Caso, após uma busca exaustiva, você constate que o código ou classe realmente **não existe**, você **não deve sair codificando imediatamente**.

1.  **Levante as Possibilidades:** Analise como o novo código pode ser implementado (onde deve ficar, qual o padrão de projeto a seguir, etc).
2.  **Informe o Desenvolvedor:** Apresente de forma clara as possibilidades atuais e opções de arquitetura.
3.  **Debata antes de Codificar:** Aguarde o feedback e a decisão do desenvolvedor sobre qual caminho seguir antes de iniciar a escrita do código.

> O objetivo é manter o repositório limpo, focado e garantir que regras de negócios ou integrações fiquem centralizadas em um único lugar, permitindo manutenibilidade a longo prazo.