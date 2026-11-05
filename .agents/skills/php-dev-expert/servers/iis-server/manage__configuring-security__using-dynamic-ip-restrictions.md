# Usando restrições de IP dinâmicas | Microsoft Learn

> **Fonte / Source:** https://learn.microsoft.com/pt-br/iis/manage/configuring-security/using-dynamic-ip-restrictions

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

# Usando restrições de IP dinâmicas

Comentários

por  Nazim Lala

## Introdução

O módulo DIPR (Restrições de IP Dinâmico) do IIS 7.0 e superior fornece proteção contra ataques de negação de serviço e força bruta em servidores Web e sites. Para fornecer essa proteção, o módulo bloqueia temporariamente endereços IP de clientes HTTP que fazem um número excepcionalmente alto de solicitações simultâneas ou que fazem um grande número de solicitações durante um pequeno período de tempo.

## Quando usar restrições de IP dinâmicas?

Quando você precisar permitir/negar o acesso a um site (ou permitir tudo, mas registrar quando as condições forem atendidas), com base no número de solicitações simultâneas originadas de um endereço IP ou com base no número de solicitações do IP ao longo de um período de tempo.

## Características

O módulo Restrições dinâmicas de IP inclui estes principais recursos:

- **Bloqueio de endereços IP com base no número de solicitações simultâneas** – se um cliente HTTP exceder o número de solicitações simultâneas permitidas, o endereço IP desse cliente será temporariamente bloqueado.
- **bloqueio de endereço IP com base no número de solicitações durante um período** - se um cliente HTTP exceder o número de solicitações feitas em um intervalo de tempo especificado, o endereço IP desse cliente será temporariamente bloqueado.
- **Permitir lista de endereços IP que não serão bloqueados –** Você pode adicionar uma lista dos endereços IP dos clientes que deseja excluir de serem bloqueados pelo módulo, independentemente de outra configuração.
- **Diversas ações de negação** – Você pode especificar qual resposta retornar a um cliente HTTP para o qual o endereço IP está bloqueado. O módulo pode retornar os códigos de status 403 e 404 ou simplesmente encerrar a conexão HTTP e não retornar nenhuma resposta.
- **Suporte para servidores web por trás de um proxy** – Se o servidor web estiver por trás de um proxy, você poderá configurar o módulo para usar o endereço IP do cliente de um cabeçalho X-Forwarded-For.
- IPv6 – o módulo fornece suporte completo para endereços IPv6.

## Instalando o módulo DIPR

Você pode experimentar os seguintes métodos para instalar as Restrições de IP Dinâmico:

Na tela Selecionar Serviços de Função, navegue até o Servidor Web (IIS) > Web Server > Security. Marque a caixa de seleção IP e Restrições de Domínio e clique em Avançar para continuar.

### Pré-requisitos

Você deve ter um dos seguintes sistemas operacionais.

- Windows Server 2008
- Windows Vista SP1
- Windows Server 2008 R2
- Windows 7

### Desinstalar a versão Beta do módulo DIPR

Se você estiver usando o **primeiro****versão beta** do módulo DIPR, será necessário desinstalá-lo antes de instalar o Release Candidate ou ocorrerá um erro e a instalação falhará. Faça backup da configuração antes de desinstalar a versão Beta.

Se você estiver usando a versão **Beta 2** do módulo DIPR, poderá atualizar diretamente para a versão final. As configurações serão preservadas.

## Acessando e configurando restrições de IP dinâmicas

Observação: ao configurar restrições de IP, você precisa considerar o nível do IIS e a configuração do nível do site, pois o nível do site substituirá o nível do IIS (esse é um comportamento comum do IIS e não é específico do recurso de Restrições de IP).

As Restrições dinâmicas de IP podem ser configuradas usando o Gerenciador do IIS, AS APIs de configuração do IIS ou usando a ferramenta de linha de comando **appcmd**.

