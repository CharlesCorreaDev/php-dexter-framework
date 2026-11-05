# Dependências

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ibm-db2.requirements.php

---

## Dependências

Para conectar ao IBM DB2 Universal Database para Linux, UNIX e Windows, ou
IBM Cloudscape, ou Apache Derby, deve-se instalar um cliente IBM DB2 Universal
Database no mesmo computador em que o PHP está sendo executado. A
extensão foi desenvolvida e testada com o DB2 Versão 8.2.

Para conectar ao IBM DB2 Universal Database para z/OS ou iSeries, também
é necessário o IBM DB2 Connect ou o software de gateway DRDA equivalente.

## Requisitos no Linux ou Unix

O usuário que invoca o executável PHP ou SAPI deve especificar a instância do DB2
antes de acessar essas funções. Pode-se definir o nome da instância do DB2
em php.ini usando a opção de configuração `ibm_db2.instance_name`
ou pode-se obter o perfil da instância do DB2 antes
de invocar o executável PHP.

Se foi criada uma instância do DB2 chamada `db2inst1` em
/home/db2inst1/, por exemplo, você pode adicionar a
seguinte linha ao php.ini:

```
ibm_db2.instance_name=db2inst1
```

Se não for definida esta opção em php.ini, deve-se emitir o
comando a seguir para modificar as variáveis ​​de ambiente para habilitar o acesso ao
DB2:

```
bash$ source /home/db2inst1/sqllib/db2profile
```

Para ativar o servidor Web habilitado para PHP para acessar essas funções, deve-se
definir a opção de configuração `ibm_db2.instance_name`
no php.ini ou obter o ambiente da instância DB2 no script de inicialização do servidor
Web (normalmente /etc/init.d/httpd ou
/etc/init.d/apache).

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
