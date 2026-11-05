# Como mudar as configurações

> **Fonte / Source:** https://www.php.net/manual/pt_BR/configuration.changes.php

---

## Como mudar as configurações

### Executando PHP como módulo do Apache

Quando usar o PHP como módulo do Apache, você pode mudar as
configurações usando diretivas nos arquivos de configuração
do Apache (ex.: httpd.conf e .htaccess). Você precisará dos
privilégios "AllowOverride Options" ou "AllowOverride All" para fazer isso.

Há várias diretivas do Apache que permitem que você
mude a configuração do PHP de dentro dos arquivos de configuração
do Apache. Para uma lista de quais diretivas são
**`INI_ALL`**, **`INI_PERDIR`**,
ou **`INI_SYSTEM`**, olhe no apêndice
[Lista de diretivas do arquivo php.ini](ini.list.md).

`php_value` `name` `value`
:   Define o valor da diretiva especificada.
    Pode ser usado apenas com diretivas do tipo **`INI_ALL`** e **`INI_PERDIR`**.
    Para limpar um valor definido anteriormente, use o valor `none`.

    > **Nota**:
    >
    > Não use `php_value` para definir valores booleanos.
    > A diretiva `php_flag` deve ser usada (veja abaixo).

`php_flag` `name` `on|off`
:   Usado para definir uma diretiva de configuração booleana.
    Pode ser usada apenas com diretivas dos tipos **`INI_ALL`** e
    **`INI_PERDIR`**.

`php_admin_value` `name` `value`
:   Define o valor da diretiva especificada.
    Essa diretiva *não pode ser usada* em arquivos .htaccess.
    Qualquer tipo de diretiva definido com `php_admin_value`
    não pode ser sobrescrito pelo .htaccess ou pela função [ini\_set()](function.ini-set.md).
    Para limpar um valor definido anteriormente, use o valor `none`.

`php_admin_flag` `name` `on|off`
:   Usado para definir uma diretiva de configuração booleana.
    Essa diretiva *não pode ser usada* em arquivos .htaccess.
    Qualquer tipo de diretiva definido com `php_admin_flag`
    não pode ser sobrescrito pelo .htaccess ou pela função [ini\_set()](function.ini-set.md).

**Exemplo #1 Exemplo de configuração do Apache**

```
<IfModule mod_php5.c>
  php_value include_path ".:/usr/local/lib/php"
  php_admin_flag engine on
</IfModule>
<IfModule mod_php4.c>
  php_value include_path ".:/usr/local/lib/php"
  php_admin_flag engine on
</IfModule>
```

**Cuidado**

Constantes PHP não existem fora do PHP. Por exemplo, no
arquivo httpd.conf você não pode usar constantes do PHP
como **`E_ALL`** ou **`E_NOTICE`**
para definir a diretiva [error\_reporting](errorfunc.configuration.md#ini.error-reporting),
já que elas não terão significado algum e serão avaliadas como
*0*. Ao invés disso, use os valores de máscara de bits associados.
Essas constantes podem ser usados no php.ini

### Mudando configuração do PHP através do registro do Windows

Quando executar o PHP no Windows, os valores de configuração podem ser
modificados para cada diretório, usando o registro do Windows. Os
valores de configuração são armazenados na chave de registro
`HKLM\SOFTWARE\PHP\Per Directory Values`,
nas sub-chaves correspondentes aos caminhos dos diretórios. Por exemplo,
valores para o diretório `c:\inetpub\wwwroot` estariam
armazenados na chave `HKLM\SOFTWARE\PHP\Per Directory Values\c\inetpub\wwwroot`.
As configurações para o
diretório estarão ativas para qualquer script rodando neste
diretório ou qualquer subdiretório dele. Os valores na chave
devem ter o nome da diretiva de configuração do PHP e um
valor string. Constantes PHP nos valores não são interpretados.
Apenas valores de configuração modificáveis no
**`INI_USER`** podem ser definidos
desta forma, e valores do **`INI_PERDIR`** não podem,
pois esses valores são recarregados em cada request.

### Outras interfaces para PHP

Independente de como você execute PHP, você pode mudar certos valores durante
a execução de seus scripts através da função [ini\_set()](function.ini-set.md). Veja
a documentação na página [ini\_set()](function.ini-set.md) para mais informações.

Se você estiver interessado na lista completa das configurações
definidas no seu sistema com os valores atuais, você pode executar a função
[phpinfo()](function.phpinfo.md), e revisar a página resultante.
Você pode também acessar os valores de configurações
de diretivas individuais em tempo de execução usando as funções
[ini\_get()](function.ini-get.md) ou [get\_cfg\_var()](function.get-cfg-var.md).

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
