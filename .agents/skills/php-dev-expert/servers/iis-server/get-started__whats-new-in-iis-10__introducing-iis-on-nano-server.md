# Apresentando o IIS no Nano Server | Microsoft Learn

> **Fonte / Source:** https://learn.microsoft.com/pt-br/iis/get-started/whats-new-in-iis-10/introducing-iis-on-nano-server

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

# Apresentando o IIS no Nano Server

Comentários

por [David So](https://github.com/davidso)

## Compatibilidade

| Versão | Observações |
| --- | --- |
| IIS 10.0 | Os recursos descritos neste artigo foram introduzidos no IIS 10.0 |
| IIS 8.5 e anterior | Os recursos descritos neste artigo não tinham suporte antes do IIS 10.0 |

## Nano Server

O Nano Server é uma nova opção de instalação interessante no Windows Server 2016.

Aqui está uma citação do [Guia de Introdução ao Nano Server](https://technet.microsoft.com/library/mt126167.aspx) que resume muito bem o Nano Server:

*"O Nano Server é um sistema operacional de servidor administrado remotamente otimizado para nuvens privadas e datacenters. Ele é semelhante ao Windows Server no modo Server Core, mas significativamente menor, não tem capacidade de logon local e só dá suporte a aplicativos, ferramentas e agentes de 64 bits. Ele ocupa muito menos espaço em disco, configura significativamente mais rápido e requer muito menos atualizações e reinicializações do que o Windows Server. Quando ele é reiniciado, ele é reiniciado muito mais rapidamente."*

Então Nano é muito menor em disco. Mais rápido. Menos reinicializações. Usa menos memória. O que há para não gostar? :)

## IIS no Nano Server

Com o lançamento do Windows Server 2016, temos o prazer de anunciar que o IIS agora está disponível como uma função no Nano Server, para todos experimentarem. Com memória menor e volume de disco dramaticamente menor, as cargas de trabalho da Web são particularmente adequadas para execução no Nano Server, especialmente para hospedagem de alta densidade.

### Como começar

- Comece com as etapas "[Introdução ao Nano Server](https://technet.microsoft.com/library/mt126167.aspx)"
- A documentação do IIS Nano pode ser encontrada em <https://technet.microsoft.com/library/mt627783.aspx>

  - Você também pode obtê-lo por meio do menu de árvore no lado esquerdo do 'Introdução ao Nano Server'
- As especificidades de como instalar o IIS no Nano podem ser encontradas no link acima.

Mas, essencialmente, a maneira mais comum de criar um vhd(x) do Nano Server é por meio do cmdlet New-NanoServerImage.

Para habilitar o IIS, basta passar `Microsoft-NanoServer-IIS-Package` como um argumento para o parâmetro Packages. por ex.

```
New-NanoServerImage -MediaPath f:\ -BasePath .\Base -TargetPath .\Nano1.vhd -GuestDrivers -Packages Microsoft-NanoServer-IIS-Package
```

### Principais diferenças entre o IIS no Nano e o Servidor Regular

#### Installation

Fizemos muitas alterações no IIS para Nano para dar suporte à instalação online e offline. Por 'online', queremos dizer quando o computador está 'em execução' (não queremos dizer online no sentido de conectividade de rede) e por 'offline' queremos dizer quando o computador não está em execução.

Historicamente e no servidor regular, o IIS só pode ser instalado online (computador em execução). Ao preparar um computador com o IIS, você normalmente seguiria uma sequência como:

1. Instalar o sistema operacional
2. Aguarde a conclusão da instalação
3. Habilitar a função do IIS
4. Aguardar a conclusão da função do IIS
5. Definir configurações – por exemplo, configurações de autenticação, módulos Asp.Net

Com o Nano Server, a instalação pode ser provisionada offline, simplificando e acelerando drasticamente as etapas 1 a 4 acima.

Ao usar New-NanoServerImage para criar um vhd(x) com o Microsoft-NanoServer-IIS-Package configuramos uma instalação de trabalho padrão do IIS

- Serviços do IIS instalados (por exemplo, WAS, W3SVC)
- Um conjunto padrão de sub-recursos do IIS habilitados, como Documento Padrão, Conteúdo Estático, Log HTTP etc.

  - Consulte a [tabela](https://technet.microsoft.com/library/mt627783.aspx) na qual os sub-recursos estão habilitados por padrão.
- Regra de firewall habilitada para portas padrão 80/443

Torna-se extremamente rápido provisionar novas máquinas de servidor web ao usar a imagem vhd(x) gerada que já tem o IIS embutido. No meu computador da área de trabalho do office, pude criar novas VMs, fazer especialização offline, inicializar e atender solicitações da Web em cerca de 25 segundos. Tentar fazer o mesmo com o Server Core teria levado muito mais tempo.

#### Configuração

A configuração de sub-recursos do IIS, como autenticação e gravação em log, ainda é uma etapa que pode ser realizada apenas de forma online, assim como em um servidor regular.

No servidor regular, os sub-recursos do IIS podem ser habilitados/desabilitados por meio de comandos DISM, como `dism /online /enable-feature /all /featurename:IIS-WindowsAuthentication`.

No Windows Server 2016 Technical Preview, a configuração de sub-recursos do IIS por meio do DISM não estava disponível e exigia mais trabalho (daí a Visualização Técnica....) Esta é definitivamente uma área onde estamos olhando para melhorar.

Por enquanto, os comandos do PowerShell podem ser usados para habilitar/desabilitar os módulos apropriados ou você pode editar applicationHost.config. Consulte [os documentos do IIS Nano](https://technet.microsoft.com/library/mt627783.aspx) para obter mais informações.

O gráfico lá também mostra os sub-recursos do IIS disponíveis no Nano a partir da versão prévia técnica mais recente. Os \* apenas mostram o que está habilitado por padrão (sem o \* ainda estão disponíveis, mas só precisam ser habilitados).

### Estruturas com suporte

#### ASP.NET Core

A diferença mais notável entre Nano e Servidor regular é que Nano tem como alvo Asp.Net Core (anteriormente conhecido como Asp.Net 5). O Asp Clássico não será executado no Nano e nem aplicativos completos do .Net Framework, como Asp.Net <=4.

Aqui está minha [postagem no blog sobre como obter um aplicativo Asp.Net Core em execução com o IIS no Nano](https://blogs.iis.net/davidso/nano/aspnet).

#### Java

Os aplicativos Java podem ser hospedados no IIS por meio de [HttpPlatformHandler](https://www.iis.net/downloads/microsoft/httpplatformhandler).

Meu colega jeong Hwan tem uma postagem no blog aqui sobre [como fazer o Java trabalhar com o IIS no Nano](https://blogs.iis.net/jeonghwan/running-tomcat-with-iis-on-nano-server)

#### Outros

O suporte ao ASP.NET Core e Java no IIS Nano é um ótimo começo, embora tenhamos planos para obter mais plataformas com suporte. O [HttpPlatformHandler](https://www.iis.net/downloads/microsoft/httpplatformhandler) é um módulo de finalidade geral para gerenciar e enviar solicitações para ouvintes http, portanto, poderia muito bem haver mais plataformas que podem ser executadas bem no Nano que não testamos e, portanto, não foram listadas.

Se você tentar isso (por exemplo, com Ruby ou Node) e fazê-lo funcionar, informe-nos!

### Management

O Nano Server é um sistema operacional 'sem cabeça' – não há gui no próprio servidor. O PowerShell está na frente e no centro da experiência de gerenciamento do Nano. Claro que isso significa que você poderá gerenciar o IIS no Nano usando nossos cmdlets do IIS PowerShell.

Devo esclarecer que, a partir do IIS 10.0, há dois módulos do IIS PowerShell:

- O módulo WebAdministration mais antigo
- O [novo módulo IISAdministration](https://blogs.iis.net/bariscaglar/iisadministration-powershell-cmdlets-new-feature-in-windows-10-server-2016)

O Nano Server é uma plataforma de servidor limpa para o futuro e, portanto, no momento, não temos planos de incluir o módulo WebAdministration herdado mais antigo no momento. Em vez disso, forneceremos o novo módulo IISAdministration.

Além do PowerShell (IISAdministration), usar appcmd.exe para gerenciar o IIS também é uma opção.

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
