# Adicionando tipos MIME do IE 9 ao IIS 7 | Microsoft Learn

> **Fonte / Source:** https://learn.microsoft.com/pt-br/iis/manage/managing-your-configuration-settings/adding-ie-9-mime-types-to-iis

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

# Adicionando tipos MIME do IE 9 ao IIS 7

Comentários

por Randall DuBois

A versão prévia do Microsoft Internet Explorer (IE) versão 9 inclui suporte para tipos MIME adicionais para aplicativos de mídia avançada. Para dar suporte aos tipos MIME adicionais, os tipos MIME devem ser adicionados ao servidor IIS.

Os seguintes tipos de MIME adicionais têm suporte no IE 9:

| Extensão de nome de arquivo | tipo de MIME |
| --- | --- |
| .svg | imagem/svg+xml |
| .xht | aplicação/xhtml+xml |
| .xhtml | application/xhtml+xml |

Para adicionar esses tipos MIME ao servidor IIS, você pode:

- Adicione-os manualmente usando o Gerenciador do IIS. Para obter mais informações, consulte [Configurar tipos MIME no IIS 7 e superior](https://go.microsoft.com/fwlink/?LinkId=64365).
- Atualize seu arquivo de web.config conforme discutido na postagem no blog de Bill Staple [Como adicionar tipos de mime com o IIS7 Web.config](https://blogs.iis.net/bills/archive/2008/03/25/how-to-add-mime-types-with-iis7-web-config.aspx).
- Use o script incluído neste artigo.

## Usando o script AddMimeTypes

Você também pode usar o script incluído neste artigo para adicionar os tipos MIME em versões do Windows, incluindo o Windows 2000 e posterior. O script usa WMI e adicionará os tipos MIME em um servidor local ou remoto.

**Para adicionar tipos MIME para o IE 9 ao servidor IIS usando o script AddMimeTypes:**

1. Crie um novo arquivo de script usando sua ferramenta de criação ou um editor de texto.
2. Copie o conteúdo do arquivo de script da seção a seguir.
3. Cole o conteúdo do script no novo arquivo de script.
4. Salve o arquivo de script como AddMimeTypes.vbs.
5. Em um prompt de comando, digite o seguinte comando:

   ```
   cscript AddMimeTypes.vbs [RemoteServerName]
   ```

   Substitua `[RemoteServerName]`> pelo nome do computador remoto ao qual você deseja adicionar os tipos MIME.

   Observação

   Se a pasta na qual o arquivo de script for salvo não estiver incluída na variável de ambiente **Caminho** , você deverá especificar o caminho completo para o script no comando ou alterar os diretórios para a pasta antes de executar o comando.
6. Verifique se os tipos MIME foram adicionados usando o Gerenciador do IIS.

## O script "AddMimeTypes.vbs"

```
'  File: AddMimeTypes2.vbs 
'  Copyright Microsoft Corp. 2010 
' 
'  This script adds the following Mime types to the root of a local or remote 
'  server. 
' 
'    (0) .svg    image/svg+xml
'    (1) .xht    application/xhtml+xml
'    (2) .xhtml  application/xhtml+xml
'
'  Usage: 
'      cscript AddMimeTypes.vbs [RemoteServerName]
'
'''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''
OPTION EXPLICIT
DIM strServer, objWMIService, objOperatingSystem, colOperatingSystems
DIM osVersion, iisVersion, objMimeMap, objMimeTypes, Mime, i 
DIM objShell, strInetsrvDir, strInetpubScriptsDir
DIM numMimeTypes, numExistingMimes, mimeExists(2)
CONST ADS_PROPERTY_UPDATE = 2
IF WScript.Arguments.Length = 1 THEN
    strServer = WScript.Arguments( 0 )
ELSE
    strServer = "."
END IF
iisVersion = "0"
' What version of Windows and IIS am I using? If I am on IIS 5.x/6 use adsutil.vbs
' If I am on IIS 7 and later use appcmd
SET objWMIService = GetObject("winmgmts:{impersonationLevel=impersonate}" _
    + "!\\" + strServer + "\root\cimv2")
SET colOperatingSystems = _
    objWMIService.ExecQuery("Select * from Win32_OperatingSystem")
FOR EACH objOperatingSystem IN colOperatingSystems
    osVersion = objOperatingSystem.Version
    strInetsrvDir = objOperatingSystem.SystemDirectory + "\inetsrv"
    strInetpubScriptsDir = objOperatingSystem.SystemDrive _
        + "\inetpub\AdminScripts"
NEXT    
IF ( 0 = Strcomp(strServer,".") ) THEN
    strServer = "localhost"
END IF
i = InStr(osVersion,"6.")
IF ( i = 1 ) THEN 
    iisVersion = "7"
END IF
i = InStr(osVersion,"5.")    
IF ( i = 1 ) THEN 
    iisVersion = "5"
END IF
i = InStr(osVersion,"5.2")    
IF ( i = 1 ) THEN 
    iisVersion = "6"
END IF
SET objShell = WScript.CreateObject("WScript.Shell")
SELECT CASE iisVersion
    CASE "7" 
        ' Run appcmd
        objShell.Run(strInetsrvDir + _
        "\appcmd.exe set config -section:system.webServer/staticContent /+_""[fileExtension='.svg',mimeType='image/svg%2Bxml']""")
        objShell.Run(strInetsrvDir + _
        "\appcmd.exe set config -section:system.webServer/staticContent /+""[fileExtension='.xht',mimeType='application/xhtml%2Bxml']""")
        objShell.Run(strInetsrvDir + _
        "\appcmd.exe set config -section:system.webServer/staticContent /+""[fileExtension='.xhtml',mimeType='application/xhtml%2Bxml']""")
        
    CASE "6", "5"
        ' Use ADSI to add the MIME types. 
        ' Can't use adsutil because they will destructively overwrite instead of appending
        SET objMimeMap = GetObject( "IIS://" + strServer + "/MimeMap" )
        objMimeTypes = objMimeMap.GetEx("MimeMap")
        ' Check to see if the MIME types already exist
        mimeExists(0)=0
        mimeExists(1)=0
        mimeExists(2)=0
        numExistingMimes=0
        CheckIfMimeTypeExists(objMimeMap)
        numExistingMimes=mimeExists(0)+mimeExists(1)+mimeExists(2)
        IF ( 3 = numExistingMimes ) THEN
            WScript.Echo("All extensions currently have mime types registered. Complete.")
            WScript.Quit
        END IF
        ' For extensions that don't have registered MIME types, add them
        numMimeTypes = UBound(objMimeTypes)
        REDIM PRESERVE objMimeTypes(numMimeTypes+3-numExistingMimes)
        i = numMimeTypes+1
        IF ( 0 = mimeExists(0) ) THEN
            SET objMimeTypes(i) = CreateObject("MimeMap")
            objMimeTypes(i).Extension = ".svg"
            objMimeTypes(i).MimeType = "image/svg+xml"
            i = i+1
        ELSE
            WScript.Echo("Mime type for .svg already exists")
        END IF
        IF ( 0 = mimeExists(1) ) THEN
            SET objMimeTypes(i) = CreateObject("MimeMap")
            objMimeTypes(i).Extension = ".xht"
            objMimeTypes(i).MimeType = "application/xhtml+xml"
            i=i+1
        ELSE
            WScript.Echo("Mime type for .xht already exists")
        END IF    
        IF ( 0 = mimeExists(2) ) THEN
            SET objMimeTypes(i) = CreateObject("MimeMap")
            objMimeTypes(i).Extension = ".xhtml"
            objMimeTypes(i).MimeType = "application/xhtml+xml"
        ELSE
            WScript.Echo("Mime type for .xhtml already exists")    
        END IF
            
        objMimeMap.PutEx ADS_PROPERTY_UPDATE, "MimeMap", objMimeTypes 
        objMimeMap.SetInfo()
    CASE ELSE
        WScript.Echo("Unsupported IIS version")
END SELECT

SUB CheckIfMimeTypeExists(MimeMap)
    objMimeTypes = MimeMap.GetEx("MimeMap")
    FOR EACH Mime IN objMimeTypes
        SELECT CASE LCase(Mime.Extension)
            CASE ".svg"
                mimeExists(0) = 1
            CASE ".xht"
                mimeExists(1) = 1
            CASE ".xhtml"
                mimeExists(2) = 1
        END SELECT
    NEXT  
END SUB
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
