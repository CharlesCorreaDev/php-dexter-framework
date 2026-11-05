# Escondendo o PHP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/security.hiding.php

---

# Escondendo o PHP

Em geral, segurança por obscuridade é uma das maneiras mais fracas de segurança.
Mas em alguns casos, cada pequena medida de segurança extra é desejável.

Algumas técnicas simples podem ajudar a esconder o PHP, possivelmente retardando
um atacante que está tentando descobrir fraquezas no seu
sistema. Configurar a diretiva expose\_php para `off` no
arquivo php.ini, reduz a quantidade de informação disponível aos atacantes.

Outra tática é configurar o servidor web, como o Apache, para
executar tipos de arquivos diferentes pelo PHP, ou por uma diretiva
de arquivo .htaccess, ou no próprio arquivo de configuração do Apache.
É possível usar extensões de arquivos como disfarce:

**Exemplo #1 Escondendo o PHP como outra linguagem**

```
# Fazer código PHP parecer com outros tipos de códigos
AddType application/x-httpd-php .asp .py .pl
```

Ou obscurecer completamente:

**Exemplo #2 Usando extensões desconhecidas para o PHP**

```
# Fazer código PHP parecer com tipos desconhecidos
AddType application/x-httpd-php .bop .foo .133t
```

Ou esconder ele como código HTML, o que tem uma pequena queda de performance
porque todo HTML será avaliado pelo engine do PHP:

**Exemplo #3 Usando extensão HTML para arquivos PHP**

```
# Fazer código PHP parecer com HTML
AddType application/x-httpd-php .htm .html
```

Para isso funcionar efetivamente, deve-se renomear os arquivos PHP com
as extensões acima. Embora seja uma forma de segurança por
obscuridade, é uma pequena medida preventiva e com poucos custos.

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