Para acessar as configurações de Restrição dinâmica de IP no Gerenciador do IIS, siga estas etapas:

1. Abrir o Gerenciador do IIS
2. Na árvore de visualização à esquerda, selecione o nó do servidor se você quiser configurar as configurações de todo o servidor, ou selecione um nó do site para configurar as configurações específicas do site.
3. No Modo de Exibição de Recursos, clique em "Restrições dinâmicas de IP"  
   ![Captura de tela do Gerenciador IIS mostrando a lista de recursos no painel principal, restrições de IP dinâmicas estão selecionadas.](using-dynamic-ip-restrictions/_static/image1.jpg)

### Exemplo 1: bloqueio de endereço IP com base no número de solicitações simultâneas usando appcmd

Ao usar essa opção, o servidor permitirá que o endereço IP de qualquer cliente faça apenas um número configurável de solicitações simultâneas. Todas as solicitações adicionais que excederem o limite especificado serão negadas.

Uma maneira simples de testar esse recurso é definir o número máximo de solicitações simultâneas como 2 executando o comando appcmd:

```
%WINDIR%\system32\inetsrv\appcmd.exe set config -section:system.webServer/security/dynamicIpSecurity 
/denyByConcurrentRequests.enabled:"True" 
/denyByConcurrentRequests.maxConcurrentRequests:"2" 
/commit:apphost
```

Importante

Ao configurar o número de solicitações simultâneas para um aplicativo Web real, teste minuciosamente o limite escolhido para garantir que os clientes HTTP válidos não sejam bloqueados. Isso é especialmente importante para Aplicações Ricas para Internet que têm páginas da web habilitadas para AJAX e servem conteúdo de mídia.

### Exemplo 2: bloqueio de endereços IP com base no número de solicitações ao longo do tempo usando appcmd

Ao usar esta opção, o servidor negará solicitações do endereço IP de qualquer cliente HTTP que realize mais do que o número configurado de solicitações ao longo de um período de tempo. O endereço IP permanecerá bloqueado até que o número de solicitações em um período de tempo fique abaixo do limite configurado.

Para testar esse recurso, defina o "Número máximo de solicitações" como 5 e "Período de tempo" como 5000 executando o comando appcmd:

```
%WINDIR%\system32\inetsrv\appcmd.exe set config -section:system.webServer/security/dynamicIpSecurity /denyByRequestRate.enabled:"True" /denyByRequestRate.maxRequests:"5" /denyByRequestRate.requestIntervalInMilliseconds:"5000" /commit:apphost
```

Abra o navegador da Web, solicite http://localhost/welcome.png e clique em F5 para atualizar continuamente a página. Isso gerará mais de 5 solicitações ao longo de 5 segundos para que, como resultado, você verá o servidor respondendo com o código de status 403 – Proibido.

Se você aguardar mais 5 segundos quando todas as solicitações anteriores tiverem sido executadas e fizer uma solicitação, a solicitação será bem-sucedida.

Importante

Ao configurar o número de solicitações permitidas ao longo do tempo para um aplicativo Web real, teste minuciosamente os limites escolhidos para garantir que os clientes HTTP válidos não sejam bloqueados. Isso é especialmente importante para Aplicações Ricas para Internet que têm páginas da web habilitadas para AJAX e servem conteúdo de mídia.

### Exemplo 3: bloqueio de endereço IP com base no número de solicitações simultâneas usando a interface do usuário

No meu nível do IIS, tenho a configuração abaixo:

Em "Editar Configurações de Funcionalidade":

![texto alternativo](image.png)

![texto alternativo](image-1.png)

Em "Editar Configurações de Restrição Dinâmica...":

![texto alternativo](image-2.png)

![texto alternativo](image-3.png)

No nível do meu site, tenho a configuração abaixo:

![texto alternativo](image-4.png)

![texto alternativo](image-5.png)

