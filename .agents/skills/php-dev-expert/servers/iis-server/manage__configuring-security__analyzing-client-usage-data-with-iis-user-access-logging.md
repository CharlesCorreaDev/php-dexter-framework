# Análise dos dados de uso do cliente com o registro de acesso do usuário do IIS | Microsoft Learn

> **Fonte / Source:** https://learn.microsoft.com/pt-br/iis/manage/configuring-security/analyzing-client-usage-data-with-iis-user-access-logging

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

# Analisando dados de uso do cliente com o registro em log de acesso do usuário do IIS

Comentários

por [Robert McMurray](https://github.com/rmcmurray)

> O Log de Acesso do Usuário (UAL) é um recurso interno do Windows Server 2012 que permite que os administradores coletem dados sobre o uso do cliente.

### Visão geral

O Log de Acesso do Usuário (UAL) é um recurso interno do Windows Server 2012 que permite que os administradores coletem dados sobre o uso do cliente; você pode encontrar mais informações sobre o UAL no seguinte artigo:

**Visão geral do log de acesso do usuário**  
<https://technet.microsoft.com/library/hh849634.aspx>

Os Serviços de Informações da Internet 8 são fornecidos com uma ferramenta de linha de comando, IISUAL.EXE, que ajuda os administradores de rede a analisar os dados de log do W3C de seus servidores Web para determinar o número de usuários autenticados e anônimos para seus sites. O utilitário IISUAL.EXE fornecerá as informações de acesso do usuário coletadas às APIs UAL no Windows Server 2012 para que os dados estejam disponíveis por meio dos métodos UAL fornecidos por meio do WMI e do PowerShell.

Observação

O utilitário IISUAL.EXE foi projetado para uso somente com arquivos de log que estão no formato W3C; ele não funcionará com arquivos de log em formatos NCSA, IIS ou ODBC.

Dito isto, como a análise de arquivo de log pode ser intensiva em CPU, é recomendável que você não analise seus dados de log em um servidor de produção; o artigo listado acima contém a seguinte observação:

Observação

O UAL não é recomendado para uso em servidores conectados diretamente na Internet, como servidores Web em um espaço de endereço acessível pela Internet, ou nos cenários em que um desempenho extremamente alto é a principal função do servidor (como nos ambientes de carga de trabalho HPC). O UAL destina-se principalmente a cenários de intranet pequenas, médias e empresariais em que o alto volume é esperado, mas não tão alto quanto muitas implantações do Windows Server 2012 que atendem ao volume de tráfego voltado para a Internet regularmente.

### Usando o utilitário IISUAL.EXE

O utilitário IISUAL.EXE está localizado no seguinte diretório:

`%SystemRoot%\System32\inetsrv`

Quando você executar o utilitário IISUAL.EXE sem comutadores de linha de comando, ele retornará a seguinte mensagem de ajuda:

```
HTTP User Access Logging v1.0
Date: Monday, December 21, 2012 9:12:00 PM

Usage: IISUAL.exe -logfile <logfile path> -outputpostfix <string>
Example: IISUAL.exe -logfile c:\inetpub\logs\LogFiles\W3SVC1\sample.log -outputpostfix output
```

Conforme indicado pelo exemplo, IISUAL.EXE dá suporte a dois comutadores de linha de comando:

- ***logfile*** – Essa opção define o nome de um arquivo de log W3C específico a ser analisado.
- ***outputpostfix*** - Essa opção especifica uma cadeia de caracteres que será acrescentada ao nome do arquivo de log W3C de entrada para criar a estatísica de saída.

Por exemplo, se você especificar as seguintes opções:

`IISUAL.EXE -logfile u_ex130319.log -outputpostfix UAL`

IISUAL.EXE analisará o arquivo de log W3C chamado "u\_ex130319.log" para dados de uso do cliente e gravará as estatísticas em um arquivo chamado "u\_ex130319\_UAL.log".

Observação

Por motivos de desempenho, IISUAL.EXE foi projetado para ser usado com um único arquivo de log W3C; IISUAL.EXE não funcionará com caracteres curinga. Por exemplo, o seguinte comando retornará um erro:

`IISUAL.EXE -logfile *.log -outputpostfix UAL`

Se você precisar processar mais de um arquivo de log, poderá usar o seguinte arquivo em lote para fazer loop em todos os arquivos de log em um diretório:

```
@echo off

for /f "usebackq delims=|" %%a in (`dir /b *.log`) do (
    iisual.exe -logfile "%%a" -outputpostfix UAL
)
```

### Examinando os resultados do IISUAL.EXE

Quando você usa IISUAL.EXE para analisar um arquivo de log W3C, ele pesquisará todas as entradas de arquivo de log e usará as informações nos campos "cs-username" e "c-ip" para gerar estatísticas que serão gravadas em um arquivo de saída semelhante ao seguinte formato:

```
HTTP User Access Logging v1.0
Date: Monday, December 21, 2012 9:12:00 PM

Total requests in IIS log:                                              6440
Total requests with authenticated users and valid IP:                   6430 (99.84%)
Total successful UAL API calls for authenticated users with valid IP:   6430 (100% successful)
Total anonymous requests with valid IP:                                 10 (0.16%)
Total successful UAL API calls for anonymous users with valid IP:       10 (100% successful)
```

Essas informações de registro em log do Acesso do Usuário fornecem aos administradores as estatísticas para usuários autenticados versus anônimos para o período definido pelo arquivo de log W3C. Conforme mencionado anteriormente, essas informações são úteis para cenários pequenos, médios e empresariais em que os administradores estão interessados em acompanhar o número de usuários que estão acessando um site da intranet.

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
