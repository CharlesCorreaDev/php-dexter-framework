# Outros exemplos de código gerenciado | Microsoft Learn

> **Fonte / Source:** https://learn.microsoft.com/pt-br/iis/manage/provisioning-and-managing-iis/other-managed-code-samples

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

# Outros exemplos de código gerenciado

Comentários

por [Walter Oliver](https://github.com/walterov)

## Introdução

Use os exemplos de código gerenciado a seguir para definir permissões e criar uma conta de usuário.

## Usando o código

### Definir permissões

Use o seguinte para definir permissões em uma pasta usando o código gerenciado **.**

Observação

Uma referência a System.DirectoryServices.dll é necessária.

```
using System;
using System.IO;
using System.DirectoryServices;
using System.Security.AccessControl;
using System.Security.Principal;

class Program
{
    static void Main(string[] args)
    {
        String dir = @"e:\content";
        DirectorySecurity dirsec = Directory.GetAccessControl(dir);
        dirsec.SetAccessRuleProtection(true, false);
        foreach (AuthorizationRule rule in dirsec.GetAccessRules(true, true, typeof(NTAccount)))
        {
        dirsec.RemoveAccessRuleAll(new FileSystemAccessRule(rule.IdentityReference, FileSystemRights.FullControl, AccessControlType.Allow));
        }
    dirsec.AddAccessRule(new FileSystemAccessRule(@"BUILTIN\Administrators", FileSystemRights. FullControl,AccessControlType.Allow));
    dirsec.AddAccessRule(new FileSystemAccessRule(@"BUILTIN\Administrators", FileSystemRights.FullControl, InheritanceFlags.ObjectInherit, PropagationFlags.InheritOnly, AccessControlType.Allow));
    dirsec.AddAccessRule(new FileSystemAccessRule(@"BUILTIN\Administrators", FileSystemRights.FullControl, InheritanceFlags.ContainerInherit, PropagationFlags.InheritOnly, AccessControlType.Allow));
    Directory.SetAccessControl(dir, dirsec);
    }
}
```

### Criar uma conta de usuário

Use o seguinte para criar uma conta de usuário usando código gerenciado.

```
using System;
using System.DirectoryServices;
class Program
{
    static void Main(string[] args)
    {
        DirectoryEntry AD = new DirectoryEntry("WinNT://" + Environment.MachineName + ",computer");
        DirectoryEntry NewUser = AD.Children.Add("PoolID1", "user");
        NewUser.Invoke("SetPassword", new object[] { "PoolIDPwd1" });
        NewUser.Invoke("Put", new object[] { "Description", "AppPool Account" });
        NewUser.CommitChanges();
    }
}
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
  2026-03-27