Isso significa que até duas solicitações simultâneas serão permitidas para o site (devido ao número 2 definido acima) e um código de status de 403 será recebido para qualquer outra solicitação simultânea (devido à ação "Proibido" configurada acima) como pode ser visto nas ferramentas de desenvolvedor do navegador (cliquei em "desabilitar cache" para deixar claro e evitar o cache do lado do navegador):

![texto alternativo](image-6.png)

Observação: você pode estar se perguntando por que você vê três solicitações permitidas e não apenas duas; isso ocorre porque as duas primeiras solicitações foram abertas simultaneamente e, uma vez concluídas, ocorreu que a terceira solicitação chegou ao aplicativo, o que significa que a terceira solicitação foi a única (portanto, apenas 1 solicitações simultâneas) quando aconteceu.

A ação "Permitir" configurada acima significa que qualquer endereço IP está bem para enviar solicitações e que as regras configuradas especificam em quais condições esses IPs permitidos terão acesso negado.

Como você notou, a configuração no nível do site de "Permitir" substituiu o nível "Negar" do IIS e a configuração de nível do site de "Proibido" substituiu a configuração de nível do IIS de "Não Encontrado" e, portanto, o código de status 403 foi enviado em vez de 404.

No entanto, se eu alterar o nível do site "Permitir" para "Negar", todos os IPs terão acesso negado, independentemente de terem feito 2 solicitações simultâneas ou não:

![texto alternativo](image-7.png)

### Exemplo 4: Bloqueio de endereço IP com base no número de solicitações simultâneas & número de solicitações ao longo do tempo, usando a interface do usuário

Agora, vamos alterar a configuração do Exemplo 3 um pouco no nível do site. O nível do IIS é o mesmo de antes no Exemplo 3:

![texto alternativo](image-8.png)

Enquanto a configuração no nível do site é agora:

![texto alternativo](image-9.png)

Agora, ao fazer uma solicitação do navegador:

![texto alternativo](image-10.png)

Cada linha colorida (exemplo realçado) representa o tempo de vida de uma solicitação. A regra especifica duas condições como você pode ver. Isso significa que, assim que qualquer condição for atendida, a negação será aplicada. A regra permitirá apenas até duas solicitações dentro de 200 msec, e quaisquer solicitações adicionais dentro desse período serão negadas. Como pode ser visto, a terceira solicitação foi disparada quase 20 msec após a primeira, o que significa que agora temos mais de duas solicitações dentro do quadro de 200 msec e, portanto, a terceira será negada, e assim será a 4ª e a 5ª e a 6ª.

## Registro

Você verá o seguinte nos logs do IIS (por exemplo, 2 acima):

2024-07-22 14:17:48 ::1 GET / - 8090 - ::1 Mozilla/5.0+(Windows+NT+10.0;+Win64;+x64)+AppleWebKit/537.36+(KHTML,+like+Gecko)+Chrome/126.0.0.0+Safari/537.36+Edg/126.0.0.0 - 200 0 0 1

2024-07-22 14:17:48 ::1 GET /Content/css v=7n95mJcoE9tVcdjbEUwG1-urp8oL9Yf2bFpa2lb4Nq41 8090 - ::1 Mozilla/5.0+(Windows+NT+10.0;+Win64;+x64)+AppleWebKit/537.36+(KHTML,+like+Gecko)+Chrome/126.0.0.0+Safari/537.36+Edg/126.0.0.0 http://localhost:8090/ 200 0 0 3

2024-07-22 14:17:48 ::1 GET /bundles/modernizr v=inCVuEFe6J4Q07A0AcRsbJic\_UE5MwpRMNGcOtk94TE1 8090 - ::1 Mozilla/5.0+(Windows+NT+10.0;+Win64;+x64)+AppleWebKit/537.36+(KHTML,+like+Gecko)+Chrome/126.0.0.0+Safari/537.36+Edg/126.0.0.0 http://localhost:8090/ 403 502 0 5

