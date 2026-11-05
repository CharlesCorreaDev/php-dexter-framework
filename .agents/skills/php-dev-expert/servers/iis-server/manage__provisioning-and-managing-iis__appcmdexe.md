# AppCmd.exe | Microsoft Learn

> **Fonte / Source:** https://learn.microsoft.com/pt-br/iis/manage/provisioning-and-managing-iis/appcmdexe

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

# AppCmd.exe

Comentários

por [Walter Oliver](https://github.com/walterov)

## Introdução

AppCmd.exe pode ser usado para provisionar sites e executar muitos comandos para editar a configuração.

## Criando e configurando

Use os exemplos de código a seguir para implementar AppCmd.exe.

**Para criar um site e um pool de aplicações (com o rastreamento de solicitações com falha e locais dos arquivos de log do W3svc)**

```
%windir%\system32\inetsrv\Appcmd add AppPool -name:%poolname% -processModel.username:%poolaccount% -processModel.password:%poolaccountpwd% -enable32BitAppOnWin64:true
```

```
%windir%\system32\inetsrv\AppCmd add site -name:%sitename% -bindings:http/*:80:%sitename% -physicalPath:%sitepath% -logfile.directory:%W3svclogpath% -traceFailedRequestsLogging.directory:%FREBlogpath%
```

```
%windir%\system32\inetsrv\Appcmd set app -app.name:%sitename%/ -applicationPool:%poolname%
```

**Para configurar o local do arquivo de log de Rastreamento de Solicitação com Falha**

```
%windir%\system32\inetsrv\AppCmd set config <sitename> -section:traceFailedRequestsLogging.directory:\\remoteserver\content$\<sitename>\logs\failedReqLog
```

**Para configurar o local do arquivo de log do W3SVC**

```
%windir%\system32\inetsrv\AppCmd set config <sitename> -section:-logfile.directory:\\remotefileshare\content$\<sitename>\logs\logfiles
```

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
