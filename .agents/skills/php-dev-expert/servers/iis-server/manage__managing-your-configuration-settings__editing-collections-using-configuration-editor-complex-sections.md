# Editando coleções usando o Editor de Configuração: Seções Complexas | Microsoft Learn

> **Fonte / Source:** https://learn.microsoft.com/pt-br/iis/manage/managing-your-configuration-settings/editing-collections-using-configuration-editor-complex-sections

---

Sumário 

Sair do modo Editor

Pergunte e aprenda

Pergunte e aprenda

Modo de leitura

Sumário
[Ler em inglês](#)

Adicionar

Adicionar a Planos

---

Copiar Markdown

Imprimir

---

Observação

O acesso a essa página exige autorização. Você pode tentar [entrar](#) ou alterar diretórios.

O acesso a essa página exige autorização. Você pode tentar alterar os diretórios.

# Editando coleções usando o Editor de Configuração: Seções Complexas

Comentários

por [Crystal Hoyer](https://github.com/crystalhoyer)

## Objetivo do Guia

Use o Editor de Coleção no módulo editor de configuração para adicionar uma nova regra de rastreamento de solicitação com falha para uma solicitação aspx que retorna um código de status de 401 e/ou leva mais de um minuto para responder. Essa tarefa pode ser realizada usando a interface do usuário atual, mas as etapas executadas exporão um recurso importante dentro do novo módulo Editor de Configuração do Pacote de Administração.

## Pré-requisitos

Este passo a passo requer os seguintes pré-requisitos:

- [Pacote de Administração V1 para IIS](https://www.iis.net/downloads/microsoft/administration-pack "Instalar o Pacote de Administração")

## Acessando a seção system.webServer/tracing/traceFailedRequests

1. Abrir o Gerenciador do IIS
2. Selecione o servidor no modo de exibição Árvore de Conexões
3. Abrir o módulo Interface do Usuário do Editor de Configuração

   ![Captura de tela da janela I S Manager. Os recursos da página inicial do servidor estão no painel principal.](editing-collections-using-configuration-editor-complex-sections/_static/image1.jpg)
4. Na caixa de combinação Seção do Editor de Configuração, selecione system.webServer – rastreamento – traceFailedRequests ou digite system.webServer/tracing/traceFailedRequests

   ![Captura de tela mostrando o Editor de Configuração com a caixa de entrada da seção.](editing-collections-using-configuration-editor-complex-sections/_static/image3.jpg)

## Use o Editor de Coleções para adicionar uma nova regra de solicitação de rastreamento com falha.

1. Selecione a entrada **(Coleção)** no Editor de Configuração e clique em ... botão ao lado **(Count=0)**. Isso abrirá o Editor de Coleção para editar a coleção tracefailedRequests.

   ![Captura de tela mostrando o Editor de Configuração. A coleção está realçada e mostra Contagem = 0.](editing-collections-using-configuration-editor-complex-sections/_static/image5.jpg)
2. No Painel de Tarefas de Ações do lado direito, clique em Adicionar. Agora você terá uma nova entrada na seção Itens, bem como uma listagem de propriedades.

   ![Captura de tela da janela Editor de Coleção com configurações na seção Propriedades.](editing-collections-using-configuration-editor-complex-sections/_static/image7.jpg)
3. A seção Propriedades do editor de coleção vem pré-populada com os padrões de esquema para a coleção definida. Nesse caso, você obtém os padrões de esquema para elementos da coleção system.webServer/tracing/traceFailedRequests.
4. Há uma chave ao lado da entrada da propriedade **path** . Isso significa que essa é a chave exclusiva para essa entrada de coleção. Chaves de ouro significam que essa chave deve ser exclusiva para cada item dentro da coleção. Uma chave de prata significa que essa é uma chave compartilhada. A combinação de chaves compartilhadas deve ser exclusiva para um item de coleção nesse caso.
5. Altere a entrada do **caminho** para ser **\*.aspx** para criar uma regra para todos os caminhos asp.net.
6. Alterar a entrada **statusCodes** para **401**
7. Alterar a entrada **timeTaken****00:01:00**
8. Selecione a entrada **(traceAreas)** no Editor de Coleção e clique em ... botão ao lado de **(Count=0)**. Isso abrirá o Editor de Coleção para editar a coleção traceAreas.

   ![Captura de tela da janela Editor de Coleção. As áreas de rastreamento são selecionadas na seção Propriedades.](editing-collections-using-configuration-editor-complex-sections/_static/image9.jpg)
9. No Painel de Tarefas de Ações do lado direito, clique em Adicionar. Agora você terá uma nova entrada na seção Itens, bem como uma listagem de propriedades.

   ![Captura de tela da janela Editor de Coleção. O painel Item mostra um aviso. O painel propriedades mostra um aviso.](editing-collections-using-configuration-editor-complex-sections/_static/image11.jpg)
10. A seção Propriedades do editor de coleção vem pré-populada com os padrões de esquema para a coleção definida. Nesse caso, você obtém as configurações padrão do esquema para os elementos da coleção system.webServer/tracing/traceFailedRequests/add/traceAreas.
11. Há uma chave ao lado da entrada da propriedade do **provedor** . Isso significa que essa é a chave exclusiva para essa entrada de coleção. Chaves de ouro significam que essa chave deve ser exclusiva para cada item dentro da coleção. Uma chave de prata significa que essa é uma chave compartilhada. A combinação de chaves compartilhadas deve ser exclusiva para um item de coleção nesse caso.
12. Alterar a entrada do **provedor** para ser **ASPNET**
13. Alterar a entrada de **áreas** como **Infraestrutura, Módulo, Página, AppServices** [*Observação:* você pode obter o nome do provedor e as áreas correspondentes da seção system.webServer/tracing/traceProviderDefinitions]
14. Permitir que a entrada de **verbosidade** seja **Aviso**
15. Fechar Editor de Coleção para traceAreas
16. Fechar Editor de Coleção para "traceFailedRequests"
17. Para definir as alterações, clique em **Aplicar** no Painel de Tarefas ações. Antes disso, clique em **Gerar Script** no painel de tarefas Ações. Agora você tem o código de script para adicionar uma regra de solicitação de rastreamento com falha para solicitações aspx que retornam um 401 ou levam mais de um minuto para responder
18. Clique em **Aplicar** no painel Tarefa Ações para fazer as alterações na configuração.
19. Você pode verificar rapidamente a nova regra de rastreamento de solicitação com falha adicionada acessando a página de recursos Regras de Rastreamento de Solicitação com Falha

    ![Captura de tela da janela I S Manager. Os recursos da página inicial do site estão no painel principal. O ícone Regras de Rastreamento de Solicitação com Falha está realçado.](editing-collections-using-configuration-editor-complex-sections/_static/image13.jpg)
20. A regra que acabamos de adicionar usando o recurso do editor de configuração deve ser listada na página de regras de rastreamento de solicitação com falha

    ![Captura de tela da janela do Gerenciador do IIS. As Regras de Rastreamento de Solicitações com Falha são exibidas no painel principal.](editing-collections-using-configuration-editor-complex-sections/_static/image15.jpg)
21. [*Etapa Extra*] Se você não quiser manter nenhuma das regras de solicitação de rastreamento com falha criadas, edite as coleções tracefailedRequests novamente e clique em **Limpar Tudo** no Painel de Tarefas ações. Clique em **Aplicar** no editor de configuração e a regra recém-adicionada será removida.

## Resumo

Agora você criou uma nova regra de solicitação de rastreamento com erro usando a ferramenta Editor de Coleção do Editor de Configuração. O Editor de Coleção expõe todas as configurações de uma determinada coleção.

---

## Comentários

Esta página foi útil?

Sim

Não

Não

Precisa de ajuda com este tópico?

Quer experimentar o Pergunte e aprenda para esclarecer ou guiar você neste tópico?

Pergunte e aprenda

Pergunte e aprenda

 Sugerir uma correção?

---

## Recursos adicionais

---

- Última atualização em 
  2026-03-27