2024-07-22 14:17:48 ::1 GET /bundles/jquery v=JVBM4Dk7eZ-fjWvmxvoCeVR5MAt\_3YXn4K7MRdHsuR81 8090 - ::1 Mozilla/5.0+(Windows+NT+10.0;+Win64;+x64)+AppleWebKit/537.36+(KHTML,+like+Gecko)+Chrome/126.0.0.0+Safari/537.36+Edg/126.0.0.0 http://localhost:8090/ 403 502 0 7

2024-07-22 14:17:48 ::1 GET /bundles/bootstrap v=X8gnNIYDSsAzCxLBuTaZy64Jqo9mzWM5GPsE4TJLNI1 8090 - ::1 Mozilla/5.0+(Windows+NT+10.0;+Win64;+x64)+AppleWebKit/537.36+(KHTML,+like+Gecko)+Chrome/126.0.0.0+Safari/537.36+Edg/126.0.0.0 http://localhost:8090/ 403 502 0 7

2024-07-22 14:17:48 ::1 GET /favicon.ico - 8090 - ::1 Mozilla/5.0+(Windows+NT+10.0;+Win64;+x64)+AppleWebKit/537.36+(KHTML,+like+Gecko)+Chrome/126.0.0.0+Safari/537.36+Edg/126.0.0.0 http://localhost:8090/ 403 502 0 0

2024-07-22 14:17:48 ::1 GET /Content/bootstrap.min.css.map - 8090 - ::1 Mozilla/5.0+(Windows+NT+10.0;+Win64;+x64)+AppleWebKit/537.36+(KHTML,+like+Gecko)+Chrome/126.0.0.0+Safari/537.36+Edg/126.0.0.0 - 403 502 0

O código de status http para solicitações negadas neste exemplo será 403 e o código de sub status será 502. Dessa forma, você pode distinguir entre o código de status "Proibido" normal, definido pelo código do aplicativo, e o "Proibido" definido pelo recurso de restrições de IP do IIS.
A lista de (códigos de status) definida pelo recurso de Restrição de IP é discutida abaixo.

### Negar Ações

O módulo pode ser configurado para executar as seguintes ações ao negar solicitações para endereços IP:

• Proibido: 403 • Não autorizado: 401 • Não encontrado: 404 • Anulação: a conexão TCP será simplesmente redefinida e http não será estabelecida. Isso também é bom caso a página principal seja negada e você não queira que o usuário final veja o código de sub status 502 (para não saber se isso foi devido ao recurso de Restrição de IP). Em vez disso, o usuário verá o seguinte: ![texto alt](image-11.png)

Aqui estão os possíveis códigos de substatus pelo recurso de restrição de IP: 501, 502.
O código substatus será 501 ou 502, dependendo de qual das duas condições foi atendida e, portanto, o cliente teve acesso negado: 501 –> Restrição dinâmica de IP: muitas solicitações simultâneas foram feitas do mesmo IP do cliente.  
502 –> Restrição de IP Dinâmico: o número máximo de solicitações do mesmo IP do cliente dentro de um limite de tempo especificado foi atingido.

