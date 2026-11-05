# Editando coleções com o Editor de Configuração | Microsoft Learn

> **Fonte / Source:** https://learn.microsoft.com/pt-br/iis/manage/managing-your-configuration-settings/editing-collections-with-configuration-editor

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

# Editando coleções com o Editor de Configuração

Comentários

por [Robert Lucero](https://github.com/rlucero)

## Objetivo do Guia

Saiba como usar o Editor de Configuração para editar coleções. Para este exemplo, configuraremos o cache de saída para realçar a nova funcionalidade.

## Pré-requisitos

Este passo a passo requer os seguintes pré-requisitos:

- [Pacote de Administração V1 para IIS](https://www.iis.net/downloads/microsoft/administration-pack "Instalar o Pacote de Administração")

## Acessando a seção de configuração system.webServer/caching

1. Abrir o Gerenciador do IIS
2. Selecione o servidor no modo de exibição Árvore de Conexões
3. Abrir o módulo Interface do Usuário do Editor de Configuração

   [![Captura de tela do módulo Interface do Usuário do Editor de Configuração. O ícone do Editor de Configuração está realçado.](editing-collections-with-configuration-editor/_static/image2.jpg)](https://learn.microsoft.com/pt-br/iis/manage/managing-your-configuration-settings/editing-collections-with-configuration-editor/_static/image1.jpg)
4. Na caixa de combinação Seção do Editor de Configuração, selecione system.webServer – cache ou type system.webServer/caching

   [![Captura de tela da caixa de seleção da Seção do Editor de Configuração. System Dot Web Server está selecionado.](editing-collections-with-configuration-editor/_static/image4.jpg)](https://learn.microsoft.com/pt-br/iis/manage/managing-your-configuration-settings/editing-collections-with-configuration-editor/_static/image3.jpg)

## Usar o Editor de Coleção para adicionar três regras de cache

1. Selecione a entrada **de perfis** no Editor de Configuração e clique no botão **...** ao lado **de (Count=0)**. Isso abrirá o Editor de Coleção para editar a coleção de cache.

   [![Captura de tela da página Editor de Configuração. A entrada de perfis está selecionada.](editing-collections-with-configuration-editor/_static/image6.jpg)](https://learn.microsoft.com/pt-br/iis/manage/managing-your-configuration-settings/editing-collections-with-configuration-editor/_static/image5.jpg)
2. No Painel de Tarefas de Ações do lado direito, clique em Adicionar. Agora você terá uma nova entrada na seção Itens, bem como uma listagem de propriedades.

   [![Captura de tela do Painel de Tarefas Ações no Editor de Coleção. Sob o título Coleção, Adicionar e Limpar Tudo estão listados.](editing-collections-with-configuration-editor/_static/image8.jpg)](https://learn.microsoft.com/pt-br/iis/manage/managing-your-configuration-settings/editing-collections-with-configuration-editor/_static/image7.jpg)
3. A seção Propriedades do editor de coleção vem pré-populada com os padrões de esquema para a coleção definida. Nesse caso, você obtém as configurações padrão do esquema para os elementos da coleção system.webServer/caching.
4. Há uma chave ao lado da entrada da propriedade **extensão**. Isso significa que essa é a chave exclusiva para essa entrada de coleção. Chaves de ouro significam que essa chave deve ser exclusiva para cada item dentro da coleção. Uma chave de prata significa que essa é uma chave compartilhada. A combinação de chaves compartilhadas deve ser exclusiva para um item de coleção nesse caso.
5. Altere a entrada de **extensão** para ser ".html" para criar uma regra de cache de conteúdo estático.
6. Altere a entrada de **local** para ser **ServerAndClient**.
7. Altere a entrada de **política** para 'cache' para **CacheForTimePeriod**, isso armazenará este conteúdo estático em cache por 30 segundos.
8. Adicione mais duas regras de cache clicando em **Adicionar** no painel de tarefas Ações. Configure-os como quiser.

   [![Captura de tela do painel Tarefas-Ações e do painel Propriedades no Editor de Coleção. A entrada de Localização está selecionada.](editing-collections-with-configuration-editor/_static/image10.jpg)](https://learn.microsoft.com/pt-br/iis/manage/managing-your-configuration-settings/editing-collections-with-configuration-editor/_static/image9.jpg)
9. Fechar Editor de Coleção.
10. Para definir as alterações, clique em **Aplicar** no Painel de Tarefas ações. Antes disso, clique em **Gerar Script** no painel de tarefas Ações. Agora você tem código de script para definir as três regras de cache que foram criadas.

    [![Captura de tela da caixa de diálogo de script. Código de script de três regras de cache é exibido.](editing-collections-with-configuration-editor/_static/image12.jpg)](https://learn.microsoft.com/pt-br/iis/manage/managing-your-configuration-settings/editing-collections-with-configuration-editor/_static/image11.jpg)
11. Clique em **Aplicar** no painel Tarefa Ações para fazer as alterações na configuração.
12. [*Etapa Extra*] Se você não quiser manter nenhuma das regras de cache criadas, edite a coleção de cache novamente e clique em **Limpar Tudo** no Painel de Tarefas ações. Clique em **Aplicar** no editor de configuração e todas as suas regras serão removidas.

## Resumo

Agora você criou três regras de cache de saída usando o Editor de Coleção do Editor de Configuração. O Editor de Coleção expõe todas as configurações de uma determinada coleção, assim como o Editor de Configuração.

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
  2026-03-28
