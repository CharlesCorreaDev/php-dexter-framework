# O sistema de configuração no IIS 7 | Microsoft Learn

> **Fonte / Source:** https://learn.microsoft.com/pt-br/iis/get-started/planning-your-iis-architecture/the-configuration-system-in-iis-7

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

# O sistema de configuração no IIS 7

Comentários

por [Walter Oliver](https://github.com/walterov)

## Visão geral

O IIS 7 apresenta um novo sistema de configuração, no núcleo de todos os novos recursos relacionados à administração. O sistema de configuração é baseado em arquivos XML distribuídos, de texto não criptografado, que contêm as configurações de toda a plataforma do servidor Web, incluindo IIS, ASP.NET e outros componentes, como FTP 7.5; eles podem, opcionalmente, ser definidos nos diretórios de conteúdo junto com o conteúdo da Web se desbloqueados para esse nível. Observe que as configurações do FTP 6.0 são armazenadas no MetaBase.

Diferentes níveis da hierarquia de configuração podem ser delegados pelo administrador do computador a outros usuários, como o proprietário do site ou o desenvolvedor do aplicativo. Proteger padrões e limitar o acesso de gravação às configurações apenas ao administrador da máquina por padrão (as exceções são algumas configurações específicas do site, como DefaultDocument); no entanto, recursos de bloqueio sofisticados e detalhados permitem o desbloqueio seguro e a delegação do gerenciamento de configurações específicas para mais usuários, dentro do escopo do namespace da web. O sistema é retrocompatível no nível da API com versões anteriores do IIS (após a instalação da camada de compatibilidade do MetaBase).

No nível raiz (ou global), há dois arquivos separados:

- system32\inetsrv\config\applicationHost.config: mantém os padrões globais para configurações do servidor Web (IIS).
- \Windows\Microsoft.NET\Framework\v4.0.30319\Config\machine.config: mantém os padrões globais para as configurações da estrutura do .NET, incluindo algumas das ASP.NET (o restante das configurações estão no web.config na mesma pasta, que às vezes é chamada de web.configraiz).

O motivo pelo qual ainda há dois arquivos separados é porque as duas tecnologias têm uma versão diferente (em termos de agendamento e em termos de produto). O IIS faz parte do Windows e o .NET Framework pode ser versão de forma independente.

Nos diretórios de conteúdo da Web, pode haver arquivos opcionais de web.config que controlam o comportamento para o nível da hierarquia e para baixo. Eles podem ser locais ou remotos (se o diretório de conteúdo estiver em um compartilhamento UNC, por exemplo). Eles podem conter IIS, ASP.NET ou qualquer outra configuração de estrutura do .NET que possa ser especificada em seu nível. Por padrão, não há arquivos web.config.

## Hierarquia

Em termos de hierarquia de herança, o arquivo raiz é machine.config, em seguida, web.config no mesmo diretório (conhecido como web.config raiz), depois applicationHost.config, e então os arquivos web.config opcionais ao longo do namespace, conforme ilustrado no diagrama a seguir.
![Diagrama mostrando a relação entre os arquivos contidos nos namespaces I S 7 e Arquivos de Configuração.](the-configuration-system-in-iis-7/_static/image1.jpg)

## Seções

Em um arquivo de configuração, as configurações são organizadas de maneira estruturada, com base em uma unidade chamada "seção". A seção de configuração é um grupo de configurações logicamente relacionadas que podem ser implantadas ou desregistradas como um todo, e normalmente são utilizadas por um módulo de servidor.

Em outras palavras, quase todos os módulos de runtime executados no processo de trabalho têm uma seção de configuração correspondente para ele. A seção de configuração também é a unidade de extensibilidade: a adição de novas configurações ao esquema de configuração é feita estendendo uma seção existente ou adicionando uma ou mais seções a ela.

As seções são agrupadas ainda mais em coleções relacionadas logicamente, chamadas de "grupos de seções". Os grupos de seções não são a unidade de implantação ou registro ou qualquer outra operação substancial (por exemplo, bloqueio, criptografia). Eles não têm configurações neles. Sua finalidade é estruturar ainda mais a organização das configurações e evitar uma longa lista simples de seções de configuração. Elas são usadas para criar hierarquia de configurações, portanto, elas têm relações entre elas (pai/filho).

Em outras palavras, os grupos de seções podem ser aninhados. Uma determinada seção sempre pertence apenas a um grupo de seções e não pode conter outra seção (ou grupos de seções). Um determinado grupo de seções pode pertencer a um grupo de seções pai e pode conter zero ou mais grupos de seções filho. Normalmente, ele contém mais de uma seção; caso contrário, não há um bom motivo para tê-lo em primeiro lugar (no entanto, os clientes podem estender o esquema criando seus próprios grupos de seções que têm apenas uma seção, por qualquer motivo).

Aqui está um exemplo que demonstra seções e grupos de seções:

```
<!-- section group for web server configuration -->
<system.webServer>
  <!-- section group for web server security configuration -->
  <security>
    <!-- section group for web server authentication configuration -->
    <authentication>
      <!-- three sections for authentication -->
      <basicAuthentication ... />
      <windowsAutnentication ... />
      <anonymousAuthentication ... />
    </authentication>
  </security>
</system.webServer>
```

Cada seção tem um nome. O nome curto é o nome da própria seção e o nome longo é o nome completo, incluindo todos os grupos de seções que contêm. Por exemplo, o nome completo de "windowsAuthentication" é "system.webServer/security/authentication/windowsAuthentication". Essa organização hierárquica permite seções futuras (e grupos de seções) com o mesmo nome, mas em diferentes grupos de seções.

Cada nível do namespace de URL pode ter a configuração associada. A configuração de um determinado nível herda para níveis filho, a menos que seja substituída especificamente por um nível filho. Uma maneira simples de obter a configuração por URL é usando arquivos web.config, nas pastas físicas do sistema de arquivos mapeadas para os caminhos virtuais. No nível raiz (o nível do computador), arquivos separados devem ser usados, dependendo do grupo de seções de configuração (que será definido posteriormente no documento; para fins atuais, considere-o como o nome do elemento XML que contém a configuração):

| Grupo de Seções | Descrição | Arquivo raiz |
| --- | --- | --- |
| system.applicationHost | Sistema de Ativação do Windows: modelo de processo | System32\inetsrv\config\applicationHost.config |
| system.webServer | IIS: servidor Web | System32\inetsrv\config\applicationHost.config |
| System.web | ASP.NET | Windows\microsoft.net\framework\v2.0.50727\config\web.config |
| Sistema.\* | Outra estrutura do .NET | Windows\microsoft.net\framework\v2.0.50727\config\machine.config |
| [Microsoft outros] | Outros da Microsoft | Windows\microsoft.net\framework\v2.0.50727\config\machine.config |
| [personalizado] | Partes Terceiras | machine.config ou web.config raiz ou applicationHost.config, até 3 terceiros/cliente |

O formato de persistência da configuração é XML; portanto, é útil descrever os mapeamentos entre as unidades organizacionais de configuração e a terminologia XML. Grupos de seções e seções são elementos XML. Em uma seção, as configurações são organizadas em unidades menores que seguem de perto a terminologia XML:

| Unidade de configuração | Terminologia XML | Descrição |
| --- | --- | --- |
| Elemento de Configuração | elemento XML | Contém outras unidades filhas; não tem valor. |
| Conjunto de Configurações | elemento XML | Exemplo particular de elemento: contém um grupo de elementos na forma de adicionar/remover/limpar. |
| Propriedade de configuração | atributo XML | Contém apenas um valor; não contém unidades filho. |

O sistema de configuração é baseado em um esquema declarativo, em sua essência. O esquema de configuração abrange vários arquivos, que residem em um local conhecido: system32\inetsrv\config\schema. Por padrão, somente os administradores de computador têm acesso a essa pasta. Clientes ou terceiros podem adicionar arquivos de esquema para suas seções personalizadas copiando-os para esse diretório. O sistema de configuração os capturará automaticamente quando ele for iniciado, durante o processo de configuração acionado pelo chamador. Se o sistema de configuração já estiver em execução, ele não aplicará alterações nos arquivos de esquema ou adotará arquivos novos.

Não edite o IIS ou outros arquivos de esquema instalados nesse diretório, pois erros podem resultar em esquema corrompido e incapacidade de inicialização do servidor.

Observação

Não há nenhuma interface programática de alto nível para obter e definir arquivos de esquema, a não ser a API de acesso a arquivos tradicional e a análise/edição de XML. É sempre recomendável fazer backup do estado confidencial, como a pasta de esquema, antes de fazer alterações nele.

Três arquivos compõem o esquema unificado da plataforma do servidor Web:

- IIS\_schema.xml: abrange as configurações do Sistema de Ativação do Windows e os grupos de seções e o servidor Web do IIS.
- ASPNET\_schema.xml: abrange as configurações de ASP.NET no grupo de seções.
- FX\_schema.xml: abrange outras configurações da estrutura do .NET em vários grupos de seções.

Você também encontrará FTP\_schema.xml se tiver o recurso FTP do IIS 7 instalado.

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