Os códigos acima estão documentados aqui: [visão geral do código de status HTTP – Serviços de Informações da Internet | Microsoft Learn](https://learn.microsoft.com/troubleshoot/developer/webapps/iis/health-diagnostic-performance/http-status-code)

## Habilitar o modo somente para registro em log

Agora, no caso de "Habilitar modo somente registro em log" não haverá clientes negados por esse recurso, o que significa que o código de status será o resultado esperado (normalmente 200, mas também depende do seu aplicativo) e os clientes receberão a resposta normal esperada, no entanto, o código de substatus que indica que uma das duas condições foi atendida será registrado em logs do IIS. Veja abaixo um exemplo:

2024-07-28 06:57:35 ::1 GET / - 8090 - ::1 Mozilla/5.0+(Windows+NT+10.0;+Win64;+x64)+AppleWebKit/537.36+(KHTML,+like+Gecko)+Chrome/126.0.0.0+Safari/537.36+Edg/126.0.0.0 - 200 0 0 3 2024-07-28 06:57:35 ::1 GET /bundles/modernizr v=inCVuEFe6J4Q07A0AcRsbJic\_UE5MwpRMNGcOtk94TE1 8090 - ::1 Mozilla/5.0+(Windows+NT+10.0;+Win64;+x64)+AppleWebKit/537.36+(KHTML,+like+Gecko)+Chrome/126.0.0.0+Safari/537.36+Edg/126.0.0.0 http://localhost:8090/ 200 501 0 3

2024-07-28 06:57:35 ::1 GET /bundles/bootstrap v=X8gnNIYDSsAzCxLBuTaZy64Jqo9mzWM5GPsE4TJLNI1 8090 - ::1 Mozilla/5.0+(Windows+NT+10.0;+Win64;+x64)+AppleWebKit/537.36+(KHTML,+like+Gecko)+Chrome/126.0.0.0+Safari/537.36+Edg/126.0.0.0 http://localhost:8090/ 200 502 0 8

2024-07-28 06:57:35 ::1 GET /Content/css v=7n95mJcoE9tVcdjbEUwG1-urp8oL9Yf2bFpa2lb4Nq41 8090 - ::1 Mozilla/5.0+(Windows+NT+10.0;+Win64;+x64)+AppleWebKit/537.36+(KHTML,+like+Gecko)+Chrome/126.0.0.0+Safari/537.36+Edg/126.0.0.0 http://localhost:8090/ 200 0 0 9

2024-07-28 06:57:35 ::1 GET /bundles/jquery v=JVBM4Dk7eZ-fjWvmxvoCeVR5MAt\_3YXn4K7MRdHsuR81 8090 - ::1 Mozilla/5.0+(Windows+NT+10.0;+Win64;+x64)+AppleWebKit/537.36+(KHTML,+like+Gecko)+Chrome/126.0.0.0+Safari/537.36+Edg/126.0.0.0 http://localhost:8090/ 200 501 0 8 2024-07-28 06:57:35 ::1 GET /Content/bootstrap.min.css.map - 8090 - ::1 Mozilla/5.0+(Windows+NT+10.0;+x64)+AppleWebKit/537.36+(KHTML,+like+Gecko)+Chrome/126.0.0.0+Safari/537.36+Edg/126.0.0.0 - 200 502 0 19

2024-07-28 06:57:35 ::1 GET /Content/bootstrap.min.css.map - 8090 - ::1 Mozilla/5.0+(Windows+NT+10.0;+Win64;+x64)+AppleWebKit/537.36+(KHTML,+like+Gecko)+Chrome/126.0.0.0+Safari/537.36+Edg/126.0.0.0 - 200 502 0 37

2024-07-28 06:57:35 ::1 GET /bundles/bootstrap.min.js.map - 8090 - ::1 Mozilla/5.0+(Windows+NT+10.0;+Win64;+x64)+AppleWebKit/537.36+(KHTML,+like+Gecko)+Chrome/126.0.0.0+Safari/537.36+Edg/126.0.0.0 - 404 502 2 0

E o cliente terá isso ao seu lado.

![texto alternativo](image-12.png)

### Suporte para servidores Web por trás do proxy

Se os servidores Web estiverem por trás de um firewall ou um computador proxy, o IP do cliente para todas as solicitações poderá aparecer como o IP do servidor de proxy ou firewall. Isso dificultaria a capacidade do módulo restrição de IP dinâmico ser útil. No entanto, a maioria desses servidores adiciona um cabeçalho X-Forwarded-For na solicitação HTTP que contém o endereço IP do cliente original. A seleção da caixa de seleção "Modo Proxy" na página principal de configuração de Restrições de IP Dinâmico verificará primeiro o endereço IP do cliente nesse cabeçalho.

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
  2025-03-23
