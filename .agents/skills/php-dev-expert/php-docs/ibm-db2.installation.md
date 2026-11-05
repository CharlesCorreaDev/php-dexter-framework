# Instalação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ibm-db2.installation.php

---

## Instalação

Para construir a extensão ibm\_db2, os arquivos de cabeçalho de desenvolvimento de aplicativos do DB2
e bibliotecas devem ser instalados no sistema.
O DB2 não os instala por padrão, então pode ser necessário retornar ao
instalador do DB2 e adicionar esta opção.
O DB2 Application Development Client inclui os arquivos de cabeçalho e está disponível gratuitamente
para download no
[» site de suporte](https://www.ibm.com/developerworks/downloads/im/db2express/index.html) do IBM DB2 Universal Database.

Se os arquivos de cabeçalho e bibliotecas de desenvolvimento de aplicativos DB2 forem adicionados a um
sistema operacional Linux ou Unix no qual o DB2 já estava instalado, o comando
**db2iupdt -e** deve ser emitido para atualizar as ligações simbólicas para
os arquivos de cabeçalho e bibliotecas nas instâncias do DB2.

ibm\_db2 é uma extensão [» PECL](https://pecl.php.net/), portanto siga as instruções em
[Instalação das extensões PECL](install.pecl.md) para instalar a extensão ibm\_db2 para PHP.
Emita o comando **configure** para apontar o local dos
arquivos de cabeçalho e bibliotecas do DB2 da seguinte forma:

```
bash$ ./configure --with-IBM_DB2=/path/to/DB2
```

O padrão para o comando **configure** é
/opt/IBM/db2/V8.1.

> **Nota**:
> **Nota para usuários do IIS**  
>
> Se o driver ibm\_db2 estiver sendo usado com o Microsoft Internet Information
> Server (IIS), pode ser necessário fazer o seguinte:
>
> - Instale o DB2 com segurança estendida do sistema operacional.
> - Adicione o caminho do binário do PHP à variável de ambiente do sistema PATH (padrão C:\php\).
> - Crie outra variável de ambiente do sistema igual ao caminho onde o arquivo PHP.INI está localizado (ex.: PHPRC = C:\php\).
> - Adicione o IUSR\_COMPUTERNAME ao grupo DB2USERS.

`↑` and `↓` to navigate •
`Enter` to select •
`Esc` to close • `/` to open

document.addEventListener("DOMContentLoaded", function() {
/\*{{{Search Modal\*/
const language = 'local';
initSearchModal();
initPHPSearch(language).then((searchCallback) => {
initSearchUI({language, searchCallback, limit: 30});
});
/\*}}}\*/
});
