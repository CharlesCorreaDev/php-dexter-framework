# Configurar o registro em log no IIS | Microsoft Learn

> **Fonte / Source:** https://learn.microsoft.com/pt-br/iis/manage/provisioning-and-managing-iis/configure-logging-in-iis

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

# Configurar o registro em log no IIS

Comentários

por Keith Newman e [Robert McMurray](https://github.com/rmcmurray)

Você pode configurar o log em seu servidor Web ou site que registra informações sobre solicitações HTTP e erros. As informações em seu log podem ajudá-lo a solucionar problemas ou otimizar seu site.

## Pré-requisitos

Para obter o máximo deste tutorial, você deve ter acesso a um computador que esteja executando um dos seguintes sistemas operacionais:

- Windows Server ® 2012
- Windows® 8

## Configurar o registro em log no nível do site

Você pode executar esse procedimento usando a interface do usuário (interface do usuário) ou editando arquivos de configuração diretamente.

### Para configurar o registro em log no nível de site usando a interface gráfica do usuário

1. Abra o Gerenciador do IIS.

   - Para o Windows Server 2012, na página **Iniciar** , clique no bloco do **Gerenciador do Servidor** e clique em **OK**. No **Gerenciador de Servidores**, clique no menu **Ferramentas** e clique no **Gerenciador dos Serviços de Informações da Internet (IIS**).
   - Para o Windows 8, na página **Iniciar** , **digite Painel de Controle** e clique no ícone **painel de controle** nos resultados da pesquisa. Na tela **painel de controle** , clique em **Sistema e Segurança**, clique em **Ferramentas Administrativas** e, em seguida, **clique no Gerenciador de Serviços de Informações da Internet (IIS**).
2. No modo de exibição de árvore **Conexões** , selecione seu site.
3. No **Modo de Exibição de Recursos**, clique duas vezes em **Registro**.
4. Na página **Log** , na seção **Arquivo de log** em **Formato**, selecione um dos seguintes formatos de arquivo de log:

   - **IIS**: para usar o formato de arquivo de log do Microsoft IIS para registrar informações sobre um site. Esse formato é tratado por HTTP.syse é um formato *fixo* baseado em texto ASCII, o que significa que você não pode personalizar os campos registrados. Os campos são separados por vírgulas e a hora é registrada como hora local. Para obter mais informações sobre o formato de arquivo de log do IIS, consulte O [Formato de Arquivo de Log do IIS (IIS 6.0)](https://go.microsoft.com/fwlink/?LinkId=103792).
   - **NCSA**: para usar o formato de arquivo de log comum NCSA (National Center for Supercomputing Applications) para registrar informações sobre um site. Esse formato é tratado por HTTP.syse é um formato *fixo* baseado em texto ASCII, o que significa que você não pode personalizar os campos registrados. Os campos são separados por espaços, e o tempo é registrado como hora local com o deslocamento UTC (Tempo Universal Coordenado). Para obter mais informações sobre o formato de arquivo de log NCSA, consulte [o formato de arquivo de log comum NCSA (IIS 6.0)](https://go.microsoft.com/fwlink/?LinkId=103791).
   - **W3C**: para usar o formato de arquivo de log do W3C centralizado para registrar informações sobre todos os sites no servidor. Esse formato é tratado por HTTP.sys e é um formato *personalizado* baseado em texto ASCII, o que significa que você especifica os campos que são registrados. Especifique os campos registrados na caixa de diálogo **Campos de Log do W3C** clicando em **Selecionar Campos** na página **Log** . Os campos são separados por espaços e o tempo é registrado em UTC (Tempo Universal Coordenado). Para obter mais informações sobre o formato de arquivo de log W3C, consulte O [Formato de Arquivo de Log Estendido W3C (IIS 6.0)](https://go.microsoft.com/fwlink/?LinkId=103790).
   - **Personalizado**: para usar um formato personalizado para um módulo de log personalizado. Quando você seleciona essa opção, a página **Logging** fica desabilitada, pois o log personalizado não pode ser configurado no Gerenciador do IIS. Para obter mais informações sobre como usar formatos de arquivo de log personalizados, consulte [Módulos de Log Personalizados (IIS 6.0)](https://go.microsoft.com/fwlink/?LinkId=103789).
5. Em **Diretório**, especifique o caminho em que o arquivo de log deve ser armazenado. O padrão é `%SystemDrive%\inetpub\logs\LogFiles`.

   Observação

   Como prática recomendada, armazene arquivos de log, como logs de rastreamento de solicitação com falha, em um diretório diferente de `%systemroot%`.
6. Na seção **Rotação de Arquivo de Log**, selecione uma das seguintes opções:

   - **Agendamento**: para criar um novo arquivo de log baseado em um dos seguintes valores:

     - **Por hora**: um novo arquivo de log é criado a cada hora.
     - **Diariamente**: um novo arquivo de log é criado todos os dias.
     - **Semanalmente**: um novo arquivo de log é criado a cada semana.
     - **Mensalmente**: um novo arquivo de log é criado a cada mês.
   - **Tamanho máximo do arquivo (em bytes)**: para criar um arquivo de log quando o arquivo atingir um determinado tamanho (em bytes). O tamanho mínimo do arquivo é 1048576 bytes. Se esse atributo for definido como um valor menor que 1048576 bytes, o valor padrão será implicitamente assumido como 1048576 bytes.
   - **Não crie um novo arquivo de log**: há um único arquivo de log que continua a crescer à medida que as informações são registradas.
7. Selecione **Usar hora local para nomenclatura e rotação de arquivos** para especificar que a nomenclatura e a hora do arquivo de log para a rotação de arquivos de log usam a hora do servidor local. Quando essa opção não está selecionada, o UTC (Tempo Universal Coordenado) é usado.

   Observação

   Independentemente dessa configuração, os carimbos de data/hora no arquivo de log real usarão o formato de hora selecionado na lista de formatos. Por exemplo, os formatos de arquivo de log NCSA e W3C usam o formato de tempo UTC para carimbos de data/hora.
8. Clique em **Aplicar** no painel **Ações** .

## Configurar o registro em log por site no nível do servidor

Você pode executar esse procedimento usando a interface do usuário (interface do usuário) ou editando arquivos de configuração diretamente.

### Para configurar o log por site no nível do servidor através da interface do usuário

1. Na exibição de árvore **Conexões** do Gerenciador do IIS, selecione seu servidor Web.
2. No **Modo de Exibição de Recursos**, clique duas vezes em **Registro**.
3. Na página **Registro** sob **Um arquivo de log por site**, selecione **Site** na lista suspensa. Por padrão, **o Site** está selecionado.
4. Na página **Log** , na seção **Arquivo de log** em **Formato**, selecione um dos seguintes formatos de arquivo de log:

   - **IIS**: para usar o formato de arquivo de log do Microsoft IIS para registrar informações sobre um site. Esse formato é tratado por HTTP.syse é um formato *fixo* baseado em texto ASCII, o que significa que você não pode personalizar os campos registrados. Os campos são separados por vírgulas e a hora é registrada como hora local. Para obter mais informações sobre o formato de arquivo de log do IIS, consulte O [Formato de Arquivo de Log do IIS (IIS 6.0)](https://go.microsoft.com/fwlink/?LinkId=103792).
   - **NCSA**: para usar o formato de arquivo de log comum NCSA (National Center for Supercomputing Applications) para registrar informações sobre um site. Esse formato é tratado por HTTP.syse é um formato *fixo* baseado em texto ASCII, o que significa que você não pode personalizar os campos registrados. Os campos são separados por espaços, e o tempo é registrado como hora local com o deslocamento UTC (Tempo Universal Coordenado). Para obter mais informações sobre o formato de arquivo de log NCSA, consulte [o formato de arquivo de log comum NCSA (IIS 6.0)](https://go.microsoft.com/fwlink/?LinkId=103791).
   - **W3C**: para usar o formato de arquivo de log do W3C centralizado para registrar informações sobre todos os sites no servidor. Esse formato é tratado por HTTP.sys e é um formato *personalizado* baseado em texto ASCII, o que significa que você especifica os campos que são registrados. Especifique os campos registrados na caixa de diálogo **Campos de Log do W3C** clicando em **Selecionar Campos** na página **Log** . Os campos são separados por espaços e o tempo é registrado em UTC (Tempo Universal Coordenado). Para obter mais informações sobre o formato de arquivo de log W3C, consulte O [Formato de Arquivo de Log Estendido W3C (IIS 6.0)](https://go.microsoft.com/fwlink/?LinkId=103790).
   - **Personalizado**: para usar um formato personalizado para um módulo de log personalizado. Quando você seleciona essa opção, a página **Logging** fica desabilitada, pois o log personalizado não pode ser configurado no Gerenciador do IIS. Para obter mais informações sobre como usar formatos de arquivo de log personalizados, consulte [Módulos de Log Personalizados (IIS 6.0)](https://go.microsoft.com/fwlink/?LinkId=103789).
5. Em **Diretório**, especifique o caminho em que o arquivo de log deve ser armazenado. O padrão é `%SystemDrive%\inetpub\logs\LogFiles`.

   Observação

   Como prática recomendada, armazene arquivos de log, como logs de rastreamento de solicitação com falha, em um diretório diferente de `%systemroot%`.
6. Na seção **Rotação de Arquivo de Log**, selecione uma das seguintes opções:

   - **Agendamento**: para criar um novo arquivo de log baseado em um dos seguintes valores:

     - **Por hora**: um novo arquivo de log é criado a cada hora.
     - **Diariamente**: um novo arquivo de log é criado todos os dias.
     - **Semanalmente**: um novo arquivo de log é criado a cada semana.
     - **Mensalmente**: um novo arquivo de log é criado a cada mês.
   - **Tamanho máximo do arquivo (em bytes)**: para criar um arquivo de log quando o arquivo atingir um determinado tamanho (em bytes). O tamanho mínimo do arquivo é 1048576 bytes. Se esse atributo for definido como um valor menor que 1048576 bytes, o valor padrão será implicitamente assumido como 1048576 bytes.
   - **Não crie um novo arquivo de log**: há um único arquivo de log que continua a crescer à medida que as informações são registradas.
7. Selecione **Usar hora local para nomenclatura e rotação de arquivos** para especificar que a nomenclatura e a hora do arquivo de log para a rotação de arquivos de log usam a hora do servidor local. Quando essa opção não está selecionada, o UTC (Tempo Universal Coordenado) é usado.

   Observação

   Independentemente dessa configuração, os carimbos de data/hora no arquivo de log real usarão o formato de hora selecionado na lista de formatos. Por exemplo, os formatos de arquivo de log NCSA e W3C usam o formato de tempo UTC para carimbos de data/hora.
8. Clique em **Aplicar** no painel **Ações** .

## Configurar o registro em log por servidor no nível do servidor

Você pode executar esse procedimento usando a interface do usuário (interface do usuário) ou editando arquivos de configuração diretamente.

### Para configurar o registro de logs por servidor no nível do servidor por meio da interface do usuário

1. Na exibição de árvore **Conexões** do Gerenciador do IIS, selecione seu servidor Web.
2. No **Modo de Exibição de Recursos**, clique duas vezes em **Registro**.
3. Na página **Log** , em **Um arquivo de log por site**, selecione **Servidor** na lista suspensa. Por padrão, **o Site** está selecionado.
4. Na página **Log** , na seção **Arquivo de log** em **Formato**, selecione um dos seguintes formatos de arquivo de log:

   - **IIS**: para usar o formato de arquivo de log do Microsoft IIS para registrar informações sobre um site. Esse formato é tratado por HTTP.syse é um formato *fixo* baseado em texto ASCII, o que significa que você não pode personalizar os campos registrados. Os campos são separados por vírgulas e a hora é registrada como hora local. Para obter mais informações sobre o formato de arquivo de log do IIS, consulte O [Formato de Arquivo de Log do IIS (IIS 6.0)](https://go.microsoft.com/fwlink/?LinkId=103792).
   - **NCSA**: para usar o formato de arquivo de log comum NCSA (National Center for Supercomputing Applications) para registrar informações sobre um site. Esse formato é tratado por HTTP.syse é um formato *fixo* baseado em texto ASCII, o que significa que você não pode personalizar os campos registrados. Os campos são separados por espaços, e o tempo é registrado como hora local com o deslocamento UTC (Tempo Universal Coordenado). Para obter mais informações sobre o formato de arquivo de log NCSA, consulte [o formato de arquivo de log comum NCSA (IIS 6.0)](https://go.microsoft.com/fwlink/?LinkId=103791).
   - **W3C**: para usar o formato de arquivo de log do W3C centralizado para registrar informações sobre todos os sites no servidor. Esse formato é tratado por HTTP.sys e é um formato *personalizado* baseado em texto ASCII, o que significa que você especifica os campos que são registrados. Especifique os campos registrados na caixa de diálogo **Campos de Log do W3C** clicando em **Selecionar Campos** na página **Log** . Os campos são separados por espaços e o tempo é registrado em UTC (Tempo Universal Coordenado). Para obter mais informações sobre o formato de arquivo de log W3C, consulte O [Formato de Arquivo de Log Estendido W3C (IIS 6.0)](https://go.microsoft.com/fwlink/?LinkId=103790).
   - **Personalizado**: para usar um formato personalizado para um módulo de log personalizado. Quando você seleciona essa opção, a página **Logging** fica desabilitada, pois o log personalizado não pode ser configurado no Gerenciador do IIS. Para obter mais informações sobre como usar formatos de arquivo de log personalizados, consulte [Módulos de Log Personalizados (IIS 6.0)](https://go.microsoft.com/fwlink/?LinkId=103789).
5. Em **Diretório**, especifique o caminho em que o arquivo de log deve ser armazenado. O padrão é `%SystemDrive%\inetpub\logs\LogFiles`.

   Observação

   Como prática recomendada, armazene arquivos de log, como logs de rastreamento de solicitação com falha, em um diretório diferente de `%systemroot%`.
6. Na seção **Rotação de Arquivo de Log**, selecione uma das seguintes opções:

   - **Agendamento**: para criar um novo arquivo de log baseado em um dos seguintes valores:

     - **Por hora**: um novo arquivo de log é criado a cada hora.
     - **Diariamente**: um novo arquivo de log é criado todos os dias.
     - **Semanalmente**: um novo arquivo de log é criado a cada semana.
     - **Mensalmente**: um novo arquivo de log é criado a cada mês.
   - **Tamanho máximo do arquivo (em bytes)**: para criar um arquivo de log quando o arquivo atingir um determinado tamanho (em bytes). O tamanho mínimo do arquivo é 1048576 bytes. Se esse atributo for definido como um valor menor que 1048576 bytes, o valor padrão será implicitamente assumido como 1048576 bytes.
   - **Não crie um novo arquivo de log**: há um único arquivo de log que continua a crescer à medida que as informações são registradas.
7. Selecione **Usar hora local para nomenclatura e rotação de arquivos** para especificar que a nomenclatura e a hora do arquivo de log para a rotação de arquivos de log usam a hora do servidor local. Quando essa opção não está selecionada, o UTC (Tempo Universal Coordenado) é usado.

   Observação

   Independentemente dessa configuração, os carimbos de data/hora no arquivo de log real usarão o formato de hora selecionado na lista de formatos. Por exemplo, os formatos de arquivo de log NCSA e W3C usam o formato de tempo UTC para carimbos de data/hora.
8. Clique em **Aplicar** no painel **Ações** .

## Selecionar campos W3C para logar

Você pode executar esse procedimento usando a interface do usuário (interface do usuário) ou editando arquivos de configuração diretamente.

### Para selecionar campos W3C para fazer logon usando a interface do usuário

1. No **Modo de Exibição de Recursos** do Gerenciador do IIS, clique duas vezes em **Log**.
2. Na página **Log** , na seção **Arquivo de log** em **Formatar**, clique em **Selecionar Campos**.
3. Na caixa de diálogo **Campos de Log do W3C** , selecione uma ou mais das seguintes opções:

   - **Data (data)**: a data em que a solicitação ocorreu.
   - **Hora (hora)**: a hora, em UTC (Tempo Universal Coordenado), em que a solicitação ocorreu.
   - **Endereço IP do cliente (c-ip)**: o endereço IP do cliente que fez a solicitação.
   - **Nome de Usuário (cs-username)**: o nome do usuário autenticado que acessou seu servidor. Usuários anônimos são indicados por um hífen.
   - **Nome do Serviço (s-sitename)**: o número da instância do site que atendeu à solicitação.
   - **Nome do servidor (s-computername)**: o nome do servidor no qual a entrada do arquivo de log foi gerada.
   - **Endereço IP do servidor (s-ip)**: o endereço IP do servidor no qual a entrada do arquivo de log foi gerada.
   - **Porta do Servidor (s-port)**: o número da porta do servidor configurado para o serviço.
   - **Método (cs-method)**: a ação solicitada, por exemplo, um método GET.
   - **Elemento de URI (cs-uri-stem)**: o Identificador de Recurso Universal, ou destino, da ação.
   - **Consulta de URI (cs-uri-query)**: a consulta, se houver, que o cliente estava tentando executar. Um URI (Resource Identifier Universal) consulta é necessário apenas para páginas dinâmico.
   - **Código de Status do Protocolo (sc-status)**: o código de status HTTP ou FTP.
   - **Código de substatus do protocolo (sc-substatus)**: HTTP ou FTP.
   - **Status do Win32 (sc-win32-status)**: o código de status do Windows.
   - **Bytes Enviados (sc-bytes)**: o número de bytes enviados pelo servidor.
   - **Bytes Recebidos (cs-bytes)**: o número de bytes recebidos pelo servidor.
   - **Tempo gasto (tempo gasto)**: a duração da ação em milissegundos.
   - **Versão do protocolo (cs-version)**: a versão do protocolo usada pelo cliente.
   - **Host (cs-host)**: o nome do host, se houver.
   - **Agente do Usuário (cs(UserAgent)**: o tipo de navegador usado pelo cliente.
   - **Cookie (cs(Cookie))**: o conteúdo do cookie enviado ou recebido, se houver.
   - **Referenciador (cs(Referenciador):** o site que o usuário visitou pela última vez. Esse site fornece um link para o site atual.
4. Clique em **Aplicar** no painel **Ações** .

## Configurar opções de rotação de arquivos de log

Você pode executar esse procedimento usando a interface do usuário (interface do usuário) ou editando arquivos de configuração diretamente.

### Para configurar as opções de rotação de arquivo de log usando a interface do usuário

1. No **Modo de Exibição de Recursos** do Gerenciador do IIS, clique duas vezes em **Log**.
2. Na página **Log**, na seção **Rotação de Arquivo de Log**, selecione uma das seguintes opções:

   - **Agendamento**: para criar um novo arquivo de log baseado em um dos seguintes valores:

     - **Por hora**: um novo arquivo de log é criado a cada hora.
     - **Diariamente**: um novo arquivo de log é criado todos os dias.
     - **Semanalmente**: um novo arquivo de log é criado a cada semana.
     - **Mensalmente**: um novo arquivo de log é criado a cada mês.
   - **Tamanho máximo do arquivo (em bytes)**: para criar um arquivo de log quando o arquivo atingir um determinado tamanho (em bytes). O tamanho mínimo do arquivo é 1048576 bytes. Se esse atributo for definido como um valor menor que 1048576 bytes, o valor padrão será implicitamente assumido como 1048576 bytes.
   - **Não crie um novo arquivo de log**: essa opção significa que há um único arquivo de log que continua a crescer à medida que as informações são registradas. Se você usar um único arquivo de log para seu site, será útil quando você usa utilitários de análise de log, mas também cria arquivos de log maiores que podem afetar o desempenho geral do servidor.
3. Selecione **Usar hora local para nomenclatura e rotação de arquivos** para especificar que a nomenclatura e a hora do arquivo de log para a rotação de arquivos de log usam a hora do servidor local. Quando essa opção não está selecionada, o UTC (Tempo Universal Coordenado) é usado.

   Observação

   Independentemente dessa configuração, os carimbos de data/hora no arquivo de log real usarão o formato de hora selecionado na lista de formatos. Por exemplo, os formatos de arquivo de log NCSA e W3C usam o formato de tempo UTC para carimbos de data/hora.
4. Clique em **Aplicar** no painel **Ações** .

## Consulte Também

- [Criar um site de ASP.NET no IIS](application-frameworks__scenario-build-an-aspnet-website-on-iis__overview-build-an-asp-net-website-on-iis.md)
- [Criar um site asp clássico no IIS](application-frameworks__running-classic-asp-applications-on-iis-7-and-iis-8__scenario-build-a-classic-asp-website-on-iis.md)
- [Criar um site estático no IIS](manage__creating-websites__scenario-build-a-static-website-on-iis.md)
- [Criar um site FTP no IIS](publish__using-the-ftp-service__scenario-build-an-ftp-site-on-iis.md)
- [Criar uma fazenda web com servidores IIS](web-hosting__scenario-build-a-web-farm-with-iis-servers__overview-build-a-web-farm-with-iis-servers.md)
- [Hosting-Friendly IIS (Web Server Platform): Visão geral do cenário](get-started__introduction-to-iis__hosting-friendly-web-server-platform-iis-scenario-overview.md)

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
