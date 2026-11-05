# Instalando o IIS 8 no Windows Server 2012 | Microsoft Learn

> **Fonte / Source:** https://learn.microsoft.com/pt-br/iis/get-started/whats-new-in-iis-8/installing-iis-8-on-windows-server-2012

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

# Instalando o IIS 8 no Windows Server 2012

Comentários

por [Robert McMurray](https://github.com/rmcmurray)

### Compatibilidade

| Versão | Observações |
| --- | --- |
| IIS 8.0 | O IIS 8.0 só está disponível no Windows Server 2012 e no Windows 8. |
| IIS 7.5 |  |
| IIS 7.0 |  |

## Visão geral

O Gerenciador de Servidores no Windows Server 2012 é novo e, portanto, a experiência do usuário também foi alterada.

Esta instrução passo a passo não é exclusiva para instalar o IIS. Ele destina-se a ajudar os clientes do IIS a navegar rapidamente pelo novo Gerenciador de Servidores.

## Instruções passo a passo

#### Pré-requisitos:

- O Windows Server 2012 foi instalado.

#### Soluções alternativas para bugs conhecidos:

- Não há bugs conhecidos para esse recurso no momento.

### Instalando o IIS 8 com as Configurações Padrão

Para instalar o IIS 8, use as seguintes etapas:

1. Abra o **Server Manager**.
2. No menu **Gerenciar** , selecione **Adicionar Funções e Recursos**:  
   ![Captura de tela da página do painel do Gerenciador do Servidor. O item de menu Gerenciar é expandido.](installing-iis-8-on-windows-server-2012/_static/image1.png)
3. Selecione **Instalação baseada em função ou recurso**:  
   ![Captura de tela da janela Adicionar Funções e Assistente de Recursos. A página Selecionar tipo de instalação está no painel principal.](installing-iis-8-on-windows-server-2012/_static/image5.png)
4. Selecione o servidor apropriado (local é selecionado por padrão), conforme mostrado abaixo:  
   ![Captura de tela da janela Adicionar Funções e Assistente de Recursos. A página Selecionar servidor de destino está no painel principal. ](installing-iis-8-on-windows-server-2012/_static/image9.png)
5. Selecione **Servidor Web (IIS)**:  
   ![Captura de tela da janela Adicionar Funções e Assistente de Recursos. A página Selecionar funções de servidor está no painel principal.](installing-iis-8-on-windows-server-2012/_static/image13.png)
6. Nenhum recurso adicional é necessário para o IIS, portanto, clique em **Avançar**:  
   ![Captura de tela da janela Adicionar Funções e Assistente de Recursos. A página Selecionar recursos está no painel principal.](installing-iis-8-on-windows-server-2012/_static/image17.png)
7. Clique em **Avançar**:  
   ![Captura de tela da janela Adicionar Funções e Assistente de Recursos. A página Função do Servidor Web está no painel principal.](installing-iis-8-on-windows-server-2012/_static/image21.png)
8. Personalize sua instalação do IIS ou aceite as configurações padrão que já foram selecionadas para você e clique em **Avançar**:  
   ![Captura de tela da janela Adicionar Funções e Assistente de Recursos. A página Selecionar serviços de função está no painel principal.](installing-iis-8-on-windows-server-2012/_static/image25.png)
9. Clique **em Instalar**:  
   ![Captura de tela do Assistente para Adicionar Funções e Recursos. A página de Confirmação das seleções de instalação está no painel principal.](installing-iis-8-on-windows-server-2012/_static/image29.png)
10. Quando a instalação do IIS for concluída, o assistente refletirá o status da instalação:  
    ![Captura de tela do Assistente para Adicionar Funções e Recursos. A página progresso da instalação está no painel principal.](installing-iis-8-on-windows-server-2012/_static/image33.png)
11. Clique em **Fechar** para sair do assistente.

## Resumo

O IIS 8.0 foi instalado com êxito usando o Gerenciador de Servidores no Windows Server 2012.

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
