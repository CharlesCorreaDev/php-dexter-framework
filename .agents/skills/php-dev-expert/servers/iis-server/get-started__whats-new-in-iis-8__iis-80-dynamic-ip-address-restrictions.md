# Restrições de endereço IP dinâmico do IIS 8.0 | Microsoft Learn

> **Fonte / Source:** https://learn.microsoft.com/pt-br/iis/get-started/whats-new-in-iis-8/iis-80-dynamic-ip-address-restrictions

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

# Restrições de endereço IP dinâmico do IIS 8.0

Comentários

por [Robert McMurray](https://github.com/rmcmurray)

### Compatibilidade

| Versão | Observações |
| --- | --- |
| IIS 8.0 | Restrições de endereço IP dinâmico internas para o IIS 8.0. |
| IIS 7.5 | Restrições dinâmicas de endereço IP estavam disponíveis como um [módulo fora de banda para o IIS 7.5](https://www.iis.net/downloads/microsoft/dynamic-ip-restrictions). |
| IIS 7.0 | Restrições dinâmicas de endereço IP estavam disponíveis como um [módulo fora de banda para o IIS 7.0](https://www.iis.net/downloads/microsoft/dynamic-ip-restrictions). |

## Problema

O IIS 7 e versões anteriores tinham funcionalidade interna que permitia aos administradores permitir ou negar acesso a endereços IP individuais ou intervalos de endereços IP. Quando um endereço IP foi bloqueado, todos os clientes HTTP desse endereço IP receberiam uma resposta de erro HTTP "403.6 Proibido" do servidor. Essa funcionalidade permite que os administradores personalizem o acesso para o servidor com base na atividade que veem nos logs do servidor ou na atividade do site. No entanto, esse é um processo manual. Embora a funcionalidade possa ser criada para descobrir usuários mal-intencionados examinando os arquivos de log do IIS usando uma ferramenta como o utilitário [LogParser](https://www.microsoft.com/download/details.aspx?id=24659) da Microsoft, isso ainda requer intervenção manual.

## Solução

No IIS 8.0, a Microsoft expandiu a funcionalidade interna para incluir vários novos recursos:

- Filtragem de endereço IP dinâmico, que permite que os administradores configurem seu servidor para bloquear o acesso a endereços IP que excedem o número especificado de solicitações.
- Os recursos de filtragem de endereço IP agora permitem que os administradores especifiquem o comportamento quando o IIS bloqueia um endereço IP, para que solicitações de clientes mal-intencionados possam ser anuladas pelo servidor em vez de retornar respostas HTTP 403.6 ao cliente.
- A filtragem de IP agora apresenta um modo proxy, permitindo que os endereços IP sejam bloqueados tanto pelo IP do cliente que é visto pelo IIS quanto pelos valores recebidos no cabeçalho HTTP x-forwarded-for.

## Instruções passo a passo

#### Pré-requisitos:

- Computador do Windows Server 2012 com o IIS 8.0 instalado.

  Observação

  O recurso de Restrições de IP e Domínio deve ser instalado como parte do IIS.

  ![Captura de tela que mostra uma caixa de seleção selecionada para IP e Restrições de Domínio.](iis-80-dynamic-ip-address-restrictions/_static/image1.jpg)

#### Soluções alternativas para bugs conhecidos:

Não há bugs conhecidos para esse recurso no momento.

### Configurando o IIS para negar acesso com base em solicitações HTTP

O IIS 8.0 pode ser configurado para negar o acesso a sites com base no número de vezes que um cliente HTTP acessa o servidor dentro de um intervalo de tempo especificado ou com base no número de conexões simultâneas de um cliente HTTP.

Para configurar o IIS para negar o acesso com base no número de solicitações HTTP recebidas, use as seguintes etapas:

1. Faça logon como administrador em seu computador Windows Server 2012.
2. Abra o **Gerenciador dos Serviços de Informações da Internet (IIS**).
3. Realce o nome do servidor, o site ou o caminho da pasta no painel **Conexões** e clique duas vezes em **Endereço IP e Restrições de Domínio** na lista de recursos.  
   [![Captura de tela que mostra o Gerenciador de I S, com o painel Página Inicial do Site Padrão aberto e restrições de domínio e endereço IP selecionados.](iis-80-dynamic-ip-address-restrictions/_static/image2.png)](https://learn.microsoft.com/pt-br/iis/get-started/whats-new-in-iis-8/iis-80-dynamic-ip-address-restrictions/_static/image1.png)
4. Clique em **Editar Configurações de Restrição Dinâmica** no painel **Ações** .  
   [![Captura de tela que mostra o painel IP Address and Domain Restrictions aberto. Editar Configurações de Restrição Dinâmica é realçado no painel Ações.](iis-80-dynamic-ip-address-restrictions/_static/image4.png)](https://learn.microsoft.com/pt-br/iis/get-started/whats-new-in-iis-8/iis-80-dynamic-ip-address-restrictions/_static/image3.png)
5. Quando a caixa de diálogo **Configurações de Restrição de IP Dinâmico** for exibida, marque a **Negar endereço IP com base no número de requisições simultâneas** se você quiser impedir que um cliente HTTP estabeleça muitas conexões simultâneas. E marque a caixa para **Negar Endereço IP com base no número de solicitações durante um período de tempo** se você quiser impedir que um cliente HTTP estabeleça muitas conexões em um período de tempo específico.  
   ![Captura de tela que mostra a caixa de diálogo Configurações de Restrição do IP Dinâmico. Os dois primeiros itens têm caixas de seleção selecionadas.](iis-80-dynamic-ip-address-restrictions/_static/image5.png)
6. Clique em **OK.**

### Configurando o comportamento do IIS ao negar endereços IP

No IIS 7 e versões anteriores, o IIS retornaria uma resposta de erro HTTP "403.6 Proibido" do servidor quando um endereço IP do cliente fosse bloqueado. No IIS 8.0, os administradores podem configurar seu servidor para negar o acesso a endereços IP de várias maneiras adicionais.

Para configurar o comportamento que o IIS usará ao negar endereços IP, use as seguintes etapas:

1. Faça logon como administrador em seu computador Windows Server 2012.
2. Abra o **Gerenciador dos Serviços de Informações da Internet (IIS**).
3. Realce o nome do servidor, o site ou o caminho da pasta no painel **Conexões** e clique duas vezes em **Endereço IP e Restrições de Domínio** na lista de recursos.  
   [![Captura de tela que mostra o Gerenciador do IIS. Restrições de Endereço IP e Domínio está selecionado no painel inicial do Site Padrão.](iis-80-dynamic-ip-address-restrictions/_static/image3.jpg)](https://learn.microsoft.com/pt-br/iis/get-started/whats-new-in-iis-8/iis-80-dynamic-ip-address-restrictions/_static/image2.jpg)
4. Clique em **Editar Configurações de Recurso** no painel **Ações**.  
   [![Captura de tela que mostra o painel Endereço IP e Restrições de Domínio, com Editar Configurações de Recurso realçadas no painel Ações.](iis-80-dynamic-ip-address-restrictions/_static/image7.png)](https://learn.microsoft.com/pt-br/iis/get-started/whats-new-in-iis-8/iis-80-dynamic-ip-address-restrictions/_static/image6.png)
5. Quando a caixa de diálogo **Editar Configurações de Restrição de Domínio e IP** for exibida, clique no menu suspenso **Negar Tipo de Ação** e escolha o comportamento que o IIS usa dos seguintes valores:

   - **Não autorizado**: o IIS retorna uma resposta HTTP 401.
   - **Proibido**: o IIS retorna uma resposta HTTP 403.
   - **Não encontrado**: o IIS retorna uma resposta HTTP 404.
   - **Anulação**: o IIS encerra a conexão HTTP.

     ![Captura de tela que mostra a caixa de diálogo Configurações de Edição de IP e Restrições de Domínio. 'Proibido' está selecionado na lista de Tipos de Ação de Negação.](iis-80-dynamic-ip-address-restrictions/_static/image8.png)
6. Clique em **OK.**

### Configurando o IIS para o modo proxy

Um dos desafios para a filtragem de IP é que muitos clientes acessam o IIS por meio de um ou mais firewalls, balanceamento de carga ou servidores proxy; portanto, o endereço IP sempre pode aparecer como o servidor no caminho de solicitação mais próximo do servidor IIS. No IIS 8.0, os administradores podem configurar seu servidor para examinar o cabeçalho HTTP *x-forwarded-for* , além do endereço IP do cliente, a fim de determinar quais solicitações bloquear. Esse comportamento é chamado de "Modo proxy".

Para configurar o IIS para o modo proxy, use as seguintes etapas:

1. Faça logon como administrador em seu computador Windows Server 2012.
2. Abra o **Gerenciador dos Serviços de Informações da Internet (IIS**).
3. Realce o nome do servidor, o site ou o caminho da pasta no painel **Conexões** e clique duas vezes em **Endereço IP e Restrições de Domínio** na lista de recursos.  
   [![Captura de tela que mostra o painel Página Inicial do Site Padrão, com IP Address e Restrições de Domínio selecionadas.](iis-80-dynamic-ip-address-restrictions/_static/image5.jpg)](https://learn.microsoft.com/pt-br/iis/get-started/whats-new-in-iis-8/iis-80-dynamic-ip-address-restrictions/_static/image4.jpg)
4. Clique em **Editar Configurações de Recurso** no painel **Ações**.  
   [![Captura de tela que mostra o Gerenciador I S, com Editar Configurações de Recurso realçadas no painel Ações.](iis-80-dynamic-ip-address-restrictions/_static/image10.png)](https://learn.microsoft.com/pt-br/iis/get-started/whats-new-in-iis-8/iis-80-dynamic-ip-address-restrictions/_static/image9.png)
5. Quando a caixa de diálogo **Editar IP e Configurações de Restrição de Domínio** for exibida, marque a caixa para **Habilitar o Modo proxy**.  
   ![Captura de tela que mostra a caixa de diálogo Configurações de Edição e Restrições de Domínio. Habilitar Modo Proxy está selecionado na caixa de seleção.](iis-80-dynamic-ip-address-restrictions/_static/image11.png)
6. Clique em **OK.**

## Resumo

Neste guia, você analisou a configuração do IIS para negar dinamicamente o acesso ao servidor com base no número de solicitações de um endereço IP do cliente, bem como configurar o comportamento que o IIS usará quando negar acesso a usuários potencialmente mal-intencionados.

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
