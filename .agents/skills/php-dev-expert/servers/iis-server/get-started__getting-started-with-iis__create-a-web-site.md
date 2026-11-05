# Criar um site | Microsoft Learn

> **Fonte / Source:** https://learn.microsoft.com/pt-br/iis/get-started/getting-started-with-iis/create-a-web-site

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

# Criar um site

Comentários

por Tali Smith

## Introdução

Quando quiser publicar conteúdo para acesso pela Internet ou por uma conexão de intranet, você pode adicionar um site ao servidor Web para armazenar o conteúdo.

Durante a instalação do IIS (Serviços de Informações da Internet), uma configuração de site padrão é criada no `\Inetpub\Wwwroot` diretório em seu servidor Web. Você pode usar esse diretório padrão para publicar seu conteúdo da Web ou criar um diretório em um local de sistema de arquivos de sua escolha.

Quando você adiciona um site no IIS, uma entrada de site é criada no arquivo ApplicationHost.config. A entrada especifica a associação de rede para o site, mapeia o site para um local no sistema de arquivos e, opcionalmente, especifica as credenciais do usuário para acesso ao conteúdo.

Para obter informações sobre os níveis nos quais você pode executar esse procedimento e os módulos, manipuladores e permissões necessários para executar esse procedimento, consulte [Os Requisitos de Recursos de Sites (IIS 7)](https://technet.microsoft.com/library/cc754865(WS.10).aspx).

## Adicionar um site

Você pode executar esse procedimento usando a interface do usuário (interface do usuário) do Gerenciador do IIS executando comandos Appcmd.exe na janela prompt de comando editando arquivos de configuração diretamente ou gravando scripts WMI (Instrumentação de Gerenciamento do Windows®).

### Usar a interface do usuário

1. Inicie o **Gerenciador do IIS**. Para obter informações sobre como iniciar o Gerenciador do IIS, consulte [Open IIS Manager (IIS 7)](https://technet.microsoft.com/library/cc770472(WS.10).aspx). Para obter informações sobre como navegar para locais na interface do usuário, consulte [Navegação no Gerenciador do IIS (IIS 7)](https://technet.microsoft.com/library/cc732920(WS.10).aspx).
2. No painel **Conexões** , clique com o botão direito do mouse no nó **Sites** no modo de exibição de árvore e clique em **Adicionar Site**.
3. Na caixa de diálogo **Adicionar Site** , digite um *nome amigável* para seu site na caixa **de nome do site** .
4. Se você quiser selecionar um pool de aplicativos diferente do listado na caixa Pool de Aplicativos. Na caixa de diálogo **Selecionar Pool de Aplicativos** , selecione um pool de **aplicativos na lista** pool de aplicativos e clique em **OK**.
5. Na caixa **Caminho físico** , digite o *caminho físico* da pasta do site ou clique no botão procurar **(...)** para procurar o sistema de arquivos para localizar a pasta.
6. Se o caminho físico que você inseriu na etapa 5 for para um compartilhamento remoto, clique em **Conectar** para especificar credenciais que tenham permissão para acessar o caminho. Se você não usar credenciais específicas, selecione a opção **Usuário do aplicativo (autenticação pass-thru)** na caixa de diálogo **Conectar como** .
7. Selecione o protocolo do site na lista **De tipos** .
8. O valor padrão na caixa **de endereço IP** é **All Unassigned**. Se você precisar especificar um endereço IP estático para o site, digite o *endereço IP* na caixa **de endereço IP** .
9. Digite um *número de porta* na caixa **de texto Porta** .
10. Opcionalmente, *digite um nome de cabeçalho de host* para o site na caixa **Cabeçalho do Host** .
11. Se você não precisar fazer nenhuma alteração no site e quiser que o site esteja disponível imediatamente, marque a caixa de seleção **Iniciar site imediatamente** .
12. Clique em **OK.**

### Usar o prompt de comando

Para adicionar um site, use a seguinte sintaxe:

```
appcmd add site /name: string /id: uint /physicalPath: string /bindings: string
```

A variável **name***string* é o nome, e a variável **id***uint* é o inteiro sem sinal que você deseja atribuir ao site. As variáveis **nome***string* e **id***uint* são as únicas necessárias quando você adiciona um site em Appcmd.exe. Observe que quando você adiciona um site sem especificar os valores para as **associações e atributos****physicalPath** , o site não poderá ser iniciado.

A variável **physicalPath***string* é o caminho do conteúdo do site no sistema de arquivos.

A cadeia de **caracteres de associações** de variáveis *contém* informações que são usadas para acessar o site e devem estar na forma de `protocol/IP_address:port:host_header`. Por exemplo, uma vinculação de site é a combinação de protocolo, endereço IP, porta e cabeçalho de host. Uma associação de **http/\*:85:** permite que um site ouça solicitações HTTP na porta 85 para todos os endereços IP e nomes de domínio (também conhecidos como cabeçalhos de host ou nomes de host). Por outro lado, uma associação de **http/\*:85:marketing.contoso.com** permite que um site ouça solicitações HTTP na porta 85 para todos os endereços IP e o nome de domínio **marketing.contoso.com**.

Para adicionar um site chamado Contoso com uma ID de 2, com conteúdo em `C:\Contoso`, e que ouça solicitações HTTP para todos os endereços IP na porta 85 e um nome de domínio de **marketing.contoso.com**, digite o seguinte no prompt de comando e pressione ENTER:

```
appcmd add site /name: contoso /id:2 /physicalPath: c:\contoso /bindings:http/*:85: marketing.contoso.com
```

Para obter mais informações, consulte [Appcmd.exe](https://technet.microsoft.com/library/cc772200(WS.10).aspx).

## Configuração

Você pode configurar os seguintes elementos:

```
<site>
<application>
<virtualDirectory>
<bindings>
```

Para obter mais informações sobre a configuração, consulte [o IIS 7: Esquema de configurações do IIS](https://learn.microsoft.com/pt-br/previous-versions/iis/settings-schema/aa347559(v=vs.90)) na MSDN® (Microsoft® Developer Network).

Para obter mais informações sobre o WMI e o IIS, consulte [a WMI (Instrumentação de Gerenciamento do Windows) no IIS 7](https://technet.microsoft.com/library/cc771707(WS.10).aspx). Para obter mais informações sobre as classes, métodos ou propriedades associadas a esse procedimento, consulte a [Referência do Provedor WMI do IIS](https://learn.microsoft.com/pt-br/previous-versions/iis/6.0-sdk/ms525265(v=vs.90)) no site do MSDN.

## Links para obter mais informações

- [Gerenciando sites no IIS 7](https://technet.microsoft.com/library/cc771341(WS.10).aspx)

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
